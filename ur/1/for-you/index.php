<?php

define('HLANG', true);
require '../../../langs.php';
require 'locales.php';

$_t = i18n::get_strings($_t, $locale, $i18n_fallback_rules);

?>
<!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php echo $_t['page_title']; ?></title>
    <meta name="description" content="<?php echo $_t['page_desc']; ?>">
    <meta name="keywords" content="<?php echo $_t['page_kw']; ?>">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <?php include '../../../analytics.php'; ?>
</head>
<body class="release">
    <?php echo $hsnav; ?>
    <h1 id="mgnavt"><?php _e('page_h1')?></h1>
    <div id="doc" class="yui-t7">
        <div id="bd" role="main">
            <div class="yui-g">
                <?php include '../nav.php'; ?>
                <div class="para">
                <h2><?php echo $_t['h2_for']; ?></h2>
                    <ul class="product-list">
                        <li><h3><?php echo $_t['h3_daily']; ?></h3>
                            <p><?php echo $_t['p_daily']; ?></p></li>
                        <li><h3><?php echo $_t['h3_fun']; ?></h3>
                            <p><?php echo $_t['p_fun']; ?></p></li>
                        <li><h3><?php echo $_t['h3_actuality']; ?></h3>
                            <p><?php echo $_t['p_actuality']; ?></p></li>
                        <li><h3><?php echo $_t['h3_universal']; ?></h3>
                            <p><?php echo $_t['p_universal']; ?></p></li>
                        <li><h3><?php echo $_t['h3_community']; ?></h3>
                            <p><?php echo $_t['p_community']; ?></p></li>
                        <li><h3><?php echo $_t['h3_people']; ?></h3>
                            <p><?php echo $_t['p_people']; ?></p></li>
                    </ul>
                <hr />
                <h2><?php echo $_t['h2_focusing']; ?></h2>
                    <ul class="product-list">
                        <li><h3><?php echo $_t['h3_users']; ?></h3>
                            <p><?php echo $_t['p_users_1']; ?></p>
                            <p><?php echo $_t['p_users_2']; ?></p>
                            <p><?php echo $_t['p_users_3']; ?></p>
                            <p><?php echo $_t['p_users_4']; ?></p>
                            <p><?php echo $_t['p_users_5']; ?></p>
                            <p><?php echo $_t['p_users_6']; ?></p>
                            <hr>
                            </li>

                        <li><h3><?php echo $_t['h3_developers']; ?></h3>
                            <p><?php echo $_t['p_developers_1']; ?></p>
                            <p><?php echo $_t['p_developers_2']; ?></p>
                            <p><?php echo $_t['p_developers_3']; ?></p>
                            <ul>
                                <?php foreach ( $_t['array_developers_1'] as $anItem ) {
                                    echo '<li>'.$anItem.'</li>';
                                } ?>
                            </ul>
                            <p><?php echo $_t['p_developers_4']; ?></p>
                            <ul>
                                <?php foreach ( $_t['array_developers_2'] as $anItem ) {
                                    echo '<li>'.$anItem.'</li>';
                                } ?>
                            </ul>
                            </p>
                            <p><?php echo $_t['p_developers_5']; ?></p>
                            <hr>
                            </li>
                        <li><h3><?php echo $_t['h3_sysadmins']; ?></h3>
                            <hr>
                            </li>
                        <li><h3><a href="/contribute/"><?php echo $_t['h3_contributors']; ?></a></h3>
                            <p><?php echo $_t['p_contributors']; ?></p></li>
                    </ul>    
                </div>
            </div>
        </div>
    </div>
</body>
</html>
