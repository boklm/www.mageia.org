<?php

define('HLANG', true);
require '../../../langs.php';

$_t = array(
    'en' => array(
        'title' => 'Mageia.Org constitution',
        'svn-source' => 'Original and definitive version (in French) is available from %s.
            These <em>may</em> be improved. Do not hesitate to mail your patches;
            check how in the %s.',
    ),
    'fr' => array(
        'title' => 'Statuts de l&rsquo;association Mageia.Org',
        'svn-source' => 'La version originale est disponible depuis %s.
            Ces statuts <em>peuvent</em> être améliorés.
            N&rsquo;hésitez pas à proposer des corrections ou améliorations
            en suivant les consignes du %s.',
    )
);

$_t = i18n::get_strings($_t, $locale, $i18n_fallback_rules);

?><!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $_t['title']; ?></title>
    <meta name="description" content="<?php echo $_t['title'];?>">
    <meta name="keywords" content="mageia.org, association, organization, legal, constitution, statuts">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <?php include '../../../analytics.php'; ?>
</head>
<body class="about constitution">
    <?php echo $hsnav; ?>
    <h1 id="mgnavt"><?php _e('title')?></h1>
    <div id="doc4" class="yui-t7">
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para preambule">
                    <div id="preamble">
                    <p><?php echo sprintf($_t['svn-source'],
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
                    else
                        echo Markdown(file_get_contents('mageia.org_statutes_en.md'));
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
