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

echo '<html><body><pre>Testing IP, country, continent',
    "\n------------------------------\n\n";

foreach ($ips as $label => $ip) {
    echo ' * ', $label, ': ', $ip, ' => ';
    echo geoip_country_code_by_name($ip), ', ';
    echo geoip_continent_code_by_name($ip), "\n";
}

echo '----</pre></body></html>';
