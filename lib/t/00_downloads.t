<?php


require realpath(__DIR__ . '/../testmore.php');
require realpath(__DIR__ . '/../Downloads.php');

plan('no_plan');

diag('Testing prepare_download(). Countries/continents should match.');

$wsd = new Downloads();

$countries = array(
    'FR' => array('FR', 'EU'),
    'DE' => array('DE', 'EU'),
    'AU' => array('AU', 'OC')
);

foreach ($countries as $k => $v) {
    $one = $wsd->prepare_download(true, $k);

    //is($one['country'], $v[0], "countries match");
    is($one['continent'], $v[1], "continents match");
}

diag('Testing get_mirror(). Note, this depends on the actual mirrors list.');

$ccs = array(
    array('FR', 'EU'),
    array('DE', 'EU'),
    array('CN', 'AS')
);

foreach ($ccs as $cc) {
    $mir = $wsd->get_mirror($cc[0], $cc[1]);

    //is($mir['country'], $cc[0], 'country match');
    is($mir['continent'], $cc[1], 'continents match');
}

