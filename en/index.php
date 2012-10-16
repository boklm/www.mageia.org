<?php
/**
*/

define('HLANG', true);
require '../langs.php';

_lang_load($locale, 'index');

$nav = array(
    'nav-for-pc'     => array('for-pc/',     _t('For PC')),
    'nav-for-server' => array('for-server/', _t('For server')),
    'nav-support'    => array('support/',    _t('Support')),
    'nav-community'  => array('community/',  _t('Community')),
    'nav-about'      => array('about/',      _t('About&nbsp;Mageia.Org'))
);

?><!DOCTYPE html>
<html dir="ltr" lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php _e('Home of the Mageia project'); ?></title>
    <meta name="description" content="<?php _e('Mageia is a community-based Linux distribution, for desktop & server.'); ?>">
    <meta name="keywords" content="<?php _e('linux, mageia, free software, operating system, computer, laptop, desktop, server, headless, device, mobile, mandriva, mandrake'); ?>">
    <link type="text/plain" rel="author" href="/humans.txt">
    <?php
    foreach ($langs as $l => $name)
        if ($l != $locale)
            echo sprintf('<link rel="alternate" hreflang="%s" href="http://www.mageia.org/%s/">', $l, $l);
    ?>
    <link rel="alternate" type="application/rss+xml" title="<?php _e('Mageia Blog (English)'); ?>" href="<?php _e('http://blog.mageia.org/en/?feed=rss'); ?>">
    <?php require '../analytics.php'; ?>
    <style>
    html, body {
        margin: 0;
        padding: 0;
        font-family: "Trebuchet MS","Lucida Grande","Lucida Sans Unicode",Helvetica,Arial,Verdana,sans-serif;
        line-height: 1.4;
    }
    hr { display: none; }
    ol, ul { margin: 0; padding: 0; list-style: none; }
    h1, h2 { font-size: 40px; font-weight: normal; margin-top: 0; color: #fff !important; }
    #b1 { color: #fff !important; }
    #mgnav { background: #fff !important; }
    #lang_form { position: absolute; top: 0; right: 0; }
    a[hreflang]:after { color:#d0d0ff; font-style:italic; content: "\A0["attr(hreflang)"]"; }

    #master {
        padding: 2em;
        border: 1px solid red;
        margin: 2em;
        font-size: 90%;
        display: none;
    }

    #up, #down { margin: 0; padding: 0; }

    #up {
        padding-bottom: 40px;
        color: #fff;
        text-shadow: 0 0 1px #333;
        background: #3494D3;

        background: -webkit-radial-gradient(20% 350px, circle cover, #3494D3 0%, #2383C2 50%);
        background: -moz-radial-gradient(26% 370px, circle cover, #3494D3 0%, #2383C2 50%);
        background: -o-radial-gradient(20% 350px, circle cover, #3494D3 0%, #2383C2 50%);
        background: radial-gradient(20% 350px, circle cover, #3494D3 0%, #2383C2 50%);
    }

    .container {
        margin: 0 auto;
        max-width: 980px;
    }

    ul#dl li { margin-bottom: 14px; }
    #dl-btn {
        display: block;
        color: #000;
        text-decoration: none;
        width: 280px;
        background: rgba(255,255,255,0.9);

        padding: 20px 20px 15px 20px;
        border-radius: 4px;
        text-shadow: none;
        box-shadow: 0 0 1px #333;
        /*
        background: #ff6020;
        background: -webkit-linear-gradient(top, #ff6600 0%, orange 100%);
        background: -moz-linear-gradient(top, #ff3000 0%, orange 100%);
        background: -o-linear-gradient(top, #ff3000 0%, orange 100%);
        background: linear-gradient(top, #ff3000 0%, orange 100%);
        /**/
    }
    #dl-btn-mageia {
        background: url(/g/images/logo_ln_1.png);
        width: 186px;
        height: 61px;
        display: block;
        color: transparent;
        margin-bottom: 10px;
    }
    span.dl-btn {
        display: block;
        font-size: 90%;
    }
    span.dl-btn span.low {
        color: #777;
        font-size: 75%;
    }
    p.dl-info {
        padding: 0 20px;
        font-size: 75%;
    }
    p.dl-info a {
        color: #fff;
        text-shadow: none;
        text-decoration: none;
    }
    
    .dl-btn-other {
        display: block;
        width: 222px;
        padding: 10px 20px 10px 20px;
        background: rgba(255,255,255, 0.1);
        border-radius: 4px;
        color: #ddeeff;
        text-shadow: none;
        text-decoration: none;
        font-size: 75%;
    }
    .dl-btn-other:hover {
        background: rgba(255,255,255, 0.2);
        color: #fff;
    }
    #dl-btn:hover { background: #fff; }
    #dl-btn:active { border-radius: 0; }

    #fnotes {
        text-align: center;
        font: 60%/1.2 Verdana,Arial,sans-serif;
        color: #f0f0f0;
    }
    #fnotes a { color: #ccc; text-decoration: none; }
    .free-dl { color: green; font-weight: bold; }
    
    /* Landscape phones and down */
    @media (max-width: 480px) {}

    /* Landscape phone to portrait tablet */
    @media (max-width: 768px) {}

    /* Portrait tablet to landscape and desktop */
    @media (max-width: 1000px) {
        h2 { margin: 0 0 .3em; line-height: 1.2; font-size: 200%; }

        ul#p { font-size: 90%; list-style: circle; padding: 0 0 0 2em; margin: 0; }
        #up { padding-bottom: 0; }
        #up > .container { padding: 1em; }
        #b1 { margin: 0; padding: 0 0 1em 0; }

        #navb li { margin: 1em 0 0 1em; float: left; }
        #navb li a {
            display: block;
            width: 222px;
            padding: 10px 20px 10px 20px;
            background: rgba(50,160,200, 0.1);
            border-radius: 4px;
            color: #68a;
            text-shadow: none;
            text-decoration: none;
            font-size: 75%;
        }
        #dl-btn { width: 222px; }
        .dl-btn-other:hover {
            background: rgba(255,255,255, 0.2);
            color: #fff;
        }
        #fnotes { clear: both; padding: 2em; text-align: left; }
    }

    @media (min-width: 1000px) {
        h2 { margin-bottom: 0.3em; }
        ul#p li:before { content: " > "; }
        #up > .container { background: url(/g/images/cauldron_alpha_ln_1.png) no-repeat 100% 50px; }
        #b1 { padding: 70px 0 70px; }

        #navb {
            padding: 0;
            margin: 0 auto;
            display: table;
            border-radius: 4px;
            font-size: 80%;
            margin-bottom: 20px;
        }
        #navb li {
            display: table-cell;
            padding: 0;
            border-right: 1px solid #f0f0f0;
        }
        #navb li:last-child { border: none; }
        #navb a {
            text-decoration: none;
            padding: 20px 1em 20px 1em;
            display: block;
            min-width: 80px;
            text-align: center;
            color: #444;
        }
        #navb a:hover {
            color: #2383C2;
        }
    }
    @media (min-width: 1200px) {}
    </style>
    <link rel="stylesheet" href="/g/fa/css/font-awesome.css">
</head>
<body>
    <?php echo $hsnav?>
<div id="master">
    <h1><a href="about/"><?php _e('Mageia, a free, community-based Linux distribution for desktop & server.'); ?></a></h1>
</div>

<div id="up">
    <div class="container">
        <div id="b1">
            <h2><?php _e('Change your perspective'); ?></h2>
            <ul id="p"><?php
                _h('Stable, secure operating system for desktop &amp; server', null, 'li');
                _h('Free Software, coproduced by hundreds of people', null, 'li');
                _h('Elected governance, nonprofit organization', null, 'li');
                _h('You can be part of it', null, 'li');
            ?></ul>
        </div>
        <div id="b2">
            <ul id="dl">
                <li><a href="downloads/" id="dl-btn">
                        <span id="dl-btn-mageia">Mageia 2</span>
                        <span style="font-size: 32px; color: green; float: right;" class="icon-download-alt"></span>
                        <span class="dl-btn free-dl"><?php _e('Free Download'); ?></span>
                        <span class="dl-btn"><?php _e('version 2 (May 2012)'); ?></span>
                    </a>
                    <p class="dl-info">
                        <a hreflang="en" href="https://wiki.mageia.org/en/Mageia_2_Release_Notes"><?php _e('Release notes'); ?></a>,
                        <a hreflang="en" href="https://wiki.mageia.org/en/Mageia_2_Errata">errata</a>.
                    </p>
                </li>
                <li><a href="contribute/" class="dl-btn-other"><?php _e('<strong>Get involved</strong> in the next version'); ?></a>
                </li>
                <li><a href="3/" class="dl-btn-other"><?php _e('Test Mageia 3%s', array(' alpha 2')); ?></a></li>
            </ul>
        </div>
    </div>
</div>
<hr>
<div id="down">
    <div class="container">
        <ul id="navb"><?php foreach ($nav as $k => $v)
            echo sprintf(
                '<li><a class="%s" href="%s">%s</a></li>',
                $k, $v[0], $v[1]
            );
        ?></ul>
        <hr>
        <p id="fnotes">
            <a href="/<?php echo $locale ?>/map/"><?php _e('Sitemap')?></a>
            | <a href="/<?php echo $locale ?>/about/policies/privacy/"><?php _e('Privacy policy')?></a>
        </p>
    </div>
</div>

</body>
</html>