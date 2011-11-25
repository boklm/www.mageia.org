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
    $product     = get_info_for_product($product);
    $all_mirrors = get_mirrors_for($product['file'], 'en', get('country'));
    $one_mirror  = $all_mirrors[0];
    $alt_mirrors = $all_mirrors[1];

    $path     = $product['path'] . '/' . $product['file'];
    $download = $one_mirror['mirror_url'] . '/' . $path;
    
    $js_redirect = sprintf('<script>(function(){setTimeout("document.location=\'%s\';", 3000);})();</script>',
        $download);

    $g_mirs2 = array();
    foreach ($alt_mirrors as $country => $mirs):
        foreach ($mirs as $mir):
            $g_mirs2[$countries[$country]][$mir['city']][] = $mir['url'];
        endforeach;
    endforeach;

    ksort($g_mirs2);

    $alternative_mirrors = '';
    foreach ($g_mirs2 as $country => $cities):
        foreach ($cities as $city => $mirrors2) {
            $mirs = array();
            foreach ($mirrors2 as $m) {
                $pm = parse_url($m);
                $alt_dl_link = $m . '/' . $path;
                $mirs[] = sprintf('%s://<a href="%s" rel="nofollow">%s</a>',
                    $pm['scheme'], $alt_dl_link, $pm['host']);
            }
            $alternative_mirrors .= sprintf('<tr><td nowrap>%s</td><td>%s</td><td>%s</td></tr>', $country, $city, implode(', ', $mirs));
        }
    endforeach;

    $dl2_mirror_alt = sprintf($_t['dl_mirror_loc'],
            $one_mirror['mirror_url'],
            $one_mirror['mirror_host'],
            $one_mirror['city'] . ', ' . $countries[$one_mirror['country']],
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
<body>
    <?php echo $hsnav; ?>
    <div id="doc4" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">&nbsp;</span>
            <span class="subh"><?php echo $_t['page_h1']; ?></span></h1></div>
        <div id="bd" role="main">
            <?php if (!is_null($download)): ?>
                <div class="yui-g"><div class="para">
                    
                <h2><?php echo $_t['page_title']; ?></h2>
                <p><?php
                    echo
                        sprintf($_t['dl_shld_start'], '<em class="tag">' . $product['name'] . '</em>' . ($torrent ? ' (torrent)' : '')),
                        ' ', sprintf($_t['dl_size'], $product['size']),
                        ' ', sprintf($_t['alt_download'], $download, $download);
                ?></p>

                <div class="dlinfo">
                    <p><?php echo $dl2_mirror_alt; ?></p>
                    <?php if (((isset($product['md5']) && strlen($product['md5']) > 0)
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
                </div>

                <!-- alternative mirrors table -->
                <table class="dlt2 dlinfo" id="other_mirrors" style="display: none;">
                    <thead><tr><th><?php echo $_t['Country']; ?></th>
                        <th><?php echo $_t['City']; ?></th>
                        <th><?php echo $_t['Download mirrors']; ?></th></tr></thead>
                    <tbody><?php echo $alternative_mirrors; ?></tbody>
                </table>

                <hr />
                <p>The making and the distribution of Mageia worldwide is made possible by all
                    the <a href="http://mirrors.mageia.org/">people and organizations that mirror our software</a>
                    and that <a href="/en/thank-you/">donate money, hardware, hosting and more</a>.
                    <?php echo sprintf($_t['wanttohelp?'], '<a href="http://mageia.org/contribute/">', '</a>'); ?></p>
                </div></div>
            <?php else: ?>
                <div class="yui-g"><div class="para">
                    <h2>Sorry! :-(</h2>
                    <p>Your download could not complete, as we could not find this file.
                        Please try again from the <a href="/downloads/">main downloads page</a>.</p>

                    <p>If you still encounter this error and think IT SHOULD NOT HAPPEN &ndash; please tell us:</p>
                    <ul>
                        <li>directly on <a href="irc://irc.freenode.net/#mageia-web">#mageia-web on Freenode IRC</a>,</li>
                        <li>or <a href="http://twitter.com/mageia_org">via our Tweeter account</a>,</li>
                        <li>or with a <a href="https://www.mageia.org/mailman/listinfo/mageia-webteam">notice on the Web team mailing-list</a>,</li>
                        <li>or a <a href="https://bugs.mageia.org/">bug report</a>.</li>
                    </ul>
                    
                    <p>You may embed this debug info if you like:</p>
                    <pre class="term small"><?php echo $reason, "\n", (json_encode($_GET)); ?></pre>
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
</body>
</html>
