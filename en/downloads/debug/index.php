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

$s = '';
foreach ($ips as $label => $ip) {
    $s .= sprintf('<li>%s is in %s, %s</li>',
        @geoip_country_code_by_name($ip),
        @geoip_continent_code_by_name($ip));
}

echo <<<S
<html><body>
<h1>Testing your IP, country, continent.</h1>
<ul>$s</ul>
<hr>
</body></html>
S;

