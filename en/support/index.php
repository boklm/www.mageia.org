<?php

define('HLANG', true);
require '../../langs.php';
include 'locales.php';

$_t = i18n::get_strings($_t, $locale, $i18n_fallback_rules);

?><!DOCTYPE html>
<html dir="ltr" lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php _e('page_title')?></title>
    <meta name="description" content="<?php _e('page_desc')?>">
    <meta name="keywords" content="<?php _e('page_kw')?>">
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
                            <li><a href="#comm"><?php _e('h2_comm_support')?></a></li>
                            <li><a href="#pro"><?php _e('h2_pro_support')?></a></li>
                            <li><a href="#updates"><?php _e('h2_updates')?></a></li>
                            <li><a href="#lifecycle"><?php _e('Lifecycle')?></a></li>
                            <li><a href="#hw"><?php _e('h2_hw_reqs')?></a></li>
                            <li><a href="#bugs"><?php _e('Bugs Reports')?></a></li>
                        </ul>
                    </div>

                    <?php
                        _h('h2_comm_support', null, 'h2 id="comm"');
                        _h('comm_1');

                        echo '<ul class="hl">';
                        foreach ($_t['comm_list'] as $commi)
                            _h($commi, null, 'li');
                        echo '</ul>';
                        echo '<hr>';

                        _h('h2_pro_support', null, 'h2 id="pro"');
                        _h('pro_1');
                        _h('pro_2', array('https://wiki.mageia.org/en/Commercial_vendors'));
                        echo '<hr>';

                        _h('h2_updates', null, 'h2 id="updates"');
                        _h('updates_1', array('<a href="../1/">Mageia 1</a>', '<a href="../2/">Mageia 2</a>'));
                        _h('updates_3');
                        _h('updates_2', array('<a href="https://ml.mageia.org/wwsympa-wrapper.fcgi/info/updates-announce">updates-announce</a>'));
                        echo '<hr>';

                        _h('Lifecycle', null, 'h3');
                        _h('Mageia releases are supported at least for 18 months.');
                        echo '<ul class="hl">';
                        _h('Mageia 1 will be supported until December 2012.', null, 'li');
                        _h('Mageia 2 may have a longer lifecycle, this will be decided once released in May.', null, 'li');
                        echo '</ul>';
                        echo '<hr>';

                        _h('h2_hw_reqs', null, 'h2 id="hw"');
                        _h('hw_1');
                        _h('hw_2');
                        echo '<ul class="hl">';
                        foreach ($_t['hw_list'] as $hwi):
                            echo _h($hwi, null, 'li');

                        endforeach;
                        echo '</ul>';

                        _h('hw_some_hardware');
                        _h('hw_hcl_note', array('https://wiki.mageia.org/en/Web_team', 'https://wiki.mageia.org/en/QA_Team'), 'p class="dlinfo"');
                        echo '<hr>';
                        
                        _h('Bugs Reports', null, 'h2 id="bugs"');
                        _h('You may check and report bugs on <a href="%s">our Bugzilla (bugs.mageia.org)</a>.',
                            array('https://bugs.mageia.org/'));
                        echo '<hr>';
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
