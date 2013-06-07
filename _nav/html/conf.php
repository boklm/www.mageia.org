<?php
/**
*/

/** Host running/serving the global nav. */
$nav_host = $_SERVER['HTTP_HOST'];

/** Host running main Web site www.m.o. */
$www_host = 'www.mageia.org';

/** Where precomputed nav templates are cached. */
$cache_path = 'var/tmp/cache';

// erk
if ($nav_host == 'www.mageia.org') {
    $cache_path = '../var/tmp/cache';
}

/** You may overload this config by defining APP_MODE env
 *  variable, and using the switch construct below.
*/
$mode = isset($_SERVER['APP_MODE']) ? $_SERVER['APP_MODE'] : null;

switch ($mode) {
case 'dev':
case 'dev-rda': $www_host = 'mageia:8888'; break;
// add your own case if needed.
case 'razvoj': $www_host = 'mag'; break;
}
