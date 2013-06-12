<?php


define('HLANG', true);
require '../../langs.php';
_lang_load($locale, 'contribute');

?><!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php _e('Contribute to Mageia')?></title>
    <meta name="description" content="<?php _e('Here you can find out, how to contribute to the Mageia project')?>">
    <meta name="keywords" content="<?php _e('mageia, contribute, howto, operating system')?>">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <link rel="canonical" href="/<?php echo $locale; ?>/contribute/">
    <?php include '../../analytics.php'; ?>
</head>
<body id="top" class="contribute">
    <?php echo $hsnav; ?>
    <h1 id="mgnavtitle"><?php _e('Contribute to Mageia')?></h1>
    <div style="width: 1000px; text-align: left; border-bottom: 1px solid #ddd; border-right: 1px solid #ddd;">
        <div class="para" style="padding-top: 2em;">
            <p><?php _e('Many people from all over the world gather to build Mageia &ndash; a Linux-based operating system <em>and</em> a <a href="../about/code-of-conduct/">lively, fun community</a> for <a href="../about/values/">building Free Software projects</a>.')?></p>
            <p><?php _e('Contributing is open to anyone, this is Free Software! If you are curious and willing to join, there are things you can do, depending on your time and skills; you will always find someone to welcome and help/mentor you if needed so that your contribution to the project can be as good as it can be!')?></p>
            <p><?php _e('Check what you could do below!')?></p>
        </div>
    </div>
    <div style="float: left; width: 400px; text-align: left; border-bottom: 1px solid #ddd;">
        <div class="para" id="by-time">
            <h2><?php _e('Time')?></h2>
            <p><?php _e('How much free time do you have? and how much of it do you want to commit to Mageia? See what you can do:')?></p>
            <ul id="contrib-time" class="contrib-list">
                <li>
                    <h3><?php _e('A few minutes')?></h3>
                    <ul class="contrib-act">
                        <li><?php _e('Stop by the <a href="http://forums.mageia.org/">forums</a> support section and check if you can answer a question.')?></li>
                        <li><?php _e('Talk about the project to people around you, on your blog, your Twitter account, at your work place.')?></li>
                        <li><?php _e('If you encounter a bug you can reproduce consistently, <a href="http://bugs.mageia.org/">submit a bug report</a>.')?></li>
                        <li><?php _e('Make a <a href="../donate/">donation</a>!')?></li>
                    </ul>
                </li>
                <li>
                    <h3><?php _e('A few hours')?></h3>
                    <ul class="contrib-act">
                        <li><?php _e('Stop by a Mageia event, like a test day to find, reproduce and help resolve bugs.')?></li>
                        <li><?php _e('Subscribe to a team discussion list and follow what happens there, try to see how you can bring something useful to it.')?></li>
                    </ul>
                </li>
                <li>
                    <h3><?php _e('A few weeks or more')?></h3>
                    <ul class="contrib-act">
                        <li><?php _e('Learn about free software, open source collaboration in general, and Mageia in particular.')?></li>
                        <li><?php _e('If you are a student, consider talking to your tutor about participating into the project as part of your studies; you don\'t specifically need to be studying Computer Science to do so.')?></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div style="float: left; width: 600px; text-align: left; border: 1px solid #ddd; border-top: 0;">
        <div class="para" id="by-role">
        <h2><?php _e('Roles')?></h2>
        <ul id="contrib-roles" class="contrib-list">
            <li id="support">
                <h3><?php _e('Helping users &amp; advocating the project')?></h3>
                <p><?php _e('Want to welcome and help new users or share tips with experienced ones? In <a href="https://wiki.mageia.org/en/IRC">IRC channels</a>, <a href="http://forums.mageia.org/">forums</a>, <a href="https://wiki.mageia.org/en/Mailing_lists">mailing-lists</a>, local events? Just get in touch with us via one of these channels and share the fun!')?></p>
            </li>
            <li id="docu">
                <h3><a href="https://wiki.mageia.org/en/Documentation_team"><?php _e('Writing, copywriting and documenting')?></a></h3>
                <p><?php _e('You have a taste for practical, clear, concise, proofread, nice writing? You like to take the challenge of explaining clearly complex ideas or systems and teaching others? You know how to mix form &amp; content to push the right message? Get in touch with our <a href="https://wiki.mageia.org/en/Documentation_team">Documentation team</a>!')?></p>
            </li>
            <li id="i18n">
                <h3><a href="https://wiki.mageia.org/en/Internationalisation_Team_(i18n)"><?php _e('Translating')?></a></h3>
                <p><?php _e('Mageia is localized in more than 180 languages! Clarifying, completing, improving translations of software, guides, tutorials, Web sites, marketing material, etc. happens thanks to the effort of so many contributors. Join <a href="https://wiki.mageia.org/en/Internationalisation_Team_(i18n)">them</a>!')?></p>
            </li>
            <li id="triage">
                <h3><a href="https://wiki.mageia.org/en/Bug_Squad"><?php _e('Triaging')?></a></h3>
                <p><?php _e('Bugs happen! And some get reported. So, logically they need to be triaged to make the task of the packagers/developers fixing them easier: validation (is the bug reproducible?), collecting the needed debugging info from the reporter, assigning the report properly. <a href="https://wiki.mageia.org/en/Bug_Squad">Grow the Triage team</a> and be the link between users who report bugs in the forums or mailing-lists, and the <a href="http://bugs.mageia.org/">Mageia Bugzilla</a> used by developers.')?></p>
            </li>
            <li id="qa">
                <h3><a href="https://wiki.mageia.org/en/QA_Team"><?php _e('Testing &amp; <abbr title="Quality Assurance">QA</abbr>')?></a></h3>
                <p><?php _e('We can\'t ship software if we are not confident it works well! <a href="https://wiki.mageia.org/en/QA_Team">Testers and QA</a> people make sure what we do (software, packages, ISO\'s, Web sites) match our expectations for quality before they reach users.')?></p>
            </li>
            <li id="marketing">
                <h3><a href="https://wiki.mageia.org/en/Marcom_Team"><?php _e('Marketing, Communication &amp; Evangelism')?></a></h3>
                <p><?php _e('Better understanding of who uses and contributes to the project to help them even more, making sure the Mageia voice is consistent and heard, that\'s a job for the <a href="https://wiki.mageia.org/en/Marcom_Team">marcomm team</a> (Marketing and Communication), on both global and local scales.')?></p>
            </li>
            <li id="graphic">
                <h3><a href="https://wiki.mageia.org/en/Artwork_team"><?php _e('Graphic &amp; UI design')?></a></h3>
                <p><?php _e('Software isn\'t only about code neither is Mageia only about technology. So make it human, practical and beautiful! If you have a talent and experience in graphic design, ergonomics <a href="https://wiki.mageia.org/en/Artwork_team">join the artwork team</a>!')?></p>
            </li>
            <li id="dev">
                <h3><a href="https://wiki.mageia.org/en/Packagers_Team"><?php _e('Coding &amp; packaging')?></a></h3>
                <p><?php _e('Contribute to the core of the distribution with your technical skills! Adding, fixing, patching and maintaining software to be included in the distribution, from upstream projects or from Mageia-specific sources. Join the <a href="https://wiki.mageia.org/en/Packagers_Team">Packagers team</a>!')?></p>
            </li>
            <li id="web">
                <h3><a href="https://wiki.mageia.org/en/Web_team"><?php _e('Web, tools, systems design &amp; administration')?></a></h3>
                <p><?php _e('Mageia depends on infrastructure and tools that enable everyone to collaborate. These need experts to build, maintain, develop, provide and manage servers, connections, security, applications, data flow, etc. It takes from <a href="https://wiki.mageia.org/en/Sysadmin_Team">system administrators</a> to <a href="https://wiki.mageia.org/en/Web_team">Web designers/developers/integrators</a> to manage this huge task.')?></p>
            </li>
            <li id="mirror">
                <h3><?php _e('Mirroring')?></h3>
                <p><?php _e('Making all the software provided by Mageia available requires <a href="http://mirrors.mageia.org/">several mirrors around the world</a>, to distribute ISO\'s and software packages. If you have some disk space and bandwidth to share, please <a href="https://wiki.mageia.org/en/Mirrors_policy#How_to_.28become_a.29_mirror.3F">see how you can provide an official Mageia mirror</a>.')?></p>
            </li>
            <li id="donation">
                <h3><a href="../donate/"><?php _e('Donating')?></a></h3>
                <p><?php _e('Financial donations help us allocate specific tasks, secure our infrastructure, fund events, goodies &amp; transportation. <a href="../thank-you/">200+ persons already expressed their trust in us</a> with their money, hardware or other resources. We keep a <a href="../about/reports/">public record of what we get and how we use it</a>.')?></p>
            </li>
            <li id="data">
                <h3><?php _e('Data mining')?></h3>
                <p><?php _e('There are tons of data out there, most of which we don\'t use, or even know about. If you like to grab and analyze data to reveal &amp; visualize it to spot what we can do even better, get in touch!')?></p>
            </li>
            <li id="design">
                <h3><?php _e('Designing, experimenting, revealing the unknown')?></h3>
                <p><?php _e('Ideas are great, actionable prototypes are even better. The Mageia project is not only about making a different Linux distribution but also about building new products and experiences with it and with the data around it.')?></p>
            </li>
        </ul>
        <hr>
        </div>
    </div>
</body>
</html>
