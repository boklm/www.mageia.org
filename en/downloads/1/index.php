<?php

define('HLANG', true);
require '../../../langs.php';
require 'locales.php';

$_t = i18n::get_strings($_t, $locale, $i18n_fallback_rules);

$_t['page_h1'] = sprintf($_t['page_h1'], '<em class="tag">Mageia 1</em>');
$_t['page_title'] = sprintf($_t['page_title'], 'Mageia 1');

require '../lib.php';

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
    <?php include '../../../analytics.php'; ?>
</head>
<body class="release downloads">
    <?php echo $hsnav; ?>
    <h1 id="mgnavt"><?php _e('page_h1')?></h1>
    <div id="doc" class="yui-t7">
        <div id="bd" role="main">
            <div class="yui-g">
                <?php include '../../1/nav.php'; ?>
                <div class="para">
                <p><?php echo $_t['dl_help']; ?>
                    <?php echo $_t['dl_migrate_instead']; ?></p>
                <br />
                <?php echo $dl_table; ?>
            </div></div>
        </div>
    </div>
</body>
</html>
