<?php

define('HLANG', true);
require '../../langs.php';
include 'locales.php';

$_t = array(
    'de' => array(
        'blog_url' => 'http://blog.mageia.org/de/',
        'planet_url' => 'http://planet.mageia.org/de/',
        'forum_url' => 'http://forums.mageia.org/de/',
    ),
    'el' => array(
        'blog_url' => 'http://blog.mageia.org/el/',
    ),
    'en' => array(
        'page_title' => 'Mageia Community',
        'page_h1' => 'Mageia Community Central',
        'blog_url' => 'http://blog.mageia.org/en/',
        'planet_url' => 'http://planet.mageia.org/en/',
        'forum_url' => 'https://forum.mageia.org/en/',
    ),
    'es' => array(
        'blog_url' => 'http://blog.mageia.org/en/',
        'planet_url' => 'http://planet.mageia.org/es/'
    ),
    'fr' => array(
        'page_title' => 'Communauté Mageia',
        'page_h1' => 'Portail de la communauté Mageia',
        'News' => 'Actualités',
        'How to contribute?' => 'Comment contribuer&nbsp;?',
        'Toolbox' => 'Boîte à outils',
        'blog_url' => 'http://blog.mageia.org/fr/',
        'planet_url' => 'http://planet.mageia.org/fr/',
        'forum_url' => 'http://forum.mageia.org/fr/'
    ),
    'it' => array(
        'blog_url' => 'http://blog.mageia.org/it/',
        'planet_url' => 'http://planet.mageia.org/it/'
    ),
    'nl' => array(
        'blog_url' => 'http://blog.mageia.org/nl/',
    ),
    'pl' => array(
        'blog_url' => 'http://blog.mageia.org/pl/',
    ),
    'pt' => array(
        'blog_url' => 'http://blog.mageia.org/pt/',
    ),
    'ro' => array(
        'blog_url' => 'http://blog.mageia.org/ro/',
    ),
    'ru' => array(
        'blog_url' => 'http://blog.mageia.org/ru/'
    ),
    'tr' => array(
        'blog_url' => 'http://blog.mageia.org/tr/'
    ),
    'uk' => array(
        'blog_url' => 'http://blog.mageia.org/uk/'
    )
);

$_t = i18n::get_strings($_t, $locale, $i18n_fallback_rules);
include '../../lib/news.php';

?>
<!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php _e('page_title')?></title>
    <link rel="stylesheet" href="/g/style/all.css">
    <style>
    .para { text-align: left; float: left; width: 250px; display: block; border-right: 1px solid #eef; border-bottom: 1px solid #eef; }
    hr { margin-top: 2em; }
    </style>
</head>
<body class="downloads">
    <?php echo $hsnav; ?>
    <h1 id="mgnavtitle"><a href="../2/">Mageia 2</a> &raquo; for your personal computer</h1>
    <?php include '../2/nav.php'; ?>
    <div class="para" style="width: 600px;">
        <section>
            <h2>Plenty</h2>

            <p>There are 19&nbsp;881&nbsp;packages in our repositories.
                And that's just for the 64-bit branch.</p>
            <p>The total number is double that &ndash; and then if you consider the backports,
                and the packages in the Cauldron still testing... you'll see that
                Mageia users are spoiled for choice.</p>
            <p>Here's a cross-section, first of the working graphical environments,
                and then of the core applications you could be using on your desktop:<p>

            <h2>Environments</h2>

            <p>Mageia 2 has all the major desktop environments:</p>
            <ul>
                <li>KDE4 SC 4.8.2,</li>
                <li>GNOME 3.4,</li>
                <li>XFCE 4.9,</li>
                <li>LXDE,</li>
                <li>Razor-Qt,</li>
                <li>E17.</li>
            </ul>
            <p>And then there are the window managers,
                including Openbox, WindowMaker, IceWM, Fluxbox, Fvwm2 and Awesome.</p>

            <h2>Applications &rarr;</h2>

            <p>There are many, many to choose from &ndash; including all the
            most popular.</p>

        </section>
    </div>
    <div class="para" style="width: 300px">
        <h3>Web</h3>
        <p>Choose your web browser from Firefox ESR 10.0.4, Chromium-browser
        180.1025.160, Epiphany 3.4.1 or Opera 11.64 &ndash; or one of the many others such
        as Lynx or Konqueror; then pick an email client from KMail 4.8.2, Thunderbird
        ESR 10.0.4, Evolution 3.4.1 or maybe Claws-Mail or Mutt.</p>
    </div>
    <div class="para" style="width: 300px">

        <h3>Messaging</h3>
        <p>Choose from Kopete, Pidgin, Empathy or Kadu for instant messaging; use
        Quassel, Konversation, XChat-Gnome or KVIrc for IRC chat; try QuteCom or Ekiga
        (or even Skype) for VOIP.</p>
    </div>
    <div class="para" style="width: 300px">

        <h3>Office</h3>
        <p>The two full-featured office suites LibreOffice and Calligra are there, as
        well as AbiWord, and a host of text editors including Kate; for finance
        there's KMyMoney, Skrooge or the professional-level GnuCash.</p>
    </div>
    <div class="para" style="width: 300px">

        <h3>Image</h3>
        <p>Use GIMP for powerful image manipulation, or Inkscape for vector drawing;
        Blender is there for serious animation. DigiKam or Showfoto will take care of
        your photos, talk to your camera and give you more basic image editing.</p>
    </div>
    <div class="para" style="width: 300px">

        <h3>Sound</h3>
        <p>For playing audio files, choose from Amarok 2.5.0 and Rhythmbox, among
        others; use VLC, Totem or MPlayer for video and for audio, or use the XBMC
        Media Center as your home entertainment system. Some packages can be found in
        both the Core and Tainted repositories: The packages in the Core repository
        support only non-patent-encumbered codecs and The packages in the Tainted
        repository support all codecs, for users who live in countries where those
        codecs don't infringe local laws.</p>
    </div>
    <div class="para" style="width: 300px">

        <h3>Video</h3>
        <p>For editing video files, try Avidemux, Kino or OpenShot; for subtitles,
        there's Gaupol or Subtitles Composer; use MythTV, Miro, tvtime, FreetuxTV or
        Me TV for watching or recording TV programmes.</p>
    </div>
    <div class="para" style="width: 300px">

        <h3>Plus</h3>
        <p>Then there's ZoneMinder, for CCTV Security; VirtualBox or WINE for
        virtualisation; and a range of development environments such as Anjuta,
        Eclipse, Netbeans or KDevelop.</p>
    </div>
    <div class="para">
        <p>For more information about these and other packages,
            check the <a href="">Mageia 2 Release notes</a>.</p>
        <p>You can take a look at the <a href="http://mageia.madb.org/">Mageia Application Database</a>
            to get a more complete list of Mageia packages.</p>        
    </div>
</body>
</html>