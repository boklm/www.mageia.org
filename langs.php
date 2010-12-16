<?php
/**
*/

$g_app_root = realpath(dirname(__FILE__));
define('G_APP_ROOT', $g_app_root);

$G_coord_assos = <<<T
    Assocation Mageia.Org
    8B rue de la Terrasse
    75017 Paris
    France

T;
$G_coord_assos_bank = <<<T
    CIC Paris Villiers
    14 avenue de Villiers
    75017 Paris
    France


    IBAN: FR7630066108760002006450123
    BIC:  CMCIFRPP
    RIB:  30066 10876 00020064501 23

T;

require_once 'langs.inc.php';

$sru = trim($_SERVER['REQUEST_URI']);
$sel = explode('/', $sru);
array_shift($sel);
$locale = array_shift($sel);
$page   = count($sel) > 0 ? implode('/', $sel) : null;

$list_langs = array();
$options = array();

foreach ($langs as $k => $v)
{
    $list_langs[] = sprintf('<a href="/%s"%s>%s</a>',
        $page != null ? implode('/', array($k, $page)) : $k,
        $k == $locale ? ' class="sel"' : '',
        $v);

    $options[] = sprintf('<option value="%s"%s>%s</option>',
        $k,
        $k == $locale ? ' selected="selected"' : '',
        $v);
}

// global nav
$nav_list = array(
    "/{$locale}/" => 'Mageia',
    "http://blog.mageia.org/{$locale}" => array(
        'el' => 'Ιστολόγιο',
        'en' => 'Blog',
        'tr' => 'Web Günlüğü'
    ),
    '/wiki' => 'Wiki',
    "/{$locale}/faq/" => array(
        'en' => 'FAQ',
        'es' => 'Preguntas Frecuentes',
        'tr' => 'S.S.S.',
        'ro' => 'Întrebări frecvente'
    ),
    //"/{$locale}/donate/"
    "http://donate.mageia.org/{$locale}/" => array(
        'el' => 'Δωρεές',
        'en' => 'Donations',
        'es' => 'Donaciones',
        'fr' => 'Dons',
        'tr' => 'Bağışlar',
        'ro' => 'Donații'
    ),
    "http://mageia.org/wiki/doku.php?id=press" => array(
        'el' => 'Τύπος',
        'en' => 'Press',
        'es' => 'Prensa',
        'fr' => 'Presse',
        'ro' => 'Presă',
        'tr' => 'Basın'
    ),
    "/{$locale}/about/values/" => array(
        'el' => 'Αξίες',
        'en' => 'Values',
        'es' => 'Valores',
        'fr' => 'Valeurs',
        'tr' => 'Değerler',
        'ro' => 'Valori'
    ),
    "/{$locale}/about/code-of-conduct/" => array(
        'el' => 'Κώδικας συμπεριφοράς',
        'en' => 'Code of Conduct',
        'es' => 'Código de Conducta',
        'fr' => 'Code de conduite',
        'tr' => 'Temel İlkeler',
        'ro' => 'Codul de conduită'
    )
);

$list_menu = array();
foreach ($nav_list as $k => $v)
{
    if (is_array($v))
        $title = array_key_exists($locale, $v) ? $v[$locale] : $v['en'];
    else
        $title = $v;

    $list_menu[] = sprintf('<a href="%s"%s>%s</a>',
        $k,
        $k == $sru ? ' class="sel"' : '',
        $title);
}

echo sprintf('<div class="nav"><!--googleoff: all--><div class="nav2"><p class="loc">%s</p>', implode(' | ', $list_menu));

$options = implode($options);
echo <<<H
<form id="lang_form" dir="ltr" method="get" action="/">
    <!--<label for="flang">Autres langues&nbsp;:</label>-->
    <input type="hidden" name="furl" value="{$_SERVER['REQUEST_URI']}" />
    <select id="flang" name="flang" dir="ltr" onchange="this.form.submit()">
        {$options}
    </select>
    <noscript><div><input type="submit" id="lang_submit" value="Hop!" /></div></noscript>
</form>
</div><!--googleon: all--></div>
H;
/*
echo sprintf('<p class="loc">%s</p>', implode(' | ', $list_langs));
*/