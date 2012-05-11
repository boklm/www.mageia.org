<html lang="en">
<head>
    <meta name="robots" content="noindex,nosnippet,nofollow">
    <style>
    #navdoc { font: 14px/1.4 "Trebuchet MS", "Lucida Grande", "Lucida Sans", Verdana, Tahoma, Arial, sans-serif; }
    #navdoc code { background: #333; color: #eee; font-size: 80%; padding: 0.5em; }
    </style>
</head>
<body id="navdoc">
<?php
include '../lib/php-markdown/markdown.php';
echo Markdown(file_get_contents('README.md'));
?>
</body>
</html>