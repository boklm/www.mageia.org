<?php

$nav = array(
    "/{$locale}/2/"          => _t('Mageia 2'),
    "/{$locale}/2/download_index.php"  => _t('Download'),
    "/{$locale}/2/for-pc/"     => _t('For PC'),
    "/{$locale}/2/for-server/" => _t('For server'),
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
