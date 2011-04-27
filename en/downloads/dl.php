<?php
/**
*/

$product = isset($_GET['product']) ? trim(strtolower($_GET['product'])) : null;
$torrent = isset($_GET['torrent']) ? true : false;
$mirror  = isset($_GET['mirror']) ? trim(strtolower($_GET['mirror'])) : null;

include '../../mirrors2.php';
include '../../downloads.php';
include '../../lib/Downloads.php';

session_start();

if (!is_null($product)) {
    $found = false;
    foreach ($prods as $k => $p) {
        if ($product == sprintf('%s-%s', $glob['prefix'], $k)) {
            $found = true;
            break;
        }
    }
}

if (!$found) {
    header('Location: /downloads/');
    die;
}

$product_iso = $product . '.iso';

$wsd = new Downloads('en', null);
$a = $wsd->prepare_download(null, true);
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
        sprintf('iso/cauldron/%s', $product_iso);

    $dl_link = sprintf('%s/%s', $a['mirror_url'], $product_dl_link);
}

$title = 'Mageia 1 beta1';

$dl_alt_mirrors_table = '';
foreach ($g_mirrors as $country => $cities):
    foreach ($cities as $city => $mirrors) {
        $mirs = array();
        foreach ($mirrors as $m) {
            $pm = parse_url($m);
            $alt_dl_link = sprintf('%s%s', $m, $product_dl_link);
            $mirs[] = sprintf('%s://<a href="%s" rel="nofollow">%s</a>',
                $pm['scheme'], $alt_dl_link, $pm['host']);
        }
        $dl_alt_mirrors_table .= sprintf('<tr><td>%s</td><td>%s</td><td>%s</td></tr>', $country, $city, implode(', ', $mirs));
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
    <?php include '../../langs.php'; ?>
    
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">&nbsp;</span> <span class="subh"><?php echo $_t['page_h1']; ?></span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g"><div class="para">
                <h2><?php echo $_t['page_title']; ?></h2>
                <p><?php
                    echo
                        sprintf($_t['dl_shld_start'], 'Mageia 1 beta1 ' . $p['name']),
                        ' ', sprintf($_t['dl_size'], $p['size']),
                        ' ', sprintf($_t['alt_download'], $dl_link, $dl_link);
                ?></p>

                <div class="dlinfo">
                    <?php if (isset($p['md5'])): ?>
                <p><?php echo $_t['signs_check_1']; ?></p>
                <pre class="term">
$ md5sum <?php echo basename($product_dl_link), "\n", $p['md5'], "\n"; ?>

$ sha1sum <?php echo basename($product_dl_link), "\n", $p['sha1'], "\n"; ?>
</pre>
                <p><?php echo $_t['signs_check_2']; ?></p>
                    <?php endif; ?>
                <p><?php echo $dl2_mirror_alt; ?></p>
                </div>
                <table class="dlt2 dlinfo" id="other_mirrors" style="display: none;">
                    <thead><tr><th>Country</th><th>City</th><th>Download mirrors</th></tr></thead>
                    <tbody><?php echo $dl_alt_mirrors_table; ?></tbody>
                </table>

                <hr />
        </div></div>
        <div class="yui-g">
            <div class="yui-u first"><div class="para"
                <h2><?php echo $_t['whatdouthink?']; ?></h2>
                <p><?php echo $_t['give_feedback']; ?></p>
                <p><?php echo $_t['report_bug'];  ?></p>
                <p><?php echo $_t['notify_web']; ?></p>

                <hr />
            </div></div>
            <div class="yui-u"><div class="para">
                <h2><?php echo sprintf($_t['wanttohelp?'], '<a href="http://mageia.org/wiki/doku.php?id=contribute">', '</a>'); ?></h2>
                <p><?php echo $_t['ucanhelp']; ?></p>
                <p><?php echo sprintf($_t['wherehelp'],
                    '<a href="http://mageia.org/wiki/doku.php?id=marketing">', '</a>',
                    '<a href="http://mageia.org/wiki/doku.php?id=web">', '</a>',
                    '<a href="http://mageia.org/wiki/doku.php?id=translators">', '</a>',
                    '<a href="http://mageia.org/wiki/doku.php?id=packaging">', '</a>',
                    '<a href="http://mageia.org/wiki/doku.php?id=qateam">', '</a>',
                    '<a href="http://mageia.org/donate/">', '</a>'
                ); ?>
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
