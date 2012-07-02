<?php
/**
 * Migrate PHP array to .lang files.
 *
 * PHP 5.3
 *
 * @license MIT
 * @author Romain d'Alverny, rdalverny, rda
 * @copyright 2012/05
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
$var        = isset($argv[2]) ? $argv[2] : null;
$domain     = isset($argv[3]) ? $argv[3] : null;

if (is_null($php_source) || is_null($var) || is_null($domain)) {
    echo <<<U
Usage:
    pa2lang.php path/to/source.php var_name domain_name


U;
    exit(1);
}

echo "ohai!\n";

$dest = sprintf('%s/langs/{LOC}/%s.{LOC}.lang', APP_ROOT, $domain);

$php_source = realpath(APP_ROOT . '/' . $php_source);
if (is_null($php_source)) {
    echo "$php_source is not found. kthxbye.\n";
    exit(1);
}

echo "Loading ", $php_source, " looking for \$$var\n";

include $php_source;

if (!isset($$var)) {
    echo "$var is not set. kthxbye\n";
    exit(1);
}

echo sprintf("Found %d locales here: %s.\n",
    count($$var), implode(', ', array_keys($$var)));

$files = array();

foreach ($$var as $k => $v) {

    echo sprintf("> %s has %d strings.", $k, count($v));

    $f = array();
    $f[] = sprintf('# Generated by pa2lang.php on %s', date('c'));
    $f[] = sprintf('# from %s $%s', $php_source, $var);

    foreach ($v as $s0 => $s1) {
        $s0 = str_replace("\n", ' ', $s0);
        
        if (is_array($s1)) {
            echo "\nWe have an array for string $k:'$s0':\n";
            foreach ($s1 as $sv)
                echo " * ", $sv, "\n";

            echo "\nThis can't be inserted into this .lang file. Fix this upstream and come back.\n\n";
            exit(1);
        }
        $s1 = str_replace("\n", ' ', $s1);

        $f[] = '';
        $f[] = ';' . $s0;
        $f[] = $s1;
        $f[] = "\n";
    }

    echo " ok\n";
    $files[$k] = implode("\n", $f);
}

echo "Saving those into ...\n";
foreach ($files as $k => $data) {
    $file = str_replace('{LOC}', $k, $dest);
//    file_put_contents($file, $data);
}

echo "Done.\n";
exit(0);