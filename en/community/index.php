<?php

define('HLANG', true);
require '../../langs.php';
_lang_load($locale, 'community');
include '../../lib/news.php';

?>
<!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php _e('Mageia Community')?></title>
    <meta name="description" content="<?php _e('Mageia Community Central is the place where all contributors and users can find the latest news about Mageia and learn more about what to do in the project.')?>">
    <meta name="keywords" content="<?php _e('mageia, community, news, tools, tasks')?>">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <link rel="icon" type="image/png" href="/g/favicon.png" />    <style>
    #newslist { list-style: none; margin: 0; padding: 0; }
        #newslist > li { list-style: none; padding: 0.6em 0.9em; }
        #newslist li:first-child { font-weight: bold; outline: 1px solid #fa8; margin-bottom: 0.4em; background: #fffaf0; }
            #newslist > li .dt { display: block; font-size: 80%; color: #888; }
    .para { text-align: left; float: left; width: 250px; display: block; border-right: 1px solid #eef; border-bottom: 1px solid #eef; }
    hr { margin-top: 2em; }
    </style>
    <?php include '../../analytics.php'; ?>
</head>
<body class="community">
    <?php echo $hsnav; ?>
    <header id="mgnavt">
        <h1><?php _e('Mageia Community Central')?></h1>
        <ul>
            <li><a href="<?php _e('http://blog.mageia.org/en/')?>"><?php _e('Blog');?></a></li>
            <li><a href="<?php _e('http://planet.mageia.org/en/')?>"><?php _e('Planet');?></a></li>
            <li><a href="../calendar/"><?php _e('Calendar');?></a></li>
            <li><a href="https://wiki.mageia.org/en/IRC">IRC</a></li>
            <li><a href="<?php _e('https://forum.mageia.org/en/')?>"><?php _e('Forums');?></a></li>
            <li><a href="http://ml.mageia.org/"><?php _e('Mailing-lists');?></a></li>
            <li><a href="<?php _e('http://wiki.mageia.org/')?>">Wiki</a></li>
            <li><a href="https://bugs.mageia.org/">Bugzilla</a></li>
        </ul>
    </header>
    <div class="para" style="width: 400px;">
        <section>
            <h2><a href="<?php _e('http://blog.mageia.org/en/')?>"><?php _e('News');?></a></h2>
            <?php
            if (_d('http://planet.mageia.org/en/') != 'http://planet.mageia.org/en/') {
                show_feed($locale, null, _d('http://planet.mageia.org/en/'), _d('http://planet.mageia.org/en/') . '?type=rss10', 9, null, true);
            } else {
                show_feed($locale, null, _d('http://blog.mageia.org/en/'), _d('http://blog.mageia.org/en/') . '?feed=rss', 9, null, true);
            }
            // don't work:
            //show_feed('Mageia MLs', '', 'https://ml.mageia.org/l/rss/active_lists?count=20&for=10');
            //show_feed('Mageia Forum', 'http://forum.mageia.org/en/', 'https://forums.mageia.org/en/feed.php?mode=topics_active');
            ?>
            <hr>
            <p><?php
                $s = array();
                $feeds = array(
                    'Planet' => 'http://planet.mageia.org/en/',
                    'Blog'   => 'http://blog.mageia.org/en/',
                    'Forum'  => 'https://forum.mageia.org/en/'
                );
                foreach ($feeds as $k => $v)
                    if (_t($v) != $v)
                        $s[] = sprintf('<a href="%s">%s</a>', _t($v), _t($k));

                echo implode(' | ', $s);
            ?></p>
        </section>
    </div>
    <div class="para" style="width: 300px">
        <h2><a href="../contribute/"><?php _e('How to contribute?')?></a></h2>
        <ul class="hl">
            <li><a href="../contribute/"><?php echo _d('Start here')?></a>,</li>
            <li><?php _e('and meet us on <a href="http://wiki.mageia.org/en/IRC">IRC</a>.')?></li>
            <li><?php _e('You can also <a href="../donate/">support financially</a> the project!')?></li>
        </ul>
        <hr>
        <h2><?php _e('Toolbox')?></h2>
        <ul class="hl">
            <li><a href="<?php _e('http://wiki.mageia.org/')?>"><?php _e('Wiki</a> &larr; collaborative documentation')?></li>
            <li><a href="http://bugs.mageia.org/"><?php _e('Bugzilla</a> &larr; to report bugs')?></li>
            <li><a href="<?php _e('https://forum.mageia.org/en/')?>"><?php _e('Forum')?></a></li>
            <li><a href="../calendar/"><?php _e('Calendar')?></a></li>
            <li><a href="http://mageia.madb.org"><?php _e('Mageia Applications Database')?></a></li>
        </ul>
        <hr>
        <h2><?php _e('For developers &amp; packagers')?></h2>
        <ul class="hl">
            <li><a href="http://svn.mageia.org/"><?php echo _d('Subversion')?></a>,
                <a href="http://gitweb.mageia.org/"><?php _e('Git</a> code repositories')?></li>
            <li><a href="http://pkgsubmit.mageia.org/"><?php echo _d('Packages submission queue')?></a>,
                <a href="http://pkgsubmit.mageia.org/data/unmaintained.txt"><?php _e('unmaintained packages')?></a></li>
            <li><a href="http://check.mageia.org/"><?php _e('Global QA report')?></a></li>
        </ul>
    </div>
    <div class="para">
        <h2><?php _e('Conversations')?></h2>
        <p><?php _e('... or, how to get in touch with us? Easy:')?></p>
        <ul class="hl">
            <li><a href="https://wiki.mageia.org/en/IRC" title="Internet Relay Chat"><?php echo _d('IRC</a> on Freenode')?>,</li>
            <li><a href="https://wiki.mageia.org/en/Mailing_lists"><?php echo _d('mailing-lists')?></a>,</li>
            <li><a href="<?php _e('https://forum.mageia.org/en/')?>"><?php echo _d('Forum')?></a>,</li>
            <li><a href="<?php _e('http://blog.mageia.org/en/')?>"><?php echo _d('Blog')?></a>,</li>
            <li><?php _e('in real life!')?></li>
            <li><?php _e('during events!')?></li>
        </ul>
        <hr>
        <h2><?php _e('Teams you can join!')?></h2>
        <ul class="hl">
            <li><a href="https://wiki.mageia.org/en/Atelier_team" hreflang="en"><?php _e('Atelier')?></a></li>
            <li><a href="https://wiki.mageia.org/en/Documentation_team" hreflang="en"><?php _e('Documentation')?></a></li>
            <li><a href="https://wiki.mageia.org/en/Packagers_Team" hreflang="en"><?php _e('Packaging')?></a></li>
            <li><a href="https://wiki.mageia.org/en/QA_Team" hreflang="en"><?php _e('Testing &amp; <abbr title="Quality Assurance">QA</abbr>')?></a></li>
            <li><a href="https://wiki.mageia.org/en/Internationalisation_Team_(i18n)" hreflang="en"><?php _e('Translation')?></a></li>
            <li><a href="https://wiki.mageia.org/en/Sysadmin_Team" hreflang="en"><?php _e('Systems &amp; infrastructure administration')?></a></li>
            <li><a href="https://wiki.mageia.org/en/Bugsquad" hreflang="en"><?php _e('Bugs triaging')?></a></li>
        </ul>
        
        <hr>
        <!-- TODO

        <section>
            <h2>People!</h2>
        </section>
        -->
    </div>
    <div class="para">
        <h2><?php _e('Mageia')?></h2>
        <ul class="hl">
            <li><a href="../about/"><?php _e('More about Mageia')?></a></li>
            <li><?php _e('Our <a href="../about/code-of-conduct/">code of conduct</a> and <a href="../about/values/">values</a>')?></li>
            <li><a href="http://wiki.mageia.org/en/Org"><?php _e('Our governance model</a> and structure:')?>
                <ul>
                    <li><a href="https://wiki.mageia.org/en/Special:Search?search=teams"><?php _e('Teams')?></a></li>
                    <li><a href="http://wiki.mageia.org/en/Org_Council"><?php _e('the Council')?></a></li>
                    <li><a href="http://wiki.mageia.org/en/Org_Board"><?php _e('the Board')?></a></li>
                </ul></li>
            <li><?php _e('<a href="../donate/">Donations</a> &amp; <a href="../about/reports/">reports</a>.')?></li>
        </ul>
    </div>
    
    <p style="clear: both; text-align: right;"><mark><?php _e('This page needs you! <a href="https://wiki.mageia.org/en/Web_team">Join the Web team</a>!')?></mark></p>
</body>
</html>
