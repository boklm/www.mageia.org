<?php
/**
*/

require_once 'langs.inc.php';
require_once 'localeDetection.class.php';

$locale = new ChooseLocale(array_keys($langs));

$locale->setDefaultLocale('en');

header(sprintf('Location: /%s/', $locale->getCompatibleLocale()));