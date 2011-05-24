<?php

$locale = explode('/', $_SERVER['REQUEST_URI']);
$locale = $locale[1];

require 'contribute_locales.php';
if (!array_key_exists($locale, $_t)) {
    $locale = 'en';
}

$_t = $_t[$locale];

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
    <link rel="canonical" href="/<?php echo $locale; ?>/contribute/">
    <?php include '../../analytics.php'; ?>
</head>
<body id="top">
    <?php include '../../langs.php'; ?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh"><?php echo $_t['page_h1']; ?></span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para">
                    <p>Many people from all over the world gather to build Mageia
                        &ndash; a Linux-based operating system <em>and</em>
                        a <a href="/en/about/code-of-conduct/">lively, fun community</a>
                        for <a href="/en/about/values/">building Free Software projects</a>.</p>

                    <p>Contributing is open to anyone, this is Free Software!
                        If you are curious and willing to join,
                        there are things you can do,
                        depending on your time and skills;
                        you will always find someone to welcome and help/mentor
                        you if needed so that your contribution to the project can be as good as it can be!</p>

                    <p>Check what you could do below!</p>
                    
                    <ul id="contrib-sel">
                        <li id=""><a href="#by-role">Browse by role</a></li>
                        <li id=""><a href="#by-time">Browse by time</a></li>
                    </ul>

                    <div id="by-role">
                    <h2>Roles</h2>
                    <ul id="contrib-roles" class="contrib-list">
                        <li id="support">
                            <h3>Helping users &amp; advocating the project</h3>
                            <p>Want to welcome and help new users or share tips with experienced ones?
                                In <a href="/wiki/doku.php?id=irc">IRC channels</a>,
                                <a href="http://forums.mageia.org/">forums</a>,
                                <a href="http://mageia.org/mailman/">mailing-lists</a>,
                                local events? Just get in touch with us via one of these channels and share the fun!</p>
                        </li>
                        <li id="docu">
                            <h3><a href="/wiki/doku.php?id=documentation">Writing, copywriting and documenting</a></h3>
                            <p>You have a taste for practical, clear, concise, proofread, nice writing?
                                You like to take the challenge of explaining clearly
                                complex ideas or systems and teaching others?
                                You know how to mix form &amp; content to push the right message?
                                Get in touch with our <a href="/wiki/doku.php?id=documentation">Documentation team</a>!</p>
                        </li>
                        <li id="i18n">
                            <h3><a href="/wiki/doku.php?id=translators">Translating</a></h3>
                            <p>Mageia is localized in more than 180 languages!
                                Clarifying, completing, improving
                                translations of software, guides, tutorials, Web sites, marketing material,
                                etc. happens thanks to the effort of so many contributors.
                                Join <a href="/wiki/doku.php?id=translators">them</a>!</p>
                        </li>
                        <li id="triage">
                            <h3><a href="/wiki/doku.php?id=triage">Triaging</a></h3>
                            <p>Bugs happen! And some get reported. So, logically they need to be triaged
                                to make the task of the packagers/developers fixing them easier: validation (is the bug reproducible?), collecting the needed debugging info from the reporter, assigning the report properly.
                                <a href="/wiki/doku.php?id=triage">Grow the Triage team</a> and be the link between users who report bugs
                                in the forums or mailing-lists, and the <a href="http://bugs.mageia.org/">Mageia Bugzilla</a>
                                used by developers.</p>
                        </li>
                        <li id="qa">
                            <h3><a href="/wiki/doku.php?id=qateam">Testing &amp; <abbr title="Quality Assurance">QA</abbr></a></h3>
                            <p>We can't ship software if we are not confident it works well!
                                <a href="/wiki/doku.php?id=qateam">Testers and QA</a>
                                people make sure what we do (software, packages, ISO's, Web sites)
                                match our expectations for quality before they reach users.</p>
                        </li>
                        <li id="marketing">
                            <h3>Marketing, Communication &amp; Evangelism</h3>
                            <p>Better understanding of who uses and contributes to the project
                                to help them even more, making sure the Mageia voice is consistent and heard,
                                that's a job for the <a href="http://mageia.org/wiki/doku.php?id=marketing">marcomm team</a>
                                (Marketing and Communication), on both global and local scales.</p>
                        </li>
                        <li id="graphic">
                            <h3>Graphic &amp; UI design</h3>
                            <p>Software isn't only about code neither is Mageia only about technology.
                                So make it human, practical and beautiful!
                                If you have a talent and experience in graphic design, ergonomics
                                <a href="/wiki/doku.php?id=designers">join the artwork team</a>!</p>
                        </li>
                        <li id="dev">
                            <h3><a href="/wiki/doku.php?id=packagers">Coding &amp; packaging</a></h3>
                            <p>Contribute to the core of the distribution with your technical skills!
                                Adding, fixing, patching and maintaining software to be included
                                in the distribution, from upstream projects or from Mageia-specific
                                sources. Join the <a href="/wiki/doku.php?id=packagers">Packagers team</a>!</p>
                        </li>
                        <li id="web">
                            <h3>Web, tools, systems design &amp; administration</h3>
                            <p>Mageia depends on infrastructure and tools that enable everyone
                                to collaborate. These need experts to build, maintain, develop, provide
                                and manage servers, connections, security, applications, data flow, etc.
                                It takes from <a href="/wiki/doku.php?id=sysadmin">system administrators</a>
                                to <a href="/wiki/doku.php?id=web">Web designers/developers/integrators</a>
                                to manage this huge task.</p>
                        </li>
                        <li id="mirror">
                            <h3>Mirroring</h3>
                            <p>Making all the software provided by Mageia available requires
                                <a href="http://mirrors.mageia.org/">several mirrors
                                around the world</a>, to distribute ISO's and software packages.
                                If you have some disk space and bandwidth to share, please <a href="/wiki/doku.php?id=mirrors_policy#how_to_become_a_mirror">see how you can
                                provide an official Mageia mirror</a>.</p>
                        </li>
                        <li id="donation">
                            <h3><a href="/en/donate/">Donating</a></h3>
                            <p>Financial donations help us allocate specific tasks, secure our infrastructure,
                                fund events, goodies &amp; transportation.
                                <a href="/en/thank-you/">200+ persons already expressed their trust in us</a>
                                with their money, hardware or other resources.
                                We keep a <a href="/en/about/reports/">public record of what we get and
                                    how we use it</a>.</p>
                        </li>
                        <hr>
                        <li id="data">
                            <h3>Data mining</h3>
                            <p>There are tons of data out there, most of which we don't use,
                                or even know about. If you like to grab and analyze data
                                to reveal &amp; visualize it to spot what we can do even better,
                                get in touch!</p>
                        </li>
                        <li id="design">
                            <h3>Designing, experimenting, revealing the unknown</h3>
                            <p>Ideas are great, actionable prototypes are even better.
                                The Mageia project is not only about making a different Linux
                                distribution but also about building new products and experiences
                                with it and with the data around it.</p>
                        </li>
                    </ul>
                    <hr>
                    </div>
                    <div id="by-time">
                    <h2>Time</h2>
                    <p>How much free time do you have? and how much of it do you want to commit to Mageia?
                        See what you can do:</p>
                    <ul id="contrib-time" class="contrib-list">
                        <li>
                            <h3>A few minutes</h3>
                            <ul class="contrib-act">
                                <li>Stop by the <a href="http://forums.mageia.org/">forums</a>
                                    support section and check if you can answer a question.</li>
                                <li>Talk about the project to people around you, on your blog, your Twitter account,
                                    at your work place.</li>
                                <li>If you encounter a bug you can reproduce consistently,
                                    <a href="http://bugs.mageia.org/">submit a bug report</a>.</li>
                                <li>Make a <a href="/en/donate/">donation</a>!</li>
                            </ul>
                        </li>
                        <li>
                            <h3>A few hours</h3>
                            <ul class="contrib-act">
                                <li>Stop by a Mageia event, like a test day to find, reproduce and help resolve bugs.</p>
                                <li>Subscribe to a team discussion list and follow what happens there,
                                    try to see how you can bring something useful to it.</li>
                            </ul>
                        </li>
                        <li>
                            <h3>A few weeks or more</h3>
                            <ul class="contrib-act">
                                <li>Learn about free software, open source collaboration in general,
                                    and Mageia in particular.</li>
                                <li>If you are a student, consider talking to your tutor
                                    about participating into the project as part of your studies;
                                    you don't specifically need to be studying Computer Science to do so.</li>
                            </ul>
                        </li>
                    </ul>
                    <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
