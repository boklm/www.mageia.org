<?php

define('HLANG', true);
require '../../langs.php';

_lang_load($locale, "about");

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
                <img src="/g/media/logo/mageia-2013.svg" id="abtlg" alt="Mageia">
                <p><?php
                    _e('Mageia is a GNU/Linux-based, Free Software operating system.');
                    _e('It is a <a href="../community/">community project</a>, supported by <a href="#mageia.org">a nonprofit organisation</a> of elected contributors.');
                ?></p>
                <?php
                    _h('Our mission: to build great tools for people.');
                    _h('Further than just delivering a secure, stable and sustainable operating system, the goal is to set up a stable and trustable governance to direct collaborative projects.');
                    _h('To date, Mageia:');
                ?>
                <ul class="hl"><?php
                    _h('<a href="2010-sept-announcement.html">started in September 2010 as a fork</a> of Mandriva Linux,', null, 'li');
                    echo '<li>',
                        _t('gathered <a href="../community/">hundreds of careful individuals and several companies worldwide</a>,'),
                        _t('who coproduce the infrastructure, the distribution itself, <a href="http://wiki.mageia.org/">documentation</a>, <a href="../downloads/">delivery</a> and <a href="../support/">support</a>, using Free Software tools;'),
                        '</li>';
		    _h('released three major stable releases <a href="../1/">in June 2011</a>, <a href="../2/">in May 2012</a> and in <a href="../3/">in May 2013</a>.', null, 'li');
                ?></ul>
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
                <?php
                    _h('is the French, Paris-based legal structure supporting the Mageia project.');
                ?>
                <ul><?php
                    _h('<a href=%s>Mageia.Org\'s legal constitution</a> and <a href=%s>governance</a> rules;',
                        array('"./constitution/"', '"https://wiki.mageia.org/en/Org"'), 'li');
                    _h('<a href="../about/reports/">financial reports</a>, <a href="../thank-you/">donators</a>.', null, 'li');
                ?></ul>

                <hr>
                <?php _h('Media &amp; artwork', null, 'h3')?>
                <ul><?php
                    _h('<a href="%s">Logo, CD covers files, media files</a>.', array('../about/media/'), 'li');
                    _h('<a href="%s">Current graphics charter</a>.', array('../charter.html'), 'li');
                ?></ul>

            </div></div>
        </div>
    </div>
</body>
</html>
