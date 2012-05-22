<?php
define('HLANG', true);
require '../../langs.php';
require 'locales.php';

$_t = i18n::get_strings($_t, $locale, $i18n_fallback_rules);

?><!DOCTYPE html>
<html dir="ltr" lang="<?php echo $locale ?>">
<head>
    <meta charset="utf-8">
    <title><?php _e('About Mageia'); ?></title>
    <meta name="description" content="<?php _e('Mageia is a Free Software, community-led project. Learn more about it.')?>">
    <meta name="keywords" content="<?php _e('mageia, mageia.org, about, mission, contacts, governance, values, timeline')?>">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <?php include '../../analytics.php'; ?>
    <style>
    #abtlg {
        display: block;
        margin: 0 auto;
        width: 500px;
    }
    </style>
</head>
<body class="about">
    <?php echo $hsnav; ?>
    <h1 id="mgnavtitle"><?php _e('About Mageia')?></h1>
    <div id="doc" class="yui-t7">
        <div id="bd" role="main">
            <div class="yui-g"><div class="para" style="padding-top: 2em;">
                <img src="/g/media/logo/mageia-2011.svg" id="abtlg" alt="Mageia">
                <p>Mageia is a GNU/Linux-based, Free Software operating system.
                    It's a <a href="../community/">community project</a>,
                    supported by <a href="#mageia.org">a nonprofit organisation</a>
                    of elected contributors.</p>

                <p>Our mission: to build great tools for people.</p>


                <p>Further than just delivering a secure, stable and sustainable operating system,
                    the goal is to set up a stable and trustable governance
                    to direct collaborative projects.</p>

                <p>To date, Mageia:</p>
                <ul class="hl">
                    <li><a href="2010-sept-announcement.html">started in September 2010 as a fork</a>
                        of Mandriva Linux,</li>
                    <li>gathered <a href="../community/">hundreds of careful individuals and several companies worldwide</a>,
                        coproducing the infrastructure (hardware and software),
                        the distribution itself (developing, packaging, translating, chasing bugs, etc.),
                        <a href="http://wiki.mageia.org/">documentation</a>,
                        <a href="../downloads/">delivery</a> and <a href="../support/">support</a>,
                        using Free Software tools;</li>
                    <li>released two major stable releases <a href="../1/">in June 2011</a> and <a href="../2/">in May 2012</a>.</li>
                </ul>
                <!--
                <ul>
                    <li>Overview</li>
                    <li>Mission</li>
                    <li>Projects</li>
                    <li>News</li>
                    <li>Contacts</li>
                    <li>Supporters</li>
                    <li>Governance: ...</li>
                    <li>Values</li>
                    <li>Code of conduct</li>
                    <li>Mageia.Org: ...</li>
                    <li>History/Timeline</li>
                </ul>
                -->

                <hr>
                <h3 id="mageia.org">Mageia.Org</h3>
                <p>is the French, Paris-based legal structure supporting the Mageia project.
                    Learn more about it:</p>
                <ul>
                    <li><a href="./constitution/">Mageia.Org's legal constitution</a>
                        and <a href="https://wiki.mageia.org/en/Org">governance</a> rules;</li>
                    <li>association members;</li>
                    <li><a href="/en/about/reports/">financial reports</a>, <a href="/en/thank-you/">donators</a>.</li>
                </ul>

                <hr>
                <h3>Media &amp; artwork</h3>
                <ul>
                    <li><a href="/en/about/media/">Logo, CD covers files, media files</a>.</li>
                    <li><a href="/en/charter.html">Current graphics charter</a>.</li>
                </ul>

            </div></div>
        </div>
    </div>
</body>
</html>
