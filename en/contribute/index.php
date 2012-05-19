<?php


define('HLANG', true);
require '../../langs.php';
include 'locales.php';

$_t = i18n::get_strings($_t, $locale, $i18n_fallback_rules);

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
    <link rel="canonical" href="/<?php echo $locale; ?>/contribute/">
    <?php include '../../analytics.php'; ?>
</head>
<body id="top" class="contribute">
    <?php echo $hsnav; ?>
    <h1 id="mgnavtitle"><?php _e('page_h1')?></h1>
    <div id="doc" class="yui-t7">
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para" style="padding-top: 2em;">
                    <p><?php echo $_t['mageia_intro']; ?></p>

                    <p><?php echo $_t['contribute_intro']; ?></p>

                    <p><?php echo $_t['check_can_do']; ?></p>
                    
                    <ul id="contrib-sel">
                        <li id=""><a href="#by-role"><?php echo $_t['browse_role']; ?></a></li>
                        <li id=""><a href="#by-time"><?php echo $_t['browse_time']; ?></a></li>
                    </ul>

                    <div id="by-role">
                    <h2><?php echo $_t['h2_role']; ?></h2>
                    <ul id="contrib-roles" class="contrib-list">
                        <li id="support">
                            <h3><?php echo $_t['h3_support']; ?></h3>
                            <p><?php echo $_t['text_support']; ?></p>
                        </li>
                        <li id="docu">
                            <h3><a href="https://wiki.mageia.org/en/Documentation_team"><?php echo $_t['h3_docu']; ?></a></h3>
                            <p><?php echo $_t['text_docu']; ?></p>
                        </li>
                        <li id="i18n">
                            <h3><a href="https://wiki.mageia.org/en/Internationalisation_Team_(i18n)"><?php echo $_t['h3_i18n']; ?></a></h3>
                            <p><?php echo $_t['text_i18n']; ?></p>
                        </li>
                        <li id="triage">
                            <h3><a href="https://wiki.mageia.org/en/Bug_Squad"><?php echo $_t['h3_triage']; ?></a></h3>
                            <p><?php echo $_t['text_triage']; ?></p>
                        </li>
                        <li id="qa">
                            <h3><a href="https://wiki.mageia.org/en/QA_Team"><?php echo $_t['h3_qa']; ?></a></h3>
                            <p><?php echo $_t['text_qa']; ?></p>
                        </li>
                        <li id="marketing">
                            <h3><a href="https://wiki.mageia.org/en/Marcom_Team"><?php echo $_t['h3_marketing']; ?></a></h3>
                            <p><?php echo $_t['text_marketing']; ?></p>
                        </li>
                        <li id="graphic">
                            <h3><a href="https://wiki.mageia.org/en/Artwork_team"><?php echo $_t['h3_graphic']; ?></a></h3>
                            <p><?php echo $_t['text_graphic']; ?></p>
                        </li>
                        <li id="dev">
                            <h3><a href="https://wiki.mageia.org/en/Packagers_Team"><?php echo $_t['h3_dev']; ?></a></h3>
                            <p><?php echo $_t['text_dev']; ?></p>
                        </li>
                        <li id="web">
                            <h3><a href="https://wiki.mageia.org/en/Web_team"><?php echo $_t['h3_web']; ?></a></h3>
                            <p><?php echo $_t['text_web']; ?></p>
                        </li>
                        <li id="mirror">
                            <h3><?php echo $_t['h3_mirror']; ?></h3>
                            <p><?php echo $_t['text_mirror']; ?></p>
                        </li>
                        <li id="donation">
                            <h3><a href="/en/donate/"><?php echo $_t['h3_donation']; ?></a></h3>
                            <p><?php echo $_t['text_donation']; ?></p>
                        </li>
                        <hr>
                        <li id="data">
                            <h3><?php echo $_t['h3_data']; ?></h3>
                            <p><?php echo $_t['text_data']; ?></p>
                        </li>
                        <li id="design">
                            <h3><?php echo $_t['h3_design']; ?></h3>
                            <p><?php echo $_t['text_design']; ?></p>
                        </li>
                    </ul>
                    <hr>
                    </div>
                    <div id="by-time">
                    <h2><?php echo $_t['h2_time']; ?></h2>
                    <p><?php echo $_t['intro_time']; ?></p>
                    <ul id="contrib-time" class="contrib-list">
                        <li>
                            <h3><?php echo $_t['h3_minutes']; ?></h3>
                            <ul class="contrib-act">
                            <?php foreach ($_t['array_minutes'] as $item) {
                                echo sprintf('<li>%s</li>', $item);
                            } ?>
                            </ul>
                        </li>
                        <li>
                            <h3><?php echo $_t['h3_hours']; ?></h3>
                            <ul class="contrib-act">
                            <?php foreach ($_t['array_hours'] as $item) {
                                echo sprintf('<li>%s</li>', $item);
                            } ?>
                            </ul>
                        </li>
                        <li>
                            <h3><?php echo $_t['h3_weeks']; ?></h3>
                            <ul class="contrib-act">
                            <?php foreach ($_t['array_weeks'] as $item) {
                                echo sprintf('<li>%s</li>', $item);
                            } ?>
                            </ul>
                        </li>
                    </ul>
                    <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
