<?php
/**
 * mageia.org global nav bar.
 *
 * PHP version 5.4
 *
 * @category Mageia
 * @package  Mageia\Web\nav
 * @author   rda <rda@mageia.org>
 * @link     http://nav.mageia.org/
 *
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU GPL v2+
 *
 * This program is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License aspublished by the
 * Free Software Foundation; either version 2 of the License, or (at your
 * option) any later version.
*/

$t0 = microtime();

/** Below variables are defined after the document variables. */

/** URL of the document calling the service. */
$url  = isset($_GET['u']) ? trim($_GET['u']) : null;

/** html[lang] of the doc. */
$lang = isset($_GET['l']) ? trim($_GET['l']) : null;
if ($lang == 'undefined' ||
    $lang == '') {

    $lang = 'en';
}

/** body[class] of the doc. */
$body = isset($_GET['b']) ? trim($_GET['b']) : null;

/** meta[name=context] */
$context = isset($_GET['c']) ? trim($_GET['c']) : null;

/** wrap the returned HTML in <header id="hmgn" />? */
$wrap = isset($_GET['w']) ? true : false;

require 'conf.php';
include '../lib.php';

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Content-Type: text/html;charset=utf-8');
header(sprintf('Expires: %s', gmdate('r', strtotime('+1 day'))));

echo _mgnav_html($wrap, $lang, null, $www_host, NCache::build($cache_path));

apache_note('navMakeTime', number_format(microtime() - $t0, 6));