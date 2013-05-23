<?php

$nav = array( 
    "/{$locale}/3/"          => _t('Mageia&nbsp;3'),
    "/{$locale}/downloads/"  => _t('Download'),
    "/{$locale}/for-pc/"     => _t('For PC'),
    "/{$locale}/for-server/" => _t('For server'),
);

$sru = trim($_SERVER['REQUEST_URI']);

$pnav = array();
foreach ($nav as $k => $v) {
    $pnav[] = sprintf('<li><a href="%s"%s>%s</a></li>',
        $k,
        $k == $sru ? ' class="sel"' : null,
        $v);
}
$pnav = implode($pnav);

echo <<<S
<div id="mgnavsub"><ul id="mgnavsubl">{$pnav}</ul></div>
S;
