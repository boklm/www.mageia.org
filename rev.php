<?php
/**
 * Place this at the public root of your system and adapt $app_root
 * so it relates to the app branch root.
 *
 * Used for a continuous integration prototype, on various hosts.
 *
 * PHP version 5
 *
 * @license BSD-2-Clause
 * @author  Romain d'Alverny <rda at mageia.org>
*/

$app_root = __DIR__;

$vars = array(
    'app'     => $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'],
    'svn'     => get_svn_info($app_root),
    'status'  => get_status($app_root),
);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($vars);

//---

/**
 * TODO Return app status (tests, config, other?)
 *
 * @param string $app_root
 *
 * @return string
*/
function get_status($app_root)
{
    return 'OK';
}

/**
 * Return basic Subversion status info. See $keys array.
 *
 * @param string $app_root
 *
 * @return array
*/
function get_svn_info($app_root)
{
    exec(escapeshellcmd(sprintf('LC_ALL=C %s info %s', exec('which svn'), escapeshellarg($app_root))),
        $out, $ret);

    $vars = array();
    $keys = array(
        'URL',
        'Revision',
        'Last Changed Author',
        'Last Changed Rev',
        'Last Changed Date'
    );
    foreach ($out as $l) {
        $l = explode(':', trim($l));
        $k = trim(array_shift($l));
        if (in_array($k, $keys))
            $vars[strtolower(str_replace(' ', '_', $k))] = trim(implode(':', $l));
    }

    // remove scheme & user; keep it?
    $u = $vars['url'];
    $u = parse_url($u);
    $vars['url'] = sprintf('%s%s', $u['host'], $u['path']);

    return $vars;
}
