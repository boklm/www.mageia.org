<?xml version="1.0" encoding="utf-8" ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
<head>
    <meta charset="utf-8" />
    <title>Mageia - Nowa dystrybucja Linuksa</title>
    <meta name="description" content="Mageia jest nowš dystrybucjš Linuksa opartš na działaniach społecznoci." />
    <meta name="keywords" content="mageia, linux, mandriva, darmowe oprogramowanie" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" />
    <link rel="alternate" type="application/rss+xml" title="Mageia Blog (Polski)" href="http://blog.mageia.org/pl/?feed=rss" />
    <?php include '../analytics.php';?>
</head>
<body>
    <?php include '../langs.php'; ?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh">Nowa dystrybucja Linuksa</span></h1></div>
        <div class="yui-g bb1">
            <div class="para">
                <p>Mageia jest odłamem systemu Mandriva Linux, wspieranym
                    przez organizacje niedochodową znanych i wybranych twórców.</p>
                <p>Mageia jest czymś więcej niż tylko wolnym, bezpiecznym,
                    stabilnym i zrównoważonym systemem operacyjnym,
                    naszym celem jest stworzenie stabilnej i wiarygodnej
                    organizacji która bezpośrednio wspiera wspólne projekty
                    (<a href="/pl/about/2010-sept-announcement.html">sprawdź oryginalne ogłoszenie</a>).</p>
            </div>
        </div>
        <?php include '../release_counter.php'; ?>
        <div class="yui-g bb1">
            <div class="yui-u first rb1">
                <div class="para" id="news">
                    <h2><a href="http://blog.mageia.org/">News</a></h2>
                <?php include '../lib/news.php'; echo html_news('en'); ?>
                </div>
            </div>
            <div class="yui-u">
                <div class="para" lang="en">
                    <h2>Happening right now</h2>
                    <?php include '../roadmap.php'; ?>
                </div>
            </div>
        </div>
        <div class="yui-g bb1">
            <div class="yui-u first">
                <div class="para" id="contact">
                    <h2>Jak się z nami skontaktować</h2>
                    <ul>
                        <li><a href="https://www.mageia.org/mailman/">Listy dyskusyjne</a></li>
                        <li><a href="http://mageia.org/wiki/doku.php?id=irc">IRC (sieć Freenode)</a></li>
                        <li><a href="http://mageia.org/wiki/">Mageia Wiki</a></li>
                        <li>Skontaktuj się z zespołem założycieli:
                            <ul>
                                <li><a href="mailto:mageia-contact@mageia.org">mageia-contact@mageia.org</a></li>
                                <li><a href="mailto:press@mageia.org">press@mageia.org</a></li>
                                <li>oczekuj na odpowiedzi w ciągu ok. 2dni</li>
                            </ul></li>
                        <li><a href="http://www.twitter.com/mageia_org">twitter.com/mageia_org</a></li>
                        <li><a href="http://identi.ca/mageia">identi.ca/mageia</a></li>
                    </ul>
                </div>
            </div>
            <div class="yui-u">
                <div class="para">
                <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FMageia%2F157247240967735&amp;width=320&amp;connections=10&amp;stream=false&amp;header=false&amp;height=255" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:320px; height:255px;" allowTransparency="true"></iframe>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
