<?php
// definition

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
    if (!function_exists('_t')) {
        function _t($s = null, $opt = null) {
            if (!is_null($opt))
                $_t = $opt;
            else {
                global $_t;
            }
            return ($s == '' ? '-EMPTY-STRING-' : (array_key_exists($s, $_t) ? $_t[$s] : $s));
        }
    }
    $_t = array(
        'en' => array(),
        'fr' => array(
            'About&nbsp;us' => 'À&nbsp;propos',
            'Downloads'     => 'Téléchargements',
            'Support'       => 'Aide',
            'Community'     => 'Communauté',
            'Contribute'    => 'Contribuer',
            'You'           => 'Vous'
        ),
        'de' => array(
            'About&nbsp;us' => 'Über',
            'Downloads'     => 'Herunterladen',
            'Support'       => 'Unterstützung',
            'Community'     => 'Gemeinshaft',
            'Contribute'    => 'Mitwirken',
            'You'           => 'You'
        ),
        'el' => array(
            'About&nbsp;us' => 'Σχετικά',
            'Downloads'     => 'Λήψεις',
            'Support'       => 'Υποστήριξη',
            'Community'     => 'Communauté',
            'Contribute'    => 'Συνεισφέρετε',
            'You'           => 'You'
        ),
        'es' => array(
            'About&nbsp;us' => 'Acerca de',
            'Downloads'     => 'Descargas',
            'Support'       => 'Soporte',
            'Community'     => 'Comunidad',
            'Contribute'    => 'Contribuir',
            'You'           => 'Yo'
        ),
        'et' => array(
            'About&nbsp;us' => 'About',
            'Downloads'     => 'Allalaadimine',
            'Support'       => 'Support',
            'Community'     => 'Community',
            'Contribute'    => 'Contribuer',
            'You'           => 'You'
        ),
        'it' => array(
            'About&nbsp;us' => 'A proposito di',
            'Downloads'     => 'Scarica',
            'Support'       => 'Supporto',
            'Community'     => 'Comunità',
            'Contribute'    => 'Contribuire',
            'You'           => 'You'
        ),
        'pt' => array(
            'About&nbsp;us' => 'Acerca',
            'Downloads'     => 'Transferências',
            'Support'       => 'Suporte',
            'Community'     => 'Comunidade',
            'Contribute'    => 'Contribuir',
            'You'           => 'You'
        ),
        'ro' => array(
            'About&nbsp;us' => 'Despre noi',
            'Downloads'     => 'Descărcați',
            'Support'       => 'Suport',
            'Community'     => 'Community',
            'Contribute'    => 'Contribuiți',
            'You'           => 'You'
        ),
        'tr' => array(
            'About&nbsp;us' => 'Hakkında',
            'Downloads'     => 'İndirmeler',
            'Support'       => 'Destek',
            'Community'     => 'Community',
            'Contribute'    => 'Katkıda Bulunun',
            'You'           => 'You'
        ),
        'ru' => array(
            'Downloads' => 'Загрузить'
        )
    );

    $lang = array_key_exists($lang, $_t) ? $lang : 'en';
    $_t   = $_t[$lang];
    $tn   = array(
        array('mageia',     '$S/$L/map/',             'Mageia'),
        array('about',      '$S/$L/about/',           _t('About&nbsp;us', $_t)),
        array('downloads',  '$S/$L/downloads/',       _t('Downloads', $_t)),
        array('support',    '$S/$L/support/',         _t('Support', $_t)),
        array('community',  '$S/$L/community/',       _t('Community', $_t)),
        array('contribute', '$S/$L/contribute/',      _t('Contribute', $_t)),
        array('you',        '//identity.mageia.org/', _t('You', $_t))
    //    <search>
    );

    $s = array();
    foreach ($tn as $i) {
        $s[] = sprintf('<li><a href="%s" class="%s">%s</a></li>',
            str_replace(
                array('$L', '$S'),
                array($lang, $vhost),
                $i[1]
            ),
            $i[0],
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
