<?php

define('HLANG', true);
require '../../langs.php';

?><!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title>Contact @ Mageia</title>
    <link rel="stylesheet" href="/g/style/all.css">
    <style>
    .para { text-align: left; float: left; width: 250px; display: block; border-right: 1px solid #eef; border-bottom: 1px solid #eef; }
    hr { margin-top: 2em; }
    </style>
</head>
<body class="about">
    <?php echo $hsnav; ?>
    <h1 id="mgnavtitle">Contact Us</h1>
    <div class="para" style="width: 400px;">
        <section>
            <?php

            _h('Direct inquiries', null, 'h3');

                $m = array(
                    'contact' => 'contact@mageia.org',
                    'press'   => 'press@mageia.org',
                    'fi' => 'treasurer@mageia.org',
                    'privacy' => 'privacy@mageia.org',
                );
                
                $groups = array(
                    'board' => 'Board',
                    'council' => 'Council',
                    'sysadmin' => 'System admins',
                    'web' => 'Web team',
                    'communication' => 'Communication team',
                    'qa' => 'Quality Assurance team',
                    'doc' => 'Documentation team',
                );

                $mail_tmpl = '<a href="mailto:%s">%s</a>';

                _h('For press inquiries: %s. You may as well check our <mark>TO BE DONE</mark> news room or <a href="%s">mail the whole communication team</a>.',
                    array(sprintf($mail_tmpl, $m['press'], $m['press']),
                        'mailto:communication@group.mageia.org'));

                _h('For <a href="%s">privacy</a> issues or inquiries, legal information: %s.',
                    array('/en/about/policies/privacy/',
                        sprintf($mail_tmpl, $m['privacy'], $m['privacy'])));

                _h('For questions about <a href="%s">donations</a> and <a href="%s">reports</a>: %s',
                    array('/donate/', '/en/about/reports/', sprintf($mail_tmpl, $m['fi'], $m['fi'])));

                _h('For other topics, please mail %s',
                    array(sprintf($mail_tmpl, $m['contact'], $m['contact'])));

                echo '<ul class="hl">';
                foreach ($groups as $g => $l) {
                    _h('<a href="mailto:%s@group.mageia.org">%s</a>', array($g, $l), 'li');
                }
                echo '</ul>';

            ?>

            <h3>Public contact or request</h3>
            <p>For a formal, open and public queries to either the Council or the Board,
                please send your message:</p>
            <ul>
                <li>Subject: "[REQ] your subject"</li>
                <li>To: <a href="mailto:mageia-discuss@mageia.org">mageia-discuss@mageia.org</a></li>
                <li>Cc: board@ or council@group.mageia.org</li>
            </ul>
            <a href="mailto:mageia-discuss@mageia.org?Subject=[REQ] your text&Cc=board@group.mageia.org">test</a>
            You can use the following email alias to contact all members of a group/team :

            <hr>

            <ul>
                <li>For security matters, bugs, disclosure, etc.</li>
                <li>For legal matters</li>
                <li>For privacy reasons</li>
                <li>For behaviour, etc.</li>
                <li>For partnership, school, university, company</li>
                <li>For donations, contributions in hardware, hosting, etc.</li>
                <li>For press</li>
                <li>For Board, Chairman of the board</li>
                <li>For financial reports or other inquiry</li>
                <li>For Council</li>
                <li>For Web site</li>
                <li>For translations</li>
            </ul>
            
            <mark>TODO: frequently asked questions section to link to.</mark>
        </section>
    </div>
    <div class="para" style="width: 300px">
        <?php
        _h('To...', null, 'h2');
        echo '<ul class="hl">';
        _h('report a bug: go <a href="%s">to our Bugzilla</a>.',
            array('/en/support/report-a-bug/'),
            'li');

        _h('get support: see our <a href="../support/">support page</a>.',
            null, 'li');

        _h('join us: <a href="../contribute/">see how</a>.',
            null, 'li');
        echo '</ul>';
        ?>

        <h3>IRC</h3>
        <?php
            _h('We are available ');
        ?>
    </div>
    <div class="para" style="width: 300px;">
        <h3>Address</h3>
        <?php _h('You may send us documents through:'); ?>
        <blockquote><p>Mageia.Org<br>
            12b rue de la Terrasse<br>
            75017 Paris<br>
            France</p></blockquote>
        
        
    </div>
</body>
</html>