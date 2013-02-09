<?php
// definition

class NCache
{
    function __construct() { }

    /**
     * Factory.
     *
     * @param string $path where cache file store is located, relative to app path.
     * @param integer $timeout in seconds
     *
     * @return NCache
    */
    function build($path, $timeout = 3600)
    {
        $path = __DIR__ . '/' . $path;

        if (!is_dir($path))
            return null;

        if ($timeout < 60)
            $timeout = 60;

        $i           = new self;
        $i->_path    = $path;
        $i->_timeout = $timeout;

        return $i;
    }

    /**
     * Get value for $key.
     *
     * @param mixed $key
     *
     * @return mixed
    */
    function get($key = null)
    {
        if (is_null($key))
            return false;

        $filename = $this->_get_filename($key);

        if ($this->_is_valid_file($filename, $this->_timeout)) {
            return unserialize(file_get_contents($filename));
        }

        return null;
    }

    /**
     * Save $value under $key.
     *
     * @param mixed $key
     * @param mixed $value
    */
    function set($key, $value)
    {
        if (is_null($key))
            return false;

        $filename = $this->_get_filename($key);
        file_put_contents($filename, serialize($value));

        return true;
    }

    /**
     * Get cache file from key.
     *
     * @param mixed $key
     *
     * @return string
    */
    private function _get_filename($key)
    {
        $key  = hash('sha1', serialize($key));

        return $this->_path . '/' . $key . '.cache';
    }

    /**
     * Check that the cache file exists and has not expired.
     *
     * @param string $filename
     *
     * @return boolean
    */
    private function _is_valid_file($filename, $timeout)
    {
        if (!file_exists($filename)) {
            //error_log(sprintf('Could not find %s', $filename), 0);
            return false;
        }

        if (filemtime($filename) + $timeout < time()) {
            //error_log(sprintf('%s timestamp expired (timeout was %ds.).', $filename, $timeout));
            unlink($filename);
            return false;
        }

        //error_log(sprintf('Found %s', $filename));
        return true;
    }
}

class l10n
{
    public static $t;

    /**
     * Load langs/$lang.lang into global $_t array.
     *
     * @param string $lang
     *
     * @return void
    */
    function load($lang)
    {
        global $_t;
        $_t = array();

        if ($lang == 'en')
            return;

        $lang_file  = __DIR__ . '/langs/' . $lang . '.lang';
        $cache_file = __DIR__ . '/var/tmp/cache/nav_lang_' . $lang . '.php';
        $lang_ts    = filemtime($lang_file);

        if (file_exists($cache_file)) {
            include $cache_file;
            if ($_ts > $lang_ts)
                return;
        }

        if (file_exists($lang_file)) {

            $f = file($lang_file);

            foreach ($f as $k => $v) {

                if (substr($v, 0, 1) == ';'
                    && !empty($f[$k+1]))
                {
                    $_t[trim(substr($v, 1))] = trim($f[$k+1]);
                }
            }

            //
            $_t_data = var_export($_t, true);
            $cache   = <<<P
<?php
/**! Generated. Do not edit. */

// filemtime($lang_file)
\$_ts = $lang_ts;

// $lang strings
global \$_t;
\$_t = $_t_data;
P;
            file_put_contents($cache_file, $cache);
        }
    }

    /**
     * Get value for key $s in global array $_t.
     *
     * @param string $s
     *
     * @return string
    */
    function _t($s) {
        if (trim($s) == '')
            return '';

        global $_t;

        $_t[$s] = trim(str_replace(array('{ok}', '{OK}', '{Ok}', '{oK}'), '', $_t[$s]));
        return array_key_exists($s, $_t) ? $_t[$s] : $s;
    }
}

/**
 * Produce navigation HTML code.
 *
 * @param boolean $wrap = false should it be wrapped in a <header id="nav" /> element?
 * @param string  $lang = 'en'
 * @param string  $inject = null
 * @param string  $vhost = 'www.mageia.org'
 * @param object  $cache
 *
 * @return string HTML code
*/
function _mgnav_html($wrap = false, $lang = 'en', $inject = null, $vhost = 'www.mageia.org', $cache = null)
{
    $key = array($wrap, $lang, $inject, $vhost);

    if (!is_null($cache) && ($h = $cache->get($key))) {
        apache_note('navCacheHit', 1);
        return $h;
    }

    apache_note('navCacheHit', 0);

    $lang = _lang_check($lang);

    l10n::load($lang, $cache);

    $tn = array(
        array('mageia',     '//$S/$L/map/',           'Mageia',                  l10n::_t('Go to mageia.org site map.')),
        array('about',      '//$S/$L/about/',         l10n::_t('About&nbsp;us'), l10n::_t('Learn more about Mageia.')),
        array('downloads',  '//$S/$L/downloads/',     l10n::_t('Downloads'),     l10n::_t('Download Mageia ISO and updates.')),
        array('support',    '//$S/$L/support/',       l10n::_t('Support'),       l10n::_t('Get support from Mageia community.')),
        array('community',  '//$S/$L/community/',     l10n::_t('Community'),     l10n::_t('')),
        array('contribute', '//$S/$L/contribute/',    l10n::_t('Contribute'),    l10n::_t('You too can build Mageia with us!')),
        array('you',        '//identity.mageia.org/', l10n::_t('You'),           l10n::_t('Your Mageia online account.')),
        array('contact',    '//$S/$L/contact/',       l10n::_t('Contact'),       l10n::_t('Contact Us'))
    //    <search>
    );

    $s = array();
    foreach ($tn as $i) {
        $s[] = sprintf('<li><a href="%s" class="%s" title="%s">%s</a></li>',
            str_replace(
                array('$L', '$S'),
                array($lang, $vhost),
                $i[1]
            ),
            $i[0],
            $i[3],
            $i[2]
        );
    }

    if (!is_null($inject))
        $s[] = sprintf('<li>%s</li>', $inject);

    $s = implode($s);
    $h = sprintf('<!--googleoff: all--><nav id="mgnav"><ul id="nav">%s</ul></nav><!--googleon: all-->', $s);

    if ($wrap)
        $h = sprintf('<header id="hmgn">%s</header>', $h);

    if (!is_null($cache))
        $cache->set($key, $h);

    return $h;
}

/**
 * Returns CSS definition ready to be inserted into a HTML document.
 *
 * @return string
*/
function _mgnav_style()
{
    return '<style>' . file_get_contents(__DIR__ . '/css/source.css') . '</style>';
}

/**
 * Get the primary language subtag only.<p></p>
*/
function _lang_check($s = null)
{
    if (is_null($s)) {
        return 'en';
    }

    $supported = array(
        'cs',
        'de',
        'el', 'en', 'eo', 'es', 'et',
        'fi', 'fr',
        'id', 'it',
        'lv',
        'nb', 'nl',
        'pl', 'pt', 'pt-br',
        'ro', 'ru',
        'sl',
        'tr',
        'uk',
        'zh-cn', 'zh-tw'
    );

    if (in_array($s, $supported))
        return $s;

    $sub = explode('-', $s);
    $sub = strtolower($sub[0]);

    if (in_array($sub, $supported))
        return $sub;

    return 'en';
}
