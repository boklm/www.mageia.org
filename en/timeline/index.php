<?php

define('HLANG', true);
require '../../langs.php';

$_t = array(
    'page_h1' => 'Mageia Timeline',
    'page_title' => 'Mageia Timeline',
);

$events = array(
    '2010' => array(
        'September' => array(
            'Mageia starts as a <a href="/en/about/2010-sept-announcement.html">fork of Mandriva Linux</a>.',
            'Mageia.Org is registered in Paris, France.'
        ),
        'End of year' => array(
            'With an incredible response, first donations and discussions abound.',
            'Project gets structured, governance takes slowly shape (first board, teams).'
        )
    ),
    '2011' => array(
        'January' => 'Build system is ready to run for the first alpha ISOs.',
        'February' => 'First General Assembly during FOSDEM in Brussels, Belgium.',
        'June' => '<a href="/1/">Mageia 1</a> is released.',
    ),
    '2012' => array(
        'February' => 'Second General Assembly during FOSDEM in Brussels, Belgium.',
        'May' => array(
            '<a href="/2/">Mageia 2</a> is released.',
        )
    )
);

?>
<!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php _e('page_title')?></title>
    <link rel="stylesheet" href="/g/style/all.css">
    <style>
    .para { text-align: left; float: left; width: 250px; display: block; border-right: 1px solid #eef; border-bottom: 1px solid #eef; }
    hr { margin-top: 2em; }
    #tl0 {
        list-style: none;
        margin: 0; padding: 0;
    }
    .tliy { list-style: none; }
    .tliy h2 { border-bottom: 1px solid #ddd; }
    .tlim { list-style: none; padding-bottom: 0.8em;}
    .tlim h3 { color: #777; font-size: 130%; }
    .tlie { margin-left: 4em; }
    </style>
</head>
<body class="about">
    <?php echo $hsnav; ?>
    <h1 id="mgnavtitle"><?php _e('page_h1')?></h1>
    <div class="para" style="width: 800px;">
        <section>
            <ul class="hl" id="tl0"><?php
                $events = array_reverse($events, true);
                foreach ($events as $year => $dates):
                    $li = array();
                    $dates = array_reverse($dates, true);
                    foreach ($dates as $dt => $ev) {
                        if (!is_array($ev))
                            $ev = array($ev);

                        $s = array();
                        foreach ($ev as $evit) {
                            $s[] = sprintf('<li class="tlie">%s</li>', $evit);
                        }
                        $li[] = sprintf('<li class="tlim"><h3>%s</h3><ul class="hl">%s</ul></li>', $dt, implode($s));
                    }
                    echo sprintf('<li class="tliy"><h2>%s</h2><ul class="hl">%s</ul></li>', $year, implode($li));

                endforeach;
            ?></ul>
            
        </section>
    </div>
</body>
</html>