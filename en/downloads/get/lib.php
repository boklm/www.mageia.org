<?php
/**
*/

$countries = array(
    'AU' => 'Australia',
    'BE' => 'Belgique',
    'BR' => 'Brasil',
    'BY' => 'Беларусь', // Belarus
    'CA' => 'Canada',
    'CH' => 'Switzerland',
    'CN' => 'China',
    'CZ' => 'Czechia',
    'DE' => 'Deutschland',
    'ES' => 'España',
    'FR' => 'France',
    'GR' => 'Greece',
    'GT' => 'Guatemala',
    'ID' => 'Indonesia',
    'IT' => 'Italia',
    'JP' => 'Japan',
    'NC' => 'Nouvelle-Calédonie',
    'NL' => 'Nederlands',
    'PL' => 'Polska',
    'RU' => 'Россия',
    'SE' => 'Sverige',
    'TW' => 'Taiwan',
    'UK' => 'the UK',
    'US' => 'the USA',
);

function get($s) {
    return isset($_GET[$s]) ? trim($_GET[$s]) : null;
}

class NoProductFoundError extends Exception {}
class NoMirrorFoundError extends Exception {}

/**
 * TODO use aliases, so that downloads asking for alpha3 get redirected to beta1 for instance? (on migration)
*/
function get_info_for_product($product)
{
    $defs = parse_ini_file('definitions.ini', true);

    if (array_key_exists($product, $defs)) {
        return $defs[$product];
    }

    throw new NoProductFoundError;
}

/**
 * Return mirrors for $file.
 * First mirror returned is the preferred one for auto redirection.
 *
 * @param string $file id of the file to download/find a mirror for
 * @param string $locale hint for selecting a mirror
 * @param string $country hint for selecting a mirror
 *
 * @return array
 * mirror(product):
 *   name
 *   host
 *   country
 *   city
 *   speed
 *   link
*/
function get_mirrors_for($file,
    $locale = null, $country = null)
{
    include '../../../lib/Downloads.php';

    $mirrors = Downloads::get_all_mirrors();
    $wsd     = new Downloads();
    $one     = $wsd->prepare_download(true, $country);

    return array($one, $mirrors);
}