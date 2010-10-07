<?php
/**
*/

$links = array(
'http://www.linuxfordevices.com/c/a/News/Mageia-Linux-announced/',
'http://www.osnews.com/story/23820/Mandriva_Fork_Announced_by_Former_Employees',
'http://www.thinq.co.uk/2010/9/20/mandriva-forks-mageia/',
'http://linux.slashdot.org/story/10/09/18/1437248/developers-fork-mandriva-linux-creating-mageia',
'http://www.unixmen.com/news-today/1193-developers-fork-mandriva-linux-creating-mageia',
'http://www.itwire.com/opinion-and-analysis/open-sauce/41952-mandriva-fork-mageia-is-born',
'http://www.happyassassin.net/2010/09/18/mandriva-news-mageia/',
'http://jquelin.blogspot.com/2010/09/good-bye-mandriva-hello-mageia.html',
'http://www.h-online.com/open/news/item/Mandriva-Linux-forked-into-Mageia-community-distribution-1081928.html',
'http://www.phoronix.com/scan.php?page=news_item&px=ODYxNg',
'http://blogs.gnome.org/ovitters/2010/09/18/mageia-fork-of-mandriva/',
'http://blog.internetnews.com/skerner/2010/09/does-mageia-spell-the-end-for.html',
'http://ostatic.com/blog/mandriva-implodes-spawns-mageia-fork',
'http://www.linuxbsdos.com/2010/09/18/forking-mandriva-linux-the-birth-of-mageia/',
'http://www.desktoplinux.com/news/NS3165663211.html',
'http://brunocornec.wordpress.com/2010/09/20/mageia-end-of-trouble-for-the-mandriva-community/',
'http://ubuntuforums.org/showthread.php?p=9861159#post9861159',
'http://boklm.eu/b/log/tech/mandriva/new-distribution-mageia.html',
'http://lwn.net/Articles/406058/',
'http://colin.guthr.ie/2010/09/there-is-no-spoon-but-there-is-a-fork/',
'http://fasmz.org/~pterjan/blog/?date=20100918',
'http://my.opera.com/pacho/blog/mageia-mandrivalinux-fork',
'http://arebentisch.wordpress.com/2010/09/18/mandriva-is-now-mageia/',
'http://www.lemagit.fr/article/france-linux-poste-travail-mandriva-open-source-fork/7119/1/mageia-pour-communaute-mandriva-solution-passe-par-fork/',
'http://www.pcinpact.com/actu/news_multi/59449.htm',
'http://www.clubic.com/linux-os/actualite-366354-mageia-prochain-fork-mandriva.html',
'http://www.theinquirer.net/inquirer/news/1733986/ex-mandriva-linux-staff-fork-distro',
);

?><?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Mageia - A New Linux Distribution</title>
    <meta name="description" content="Mageia is new community-based Linux distribution." />
    <meta name="keywords" content="mageia, linux, mandriva, free software" />
    <link rel="stylesheet" type="text/css" href="../g/style/all.css" />
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-18603191-1']);
      _gaq.push(['_setDomainName', '.mageia.org']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
</head>
<body>
    <?php include '../langs.php'; ?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1>Mageia <span>&ndash; Press Reviews</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para">
                    <ul><?php foreach ($links as $l):
                        echo sprintf('<li><a href="%s">%s</a></li>',
                            $l, $l);
                        endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="yui-g">
                <div class="yui-u first">
                    <div class="para">
                    <h2>How to contact us.</h2>

                     <h3><a href="https://www.mageia.org/mailman/">Mailing-lists</a></h3>

                     <h3>IRC (Freenode network)</h3>
                     <?php include '../channels.html'; ?>
                    </div>
                </div>
                <div class="yui-u">
                    <div class="para">
                    <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FMageia%2F157247240967735&amp;width=320&amp;connections=10&amp;stream=false&amp;header=false&amp;height=255" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:320px; height:255px;" allowTransparency="true"></iframe>
                    <p>You should follow us <a href="http://www.twitter.com/mageia_org">on Twitter</a>
                        or <a href="http://identi.ca/mageia">on identi.ca</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
