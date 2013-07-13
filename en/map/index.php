<?php

define('HLANG', true);
require '../../langs.php';
_lang_load($locale, 'map');

$map = array(
    'about' => array(
        't' => _t('About Mageia'),
        'l' => '/{L}/about/',
        'i' => array(
            array('t' => _t('Mission'),    'l' => '/{L}/about/'),
            array('t' => _t('Projects'),   'l' => ''),
            array('t' => _t('News'),       'l' => 'http://blog.mageia.org/'),
            array('t' => _t('Contacts'),   'l' => '/{L}/contact/'),
            array('t' => _t('Supporters'), 'l' => '/{L}/thank-you/'),
            array('t' => _t('Governance'), 'l' => 'https://wiki.mageia.org/en/Org',
                'i' => array(
                    array('t' => _t('Board'),   'l' => 'https://wiki.mageia.org/en/Org_Board'),
                    array('t' => _t('Council'), 'l' => 'https://wiki.mageia.org/en/Org_Council'),
                    array('t' => _t('Teams'),   'l' => 'https://wiki.mageia.org/en/Special:Search?search=team')
                ),
            ),
            array('t' => _t('Values'),          'l' => '/{L}/about/values/'),
            array('t' => _t('Code of conduct'), 'l' => '/{L}/about/code-of-conduct/'),
            array('t' => 'Mageia.Org',          'l' => '/{L}/about/',
                'i' => array(
                    array('t' => _t('Constitution'), 'l' => '/{L}/about/constitution/'),
                    array('t' => _t('Members'),      'l' => ''),
                    array('t' => _t('Reports'),      'l' => '/{L}/about/reports/')
                )
            ),
            array('t' => _t('Timeline'), 'l' => '/{L}/timeline/'),
            array('t' => _t('Financial Infos'), 'l' => '//treasurer.mageia.org/'),
        )
    ),
    'downloads' => array(
        't' => _t('Downloads'),
        'l' => '/{L}/downloads/',
        'i' => array(
            array('t' => _t('3 (May 2013)'),       'l' => '/{L}/3/'),
            array('t' => _t('2 (May 2012)'),       'l' => '/{L}/2/'),
            array('t' => _t('1 (June 2011)'),      'l' => '/{L}/1/'),
            array('t' => _t('Download mirrors'),   'l' => 'http://mirrors.mageia.org/')
        )
    ),
    'support' => array(
        't' => _t('Support'),
        'l' => '/{L}/support/',
        'i' => array(
            array('t' => _t('Software updates'),     'l' => '//advisories.mageia.org/'), // /updates
            array('t' => _t('Product lifecycle'),    'l' => '/{L}/support/'), // /lifecycle
            array('t' => _t('Official Documentation'),'l' => 'http://doc.mageia.org'), // documentation
            array('t' => _t('Community support'),    'l' => '/{L}/support'),
            array('t' => _t('Professional support'), 'l' => 'https://wiki.mageia.org/en/Commercial_vendors'),
            array('t' => _t('Compatible hardware'),  'l' => '/{L}/support/'), // /hardware
            array('t' => _t('FAQ'),                  'l' => 'https://wiki.mageia.org/en/FAQ'), // /faq
        )
    ),
    'community' => array(
        't' => _t('Community'),
        'l' => '/{L}/community/',
        'i' => array(
            array('t' => _t('Planet'),        'l' => _d('http://planet.mageia.org/en/')),
            array('t' => _t('Blog'),          'l' => _d('http://blog.mageia.org/en/')),
            array('t' => _t('Calendar'),      'l' => '/{L}/calendar/'),
            array('t' => _t('Mailing-lists'), 'l' => 'https://wiki.mageia.org/en/Mailing_lists'),
            array('t' => _t('Mailing-lists'), 'l' => 'http://ml.mageia.org/'),
            array('t' => 'IRC',               'l' => 'http://wiki.mageia.org/en/IRC'),
            array('t' => _t('Forums'),            'l' => _d('http://forums.mageia.org/')),
            array('t' => 'Wiki',              'l' => 'http://wiki.mageia.org/'),
            array('t' => 'Bugzilla',          'l' => 'http://bugs.mageia.org/'),
            array('t' => 'People',            'l' => 'http://people.mageia.org/'),
            
        )
    ),
    'contribute' => array(
        't' => _t('Contribute'),
        'l' => '/{L}/contribute/',
        'i' => array(
            array('t' => _t('Why contribute?'),    'l' => '/{L}/contribute/#why'),
            array('t' => _t('How to contribute?'), 'l' => '/{L}/contribute/#how'),
            array('t' => _t('Donate'),             'l' => '/{L}/donate/'),
        )
    ),
    'you' => array(
        't' => _t('About you'),
        'l' => 'http://identity.mageia.org/',
        'i' => array(
            array('t' => _t('Your Mageia id'), 'l' => 'http://identity.mageia.org/'),
            array('t' => _t('Privacy policy'), 'l' => '/{L}/about/policies/privacy/')
        )
    )
);
$t_li1 = '<li class="map-b"><h2 id="%s"><a href="%s">%s</a></h2> <ul class="map-bl">%s</ul></li>';
$t_li2 = '<li><a href="%s">%s</a> %s</li> ';
$t_li3 = '<li><a href="%s">%s</a></li> ';

$sMap = '<ul id="map">';
foreach ($map as $k => $v) {
    
    $l = '';
    foreach ($v['i'] as $w) {
        $sub = null;
        if (array_key_exists('i', $w) && is_array($w['i'])) {
            $sub = '<ul>';
            foreach ($w['i'] as $x) {
                $sub .= sprintf($t_li3,
                    str_replace('{L}', $locale, $x['l']), $x['t']);
            }
            $sub .= '</ul>';
        }
        $l .= sprintf($t_li2,
            str_replace('{L}', $locale, $w['l']), $w['t'], $sub);
    }
    $sMap .= sprintf($t_li1,
        $k, str_replace('{L}', $locale, $v['l']), $v['t'], $l);
}
$sMap .= '</ul>';

?><!DOCTYPE html>
<html dir="ltr" lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php echo _e('Mageia.org site map') ?></title>
    <meta name="keywords" content="<?php _e('mageia, web site, map, sitemap'); ?>">
    <meta name="robots" content="noindex,nofollow,nosnippet">
    <link rel="canonical" href="/<?php echo $locale; ?>/map/">
    <link rel="stylesheet" href="map.css">
    <?php include '../../analytics.php'; ?>
</head>
<body class="map">
    <?php echo $hsnav; ?>
    <h1 id="mgnavtitle"><?php _e('Site Map'); ?></h1>
    <div class="doc">
        <?php echo $sMap; ?>
        <div style="clear: both;"></div>
        <hr>
        <!--
        TODO
        <h2 id="search"><?php _e('You still can not find what you were looking for? Try searching mageia.org:')?></h2>
        <p><form><input type="search"><input type="submit"></form></p>
        -->
    </div>
</body>
</html>
