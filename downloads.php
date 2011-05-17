<?php
/**
*/

$locale = explode('/', $_SERVER['REQUEST_URI']);
$locale = $locale[1];

include 'downloads_locales.php';

if (!array_key_exists($locale, $_t))
    $locale = 'en';

$_t = $_t[$locale];

$prods = parse_ini_file('downloads.ini', true);
$countries = array(
    'BR' => 'Brasil',
    'CH' => 'Switzerland',
    'CN' => 'China',
    'CZ' => 'Czechia',
    'DE' => 'Deutschland',
    'FR' => 'France',
    'GR' => 'Greece',
    'NC' => 'Nouvelle-Calédonie',
    'NL' => 'Nederlands',
    'TW' => 'Taiwan',
    'UK' => 'the UK',
    'US' => 'the USA',
);

$tmpl = <<<T
<tr%s>
<td class="name">%s</td>
<td class="lang">%s</td>
<td class="size">%s</td>
<td class="pop"><span class="pop_%s">%s</span></td>
<td class="link"><a href="%s" rel="nofollow">%s</a></td>
<td class="link"><a href="%s" rel="nofollow">%s</a></td>
</tr>
T;

$s = '';
$glob = array_shift($prods);
$popularity = array_shift($prods);
$i = 0;
foreach ($prods as $k => $p) {
    $iso = sprintf('%s-%s', $glob['prefix'], $k);

    $dl_link = sprintf('/%s/downloads/dl.php?product=%s', $locale, $iso);
    $bt_link = isset($p['torrent']) ?
        sprintf('/%s/downloads/dl.php?product=%s&torrent=1', $locale, $iso) :
        null;

    $pop = array_key_exists($k, $popularity) ? $popularity[$k] : 0;

    $s .= sprintf($tmpl,
        '', //($i == 0) ? ' class="reco"' : '',
        $p['name'], $_t[$p['lang']], $p['size'],
        $pop, $pop,
        $dl_link, $_t['download'],
        $bt_link,
        !is_null($bt_link) ? $_t['download'] : ''
    );

    $i++;
}

$dl_table = <<<T
<table class="dlt2">
    <thead>
        <tr>
            <th>{$_t['flavour']}</th>
            <th>{$_t['language']}</th>
            <th class="size">{$_t['size']}</th>
            <th>Popularity</th>
            <th>{$_t['link']}</th>
            <th>BitTorrent</th>
        </tr>
    </thead>
    <tbody>
    {$s}
    </tbody>
</table>
<p class="dlinfo">{$_t['all_languages']}</p>
<p class="dlinfo">{$_t['limited_languages']}</p>
<p class="dlinfo">{$_t['euro_languages']}</p>
<p class="dlinfo">Not sure of what ISO to download? This may still be a bit verbose,
but you may want to <a href="http://www.mageia.org/wiki/doku.php?id=mageia_installation_media">read
this article detailing our different install media</a>.</p>
T;



