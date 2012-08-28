<?php
/**
 * Main download redirector.
 *
 * Takes these data:
 * - product to download (GET[product])
 * - download mode (normal or GET[torrent] is set)
 * - products whitelist with a checksum for each one
 * - list of available up-to-date mirrors for this product
 *
 * product:
 * - id
 * - name
 * - checksums
 * - size
 *
 * mirror(product):
 * - name
 * - host
 * - country
 * - city
 * - speed
 * - link
 *
 *
 * PHP version 5.4
 *
 * @category Mageia
 * @package  Mageia\Web\www
 * @author   rda <rda@mageia.org>
 * @license  http://www.gnu.org/licenses/gpl-2.0.html GPL-2+
 * @link     http://www.mageia.org/
 *
*/

require 'lib.php';

// request
$product = get('q');
$debug   = get('d');
$torrent = isset($_GET['torrent']) ? true : false;

if (is_null($product)) {
    header('Location: /downloads/');
    die;
}

define('HLANG', true);
require '../../../langs.php';

_lang_load($locale, "downloads/get");

session_start();

$download    = null;
$js_redirect = null;
$reason      = null;

try {
    // TODO simplify and wrap all this in a single interface:
    // list(dl_template, mirrors) = get_download_options_for(product)
    // Step 1.
    include '../../../lib/Downloads.php';
    $product     = get_info_for_product($product);
    $all_mirrors = get_mirrors_for($product['file'], 'en', get('country'));
    $one_mirror  = $all_mirrors[0];
    $alt_mirrors = $all_mirrors[1];
    $download_tmpl = get_download_link($product, $torrent);

    // Step 2. Make the actual download link against the preferred mirror returned.
    $download = str_replace('$MIRROR', $one_mirror['mirror_url'], $download_tmpl);

    // TODO do not redirect if it's a bot!
    $js_redirect = sprintf(
        '<script>(function(){setTimeout("document.location=\'%s\';", 3000);})();</script>',
        $download
    );

    // Step 3. Build alternative mirrors list of links (URL manipulation, HTML)
    $g_mirs2 = array();
    foreach ($alt_mirrors as $country => $mirs):
        if (substr($country, 0, 3) == '_C:')
            continue;

        foreach ($mirs as $mir):
            $g_mirs2[$countries[$country]][$mir['city']][] = $mir['url'];
        endforeach;
    endforeach;

    ksort($g_mirs2);

    $alternative_mirrors = '';
    foreach ($g_mirs2 as $country => $cities) {
        $s = array();
        foreach ($cities as $city => $mirrors2) {
            $mirs = array();
            foreach ($mirrors2 as $m) {
                $pm = parse_url($m);
                $alt_dl_link = str_replace('$MIRROR', $m, $download_tmpl);
                $mirs[] = sprintf(
                    '%s://<a href="%s" rel="nofollow">%s</a>',
                    $pm['scheme'], $alt_dl_link, $pm['host']
                );
            }
            $s[] = sprintf('<td>%s</td><td>%s</td>', rewrite_city($city), implode(', ', $mirs));
        }
        $alternative_mirrors .= sprintf('<tr><td rowspan="%d">%s</td>%s</tr>', count($cities), $country, implode('</tr><tr>', $s));
    }

    // Feedback about current mirror location + trigger for alt mirrors.
    $dl2_mirror_alt = sprintf(
        _t('This <a href="%s">%s</a> download mirror is located in %s (%s).'),
        $one_mirror['mirror_url'],
        $one_mirror['mirror_host'],
        rewrite_city($one_mirror['city']) . ', ' . $countries[$one_mirror['country']],
        $one_mirror['country']
    )
    . ' ' . _t('If it does not work well for you, <a href="#om" id="other_mirrors_btn">check out these other mirrors</a>.');


    // at the end of this block we expect the following vars to be available from here:
    // - $product (mixed)
    // - $download (URL)
    // - $js_redirect (JS snippet)
    // - $alternative_mirrors (HTML snippet)
    // - $dl2_mirror_alt (HTML snippet)
}
catch (NoProductFoundError $e) {
    // sorry, no such product found/available. redirect?
    $reason = 'This file is not available for download.';
}
catch (NoMirrorFoundError $e) {
    // sorry, no mirror found. next time?
    $reason = 'No mirror found for this file to download.';
}
catch (Exception $e) {
    // don't translate $reason as it's for debuging purposes
    $reason = 'I do not know either!';
}

if (!$download) {
    header('HTTP/1.0 404 Not Found');
    header('Status: 404 Not Found');
    header('Cache-Control: public, max-age=600, s-max-age=900');
    $title       = '404 Not Found';
    $js_redirect = null;
} else {
    header('Pragma: no-cache');
    header('Cache-Control: s-maxage=0, max-age=0, must-revalidate, no-cache');
    $title = $product['name'];
}

if ($debug)
    $js_redirect = null;

?><!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?> | <?php _e('Mageia Downloads') ?></title>
    <meta name="robots" content="noindex,nofollow,nosnippet">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <?php
if (!isset($_ENV['APP_MODE']) || $_ENV['APP_MODE'] == 'prod') {
    include '../../../analytics.php';
    echo $js_redirect;
}
    ?>
</head>
<body class="downloads">
    <?php echo $hsnav; ?>
    <h1 id="mgnavt"><?php echo sprintf(_t('Download %s'), '<em class="tag">' . $title . '</em>')?></h1>
    <div id="doc4" class="yui-t7">
        <div id="bd" role="main">
            <?php if (!is_null($download)): ?>
                <div class="yui-g"><div class="para" style="padding-top: 2em;">
                <p><?php
                    echo
                        sprintf(_t('Your download of %s should start within a few seconds'), '<em class="tag">' . $product['name'] . '</em>' . ($torrent ? ' (torrent)' : '')),
                        ' ', sprintf(_t('(download size is about %s).'), $product['size']),
                        ' ', sprintf(_t('If the download does not start, <a href="%s" rel="nofollow" title="%s">click here</a>.'), $download, $download);
                ?></p>

                <div class="dlinfo">
                    <p><?php echo $dl2_mirror_alt; ?></p>
                    <?php
                    if (((isset($product['md5']) && strlen($product['md5']) > 0)
                        || (isset($product['sha1'])) && strlen($product['sha1']) > 0)
                        && !$torrent
                    ): ?>
                        <p><?php _e('As soon as your download is complete, you should check that the signatures match:') ?></p>
                        <div id="check-signs">
                            <pre class="term">
<?php if (strlen($product['md5'])): ?>$ md5sum <?php echo basename($download), "\n<strong>", $product['md5'], "</strong>\n"; endif; ?>

<?php if (strlen($product['sha1'])): ?>$ sha1sum <?php echo basename($download), "\n<strong>", $product['sha1'], "</strong>\n"; endif; ?>
</pre>
                            <p><?php _e('If signatures do not match, <strong>DO NOT use this ISO</strong>. Double-check and try to download again.'); ?></p>
                            <!-- TODO (rda): add direct download links to checksum and signature files as a backup. -->
                        </div>
                    <?php endif; ?>
                    <p><?php
                    echo sprintf(
                        _t('Your IP address is %s and you seem to be in %s, %s.'),
                        $_SESSION['ip'], $_SESSION['country'], $_SESSION['continent']
                    );
                    ?></p>
                </div>

                <!-- alternative mirrors table -->
                <table class="dlt2 dlinfo" id="other_mirrors" style="display: none;">
                    <thead><tr><th><?php _e('Country'); ?></th>
                        <th><?php _e('City'); ?></th>
                        <th><?php _e('Download mirrors'); ?></th></tr></thead>
                    <tbody><?php echo $alternative_mirrors; ?></tbody>
                </table>

                <hr />

                
                </div></div>
                <div class="yui-g" style="border-top: 1px solid #ddd;">
                    <div class="yui-g first"><div class="para">
                    </div></div>
                    <div class="yui-g" style="border-left: 1px solid #ddd"><div class="para">
                        <p><?php echo sprintf(_t('The making and the distribution of Mageia worldwide is made possible by all the <a href="%s">people and organizations that mirror our software</a> and that <a href="%s">donate money, hardware, hosting and more</a>.'), 'http://mirrors.mageia.org/', '../../thank-you/'); ?></p>
                        <p><?php echo sprintf(_t('Want to help? %sJoin Us!%s'), '<a href="../../contribute/">', '</a>'); ?></p>
                    </div></div>
                </div>
            <?php else: ?>
                <div class="yui-g"><div class="para" style="padding-top: 2em;">
                    <h2><?php _e('Sorry!'); ?> :-(</h2>
                    <p><?php echo sprintf(_t('Your download could not complete, as we could not find this file. Please try again from the <a href="%s">main downloads page</a>.'), '../../downloads/'); ?></p>

                    <p><?php echo sprintf(_t('If you still encounter this error and think IT SHOULD NOT HAPPEN &ndash; please tell us:')); ?></p>
                    <ul>
                        <li><?php _e('directly on <a href="irc://irc.freenode.net/#mageia-web">#mageia-web on Freenode IRC</a>,'); ?></li>
                        <li><?php _e('or <a href="http://twitter.com/mageia_org">via our Tweeter account</a>,'); ?></li>
                        <li><?php _e('or with a <a href="https://www.mageia.org/mailman/listinfo/mageia-webteam">notice on the Web team mailing-list</a>,'); ?></li>
                        <li><?php _e('or a <a href="https://bugs.mageia.org/enter_bug.cgi?product=Websites&format=guided&component=www.mageia.org">bug report</a>.'); ?></li>
                    </ul>
                    
                    <p><?php _e('You may embed this debug info if you like:'); ?></p>
                    <pre class="term small"><?php echo $reason, "\n", (json_encode(strip_tags($_GET))); ?></pre>
                    <p><?php _e('Thanks!'); ?></p>
                    <p><a href="/<?php echo $locale; ?>">&laquo; <?php _e('back to that awesome Mageia home page'); ?></a></p>
                </div></div>
            <?php endif; ?>
    </div>
<script>
document.getElementById("other_mirrors_btn").onclick = function () {
    var el = document.getElementById("other_mirrors");
    el.style.display = (el.style.display != 'none' ? 'none' : '' );
};
</script>
<div class="yui-gb" style="border-top: 1px solid #ccc; background:#f8fcff; text-align: center;">
    <div class="yui-u first"><div class="para" style="background: transparent;">
        <a href="https://twitter.com/mageia_org" class="twitter-follow-button" data-show-count="true" data-lang="<?php echo $locale; ?>">Follow @mageia_org</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div></div>
    <div class="yui-u"><div class="para" style="background: transparent;">
        <g:plusone href="http://mageia.org/"></g:plusone>
    </div></div>
    <div class="yui-u"><div class="para" style="background: transparent;">
        <div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:facepile href="facebook.com/Mageia" width="270" max_rows="1"></fb:facepile>
    </div></div>
</div>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
  {lang: '<?php echo $locale; ?>'}
</script>
</body>
</html>
