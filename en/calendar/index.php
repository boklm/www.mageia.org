<?php
define('HLANG', true);
require '../../langs.php';

_lang_load($locale, "calendar");

/**
 *
*/
$calendars = array(
    array(
        'id' => 'ojiv9mbtj8nt248dcjsfn6n664@group.calendar.google.com',
        'title' => _t('events'),
        'color' => '#125A12'
    ),
    array(
        'id' => 'gpm9kdohufidedmlpnuuq4pvmo@group.calendar.google.com',
        'title' => _t('meetings &amp; organization'),
        'color' => '#8C500B'
    ),
    array(
        'id' => 'hm0j50l2vmv0dlstaigbm7nt30@group.calendar.google.com',
        'title' => _t('development &amp; release plan'),
        'color' => '#691426'
    ),
    array(
        'id' => 'uo3onvtl8q6qk5m3emq83rekag@group.calendar.google.com',
        'title' => _t('mentoring'),
        'color' => '#42104A'
    )
);

$params = array(
    'height'  => 600,
    'wkst'    => 2,
    'hl'      => 'en_GB',
    'bgcolor' => '#FFFFFF',
    'ctz'     => 'UTC'
);
$params = http_build_query($params, '', '&amp;');
foreach ($calendars as $c) {
    $params .= sprintf('&amp;src=%s&amp;color=%s',
        urlencode($c['id']), urlencode($c['color']));
}
$url = 'https://www.google.com/calendar/b/0/embed?' . $params;

$ical_tmpl = 'http://www.google.com/calendar/ical/%s/public/basic.ics';
$html_calendars = '';
foreach ($calendars as $c) {
    $html_calendars .= sprintf('<li><a href="%s">%s</a></li>',
        sprintf($ical_tmpl, urlencode($c['id'])),
        $c['title']);
}


?><!DOCTYPE html>
<html dir="ltr" lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php _e('Mageia calendar') ?></title>
    <meta name="description" content="<?php _e('Mageia calendar for organization, events, development schedule and more.') ?>">
    <meta name="keywords" content="<?php _e('mageia, linux, calendar, events') ?>">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <?php include '../../analytics.php'; ?>
</head>
<body class="community">
    <?php echo $hsnav?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a>
            <span class="lsep">|</span> <span class="subh"><?php _e('Calendar')?></span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <br />
                <iframe src="<?php echo $url; ?>"
                    style="border-width:0"
                    width="749"
                    height="600"
                    frameborder="0"
                    scrolling="no"></iframe>

                <div class="para">
                    <p><?php _e('This calendar shows all Mageia events, <a href="https://wiki.mageia.org/en/Meetings">team meetings</a>, development planning milestones and possibly more.') ?></p>
                    <p><?php _e('It is public and available to all. Only Mageia Board and Council members and team leaders have a write access to it.') ?></p>
                    <p><?php _e('For any comment, addition, change to this calendar, feel free to contact us through:') ?></p>
                    <ul>
                        <li><?php _e('your <a href="https://wiki.mageia.org/en/">team</a> leader or representative,') ?></li>
                        <li><?php _e('<a href="irc://irc.freenode.net/#mageia-dev">#mageia-dev</a> on Freenode,') ?></li>
                        <li><?php _e('<a href="mailto:mageia-contact@mageia.org">mageia-contact@mageia.org</a> in last resort.') ?></li>
                    </ul>
                </div>
                <div class="para">
                    <h3><?php _e('ICS files') ?></h3>
                    <p><?php _e('You may get read-only access directly to these .ics files:')?></p>
                    <ul>
                    <?php echo $html_calendars; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
