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
        'page_h1'    => 'Mageia Community Central',
        'blog_url'   => 'http://blog.mageia.org/en/',
        'planet_url' => 'http://planet.mageia.org/en/',
        'forum_url'  => 'https://forum.mageia.org/en/',
    ),
    'es' => array(
        'blog_url'   => 'http://blog.mageia.org/en/',
        'planet_url' => 'http://planet.mageia.org/es/'
    ),
    'fr' => array(
        'page_title' => 'Communauté Mageia',
        'page_h1'    => 'Portail de la communauté Mageia',
        'News'       => 'Actualités',
        'How to contribute?' => 'Comment contribuer&nbsp;?',
        'Toolbox'    => 'Boîte à outils',
        'blog_url'   => 'http://blog.mageia.org/fr/',
        'planet_url' => 'http://planet.mageia.org/fr/',
        'forum_url'  => 'http://forum.mageia.org/fr/'
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
    'pt-br' => array(
        'blog_url'  => 'http://blog.mageia.org/pt/',
        'forum_url' => 'http://forum.mageiabr.org/',
        'http://wiki.mageia.org/'  => 'http://wiki.mageiabr.org/'
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
    <meta name="description" content="Mageia Community Central is the place where all contributors and users can find the latest news about Mageia and learn more about what to do in the project.">
    <meta name="keywords" content="mageia, community, news, tools, tasks">
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
</head>
<body class="community">
    <?php echo $hsnav; ?>
    <header id="mgnavt">
        <h1><?php _e('page_h1')?></h1>
        <ul>
            <li><a href="<?php _e('blog_url')?>"><?php _e('Blog');?></a></li>
            <li><a href="<?php _e('planet_url')?>">Planet</a></li>
            <li><a href="/en/calendar/">Calendar</a></li>
            <li><a href="https://wiki.mageia.org/en/IRC">IRC</a></li>
            <li><a href="<?php _e('forum_url')?>">Forums</a></li>
            <li><a href="http://ml.mageia.org/">Mailing-lists</a></li>
            <li><a href="<?php _e('http://wiki.mageia.org/')?>">Wiki</a></li>
            <li><a href="https://bugs.mageia.org/">Bugzilla</a></li>
        </ul>
    </header>
    <div class="para" style="width: 400px;">
        <section>
            <h2><a href="<?php _e('blog_url')?>"><?php _e('News');?></a></h2>
            <?php
            if (_d('planet_url') != 'planet_url') {
                show_feed($locale, null, _d('planet_url'), _d('planet_url') . '?type=rss10', 9);
            } elseif (_d('blog_url') != 'blog_url') {
                show_feed($locale, null, _d('blog_url'), _d('blog_url') . '?feed=rss', 9);
            }
            // don't work:
            //show_feed('Mageia MLs', '', 'https://ml.mageia.org/l/rss/active_lists?count=20&for=10');
            //show_feed('Mageia Forum', 'http://forum.mageia.org/en/', 'https://forums.mageia.org/en/feed.php?mode=topics_active');
            ?>
            <hr>
            <p><?php
                $s = array();
                $feeds = array(
                    'Planet' => 'planet_url',
                    'Blog'   => 'blog_url',
                    'Forum'  => 'forum_url'
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
            <li><a href="../contribute/">Start here</a>,</li>
            <li>and meet us on <a href="http://wiki.mageia.org/en/IRC">IRC</a>.</li>
            <li>You can also <a href="../donate/">support financially</a> the project!</li>
        </ul>
        <hr>
        <h2><?php _e('Toolbox')?></h2>
        <ul class="hl">
            <li><a href="<?php _e('http://wiki.mageia.org/')?>">Wiki</a> &larr; collaborative documentation</li>
            <li><a href="http://bugs.mageia.org/">Bugzilla</a> &larr; to report bugs</li>
            <li><a href="<?php _e('forum_url')?>">Forum</a></li>
            <li><a href="/en/calendar/">Calendar</a></li>
            <li><a href="http://mageia.madb.org">Mageia Applications Database</a></li>
        </ul>
        <hr>
        <h2>For developers &amp; packagers</h2>
        <ul class="hl">
            <li><a href="http://svn.mageia.org/">Subversion</a>,
                <a href="http://gitweb.mageia.org/">Git</a> code repositories</li>
            <li><a href="http://pkgsubmit.mageia.org/">Packages submission queue</a>,
                <a href="http://pkgsubmit.mageia.org/data/unmaintained.txt">unmaintained packages</a></li>
            <li><a href="http://check.mageia.org/">Global QA report</a></li>
        </ul>
    </div>
    <div class="para">
        <h2><?php _e('Conversations')?></h2>
        <p>... or, how to get in touch with us? Easy:</p>
        <ul class="hl">
            <li><a href="https://wiki.mageia.org/en/IRC" title="Internet Relay Chat">IRC</a> on Freenode</a>,</li>
            <li><a href="/mailman/">mailing-lists 1</a> 
                &amp; <a href="http://ml.mageia.org/">2</a>,</li>
            <li><a href="<?php _e('forum_url')?>">forum</a>,</li>
            <li><a href="<?php _e('blog_url')?>">blog</a>,</li>
            <li>in real life!</li>
            <li>during events!</li>
        </ul>
        <hr>

        <!-- TODO

        <section>
            <h2>People!</h2>
        </section>
        -->
    </div>
    <div class="para">
        <h2>Mageia</h2>
        <ul class="hl">
            <li><a href="../about/">More about Mageia</a></li>
            <li>Our <a href="../about/code-of-conduct/">code of conduct</a> and <a href="../about/values/">values</a></li>
            <li><a href="http://wiki.mageia.org/en/Org">Our governance model</a> and structure:
                <ul>
                    <li><a href="https://wiki.mageia.org/en/Special:Search?search=teams">Teams</a></li>
                    <li><a href="http://wiki.mageia.org/en/Org_Council">the Council</a></li>
                    <li><a href="http://wiki.mageia.org/en/Org_Board">the Board</a></li>
                </ul></li>
            <li><a href="../donate/">Donations</a> &amp; <a href="/en/about/reports/">reports</a>.</li>
        </ul>
    </div>
    
    <p style="clear: both; text-align: right;"><mark>This page needs you!
        <a href="https://wiki.mageia.org/en/Web_team">Join the Web team</a>!</mark></p>
</body>
</html>