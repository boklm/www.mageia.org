<!DOCTYPE html>
<html dir="ltr" lang="pt">
<head>
    <meta charset="utf-8" />
    <title>Calendário Mageia</title>
    <meta name="description" content="Calendário Mageia para organizações, eventos, agenda de desenvolvimento e mais." />
    <meta name="keywords" content="mageia, linux, calendário, eventos" />
    <meta name="author" content="Mageia" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" >
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>
    
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh">Calendário</span></h1></div>
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
                        'title' => 'events',
                        'color' => '#125A12'
                    ),
                    array(
                        'id' => 'gpm9kdohufidedmlpnuuq4pvmo@group.calendar.google.com',
                        'title' => 'meetings &amp; organization',
                        'color' => '#8C500B'
                    ),
                    array(
                        'id' => 'hm0j50l2vmv0dlstaigbm7nt30@group.calendar.google.com',
                        'title' => 'development &amp; release plan',
                        'color' => '#691426'
                    ),
                    array(
                        'id' => 'uo3onvtl8q6qk5m3emq83rekag@group.calendar.google.com',
                        'title' => 'mentoring',
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
                    <p>Este calndário mostra todos os eventos Mageia,
                        <a href="http://mageia.org/wiki/doku.php?id=meetings">reuniões de equipas</a>,
                        datas de planos de desenvolvimento
                        e possívelmente mais.</p>
                    <p>É público e está disponível para todos. Apenas a direcção, membros do conselho e líderes de equipas
                        tem permissão de escrita no calendário.</p>
                    <p>Para qualquer comentário, adição, alteração neste calendário, entre em contacto connosco através de:</p>
                    <ul>
                        <li>o seu líder de <a href="http://mageia.org/wiki/">equipa</a> ou representante,</li>
                        <li><a href="irc://irc.freenode.net/#mageia-dev">#mageia-dev</a> na rede Freenode,</li>
                        <li><a href="mailto:mageia-contact@mageia.org">mageia-contact@mageia.org</a> como último recurso.</li>
                    </ul>
                </div>
                <div class="para">
                    <h3>Ficheiros ICS</h3>
                    <p>Pode obter um acesso de leitura-apenas directamente destes ficheiros .ics:</p>
                    <ul>
                    <?php
                    $ical_tmpl = 'http://www.google.com/calendar/ical/%s/public/basic.ics';
                    foreach ($calendars as $c)
                    {
                        echo sprintf('<li><a href="%s">Mageia %s</a></li>',
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



