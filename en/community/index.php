<?php

define('HLANG', true);
require '../../langs.php';
include 'locales.php';

$_t = array(
    'de' => array(
        'blog_url' => 'http://blog.mageia.org/de/',
        'planet_url' => 'http://planet.mageia.org/de/'
    ),
    'el' => array(
        'blog_url' => 'http://blog.mageia.org/el/',
    ),
    'en' => array(
        'page_title' => 'Mageia Community',
        'page_h1' => 'Mageia Community Central',
        'blog_url' => 'http://blog.mageia.org/en/',
        'planet_url' => 'http://planet.mageia.org/en/'
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
        'planet_url' => 'http://planet.mageia.org/fr/'
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
    #newslist { font-size: 90%; }
        #newslist > li { margin-bottom: 0.6em; }
            #newslist > li .dt { display: block; font-size: 90%; color: #888; }
    .para { text-align: left; float: left; width: 250px; display: block; }
    </style>
</head>
<body class="community">
    <?php echo $hsnav; ?>
    <h1 id="mgnavtitle"><?php _e('page_h1')?></h1>
    
    <div class="para">
        <section>
            <h2><a href="<?php _e('blog_url')?>"><?php _e('News')?></a></h2>
            <?php
            if (_t('planet_url') != 'planet_url')
                show_feed(null, _t('planet_url'), _t('planet_url') . '?type=rss10', 9);
            elseif (_t('blog_url') != 'blog_url')
                show_feed(null, _t('blog_url'), _t('blog_url') . '?feed=rss', 9);
            // don't work:
            //show_feed('Mageia MLs', '', 'https://ml.mageia.org/l/rss/active_lists?count=20&for=10');
            //show_feed('Mageia Forum', 'http://forum.mageia.org/en/', 'https://forums.mageia.org/en/feed.php?mode=topics_active');
            ?>
        </section>
    </div>
    <div class="para">
        <h2><?php _e('Conversations')?></h2>
        <p>... or, how to get in touch with us? Easy:</p>
        <ul>
            <li><a href="https://wiki.mageia.org/en/IRC" title="Internet Relay Chat">IRC</a> on Freenode</a>,</li>
            <li><a href="/mailman/">mailing-lists 1</a> 
                &amp; <a href="http://ml.mageia.org/">2</a>,</li>
            <li><a href="<?php _e('forum_url')?>">forum</a>,</li>
            <li><a href="<?php _e('blog_url')?>">blog</a>,</li>
            <li>in real life!</li>
            <li>during events!</li>
        </ul>
        <!-- TODO

        <section>
            <h2>People!</h2>
        </section>
        -->
    </div>
    <div class="para">
        <h2><?php _e('Toolbox')?></h2>
        <ul>
            <li><a href="http://wiki.mageia.org/">Wiki</a></li>
            <li><a href="http://bugs.mageia.org/">Bugzilla</a></li>
            <li><a href="http://forum.mageia.org/">Forum</a></li>
            <li><a href="/en/calendar/">Calendar</a></li>
        </ul>
        <ul>
            <li><a href="http://svn.mageia.org/">Subversion</a>,
                <a href="http://gitweb.mageia.org/">Git</a></li>
            <li><a href="http://pkgsubmit.mageia.org/">Packages submission queue</a>,
                <a href="http://pkgsubmit.mageia.org/data/unmaintained.txt">unmaintained packages</a></li>
            <li><a href="http://check.mageia.org/">Global QA report</a></li>
        </ul>
    </div>
    <div class="para">
        <h2><a href="../contribute/"><?php _e('How to contribute?')?></a></h2>
        <ul>
            <li><a href="../contribute/">Start here</a>,</li>
            <li>and meet us on <a href="http://wiki.mageia.org/en/IRC">IRC</a>.</li>
        </ul>
    </div>
    <div class="para">
        <h2><?php _e('Useful reminders')?></h2>
        <ul>
            <li><a href="../about/">More about Mageia</a></li>
            <li><a href="../about/code-of-conduct/">Our code of conduct</a></li>
            <li><a href="http://wiki.mageia.org/en/Org">Our governance</a>:
                <a href="https://wiki.mageia.org/en/Special:Search?search=teams">Teams</a>,
                <a href="http://wiki.mageia.org/en/Org_Council">the Council</a>,
                and <a href="http://wiki.mageia.org/en/Org_Board">the Board</a>.</li>
            <li><a href="../donate/">Donations</a> &amp; <a href="/en/about/reports/">reports</a>.</li>
        </ul>
    </div>
    
    <p style="clear: both; text-align: right;"><mark>This page needs you!
        <a href="https://wiki.mageia.org/en/Web_team">Join the Web team</a>!</mark></p>
</body>
</html>