<?php
/**
*/

/** Below variables are defined after the document variables. */

/** URL of the document calling the service. */
$url  = isset($_GET['u']) ? trim($_GET['u']) : null;

/** html[lang] of the doc. */
$lang = isset($_GET['l']) ? trim($_GET['l']) : null;

/** body[class] of the doc. */
$body = isset($_GET['b']) ? trim($_GET['b']) : null;

/** meta[name=context] */
$context = isset($_GET['c']) ? trim($_GET['c']) : null;

/** wrap the returned HTML in <header id="hmgn" />? */
$wrap = isset($_GET['w']) ? true : false;

include '../lib.php';

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Content-Type: text/html;charset=utf-8');
header(sprintf('Expires: %s', gmdate('r', strtotime('+1 day'))));
echo _mgnav_html($wrap, $lang);