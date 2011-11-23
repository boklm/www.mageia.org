<?php
/**
*/

$product = isset($_GET['product']) ? trim(strtolower($_GET['product'])) : null;
$torrent = isset($_GET['torrent']) ? true : false;
$mirror  = isset($_GET['mirror']) ? trim(strtolower($_GET['mirror'])) : null;

function get($s) {
    return isset($_GET[$s]) ? trim($_GET[$s]) : null;
}

define('HLANG', true);
require '../../langs.php';
require 'locales.php';

$_t = i18n::get_strings($_t, $locale, $i18n_fallback_rules);

require 'lib.php';

session_start();

if (!is_null($product)) {
    $found = false;
    foreach ($prods as $k => $p) {
        if ($product == sprintf('%s-%s', $glob['prefix'], $k)
            || $product == $k) {
            $found = true;
            break;
        }
    }
}

// TODO: if (!is_valid_product($product, $productsList))
if (!$found) {
    header('Location: /downloads/');
    die;
}
include '../../lib/Downloads.php';

$g_mirrors   = Downloads::get_all_mirrors();
$product_iso = $product . '.iso';

$wsd = new Downloads();
$a = $wsd->prepare_download(true, get('country'));
$product_dl_link = null;

if ($torrent) {
    if (isset($p['torrent'])) {
        $product_dl_link = $p['torrent'];
        $dl_link = sprintf('%s/%s', $a['mirror_url'], $p['torrent']);
    }
    else {
        header('Location: /downloads/');
        die;
    }
}
else {
    $product_dl_link = isset($p['path']) ?
        $p['path'] :
        sprintf('iso/1/%s', $product_iso);

    $dl_link = sprintf('%s/%s', $a['mirror_url'], $product_dl_link);
}

$title = 'Mageia 1';
if (isset($p['page_title']))
    $title = $p['page_title'];
    
$_t['page_h1'] = sprintf($_t['page_h1'], '<em class="tag">' . $title . '</em>');
$_t['page_title'] = sprintf($_t['page_title'], '<em class="tag">' . $title . '</em>');

$dl_alt_mirrors_table = '';

$g_mirs2 = array();
foreach ($g_mirrors as $country => $mirs):
    foreach ($mirs as $mir):
        $g_mirs2[$countries[$country]][$mir['city']][] = $mir['url'];
    endforeach;
endforeach;

$g_mirrors = $g_mirs2;
ksort($g_mirrors);

foreach ($g_mirrors as $country => $cities):
    foreach ($cities as $city => $mirrors) {
        $mirs = array();
        foreach ($mirrors as $m) {
            $pm = parse_url($m);
            $alt_dl_link = sprintf('%s/%s', $m, $product_dl_link);
            $mirs[] = sprintf('%s://<a href="%s" rel="nofollow">%s</a>',
                $pm['scheme'], $alt_dl_link, $pm['host']);
        }
        $dl_alt_mirrors_table .= sprintf('<tr><td nowrap>%s</td><td>%s</td><td>%s</td></tr>', $country, $city, implode(', ', $mirs));
    }
endforeach;

$dl2_mirror_alt = sprintf($_t['dl_mirror_loc'],
        $a['mirror_url'], $a['mirror_host'], $countries[$a['country']], $a['country'])
    . ' ' . $_t['dl_alt_mirrors'];

?><!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8" />
    <title><?php echo $title; ?> | Mageia Downloads</title>
    <meta name="robots" content="noindex,nofollow,nosnippet">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" >
    <?php include '../../analytics.php'; ?>
    <?php if (!is_null($dl_link)): ?>
    <script>(function () { setTimeout("document.location='<?php echo $dl_link; ?>';", 3000); })();</script>
    <?php endif; ?>
</head>
<body>
    <?php echo $hsnav; ?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">&nbsp;</span> <span class="subh"><?php echo $_t['page_h1']; ?></span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g"><div class="para">
                <h2><?php echo $_t['page_title']; ?></h2>
                <p><?php
                    echo
                        sprintf($_t['dl_shld_start'], '<em class="tag">' . $p['name'] . '</em>' . ($torrent ? ' (torrent)' : '')),
                        ' ', sprintf($_t['dl_size'], $p['size']),
                        ' ', sprintf($_t['alt_download'], $dl_link, $dl_link);
                ?></p>

                <div class="dlinfo">
                    <p><?php echo $dl2_mirror_alt; ?></p>
                    <?php if (isset($p['md5']) && !$torrent): ?>
                <p><?php echo $_t['signs_check_1']; ?></p>
                <div id="check-signs">
                <pre class="term">
<?php if (isset($p['md5'])): ?>$ md5sum <?php echo basename($product_dl_link), "\n", $p['md5'], "\n"; endif; ?>

<?php if (isset($p['sha1'])): ?>$ sha1sum <?php echo basename($product_dl_link), "\n", $p['sha1'], "\n"; endif; ?>
</pre>
                <p><?php echo $_t['signs_check_2']; ?></p>
                </div>
                    <?php endif; ?>
                </div>
                <table class="dlt2 dlinfo" id="other_mirrors" style="display: none;">
                    <thead><tr><th><?php echo $_t['Country']; ?></th>
                        <th><?php echo $_t['City']; ?></th>
                        <th><?php echo $_t['Download mirrors']; ?></th></tr></thead>
                    <tbody><?php echo $dl_alt_mirrors_table; ?></tbody>
                </table>

                <hr />
        </div></div>
        <div class="yui-g">
            <div class="yui-u first"><div class="para">
                <h2>Thank <em>you</em>!</h2>
                ...
                <hr>
                <h2>Spread the word!</h2>
                <p><?php include 'dl_twitter.php'; echo dl_twitter($locale); ?></p>
                
                <hr>
            </div></div>
            <div class="yui-u"><div class="para">
                <h2>Need some help? Talk to us!</h2>
                <p><?php echo $_t['give_feedback']; ?></p>
                <p><?php echo $_t['report_bug'];  ?></p>
                <hr>
                <h2><?php echo sprintf($_t['wanttohelp?'], '<strong><a href="http://mageia.org/contribute/">', '</a></strong>'); ?></h2>
                <hr>
            </div></div>
        </div>
    </div>
<script>
document.getElementById("other_mirrors_btn").onclick = function () {
    var el = document.getElementById("other_mirrors");
    el.style.display = (el.style.display != 'none' ? 'none' : '' );
};
</script>
</body>
</html>
