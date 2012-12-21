<pre><?php
/**
*/

include_once '../lib/localeDetection.class.php';
include_once '../langs.inc.php';

echo 'Accept-Language: ', $_SERVER['HTTP_ACCEPT_LANGUAGE'], "\n\n";
echo "Relocate `community` with `en` as a default: ", relocate($langs, 'community', 'en', null, false), "\n";
