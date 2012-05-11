<?php
define('HLANG', true);
require '../../langs.php';
include 'locales.php';

$_t = i18n::get_strings($_t, $locale, $i18n_fallback_rules);

include '../../donators.inc.php';

?><!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <title><?php _e('Thank you for making Mageia possible.')?></title>
    <meta name="description" content="<?php _e('People, organisations and services without which Mageia would not exist.'); ?>">
    <meta name="keywords" content="<?php _e('mageia, donate, donation, thanks, partners, help, mirrors, hosting'); ?>">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <?php include '../../analytics.php'; ?>
</head>
<body class="about">
    <?php echo $hsnav; ?>
    <h1 id="mgnavt"><?php _e('Thanks to them too, Mageia goes forward.')?></h1>
    <div id="doc4" class="yui-t7">
        <div id="bd" role="main">
            <div class="yui-g"><div class="para donate" style="padding-top: 2em;">
                <p><?php _e('expl1')?></p>
                <p><?php _e('expl2')?></p>
                <p><?php _e('expl3')?></p>
            </div></div>
            <div class="yui-gc">
                <div class="yui-u first rb1"><div class="para donate">
                    <p><?php
                    $pp = html_donators_list($donators, $anonymous);
                    echo sprintf(_t('%d amazing people %sdonated money%s to Mageia.Org:'),
                        $pp['count'], '<a href="/donate/">', '</a>');
                    ?></p>
                    <?php echo $pp['list']; ?>
                </div></div>
                <div class="yui-u"><div class="para donate">
                    <p>Those organizations and people provided Mageia.Org with
                        mirroring facilities, hosting, hosting advice, server hardware,
                        network bandwidth or some facilities:</p>
                    <?php echo html_orgs_list($orgs); ?>
                    
                    <p>Great places and teams that welcomed us and offerred us some tea, coffee, seats and advice
                        (mostly in Paris for now):</p>
                    <ul class="ty-ppl-list twocol">
                        <li><a href="http://lacantine.org/">La Cantine</a></li>
                        <li>Le Père Tranquille</li>
                        <li>Séverine's place</li>
                        <li><a href="http://twitter.com/happylisou/">&Eacute;lise</a>'s place</a></li>
                        <li>Starbucks Coffee</li>
                    </ul>
                    <p>Thanks a lot to all the people we met, discussed with about this project
                        and its potential implications: you know who you are!</p>
                    
                </div></div>
            </div>
        </div>
    </div>
</body>
</html>
