<?php

define('HLANG', true);
require '../../langs.php';
_lang_load($locale, '3');

?>
<!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php _e('Mageia 3, for your PC')?></title>
    <link rel="stylesheet" href="/g/style/all.css">
    <style>
    .para { text-align: left; float: left; width: 250px; display: block; border-right: 1px solid #eef; border-bottom: 1px solid #eef; }
    hr { margin-top: 2em; }
    </style>
    <?php include '../../analytics.php'; ?>
</head>
<body class="downloads">
    <?php echo $hsnav; ?>
    <h1 id="mgnavtitle"><a href="../3/">Mageia 3</a> &raquo; <?php _e('for your PC')?></h1>
    <?php include '../3/nav.php'; ?>
    <div class="para" style="width: 600px;">
        <section>
            <?php
                _h('Plenty', null, 'h2');
                _h('There are more than 21&nbsp;700&nbsp;packages in our repositories. And that\'s just for the 64-bit branch.');
                _h('The total number is double that &ndash; and then if you consider the backports, and the packages in the Cauldron still testing... you\'ll see that Mageia users are spoiled for choice.');
                _h('Here\'s a cross-section, first of the working graphical environments, and then of the core applications you could be using on your desktop:');
                _h('Environments', null, 'h2');
                _h('Mageia 3 has all the major desktop environments:');
            ?>
            <ul>
                <li>KDE4 SC 4.10.2,</li>
                <li>GNOME 3.6,</li>
                <li>XFCE 4.10,</li>
                <li>LXDE,</li>
                <li>Razor-Qt,</li>
                <li>E17.</li>
            </ul>
            <?php
                _h('And then there are the window managers, including Openbox, WindowMaker, IceWM, Fluxbox, Fvwm2 and Awesome.');
                _h('Applications &rarr;', null, 'h2');
                _h('There are many, many to choose from &ndash; including all the most popular.');
            ?>
        </section>
    </div>
    <div class="para" style="width: 300px">
        <?php
            _h('Web', null, 'h3');
            _h('Choose your web browser from Firefox ESR 17.0.6, Chromium-browser 26.0.1410.65, Epiphany 3.6.1 or Opera 12.15 &ndash; or one of the many others such as Lynx or Konqueror; then pick an email client from KMail 4.10.2, Thunderbird ESR 17.0.6, Evolution 3.6.3 or maybe Claws-Mail or Mutt.');
        ?>
    </div>
    <div class="para" style="width: 300px">
        <?php
            _h('Messaging', null, 'h3');
            _h('Choose from Kopete, Pidgin, Empathy or Kadu for instant messaging; use Quassel, Konversation, XChat-Gnome or KVIrc for IRC chat; try QuteCom or Ekiga (or even Skype) for VOIP.');
        ?>
    </div>
    <div class="para" style="width: 300px">
        <?php
            _h('Office', null, 'h3');
            _h('The two full-featured office suites LibreOffice and Calligra are there, as well as AbiWord, and a host of text editors including Kate; for finance there\'s KMyMoney, Skrooge or the professional-level GnuCash.');
        ?>
    </div>
    <div class="para" style="width: 300px">
        <?php
            _h('Image', null, 'h3');
            _h('Use GIMP for powerful image manipulation, or Inkscape for vector drawing; Blender is there for serious animation. DigiKam or Showfoto will take care of your photos, talk to your camera and give you more basic image editing.');
        ?>
    </div>
    <div class="para" style="width: 300px">
        <?php
            _h('Sound', null, 'h3');
            _h('For playing audio files, choose from Amarok 2.7.0 and Rhythmbox, among others; use VLC, Totem or MPlayer for video and for audio, or use the XBMC Media Center as your home entertainment system. Some packages can be found in both the Core and Tainted repositories: the packages in the Core repository support only non-patent-encumbered codecs and the packages in the Tainted repository support all codecs, for users who live in countries where those codecs don\'t infringe local laws.');
        ?>
    </div>
    <div class="para" style="width: 300px">
        <?php
            _h('Video', null, 'h3');
            _h('For editing video files, try Avidemux, Kino or OpenShot; for subtitles, there\'s Gaupol or Subtitles Composer; use MythTV, Miro, tvtime, FreetuxTV or Me TV for watching or recording TV programmes.');
        ?>
    </div>
    <div class="para" style="width: 300px">
        <?php
            _h('Plus', null, 'h3');
            _h('Then there\'s ZoneMinder, for CCTV Security; VirtualBox or WINE for virtualisation; and a range of development environments such as Anjuta, Eclipse, Netbeans or KDevelop.');
        ?>
    </div>
    <div class="para">
        <?php
            _h('For more information about these and other packages, check the <a href="%s">Mageia 3 Release notes</a>.', array('https://wiki.mageia.org/en/Mageia_3_Release_Notes'));
            _h('You can take a look at the <a href="%s">Mageia Application Database</a> to get a more complete list of Mageia packages.', array('http://mageia.madb.org/'));
        ?>
    </div>
</body>
</html>
