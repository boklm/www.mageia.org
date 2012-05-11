<?php

define('HLANG', true);
require '../../langs.php';
include 'locales.php';

$_t = array(
    'en' => array(
        'page_title' => 'Mageia Community',
        'page_h1' => 'Mageia Community Portal',
        'blog_url' => 'http://blog.mageia.org/en/',
        'planet_url' => 'http://planet.mageia.org/en/'
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
    'es' => array(
        'blog_url' => 'http://blog.mageia.org/en/',
        'planet_url' => 'http://planet.mageia.org/es/'
    ),
    'it' => array(
        'blog_url' => 'http://blog.mageia.org/it/',
        'planet_url' => 'http://planet.mageia.org/it/'
    ),
    'de' => array(
        'blog_url' => 'http://blog.mageia.org/de/',
        'planet_url' => 'http://planet.mageia.org/de/'
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
</head>
<body class="community">
    <?php echo $hsnav; ?>
    <h1 id="mgnavtitle"><?php _e('page_h1')?></h1>
    <div id="doc2" class="yui-t7">
        <div id="bd" role="main">
            <div class="yui-g" style="padding-top: 1em;">
                <div class="yui-g first">
                    <div class="para preambule">
                        <section>
                            <h2><a href="<?php _e('blog_url')?>"><?php _e('News')?></a></h2>
                            <?php
                            show_feed(null, _t('blog_url'), _t('blog_url') . '?feed=rss', 7);
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
                    <div class="yui-u first">
                
                    </div>
                    <div class="yui-u">
                
                    </div>
                </div>
                <div class="yui-g">
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
                        <p><a href="../contribute/">Start here</a>.</p>
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
                    <div class="yui-u first">
                    </div>
                    <div class="yui-u">
                        <p><mark>This page needs you.</mark></p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>