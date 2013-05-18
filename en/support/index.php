<?php

define('HLANG', true);
require '../../langs.php';
_lang_load($locale, 'support');

?><!DOCTYPE html>
<html dir="ltr" lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php _e('Support for Mageia distribution')?></title>
    <meta name="description" content="<?php _e('List of support resources for Mageia distribution.')?>">
    <meta name="keywords" content="<?php _e('mageia, linux, support, help, hardware, qa, test')?>">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <?php include '../../analytics.php'; ?>
</head>
<body class="support">
    <?php echo $hsnav; ?>
    <header id="mgnavt">
        <h1><?php _e('Support')?></h1>
        <ul>
            <li><a href="#comm"><?php _e('Community Support')?></a></li>
            <li><a href="#pro"><?php _e('Professional Support')?></a></li>
            <li><a href="//doc.mageia.org/"><?php _e('Documentation')?></a></li>
            <li><a href="#updates"><?php _e('Updates')?></a></li>
            <li><a href="#lifecycle"><?php _e('Lifecycle')?></a></li>
            <li><a href="#hw"><?php _e('Hardware Requirements')?></a></li>
            <li><a href="//bugs.mageia.org/"><?php _e('Bugs Reports')?></a></li>
        </ul>
    </header>
    <div id="doc" class="yui-t7">
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para donate" style="padding-top: 2em;">
                    <?php
                        _h('Documentation', null, 'h2 id="docu"');
                        _h('You can look up existing %sdocumentation here%s. You may too look into our %sWiki%s.',
                            array('<a href="//doc.mageia.org/">', '</a>',
                            '<a href="http://wiki.mageia.org/">', '</a>'));
                        echo '<hr>';

                        _h('Updates', null, 'h2 id="updates"');
                        _h('Updates are available for %s (security and bug fixes) and published on an ongoing basis.', array('<a href="../2/">Mageia 2</a>'));
                        _h('You can install these from the Mageia Control Center.');
                        _h('You may subscribe to our %s announce list to be notified of these.', array('<a href="https://ml.mageia.org/l/info/updates-announce">updates-announce</a>'));
                        echo '<hr>';

                        _h('Lifecycle', null, 'h3');
                        _h('Mageia releases are supported at least for 18 months.');
                        echo '<ul class="hl">';
                        _h('Mageia 1 was supported until December 1st, 2012.', null, 'li');
                        _h('Mageia 2 will be supported until November 22nd, 2013.', null, 'li');
			_h('Mageia 3 will be supported until November 188888888nd, 2014.', null, 'li');
                        echo '</ul>';
                        echo '<hr>';

                        _h('Community Support', null, 'h2 id="comm"');
                        _h('If you need help, information or directions about the Mageia distribution you installed or about the project, you can try to reach us through:');

                        echo '<ul class="hl">';
                        _h('<a href="http://forums.mageia.org/en/">Community support forums</a> in English &ndash; see <a href="https://forums.mageia.org/en/viewforum.php?f=20">other Mageia community forums</a> for support in your language;', null, 'li');
                        _h('IRC channels where you can discuss live with other Mageia users and contributors: <a href="irc://irc.freenode.net/#mageia" hreflang="en">#mageia</a> or other localized <a href="https://wiki.mageia.org/en/IRC#channels_in_other_languages">channels</a>;', null, 'li');
                        _h('our <a href="https://wiki.mageia.org/en/">Wiki</a> (still rough at the time, we are working on it!);', null, 'li');
                        _h('our <a href="https://wiki.mageia.org/en/Mailing_lists" hreflang="en">mailing-lists</a>;', null, 'li');
                        _h('local events: follow our <a href="http://blog.mageia.org/en/">blog</a> and <a href="http://www.mageia.org/en/calendar/">calendar</a>.', null, 'li');
                        echo '</ul>';
                        echo '<hr>';

                        _h('Professional Support', null, 'h2 id="pro"');
                        _h('Mageia.Org does not provide or endorse commercial/professional support or other services around the distribution. But there are organizations providing such services and more.');
                        _h('Please check the <a href="%s">commercial vendors</a> list', array('https://wiki.mageia.org/en/Commercial_vendors'));
                        echo '<hr>';


                        _h('Hardware Requirements', null, 'h2 id="hw"');
                        _h('Mageia software runs on most x86 computer systems available as of today, April 2011.');
                        _h('You can follow this hardware requirements list:');
                        echo '<ul class="hl">';

                        _h('Processor: any AMD, Intel or VIA processor;', null, 'li');
                        _h('Memory (RAM): 512MB minimum, 2GB recommended;', null, 'li');
                        _h('Storage (HDD): 1GB for a minimal installation, 6GB for a full setup;', null, 'li');
                        _h('Optical drive: CD or DVD depending on the ISO you use (network, USB key installation available);', null, 'li');
                        _h('Graphic card: any ATI, Intel, Matrox, nVidia, SiS or VIA graphic card;', null, 'li');
                        _h('Sound card: any AC97, HDA or Sound Blaster sound card.', null, 'li');
                        echo '</ul>';

                        _h('For some kinds of hardware (Wi-Fi chipsets, 3D graphic cards) to work properly, specific firmware or software may be needed, this is available in a specific online repository called "nonfree" (<a href="https://wiki.mageia.org/en/Install_media_in_Mageia_2_for_beginner#Types_of_Mageia_media">learn more</a>).');
                        _h('We may set up a hardware compatibility list/directory as well as a hardware certification process; but that\'s still at the planning stage. Feel free to join/contact our <a href="%s">Web</a> and <a href="%s">QA</a> teams if you would like to help in this regard.', array('https://wiki.mageia.org/en/Web_team', 'https://wiki.mageia.org/en/QA_Team'), 'p class="dlinfo"');
                        echo '<hr>';

                        _h('Bugs Reports', null, 'h2 id="bugs"');
                        _h('You may check and report bugs on <a href="%s">our Bugzilla (bugs.mageia.org)</a>.',
                            array('https://bugs.mageia.org/'));
                        echo '<hr>';
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
