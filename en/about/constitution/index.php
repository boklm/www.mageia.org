<?php

define('HLANG', true);
require '../../../langs.php';

_lang_load($locale, "about/constitution");

?><!DOCTYPE html>
<html dir="ltr" lang="<?php echo $locale ?>">
<head>
    <meta charset="utf-8">
    <title><?php _e('Mageia.Org constitution'); ?></title>
    <meta name="description" content="<?php _e('Mageia.Org constitution');?>">
    <meta name="keywords" content="<?php _e('mageia.org, association, organization, legal, constitution, statuts'); ?>">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <?php include '../../../analytics.php'; ?>
</head>
<body class="about constitution">
    <?php echo $hsnav; ?>
    <h1 id="mgnavt"><?php _e('Mageia.Org constitution')?></h1>
    <div id="doc4" class="yui-t7">
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para preambule">
                    <div id="preamble">
                    <p><?php echo sprintf(_t('Original and definitive version (in French) is available from %s. These <em>may</em> be improved. Do not hesitate to mail your patches; check how in the %s.'),
                        '<a href="http://svnweb.mageia.org/org/constitution/">svnweb.mageia.org/org/constitution</a>',
                        '<a href="http://svnweb.mageia.org/org/constitution/README.md?revision=HEAD&view=markup">README</a>')?></p>
                    </div>
                </div>
                <div class="para">
                    <?php
                    include G_APP_ROOT . '/lib/php-markdown/markdown.php';
                    $l = isset($_GET['l']) ? $_GET['l'] : $locale;
                    if ($l == 'fr')
                        echo Markdown(file_get_contents('mageia.org_statutes_fr.md'));
                    else if ($l == 'sl')
                        echo Markdown(file_get_contents('mageia.org_statutes_sl.md'));
                    else if ($l == 'tr')
                        echo Markdown(file_get_contents('mageia.org_statutes_tr.md'));
		    else if ($l == 'ro')
			echo Markdown(file_get_contents('mageia.org_statutes_ro.md'));
                    else
                        echo Markdown(file_get_contents('mageia.org_statutes_en.md'));
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
