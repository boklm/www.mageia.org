<?php

define('HLANG', true);
require '../../langs.php';
include 'locales.php';

$_t = i18n::get_strings($_t, $locale, $i18n_fallback_rules);

$_t['page_h1'] = sprintf($_t['page_h1'], '<em class="tag">Mageia 2 alpha1</em>');
$_t['page_title'] = sprintf($_t['page_title'], 'Mageia 2 alpha1');

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
    <link rel="canonical" href="/<?php echo $locale; ?>/1/">
    <link rel="stylesheet" href="/g/style/all.css">
    <?php include '../../analytics.php'; ?>
</head>
<body class="release">
    <?php echo $hsnav; ?>
    <div id="doc4" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/<?php echo $locale; ?>/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh">2 <em class="tag">alpha1</em></span></h1></div>
        <?php include 'nav.php'; ?>
        <div id="bd" role="main">
            <div class="yui-g bb1">
                <div class="para">
                    <p class="red-sign">
                    This release is an <em>alpha</em>, that is, unstable, and primarily aimed at technical people
                        for identifying and fixing bugs &ndash;
                        PLEASE DO NOT use it in production context or for review.</p>

                    <p>You can check the <a href="https://wiki.mageia.org/en/Mageia_2_alpha1">release notes on the wiki</a>:
                        what's new, what to expect, what to test, how to report and contribute.</p>
                </div>
            </div>
            <div class="yui-g">
                <div class="yui-u first rb1"><div class="para">

                    <h2>LiveCDs, for a live test or full install</h2>
                    <table class="dlt2">
                        <thead><tr><th></th><th>GNOME</th><th>KDE</th></tr></thead>
                        <tbody>
                            <tr>
                                <th>Europe 1</th>
                                <td><a href="../downloads/get/?q=Mageia-2-alpha1-LiveCD-GNOME-Europe1-Americas-i586-CD.iso">32bit</a>,
                                  <a href="../downloads/get/?q=Mageia-2-alpha1-LiveCD-GNOME-Europe1-Americas-i586-CD.iso&amp;torrent=1">torrent</a><br>
                                  <a href="../downloads/get/?q=Mageia-2-alpha1-LiveCD-GNOME-Europe1-Americas-x86_64-CD.iso">64bit</a>,
                                  <a href="../downloads/get/?q=Mageia-2-alpha1-LiveCD-GNOME-Europe1-Americas-x86_64-CD.iso&amp;torrent=1">torrent</a></td>
                                <td><a href="../downloads/get/?q=Mageia-2-alpha1-LiveCD-KDE4-Europe1-Americas-i586-CD.iso">32bit</a>,
                                  <a href="../downloads/get/?q=Mageia-2-alpha1-LiveCD-KDE4-Europe1-Americas-i586-CD.iso&amp;torrent=1">torrent</a><br>
                                  <a href="../downloads/get/?q=Mageia-2-alpha1-LiveCD-KDE4-Europe1-Americas-x86_64-CD.iso">64bit</a>,
                                  <a href="../downloads/get/?q=Mageia-2-alpha1-LiveCD-KDE4-Europe1-Americas-x86_64-CD.iso&amp;torrent=1">torrent</a></td>
                            </tr>
                            <tr>
                                <td colspan="3"><p class="dlinfo">Included locales:
                                    German (de), Greek (el), English (Australia) (en_AU), English (Canada) (en_CA), English (en_GB), English (Ireland) (en_IE), English (New-Zealand) (en_NZ), English (American) (en_US), English (South Africa) (en_ZA), Spanish (es), French (fr), Italian (it), Dutch (nl), Portuguese (pt), Portuguese Brazil (pt_BR), Turkish (tr)
                                </p></td>
                            </tr>
                            <tr>
                                <th>Europe 2</th>
                                <td><a href="../downloads/get/?q=Mageia-2-alpha1-LiveCD-GNOME-Europe2-i586-CD.iso">32bit</a>,
                                  <a href="../downloads/get/?q=Mageia-2-alpha1-LiveCD-GNOME-Europe2-i586-CD.iso&amp;torrent=1">torrent</a></td>
                                <td><a href="../downloads/get/?q=Mageia-2-alpha1-LiveCD-KDE4-Europe2-i586-CD.iso">32bit</a>,
                                  <a href="../downloads/get/?q=Mageia-2-alpha1-LiveCD-KDE4-Europe2-i586-CD.iso&amp;torrent=1">torrent</a></td>
                            </tr>
                            <tr>
                                <td colspan="3"><p class="dlinfo">Included locales:
                                    Bulgarian (bg), Czech (cs), Danish (da), English (American) (en_US), Estonian (et), Finnish (Suomi) (fi), Croatian (hr), Hungarian (hu), Lithuanian (lt), Latvian (lv), Norwegian Bokmaal (nb), Norwegian Nynorsk (nn), Polish (pl), Romanian (ro), Russian (ru), Swedish (sv), Ukrainian (uk), Uzbek (uz), Uzbek (cyrillic) (uz@cyrillic)
                                </p></td>
                            </tr>
                            <tr>
                                <th>Africa, India</th>
                                <td><a href="../downloads/get/?q=Mageia-2-alpha1-LiveCD-GNOME-Africa-India-i586-CD.iso">32bit</a>,
                                  <a href="../downloads/get/?q=Mageia-2-alpha1-LiveCD-GNOME-Africa-India-i586-CD.iso&amp;torrent=1">torrent</a></td>
                                <td><a href="../downloads/get/?q=Mageia-2-alpha1-LiveCD-KDE4-Africa-India-i586-CD.iso">32bit</a>,
                                  <a href="../downloads/get/?q=Mageia-2-alpha1-LiveCD-KDE4-Africa-India-i586-CD.iso&amp;torrent=1">torrent</a></td>
                            </tr>
                            <tr>
                                <td colspan="3"><p class="dlinfo">Included locales:
                                    Afrikaans (af), Amharic (am), Arabic (ar), Assamese (as), Berber (ber), Bengali (bn), English (American) (en_US), Hausa (ha), Hebrew (he), Hindi (hi), Igbo (ig), Kannada (kn), Malayalam (ml), Marathi (mr), Punjabi (gurmukhi) (pa_IN), Tamil (ta), Tswana (tn), Tsonga (ts), Venda (ve), Xhosa (xh), Yoruba (yo), Zulu (zu)                                </p></td>
                            </tr>
                            <tr>
                                <th>Asia</th>
                                <td><a href="../downloads/get/?q=Mageia-2-alpha1-LiveCD-GNOME-Asia-Noindia-i586-CD.iso">32bit</a>,
                                  <a href="../downloads/get/?q=Mageia-2-alpha1-LiveCD-GNOME-Asia-Noindia-i586-CD.iso&amp;torrent=1">torrent</a></td>
                                <td><a href="../downloads/get/?q=Mageia-2-alpha1-LiveCD-KDE4-Asia-Noindia-i586-CD.iso">32bit</a>,
                                  <a href="../downloads/get/?q=Mageia-2-alpha1-LiveCD-KDE4-Asia-Noindia-i586-CD.iso&amp;torrent=1">torrent</a></td>
                            </tr>
                            <tr>
                                <td colspan="3"><p class="dlinfo">Included locales:
                                    English (American) (en_US), Indonesian (id), Japanese (ja), Korean (ko), Thai (th), Vietnamese (vi), Chinese Simplified (zh_CN), Chinese Traditional (zh_TW)
                                </p></td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="dlinfo">Download is approximately 700MB.</p>
                </div></div>
                <div class="yui-u"><div class="para">
                    <h2>Full, Free Software exclusive DVDs</h2>
                    <ul>
                        <li><a href="../downloads/get/?q=Mageia-2-alpha1-i586-DVD.iso">Mageia 2 alpha1 32bit DVD</a>,
                          <a href="../downloads/get/?q=Mageia-2-alpha1-i586-DVD.iso&amp;torrent=1">torrent</a></li>
                        <li><a href="../downloads/get/?q=Mageia-2-alpha1-x86_64-DVD.iso">Mageia 2 alpha1 64bit DVD</a>,
                          <a href="../downloads/get/?q=Mageia-2-alpha1-x86_64-DVD.iso&amp;torrent=1">torrent</a></li>
                    </ul>
                    <p class="dlinfo warn">Note that these DVD ISOs are made of Free Software exclusively.
                        As a consequence, proprietary Wi-Fi and video drivers are not included.
                        If you need WiFi or specific video drivers <em>at install time</em>,
                        you should go with above LiveCDs instead.
                        You may, if you will, add nonfree software repository <em>after</em> the installation.</p>
                    <p class="dlinfo">Up to 167 locales are supported:
                        Deutsch, English, español, français, italiano, português, svenska, nederlands,
                        polski, dansk, Русский and so much more! See the comprehensive list.</p>


                    <h2>Wired network-based install CD</h2>
                    <ul>
                        <li><a href="../downloads/get/?q=Mageia-2-alpha1-Boot-i586-CD.iso">32bit</a></li>
                        <li><a href="../downloads/get/?q=Mageia-2-alpha1-Boot-x86_64-CD.iso">64bit</a></li>
                    </ul>
                    <p class="dlinfo">Good to download (about 40 MB) and boot quickly into install mode
                      from <em>wired</em> network or local disk.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
