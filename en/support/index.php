<?php

define('HLANG', true);
require '../../langs.php';
include 'locales.php';

$_t = i18n::get_strings($_t, $locale, $i18n_fallback_rules);

?><!DOCTYPE html>
<html dir="ltr" lang="<?php echo $locale; ?>">
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
    <?php echo $hsnav; ?>

    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/<?php echo $locale; ?>/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh"><?php echo $_t['h1_title']; ?></span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para donate">
                    <div class="qsidesummary">
                        <ul>
                            <li><a href="#comm"><?php echo $_t['h2_comm_support']; ?></a></li>
                            <li><a href="#pro"><?php echo $_t['h2_pro_support']; ?></a></li>
                            <li><a href="#hw"><?php echo $_t['h2_hw_reqs']; ?></a></li>
                        </ul>
                    </div>
                    <h2 id="comm"><?php echo $_t['h2_comm_support']; ?></h2>
                    <p><?php echo $_t['comm_1']; ?></p>
                    <ul class="hl"><?php foreach ($_t['comm_list'] as $commi):
                        echo sprintf('<li>%s</li>', $commi);
                    endforeach; ?></ul>
                    <hr>

                    <h2 id="pro"><?php echo $_t['h2_pro_support']; ?></h2>
                    <p><?php echo $_t['pro_1']; ?></p>
                    <p><?php echo sprintf($_t['pro_2'], '/wiki/doku.php?id=commercial_vendors'); ?></p>
                    <hr>

                    <h2 id="hw"><?php echo $_t['h2_hw_reqs']; ?></h2>
                    <p><?php echo $_t['hw_1']; ?></p>

                    <p><?php echo $_t['hw_2']; ?></p>
                    <ul class="hl"><?php foreach ($_t['hw_list'] as $hwi):
                        echo sprintf('<li>%s</li>', $hwi);
                    endforeach; ?></ul>
                    <p><?php echo $_t['hw_some_hardware']; ?></p>

                    <p class="dlinfo"><?php echo sprintf($_t['hw_hcl_note'], '/wiki/doku.php?id=web', '/wiki/doku.php?id=qateam'); ?></p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
