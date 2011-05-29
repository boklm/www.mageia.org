<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Mageia — новий дистрибутив Linux</title>
    <meta name="description" content="Mageia — це новий дистрибутив Linux, супровід якого здійснює спільнота." />
    <meta name="keywords" content="mageia, linux, mandriva, вільне програмне забезпечення" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" />
    <link rel="alternate" type="application/rss+xml" title="Блог Mageia (англійською)" href="http://blog.mageia.org/en/?feed=rss" />
    <?php include '../analytics.php'; ?>
</head>
<body>
    <?php include '../langs.php'; ?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh">A New Linux Distribution</span></h1></div>

        <div id="bd" role="main">
            <div class="yui-g bb1">
                <div class="para"><p>Mageia є відгалуженням Mandriva Linux,
                    підтримку якого здійснює неприбуткова організація, сформована з
                    відомих та вибраних учасників.</p>

                    <p>Окрім створення вільної, безпечної, стабільної та підтримуваної операційної системи,
                        метою проекту є створення стабільного та надійного керування проектами з безпосередньої співпраці
                        (<a href="/en/about/2010-sept-announcement.html">ознайомтеся з початковим оголошенням</a>).</p>
                </div>
            </div>
            <?php include '../release_counter.php'; ?>
            <div class="yui-g bb1">
                <div class="yui-u first rb1">
                    <div class="para" id="news">
                        <h2><a href="http://blog.mageia.org/">Новини</a></h2>
                    <?php include '../lib/news.php'; echo html_news('en'); ?>
                    </div>
                </div>
                <div class="yui-u">
                    <div class="para" lang="en">
                        <h2>Поточні події</h2>
                        <?php include '../roadmap.php'; ?>
                    </div>
                </div>
            </div>
            <div class="yui-g bb1">
                <div class="yui-u first">
                    <div class="para" id="contact">
                        <h2>Приєднуйтеся!</h2>
                        <ul>
                            <li><a href="https://www.mageia.org/mailman/">Списки листування</a></li>
                            <li><a href="http://mageia.org/wiki/doku.php?id=irc">IRC (у мережі Freenode)</a></li>
                            <li><a href="http://mageia.org/wiki/">Вікі Mageia</a></li>
                            <li>Зв’язок з командою засновників:
                                <ul>
                                    <li><a href="mailto:mageia-contact@mageia.org">mageia-contact@mageia.org</a></li>
                                    <li><a href="mailto:press@mageia.org">press@mageia.org</a></li>
                                    <li>очікувати на відповідь можна протягом 2 днів</li>
                                </ul></li>
                        </ul>
                        <p>
                            <a href="http://blog.mageia.org/en/?feed=rss"><img src="/g/images/smi/feed-32x32.png" alt="Блог Mageia (англійською)"></a>
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
        </div>
    </div>
</body>
</html>
