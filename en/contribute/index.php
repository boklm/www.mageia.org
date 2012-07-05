<?php


define('HLANG', true);
require '../../langs.php';
include 'locales.php';

$_t = i18n::get_strings($_t, $locale, $i18n_fallback_rules);

?><!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php _e('page_title')?></title>
    <meta name="description" content="<?php _e('page_desc')?>">
    <meta name="keywords" content="<?php _e('page_kw')?>">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <link rel="canonical" href="/<?php echo $locale; ?>/contribute/">
    <?php include '../../analytics.php'; ?>
</head>
<body id="top" class="contribute">
    <?php echo $hsnav; ?>
    <h1 id="mgnavtitle"><?php _e('page_h1')?></h1>
    <div style="width: 1000px; text-align: left; border-bottom: 1px solid #ddd; border-right: 1px solid #ddd;">
        <div class="para" style="padding-top: 2em;">
            <p><?php _e('mageia_intro')?></p>
            <p><?php _e('contribute_intro')?></p>
            <p><?php _e('check_can_do')?></p>
        </div>
    </div>
    <div style="float: left; width: 400px; text-align: left; border-bottom: 1px solid #ddd;">
        <div class="para" id="by-time">
            <h2><?php _e('h2_time')?></h2>
            <p><?php _e('intro_time')?></p>
            <ul id="contrib-time" class="contrib-list">
                <li>
                    <h3><?php _e('h3_minutes')?></h3>
                    <ul class="contrib-act">
                    <?php foreach ($_t['array_minutes'] as $item) {
                        echo sprintf('<li>%s</li>', $item);
                    } ?>
                    </ul>
                </li>
                <li>
                    <h3><?php _e('h3_hours')?></h3>
                    <ul class="contrib-act">
                    <?php foreach ($_t['array_hours'] as $item) {
                        echo sprintf('<li>%s</li>', $item);
                    } ?>
                    </ul>
                </li>
                <li>
                    <h3><?php _e('h3_weeks')?></h3>
                    <ul class="contrib-act">
                    <?php foreach ($_t['array_weeks'] as $item) {
                        echo sprintf('<li>%s</li>', $item);
                    } ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div style="float: left; width: 600px; text-align: left; border: 1px solid #ddd; border-top: 0;">
        <div class="para" id="by-role">
        <h2><?php _e('h2_role')?></h2>
        <ul id="contrib-roles" class="contrib-list">
            <li id="support">
                <h3><?php _e('h3_support')?></h3>
                <p><?php _e('text_support')?></p>
            </li>
            <li id="docu">
                <h3><a href="https://wiki.mageia.org/en/Documentation_team"><?php _e('h3_docu')?></a></h3>
                <p><?php _e('text_docu')?></p>
            </li>
            <li id="i18n">
                <h3><a href="https://wiki.mageia.org/en/Internationalisation_Team_(i18n)"><?php _e('h3_i18n')?></a></h3>
                <p><?php _e('text_i18n')?></p>
            </li>
            <li id="triage">
                <h3><a href="https://wiki.mageia.org/en/Bug_Squad"><?php _e('h3_triage')?></a></h3>
                <p><?php _e('text_triage')?></p>
            </li>
            <li id="qa">
                <h3><a href="https://wiki.mageia.org/en/QA_Team"><?php _e('h3_qa')?></a></h3>
                <p><?php _e('text_qa')?></p>
            </li>
            <li id="marketing">
                <h3><a href="https://wiki.mageia.org/en/Marcom_Team"><?php _e('h3_marketing')?></a></h3>
                <p><?php _e('text_marketing')?></p>
            </li>
            <li id="graphic">
                <h3><a href="https://wiki.mageia.org/en/Artwork_team"><?php _e('h3_graphic')?></a></h3>
                <p><?php _e('text_graphic')?></p>
            </li>
            <li id="dev">
                <h3><a href="https://wiki.mageia.org/en/Packagers_Team"><?php _e('h3_dev')?></a></h3>
                <p><?php _e('text_dev')?></p>
            </li>
            <li id="web">
                <h3><a href="https://wiki.mageia.org/en/Web_team"><?php _e('h3_web')?></a></h3>
                <p><?php _e('text_web')?></p>
            </li>
            <li id="mirror">
                <h3><?php _e('h3_mirror')?></h3>
                <p><?php _e('text_mirror')?></p>
            </li>
            <li id="donation">
                <h3><a href="/en/donate/"><?php _e('h3_donation')?></a></h3>
                <p><?php _e('text_donation')?></p>
            </li>
            <hr>
            <li id="data">
                <h3><?php _e('h3_data')?></h3>
                <p><?php _e('text_data')?></p>
            </li>
            <li id="design">
                <h3><?php _e('h3_design')?></h3>
                <p><?php _e('text_design')?></p>
            </li>
        </ul>
        <hr>
        </div>
    </div>
</body>
</html>
