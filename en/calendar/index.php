<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Mageia calendar</title>
    <meta name="description" content="Mageia calendar for organization, events, development schedule and more." />
    <meta name="keywords" content="mageia, linux, calendar, events" />
    <meta name="author" content="Mageia" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" >
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>
    
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1>Mageia <span>| Calendar</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <br />
                <?php
                $params = array(
                    'height' => 600,
                    'wkst' => 2,
                    'hl' => 'en_GB',
                    'bgcolor' => '#FFFFFF',
                    'src' => 'ojiv9mbtj8nt248dcjsfn6n664@group.calendar.google.com',
                    'color' => '#125A12',
                    'src' => 'gpm9kdohufidedmlpnuuq4pvmo@group.calendar.google.com',
                    'color' => '#8C500B',
                    'src' => 'hm0j50l2vmv0dlstaigbm7nt30@group.calendar.google.com',
                    'color' => '#691426',
                    'src' => 'uo3onvtl8q6qk5m3emq83rekag@group.calendar.google.com',
                    'color' => '#42104A',
                    'ctz' => 'Europe/Paris'
                );
                ?>
                <iframe src="https://www.google.com/calendar/b/0/embed?height=600&amp;wkst=2&amp;hl=en&amp;bgcolor=%23FFFFFF&amp;src=ojiv9mbtj8nt248dcjsfn6n664%40group.calendar.google.com&amp;color=%23125A12&amp;src=gpm9kdohufidedmlpnuuq4pvmo%40group.calendar.google.com&amp;color=%238C500B&amp;src=uo3onvtl8q6qk5m3emq83rekag%40group.calendar.google.com&amp;color=%2342104A&amp;src=hm0j50l2vmv0dlstaigbm7nt30%40group.calendar.google.com&amp;color=%23691426&amp;ctz=UTC"
                    style="border-width:0"
                    width="749"
                    height="600"
                    frameborder="0"
                    scrolling="no"></iframe>

                <div class="para">
                    <p>This calendar shows all Mageia events,
                        <a href="http://mageia.org/wiki/doku.php?id=meetings">team meetings</a>,
                        development planning milestones
                        and possibly more.</p>
                    <p>It is public and available to all. Only Mageia Board and Council members and team leaders
                        have a write access to it.</p>
                    <p>For any comment, addition, change to this calendar, feel free to contact us through:</p>
                    <ul>
                        <li>your <a href="http://mageia.org/wiki/">team</a> leader or representative,</li>
                        <li><a href="irc://irc.freenode.net/#mageia-dev">#mageia-dev</a> on Freenode,</li>
                        <li><a href="mailto:mageia-contact@mageia.org">mageia-contact@mageia.org</a> in last resort.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



