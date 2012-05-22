<?php

define('HLANG', true);
require '../../../langs.php';
include 'locales.php';

$_t = i18n::get_strings($_t, $locale, $i18n_fallback_rules);

?><!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php echo $_t['page_title']; ?></title>
    <meta name="description" content="<?php echo $_t['page_desc']; ?>">
    <meta name="keywords" content="<?php echo $_t['page_kw']; ?>">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <link rel="canonical" href="/<?php echo $locale; ?>/1/next/">
    <?php include '../../../analytics.php'; ?>
</head>
<body class="release">
    <?php echo $hsnav; ?>
    <h1 id="mgnavt"><?php _e('page_h1')?></h1>
    <div id="doc" class="yui-t7">
        <?php include '../nav.php'; ?>
        <div id="bd" role="main">
            <div class="yui-g bb1">
                <div class="yui-u first"><div class="para">
                    <h2><?php echo $_t['h2_spread_word']; ?></h2>
                    <p><?php include '../../downloads/dl_twitter.php'; echo dl_twitter($locale); ?></p>

                </div><div class="para">
                    <h2><?php echo $_t['h2_party']; ?></h2>

                </div><div class="para">
                    <h2><?php echo $_t['h2_what_do']; ?></h2>
                    <p><?php echo $_t['tell_us']; ?></p>
                    <p><?php echo $_t['place_and_format']; ?></p>

                </div><div class="para">
                    <h2><?php echo $_t['h2_where_go']; ?></h2>
                    
                    <p><?php echo $_t['where_go_1']; ?></p>
                    
                    <p><?php echo $_t['where_go_2']; ?></p>

                    <p><?php echo $_t['where_go_3']; ?></p>

                    <p><?php echo $_t['where_go_4']; ?></p>

                </div><div class="para">
                    <h3><?php echo $_t['h3_relax']; ?></h3>
                    <p><?php echo $_t['text_relax_1']; ?></p>
                    <ul>
                        <?php foreach ( $_t['array_relax'] as $anItem ) {
                            echo '<li>'.$anItem.'</li>';
                        } ?>
                    </ul>
                    
                    <p><?php echo $_t['text_relax_2']; ?></p>
                </div></div>
                <div class="yui-u">
                    <div style="width: 350px; height: 420px;">
                    <script src="http://widgets.twimg.com/j/2/widget.js"></script>
                    <script>
                    new TWTR.Widget({
                      version: 2,
                      type: 'search',
                      search: 'mageia',
                      interval: 5000,
                      title: '',
                      subject: '',
                      width: 350,
                      height: 350,
                      theme: {
                        shell: {
                          background: '#ffffff',
                          color: '#8ec1da'
                        },
                        tweets: {
                          background: '#ffffff',
                          color: '#444444',
                          links: '#1985b5'
                        }
                      },
                      features: {
                        scrollbar: true,
                        loop: true,
                        live: true,
                        hashtags: true,
                        timestamp: true,
                        avatars: true,
                        toptweets: true,
                        behavior: 'default'
                      }
                    }).render().start();
                    </script>
                    </div>

                    <div>
                        <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FMageia%2F157247240967735&amp;width=320&amp;connections=15&amp;stream=false&amp;header=false&amp;height=350"
                            scrolling="no"
                            frameBorder="0"
                            style="border:0; -webkit-box-shadow: 0 0 10px #aaa; -moz-box-shadow: 0 0 10px #aaa; overflow:hidden; width:320px; height:350px; frameBorder:0;"
                            allowTransparency="true"></iframe>
                        <br>
                    </div>
                    <br>
                </div>
            </div>
            <?php include '../nav.php'; ?>
        </div>
    </div>
</body>
</html>
