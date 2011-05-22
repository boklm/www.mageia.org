<?php

$locale = explode('/', $_SERVER['REQUEST_URI']);
$locale = $locale[1];

include 'contribute_locales.php';
if (!array_key_exists($locale, $_t)) {
            $locale = 'en';
}

$_t = $_t[$locale];
?>
