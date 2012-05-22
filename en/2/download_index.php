<?php

define('HLANG', true);
require '../../langs.php';
include 'locales.php';

$_t = i18n::get_strings($_t, $locale, $i18n_fallback_rules);

$_t['page_title'] = sprintf($_t['page_title'], 'Mageia 2', '');
$_t['page_h1']    = sprintf($_t['page_h1'], 'Mageia 2', '');

require '../downloads/get/lib.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php echo $_t['page_title']; ?></title>
    <meta name="description" content="<?php echo $_t['page_desc']; ?>">
    <meta name="keywords" content="<?php echo $_t['page_kw']; ?>">
    <meta name="robots" content="noindex,nofollow,nosnippet">
    <link rel="canonical" href="/<?php echo $locale; ?>/2/">
    <link rel="stylesheet" href="/g/style/all.css">
    <?php include '../../analytics.php'; ?>
</head>
<body class="release downloads">
    <?php echo $hsnav; ?>
    <h1 id="mgnavt"><?php _e('page_h1')?></h1>
    <div id="doc4" class="yui-t7">
        <div id="bd" role="main">
            <div class="yui-ge bb1">
                <div class="yui-u first rb1">
                    <div class="para">
                        <h2>Free Software Installation Flavours</h2>
                        <table class="fr-table dlt2">
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
                                <th class="name">DVD 32bit</th>
                                <td class="size">3.4GB</td>
                                <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-i586-DVD.iso" title="Mageia 2 32bit DVD">32bit</a></td>
                                <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-i586-DVD.iso&amp;torrent=1" title="Mageia 2 32bit DVD">32bit</a></td>
                            </tr>
                            <tr>
                                <th class="name">DVD 64bit</th>
                                <td class="size">3.4GB</td>
                                <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-x86_64-DVD.iso" title="Mageia 2 64bit DVD">64bit</a></td>
                                <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-x86_64-DVD.iso&amp;torrent=1" title="Mageia 2 64bit DVD">64bit</a></td>
                            </tr>
                            <tr>
                                <th class="name">CD</th>
                                <td class="size">700MB</td>
                                <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-dual-CD.iso" title="Mageia 2 dual CD">dualarch</a></td>
                                <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-dual-CD.iso&amp;torrent=1" title="Mageia 2 dual CD">dualarch</a></td>
                            </tr>
                        </tbody>
                        </table>
                        
                        <p class="dlinfo">Notes:</p>
                        <ul class="dlinfo hl">
                            <li>Up to 167 locales are supported:
                                Deutsch, English, español, français, italiano, português, svenska, nederlands,
                                polski, dansk, Русский and so much more! See the comprehensive list.</li>
                            <li>These DVD and CD ISOs are made of Free Software exclusively.
                                As a consequence, <span class="warn">proprietary Wi-Fi and video drivers are not included.
                                    If you need WiFi or specific video drivers <em>at install time</em>,
                                    you should go with below LiveCDs instead.</span>
                                    You may, if you will, add nonfree software repository <em>after</em> the installation.</li>
                            <li>Please note that there is a <span class="warn">problem with notebooks using INTEL and AMD/ATI graphics</span>.
                                <a href="https://wiki.mageia.org/en/Mageia_2_Errata#Hardware_Issues">See the errata
                                about this</a>.</p>
                        </ul>
                    </div>

                    <div class="para">
                        <h2>LiveCDs</h2>
                        <p class="dlinfo">Use LiveCDs for fresh new installs ONLY.
                            <span class="warn">DO NOT use those LiveCDs to upgrade from Mageia 1!</span>
                            Use above DVD or CD and see the
                            <a href="https://wiki.mageia.org/en/Mageia_2_Release_Notes#Upgrading_from_Mageia_1" hreflang="en">upgrade guide</a>.</p>
                        <table class="dlt2">
                            <thead><tr><th></th><th style="color: black;">GNOME</th><th style="color: black;">KDE</th></tr></thead>
                            <tbody>
                                <tr>
                                    <th>Europe 1 &ndash; America</th>
                                    <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-GNOME-Europe1-Americas-i586-CD.iso">32bit</a>,
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-GNOME-Europe1-Americas-i586-CD.iso&amp;torrent=1">torrent</a><br>
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-GNOME-Europe1-Americas-x86_64-CD.iso">64bit</a>,
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-GNOME-Europe1-Americas-x86_64-CD.iso&amp;torrent=1">torrent</a></td>
                                    <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-KDE4-Europe1-Americas-i586-CD.iso">32bit</a>,
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-KDE4-Europe1-Americas-i586-CD.iso&amp;torrent=1">torrent</a><br>
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-KDE4-Europe1-Americas-x86_64-CD.iso">64bit</a>,
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-KDE4-Europe1-Americas-x86_64-CD.iso&amp;torrent=1">torrent</a></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><p class="dlinfo">Included locales: <?php
                                        $product = get_info_for_product('Mageia-2-LiveCD-GNOME-Europe1-Americas-i586-CD.iso');
                                        echo $product['langs'];
                                    ?></p></td>
                                </tr>
                                <tr>
                                    <th>Europe 2</th>
                                    <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-GNOME-Europe2-i586-CD.iso">32bit</a>,
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-GNOME-Europe2-i586-CD.iso&amp;torrent=1">torrent</a>  <br>
                                          <a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-GNOME-Europe2-x86_64-CD.iso">64bit</a>,
                                          <a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-GNOME-Europe2-x86_64-CD.iso&amp;torrent=1">torrent</a></td>
                                    <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-KDE4-Europe2-i586-CD.iso">32bit</a>,
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-KDE4-Europe2-i586-CD.iso&amp;torrent=1">torrent</a>  <br>
                                          <a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-KDE4-Europe2-x86_64-CD.iso">64bit</a>,
                                          <a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-KDE4-Europe2-x86_64-CD.iso&amp;torrent=1">torrent</a></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><p class="dlinfo">Included locales: <?php
                                        $p = get_info_for_product('Mageia-2-LiveCD-GNOME-Europe2-i586-CD.iso');
                                        echo $p['langs'];
                                    ?></p></td>
                                </tr>
                                <tr>
                                    <th>Africa, India</th>
                                    <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-GNOME-Africa-India-i586-CD.iso">32bit</a>,
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-GNOME-Africa-India-i586-CD.iso&amp;torrent=1">torrent</a>  <br>
                                          <a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-GNOME-Africa-India-x86_64-CD.iso">64bit</a>,
                                          <a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-GNOME-Africa-India-x86_64-CD.iso&amp;torrent=1">torrent</a></td>
                                    <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-KDE4-Africa-India-i586-CD.iso">32bit</a>,
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-KDE4-Africa-India-i586-CD.iso&amp;torrent=1">torrent</a>  <br>
                                          <a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-KDE4-Africa-India-x86_64-CD.iso">64bit</a>,
                                          <a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-KDE4-Africa-India-x86_64-CD.iso&amp;torrent=1">torrent</a></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><p class="dlinfo">Included locales: <?php
                                        $p = get_info_for_product('Mageia-2-LiveCD-GNOME-Africa-India-i586-CD.iso');
                                        echo $p['langs'];
                                    ?></p></td>
                                </tr>
                                <tr>
                                    <th>Asia</th>
                                    <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-GNOME-Asia-no-India-i586-CD.iso">32bit</a>,
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-GNOME-Asia-no-India-i586-CD.iso&amp;torrent=1">torrent</a>  <br>
                                          <a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-GNOME-Asia-no-India-x86_64-CD.iso">64bit</a>,
                                          <a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-GNOME-Asia-no-India-x86_64-CD.iso&amp;torrent=1">torrent</a></td>
                                    <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-KDE4-Asia-no-India-i586-CD.iso">32bit</a>,
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-KDE4-Asia-no-India-i586-CD.iso&amp;torrent=1">torrent</a>  <br>
                                          <a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-KDE4-Asia-no-India-x86_64-CD.iso">64bit</a>,
                                          <a rel="nofollow" href="../downloads/get/?q=Mageia-2-LiveCD-KDE4-Asia-no-India-x86_64-CD.iso&amp;torrent=1">torrent</a></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><p class="dlinfo">Included locales: <?php
                                        $p = get_info_for_product('Mageia-2-LiveCD-GNOME-Asia-no-India-i586-CD.iso');
                                        echo $p['langs'];
                                    ?></p></td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="dlinfo">Each download is approximately 700MB.</p>
                    </div>
                    
                    <div class="para">
                        <h2>Wired Network-based Installation CD</h2>
                        <p class="dlinfo">Download quickly (about 40 MB) and immediately boot into install mode
                          from <em>wired</em> network or a local disk.</p>

                        <table class="fr-table dlt2">
                        <thead>
                          <tr>
                              <th>Format</th>
                              <th colspan="2"><?php _e('link');?></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                              <th>Pure Free Software CD</th>
                              <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-Boot-i586-CD.iso">32bit</a></td>
                              <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-Boot-x86_64-CD.iso">64bit</a></td>
                          </tr>
                          <tr>
                              <th>Same + nonfree firmware<br>
                                  <span class="dlinfo">needed for some disc controllers, some network cards, etc.</span></th>
                              <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-Boot-nonfree-i586-CD.iso">32bit</a></td>
                              <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-Boot-nonfree-x86_64-CD.iso">64bit</a></td>
                          </tr>
                        </tbody>
                        </table>


                    </div>
                </div>
                <div class="yui-u">
                    <div class="para" style="padding-left: 1em;">
                        <h2>Mageia 2</h2>
                        <p>May 22<sup>nd</sup> 2012</p>
                        <ul class="hl">
                            <li><a href="https://wiki.mageia.org/en/Mageia_2_Release_Notes">Release notes</a></li>
                            <li><a href="https://wiki.mageia.org/en/Mageia_2_Errata">Errata</a>.</li>
                        </ul>
                        <br>
                        <br>
                        <h3>Upgrading<br>from Mageia 1?</h3>
                        <p>Then:</p>
                        <ul class="hl">
                            <li><strong>do not</strong> use LiveCDs;</li>
                            <li>see the <a href="https://wiki.mageia.org/en/Mageia_2_Release_Notes#Upgrading_from_Mageia_1" hreflang="en">upgrade guide</a>.</li>
                        </ul>
                        <br>
                        <br>
                        <h3>Looking for Mageia 1?</h3>
                        <p>It is <a href="../downloads/1/">here now</a>.</p>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
