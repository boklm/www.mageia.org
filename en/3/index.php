<?php

define('HLANG', true);
require '../../langs.php';

_lang_load($locale, '3');
?>
<!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php _e('Mageia 3')?></title>
    <link rel="stylesheet" href="/g/style/all.css">
    <meta name="description" content="<?php _e('Mageia 3')?>">
    <style>
    .para { text-align: left; float: left; width: 600px; display: block; border-right: 1px solid #eef; border-bottom: 1px solid #eef; }
    hr { margin-top: 2em; }
    .unstable-release-warning {
        padding: 1em 1em 1em 2.2em;
        margin: 0;
        background: #cc0000;
        color: white;
        text-align: left;
    }
    </style>
    <?php include '../../analytics.php'; ?>
</head>
<body class="downloads">
    <?php echo $hsnav; ?>
    <article>
        <header id="mgnavt">
            <h1><?php _e('Mageia 3')?></h1>
            <ul>
                <li><a href="https://wiki.mageia.org/en/Mageia_3_development#Development_Planning"><?php _e('Development roadmap')?></a></li>
                <li><a href="https://wiki.mageia.org/en/FeatureMageia3_Review"><?php _e('Features review')?></a></li>
                <li><a href="https://wiki.mageia.org/en/Mageia_3_alpha3"><?php _e('Release notes')?></a></li>
                <li><a href="https://wiki.mageia.org/en/Mageia_3_Errata"><?php _e('Errata')?></a></li>
                <li><a href="//bugs.mageia.org/"><?php _e('Bugs Reports')?></a></li>
            </ul>
        </header>
        <section>
            <p class="unstable-release-warning"><?php _e('Be careful! This is an alpha, unstable release.');
                _e('It is only intended for developer use. DO NOT USE THIS IN PRODUCTION OR FOR OFFICIAL REVIEW.'); ?></p>
            <div class="para">
                <h2><?php _e('Download %s', array('Mageia 3 alpha3')); ?></h2>
                <ul class="dlinfo hl">
                    <li><?php _e('Up to 167 locales are supported:'); ?>
                        Deutsch, English, español, français, italiano, português, svenska, nederlands,
                        polski, dansk, Русский
                        <?php _e('and so much more!'); ?>
                        <a href="https://wiki.mageia.org/en/Mageia_2_supported_locales" hreflang="en"><?php _e('See the comprehensive list')?></a>.</li>
                    <li><?php
                        _e('Installer DVD and CD ISOs are made of Free Software exclusively.');
                        _e('As a consequence, <span class="warn">proprietary Wi-Fi and video drivers are not included.');
                        _e('If you need WiFi or specific video drivers <em>at install time</em>, you should go with below LiveCDs or LiveDVDs instead.</span>');
                        _e('You may, if you will, add nonfree software repository <em>after</em> the installation.');
                    ?></li>
                    <li><?php _e('Use LiveCDs or LiveDVDs for fresh new installs ONLY, NOT FOR UPGRADE.')?></li>
                    <li><?php _e('If you are looking for a stable version of Mageia, <a href="%s">go here</a>.', array('../downloads/'))?></li>
                    <li><?php _e('Enjoy! And <a href="%s">please report bugs</a> if you find some.', array('http://bugs.mageia.org/'))?></li>
                </ul>
                <br>
                <br>
                <table class="fr-table dlt2" style="width: 580px">
                <thead>
                    <tr>
                        <th>Format</th>
                        <th class="size"><?php _e('size');?></th>
                        <th><?php _e('link');?></th>
                        <th>BitTorrent</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="name"><?php _e('Installer DVD')?><br>
                            <span class="dlinfo"><?php _e('100% Free Software')?></span></th>
                        <td class="size">3.6GB</td>
                        <td><a rel="nofollow" href="../downloads/get/?q=Mageia-3-alpha3-i586-DVD.iso">32bit</a><br>
                            <a rel="nofollow" href="../downloads/get/?q=Mageia-3-alpha3-x86_64-DVD.iso">64bit</a></td>
                        <td><a rel="nofollow" href="../downloads/get/?q=Mageia-3-alpha3-i586-DVD.iso&amp;torrent=1">32bit</a><br>
                            <a rel="nofollow" href="../downloads/get/?q=Mageia-3-alpha3-x86_64-DVD.iso&amp;torrent=1">64bit</a></td>
                    </tr>
                    <tr>
                        <th class="name"><?php _e('Installer CD')?><br>
                            <span class="dlinfo"><?php _e('100% Free Software')?></span></th>
                        <td class="size">700MB</td>
                        <td><a rel="nofollow" href="../downloads/get/?q=Mageia-3-alpha3-dual-CD.iso">dualarch</a></td>
                        <td><a rel="nofollow" href="../downloads/get/?q=Mageia-3-alpha3-dual-CD.iso&amp;torrent=1">dualarch</a></td>
                    </tr>
                    <tr><td colspan="4">
                    </td></tr>
                    <tr><td colspan="4">&nbsp;</td></tr>
                    <tr>
                        <th class="name"><?php _e('LiveDVD KDE')?><br>
                            <span class="dlinfo"><?php _e('not suitable for upgrade')?></span></th>
                        <td class="size">1GB</td>
                        <td><a rel="nofollow" href="../downloads/get/?q=Mageia-3-alpha3-LiveDVD-KDE4-i586-DVD.iso">32bit</a><br>
                            <a rel="nofollow" href="../downloads/get/?q=Mageia-3-alpha3-LiveDVD-KDE4-x86_64-DVD.iso&amp;torrent=1">64bit</a></td>
                        <td><a rel="nofollow" href="../downloads/get/?q=Mageia-3-alpha3-LiveDVD-KDE4-i586-DVD.iso">32bit</a><br>
                            <a rel="nofollow" href="../downloads/get/?q=Mageia-3-alpha3-LiveDVD-KDE4-x86_64-DVD.iso&amp;torrent=1">64bit</a></td>
                    </tr>
                    <tr>
                        <th class="name"><?php _e('LiveDVD GNOME')?><br>
                            <span class="dlinfo"><?php _e('not suitable for upgrade')?></th>
                        <td class="size">1GB</td>
                        <td><a rel="nofollow" href="../downloads/get/?q=Mageia-3-alpha3-LiveDVD-GNOME-i586-DVD.iso">32bit</a><br>
                            <a rel="nofollow" href="../downloads/get/?q=Mageia-3-alpha3-LiveDVD-GNOME-x86_64-DVD.iso&amp;torrent=1">64bit</a></td>
                        <td><a rel="nofollow" href="../downloads/get/?q=Mageia-3-alpha3-LiveDVD-GNOME-i586-DVD.iso">32bit</a><br>
                            <a rel="nofollow" href="../downloads/get/?q=Mageia-3-alpha3-LiveDVD-GNOME-x86_64-DVD.iso&amp;torrent=1">64bit</a></td>
                    </tr>
                    <tr><td colspan="4">&nbsp;</td></tr>
                    <tr>
                        <th class="name"><?php _e('LiveCD KDE, English-only')?><br>
                            <span class="dlinfo"><?php _e('not suitable for upgrade')?></th>
                        <td class="size">640MB</td>
                        <td><a rel="nofollow" href="../downloads/get/?q=Mageia-3-alpha3-LiveCD-KDE4-en-i586-CD.iso">32bit</a></td>
                        <td><a rel="nofollow" href="../downloads/get/?q=Mageia-3-alpha3-LiveCD-KDE4-en-i586-CD.iso&amp;torrent=1">32bit</a><br>
                    </tr>
                    <tr>
                        <th class="name"><?php _e('LiveCD GNOME, English-only')?><br>
                            <span class="dlinfo"><?php _e('not suitable for upgrade')?></th>
                        <td class="size">640MB</td>
                        <td><a rel="nofollow" href="../downloads/get/?q=Mageia-3-alpha3-LiveCD-GNOME-en-i586-CD.iso">32bit</a></td>
                        <td><a rel="nofollow" href="../downloads/get/?q=Mageia-3-alpha3-LiveCD-GNOME-en-i586-CD.iso&amp;torrent=1">32bit</a></td>
                    </tr>
                    <tr><td colspan="3">&nbsp;</td></tr>
                    <tr>
                        <th><?php _e('Network installer, Free Software CD')?></th>
                        <td class="size">~20MB</td>
                        <td><a rel="nofollow" href="../downloads/get/?q=Mageia-3-alpha3-Boot-i586-CD.iso">32bit</a><br>
                            <a rel="nofollow" href="../downloads/get/?q=Mageia-3-alpha3-Boot-x86_64-CD.iso">64bit</a></td>
                    </tr>
                    <tr>
                        <th><?php _e('Network installer + nonfree firmware CD')?><br>
                            <span class="dlinfo"><?php _e('needed for some disc controllers, some network cards, etc.')?></span></th>
                        <td class="size">~25MB</td>
                        <td><a rel="nofollow" href="../downloads/get/?q=Mageia-3-alpha3-Boot-nonfree-i586-CD.iso">32bit</a><br>
                            <a rel="nofollow" href="../downloads/get/?q=Mageia-3-alpha3-Boot-nonfree-x86_64-CD.iso">64bit</a></td>
                    </tr>
                </tbody>
                </table>
            </div>
        </section>
    </article>
</body>
</html>
