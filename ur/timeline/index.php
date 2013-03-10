<?php

define('HLANG', true);
require '../../langs.php';
_lang_load($locale, 'timeline');

?>
<!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php _e('Mageia Timeline')?></title>
    <link rel="stylesheet" href="/g/style/all.css">
    <style>
    .para { text-align: left; float: left; width: 250px; display: block; border-right: 1px solid #eef; border-bottom: 1px solid #eef; }
    hr { margin-top: 2em; }
    #tl0 {
        list-style: none;
        margin: 0; padding: 0;
    }
    .tliy { list-style: none; }
    .tliy h2 { border-bottom: 1px solid #ddd; }
    .tlim { list-style: none; padding-bottom: 0.8em;}
    .tlim h3 { color: #777; font-size: 130%; }
    .tlie { margin-left: 4em; }
    </style>
    <link rel="canonical" href="/<?php echo $locale; ?>/timeline/">
    <?php include '../../analytics.php'; ?>
</head>
<body class="about">
    <?php echo $hsnav; ?>
    <h1 id="mgnavtitle"><?php _e('Mageia Timeline')?></h1>
    <div class="para" style="width: 800px;">
        <section>
            <ul class="hl" id="tl0">
                <li class="tliy">
                    <h2>2012</h2>
                    <ul class="hl">
                        <li class="tlim">
                            <h3><?php _e('May')?></h3>
                            <ul class="hl">
                                <li class="tlie"><?php _e('<a href="/2/">Mageia 2</a> is released.')?></li>
                            </ul>
                        </li>
                        <li class="tlim">
                            <h3><?php _e('February')?></h3>
                            <ul class="hl">
                                <li class="tlie"><?php _e('Second General Assembly during FOSDEM in Brussels, Belgium.')?></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="tliy">
                    <h2>2011</h2>
                    <ul class="hl">
                        <li class="tlim">
                            <h3><?php _e('June')?></h3>
                            <ul class="hl">
                                <li class="tlie"><?php _e('<a href="/1/">Mageia 1</a> is released.')?></li>
                            </ul>
                        </li>
                        <li class="tlim">
                            <h3><?php _e('February')?></h3>
                            <ul class="hl">
                                <li class="tlie"><?php _e('First General Assembly during FOSDEM in Brussels, Belgium.')?></li>
                            </ul>
                        </li>
                        <li class="tlim">
                            <h3><?php _e('January')?></h3>
                            <ul class="hl">
                                <li class="tlie"><?php _e('Build system is ready to run for the first alpha ISOs.')?></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="tliy">
                    <h2>2010</h2>
                    <ul class="hl">
                        <li class="tlim">
                            <h3><?php _e('End of year')?></h3>
                            <ul class="hl">
                                <li class="tlie"><?php _e('With an incredible response, first donations and discussions abound.')?></li>
                                <li class="tlie"><?php _e('Project gets structured, governance takes slowly shape (first board, teams).')?></li>
                            </ul>
                        </li>
                        <li class="tlim">
                            <h3><?php _e('September')?></h3>
                            <ul class="hl">
                                <li class="tlie"><?php _e('Mageia starts as a <a href="../about/2010-sept-announcement.html">fork of Mandriva Linux</a>.')?></li>
                                <li class="tlie"><?php _e('Mageia.Org is registered in Paris, France.')?></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
    </div>
</body>
</html>