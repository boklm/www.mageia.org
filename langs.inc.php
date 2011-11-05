<?php
/**
*/

define('G_VHOST', $_SERVER['SERVER_NAME']);

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
    'pt-br' => 'Português do Brasil',
    'ro' => 'Română',
    'ru' => 'Русский',
    'sl' => 'Slovenščina',
    'tr' => 'Türkçe',
    'uk' => 'украї́нська мо́ва',
    'zh-cn' => '简体中文',
    'zh-tw' => '正體中文'
);

// TODO (rda) define fallback languages for each language
// for instance, pt-br could fallback on pt and pt on pt-br (but without
// a cycle) then on es, etc.
$i18n_fallback_rules = array(
    'pt-br' => 'pt',
    'pt'    => 'pt-br'
);

$domains_lang = array(
    'mageia.fr' => 'fr',
    'mageia.it' => 'it',
    'mageia.ro' => 'ro',
);

/**
 * Redirect to a localized path, depending on incoming TLD.
 * Only manages redirections to main home path.
 *
 * @param string  $tld
 * @param array   $domains_lang 
 * @param string  $vhost
 *
 * @return void
*/
function tld_redirect($tld, $domains_lang, $vhost)
{
    domain_redirect('mageia.' . $tld, $domains_lang, $vhost);
}

/**
 * Redirect to a localized path, depending on incoming full domain.
 * Only manages redirections to main home path.
 *
 * @param string  $host
 * @param array   $domains_lang 
 * @param string  $vhost
 *
 * @return void
*/
function domain_redirect($host, $domains_lang, $vhost)
{
    $host = str_replace('www.', '', $host);

    if (array_key_exists($host, $domains_lang)) {
        $path = $domains_lang[$host] . '/';
        header ('HTTP/1.1 301 Moved Permanently');
    } else {
        $path = '?langs';
    }
    header(sprintf('Location: %s://%s/%s', 'http', $vhost, $path));
    die;
}


/**
 * Redirect to a localized path, after browser Accept-Language prefs.
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
<p><a href="/">Mageia.org</a> is currently available in {$count} languages:</p>
<ul>
S;
    foreach ($langs as $k => $v) {
        $s .= sprintf('<li><a href="/%s/" hreflang="%s">%s</a></li>',
            $k, $k, $v);
    }
    echo $s, '</ul><hr />',
        '<p>If you would like to help improving this Web site or its translations, ',
        'check out our <a href="/wiki/doku.php?id=web">Web</a> and ',
        '<a href="/wiki/doku.php?id=i18n">localization</a> teams!</p>',
        '<p>Your browser Accept-Language is: ', $_SERVER['HTTP_ACCEPT_LANGUAGE'], '.</p>',
        '<hr /></body></html>';
}

/**
 * Class regrouping basic methods for i18n strings in their current forms.
 *
*/
class i18n
{
    /**
     * @param string $request_uri
     *
     * @return string
    */
    public static function get_language_from_url($request_uri)
    {
        $l = explode('/', $request_uri);
        return $l[1];
    }

    /**
     * Return language strings in $strings that match $lang,
     * and merge with pre-loaded strings matching $fallback_lang.
     *
     * @param array  $strings array('fr' => array(strings...), 'en' => array(...))
     * @param string $lang
     * @param string $fallback_lang
     *
     * @return array
    */
    public static function get_strings($strings, $lang, $fallback_rules = null)
    {
        $use_lang = self::get_fallback_language($lang, array_keys($strings), $fallback_rules);

        return array_merge($strings['en'], $strings[$use_lang]);
    }

    /**
     * Return a language we know we have support for, or a fallback language.
     *
     * Important note: this is supposed to be used only once in a row; do not
     * chain this method over itself as you may end up with an infinite loop
     * (depends on $fallback_rules contents).
     *
     * TODO (rda) implement this into an object, so we can check several langs
     * in a row for a same document, with several fallback hops, without a cycle.
     *
     * @param string $lang language we wish to use
     * @param array  $known_langs list of languages we support
     * @param mixed  $fallback_rules
     *
     * @return string
    */
    public static function get_fallback_language($lang, $known_langs, $fallback_rules = null)
    {
        $ret = 'en';

        if (in_array($lang, $known_langs)) {
            $ret = $lang;
        }
        else {
            if (is_string($fallback_rules)) {
                $ret = $fallback_rules;
            }
            elseif (is_array($fallback_rules)
                && array_key_exists($lang, $fallback_rules)) {

                $ret = $fallback_rules[$lang];
            }

            if (!in_array($ret, $known_langs))
                $ret = 'en';
        }

        return $ret;
    }
}
