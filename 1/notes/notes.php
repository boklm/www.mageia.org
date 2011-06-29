<?php

define('HLANG', true);
require '../../../langs.php';
require 'notes_locales.php';

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
    <link rel="canonical" href="/<?php echo $locale; ?>/1/notes/">
    <?php include '../../../analytics.php'; ?>
</head>
<body class="release">
    <?php echo $hsnav; ?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner">
            <h1><a id="logo" href="/<?php echo $locale; ?>/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh"><?php echo $_t['page_h1']; ?></span></h1>
        </div>
        <?php include '../nav.php'; ?>

        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para">
                    <div class="qsidesummary">
                        <ul>
                            <li><a href="#features"><?php echo $_t['major_features']; ?></a>
                                <ul>
                                    <?php foreach ( $_t['major_features_array'] as $anItem ) {
                                        echo '<li>'.$anItem.'</li>';
                                    } ?>
                                </ul></li>
                            <li><a href="#install"><?php echo $_t['installation_methods']; ?></a></li>
                            <li><a href="/wiki/doku.php?id=mageia1:errata">Errata</a></li>
                            <li><a href="/en/support/"><?php echo $_t['support']; ?></a></li>
                            <li><a href="/en/support/#hw"><?php echo $_t['hw_req']; ?></a></li>
                        </ul>
                    </div>
                    <p><?php echo $_t['mageia_milestone']; ?></p>
                    <p><?php echo $_t['overview']; ?></p>
                    <hr>
                    <div class="clear"></div>
                    <h2 id="features"><?php echo $_t['h2_major_features']; ?></h2>

                    <h3><?php echo $_t['h3_package_management']; ?></h3>
                    <p><?php echo $_t['text_package_management_1']; ?></p>
                    <p><?php echo $_t['text_package_management_2']; ?></p>
                    <ul>
                        <?php foreach ( $_t['array_package_management'] as $anItem ) {
                            echo '<li>'.$anItem.'</li>';
                        } ?>
                    </ul>
                    
                    <hr>
                    <h3><?php echo $_t['h3_system_configuration']; ?></h3>
                    <p><?php echo $_t['text_system_configuration']; ?></p>
                    <ul>
                        <?php foreach ( $_t['array_system_configuration'] as $anItem ) {
                            echo '<li>'.$anItem.'</li>';
                        } ?>
                    </ul>
                    <hr>
                    <h3><?php echo $_t['h3_migration']; ?></h3>
                    <p><?php echo $_t['text_migration']; ?></p>
                    <hr>
                    <h3><?php echo $_t['h3_available_des']; ?></h3>
                    <p><?php echo $_t['text_available_des']; ?></p>
                    <h4><?php echo $_t['h4_kde']; ?></h4>
                    <p><?php echo $_t['text_kde']; ?></p>
                    <h4><?php echo $_t['h4_gnome']; ?></h4>
                    <p><?php echo $_t['text_gnome']; ?></p>
                    <h4><?php echo $_t['h4_xfce']; ?></h4>
                    <p><?php echo $_t['text_xfce']; ?></p>
                    <h4><?php echo $_t['h4_lxde']; ?></h4>
                    <p><?php echo $_t['text_lxde']; ?></p>
                    <h4><?php echo $_t['h4_wms']; ?></h4>
                    <p><?php echo $_t['text_wms']; ?>
                    <ul>
                        <?php foreach ( $_t['array_wms'] as $anItem ) {
                            echo '<li>'.$anItem.'</li>';
                        } ?>
                    </ul>
                    <hr>
                    <h3><?php echo $_t['h3_desktop_apps']; ?></h3>
                    <p><?php echo $_t['text_desktop_apps']; ?></p>
                    <h4><?php echo $_t['h4_web_and_mail']; ?></h4>
                    <ul>
                        <?php foreach ( $_t['array_web_and_mail'] as $anItem ) {
                            echo '<li>'.$anItem.'</li>';
                        } ?>
                    </ul>
                    <hr>
                    <h4><?php echo $_t['h4_office']; ?></h4>
                    <ul>
                        <?php foreach ( $_t['array_office'] as $anItem ) {
                            echo '<li>'.$anItem.'</li>';
                        } ?>
                    </ul>
                    <hr>
                    <h4><?php echo $_t['h4_communication']; ?></h4>
                    <h5><?php echo $_t['h5_im']; ?></h5>
                    <ul>
                        <?php foreach ( $_t['array_im'] as $anItem ) {
                            echo '<li>'.$anItem.'</li>';
                        } ?>
                    </ul>
                    <h5><?php echo $_t['h5_irc']; ?></h5>
                    <ul>
                        <?php foreach ( $_t['array_irc'] as $anItem ) {
                            echo '<li>'.$anItem.'</li>';
                        } ?>
                    </ul>
                    <h5><?php echo $_t['h5_voip']; ?></h5>
                    <ul>
                        <?php foreach ( $_t['array_voip'] as $anItem ) {
                            echo '<li>'.$anItem.'</li>';
                        } ?>
                    </ul>
                    <h4><?php echo $_t['h4_virt']; ?></h4>
                    <ul>
                        <?php foreach ( $_t['array_virt'] as $anItem ) {
                            echo '<li>'.$anItem.'</li>';
                        } ?>
                    </ul>
                    <h4><?php echo $_t['h4_graphics']; ?></h4>
                    <ul>
                        <?php foreach ( $_t['array_graphics'] as $anItem ) {
                            echo '<li>'.$anItem.'</li>';
                        } ?>
                    </ul>
                    <h4><?php echo $_t['h4_ides']; ?></h4>
                    <ul>
                        <?php foreach ( $_t['array_ides'] as $anItem ) {
                            echo '<li>'.$anItem.'</li>';
                        } ?>
                    </ul>
                    <hr>
                    <h3><?php echo $_t['h3_base_system']; ?></h3>
                    <ul>
                        <li><?php echo $_t['kernel']; ?>
                        <ul>
                            <?php foreach ( $_t['kernel_array'] as $anItem ) {
                            echo '<li>'.$anItem.'</li>';
                        } ?>
                        </ul></li>
                        <li><?php echo $_t['initscripts']; ?></li>
                        <li><?php echo $_t['alsa']; ?>
                        <ul>
                            <?php foreach ( $_t['alsa_array'] as $anItem ) {
                            echo '<li>'.$anItem.'</li>';
                        } ?>
                        </ul></li>
                    </ul>

                    <hr>
                    <h3><?php echo $_t['h3_x']; ?></h3>
                    <ul>
                        <?php foreach ( $_t['array_x'] as $anItem ) {
                            echo '<li>'.$anItem.'</li>';
                        } ?>
                    </ul>

                    <h4><?php echo $_t['h4_proprietary']; ?></h4>
                    <p><?php echo $_t['text_proprietary']; ?></p>

                    <hr>
                    <h3><?php echo $_t['h3_input_methods']; ?></h3>
                    <p><?php echo $_t['text_input_methods']; ?></p>
                    <h4><?php echo $_t['h4_ibus']; ?></h4>
                    <p><?php echo $_t['text_ibus']; ?></p>
                    <h4><?php echo $_t['h4_scim']; ?></h4>
                    <p><?php echo $_t['text_scim']; ?></p>
                    
                    <hr>
                    <h2 id="install"><?php echo $_t['h2_available_media']; ?></h2>
                    <p><?php echo $_t['text_available_media_1']; ?></p>
                    <ul>
                        <?php foreach ( $_t['array_available_media'] as $anItem ) {
                            echo '<li>'.$anItem.'</li>';
                        } ?>
                    </ul>
                    <p><?php echo $_t['text_available_media_2']; ?></p>
                    <hr>

                    <h2><?php echo $_t['h2_software_repos']; ?></h2>
                    <p><?php echo $_t['text_software_repos_1']; ?></p>
                    <p><?php echo $_t['text_software_repos_2']; ?></p>
                    <ul>
                        <li><h4><?php echo $_t['h4_core']; ?></h4>
                            <?php echo $_t['text_core']; ?></li>
                        <li><h4><?php echo $_t['h4_nonfree']; ?></h4>
                            <?php echo $_t['text_nonfree']; ?></li>
                        <li><h4><?php echo $_t['h4_tainted']; ?></h4>
                            <?php echo $_t['text_tainted']; ?></li>
                    </ul>
                    </p>
                    <hr>
                </div>
            </div>
            <div class="yui-g bb1">
                <div class="yui-u first rb1">
                </div>
                <div class="yui-u">
                </div>
            </div>
            <?php include '../nav.php'; ?>
        </div>
    </div>
</body>
</html>
