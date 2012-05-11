<?php
/**
*/

// note, we use geographical country names
$countries = array(
    'AU' => 'Australia',
    'BE' => 'Belgique',
    'BR' => 'Brasil',
    'BY' => 'Беларусь', // Belarus
    'CA' => 'Canada',
    'CH' => 'Switzerland',
    'CN' => '中国', // China
    'CZ' => 'Česko', // Czechia
    'DE' => 'Deutschland',
    'ES' => 'España',
    'FR' => 'France',
    'GR' => 'Ελλάδα', // Greece
    'GT' => 'Guatemala',
    'ID' => 'Indonesia',
    'IT' => 'Italia',
    'JP' => '日本国', // Japan
    'NC' => 'Nouvelle-Calédonie',
    'NL' => 'Nederlands',
    'PL' => 'Polska',
    'RU' => 'Россия',
    'SE' => 'Sverige',
    'TW' => '臺灣', // Taiwan
    'UK' => 'the UK',
    'US' => 'the USA',
);

/**
 * Rewrite city name in the local official language.
 * @param string
 * @return string
*/
function rewrite_city($name)
{
    $cities = array(
        'HsinChu'   => '新竹市', // .tw
        'Yonezawa'  => '米沢市', // .jp
        'Beijing'   => '北京', // .cn
        'Moscow'    => 'Москва', // .ru
        'Minsk'     => 'Мінск', // .by
        'Heraklion' => 'Ηράκλειο', // .gr
        'Prague'    => 'Praha', // .cz
    );
    if (array_key_exists($name, $cities))
        return $cities[$name];

    return $name;
}

function get($s) {
    return isset($_GET[$s]) ? trim($_GET[$s]) : null;
}

class NoProductFoundError extends Exception {}
class NoMirrorFoundError extends Exception {}

/**
 * TODO use aliases, so that downloads asking for alpha3 get redirected to beta1 for instance? (on migration)
*/
function get_info_for_product($product, $def_file = null)
{
    $def_file = is_null($def_file) ? 'definitions.ini' : $def_file;

    $defs = parse_ini_file($def_file, true);

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
    //include '../../../lib/Downloads.php';

    $mirrors = Downloads::get_all_mirrors();
    $wsd     = new Downloads();
    $one     = $wsd->prepare_download(true, $country);

    return array($one, $mirrors);
}

/**
 * Simplifies things.
 *
 * @param array $product, _one_ product definition array, as returned from the definitions.ini
 * @param boolean $torrent_preferred do we prefer to get a torrent, if available?
 *
 * @return string
*/
function get_download_link($product, $torrent_preferred = false)
{
    if ($torrent_preferred === true
        && isset($product['torrent'])
        && strlen($product['torrent']) > 0) {

        $path = $product['torrent'];
    } else {
        $path = $product['path'] . '/' . $product['file'];
    }

    return '$MIRROR/' . $path;
}