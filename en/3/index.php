<?php

define('HLANG', true);
require '../../langs.php';

_lang_load($locale, '3');
?>
<!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php _e('Mageia 3')?></title>
    <link rel="stylesheet" href="/g/style/all.css">
    <meta name="description" content="<?php _e('Mageia 3')?>">
    <style>
    .para { text-align: left; float: left; width: 600px; display: block; border-right: 1px solid #eef; border-bottom: 1px solid #eef; }
    hr { margin-top: 2em; }
    .unstable-release-warning {
        padding: 1em 1em 1em 2.2em;
        margin: 0;
        background: #cc0000;
        color: white;
        text-align: left;
    }
    </style>
    <?php include '../../analytics.php'; ?>
    <base href="../downloads/get/">
</head>
<body class="downloads">
    <?php echo $hsnav; ?>
    <article>
        <header id="mgnavt">
            <h1><?php _e('Mageia 3')?></h1>
            <ul>
		<li><a href="https://wiki.mageia.org/en/Mageia_3_Release_Notes"><?php _e('Release notes')?></a></li>
                <li><a href="https://wiki.mageia.org/en/Mageia_3_Errata"><?php _e('Errata')?></a></li>
            </ul>
        </header>
                <h2>Mageia 3 will come the 19th May at 5 hours UTC, thanks for you patience!</h2>
    </article>
</body>
</html>
