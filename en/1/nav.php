<?php

$_nt = array(
    'en' => array('for-you' => 'For You', 'dl' => 'Download', 'next' => 'And Next?', 'notes' => 'Notes'),
    'fr' => array('for-you' => 'Pour Vous', 'dl' => 'Télécharger', 'next' => 'Et après&nbsp;?')
);

if (array_key_exists($locale, $_nt))
    $_nt = array_merge($_nt['en'], $_nt[$locale]);
else
    $_nt = $_nt['en'];

$nav = array(
    "/{$locale}/1/"         => '1',
    "/{$locale}/1/for-you/" => $_nt['for-you'],
    "/{$locale}/downloads/" => $_nt['dl'],
    "/{$locale}/1/next/"    => $_nt['next'],
    "/{$locale}/1/notes/"   => $_nt['notes']
);

$sru = trim($_SERVER['REQUEST_URI']);

$pnav = array();
foreach ($nav as $k => $v) {
    $pnav[] = sprintf('<a href="%s"%s>%s</a>',
        $k,
        $k == $sru ? ' class="sel"' : null,
        $v);
}
$pnav = implode(' | ', $pnav);

echo <<<S
<div class="para" style="border-bottom: 1px solid #ddd; background: rgba(200, 200, 200, 0.2); padding-bottom: 0;">
<p id="subnav">{$pnav}</p>
</div>
S;
