<?php
/**
 * mageia.org global nav bar.
 *
 * PHP version 5.4
 *
 * @category Mageia
 * @package  Mageia\Web\nav
 * @author   rda <rda@mageia.org>
 * @link     http://nav.mageia.org/
 *
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU GPL v2+
 *
 * This program is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License aspublished by the
 * Free Software Foundation; either version 2 of the License, or (at your
 * option) any later version.
*/
?><html lang="en">
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
    <script src="/js/"></script>
</body>
</html>