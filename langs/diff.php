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

if($source_file =='en/about/constitution.en.lang') {
	$constitution = true;
} else {
	$constitution = false;
}

$source_file = realpath($source_file);
$target_file = realpath($target_file);

if (false === strstr($source_file, '/langs/') ||
    false == strstr($target_file, '/langs/')) {
    die('no sorry');
}


$diff = _lang_diff($source_file, $target_file);

$s = '<a href="report.php">&laquo; back to langs report</a>';
$s .= sprintf('<h1>Differences between %s source and %s target</h1>',
    substr($source_file, strpos($source_file, '/langs/')+7), $target_lang);

if($constitution) {
	$s .= '<h2 style="color: red;">Please translate constitution first</h2>';
	$s .= '<p>You can find it in <a href="http://svnweb.mageia.org/org/constitution/">svn</a>. Please read <a href="https://wiki.mageia.org/en/Internationalisation_Team_%28i18n%29#Special_cases_of_web_pages">page on wiki for more information</a> about that.</p>';
}
foreach (array('missing', 'notrans', 'extra') as $type) {

    if (count($diff[$type]) > 0) {
        $s .= sprintf('<h2>%d %s:</h2>', count($diff[$type]), $type);
        $s .= '<pre>';
        foreach ($diff[$type] as $l)
            $s .= sprintf(";%s\n\n", htmlspecialchars($l));
        $s .= '</pre>';
    }
}

header('Content-Type: text/html;charset=utf-8');

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robot" content="noindex,nofollow,nosnippet">
    <style>
    pre { background: #eee; padding: 0.6em; }
    </style>
</head>
<body>
    <?php echo $s; ?>
<hr>
</body>
</html>
