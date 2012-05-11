<?php

define('HLANG', true);
require '../../langs.php';
include 'locales.php';

$_t = i18n::get_strings($_t, $locale, $i18n_fallback_rules);

$_t['page_title'] = sprintf($_t['page_title'], 'Mageia 2', 'release candidate');
$_t['page_h1']    = sprintf($_t['page_h1'], 'Mageia 2', 'release candidate');

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
            <div class="yui-g">
                <div class="para"><p class="green-sign" style="margin-top: -13px;"><?php _e('rc-warning');?></p></div>
            </div>
            <div class="yui-ge bb1">
                <div class="yui-u first rb1">
                    <div class="para">
                        <h2>Mageia 2 rc Free Software Installation Flavours</h2>
                        <p class="dlinfo warn">Note that these DVD and CD ISOs are made of Free Software exclusively.
                            As a consequence, proprietary Wi-Fi and video drivers are not included.
                            If you need WiFi or specific video drivers <em>at install time</em>,
                            you should go with below LiveCDs instead.
                            You may, if you will, add nonfree software repository <em>after</em> the installation.</p>
                        <p class="dlinfo warn"><strong>Please note</strong>, there is a problem with notebooks using INTEL and AMD/ATI graphics. See
                            <a href=https://wiki.mageia.org/en/Mageia_2_Errata#Laptop_with_both_Intel_and_ATI_graphics_hardware>the errata</a>
                            about this.</p>
                        <p class="dlinfo">Up to 167 locales are supported:
                            Deutsch, English, español, français, italiano, português, svenska, nederlands,
                            polski, dansk, Русский and so much more! See the comprehensive list.</p>
                        <table class="fr-table dlt">
                        <tbody>
                            <tr>
                                <th>DVD<br><span class="dlinfo">(3.4GB)</span></th>
                                <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-i586-DVD.iso" title="Mageia 2 rc 32bit DVD">32bit</a>,
                                    <a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-i586-DVD.iso&amp;torrent=1" title="Mageia 2 rc 32bit DVD">torrent</a></td>
                                <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-x86_64-DVD.iso" title="Mageia 2 rc 64bit DVD">64bit</a>,
                                    <a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-x86_64-DVD.iso&amp;torrent=1" title="Mageia 2 rc 64bit DVD">torrent</a></td>
                            </tr>
                            <tr>
                                <th>CD<br><span class="dlinfo">(700MB)</span></th>
                                <td colspan="2"><a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-dual-CD.iso" title="Mageia 2 rc dual CD">dualarch</a>,
                                    <a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-dual-CD.iso&amp;torrent=1" title="Mageia 2 rc dual CD">torrent</a></td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="para">
                        <h2>Mageia 2 rc Wired Network-based Installation CD</h2>
                        <p class="dlinfo">Download quickly (about 40 MB) and immediately boot into install mode
                          from <em>wired</em> network or a local disk.</p>

                        <table class="fr-table dlt">
                        <tbody>
                          <tr>
                              <th>Pure Free Software</th>
                              <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-Boot-i586-CD.iso">32bit</a></td>
                              <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-Boot-x86_64-CD.iso">64bit</a></td>
                          </tr>
                          <tr>
                              <th>With added nonfree firmware<br>
                                  <span class="dlinfo">needed for some disc controllers, some network cards, etc.</span></th>
                              <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-Boot-nonfree-i586-CD.iso">32bit</a></td>
                              <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-Boot-nonfree-x86_64-CD.iso">64bit</a></td>
                          </tr>
                        </tbody>
                        </table>

                    </div>
                    <hr>
                    <div class="para">
                        <h2>Mageia 2 rc LiveCDs</h2>
                        <table class="dlt2">
                            <thead><tr><th></th><th>GNOME</th><th>KDE</th></tr></thead>
                            <tbody>
                                <tr>
                                    <th>Europe 1</th>
                                    <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-GNOME-Europe1-Americas-i586-CD.iso">32bit</a>,
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-GNOME-Europe1-Americas-i586-CD.iso&amp;torrent=1">torrent</a><br>
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-GNOME-Europe1-Americas-x86_64-CD.iso">64bit</a>,
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-GNOME-Europe1-Americas-x86_64-CD.iso&amp;torrent=1">torrent</a></td>
                                    <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-KDE4-Europe1-Americas-i586-CD.iso">32bit</a>,
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-KDE4-Europe1-Americas-i586-CD.iso&amp;torrent=1">torrent</a><br>
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-KDE4-Europe1-Americas-x86_64-CD.iso">64bit</a>,
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-KDE4-Europe1-Americas-x86_64-CD.iso&amp;torrent=1">torrent</a></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><p class="dlinfo">Included locales: <?php
                                        $product = get_info_for_product('Mageia-2-rc-LiveCD-GNOME-Europe1-Americas-i586-CD.iso');
                                        echo $product['langs'];
                                    ?></p></td>
                                </tr>
                                <tr>
                                    <th>Europe 2</th>
                                    <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-GNOME-Europe2-i586-CD.iso">32bit</a>,
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-GNOME-Europe2-i586-CD.iso&amp;torrent=1">torrent</a>  <br>
                                          <a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-GNOME-Europe2-x86_64-CD.iso">64bit</a>,
                                          <a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-GNOME-Europe2-x86_64-CD.iso&amp;torrent=1">torrent</a></td>
                                    <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-KDE4-Europe2-i586-CD.iso">32bit</a>,
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-KDE4-Europe2-i586-CD.iso&amp;torrent=1">torrent</a>  <br>
                                          <a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-KDE4-Europe2-x86_64-CD.iso">64bit</a>,
                                          <a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-KDE4-Europe2-x86_64-CD.iso&amp;torrent=1">torrent</a></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><p class="dlinfo">Included locales: <?php
                                        $p = get_info_for_product('Mageia-2-rc-LiveCD-GNOME-Europe2-i586-CD.iso');
                                        echo $p['langs'];
                                    ?></p></td>
                                </tr>
                                <tr>
                                    <th>Africa, India</th>
                                    <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-GNOME-Africa-India-i586-CD.iso">32bit</a>,
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-GNOME-Africa-India-i586-CD.iso&amp;torrent=1">torrent</a>  <br>
                                          <a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-GNOME-Africa-India-x86_64-CD.iso">64bit</a>,
                                          <a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-GNOME-Africa-India-x86_64-CD.iso&amp;torrent=1">torrent</a></td>
                                    <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-KDE4-Africa-India-i586-CD.iso">32bit</a>,
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-KDE4-Africa-India-i586-CD.iso&amp;torrent=1">torrent</a>  <br>
                                          <a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-KDE4-Africa-India-x86_64-CD.iso">64bit</a>,
                                          <a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-KDE4-Africa-India-x86_64-CD.iso&amp;torrent=1">torrent</a></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><p class="dlinfo">Included locales: <?php
                                        $p = get_info_for_product('Mageia-2-rc-LiveCD-GNOME-Africa-India-i586-CD.iso');
                                        echo $p['langs'];
                                    ?></p></td>
                                </tr>
                                <tr>
                                    <th>Asia</th>
                                    <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-GNOME-Asia-Noindia-i586-CD.iso">32bit</a>,
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-GNOME-Asia-Noindia-i586-CD.iso&amp;torrent=1">torrent</a>  <br>
                                          <a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-GNOME-Asia-Noindia-x86_64-CD.iso">64bit</a>,
                                          <a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-GNOME-Asia-Noindia-x86_64-CD.iso&amp;torrent=1">torrent</a></td>
                                    <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-KDE4-Asia-Noindia-i586-CD.iso">32bit</a>,
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-KDE4-Asia-Noindia-i586-CD.iso&amp;torrent=1">torrent</a>  <br>
                                          <a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-KDE4-Asia-Noindia-x86_64-CD.iso">64bit</a>,
                                          <a rel="nofollow" href="../downloads/get/?q=Mageia-2-rc-LiveCD-KDE4-Asia-Noindia-x86_64-CD.iso&amp;torrent=1">torrent</a></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><p class="dlinfo">Included locales: <?php
                                        $p = get_info_for_product('Mageia-2-rc-LiveCD-GNOME-Asia-Noindia-i586-CD.iso');
                                        echo $p['langs'];
                                    ?></p></td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="dlinfo">Download is approximately 700MB.</p>
                    </div>
                </div>
                <div class="yui-u">
                    <div class="para">
                        <h3><a href="https://wiki.mageia.org/en/Mageia_2_rc">Release notes</a></h3>
                        <p>You can check the <a href="https://wiki.mageia.org/en/Mageia_2_rc">release notes on the wiki</a>:
                            what's new, what to expect, what to test, how to report and contribute.</p>
                    </div>
                    <div class="para">
                        <h3>Release plan</h3>
                        <style>
                        .relcal { margin: 0; padding: 0; }
                        .relcal li { list-style-position: inside; margin-left: -2em; padding: 0.2em 0 0.5em 1em; }
                        .relcal li.now { background: #eee; color: #333; }
                        </style>
                        <ul class="relcal">
                            <li class="now"><abbr title="release candidate">rc</abbr>: May&nbsp;9<sup>th</sup></li>
                            <li>final: May&nbsp;22<sup>nd</sup></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
