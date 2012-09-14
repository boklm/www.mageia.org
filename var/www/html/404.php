<?php
define('HLANG', true);
require 'langs.php'; // needs absolute path in some form to be link depth independent
_lang_load($locale, '404');

header('HTTP/1.0 404 Not Found');
header('Status: 404 Not Found');

?><!DOCTYPE html>
<html dir="ltr" lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php _e('Sorry, we could not find this page.')?></title>
    <meta http-equiv="expires" content="0">
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <?php include 'analytics.php'; ?>
</head>
<body>
    <?php echo $hsnav; ?>
    <h1 id="mgnavt"><?php _e('Sorry, we could not find this page.')?></h1>
    <div id="doc" class="yui-t7">
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para values">
                    <ul class="hl"><?php
                        _h('Try searching it on <a href="%s">mageia.org site map</a>,', array('/map/'), 'li');
                        _h('or try to <a href="%s">search with Google</a>.', array('https://www.google.com/?q=site:mageia.org'), 'li');
                    ?></ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
