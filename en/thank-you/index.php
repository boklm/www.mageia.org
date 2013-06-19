<?php
define('HLANG', true);
require '../../langs.php';

_lang_load($locale, "thank-you");


include '../../donators.inc.php';

?><!DOCTYPE html>
<html dir="ltr" lang="<?php echo $locale ?>">
<head>
    <meta charset="utf-8">
    <title><?php _e('Thank you for making Mageia possible.')?></title>
    <meta name="description" content="<?php _e('People, organisations and services without which Mageia would not exist.'); ?>">
    <meta name="keywords" content="<?php _e('mageia, donate, donation, thanks, partners, help, mirrors, hosting'); ?>">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <?php include '../../analytics.php'; ?>
    <script src="http://static.mageia.org/g/js/jquery-1.10.1.min.js"></script>
    <script src="http://static.mageia.org/g/js/treasurer.js"></script>
    <script type="text/javascript">thankyou_page();</script>
</head>
<body class="donate">
    <?php echo $hsnav; ?>
    <header id="mgnavt">
        <h1><?php _e('Thanks to them too, Mageia goes forward.')?></h1>
        <ul>
            <li><a href="../donate/"><?php _e('You too can donate!')?></a></li>
            <li><a href="../about/reports/"><?php _e('Check our activity and financial reports!')?></a></li>
        </ul>
    </header>
    <article>
        <section class="para" style="width: 70%; text-align: left; float: left;">
            <p><?php
                echo sprintf(_t('The following amazing people %sdonated money%s to Mageia.Org:'),
                '<a href="../donate/">', '</a>');
            ?></p>
            <ul id="donlist" class="ty-ppl-list"></ul>
            <p>
                <?php echo sprintf(_t('%s Euros has been donated to Mageia.Org in the last 30 days. <a href="%s">More details</a>.'),
                    '<span id="donations_30days"></span>', 'http://treasurer.mageia.org/donations.html');
                ?>
            </p>
            <p>
                <?php _e('Last update:') ?> <span id="last_update"></span>
            </p>
        </section>
        <section class="para" style="width: 20%; text-align: left; float: left;">
            <p><?php _e('Since September 2010, Mageia would not have come to a reality without the enthusiasm, advice and involvement of hundreds of people.')?></p>
            <p><?php _e('It would not have either, without help and donation from many people and organizations, that provided Mageia.Org with advice, encouragements, trust, facilities, hosting, server and development hardware, mirroring facilities, network bandwidth, money and finally, care.')?></p>
            <p><?php _e('This page is here to remind of their contribution to this project.')?></p>
        </section>
        <section class="para" style="width: 20%; text-align: left; float: left;">
            <p><?php _e('Those organizations and people provided Mageia.Org with mirroring facilities, hosting, hosting advice, server hardware, network bandwidth or some facilities:')?></p>
            <?php echo html_orgs_list($orgs); ?>
            <hr>
            <p><?php _e('Great places and teams that welcomed us and offerred us some tea, coffee, seats and advice (mostly in Paris for now):')?></p>
            <ul class="ty-ppl-list twocol">
                <li><?php _e('<a href="http://lacantine.org/">La Cantine</a>')?></li>
                <li><?php _e('Le Père Tranquille')?></li>
                <li><?php _e('Séverine\'s place')?></li>
                <li><?php _e('<a href="http://twitter.com/happylisou/">&Eacute;lise</a>\'s place')?></li>
                <li><?php _e('Starbucks Coffee')?></li>
            </ul>
            <hr>
            <p><?php _e('Thanks a lot to all the people we met, discussed with about this project and its potential implications: you know who you are!')?></p>
        </section>
    </article>
</body>
</html>
