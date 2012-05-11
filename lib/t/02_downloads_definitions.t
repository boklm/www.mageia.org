<?php

require realpath(__DIR__ . '/../testmore.php');
require realpath(__DIR__ . '/../../en/downloads/get/lib.php');
require realpath(__DIR__ . '/../Downloads.php');

plan('no_plan');

diag('Testing functions');

$mirrors = get_mirrors_for('dummy', 'de', 'DE');


$testProd = array(
    'file' => 'file',
    'path' => 'path',
    'torrent' => 'torrent/path.torrent'
);

is('$MIRROR/path/file', get_download_link($testProd));


diag('Testing downloads definitions.');


$ini_file = realpath(__DIR__ . '/../../en/downloads/get/definitions.ini');
$defs     = parse_ini_file($ini_file, true);

$keysRequired  = array('path', 'file', 'name', 'size');
$keysPreferred = array('sha1', 'md5');

foreach ($defs as $prodKey => $values) {
    diag(sprintf('Testing config for %s', $prodKey));
    foreach ($keysRequired as $k)
        ok($values[$k], 'has ' . $k);

    foreach ($keysPreferred as $k) {
        if (!array_key_exists($k, $values)) {
            diag(sprintf('Beware, missing %s!', $k));
        }
    }

    is(sprintf('$MIRROR/%s/%s', $values['path'], $values['file']), get_download_link($values), 'download link ok');
}

