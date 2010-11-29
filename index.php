<?php
/**
*/

require_once 'langs.inc.php';

if (isset($_GET['flang']))
{
    $lang = array_key_exists($_GET['flang'], $langs) ? $_GET['flang'] : 'en';
    if (isset($_GET['furl']))
    {
        $url = substr_replace($_GET['furl'], $lang, 1, 2);
    }
    else
        $url = '/' . $lang . '/';

    header(sprintf('Location: %s', $url));
    die;
}

require_once 'localeDetection.class.php';

$locale = new ChooseLocale(array_keys($langs));

$locale->setDefaultLocale('en');

header(sprintf('Location: /%s/', $locale->getCompatibleLocale()));
die;