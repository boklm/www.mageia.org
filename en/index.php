<?php

define('HLANG', true);
require '../langs.php';
include 'index_locales.php';

$_t = i18n::get_strings($_t, $locale, $i18n_fallback_rules);

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
    <?php echo $hsnav; ?>
    <div id="doc" class="yui-t7">
	    <div id="hd" role="banner"><h1><a id="logo" href="/<?php echo $locale ?>/"><span>Mageia</span></a>
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
            <div class="yui-g bb1">
                <div class="para" id="news">
                <?php
                    include '../lib/news.php';
                    echo sprintf('<h2><a href="%s">%s</a></h2>', blog_link($locale), $_t['news']);
                    echo html_news($locale);
                ?>
                </div>
            </div>
            <div class="yui-g">
                <div class="para bb1"><p><?php echo $_t['about'][0]; ?></p>
                    <p><?php echo $_t['about'][1]; ?></p>
                </div>
            </div>
            <div class="yui-gb">
                <div class="yui-u first"><div class="para">
                    <script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script></p>
                    <a href="http://twitter.com/mageia_org" class="twitter-follow-button" data-lang="<?php echo $locale; ?>">Follow @mageia_org</a>
                </div></div>
                <div class="yui-u"><div class="para">
                    <div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:facepile href="facebook.com/Mageia" width="200" max_rows="1"></fb:facepile>
                </div></div>
                <div class="yui-u"><div class="para">
                    <g:plusone href="http://mageia.org/"></g:plusone>
                </div></div>
            </div>
            <?php /*
            <div class="yui-g bb1">
                <div class="yui-u first rb1">
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
            </div>
            */ ?>
        </div>
    </div>
    <script type="text/javascript" src="https://apis.google.com/js/plusone.js">
      {lang: '<?php echo $locale; ?>'}
    </script>

</body>
</html>
