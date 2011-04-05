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

if ($torrent) {
    if (isset($p['torrent'])) {
        $dl_link = sprintf('%s/%s', $a['mirror_url'], $p['torrent']);
    }
    else {
        header('Location: /downloads/');
        die;
    }
}
else {
    if (isset($p['path']))
        $dl_link = sprintf('%s/%s', $a['mirror_url'], $p['path']);
    else
        $dl_link =  sprintf('%s/%s/%s', $a['mirror_url'], 'iso/cauldron', $product_iso);
}

// @fixme (rda) actually, http-equiv="refresh" is deprecated behaviour now.
// @fixme (rda) see http://www.w3.org/TR/WCAG10-HTML-TECHS/#meta-element
// @fixme (rda) possible alternative: post-load setTimeOut("document.location=url;", 5000); but requires JS

$relocation = null;
if (!is_null($dl_link))
    $relocation = sprintf('<meta http-equiv="refresh" content="5;%s">', $dl_link);

$title = 'Mageia 1 beta1';

$dl_alt_mirrors_table = '';
foreach ($g_mirrors as $country => $cities):
    foreach ($cities as $city => $mirrors) {
        $mirs = array();
        foreach ($mirrors as $m) {
            $pm = parse_url($m);
            $alt_dl_link = sprintf('%s/%s/%s', $m, 'iso/cauldron', $product_iso);
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
    <?php echo $relocation; ?>
    <?php include '../../analytics.php'; ?>
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
$ md5sum <?php echo $product_iso, "\n", $p['md5'], "\n"; ?>

$ sha1 <?php echo $product_iso, "\n", $p['sha1'], "\n"; ?>
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
                <div class="qsidesummary testday">
                    <p><strong>Test days &rArr; April 8 &amp; 9!</strong></p>
                    <p>To speed up fixes &amp; improvements for beta2, we organize
                        two test days for beta1 in the coming days.</p>
                    <p><a href="">Learn more!</a></p>
                </div>

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
