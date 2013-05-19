<?php

define('HLANG', true);
require '../../langs.php';
_lang_load($locale, '3');

?>
<!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php _e('Mageia 3, for your server')?></title>
    <link rel="stylesheet" href="/g/style/all.css">
    <style>
    .para { text-align: left; float: left; width: 250px; display: block; border-right: 1px solid #eef; border-bottom: 1px solid #eef; }
    hr { margin-top: 2em; }
    </style>
    <?php include '../../analytics.php'; ?>
</head>
<body class="downloads">
    <?php echo $hsnav; ?>
    <h1 id="mgnavtitle"><a href="../3/">Mageia 3</a> &raquo; <?php _e('for your server')?></h1>
    <?php include '../3/nav.php'; ?>
    <div class="para" style="width: 600px;">
        <section>
            <?php
            _h('Mageia 3 has all the main services and server packages you will need to run your server.');
            _h('Aside from the cross-section included here, you will find many others in the repositories: you can use rpmdrake to search for packages, or check the <a href="%s">Mageia App DB</a>.',
                array('http://mageia.madb.org'));

            _h('Administration', null, 'h3');
            _h('For centralised administration, we include puppet 2.7.21; we use it widely in <a href="%s">our own infrastructure</a>.',
                array('http://svnweb.mageia.org/adm/puppet/'));

            _h('The entire High Availability stack has been updated, and now includes drbd 8.4.2, Corosync 2.3.0 and Pacemaker 1.1.8.');

            _h('Databases', null, 'h3');
            _h('Databases included are PostgreSQL 8.4; MariaDB, which replaces MySQL 5.5.28; BDB.');
            _h('And there are NoSQL servers too: CouchDB 1.2.1, Redis 2.6.5, MongoDB 2.2.2.');

            _h('Servers', null, 'h3');
            _h('Web servers include Apache 2.4.4, Cherokee 1.2.101 and lighttpd 1.4.32.');
            _h('For file and directory sharing and network printing on heterogeneous networks, we have Samba 3.6.15, OpenLDAP 2.4.33 and Cups 1.5.4.');
            _h('Mail servers included with Mageia 3 are Postfix 2.9.6, Cyrus-imapd 2.4.17 and Dovecot 2.1.15.');
            ?>
        </section>
    </div>
    <div class="para">
        <?php
        _h('For more information about these and other packages, check the <a href="https://wiki.mageia.org/en/Mageia_3_Release_Notes">Mageia 3 Release notes</a>.');
        _h('You can take a look at the <a href="%s">Mageia Application Database</a> to get a more complete list of Mageia packages.',
            array('http://mageia.madb.org/'));
        ?>
    </div>
</body>
</html>
