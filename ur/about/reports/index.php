<?php
define('HLANG', true);
require '../../../langs.php';
_lang_load($locale, 'about/reports');

?><!DOCTYPE html>
<html dir="ltr" lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php _e('Mageia activity &amp; financial reports')?></title>
    <meta name="description" content="<?php _e('Mageia reports, every year.')?>">
    <meta name="keywords" content="<?php _e('mageia, reports, activity, financial')?>">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <?php include '../../../analytics.php'; ?>
</head>
<body class="about">
    <?php echo $hsnav; ?>
    <h1 id="mgnavt"><?php _e('Activity Reports')?></h1>
    <div id="doc" class="yui-t7">
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para values">
                    <p><?php _e('Here you will find our various activity and financial reports for every year.')?></p>

                    <ul>
                        <li>2013: <?php _e('<a href="2013/">Financial report</a> (in progress).')?></li>
                        <li>2012: <?php _e('<a href="2012/">Financial report</a>.')?></li>
                        <li>2011: <?php _e('<a href="https://wiki.mageia.org/en/Rapport_moral_2011">Moral report</a> (in French &amp; English), <a href="2011/">financial report</a>.')?></li>
                        <li>2010: <?php _e('Moral report, <a href="2010/">financial report</a>.')?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
