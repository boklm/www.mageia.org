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
    <base href="../downloads/get/">
</head>
<body class="downloads">
    <?php echo $hsnav; ?>
    <article>
        <header id="mgnavt">
            <h1><?php _e('Mageia 3')?></h1>
            <ul>
                <li><a href="https://wiki.mageia.org/en/Mageia_3_development#Development_Planning"><?php _e('Development roadmap')?></a></li>
                <li><a href="https://wiki.mageia.org/en/FeatureMageia3_Review"><?php _e('Features review')?></a></li>
                <li><a href="https://wiki.mageia.org/en/Mageia_3_beta4"><?php _e('Release notes')?></a></li>
                <li><a href="https://wiki.mageia.org/en/Mageia_3_Errata"><?php _e('Errata')?></a></li>
                <li><a href="//bugs.mageia.org/"><?php _e('Bugs Reports')?></a></li>
            </ul>
        </header>
        <section>
            <p class="unstable-release-warning"><?php _e('Be careful! This is a beta, unstable release.');
                _e('It is only intended for developer use. DO NOT USE THIS IN PRODUCTION OR FOR OFFICIAL REVIEW.'); ?></p>
            <div class="para">
                <h2><?php _e('Download %s', array('Mageia 3 beta4')); ?></h2>
                <ul class="dlinfo hl">
                    <li><?php _e('Up to 167 locales are supported:'); ?>
                        Deutsch, English, español, français, italiano, português, svenska, nederlands,
                        polski, dansk, Русский
                        <?php _e('and so much more!'); ?>
                        <a href="https://wiki.mageia.org/en/Mageia_2_supported_locales" hreflang="en"><?php _e('See the comprehensive list')?></a>.</li>
                    <li><?php
                        _e('Installer DVD and CD ISOs now contains Free Software and some proprietary drivers.');
                        _e('You will be asked of which kind of Software you want to install.');
                    ?></li>
                    <li><?php _e('Use LiveCDs or LiveDVDs for fresh new installs ONLY, NOT FOR UPGRADE.')?></li>
                    <li><?php _e('If you are looking for a stable version of Mageia, <a href="%s" rel="nofollow">go here</a>.', array('/downloads/'))?></li>
                    <li><?php _e('Enjoy! And <a href="%s">please report bugs</a> if you find some.', array('https://bugs.mageia.org/'))?></li>
                </ul>
                <br>
                <br>
                <table class="fr-table dlt2" style="width: 580px">
                <thead>
                    <tr>
                        <th><?php _e('Format');?></th>
                        <th class="size"><?php _e('size');?></th>
                        <th><?php _e('link');?></th>
<?php /*                        <th><?php _e('BitTorrent');?></th> */ ?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="name"><?php _e('Installer DVD')?><br>
                            <span class="dlinfo"><?php _e('Free Software and some proprietary drivers')?></span></th>
                        <td class="size">4.0GB</td>
                        <td><a rel="nofollow" href="?q=Mageia-3-beta4-i586-DVD.iso"><?php _e('32bit');?></a><br>
                            <a rel="nofollow" href="?q=Mageia-3-beta4-x86_64-DVD.iso"><?php _e('64bit');?></a></td>
<?php /*                        <td><a rel="nofollow" href="?q=Mageia-3-beta4-i586-DVD.iso&amp;torrent=1"><?php _e('32bit');?></a><br>
                            <a rel="nofollow" href="?q=Mageia-3-beta4-x86_64-DVD.iso&amp;torrent=1"><?php _e('64bit');?></a></td> */ ?>
                    </tr>
                    <tr>
                        <th class="name"><?php _e('Installer CD')?><br>
                            <span class="dlinfo"><?php _e('100% Free Software')?></span></th>
                        <td class="size">700MB</td>
                        <td><a rel="nofollow" href="?q=Mageia-3-beta4-dual-CD.iso"><?php _e('dualarch')?></a></td>
<?php /*                        <td><a rel="nofollow" href="?q=Mageia-3-beta4-dual-CD.iso&amp;torrent=1"><?php _e('dualarch')?></a></td> */ ?>
                    </tr>
                    <tr><td colspan="4">&nbsp;</td></tr>
                    <?php /*
                    <tr>
                        <th class="name"><?php _e('LiveDVD KDE')?><br>
                            <span class="dlinfo"><?php _e('not suitable for upgrade')?></span></th>
                        <td class="size">1.4GB</td>
                        <td><a rel="nofollow" href="?q=Mageia-3-beta4-LiveDVD-KDE4-i586-DVD.iso"><?php _e('32bit');?></a><br>
                            <a rel="nofollow" href="?q=Mageia-3-beta4-LiveDVD-KDE4-x86_64-DVD.iso"><?php _e('64bit');?></a></td>
                        <td><a rel="nofollow" href="?q=Mageia-3-beta4-LiveDVD-KDE4-i586-DVD.iso&amp;torrent=1"><?php _e('32bit');?></a><br>
                            <a rel="nofollow" href="?q=Mageia-3-beta4-LiveDVD-KDE4-x86_64-DVD.iso&amp;torrent=1"><?php _e('64bit');?></a></td>
                    </tr>
                    <tr>
                        <th class="name"><?php _e('LiveDVD GNOME')?><br>
                            <span class="dlinfo"><?php _e('not suitable for upgrade')?></th>
                        <td class="size">1.4GB</td>
                        <td><a rel="nofollow" href="?q=Mageia-3-beta4-LiveDVD-GNOME-i586-DVD.iso"><?php _e('32bit');?></a><br>
                            <a rel="nofollow" href="?q=Mageia-3-beta4-LiveDVD-GNOME-x86_64-DVD.iso"><?php _e('64bit');?></a></td>
                        <td><a rel="nofollow" href="?q=Mageia-3-beta4-LiveDVD-GNOME-i586-DVD.iso&amp;torrent=1"><?php _e('32bit');?></a><br>
                            <a rel="nofollow" href="?q=Mageia-3-beta4-LiveDVD-GNOME-x86_64-DVD.iso&amp;torrent=1"><?php _e('64bit');?></a></td>
                    </tr>
                    <tr><td colspan="4">&nbsp;</td></tr>
                    <tr>
                        <th class="name"><?php _e('LiveCD KDE, English-only')?><br>
                            <span class="dlinfo"><?php _e('not suitable for upgrade')?></th>
                        <td class="size">680MB</td>
                        <td><a rel="nofollow" href="?q=Mageia-3-beta4-LiveCD-KDE4-en-i586-CD.iso"><?php _e('32bit');?></a></td>
                        <td><a rel="nofollow" href="?q=Mageia-3-beta4-LiveCD-KDE4-en-i586-CD.iso&amp;torrent=1"><?php _e('32bit');?></a></td>
                    </tr>
                    <tr>
                        <th class="name"><?php _e('LiveCD GNOME, English-only')?><br>
                            <span class="dlinfo"><?php _e('not suitable for upgrade')?></th>
                        <td class="size">680MB</td>
                        <td><a rel="nofollow" href="?q=Mageia-3-beta4-LiveCD-GNOME-en-i586-CD.iso"><?php _e('32bit');?></a></td>
                        <td><a rel="nofollow" href="?q=Mageia-3-beta4-LiveCD-GNOME-en-i586-CD.iso&amp;torrent=1"><?php _e('32bit');?></a></td>
                    </tr>
                    <tr><td colspan="4">&nbsp;</td></tr>
                    <tr>
                    */ ?>
                        <th><?php _e('Network installer, Free Software CD')?></th>
                        <td class="size">~35MB<br>~20MB</td>
                        <td><a rel="nofollow" href="?q=Mageia-3-beta4-Boot-i586-CD.iso"><?php _e('32bit');?></a><br>
                            <a rel="nofollow" href="?q=Mageia-3-beta4-Boot-x86_64-CD.iso"><?php _e('64bit');?></a></td>
                    </tr>
                    <tr>
                        <th><?php _e('Network installer + nonfree firmware CD')?><br>
                            <span class="dlinfo"><?php _e('needed for some disc controllers, some network cards, etc.')?></span></th>
                        <td class="size">~55MB<br>~30MB</td>
                        <td><a rel="nofollow" href="?q=Mageia-3-beta4-Boot-nonfree-i586-CD.iso"><?php _e('32bit');?></a><br>
                            <a rel="nofollow" href="?q=Mageia-3-beta4-Boot-nonfree-x86_64-CD.iso"><?php _e('64bit');?></a></td>
                    </tr>
                </tbody>
                </table>
            </div>
        </section>
    </article>
</body>
</html>
