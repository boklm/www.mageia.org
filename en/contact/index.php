<?php
define('HLANG', true);
require '../../langs.php';
_lang_load($locale, 'contact');

?><!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php _e('Contact Us')?></title>
    <meta name="description" content="<?php _e('Here you can find out, how to contribute to the Mageia project')?>">
    <meta name="keywords" content="<?php _e('mageia, contact, mail, press, people, board, council, mailing lists')?>">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <link rel="canonical" href="/<?php echo $locale; ?>/contact/">
    <?php include '../../analytics.php'; ?>
</head>
<body id="top" class="contact">
    <?php echo $hsnav; ?>
    <h1 id="mgnavtitle"><?php _e('Contact Us')?></h1>
    <div style="float: left; width: 400px; text-align: left; border-bottom: 1px solid #ddd;">
        <div class="para" id="by-time">
            <?php
            _h('You are looking for support', null, 'h2');
            _h('Please check our <a href="https://forums.mageia.org/">forum</a> or our <a href="http://wiki.mageia.org/" hreflang="en">wiki</a>.');
            echo '<hr>';
            _h('You would like to report an issue', null, 'h2');
            _h('Please see <a href="%s" hreflang="en">how to report an issue in our bugs database</a>.',
                array('https://wiki.mageia.org/en/How_to_report_a_bug_properly'));
            echo '<hr>';

            _h('You are not sure who to contact', null, 'h2');?>
            <ul id="contrib-time" class="contrib-list">
                <li>
                    <h3><a href="mailto:contact&#x40;mageia.org">contact&#x40;mageia.org</a></h3>
                    <?php _h('For generic contact information.')?>
                </li>
                <li>
                    <h3><a href="mailto:press&#x40;mageia.org">press&#x40;mageia.org</a></h3>
                    <?php _h('For press inquiries.')?>
                </li>
                <li>
                    <h3>IRC</h3>
                    <?php _h('You may as well try to reach us on <a href="%s">#mageia on Freenode IRC</a>.',
                        array('irc://irc.freenode.net/#mageia'));?>
                </li>
            </ul>
            <hr>
        </div>
    </div>
    <div style="float: left; width: 600px; text-align: left; border: 1px solid #ddd; border-top: 0;">
        <div class="para" id="by-role">
        <?php
        _h('You have an idea of who to contact', null, 'h2');
        _h('You may post in the <a href="%s">forum</a> or the <a href="%s">public discussion mailing-list</a>.',
            array('https://forums.mageia.org/', 'https://ml.mageia.org/l/info/discuss'));
        _h('You also may use the following email aliases too to contact all members of a group at once:');
        $groups = array(
            'board'     => _d('Mageia.Org Board members'),
            'council'   => _d('Mageia Council'),
            'sysadmin'  => _d('Systems administration team'),
            'packagers' => _d('Packagers'),
            'atelier'   => _d('Communication, Marketing &amp; Web teams'),
            'qa'        => _d('QA team'),
            'doc'       => _d('Documentation team'),
            'association-members' => _d('Mageia.Org association members'),
        );
        echo '<ul class="hl">';
        foreach ($groups as $k => $v) {
            _h('<a href="mailto:%s&#x40;group.mageia.org">%s</a>', array($k, $v), 'li');
        }
        echo '</ul>';

        _h(
            'In most case you should avoid using those aliases as they should only be used for the rare cases where private emails are needed. Use appropriate <a href="%s">public mailing list</a> instead.',
            array('https://wiki.mageia.org/en/Mailing_lists')
        );
        _h('If you want to contact Council or Board for a public discussion, you can start a thread on a mailing-list and add the Board or Council alias in CC.');
        echo '<hr>';
        _h('You want to join and contribute to Mageia', null, 'h2');
        _h('Please see <a href="%s">our Contributions page</a>.', array('../contribute/'));
        ?>
        <hr>
        </div>
    </div>
</body>
</html>
