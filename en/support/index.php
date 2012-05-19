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
<body class="support">
    <?php echo $hsnav; ?>
    <h1 id="mgnavt"><?php _e('h1_title')?></h1>
    <div id="doc" class="yui-t7">
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para donate" style="padding-top: 2em;">
                    <div class="qsidesummary">
                        <ul>
                            <li><a href="#comm"><?php echo $_t['h2_comm_support']; ?></a></li>
                            <li><a href="#pro"><?php echo $_t['h2_pro_support']; ?></a></li>
                            <li><a href="#updates"><?php echo $_t['h2_updates']; ?></a></li>
                            <li><a href="#lifecycle"><?php _e('Lifecycle')?></a></li>
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
                    <p><?php echo sprintf($_t['pro_2'], 'https://wiki.mageia.org/en/Commercial_vendors'); ?></p>
                    <hr>

                    <h2 id="updates"><?php echo $_t['h2_updates']; ?></h2>
                    <p><?php echo sprintf($_t['updates_1'], '<a href="../1/">Mageia 1</a>', '<a href="../2/">Mageia 2</a>'); ?></p>
                    <p><?php echo $_t['updates_3']; ?></p>
                    <p><?php echo sprintf($_t['updates_2'], '<a href="https://ml.mageia.org/wwsympa-wrapper.fcgi/info/updates-announce">updates-announce</a>'); ?></p>
                    <hr>
                    <h3><?php _e('Lifecycle')?></h3>
                    <p><?php _e('Mageia releases are supported at least for 18 months.');?></p>
                    <ul>
                        <li><?php _e('Mageia 1 will be supported until December 2012.')?></li>
                        <li><?php _e('Mageia 2 may have a longer lifecycle, this will be decided once released in May.')?></li>
                    </ul>
                    <hr>

                    <h2 id="hw"><?php echo $_t['h2_hw_reqs']; ?></h2>
                    <p><?php echo $_t['hw_1']; ?></p>

                    <p><?php echo $_t['hw_2']; ?></p>
                    <ul class="hl"><?php foreach ($_t['hw_list'] as $hwi):
                        echo sprintf('<li>%s</li>', $hwi);
                    endforeach; ?></ul>
                    <p><?php echo $_t['hw_some_hardware']; ?></p>

                    <p class="dlinfo"><?php echo sprintf($_t['hw_hcl_note'], 'https://wiki.mageia.org/en/Web_team', 'https://wiki.mageia.org/en/QA_Team'); ?></p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
