<?php

// languages for home
$langs = array(
    'cs' => 'Čeština',
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
    'pt' => 'Português',
    'ro' => 'Română',
    'ru' => 'Русский',
    'tr' => 'Türkçe',
    'sl' => 'Slovenščina',
    'zh-cn' => '简体中文',
    'zh-tw' => '正體中文'
);

/**
 * Redirect to a localized path.
 *
 * @param array $langs list of languages
 * @param string $page optional path to which we want to redirect
 * @param string $default_locale
 *
 * @return void
*/
function relocate($langs, $page = '', $default_locale = 'en')
{
    require_once 'localeDetection.class.php';

    $locale = new ChooseLocale(array_keys($langs));

    $locale->setDefaultLocale($default_locale);

    header(sprintf('Location: /%s/%s',
        $locale->getCompatibleLocale(),
        $page
    ));
    die;    
}

/**
*/
function show_langs($langs)
{
    header('Content-Type: text/html; charset=utf-8');
    $count = count($langs);
    $s = <<<S
<!DOCTYPE html>
<html lang="en">
<head>
    <charset="utf-8">
    <meta name="robots" content="noindex,nosnippet">
    <title>Mageia</title>
</head>
<body>
<p><a href="/">Mageia.org</a> is available in {$count} languages:</p>
<ul>
S;
    foreach ($langs as $k => $v) {
        $s .= sprintf('<li><a href="/%s/" hreflang="%s">%s</a></li>',
            $k, $k, $v);
    }
    echo $s, '</ul><hr /></body></html>';
}