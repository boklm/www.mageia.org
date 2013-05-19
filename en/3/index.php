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
    <meta name="description" content="<?php _e('Mageia 3 is the new, solid, stable Linux distribution from the Mageia project.')?>">
    <style>
    .para { text-align: left; float: left; width: 250px; display: block; border-right: 1px solid #eef; border-bottom: 1px solid #eef; }
    hr { margin-top: 2em; }
    </style>
    <?php include '../../analytics.php'; ?>
</head>
<body class="downloads">
    <?php echo $hsnav; ?>
    <h1 id="mgnavtitle"><a href="../3/">Mageia 3</a></h1>
    <?php include '../3/nav.php'; ?>
    <div class="para" style="width: 600px;">
        <section>
            <a href="../downloads" title="Mageia 3"><img src="/g/3/mageia-3-desktop-550.png" alt="Mageia 3" style="width: 550px; display: block; margin: 2em auto 3em auto; box-shadow: 0 0 5px #aaa;"></a>
            <?php
            _h('Mageia 3 is a GNU/Linux distribution for your computer, released by the <a href="%s">Mageia community</a>.',
                array('../community'));

            _h("What's new?", null, 'h2');
            _h('Too much to include here! See the <a href="https://wiki.mageia.org/en/Mageia_3_Release_Notes">release notes</a> for an extensive exposé.');
            _h('<a href="../downloads/" style="background: #1272B1; color: white; padding: 0.9em; margin: 1em; display: inline-block; text-shadow: 0 1px 6px #000; border-radius: 3px;">Download it right away!</a>');

            _h('Mageia in context', null, 'h2');
            _h('Mageia is both a Community and a Linux Distribution, with Mageia 3 being our third release.');
            _h('Since the release of <a href="../1/">Mageia 1</a>, our offering has been consistently in the <a href="%s">top 10 of Distrowatch\'s most popular distributions</a>.',
                array('http://distrowatch.com/popularity'));

            _h('Mageia 3 is supported by the <a href="../about/">Mageia.org nonprofit organisation</a>, which is governed by a body of recognized and elected contributors.');
            _h('Mageia 3 has been made by more than 100 people from all around the world.');

            _h('Our work adds to the excellent work of the wider Linux and Free Software community. We aim to bring one of the best, most stable, reliable and enjoyable experience and platform we can make; for regular users, developers and businesses.');
            _h('We welcome new contributors to any of the many different teams that go to make up Mageia the Community, and we encourage you to join us.');
            ?>
        </section>
    </div>
</body>
</html>
