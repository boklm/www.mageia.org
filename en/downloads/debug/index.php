<?php

$ips = array();
$functions = array(
    'geoip_country_code_by_name',
    'geoip_continent_code_by_name'
);

if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])
    && $str = $_SERVER['HTTP_X_FORWARDED_FOR'])
{
    $arr = explode(', ', $str);
    $ips['ip'] = $arr[0];
    $ips['gw'] = $_SERVER['REMOTE_ADDR'];
}
else
    $ips['ip'] = $_SERVER['REMOTE_ADDR'];

echo '<html><body>';

echo '<h3>Testing functions:</h3>';
echo '<ul>';
foreach ($functions as $f) {
    echo sprintf('<li>%s: %s available</li>',
        $f, function_exists($f) ? 'is' : 'is not');
}
echo '</ul>';

echo '<h3>Testing IP, country, continent</h3>';
foreach ($ips as $label => $ip) {
    echo ' * ', $label, ': ', $ip, ' => ';
    echo geoip_country_code_by_name($ip), ', ';
    echo geoip_continent_code_by_name($ip), "\n";
}

echo '----</pre></body></html>';
