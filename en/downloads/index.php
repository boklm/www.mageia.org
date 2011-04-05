<?php require '../../downloads.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8" />
    <title><?php echo $_t['page_title']; ?></title>
    <meta name="description" content="<?php echo $_t['page_desc']; ?>" />
    <meta name="keywords" content="<?php echo $_t['page_kw']; ?>" />
    <meta name="author" content="Mageia" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" >
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>
    
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh"><?php echo $_t['page_h1']; ?></span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para">
                    <p style="color: #f22;"><?php echo $_t['warn_1']; ?></p>

                <p><?php echo $_t['warn_2']; ?></p>
                <br />
                <h2><?php echo $_t['title_ok']; ?></h2>
                <p><?php echo $_t['dl_help']; ?></p>
                <br />
                <?php echo $dl_table; ?>

            </div></div>
            <div class="yui-g">
                <div class="yui-u first"><div class="para" style="padding-right: 0;">
                    <h2><?php echo $_t['changes_since_a2']; ?></h2>
                    <ul>
                        <li>better locales integration - asian languages especially</li>
                        <li>LibreOffice localization</li>
                        <li>improved visual identity integration</li>
                        <li>still more packages</li>
                    </ul>
                </div></div>
                <div class="yui-u"><div class="para">
                    <h2><?php echo $_t['release_docs']; ?></h2>
                    <ul>
                        <li><a href="/wiki/doku.php?id=iso1:beta1_release_notes" hreflang="en">Release Notes</a></li>
                        <li><a href="/wiki/doku.php?id=mageia1:errata" hreflang="en">Errata</a></li>
                        <li><a href="http://blog.mageia.org/en/" hreflang="en">Blog post</a></li>
                        <li><a href="/"><?php echo $_t['whatismageia']; ?></a></li>
                    </ul>
                    <p>Beta 2 will be released on April, 25<sup>th</sup>.</p>
                    <p>You can check our <a href="http://mageia.org/wiki/doku.php?id=iso_1_specifications#expected_milestones">roadmap for Mageia 1 here</a>.</p>
                </div></div>
            </div>
        </div>
    </div>
</body>
</html>
