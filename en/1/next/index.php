<?php
$_t = array(
    'page_title' => 'Mageia 1 &ndash; And next?',
    'page_desc' => '',
    'page_kw' => 'mageia, mandriva, upgrade, migrate',
    'page_h1' => 'And next?'
);


?>
<!DOCTYPE html>
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
    <?php include '../../../langs.php'; ?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner">
            <h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh"><?php echo $_t['page_h1']; ?></span></h1>
        </div>
        <?php include '../nav.php'; ?>

        <div id="bd" role="main">
            <div class="yui-g bb1">
                <div class="yui-u first"><div class="para">
                    <h2>Spread the word!</h2>
                    <p>blog, twitter, facebook, forum, other</p>
                    <p>link to press release template</p>
                    <p><?php include '../../downloads/dl_twitter.php'; echo dl_twitter($locale); ?></p>
                    
                </div><div class="para">
                    <h2>What will <strong>you</strong> do with it?</h2>
                    stories
                    
                    
                </div><div class="para">
                    <h2>What will <strong>we</strong> do from there?</h2>
                    
                    <p>You can <a href="/en/contribute/">join us</a>
                        and help us improve.</p>
                    
                    <p>Mageia is still young. A lot has been achieved in the past 9 months,
                        and that's only the beginning.</p>

                    <p>We can design and build a better operating system platform
                        for computers and other new devices.</p>

                    <p>We can make this better for developers and users.</p>

                    <p>We can be a better place to nurture open source technologies
                        </p>

                    <h3>Brainstorm in the Summer for...</h3>
                    
                    <h3>refined goals for 2012!</h3>

                    
                </div></div>
                <div class="yui-u">
                    <div style="width: 350px; height: 350px;">
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
                    <div class="likebox-frame">
                        <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FMageia%2F157247240967735&amp;width=320&amp;connections=15&amp;stream=false&amp;header=false&amp;height=350" scrolling="no" frameBorder="0" style="border:0; -webkit-box-shadow: 0 0 10px #aaa; overflow:hidden; width:320px; height:350px; frameborder:0;" allowTransparency="true"></iframe>
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
