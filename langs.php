<?php
/**
*/

$g_app_root = realpath(dirname(__FILE__));
define('G_APP_ROOT', $g_app_root);

$g_donate_amount = 'EUR&nbsp;12 181.52';
$g_amount_remain = 'EUR&nbsp;6 941.86';

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

  IBAN: FR76 3006 6108 7600 0200 6450 123
  BIC:  CMCIFRPP
T;

require_once 'langs.inc.php';

$sru = trim($_SERVER['REQUEST_URI']);
$sel = explode('/', $sru);
array_shift($sel);
if (!isset($locale))
    $locale = array_shift($sel);

$page   = count($sel) > 0 ? implode('/', $sel) : null;

$list_langs = array();
$options    = array();

foreach ($langs as $k => $v) {
    $list_langs[] = sprintf('<a href="/%s"%s>%s</a>',
        $page != null ? implode('/', array($k, $page)) : $k,
        $k == $locale ? ' class="sel"' : '',
        $v);

    $options[] = sprintf('<option value="%s"%s>%s</option>',
        $k,
        $k == $locale ? ' selected="selected"' : '',
        $v);
}

// prevent 404 error on /{$locale}/ with missing translation
function locale_path($path)
{
    $pathtofile = "/home/projects/mageia/public_html";
    $loc        = $_SERVER['REQUEST_URI'];
    $filename   = "$pathtofile$loc$path";
    $url        = "/en/$path";
    if (file_exists($filename)) {
        $url = "$loc$path";
    }
    return $url;
}

$blog_link = 'http://blog.mageia.org/';
if (in_array($locale, array('de', 'el', 'en', 'es', 'fr', 'it', 'nl', 'pl', 'pt', 'ro', 'ru', 'tr')))
    $blog_link .= $locale . '/';

$forums_link = 'http://forums.mageia.org/';
// TODO pt, zh-tw, el
if (in_array($locale, array('fr', 'de', 'es', 'pt-br')))
    $forums_link .= $locale . '/';

// global nav
$nav_list = array(
    "/{$locale}/" => 'Mageia',
    "/{$locale}/1/" => '1',
    $blog_link => array(
        'el' => 'Ιστολόγιο',
        'en' => 'Blog',
        'et' => 'Ajaveeb',
        //'fr' => 'Actus',
        'pt' => 'Blogue',
        'pt-br' => 'Blog',
        'tr' => 'Web Günlüğü',
        'ru' => 'Блог'
    ),
    //"/downloads/" => array(
    "/{$locale}/downloads/" => array(
        'de' => 'Herunterladen',
        'el' => 'Λήψεις',
        'en' => 'Downloads',
        'es' => 'Descargas',
        'et' => 'Allalaadimine',
        'fr' => 'Téléchargements',
        'it' => 'Scarica',
        'pt' => 'Transferências',
        'pt-br' => 'Downloads',
        'ro' => 'Descărcați',
        'ru' => 'Загрузить',
        'zh-tw' => '下載'
    ),
    '/support/' => array(
        'de' => 'Unterstützung',
        'el' => 'Υποστήριξη',
        'en' => 'Support',
        'es' => 'Soporte',
        'fr' => 'Assistance',
        'it' => 'Supporto',
        'pt' => 'Suporte',
        'pt-br' => 'Suporte',
        'ro' => 'Suport'
    ),
    /*
    '/community/' => array(
        'en' => 'Community',
        'fr' => 'Communauté'
    ),
    */
    $forums_link => array(
        'el' => 'Φόρουμ',
        'en' => 'Forum',
        'es' => 'Foro',
        'pt' => 'Fórum',
        'pt-br' => 'Forum'
    ),
    '/contribute/' => array(
        'de' => 'Mitwirken',
        'el' => 'Συνεισφέρετε',
        'en' => 'Contribute',
        'es' => 'Contribuir',
        'fr' => 'Contribuer',
        'it' => 'Contribuire',
        'pt' => 'Contribuir',
        'pt-br' => 'Contribuir',
        'ro' => 'Contribuiți'
    ),
    '/wiki/' => 'Wiki',
    'https://bugs.mageia.org/' => 'Bugzilla',
    /*
    '/en/calendar/' => array(
        'de' => 'Kalender',
        'el' => 'Ημερολόγιο',
        'en' => 'Calendar',
        'es' => 'Calendario',
        'et' => 'Kalender',
        'fr' => 'Calendrier',
        'pl' => 'Kalendarz',
        'pt' => 'Calendário',
        'tr' => 'Takvim',
        'ro' => 'Calendar',
        'ru' => 'Календарь'
    ),
    */
    /*
    "http://mageia.org/wiki/doku.php?id=press" => array(
        'de' => 'Presse',
        'el' => 'Τύπος',
        'en' => 'Press',
        'es' => 'Prensa',
        'et' => 'Ajakirjandus',
        'fr' => 'Presse',
        'pl' => 'Prasa o nas ',
        'ro' => 'Presă',
        'ru' => 'Пресса',
        'tr' => 'Basın'
    ),
    */
    "/{$locale}/donate/" => array(
    //locale_path('donate') => array(
    //"http://www.mageia.org/en/donate//{$locale}/" => array(
        'de' => 'Spenden',
        'el' => 'Δωρεές',
        'en' => 'Donations',
        'es' => 'Donaciones',
        'et' => 'Annetused',
        'fr' => 'Dons',
        'it' => 'Donazioni',
        'pl' => 'Dotacje',
        'pt' => 'Doações',
        'pt-br' => 'Doações',
        'tr' => 'Bağışlar',
        'ro' => 'Donații',
        'ru' => 'Пожертвования'
    ),
    "/{$locale}/about/" => array(
        'de' => 'Über',
        'el' => 'Σχετικά',
        'en' => 'About',
        'es' => 'Acerca de',
        'fr' => 'À propos',
        'it' => 'A proposito di',
        'pt' => 'Acerca',
        'pt-br' => 'Acerca',
        'ro' => 'Despre noi'
    ),
);

$list_menu = array();
foreach ($nav_list as $k => $v)
{
    if (is_array($v))
        $title = array_key_exists($locale, $v) ? $v[$locale] : $v['en'];
    else
        $title = $v;

    $accessKey = null;
    if ($title == 'Mageia')
        $accessKey = ' accesskey="1"';

    $list_menu[] = sprintf('<a href="%s"%s%s>%s</a>',
        $k,
        $k == $sru ? ' class="sel"' : '',
        $accessKey,
        $title);
}

$hsnav = sprintf('<div class="nav"><!--googleoff: all--><div class="nav2"><p class="loc">%s</p>', implode(' | ', $list_menu));

$options = implode($options);
$hsnav .= <<<H
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

//$hsnav .= sprintf('<div class="nav"><!--googleoff: all--><div class="nav2"><p class="loc">%s</p></div></div>', implode(' | ', $list_menu));

if (!defined('HLANG'))
    echo $hsnav;

/*
echo sprintf('<p class="loc">%s</p>', implode(' | ', $list_langs));
*/
