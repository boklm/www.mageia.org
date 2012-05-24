<?php
/**
 * Report the diff of 's' file
 * against matching file in language 'l', if it exists.
*/

$source_file = isset($_GET['s']) ? trim($_GET['s']) : null;
$target_lang = isset($_GET['l']) ? trim($_GET['l']) : null;

if (is_null($source_file) ||
    is_null($target_lang)) {

    die('kthxbai');
}

if (!file_exists($source_file)) {
    die('no source');
}

include 'lib.php';

$target_file = _lang_file_switch($source_file, $target_lang);

if (!file_exists($target_file)) {
    die('no target');
}

$source_file = realpath($source_file);
$target_file = realpath($target_file);

if (false === strstr($source_file, '/langs/') ||
    false == strstr($target_file, '/langs/')) {
    die('no sorry');
}


$diff = _lang_diff($source_file, $target_file);

$s = '<a href="report.php">&laquo; back to langs report</a>';
$s .= "<h1>Diff {$source_file} ({$diff['a']}) against {$target_file} ({$diff['b']})</h1>";

foreach (array('missing', 'notrans', 'extra') as $type) {

    if (count($diff[$type]) > 0) {
        $s .= sprintf('<h2>%d %s:</h2>', count($diff[$type]), $type);
        foreach ($diff[$type] as $l)
            $s .= sprintf('<blockquote><p><pre>%s</pre></p></blockquote>', htmlentities($l));
    }
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robot" content="noindex,nofollow,nosnippet">
    <style>
    blockquote { background: #eee; padding: 0.1em 1em; }
    </style>
</head>
<body>
    <?php echo $s; ?>
<hr>
</body>
</html>
