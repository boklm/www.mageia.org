<?php
/**
 * Lookup for _e(), _t() and _h() in source code and build a 
 *
 * PHP 5.3
 *
 * @license MIT
 * @author Romain d'Alverny, rdalverny, rda
 * @copyright 2012/05
 * @author Filip (small fixes and some added features)
*/

if (php_sapi_name() !== 'cli') {
    echo "CLI only.\n";
    exit(1);
}

if (version_compare(PHP_VERSION, '5.3.0') < 0) {
    echo "PHP 5.3 needed.\n";
    exit(1);
}

define('APP_ROOT', realpath(__DIR__ . '/..'));

$php_source = isset($argv[1]) ? $argv[1] : null;
$domain     = isset($argv[2]) ? $argv[2] : null;

if (is_null($php_source) || is_null($domain)) {
    echo <<<U
Usage:
    php tools/extract2lang.php path/to/source.php domain_name

    Example:
        php tools/extract2lang.php en/index.php index

    You can join multiple sources with apostrophe - single quote (') like this:
        'en/3/download_index.php en/for-pc/index.php en/for-server/index.php en/3/index.php en/3/nav.php'

U;
    exit(1);
}

echo "ohai!\n";

$cmd = sprintf('grep -HrnEi "_(e|t|h|d)\((.*)" %s', $php_source);
echo $cmd, "\n";
exec($cmd, $out);

$strings = array();
$f       = array();
$error   = 0;

foreach ($out as $str) {
    $arr     = explode(':', $str);
    $file    = array_shift($arr);
    $file    = str_replace(APP_ROOT, '', $file);
    $files[] = $file;
    $line    = array_shift($arr);
    $arr     = implode(':', $arr);
    $arr     = str_replace('\\\'', '_apostrophe_', $arr);

    if (preg_match_all('/\_(e|t|h|d)\(\'(.+)\'/imU', $arr, $reg)) {
        foreach ($reg[2] as $found) {
            $found = str_replace('_apostrophe_', '\'', $found);
            $strings[$domain][$found][] = $file . ' +' . $line;
        }
    }
    else {
        echo "\n\n!!!! Could not find string in $file, line $line: $str\n";
        echo "!!!! Please fix $file before using $domain.en.lang file!!!\n\n";
        $error = 2;
    }
}

foreach ($strings as $domain => $strs) {
    $f[]     = sprintf('# Generated by extract2lang.php on %s', date('c'));
    $f[]     = sprintf('# Domain %s', $domain);
    $f[]     = '# include translation strings from:';
    $files   = array_unique($files);
    foreach ($files as $source) {
        $f[] = sprintf('# %s', $source);
    }

    foreach ($strs as $str => $info) {
        $str = str_replace(array("\'", "\""), array("'", '"'), $str);
        $f[] = '';
        $f[] = sprintf('# %s', $info[0]);
        $f[] = ';' . $str;
        $f[] = $str;
        $f[] = '';
    }
    $f = implode("\n", $f);
    $dest = sprintf('%s/langs/%s/%s.%s.lang', APP_ROOT, 'en', $domain, 'en');
    $dir = dirname($dest);

    if (!is_dir($dir)) {
        echo "making $dir\n";
        mkdir($dir, 0755, true);
    }
    echo sprintf("saved %d strings in %s\n", count($strs), $dest);
    if (FALSE === file_put_contents($dest, $f))
        echo "Failed to write.\n";
}
echo "Done. kthxbye.\n";
exit($error);
