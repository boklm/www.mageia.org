<?php
/**
*/

// languages for home
$langs = array(
    'de' => 'Deutsch',
    'el' => 'Ελληνικά',
    'en' => 'English',
    'es' => 'Español',
    'et' => 'Eesti',
    'fi' => 'Suomeksi',
    'fr' => 'Français',
    'it' => 'Italiano',
    'lv' => 'Latviešu',
    'nb' => 'Bokmål',
    'nl' => 'Nederlands',
    'pl' => 'Polski',
    'pt-br' => 'Português do Brasil',
    'ru' => 'Русский',
    'tr' => 'Türkçe',
    'sl' => 'Slovenščina',
    'zh-cn' => '简体中文'
);

$sru = trim($_SERVER['REQUEST_URI']);
$sel = explode('/', $sru);
array_shift($sel);
$locale = array_shift($sel);
$page   = count($sel) > 0 ? implode('/', $sel) : null;

$list_langs = array();
foreach ($langs as $k => $v)
    $list_langs[] = sprintf('<a href="/%s"%s>%s</a>',
        $page != null ? implode('/', array($k, $page)) : $k,
        $k == $locale ? ' class="sel"' : '',
        $v);

// global nav
$nav_list = array(
    "/{$locale}/" => 'Mageia',
    "http://blog.mageia.org/{$locale}" => 'Blog',
    '/wiki' => 'Wiki &ndash; Join us!',
    "/{$locale}/faq/" => 'FAQ',
    "/{$locale}/#contact" => 'IRC, mailing-lists',
    "http://donate.mageia.org/{$locale}/" => 'Donations',
    "http://mageia.org/wiki/doku.php?id=press" => 'Press',
    "/{$locale}/about/values/" => 'Values'
);

$list_menu = array();
foreach ($nav_list as $k => $v)
    $list_menu[] = sprintf('<a href="%s"%s>%s</a>',
        $k,
        $k == $sru ? ' class="sel"' : '',
        $v);

echo sprintf('<div class="nav"><p class="loc">%s</p></div>', implode(' | ', $list_menu));

echo sprintf('<p class="loc">%s</p>', implode(' | ', $list_langs));
