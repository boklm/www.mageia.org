<?php

$nav = array(
    "/{$locale}/1/" => '1',
    "/{$locale}/1/use/" => 'Users',
    "/{$locale}/1/build/" => 'Developers',
    "/{$locale}/1/profit/" => 'Businesses', 
    "/{$locale}/downloads/" => 'Download',
    "/{$locale}/1/notes/" => 'Notes',
    "/{$locale}/1/next/" => 'And next?'
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
