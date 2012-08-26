<?php
/**
*/

if (isset($_ENV['APP_MODE']) && $_ENV['APP_MODE'] !== 'prod') {
    ini_set('error_reporting', E_ALL);
    ini_set('show_errors', true);
    ini_set('display_errors', true);
} else {
    ini_set('error_reporting', FALSE);
    ini_set('show_errors', FALSE);
    ini_set('display_errors', FALSE);
    ini_set('log_errors', FALSE);
}

if ($_SERVER['HTTP_HOST'] == 'www-test.mageia.org') {
    ini_set('error_reporting', E_ALL&~E_DEPRECATED);
    ini_set('show_errors', true);
    ini_set('display_errors', true);
    ini_set('log_errors', true);
}

$g_app_root = realpath(dirname(__FILE__));
define('G_APP_ROOT', $g_app_root);

$g_donate_amount = '--';
$g_amount_remain = 'EUR&nbsp;10,244.46';

$G_coord_assos = <<<T
  Assocation Mageia.Org
  8B rue de la Terrasse
  75017 Paris
  France
T;
$G_coord_assos_bank = <<<T
  CIC Paris Villiers
  14 avenue de Villiers
  75017 Paris
  France

  IBAN: FR76 3006 6108 7600 0200 6450 123
  BIC:  CMCIFRPP
T;

require_once 'langs.inc.php';

$sru = trim($_SERVER['REQUEST_URI']);
$sel = explode('/', $sru);
array_shift($sel);
if (!isset($locale))
    $locale = array_shift($sel);

$page       = count($sel) > 0 ? implode('/', $sel) : null;
$list_langs = array();
$options    = array();

foreach ($langs as $k => $v) {
    $list_langs[] = sprintf('<a href="/%s"%s>%s</a>',
        $page != null ? implode('/', array($k, $page)) : $k,
        $k == $locale ? ' class="sel"' : '',
        $v);

    $options[] = sprintf('<option value="%s"%s>%s</option>',
        $k,
        $k == $locale ? ' selected="selected"' : '',
        $v);
}

$options = implode($options);
$langsForm = <<<H
<form id="lang_form" dir="ltr" method="get" action="/">
    <input type="hidden" name="furl" value="{$_SERVER['REQUEST_URI']}" />
    <select id="flang" name="flang" dir="ltr" onchange="this.form.submit()">
        {$options}
    </select>
    <noscript><div><input type="submit" id="lang_submit" value="Hop!" /></div></noscript>
</form>
H;

include ('_nav/lib.php');
$hsnav = _mgnav_style() . _mgnav_html(true, $locale, $langsForm);
$hsfoot = '';

if (!defined('HLANG'))
    echo $hsnav;
