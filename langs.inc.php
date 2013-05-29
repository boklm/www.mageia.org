<?php
/**
*/

define('G_VHOST', $_SERVER['SERVER_NAME']);

// languages for home
$langs = array(
    'ca' => 'Català',
    'cs' => 'Čeština',
    'de' => 'Deutsch',
    'el' => 'Ελληνικά',
    'en' => 'English',
    'eo' => 'Esperanto',
    'es' => 'Español',
    'et' => 'Eesti',
    'fi' => 'Suomeksi',
    'fr' => 'Français',
    'id' => 'Bahasa Indonesia',
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
    'uk' => 'Українська',
    'ur' => 'اردو',
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
 * Return the path.
 * Do not exit the process.
 *
 * @param array $langs list of languages
 * @param string $page optional path to which we want to redirect
 * @param string $default_locale
 * @param string $force_accept_language replace remote browser HTTP_ACCEPT_LANGUAGE request header
 * @param boolean $do_redirect
 *
 * @return string
*/
function relocate($langs, $page = '', $default_locale = 'en', $force_accept_language = null, $do_redirect = true)
{
    require_once 'localeDetection.class.php';

    $locale = new ChooseLocale(array_keys($langs), $force_accept_language);
    $locale->setDefaultLocale($default_locale);

    $relocate = sprintf('/%s/%s', $locale->getCompatibleLocale(), $page);
    $relocate = str_replace('//', '/', $relocate);

    if ('cli' != PHP_SAPI && do_redirect) {
        header('Location: ' . $relocate);
    }

    return $relocate;
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
        'check out our <a href="/langs/report.php">translation report page</a> ',
        '<a href="https://wiki.mageia.org/en/Web_team">Web</a> and ',
        '<a href="https://wiki.mageia.org/en/Internationalisation_Team_(i18n)">localization</a> teams!</p>',
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

    /**
     * Get a translated string to output.
     *
     * Use it when you need to capture the string to output.
     *
     * Examples:
     *
     * echo _t("Hello."), _t("How are you?");
     *
     *
     * @param string $s     string to localize
     * @param array  $opt   translated strings list
     * @param string $post  string suffix. Useful to prevent non-breaking lines.
     *
     * @return null|string
    */
    public static function _t($s = null, $opt = null, $post = ' ')
    {
        return self::_d($s, $opt) . $post;
    }

    /**
     * Lookup for translated string for $s
     * in global array $_t (yes, ugly)
     * OR in $opt param.
     *
     * $_t or $opt is the list of string for the current locale.
     *
     * Use it when you need to get the exact, char-specific translation text.
     *
     * Examples:
     *
     * _d('http://mageia.org/en/');
     * _d('http://blog.mageia.org/en/feed');
     *
     * @param string $s
     * @param array $opt
     *
     * @return string
     *
     * FIXME Yes, it's terribly wrong/evil to rely on an unknown global $_t.
     * Solution? rethink the whole i18n thing in an integrated one.
    */
    public static function _d($s = null, $opt = null)
    {
        if ($s == '')
            return null;

        if (!is_null($opt)) {
            $_t = $opt;
        } else {
            global $_t;
        }

        $ret = array_key_exists($s, $_t) ? $_t[$s] : $s;

        return trim(str_replace(array('{ok}', '{OK}', '{Ok}', '{oK}'), '', $ret));
    }

    /**
     * Output a localized string $s, with optional $args.
     *
     * Use it when you need to just output a string.
     *
     * Examples:
     *
     * _e("Hello");
     * _e("Hello %d %d", array(1, 2));
     *
     * @param string $s
     * @param array  $args
     *
     * @return null
    */
    public static function _e($s = null, $args = null)
    {
        if (is_array($args))
            echo vsprintf(_t($s), $args);
        else
            echo self::_t($s);
    }

    /**
     * Output a localized string $s, sprintf'ed with $args, HTML-wrapped in $tag.
     *
     * Use it when you need to wrap your text is HTML, and this is faster.
     *
     * Examples:
     *
     * _h("Hello");
     * _h("Hello %s", array("Alice"));
     * _h("Title", null, "h1");
     *
     * @param string $s string to echo
     * @param array  $args optional params to $s
     * @param string $tag optional tag to wrap $s into
     *
     * @return null
    */
    public static function _h($s, $args = null, $tag = 'p')
    {
        $s = self::_t($s);
        $s = is_array($args) ? vsprintf($s, $args) : $s;

        $close_tag = explode(' ', $tag);
        $close_tag = array_shift($close_tag);

        echo sprintf('<%s>%s</%s>', $tag, $s, $close_tag);
    }

    /**
     * Get all locales from given file.
     *
     * @param string $file
     *
     * @return array
    */
    public static function _lang_return($file)
    {
        $strings = array();

        if (file_exists($file)) {
            $f = file($file);

            foreach ($f as $k => $v) {

                $C = substr($v, 0, 1);
                if ($C === '#') continue;

                if ($C === ';' && !empty($f[$k+1])) {
                    $j = trim(substr($v, 1));
                    $j = str_replace(array("\'", "\""), array("'", '"'), $j);
                    $strings[$j] = trim($f[$k+1]);
                }
            }
        }

        return $strings;
    }

    /**
     * Load requested $locale, from $domain lang file, into global $_t array.
     *
     * @param string $locale
     * @param string $domain
     *
     * @return boolean
     *
     * @todo use i18n::get_fallback_language() or eq.
    */
    public static function _lang_load($locale, $domain)
    {
        if ($locale == 'en')
            return true;

        $lang_file = sprintf('%s/langs/%s/%s.%s.lang', G_APP_ROOT, $locale, $domain, $locale);

        if (file_exists($lang_file)) {

            global $_t;
            if (!isset($_t) || !is_array($_t))
                $_t = array();

            $_t = array_merge($_t, self::_lang_return($lang_file));

            return true;
        }

        return false;
    }

}

// shorthand helpers, to make legacy calls work.
function _t($s = null, $opt = null, $post = ' ') { return i18n::_t($s, $opt, $post); }
function _d($s = null, $opt = null)              { return i18n::_d($s, $opt); }
function _e($s = null, $args = null)             { return i18n::_e($s, $args); }
function _h($s = null, $args = null, $tag = 'p') { return i18n::_h($s, $args, $tag); }

function _lang_load($locale, $domain) { return i18n::_lang_load($locale, $domain); }


