<?php

define('HLANG', true);
require '../../langs.php';
include 'locales.php';

$_t = i18n::get_strings($_t, $locale, $i18n_fallback_rules);

?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php echo $_t['1_title']; ?></title>
    <meta name="description" content="<?php echo $_t['1_desc']; ?>">
    <meta name="keywords" content="<?php echo $_t['1_kw']; ?>">
    <meta name="DC.date" content="2010-06-01" scheme="DCTERMS.W3CDTF">
    <link rel="canonical" href="/<?php echo $locale; ?>/1/">
    <link rel="stylesheet" href="/g/style/all.css">
    <?php include '../../analytics.php'; ?>
</head>
<body class="release">
    <?php echo $hsnav; ?>
    <h1 id="mgnavt">Mageia 1</h1>
    <div id="doc" class="yui-t7">
        <?php include 'nav.php'; ?>
        <div id="bd" role="main">
            <div class="yui-g bb1">
                <div class="para">
                    <img src="/g/1/screenshots/opt-mageia-450.jpg" alt="<?php echo $_t['img_desktop']; ?>" class="rel-desktop-home rel-home1">

                    <h2 class="download-btn"><a href="/downloads/"><?php echo $_t['download_it']; ?></a></h2>

                    <p><?php echo $_t['mageia_is']; ?></p>

                    <h3><?php echo $_t['h3_what_is']; ?></h3>
                    <p><?php echo $_t['plenty_see_notes']; ?></p>

                    <div class="clear"></div>

                    <h3><?php echo $_t['h3_context']; ?></h3>
                    <p><?php echo $_t['mageia_began']; ?></p>
                    <p><?php echo $_t['our_work']; ?></p>
                    <p><?php echo $_t['encourage_you']; ?></p>

                    <hr>

                    <p><?php echo $_t['9_months']; ?></p>
                    <p><?php echo $_t['people']; ?></p>
                    <p><?php echo $_t['prereleases']; ?></p>
                    <p><?php echo $_t['servers']; ?></p>
                    <p><?php echo $_t['languages']; ?></p>
                    <p><?php echo $_t['distribution']; ?></p>
                    <p><?php echo $_t['users']; ?></p>
                    <p><?php echo $_t['in_for_you']; ?></p>
                </div>
            </div>
            <div class="yui-g bb1">
                <div class="yui-u first rb1">
                </div>
                <div class="yui-u">
                </div>
            </div>
            <?php include 'nav.php'; ?>
        </div>
    </div>
</body>
</html>
