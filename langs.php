<?php
/**
*/

$g_app_root = realpath(dirname(__FILE__));
define('G_APP_ROOT', $g_app_root);

$g_donate_amount = '8800,62&nbsp;&euro;';

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

// prevent 404 error on /{$locale}/ with missing translation
function locale_path($path)
{
	$pathtofile = "/home/projects/mageia/public_html";
        $loc = $_SERVER['REQUEST_URI'];
        $filename = "$pathtofile$loc$path";
        $url = "/en/$path";
        if (file_exists($filename))
        {
                $url = "$loc$path";
        }
        return $url;
}

// global nav
$nav_list = array(
    "/{$locale}/" => 'Mageia',
    "http://blog.mageia.org/{$locale}" => array(
        'el' => 'Ιστολόγιο',
        'en' => 'Blog',
        'et' => 'Ajaveeb',
        'tr' => 'Web Günlüğü',
        'ru' => 'Блог'
    ),
    //"/{$locale}/alpha" => 'Alpha',
    locale_path('alpha') => 'Alpha', 
    '/wiki/' => array(
        'en' => 'Wiki',
        'ru' => 'Вики'
    ),
    //"/{$locale}/faq" => array(
    locale_path('faq') => array(
        'en' => 'FAQ',
        'es' => 'Preguntas Frecuentes',
        'et' => 'KKK',
        'tr' => 'S.S.S.',
        'ro' => 'Întrebări frecvente'
    ),
    //"/{$locale}/donate" => array(
    locale_path('donate') => array(
    //"http://www.mageia.org/en/donate//{$locale}/" => array(
        'de' => 'Spenden',
        'el' => 'Δωρεές',
        'en' => 'Donations',
        'es' => 'Donaciones',
        'et' => 'Annetused',
        'fr' => 'Dons',
        'pl' => 'Dotacje',
        'pt' => 'Doações',
        'tr' => 'Bağışlar',
        'ro' => 'Donații',
        'ru' => 'Пожертвования'
    ),
    //
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
    //"/{$locale}/about/values" => array(
    locale_path('about/values') => array(
        'de' => 'Werte',
        'el' => 'Αξίες',
        'en' => 'Values',
        'es' => 'Valores',
        'et' => 'Väärtused',
        'fr' => 'Valeurs',
        'pl' => 'Wartości',
        'pt' => 'Valores',
        'tr' => 'Değerler',
        'ro' => 'Valori',
        'ru' => 'Цели'
    ),
    //"/{$locale}/about/code-of-conduct" => array(
    locale_path('about/code-of-conduct') => array(
        'de' => 'Verhaltenskodex',
        'el' => 'Κώδικας συμπεριφοράς',
        'en' => 'Code of Conduct',
        'es' => 'Código de Conducta',
        'et' => 'Käitumisjuhised',
        'fr' => 'Code de conduite',
        'pl' => 'Kodeks postępowania',
        'pt' => 'Código de Conduta',
        'tr' => 'Temel İlkeler',
        'ro' => 'Codul de conduită',
        'ru' => 'Кодекс поведения'
    ),
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
    )
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
