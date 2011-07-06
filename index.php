<?php
/**
 *
*/

require_once 'langs.inc.php';

// NOTE, this should go to the main controller in the next platform
// (catching all requests)
$domain     = 'mageia.org';
$www_domain = 'www.' . $domain;

if (G_VHOST == $domain) {
    // rewrite "//mageia.org/" to "//www.mageia.org/"
    header ('HTTP/1.1 301 Moved Permanently');
    header(sprintf('Location: http://%s%s', $www_domain, $_SERVER['REQUEST_URI']));
    die;
}
elseif (isset($_GET['fromtld'])) {
    // rewrite "//mageia.org/?fromtld=it" to "//www.mageia.org/it/"
    tld_redirect($_GET['fromtld'], $domains_lang, $www_domain);
}
elseif (G_VHOST != $www_domain) {
    // rewrite "//mageia.it/" to "//www.mageia.org/it/"
    domain_redirect($_SERVER['SERVER_NAME'], $domains_lang, $www_domain);
}

if (isset($_GET['langs'])) {
    die(show_langs($langs));
}

if (isset($_GET['flang']))
{
    $lang = array_key_exists($_GET['flang'], $langs) ? $_GET['flang'] : 'en';
    if (isset($_GET['furl']))
    {
        $url = explode('/', $_GET['furl']);
        array_shift($url);
        array_shift($url);
        $url = '/' . $lang . '/' . implode($url, '/');
        //$url = substr_replace($_GET['furl'], $lang, 1, 2);
    }
    else
        $url = '/' . $lang . '/';

    header(sprintf('Location: %s', $url));
    die;
}

relocate($langs);