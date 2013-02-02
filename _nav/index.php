<html lang="en">
<head>
    <meta name="robots" content="noindex,nosnippet,nofollow">
    <title>mognase doc</title>
    <style>
    html, body { margin: 0; padding: 0; }
    #navdoc { font: 14px/1.4 "Trebuchet MS", "Lucida Grande", "Lucida Sans", Verdana, Tahoma, Arial, sans-serif; margin: 10px; }
    #navdoc code { background: #333; color: #eee; font-size: 80%; padding: 0.5em; }
    </style>
</head>
<body class="community">
    <div id="navdoc">
    <?php
    include 'lib/php-markdown/markdown.php';
    echo Markdown(file_get_contents('README.md'));
    ?>
    </div>
    <script src="/_nav/js/"></script>
</body>
</html>