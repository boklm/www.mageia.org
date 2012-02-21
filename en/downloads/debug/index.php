<?php

$ips = array();

if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])
    && $str = $_SERVER['HTTP_X_FORWARDED_FOR'])
{
    $arr = explode(', ', $str);
    $ips['ip'] = $arr[0];
    $ips['gw'] = $_SERVER['REMOTE_ADDR'];
}
else
    $ips['ip'] = $_SERVER['REMOTE_ADDR'];

echo '<ul>';
foreach ($ips as $label => $ip) {
    echo sprintf('<li>%s is in %s, %s</li>',
        @geoip_country_code_by_name($ip),
        @geoip_continent_code_by_name($ip));
}

