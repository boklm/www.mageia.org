<?php

define('HLANG', true);
require '../../langs.php';
require 'locales.php';

$_t = i18n::get_strings($_t, $locale, $i18n_fallback_rules);

?>
<!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php echo $_t['page_title']; ?></title>
    <meta name="robots" content="noindex,nofollow,nosnippet">
    <meta name="description" content="<?php _e('page_desc')?>">
    <meta name="keywords" content="<?php _e('page_kw')?>">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <?php include '../../analytics.php'; ?>
</head>
<body class="about legal">
    <?php echo $hsnav; ?>
    <h1 id="mgnavt"><?php _e('page_h1')?></h1>
    <div id="doc" class="yui-t7">
        <div id="bd" role="main">
            <div class="yui-g"><div class="para">
                <p>To be done.</p>
            </div></div>
        </div>
    </div>
</body>
</html>
