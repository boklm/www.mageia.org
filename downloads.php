<?php
/**
*/

$locale = explode('/', $_SERVER['REQUEST_URI']);
$locale = $locale[1];

include 'downloads_locales.php';

$locale = 'fr';

$_t = $_t[$locale];

$prods = parse_ini_file('downloads.ini', true);
$countries = array(
    'CH' => 'Switzerland',
    'CN' => 'China',
    'CZ' => 'Czechia',
    'DE' => 'Deutschland (Germany)',
    'FR' => 'France',
    'GR' => 'Greece',
    'NC' => 'New Caledonia',
    'NL' => 'Nederlands',
    'UK' => 'the UK',
    'US' => 'the USA',
);

$tmpl = <<<T
<tr%s>
<td class="name">%s</td>
<td class="lang">%s</td>
<td class="size">%s</td>
<td class="link"><a href="%s" rel="nofollow">%s</a></td>

</tr>
T;
//<td class="pop"><span class="pop_%s">%s</span></td>
//<td class="link"><a href="%s" rel="nofollow">%s</a></td>

$s = '';
$glob = array_shift($prods);
$i = 0;
foreach ($prods as $k => $p) {

    $iso = sprintf('%s-%s', $glob['prefix'], $k);

    $dl_link = sprintf('/en/downloads/dl.php?product=%s', $iso);
    $bt_link = sprintf('/en/downloads/dl.php?product=%s&torrent=1', $iso);
    $pop = rand(0,5);
    $s .= sprintf($tmpl,
        '', //($i == 0) ? ' class="reco"' : '',
        $p['name'], $p['lang'], $p['size'],
        //$pop, $pop,
        $dl_link, $_t['download'],
        $bt_link, $_t['download']);

    $i++;
}

$dl_table = <<<T
<table class="dlt2">
    <thead>
        <tr>
            <th>{$_t['flavour']}</th>
            <th>{$_t['language']}</th>
            <th class="size">{$_t['size']}</th>
            <th>{$_t['link']}</th>
        </tr>
    </thead>
    <tbody>
    {$s}
    </tbody>
</table>
<p class="dlinfo">All supported languages are: Deutsch, English, español, français, italiano, português.</p>
<p class="dlinfo">Europa set of languages is: Deutsch, English, español, français, italiano, português.
    More languages will be made available for the stable release.</p>
T;


