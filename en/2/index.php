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
    <h1 id="mgnavtitle"><a href="../2/">Mageia 2</a> &raquo; <?php _e('for your server')?></h1>
    <?php include '../2/nav.php'; ?>
    <div class="para" style="width: 600px;">
        <section>
            <img src="/g/2/images/mageia-2-desktop-550.jpg" alt="Mageia 2" style="width: 550px; display: block; margin: 2em auto 3em auto; box-shadow: 0 0 5px #aaa;">
            <?php
            _h('Mageia 2 is a GNU/Linux distribution for your computer, released by the <a href="%s">Mageia community</a>.',
                array('../community'));

            _h("What's new?", null, 'h2');

            _h('Too much to include here! See the <a href="https://wiki.mageia.org/en/Mageia_2_Release_Notes">release notes</a> for an extensive exposé.');
            
            _h('<a href="../downloads/" style="background: #1272B1; color: white; padding: 0.9em; margin: 1em; display: inline-block; text-shadow: 0 1px 6px #000; border-radius: 3px;">Download it right away!</a>');

            _h('Mageia in context', null, 'h2');

            _h('Mageia is both a Community and a Linux Distribution, with Mageia 2 being our second release.');

            _h('Since the release of <a href="../1/">Mageia 1</a>, our offering has been consistently in the <a href="%s">top 10 of Distrowatch\'s most popular distributions</a>.',
                array('http://distrowatch.com/popularity'));

            _h('Mageia 2 is supported by the <a href="../about/">Mageia.org nonprofit organisation</a>, which is governed by a body of recognized and elected contributors.');
            _h('Mageia 2 has been made by more than 100 people from all around the world.');

            _h('Our work adds to the excellent work of the wider Linux and Free Software community. We aim to bring one of the best, most stable, reliable and enjoyable experience and platform we can make; for regular users, developers and businesses.');

            _h('We welcome new contributors to any of the many different teams that go to make up Mageia the Community, and we encourage you to join us.');
            ?>
        </section>
    </div>
</body>
</html>