<?php
/**
*/

require_once 'langs.inc.php';

$sru = trim($_SERVER['REQUEST_URI']);
$sel = explode('/', $sru);
array_shift($sel);
$locale = array_shift($sel);
$page   = count($sel) > 0 ? implode('/', $sel) : null;

$list_langs = array();
$options = array();

foreach ($langs as $k => $v)
{
    $list_langs[] = sprintf('<a href="/%s"%s>%s</a>',
        $page != null ? implode('/', array($k, $page)) : $k,
        $k == $locale ? ' class="sel"' : '',
        $v);
}

// global nav
$nav_list = array(
    "/{$locale}/" => 'Mageia',
    "http://blog.mageia.org/{$locale}" => 'Blog',
    '/wiki' => 'Wiki &ndash; Join us!',
    "/{$locale}/faq/" => 'FAQ',
    "/{$locale}/#contact" => 'IRC, mailing-lists',
    "http://donate.mageia.org/{$locale}/" => 'Donations',
    "http://mageia.org/wiki/doku.php?id=press" => 'Press',
    "/{$locale}/about/values/" => 'Values',
    "/{$locale}/about/code-of-conduct/" => 'Code of Conduct'
);

$list_menu = array();
foreach ($nav_list as $k => $v)
{
    $list_menu[] = sprintf('<a href="%s"%s>%s</a>',
        $k,
        $k == $sru ? ' class="sel"' : '',
        $v);
}

echo sprintf('<div class="nav"><p class="loc">%s</p></div>', implode(' | ', $list_menu));

echo sprintf('<p class="loc">%s</p>', implode(' | ', $list_langs));
