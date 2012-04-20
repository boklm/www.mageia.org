<?php

define('HLANG', true);
require '../../langs.php';
include 'locales.php';

$_t = i18n::get_strings($_t, $locale, $i18n_fallback_rules);

$_t['page_h1'] = sprintf($_t['page_h1'], '<em class="tag">Mageia 2 beta3</em>');
$_t['page_title'] = sprintf($_t['page_title'], 'Mageia 2 beta3');

require '../downloads/lib.php';
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
<body class="release">
    <?php echo $hsnav; ?>
    <div id="doc4" class="yui-t7">
        <?php include 'nav.php'; ?>
        <div id="hd" role="banner"><h1><a id="logo" href="/<?php echo $locale; ?>/"><span>Mageia</span></a> <span class="lsep">|</span>
            <span class="subh">2 <em class="tag">beta3</em></span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para">
                    <p class="red-sign" style="margin-top: -13px;">
                    This is a <em>beta</em> release &ndash;
                        PLEASE DO NOT use it for production.</p>
                </div>
            </div>
            <div class="yui-ge bb1">
                <div class="yui-u first rb1">
                    <div class="para">
                        <h2>Download and test Mageia 2 beta3</h2>
                        <p>You can check the <a href="https://wiki.mageia.org/en/Mageia_2_beta3">release notes on the wiki</a>:
                            what's new, what to expect, what to test, how to report and contribute.</p>
                        <?php /*
                        <p>Major features planned for the final release notably include:</p>
                        <ul>
                            <li>KDE 4.8.x, GNOME 3.4.x, Sugar 0.95,</li>
                            <li>glibc 2.14.1, kernel 3.3, systemd,</li>
                            <li>MariaDB 5.5, PostgreSQL 8.4.10, 9.0.6 and 9.1.2,</li>
                            <br>
                            <li>upgradable from Mageia 1 (which was from Mandriva 2010.0 and 2010.1)</li>
                            <li>stable, secure, maintained,</li>
                            <li>and many others.</li>
                        </ul>
                        <p>Major benefits from Mageia 2:</p>
                        <ul>
                            <li>.</li>
                        </ul>
                        */ ?>
                    </div>
                    <div class="para">
                        <h3>Full, exclusively Free Software DVDs and dual arch CD</h3>
                        <ul>
                            <li><a rel="nofollow" href="../downloads/get/?q=Mageia-2-beta3-i586-DVD.iso">Mageia 2 beta3 32bit DVD</a>,
                              <a rel="nofollow" href="../downloads/get/?q=Mageia-2-beta3-i586-DVD.iso&amp;torrent=1">torrent</a></li>
                            <li><a rel="nofollow" href="../downloads/get/?q=Mageia-2-beta3-x86_64-DVD.iso">Mageia 2 beta3 64bit DVD</a>,
                              <a rel="nofollow" href="../downloads/get/?q=Mageia-2-beta3-x86_64-DVD.iso&amp;torrent=1">torrent</a></li>
                            <li><a rel="nofollow" href="../downloads/get/?q=Mageia-2-beta3-dual-CD.iso">Mageia 2 beta3 dual CD</a>,
                              <a rel="nofollow" href="../downloads/get/?q=Mageia-2-beta3-dual-CD.iso&amp;torrent=1">torrent</a></li>
                        </ul>
                        <p class="dlinfo warn">Note that these DVD and CD ISOs are made of Free Software exclusively.
                            As a consequence, proprietary Wi-Fi and video drivers are not included.
                            If you need WiFi or specific video drivers <em>at install time</em>,
                            you should go with below LiveCDs instead.
                            You may, if you will, add nonfree software repository <em>after</em> the installation.</p>
                        <p class="dlinfo warn"><strong>Please note</strong>, there is a problem with notebooks using INTEL and AMD/ATI graphics. See
                            <a href=https://wiki.mageia.org/en/Mageia_2_Errata#Laptop_with_both_Intel_and_ATI_graphics_hardware>the errata</a>
                            about this.</p>
                        <p class="dlinfo warn">Please note there is a bug about LiveCDs and NVIDIA graphic cards. A workaround can be found in
			    <a href="https://wiki.mageia.org/en/Mageia_2_Errata#LiveCD_and_Nvidia_card">the Errata</a></p>
                        <p class="dlinfo">Up to 167 locales are supported:
                            Deutsch, English, español, français, italiano, português, svenska, nederlands,
                            polski, dansk, Русский and so much more! See the comprehensive list.</p>
                    </div>
                    <div class="para">
                        <h3>Wired network-based install CD</h3>
                        <ul>
                            <li><a rel="nofollow" href="../downloads/get/?q=Mageia-2-beta3-Boot-i586-CD.iso">32bit</a></li>
                            <li><a rel="nofollow" href="../downloads/get/?q=Mageia-2-beta3-Boot-x86_64-CD.iso">64bit</a></li>
                        </ul>
                        <p class="dlinfo">Good to download (about 40 MB) and boot quickly into install mode
                          from <em>wired</em> network or local disk.</p>
                    </div>
                    <div class="para">
                        <h3>LiveCDs, for a live test or full install</h3>
                        <!--<p>beta2 LiveCDs still have blocking issues; will be available later.</p>-->
                        <table class="dlt2">
                            <thead><tr><th></th><th>GNOME</th><th>KDE</th></tr></thead>
                            <tbody>
                                <tr>
                                    <th>Europe 1</th>
                                    <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-beta3-LiveCD-GNOME-Europe1-Americas-i586-CD.iso">32bit</a>,
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-beta3-LiveCD-GNOME-Europe1-Americas-i586-CD.iso&amp;torrent=1">torrent</a><br>
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-beta3-LiveCD-GNOME-Europe1-Americas-x86_64-CD.iso">64bit</a>,
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-beta3-LiveCD-GNOME-Europe1-Americas-x86_64-CD.iso&amp;torrent=1">torrent</a></td>
                                    <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-beta3-LiveCD-KDE4-Europe1-Americas-i586-CD.iso">32bit</a>,
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-beta3-LiveCD-KDE4-Europe1-Americas-i586-CD.iso&amp;torrent=1">torrent</a><br>
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-beta3-LiveCD-KDE4-Europe1-Americas-x86_64-CD.iso">64bit</a>,
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-beta3-LiveCD-KDE4-Europe1-Americas-x86_64-CD.iso&amp;torrent=1">torrent</a></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><p class="dlinfo">Included locales:
                                        German (de), Greek (el), English (Australia) (en_AU), English (Canada) (en_CA), English (en_GB), English (Ireland) (en_IE), English (New-Zealand) (en_NZ), English (American) (en_US), English (South Africa) (en_ZA), Spanish (es), French (fr), Italian (it), Dutch (nl), Portuguese (pt), Portuguese Brazil (pt_BR), Turkish (tr)
                                    </p></td>
                                </tr>
                                <tr>
                                    <th>Europe 2</th>
                                    <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-beta3-LiveCD-GNOME-Europe2-i586-CD.iso">32bit</a>,
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-beta3-LiveCD-GNOME-Europe2-i586-CD.iso&amp;torrent=1">torrent</a></td>
                                    <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-beta3-LiveCD-KDE4-Europe2-i586-CD.iso">32bit</a>,
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-beta3-LiveCD-KDE4-Europe2-i586-CD.iso&amp;torrent=1">torrent</a></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><p class="dlinfo">Included locales:
                                        Bulgarian (bg), Czech (cs), Danish (da), English (American) (en_US), Estonian (et), Finnish (Suomi) (fi), Croatian (hr), Hungarian (hu), Lithuanian (lt), Latvian (lv), Norwegian Bokmaal (nb), Norwegian Nynorsk (nn), Polish (pl), Romanian (ro), Russian (ru), Swedish (sv), Ukrainian (uk), Uzbek (uz), Uzbek (cyrillic) (uz@cyrillic)
                                    </p></td>
                                </tr>
                                <tr>
                                    <th>Africa, India</th>
                                    <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-beta3-LiveCD-GNOME-Africa-India-i586-CD.iso">32bit</a>,
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-beta3-LiveCD-GNOME-Africa-India-i586-CD.iso&amp;torrent=1">torrent</a></td>
                                    <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-beta3-LiveCD-KDE4-Africa-India-i586-CD.iso">32bit</a>,
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-beta3-LiveCD-KDE4-Africa-India-i586-CD.iso&amp;torrent=1">torrent</a></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><p class="dlinfo">Included locales:
                                        Afrikaans (af), Amharic (am), Arabic (ar), Assamese (as), Berber (ber), Bengali (bn), English (American) (en_US), Hausa (ha), Hebrew (he), Hindi (hi), Igbo (ig), Kannada (kn), Malayalam (ml), Marathi (mr), Punjabi (gurmukhi) (pa_IN), Tamil (ta), Tswana (tn), Tsonga (ts), Venda (ve), Xhosa (xh), Yoruba (yo), Zulu (zu)                                </p></td>
                                </tr>
                                <tr>
                                    <th>Asia</th>
                                    <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-beta3-LiveCD-GNOME-Asia-Noindia-i586-CD.iso">32bit</a>,
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-beta3-LiveCD-GNOME-Asia-Noindia-i586-CD.iso&amp;torrent=1">torrent</a></td>
                                    <td><a rel="nofollow" href="../downloads/get/?q=Mageia-2-beta3-LiveCD-KDE4-Asia-Noindia-i586-CD.iso">32bit</a>,
                                      <a rel="nofollow" href="../downloads/get/?q=Mageia-2-beta3-LiveCD-KDE4-Asia-Noindia-i586-CD.iso&amp;torrent=1">torrent</a></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><p class="dlinfo">Included locales:
                                        English (American) (en_US), Indonesian (id), Japanese (ja), Korean (ko), Thai (th), Vietnamese (vi), Chinese Simplified (zh_CN), Chinese Traditional (zh_TW)
                                    </p></td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="dlinfo">Download is approximately 700MB.</p>
                    </div>
                </div>
                <div class="yui-u">
                    <div class="para">
                        <h3><a href="https://wiki.mageia.org/en/Mageia_2_beta3">Release notes</a></h3>
                        <p>are <a href="https://wiki.mageia.org/en/Mageia_2_beta3">on the wiki</a>!</p>
                    </div>
                    <div class="para">
                        <h3>Release calendar</h3>
                        <p>Here are the next steps before the final release of Mageia 2:</p>
                        <style>
                        .relcal { margin: 0; padding: 0; }
                        .relcal li { list-style-position: inside; margin-left: -2em; padding: 0.2em 0 0.5em 1em; }
                        .relcal li.now { background: #eee; color: #333; }
                        </style>
                        <ul class="relcal">
                            <!--<li class="now">beta2: March&nbsp;15<sup>th</sup></li>-->
                            <li class="now">beta3: April&nbsp;14<sup>th</sup></li>
                            <li><abbr title="release candidate">rc</abbr>: May&nbsp;2<sup>nd</sup></li>
                            <li>final: May&nbsp;15<sup>th</sup></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
