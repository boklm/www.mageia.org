<?php
$_t = array(
    'page_title' => 'Migrate from Mandriva Linux to Mageia',
    'page_desc' => 'How to migrate from Mandriva Linux 2010.1/2010.2 to Mageia 1 in a few, safe steps.',
    'page_kw' => 'mageia, mandriva, upgrade, migrate',
    'page_h1' => 'Migrate from Mandriva Linux'
);


?><!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8" />
    <title><?php echo $_t['page_title']; ?></title>
    <meta name="description" content="<?php echo $_t['page_desc']; ?>" />
    <meta name="keywords" content="<?php echo $_t['page_kw']; ?>" />
    <meta name="author" content="Mageia" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" >
    <?php include '../../../analytics.php'; ?>
</head>
<body class="release">
    <?php include '../../../langs.php'; ?>
    
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh"><?php echo $_t['page_h1']; ?></span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <?php include '../nav.php'; ?>
                <div class="para">
                <p>Upgrading from Mandriva Linux 2010.1 and 2010.2 is supported, and has been fine tuned over the past
                months, so it should work. But as always, <strong>do back up your data before upgrading</strong>.</p>
                <p>There are several ways to upgrade from one of those previous Mandriva releases:</p>
                <ul>
                    <li><a href="#dvd">using the Mageia 1 DVD</a></li>
                    <li><a href="#inline">using the online media sources directly</a>
                        <ul>
                            <li><a href="#mgaonline">using mgaonline</a></li>
                            <li><a href="#urpmi">using urpmi</a></li>
                        </ul>
                    </li>
                </ul>
                <hr>
                <h2 id="dvd">Upgrade using the Mageia 1 DVD</h2>
                <p>You can use the <a href="/downloads/">Mageia 1 DVD</a> to do a clean install
                    but also to upgrade from previous releases.</p>
                <p>To upgrade:</p>
                <ul>
                    <li><a href="/downloads/">Download the ISO</a> and burn it on a DVD;</li>
                    <li>Boot the DVD and select "Install Mageia 1" from the bootloader menu;</li>
                    <li>Select the "Upgrade" option in the installer.</li>
                </ul>
                <p>It is recommended to set up the online repositories, if possible
                    &ndash; the installer will ask you about this during the upgrade.
                    The reason is that the DVD only includes a subset
                    of these full fledged online Mageia repositories.</p>
                <hr>
                <h2 id="inline">Upgrading inline</h2>
                <p>You can upgrade using the online media sources directly, from within your Mandriva installation.</p>
                <p>This can be done either using the graphical <code>mgaonline</code> tool
                    or the command-line <code>urpmi</code>.
                    Both methods are outlined below. But first, download and install
                    this <code>mgaonline</code> package that will help you through the process:</p>
                
                <p style="text-align: center;"><a href="mgaonline-2.77.29-1.mga1.noarch.rpm" rel="nofollow" title="Download mgaonline"><img src="/g/images/oxygen/application-x-rpm.png" alt="mgaonline"><br>
                    mgaonline<br>
                    for Mandriva Linux<br> 2010.1 or 2010.2</a></p>
                
                <br>
                <h2 id="mgaonline">Upgrading inline, using mgaonline (GUI)</h2>
                <p>Just launch <code>mgaapplet</code>.</p>
                
                <p>It will notify you of the availability of the new Mageia 1 distribution,
                    configure Mageia media sources and start the migration.</p>
                
                <br>
                <h2 id="urpmi">Upgrading inline, using urpmi (CLI)</h2>
                <p>You can also upgrade using <code>urpmi</code> from your favourite terminal emulator,
                    if you are confortable with it. Here are the steps:</p>
                <ul>
                    <li><p>Remove all the existing media sources on your system:</p>
                        <p><code class="term">$ su<br />
                        # urpmi.removemedia -a</code></p></li>
                    <li><p>Add the Mageia online sources:</p>
                    <ul>
                        <li><p>either directly (this will select a best matching mirror, after your location):</p>
                            <p><code class="term">$ su<br />
                            # urpmi.addmedia --distrib --mirrorlist</code></p>
                        </li>
                        <li><p>either using a specific media mirror (you can decide from <a href="http://mirrors.mageia.org/distrib">our mirrors list</a>):</p>
                            <p><code class="term">$ su<br />
                            # urpmi.addmedia --distrib &lt;media_url&gt;</code></p>
                        </li>
                    </ul>
                    </li>
                </ul>
                <hr>
                <h2>That's it!</h2>
                <hr>
            </div></div>
            <div class="yui-g">
                <div class="yui-u first"><div class="para" style="padding-right: 0;">
                    <h3>Have a question?</h3>
                    <p>Do not hesitate to join our <a href="irc://irc.freenode.net/#mageia">#mageia</a>
                        IRC channel on Freenode or go in <a href="http://forums.mageia.org/">our forum</a>
                        to ask for assistance or details.</p>

                </div></div>
                <div class="yui-u"><div class="para">
                    <h3>Want to send some feedback?</h3>
                    <p>Just <a href="http://twitter.com/mageia_org">tweet it to @mageia_org</a>.</p>
                </div></div>
            </div>
        </div>
    </div>
</body>
</html>
