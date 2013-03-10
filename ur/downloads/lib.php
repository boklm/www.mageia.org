<?php
/**
*/

$prods = parse_ini_file('downloads.ini', true);

$countries = array(
    'AU' => 'Australia',
    'BE' => 'Belgique',
    'BR' => 'Brasil',
    'BY' => 'Беларусь', // Belarus
    'CA' => 'Canada',
    'CH' => 'Switzerland',
    'CN' => 'China',
    'CZ' => 'Czechia',
    'DE' => 'Deutschland',
    'ES' => 'España',
    'FR' => 'France',
    'GR' => 'Greece',
    'GT' => 'Guatemala',
    'ID' => 'Indonesia',
    'IT' => 'Italia',
    'JP' => 'Japan',
    'NC' => 'Nouvelle-Calédonie',
    'NL' => 'Nederlands',
    'PL' => 'Polska',
    'RU' => 'Россия',
    'SE' => 'Sverige',
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

$prods2 = array();
foreach ($prods as $k => $p) {
    if (isset($p['hidden'])) {
        continue;
    }
    $prods2[$p['flavour']][$k] = $p;
}

$s1 = null;
$s2 = null;
$s3 = null;
foreach ($prods2 as $flavour => $prods3) {

    $flavour = sprintf('<td rowspan="%d">%s</td>', count($prods3), $flavour);
    foreach ($prods3 as $k => $p) {
        $iso = sprintf('%s-%s', $glob['prefix'], $k);

        $dl_link = sprintf('/%s/downloads/get/?q=%s', $locale, $iso);
        $bt_link = isset($p['torrent']) ?
            sprintf('/%s/downloads/get/?q=%s&torrent=1', $locale, $iso) :
            null;

        $pop = array_key_exists($k, $popularity) ? $popularity[$k] : 0;

        $s = sprintf($tmpl,
            '',
            $p['name'], $_t[$p['lang']], $p['size'],
            $pop, $pop,
            $dl_link, $_t['download'],
            $bt_link,
            !is_null($bt_link) ? $_t['download'] : ''
        );
        $flavour = null;
        $i++;
        
        if ($p['flavour'] == 'LiveCD 32-bit')
            $s2 .= $s;
        elseif ($p['flavour'] == 'DVD'
            || $p['flavour'] == 'CD')
            $s1 .= $s;
        else
            $s3 .= $s;
    }
}

$table_tmpl = <<<T
<h3>%s</h3>
%s
<table class="dlt2">
    <thead>
        <tr>
            <th style="width: 12em;">{$_t['flavour']}</th>
            <th>{$_t['language']}</th>
            <th class="size">{$_t['size']}</th>
            <th>{$_t['popularity']}</th>
            <th>{$_t['link']}</th>
            <th>BitTorrent</th>
        </tr>
    </thead>
    <tbody>%s</tbody>
</table>
T;

$dl_table
    = sprintf($table_tmpl, $_t['for_test_live'], null, $s2)
    . "<p class='dlinfo'>{$_t['def-Europa set 1']}</p>
    <p class='dlinfo'>{$_t['def-Europa set 2']}</p>
    <p class='dlinfo'>{$_t['def-Asia set']}</p>
    <p class='dlinfo'>{$_t['def-Africa/India set']}</p><br>"

    . '<hr>'
    . sprintf($table_tmpl,
        $_t['for_full_install'],
        '<p class="dlinfo warn">' . $_t['warn-free'] . '</p>', $s1)
    . "<p class='dlinfo'>{$_t['all_languages']}</p>
    <p class='dlinfo'>{$_t['limited_languages']}</p><br>"
    . '<hr>'
    . sprintf($table_tmpl, $_t['for_network'], '', $s3);

$dl_table .= <<<T
<br>
<hr>
<p class="dlinfo">{$_t['not_sure_what_iso']}</p>
T;


