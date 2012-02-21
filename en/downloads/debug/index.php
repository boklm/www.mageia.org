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

echo '<h3>IP addresses</h3>';
print_r($ips);

echo '<h3>testing geoip PHP functions:</h3>';
echo '<ul>';
foreach ($functions as $f) {
    echo sprintf('<li>%s: %s available</li>',
        $f, function_exists($f) ? 'is' : 'is not');
}
echo '</ul>';

if (function_exists('geoip_country_code_by_name')) {

    echo '<h3>using geoip PHP module</h3>', "\n";
    echo 'DB version: ', geoip_database_info();
    echo '<ul>';
    foreach ($ips as $label => $ip) {
        echo '<li>', $label, ': ', $ip, ' => ';
        echo geoip_country_code_by_name($ip), ', ';
        echo geoip_continent_code_by_name($ip), ', ';
        echo geoip_record_by_name($ip), ', ';
        echo geoip_id_by_name($ip), ', '; // GEOIP_UNKNOWN_SPEED GEOIP_DIALUP_SPEED GEOIP_CABLEDSL_SPEED GEOIP_CORPORATE_SPEED
        echo geoip_isp_by_name($ip), ', ';
        echo geoip_org_by_name($ip), ', ';
        echo implode(', ', geoip_record_by_name($ip));
        echo '</li>';
    }
    echo '</ul>';
}
echo '<h3>using mod_geoip</h3>';
echo 'Country: ', apache_note("GEOIP_COUNTRY_CODE"), '<br>';
echo 'Country name: ', apache_note("GEOIP_COUNTRY_NAME"), '<br>';

echo '<h3>using mga wrapper around MaxMind library</h3>';
require realpath(__DIR__ . '/../../../lib/mga_geoip.php');

echo '<ul>';
foreach ($ips as $label => $ip) {
    echo '<li>', $label, ': ', $ip, ' => ';
    $country = mga_geoip_country_by_ip($ip);
    echo $country, ', ';
    $C = mga_geoip_continent_by_country($country);
    echo $C, '</li>';
}
echo '</ul>';


echo '<hr></body></html>';
