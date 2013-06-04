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
        _h('You have an idea of whom to contact', null, 'h2');
        echo '<ul class="hl">';
        _h('Use <a href="%s">the discuss mailing list</a> or <a href="%s">the forums</a> for general Mageia discussions', array('https://ml.mageia.org/l/info/discuss', 'https://forums.mageia.org/en/'), 'li');
        _h('Use <a href="%s">the dev mailing list</a> for Mageia development discussions', array('https://ml.mageia.org/l/info/dev'), 'li');
        _h('Use one of <a href="https://wiki.mageia.org/en/Mailing_lists">the other mailing lists</a> for discussions on other topics', null, 'li');
        _h('Contact <a href="%s">the treasurer</a> for donation questions', array('mailto:treasurer&#x40;mageia.org'), 'li');
        _h('Contact <a href="%s">the sysadmin team</a> for questions about mirrors, problems with your <a href="%s">Mageia identity account</a>, or other problems with Mageia infrastructure (there is also a public <a href="%s">sysadmin-discuss mailing list</a> if your question does not need to be private)', array('mailto:sysadmin&#x40;group.mageia.org', 'https://identity.mageia.org/', 'https://ml.mageia.org/l/info/sysadmin-discuss'), 'li');
        _h('If you want to contact Council or Board for a public discussion, you can start a thread on a mailing-list and add the <a href="%s">Board</a> or <a href="%s">Council</a> alias in CC.', array('mailto:board&#x40;group.mageia.org', 'mailto:council&#x40;group.mageia.org'), 'li');
        echo '</ul>';

        _h('In most cases you should avoid sending private emails and use appropriate <a href="%s">public mailing list</a> when possible.',
            array('https://wiki.mageia.org/en/Mailing_lists')
        );
        echo '<hr>';
        _h('You want to join and contribute to Mageia', null, 'h2');
        _h('Please see <a href="%s">our Contributions page</a>.', array('../contribute/'));
        ?>
        <hr>
        </div>
    </div>
</body>
</html>
