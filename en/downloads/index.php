<?php require '../../downloads.php';

$_t['page_h1'] = sprintf($_t['page_h1'], '<em class="tag">Mageia 1</em>');
$_t['page_title'] = sprintf($_t['page_title'], 'Mageia 1');
?>
<!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php echo $_t['page_title']; ?></title>
    <meta name="description" content="<?php echo $_t['page_desc']; ?>">
    <meta name="keywords" content="<?php echo $_t['page_kw']; ?>">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh"><?php echo $_t['page_h1']; ?></span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para">
                <p><?php echo $_t['dl_help']; ?></p>
                <br />
                <?php echo $dl_table; ?>
            </div></div>
        </div>
    </div>
</body>
</html>
