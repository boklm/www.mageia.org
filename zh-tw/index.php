<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="zh-tw">
<head>
    <meta charset="utf-8" />
    <title>Mageia - 嶄新的 Linux 發行版</title>
    <meta name="description" content="Mageia 是以社群為基礎的全新 Linux 發行版。" />
    <meta name="keywords" content="mageia, linux, mandriva, free software" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" />
    <?php include '../analytics.php'; ?>
</head>
<body>
    <?php include '../langs.php'; ?>

    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh"> 嶄新的 Linux 發行版</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g bb1">
                <div class="para"><p>Mageia is a fork of Mandriva Linux,
                    supported by a not-for-profit organisation of
                    recognized and elected contributors.</p>

                    <p>Further than just delivering a free, secure, stable and sustainable operating system,
                        the goal is to set up a stable and trustable governance to direct collaborative projects
                        (<a href="/zh-tw/about/2010-sept-announcement.html">check original announcement</a>).</p>
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
                        <h2>如何聯繫我們。</h2>
                        <ul>
                            <li><a href="https://www.mageia.org/mailman/">郵件論壇</a></li>
                            <li><a href="http://mageia.org/wiki/doku.php?id=irc">IRC (Freenode network)</a></li>
                            <li><a href="http://mageia.org/wiki/">Mageia Wiki</a></li>
                            <li>寄電子郵件給我們 <a href="mailto:mageia-contact@mageia.org">mageia-contact@mageia.org</a>.</li>
                            <li>我們希望可以在 48 小時內回覆。
                                請使用英語或法語 (答覆也會是這兩種語言之一)。西班牙語也可以;
                                我們會想辦法找到翻譯者。</li>
                            <li><a href="mailto:press@mageia.org">press@mageia.org</a></li>
                            <li><a href="http://www.twitter.com/mageia_org">twitter.com/mageia_org</a></li>
                            <li><a href="http://identi.ca/mageia">identi.ca/mageia</a></li>
                        </ul>
                    </div>
                </div>
                <div class="yui-u">
                    <div class="para">
		    <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FMageia%2F157247240967735&amp;width=320&amp;connections=10&amp;stream=false&amp;header=false&amp;height=255" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:320px; height:255px;" allowTransparency="true"></iframe>
		<a href="http://twitter.com/mageia_org" class="twitter-follow-button">Follow @mageia_org</a>
<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
