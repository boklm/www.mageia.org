<?php

define('HLANG', true);
require '../../langs.php';

_lang_load($locale, '3');

require '../downloads/get/lib.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php _e('Download Mageia 3')?></title>
    <meta name="description" content="<?php _e('Download Mageia 3 DVD, CD, LiveCD, network install ISO images.') ?>">
    <meta name="keywords" content="<?php _e('mageia, mageia 3, linux, free, download, iso, torrent, vm, http, ftp, rsync, bittorrent')?>">
    <meta name="robots" content="index,nofollow,nosnippet">
    <link rel="canonical" href="/<?php echo $locale; ?>/3/">
    <link rel="stylesheet" href="/g/style/all.css">
    <?php include '../../analytics.php'; ?>
</head>
    <base href="../downloads/get/">
<body class="release downloads">
    <?php echo $hsnav; ?>
    <h1 id="mgnavt"><?php _e('Download <strong>Mageia 3</strong>')?></h1>
    <?php include '../3/nav.php'; ?>
    <div id="doc4" class="yui-t7">
        <div id="bd" role="main">
            <div class="yui-ge bb1">
                <div class="yui-u first rb1">
                    <div class="para">
                        <h2><?php _e('Classical Installation Flavours')?></h2>
                        <table class="fr-table dlt2">
                        <thead>
                            <tr>
                                <th><?php _e('Format');?></th>
                                <th class="size"><?php _e('size');?></th>
                                <th><?php _e('link');?></th>
                                <th>BitTorrent</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="name">DVD 32bit</th>
                                <td class="size">3.9GB</td>
                                <td><a rel="nofollow" href="?q=Mageia-3-i586-DVD.iso" title="Mageia 3 32bit DVD"><?php _e('32bit');?></a></td>
                                <td><a rel="nofollow" href="?q=Mageia-3-i586-DVD.iso&amp;torrent=1" title="Mageia 3 32bit DVD"><?php _e('32bit');?></a></td>
                            </tr>
                            <tr>
                                <th class="name">DVD 64bit</th>
                                <td class="size">3.9GB</td>
                                <td><a rel="nofollow" href="?q=Mageia-3-x86_64-DVD.iso" title="Mageia 3 64bit DVD"><?php _e('64bit');?></a></td>
                                <td><a rel="nofollow" href="?q=Mageia-3-x86_64-DVD.iso&amp;torrent=1" title="Mageia 3 64bit DVD"><?php _e('64bit');?></a></td>
                            </tr>
                            <tr>
                                <th class="name">CD</th>
                                <td class="size">700MB</td>
                                <td><a rel="nofollow" href="?q=Mageia-3-dual-CD.iso" title="Mageia 3 dual CD"><?php _e('dualarch')?></a></td>
                                <td><a rel="nofollow" href="?q=Mageia-3-dual-CD.iso&amp;torrent=1" title="Mageia 3 dual CD"><?php _e('dualarch')?></a></td>
                            </tr>
                        </tbody>
                        </table>
                        
                        <p class="dlinfo"><?php _e('Notes:'); ?></p>
                        <ul class="dlinfo hl">
                            <li><?php _e('Up to 167 locales are supported:'); ?>
                                Deutsch, English, español, français, italiano, português, svenska, nederlands,
                                polski, dansk, Русский
                                <?php _e('and so much more!'); ?>
                                <a href="https://wiki.mageia.org/en/Mageia_2_supported_locales" hreflang="en"><?php _e('See the comprehensive list')?></a>.</li>
                            <li><?php
                                _e('These DVD and CD ISOs contains Free Software and some proprietary drivers.');
                                _e('You will be asked of which kind of Software you want to install.');
                                ?></li>
                            <li><?php _e('The CD contains only a minimal list of packages.')?></li>
                        </ul>
                    </div>

                    <div class="para">
                        <h2><?php _e('LiveCDs and LiveDVDs');?></h2>
                        <p class="dlinfo"><?php _e('Use LiveCDs and LiveDVDs for fresh new installs ONLY.');?>
                            <span class="warn"><?php _e('DO NOT use these LiveCDs or LiveDVDs to upgrade from Mageia 2!'); ?></span>
                            <?php _e('Use above DVD or CD and see <a href="%s" hreflang="en">upgrade guide</a>.', array('https://wiki.mageia.org/en/Mageia_3_Release_Notes#Upgrading_from_Mageia_2'));?></p>
                        <table class="fr-table dlt2">
                        <thead>
                            <tr>
                                <th><?php _e('Desktop');?></th>
                                <th class="size"><?php _e('size');?></th>
                                <th><?php _e('link');?></th>
                                <th><?php _e('BitTorrent');?></th>
                            </tr>
                        </thead>                        
			<tbody>
                                <tr>
                        <th class="name"><?php _e('LiveDVD KDE')?><br>           
                            <span class="dlinfo"><?php _e('All languages')?></th>
                        <td class="size">1.4GB</td>
                        <td><a rel="nofollow" href="?q=Mageia-3-LiveDVD-KDE4-i586-DVD.iso"><?php _e('32bit');?></a><br>
                            <a rel="nofollow" href="?q=Mageia-3-LiveDVD-KDE4-x86_64-DVD.iso"><?php _e('64bit');?></a></td>
                        <td><a rel="nofollow" href="?q=Mageia-3-LiveDVD-KDE4-i586-DVD.iso&amp;torrent=1"><?php _e('32bit');?></a><br>
                            <a rel="nofollow" href="?q=Mageia-3-LiveDVD-KDE4-x86_64-DVD.iso&amp;torrent=1"><?php _e('64bit');?></a></td>
                    </tr>
                    <tr>
                        <th class="name"><?php _e('LiveDVD GNOME')?><br>           
                            <span class="dlinfo"><?php _e('All languages')?></th></th>
                        <td class="size">1.4GB</td>
                        <td><a rel="nofollow" href="?q=Mageia-3-LiveDVD-GNOME-i586-DVD.iso"><?php _e('32bit');?></a><br>
                            <a rel="nofollow" href="?q=Mageia-3-LiveDVD-GNOME-x86_64-DVD.iso"><?php _e('64bit');?></a></td>
                        <td><a rel="nofollow" href="?q=Mageia-3-LiveDVD-GNOME-i586-DVD.iso&amp;torrent=1"><?php _e('32bit');?></a><br>
                            <a rel="nofollow" href="?q=Mageia-3-LiveDVD-GNOME-x86_64-DVD.iso&amp;torrent=1"><?php _e('64bit');?></a></td>
                    <tr>
                        <th class="name"><?php _e('LiveCD KDE')?><br>
                            <span class="dlinfo"><?php _e('English only')?></th>
                        <td class="size">700MB</td>
                        <td><a rel="nofollow" href="?q=Mageia-3-LiveCD-KDE4-en-i586-CD.iso"><?php _e('32bit');?></a></td>
                        <td><a rel="nofollow" href="?q=Mageia-3-LiveCD-KDE4-en-i586-CD.iso&amp;torrent=1"><?php _e('32bit');?></a></td>
                    </tr>
                    <tr>
                        <th class="name"><?php _e('LiveCD GNOME')?><br>
                            <span class="dlinfo"><?php _e('English only')?></th>
                        <td class="size">700MB</td>
                        <td><a rel="nofollow" href="?q=Mageia-3-LiveCD-GNOME-en-i586-CD.iso"><?php _e('32bit');?></a></td>
                        <td><a rel="nofollow" href="?q=Mageia-3-LiveCD-GNOME-en-i586-CD.iso&amp;torrent=1"><?php _e('32bit');?></a></td>
                    </tr>

                        </tbody>
                        </table>

                    </div>
                    
                    <div class="para">
                        <h2><?php _e('Wired Network-based Installation CD')?></h2>
                        <p class="dlinfo"><?php _e('Download quickly and immediately boot into install mode from <em>wired</em> network or a local disk.')?></p>

                        <table class="fr-table dlt2">
                        <thead>
                          <tr>
                              <th><?php _e('Format');?></th>
                              <th class="size"><?php _e('size');?></th>
                              <th colspan="2"><?php _e('link');?></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                        <th><?php _e('Network installer, Free Software CD')?></th>
                        <td class="size">~35MB<br>~20MB</td>
                        <td><a rel="nofollow" href="?q=Mageia-3-Boot-i586-CD.iso"><?php _e('32bit');?></a><br>
                            <a rel="nofollow" href="?q=Mageia-3-Boot-x86_64-CD.iso"><?php _e('64bit');?></a></td>
                    </tr>
                    <tr>
                        <th><?php _e('Network installer + nonfree firmware CD')?><br>
                            <span class="dlinfo"><?php _e('needed for some disc controllers, some network cards, etc.')?></span></th>
                        <td class="size">~55MB<br>~30MB</td>
                        <td><a rel="nofollow" href="?q=Mageia-3-Boot-nonfree-i586-CD.iso"><?php _e('32bit');?></a><br>
                            <a rel="nofollow" href="?q=Mageia-3-Boot-nonfree-x86_64-CD.iso"><?php _e('64bit');?></a></td>
                    </tr>
                        </tbody>
                        </table>


                    </div>
                </div>
                <div class="yui-u">
                    <div class="para" style="padding-left: 1em;">
                        <h2>Mageia 3</h2>
                        <?php _h('May 19<sup>th</sup> 2013')?>
                        <ul class="hl">
                            <li><?php _e('<a href="%s">Release notes</a>', array('https://wiki.mageia.org/en/Mageia_3_Release_Notes'))?></li>
                            <li><?php _e('<a href="%s">Errata</a>', array('https://wiki.mageia.org/en/Mageia_3_Errata'))?></li>
                            <li><?php _e('<a href="%s">Which to choose</a>', array('https://wiki.mageia.org/en/Installation_Media'))?></li>
                            <li><?php _e('<a href="%s">Get ISO on USB flash stick</a>', array('https://wiki.mageia.org/en/Installation_Media#Dump_Mageia_ISO_on_a_USB_flash_stick.3F'))?></li>
                        </ul>
                        <br>
                        <br>
                        <?php _h('Upgrading<br>from Mageia 2?', null, 'h3')?>
                        <ul class="hl"><?php
                            _h('<strong>do not</strong> use LiveCDs;', null, 'li');
                            _h('see the <a href="%s" hreflang="en">upgrade guide</a>', array('https://wiki.mageia.org/en/Mageia_3_Release_Notes#Upgrading_from_Mageia_2'), 'li');
                        ?></ul>
                        <br>
                        <br>
                        <?php
                            _h('Looking for Mageia 2?', null, 'h3');
                            echo '<p>';
                            _e('It is <a href="%s">here now</a>.', array('/2/'));
                            echo '</p>';
                        ?>
                        <br>
                        <br>
                        <?php
                            _h('Looking for Mageia 1?', null, 'h3');
                            echo '<p>';
                            _e('It is <a href="%s">here now</a>.', array('../1/'));
                            _e('But please remember that it already <a href="http://blog.mageia.org/en/2012/12/02/mageia-1-eol"/>reached EOL</a>.', null, '');
                            echo '</p>';
                        ?>
                        <br>
                        <br>
                        <?php
                            _h('Need more challenge?', null, 'h3');
                            _h('You can help us <a href="%s">on Mageia 4</a>.', array('/contribute/'));
                        ?>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
