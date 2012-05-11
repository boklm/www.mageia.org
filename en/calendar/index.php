<?php
define('HLANG', true);
require '../../langs.php';
include 'locales.php';

$_t = i18n::get_strings($_t, $locale, $i18n_fallback_rules);

?><!DOCTYPE html>
<html dir="ltr" lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php _e('Mageia calendar') ?></title>
    <meta name="description" content="Mageia calendar for organization, events, development schedule and more.">
    <meta name="keywords" content="mageia, linux, calendar, events">
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
                <?php
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
                $params = http_build_query($params);
                foreach ($calendars as $c)
                    $params .= sprintf('&src=%s&color=%s',
                        urlencode($c['id']), urlencode($c['color']));

                $url = 'https://www.google.com/calendar/b/0/embed?' . $params;
                ?>
                <iframe src="<?php echo $url; ?>"
                    style="border-width:0"
                    width="749"
                    height="600"
                    frameborder="0"
                    scrolling="no"></iframe>

                <div class="para">
                    <p>This calendar shows all Mageia events,
                        <a href="https://wiki.mageia.org/en/Meetings">team meetings</a>,
                        development planning milestones
                        and possibly more.</p>
                    <p>It is public and available to all.
                        Only Mageia Board and Council members and team leaders have a write access to it.</p>
                    <p>For any comment, addition, change to this calendar, feel free to contact us through:</p>
                    <ul>
                        <li>your <a href="https://wiki.mageia.org/en/">team</a> leader or representative,</li>
                        <li><a href="irc://irc.freenode.net/#mageia-dev">#mageia-dev</a> on Freenode,</li>
                        <li><a href="mailto:mageia-contact@mageia.org">mageia-contact@mageia.org</a> in last resort.</li>
                    </ul>
                </div>
                <div class="para">
                    <h3><?php _e('ICS files') ?></h3>
                    <p><?php _e('You may get read-only access directly to these .ics files:')?></p>
                    <ul>
                    <?php
                    $ical_tmpl = 'http://www.google.com/calendar/ical/%s/public/basic.ics';
                    foreach ($calendars as $c)
                    {
                        echo sprintf('<li><a href="%s">%s</a></li>',
                            sprintf($ical_tmpl, urlencode($c['id'])),
                            $c['title']);
                    }
                    ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
