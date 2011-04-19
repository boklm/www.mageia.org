<?php
/**
*/

if (isset($_GET['l'])) {
    $locale = $_GET['l'];
}
else {
    $path = explode('/', $_SERVER['REQUEST_URI']);
    $locale = $path[1];
    if (strlen($locale) > 5)
        $locale = 'en';
}

$locales = array(
    'en' => array('template' => 'Mageia 1 <span>%s</span> %d %s', 'minus' => 'minus', 'day' => 'day', 'days' => 'days'),
    'fr' => array('template' => 'Mageia 1 <span>%s</span> %d %s', 'minus' => 'moins', 'day' => 'jour', 'days' => 'jours')
);
if (!array_key_exists($locale, $locales))
    $locale = 'en';

$l = $locales[$locale];

// Mageia 1 on June 1st, 2011
$release_ts = strtotime('2011/06/01 12:00:00');
$now_ts = time();
$diff = $release_ts - $now_ts;
$s = '';

if ($diff < 0) {
    // todo (rda)
}
else {
    $diff = floor($diff / 3600 / 24);
    $s = sprintf('<h2>Mageia 1 <span>%s</span>%d %s</h2>',
        $l['minus'],
        $diff,
        $diff > 1 ? $l['days'] : $l['day']);
}

echo <<<S
<!-- from http://mageia.org/release_counter.php?l={your_locale} -->
<style>
div#mgacount { font-family: "Century Gothic", "Trebuchet MS", Arial, sans-serif; color: #fff;
    background: #3494D3;
    background: -webkit-gradient(linear, left top, left bottom, from(#3494D3), color-stop(60%, #3494D3), to(#2383C2));
    background: -moz-linear-gradient(top, #ffffff 50%, #f0f0f0);
    background: -webkit-linear-gradient(top, #ffffff 50%, #f0f0f0);
    background: linear-gradient(top, #ffffff 50%, #f0f0f0);
    
    
    margin: 0; padding: 0;
    text-align: center; }
#mgacount h2 { padding: 0.6em; font-size: 220%; color: #fff; font-weight: normal; margin-bottom: 0; }
#mgacount h2 span { font-size: 35%; vertical-align: 50%; margin: 0 1em; }
</style>
<div id="mgacount">{$s}</div>
S;
