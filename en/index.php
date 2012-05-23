<?php

define('HLANG', true);
require '../langs.php';
include 'index_locales.php';

$_t = i18n::get_strings($_t, $locale, $i18n_fallback_rules);

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
    <title><?php _e('page_title'); ?></title>
    <meta name="description" content="<?php _e('page_desc'); ?>">
    <meta name="keywords" content="<?php _e('page_kw'); ?>">
    <link type="text/plain" rel="author" href="/humans.txt">
    <?php
    foreach ($langs as $l => $name)
        if ($l != $locale)
            echo sprintf('<link rel="alternate" hreflang="%s" href="http://www.mageia.org/%s/">', $l, $l);
    ?>
    <link rel="alternate" type="application/rss+xml" title="<?php _e('alternate_title'); ?>" href="<?php _e('alternate_href'); ?>">
    <?php include '../analytics.php'; ?>
    <style>
    html, body {
        margin: 0;
        padding: 0;
        font-family: "Trebuchet MS","Lucida Grande","Lucida Sans Unicode",Helvetica,Arial,Verdana,sans-serif;
        line-height: 1.4;
    }
    hr { display: none; }
    ol, ul { margin: 0; padding: 0; list-style: none; }
    h1, h2 { font-size: 40px; font-weight: normal; margin-top: 0; }
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
    
    ul#dl li { margin-bottom: 20px; }
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
    
    #dl-btn-other {
        display: block;
        width: 222px;padding: 10px 20px 10px 20px;
        background: rgba(255,255,255, 0.1);
        border-radius: 4px;
        color: #ddeeff;
        text-shadow: none;
        text-decoration: none;
        font-size: 75%;
    }
    #dl-btn-other:hover {
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

        #nav li { margin: 1em 0 0 1em; float: left; }
        #nav li a {
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
        #dl-btn-other:hover {
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

        #nav {
            padding: 0;
            margin: 0 auto;
            display: table;
            border-radius: 4px;
            font-size: 80%;
            margin-bottom: 20px;
        }
        #nav li {
            display: table-cell;
            padding: 0;
            border-right: 1px solid #f0f0f0;
        }
        #nav li:last-child { border: none; }
        #nav a {
            text-decoration: none;
            padding: 20px 1em 20px 1em;
            display: block;
            min-width: 80px;
            text-align: center;
            color: #444;
        }
        #nav a:hover {
            color: #2383C2;
        }
    }
    @media (min-width: 1200px) {}
    </style>
    <link rel="stylesheet" href="/g/fa/css/font-awesome.css">
</head>
<body>
    
<div id="master">
    <h1><a href="about/"><?php _e('page_h1'); ?></a></h1>
</div>

<div id="up">
    <div class="container">
        <div id="b1">
            <h2><?php _e('change'); ?></h2>
            <ul id="p"><?php foreach ($_t['change-items'] as $ci)
                echo sprintf('<li>%s</li>', $ci);
                ?></ul>
            </ul>
        </div>
        <div id="b2">
            <ul id="dl">
                <li><a href="downloads/" id="dl-btn">
                        <span id="dl-btn-mageia">Mageia 2</span>
                        <span style="font-size: 32px; color: green; float: right;" class="icon-download-alt"></span>
                        <span class="dl-btn free-dl"><?php _e('dl-free-act'); ?></span>
                        <span class="dl-btn"><?php _e('dl-version'); ?></span>
                    </a>
                    <p class="dl-info">
                        <a hreflang="en" href="https://wiki.mageia.org/en/Mageia_2_Release_Notes"><?php _e('dl-rel-notes'); ?></a>,
                        <a hreflang="en" href="https://wiki.mageia.org/en/Mageia_2_Errata">errata</a>.
                    </p>
                </li>
                <li><a href="contribute/" id="dl-btn-other"><?php _e('dl-contribute'); ?></a>
                </li>
                <!--
                <li><a href="1/" id="dl-btn-other">
                    <span><?php _e('dl-mga-1'); ?></span>
                    </a>
                </li>
                -->
            </ul>
        </div>
    </div>
</div>
<hr>
<div id="down">
    <div class="container">
        <ul id="nav"><?php foreach ($nav as $k => $v)
            echo sprintf('<li><a class="%s" href="%s">%s</a></li>',
                $k, $v[0], $v[1]);
        ?></ul>
        <hr>
        <p id="fnotes">
            <a href="/map/"><?php _e('Sitemap')?></a>
            | <a href="/en/about/policies/privacy/"><?php _e('Privacy policy')?></a>
        </p>
    </div>
</div>

</body>
</html>