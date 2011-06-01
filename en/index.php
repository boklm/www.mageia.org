<?php

$locale = explode('/', $_SERVER['REQUEST_URI']);
$locale = $locale[1];

//include 'downloads_locales.php';

$_t = array(
    'en' => array(
        'page_title' => 'Mageia - A New Linux Distribution',
        'page_desc'  => 'Mageia is new community-based Linux distribution.',
        'page_kw'    => 'mageia, linux, mandriva, free software, operating system, computer, laptop, desktop, server, device, mobile',
        'page_h1'    => 'A New Linux Distribution',
        'alternate_title' => 'Mageia Blog (English)',
        'alternate_href'  => 'http://blog.mageia.org/en/?feed=rss',
        'about' => array(
            'Mageia is a fork of Mandriva Linux,
                supported by a not-for-profit organisation of
                recognized and elected contributors.',
            'Further than just delivering a free, secure, stable and sustainable operating system,
                the goal is to set up a stable and trustable governance to direct collaborative projects
                (<a href="/en/about/2010-sept-announcement.html">check original announcement</a>).'
        ),
        'mageia-is-here' => 'Mageia 1 is here',
        'join-us' => 'Join Us!',
        'right-now' => 'Happening right now',
        'news' => 'News',
    ),
    'fr' => array(
        'page_title' => 'Une nouvelle distribution Linux communautaire',
        'page_desc'  => 'Mageia est une nouvelle distribution Linux communautaire.',
        'page_kw'    => 'mageia, linux, mandriva, logiciel libre, système d\'exploitation, ordinateur, portable, serveur',
        'page_h1'    => 'Une Distribution Linux',
        'alternate_title' => 'Le blog de Mageia (français)',
        'alternate_href'  => 'http://blog.mageia.org/fr/?feed=rss',
        'about' => array(
            'Mageia est un fork de Mandriva Linux,
                reposant sur une association de type 1901 composée de
                contributeurs reconnus et élus pour leur travail.',
            'Au delà d&rsquo;un système d&rsquo;exploitation libre,
                sécurisé, stable et pérenne, l&rsquo;objectif est d&rsquo;établir
                une gouvernance stable et légitime autour d&rsquo;un modèle
                collaboratif (<a href="/fr/about/2010-sept-announcement.html">voir l&rsquo;annonce originale</a>).'
        ),
        'mageia-is-here' => 'Mageia 1 est arrivée',
        'join-us' => 'Rejoignez-nous&nbsp;!',
        'right-now' => 'En ce moment',
        'news' => 'Actualités'

    ),
    'de' => array(
        'page_title' => 'Mageia - Eine neue Linux Distribution',
        'page_desc'  => 'Mageia is new community-based Linux distribution.',
        'page_kw'    => 'mageia, linux, mandriva, free software, operating system, computer, laptop, desktop, server, device, mobile',
        'page_h1'    => 'Eine neue Linux Distribution',
        'alternate_title' => 'Mageia Blog (Deutch)',
        'alternate_href'  => 'http://blog.mageia.org/de/?feed=rss',
        'about' => array(
            'Mageia ist ein Fork von Mandriva Linux.
                Mageia wird von einer Non-Profit-Organisation unterstützt,
                die aus anerkannten und gewählten Mitwirkenden besteht.',
            'Neben der Bereitstellung eines freien, sicheren, stabilen und zukunftsträchtigen
                Betriebssystems ist es unser Ziel, ein stabiles und vertrauenswürdiges
                Führungsteam aufzustellen, um die mit Mageia zusammenhängenden Gemeinschaftsprojekte zu lenken
                (<a href="/de/about/2010-sept-announcement.html">siehe ursprüngliche Ankündigung</a>).'
        ),
        'mageia-is-here' => 'Mageia 1 ist hier',
        'join-us' => 'Machen Sie mit!',
        'right-now' => 'Gerade in Bearbeitung:',
        'news' => 'Neuigkeiten',
    ),
    'es' => array(
        'page_title' => 'Mageia - Una Nueva Distribución Linux',
        'page_desc'  => 'Mageia es una nueva distribución linux basada en la comunidad.',
        'page_kw'    => 'mageia, linux, mandriva, free software, operating system, computer, laptop, desktop, server, device, mobile',
        'page_h1'    => 'Una Nueva Distribución Linux',
        'alternate_title' => 'Mageia Blog (español)',
        'alternate_href'  => 'http://blog.mageia.org/es/?feed=rss',
        'about' => array(
            'Mageia es una bifurcación (fork) de Mandriva Linux,
                apoyada por una organización sin fines de lucro de contribuyentes elegidos y reconocidos.',
            'Mas que la entrega de un sistema operativo libre, seguro, estable y sostenible,
                la meta es establecer una gobernabilidad estable y confiable para la dirección
                de proyectos colaborativos (<a href="/es/about/2010-sept-announcement.html">revisa el anuncio original</a>).'
        ),
        'mageia-is-here' => 'Mageia 1 is here',
        'join-us' => 'Para ponerse en contacto con nosotros',
        'right-now' => 'Ocurre en este momento',
        'news' => 'Novedades',
    ),
    'el' => array(
        'page_title' => 'Mageia – Μια νέα διανομή Linux',
        'page_desc'  => 'Mageia is new community-based Linux distribution.',
        'page_kw'    => 'mageia, linux, mandriva, free software, operating system, computer, laptop, desktop, server, device, mobile',
        'page_h1'    => 'Μια νέα διανομή Linux',
        'alternate_title' => 'Mageia Blog (Ελληνικά)',
        'alternate_href'  => 'http://blog.mageia.org/el/?feed=rss',
        'about' => array(
            'Η Mageia είναι ένα fork της Mandriva Linux, που υποστηρίζεται από μια μη
                κερδοσκοπική οργάνωση η οποία αποτελείται από αναγνωρισμένους και
                εκλεγμένους συνεισφέροντες.',
            'Πέρα από την παροχή ενός ελεύθερου, ασφαλούς, σταθερού και με αντοχή στο
                χρόνο λειτουργικού συστήματος, ο σκοπός είναι η πραγματοποίηση μιας
                σταθερής και νόμιμης διακυβέρνησης γύρω από ένα συνεργατικό μοντέλο
                (<a href="/el/about/2010-sept-announcement.html">δείτε την αρχική ανακοίνωση</a>).'
        ),
        'mageia-is-here' => 'Mageia 1 is here',
        'join-us' => 'Επικοινωνία',
        'right-now' => 'Συμβαίνει τώρα',
        'news' => 'Νέα',
    ),
);
if (!array_key_exists($locale, $_t))
    $locale = 'en';

$_t = array_merge($_t['en'], $_t[$locale]);

?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php echo $_t['page_title']; ?></title>
    <meta name="description" content="<?php echo $_t['page_desc']; ?>">
    <meta name="keywords" content="<?php echo $_t['page_kw']; ?>">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <link type="text/plain" rel="author" href="/humans.txt">
    <link rel="alternate" type="application/rss+xml" title="<?php echo $_t['alternate_title']; ?>" href="<?php echo $_t['alternate_href']; ?>">
    <?php include '../analytics.php'; ?>
</head>
<body class="release">
    <?php include '../langs.php'; ?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a>
            <span class="lsep">|</span> <span class="subh"><?php echo $_t['page_h1']; ?></span></h1></div>
        <style>
        div#mgacount {
            font-family: "Century Gothic", "Trebuchet MS", Arial, sans-serif;
            color: #fff;
            background: #3494D3;
            background: -webkit-gradient(linear, left top, left bottom, from(#3494D3), color-stop(60%, #3494D3), to(#2383C2));
            background: -moz-linear-gradient(top, #3494D3 60%, #2383C2);
            background: -webkit-linear-gradient(top, #3494D3 60%, #2383C2);
            background: linear-gradient(top, #3494D3 60%, #2383C2);
            margin: 0; padding: 0;
            text-align: center;
        }
        #mgacount h2 { padding: 0.6em; font-size: 220%; color: #fff; font-weight: normal; margin-bottom: 0; }
        #mgacount h2 span { font-size: 45%; vertical-align: 30%; margin: 0 1em; }
        #mgacount h2 a,
        #mgacount h2 a:visited { color: #fff; }
        </style>
        <div id="mgacount"><h2><a href="./1/"><?php echo $_t['mageia-is-here']; ?></a></h2></div>
        <a href="./1/" title="Mageia 1"><img src="/g/1/screenshots/opt-mageia.jpg" alt="Mageia 1 Desktop" class="rel-desktop-home"></a>
        <div id="bd" role="main">
            <div class="yui-g"><div class="para">
                <p><a href="http://twitter.com/mageia_org" class="twitter-follow-button" data-lang="<?php echo $locale; ?>">Follow @mageia_org</a>
                <script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script></p>
            </div></div>
            <?php /*
            <div class="yui-g bb1">
                <div class="para"><p><?php echo $_t['about'][0]; ?></p>
                    <p><?php echo $_t['about'][1]; ?></p>
                </div>
            </div>
            <div class="yui-g bb1">
                <div class="yui-u first rb1">
                    <div class="para" id="news">
                        <h2><a href="http://blog.mageia.org/"><?php echo $_t['news']; ?></a></h2>
                    <?php include '../lib/news.php'; echo html_news($locale); ?>
                    </div>
                </div>
                <div class="yui-u">
                    <div class="para">
                        <h2><?php echo $_t['right-now']; ?></h2>
                        <?php include '../roadmap.php'; ?>
                    </div>
                </div>
            </div>
            <div class="yui-g bb1">
                <div class="yui-u first">
                    <div class="para" id="contact">
                        <h2><a href="./contribute/"><?php echo $_t['join-us']; ?></a></h2>
                        <ul>
                            <li><a href="https://www.mageia.org/mailman/">Mailing-lists</a></li>
                            <li><a href="http://mageia.org/wiki/doku.php?id=irc">IRC (Freenode network)</a></li>
                            <li><a href="http://mageia.org/wiki/">Mageia Wiki</a></li>
                            <li>Contact the founders team:
                                <ul>
                                    <li><a href="mailto:mageia-contact@mageia.org">mageia-contact@mageia.org</a></li>
                                    <li><a href="mailto:press@mageia.org">press@mageia.org</a></li>
                                    <li>expect an answer within 2 days</li>
                                </ul></li>
                        </ul>
                        <p>
                            <a href="<?php echo $_t['alternate_href']; ?>"><img src="/g/images/smi/feed-32x32.png" alt="<?php echo $_t['alternate_title']; ?>"></a>
                            <a href="http://www.twitter.com/mageia_org"><img src="/g/images/smi/twitter-32x32.png" alt="@mageia_org"></a>
                            <a href="http://identi.ca/mageia"><img src="/g/images/smi/identica-32x32.png" alt="@mageia"></a>
                            <a href="http://www.facebook.com/Mageia"><img src="/g/images/smi/facebook-32x32.png" alt="Mageia"></a>
                            <a href="http://www.flickr.com/photos/mageia_org"><img src="/g/images/smi/flickr-32x32.png"></a>
                        </p>
                    </div>
                </div>
                <div class="yui-u">
                    <div class="para">
                    <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FMageia%2F157247240967735&amp;width=320&amp;connections=10&amp;stream=false&amp;header=false&amp;height=255" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:320px; height:255px;" allowTransparency="true"></iframe>
                    </div>
                </div>
            </div>
            */ ?>
        </div>
    </div>
</body>
</html>
