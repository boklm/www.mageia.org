<?php
// definition

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
    function load($lang) {
        $lang_file = __DIR__ . '/langs/' . $lang . '.lang';
        if (file_exists($lang_file)) {
            global $_t;
            $f = file($lang_file);
            foreach ($f as $k => $v) {
                if (substr($v, 0, 1) == ';' && !empty($f[$k+1])) {
                    $_t[trim(substr($v, 1))] = trim($f[$k+1]);
                }
            }
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

        return array_key_exists($s, $_t) ? $_t[$s] : $s;
    }
}

/**
 * Produce navigation HTML code.
 *
 * @param boolean $wrap = false should it be wrapped in a <header id="nav" /> element?
 * @param string  $lang = 'en'
 * @param string  $inject = null
 * @param string  $vhost = '//www.mageia.org'
 *
 * @return string HTML code
*/
function _mgnav_html($wrap = false, $lang = 'en', $inject = null, $vhost = '//www.mageia.org')
{
    $lang = _lang_simple($lang);

    l10n::load($lang);

    $tn = array(
        array('mageia',     '$S/$L/map/',             'Mageia',                       l10n::_t('Go to mageia.org site map.')),
        array('about',      '$S/$L/about/',           l10n::_t('About&nbsp;us', $_t), l10n::_t('Learn more about Mageia.')),
        array('downloads',  '$S/$L/downloads/',       l10n::_t('Downloads', $_t),     l10n::_t('Download Mageia ISO and updates.')),
        array('support',    '$S/$L/support/',         l10n::_t('Support', $_t),       l10n::_t('Get support from Mageia community.')),
        array('community',  '$S/$L/community/',       l10n::_t('Community', $_t),     l10n::_t('')),
        array('contribute', '$S/$L/contribute/',      l10n::_t('Contribute', $_t),    l10n::_t('You too can build Mageia with us!')),
        array('you',        '//identity.mageia.org/', l10n::_t('You', $_t),           l10n::_t('Your Mageia online account.'))
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
    $h = sprintf('<nav id="mgnav"><ul id="nav">%s</ul></nav>', $s);

    if ($wrap)
        $h = sprintf('<header id="hmgn">%s</header>', $h);

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
function _lang_simple($s = null)
{
    if (!is_null($s)) {
        $s = explode('-', $s);
        $s = strtolower($s[0]);
    }
    return $s;
}
