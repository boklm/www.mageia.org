<?php
/**
 * Main download redirector.
 *
 * Takes these data:
 * - product to download (GET[product])
 * - download mode (normal or GET[torrent] is set)
 * - products whitelist with a checksum for each one
 * - list of available up-to-date mirrors for this product

product:
    id
    name
    checksums
    size

mirror(product):
    name
    host
    country
    city
    speed
    link

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
require '../locales.php';

$_t = i18n::get_strings($_t, $locale, $i18n_fallback_rules);

session_start();

$download    = null;
$js_redirect = null;
$reason      = null;

try {
    // TODO simplify and wrap all this in a single interface:
    // list(dl_template, mirrors) = get_download_options_for(product)
    include '../../../lib/Downloads.php';
    $product     = get_info_for_product($product);
    $all_mirrors = get_mirrors_for($product['file'], 'en', get('country'));
    $one_mirror  = $all_mirrors[0];
    $alt_mirrors = $all_mirrors[1];

    $download_tmpl = get_download_link($product, $torrent);
    $download      = str_replace('$MIRROR', $one_mirror['mirror_url'], $download_tmpl);

    // TODO do not redirect if it's a bot!
    $js_redirect = sprintf('<script>(function(){setTimeout("document.location=\'%s\';", 3000);})();</script>',
        $download);

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
    foreach ($g_mirs2 as $country => $cities):
        $s = array();
        foreach ($cities as $city => $mirrors2) {
            $mirs = array();
            foreach ($mirrors2 as $m) {
                $pm = parse_url($m);
                $alt_dl_link = str_replace('$MIRROR', $m, $download_tmpl);
                $mirs[] = sprintf('%s://<a href="%s" rel="nofollow">%s</a>',
                    $pm['scheme'], $alt_dl_link, $pm['host']);
            }
            $s[] = sprintf('<td>%s</td><td>%s</td>', rewrite_city($city), implode(', ', $mirs));
        }
        $alternative_mirrors .= sprintf('<tr><td rowspan="%d">%s</td>%s</tr>', count($cities), $country, implode('</tr><tr>', $s));
    endforeach;

    $dl2_mirror_alt = sprintf($_t['dl_mirror_loc'],
            $one_mirror['mirror_url'],
            $one_mirror['mirror_host'],
            rewrite_city($one_mirror['city']) . ', ' . $countries[$one_mirror['country']],
            $one_mirror['country'])
        . ' ' . $_t['dl_alt_mirrors'];
}
catch (NoProductFoundError $e) {
    // sorry, no such product found/available. redirect?
    $reason = 'This file is not available for download.';
}
catch (NoMirrorFoundError $e) {
    // sorry, not mirror found. next time?
    $reason = 'No mirror found for this file to download.';
}
catch (Exception $e) {
    $reason = 'I do not know either!';
}

if (!$download) {
    header('HTTP/1.0 404 Not Found');
    header('Status: 404 Not Found');
    $title = '404 Not Found';
    $js_redirect = null;
}
else {
    $title = $product['name'];
}

if ($debug)
    $js_redirect = null;

$_t['page_h1']    = sprintf($_t['page_h1'], '<em class="tag">' . $title . '</em>');
$_t['page_title'] = sprintf($_t['page_title'], '<em class="tag">' . $title . '</em>');

?><!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?> | Mageia Downloads</title>
    <meta name="robots" content="noindex,nofollow,nosnippet">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <?php if (!isset($_ENV['APP_MODE']) || $_ENV['APP_MODE'] == 'prod') {
        include '../../../analytics.php';
        echo $js_redirect;
    } ?>
</head>
<body class="downloads">
    <?php echo $hsnav; ?>
    <h1 id="mgnavt"><?php _e('page_title')?></h1>
    <div id="doc4" class="yui-t7">
        <div id="bd" role="main">
            <?php if (!is_null($download)): ?>
                <div class="yui-g"><div class="para" style="padding-top: 2em;">
                <p><?php
                    echo
                        sprintf($_t['dl_shld_start'], '<em class="tag">' . $product['name'] . '</em>' . ($torrent ? ' (torrent)' : '')),
                        ' ', sprintf($_t['dl_size'], $product['size']),
                        ' ', sprintf($_t['alt_download'], $download, $download);
                ?></p>

                <div class="dlinfo">
                    <p><?php echo $dl2_mirror_alt; ?></p>
                    <?php
                    if (((isset($product['md5']) && strlen($product['md5']) > 0)
                        || (isset($product['sha1'])) && strlen($product['sha1']) > 0)
                        && !$torrent): ?>
                        <p><?php echo $_t['signs_check_1']; ?></p>
                        <div id="check-signs">
                            <pre class="term">
<?php if (strlen($product['md5'])): ?>$ md5sum <?php echo basename($download), "\n<strong>", $product['md5'], "</strong>\n"; endif; ?>

<?php if (strlen($product['sha1'])): ?>$ sha1sum <?php echo basename($download), "\n<strong>", $product['sha1'], "</strong>\n"; endif; ?>
</pre>
                            <p><?php echo $_t['signs_check_2']; ?></p>
                        </div>
                    <?php endif; ?>
                    <p><?php echo sprintf($_t['your ip address is'],
                        $_SESSION['ip'], $_SESSION['country'], $_SESSION['continent']); ?>
                </div>

                <!-- alternative mirrors table -->
                <table class="dlt2 dlinfo" id="other_mirrors" style="display: none;">
                    <thead><tr><th><?php echo $_t['Country']; ?></th>
                        <th><?php echo $_t['City']; ?></th>
                        <th><?php echo $_t['Download mirrors']; ?></th></tr></thead>
                    <tbody><?php echo $alternative_mirrors; ?></tbody>
                </table>

                <hr />

                
                </div></div>
                <div class="yui-g" style="border-top: 1px solid #ddd;">
                    <div class="yui-g first"><div class="para">
                    </div></div>
                    <div class="yui-g" style="border-left: 1px solid #ddd"><div class="para">
                        <p><?php echo sprintf($_t['thank-you-note'], 'http://mirrors.mageia.org/', '/en/thank-you/'); ?></p>
                        <p><?php echo sprintf($_t['wanttohelp?'], '<a href="../../contribute/">', '</a>'); ?></p>
                    </div></div>
                </div>
                
            <?php else: ?>
                <div class="yui-g"><div class="para" style="padding-top: 2em;">
                    <h2>Sorry! :-(</h2>
                    <p><?php echo sprintf($_t['dl-failed-try-again'], '/downloads/'); ?></p>

                    <p><?php echo sprintf($_t['dl-failed-tell-us']); ?></p>
                    <ul>
                        <li>directly on <a href="irc://irc.freenode.net/#mageia-web">#mageia-web on Freenode IRC</a>,</li>
                        <li>or <a href="http://twitter.com/mageia_org">via our Tweeter account</a>,</li>
                        <li>or with a <a href="https://www.mageia.org/mailman/listinfo/mageia-webteam">notice on the Web team mailing-list</a>,</li>
                        <li>or a <a href="https://bugs.mageia.org/">bug report</a>.</li>
                    </ul>
                    
                    <p>You may embed this debug info if you like:</p>
                    <pre class="term small"><?php echo $reason, "\n", (json_encode(strip_tags($_GET))); ?></pre>
                    <p>Thanks!</p>
                    <p><a href="/">&laquo; back to that awesome Mageia home page</a></p>
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
