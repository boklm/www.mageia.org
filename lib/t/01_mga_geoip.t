<?php

require_once realpath(__DIR__ . '/../testmore.php');
require_once realpath(__DIR__ . '/../mga_geoip.php');

plan('no_plan');

diag('Testing mga_geoip_* functions against defined IP/locations.');

$ips = array(
    '2a01:e35:8a03:9990:223:dfff:fe7e:e7f0'
        => array('FR', 'EU'),

    '2a00:1450:8006::93'
        => array('IE', 'EU'),

    '173.194.67.99'
        => array('US', 'NA'),

    '46.33.75.17'
        => array('DE', 'EU')
);

foreach ($ips as $ip => $cc) {
    is($country = mga_geoip_country_by_ip($ip, false), $cc[0], 'country match for ' . $ip);
    is(mga_geoip_continent_by_country($country), $cc[1], 'continent match for ' . $ip);
}

