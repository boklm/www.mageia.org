<?php
/**
*/

$g_app_root = realpath(dirname(__FILE__));
define('G_APP_ROOT', $g_app_root);

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

    $options[] = sprintf('<option value="%s"%s>%s</option>',
        $k,
        $k == $locale ? ' selected="selected"' : '',
        $v);
}

// global nav
$nav_list = array(
    "/{$locale}/" => 'Mageia',
    "http://blog.mageia.org/{$locale}" => 'Blog',
    '/wiki' => 'Wiki',
    "/{$locale}/faq/" => 'FAQ',
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

echo sprintf('<div class="nav"><div class="nav2"><p class="loc">%s</p>', implode(' | ', $list_menu));

$options = implode($options);
echo <<<H
<form id="lang_form" dir="ltr" method="get" action="/">
    <!--<label for="flang">Autres langues&nbsp;:</label>-->
    <input type="hidden" name="furl" value="{$_SERVER['REQUEST_URI']}" />
    <select id="flang" name="flang" dir="ltr" onchange="this.form.submit()">
        {$options}
    </select>
    <noscript><div><input type="submit" id="lang_submit" value="Hop!" /></div></noscript>
</form>
</div></div>
H;
/*
echo sprintf('<p class="loc">%s</p>', implode(' | ', $list_langs));
*/