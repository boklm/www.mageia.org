<?php

$locale = explode('/', $_SERVER['REQUEST_URI']);
$locale = $locale[1];

require 'locales.php';
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
    <!-- just a workarround -->
    <!-- end of the workarround -->
    <link rel="canonical" href="/<?php echo $locale; ?>/1/notes/">
    <?php include '../../../analytics.php'; ?>
</head>
<body class="release">
    <?php include '../../../langs.php'; ?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner">
            <h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh"><?php echo $_t['page_h1']; ?></span></h1>
        </div>
        <?php include '../nav.php'; ?>

        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para">
                    <div class="qsidesummary">
                        <ul>
                            <li><a href="#features">Major features</a>
                                <ul>
                                    <li>Packagement management</li>
                                    <li>System configuration</li>
                                    <li>Migration from Mandriva Linux</li>
                                    <li>Desktop Environments</li>
                                    <li>Desktop Apps</li>
                                    <li>Base system</li>
                                    <li>X Server</li>
                                </ul></li>
                            <li><a href="#pro">Available Installation Methods</a></li>
                            <li><a href="#hw">Hardware Requirements</a></li>
                        </ul>
                    </div>
                    <p>Mageia 1 marks the milestone of a lot of hard work, that has started since the day the
                    <a href="https://www.mageia.org/en/about/2010-sept-announcement.html">Mageia distribution was born</a>.</p>
                    <p>This page gives an overview of what Mageia offers to you.</p>
                    <hr>
                    <div class="clear"></div>
                    <h2>Major features in Mageia</h2>

                    <h3>Package Management tools</h3>
                    <p>Mageia uses the all too familiar urpmi, this the default dependency resolver in Mageia, you can use to
                    install RPM packages on the system. It can also be used to update the system, for the full usage details check
                    the urpmi man page.</p>
                    <p>The rest of the family are:
                    <ul>
                        <li><span style="font-weight:bold;">urpme:</span>
                            used to uninstall RPM packages installed on the system, with many command line options</li>
                        <li><span style="font-weight:bold;">urpmf:</span>
                            a tool that can be used to show what package contains a certain file; it can also be used to search for
                            all sorts of RPM tags (requires, suggests, conflicts, obsoletes) in the packages in the official
                            repositories, among other features</li>
                        <li><span style="font-weight:bold;">urpmq:</span>
                            the urpmi database query tool, think of it as 'rpm -q' but with many more extended features, that can
                            be used to check RPM packages in the official repositories</li>
                        <li><span style="font-weight:bold;">urpmi.update:</span>
                            a tool to update the urpmi database on the user's installation, it can also be used to disable (ignore)
                            configured media sources on the system</li>
                        <li><span style="font-weight:bold;">urpmi.addmedia:</span>
                            a tool to add the Mageia media sources (online (http, ftp, rsync) and local alike)</li>
                        <li><span style="font-weight:bold;">urpmi.removemedia:</span>
                            a tool to remove the media sources configured on the system</li>
                    </ul>
                    </p>

                    <h3>Mageia system configuration tools</h3>
                    <p>Mageia will go on using all the familiar drak tools; here're the highlights:
                    <ul>
                        <li><span style="font-weight:bold;">drakconf:</span>
                            The Mageia control center, which can be used to launch all sorts of system administration tools</li>
                        <li><span style="font-weight:bold;">drak3d:</span>
                            A tool to to configure 3D desktop effects (e.g. Compiz)</li>
                        <li><span style="font-weight:bold;">drakguard:</span>
                            A tool that allows to configure parental control. It can block access to web sites and restrict the
                            internet connection to specific timeframe</li>
                        <li><span style="font-weight:bold;">rpmdrake:</span>
                            A simple interface that makes it easy to install and remove software packages (RPM) in Mageia</li>
                        <li><span style="font-weight:bold;">drakx-net:</span>
                            The default Mageia network tools</li>
                        <li><span style="font-weight:bold;">userdrake:</span>
                            A user-friendly and powerful tool for administrating users and groups</li>
                        <li><span style="font-weight:bold;">system-config-printer:</span>
                            A powerful printer configuration tool, developed by Redhat/Fedora</li>
                    </ul>
                    </p>

                    <h3><a href="../migrate/">Migration from Mandriva Linux</a></h3>
                    <p>If you are using Mandriva Linux 2010.1 or 2010.2,
                        see our <a href="../migrate">migration guide</a>.</p>

                    <h3>Available Desktop Environments</h3>
                    <p>As a desktop-agnostic distribution, Mageia has all the popular desktop environments, along with various
                    window managers. Here's an overview of them:</p>
                    <h4>KDE4</h4>
                    <p>Mageia 1 will ship KDE SC 4.6.3. This release brings many improvements and new features for more details
                    check the <a href="http://www.kde.org/announcements/4.6/">release announcement</a>.</p>
                    <h4>GNOME</h4>
                    <p>Mageia 1 will ship GNOME 2.32, with the plethora of popular applications that come with it (Totem, Rhythmbox,
                    Epiphany, Evolution, The GNOME Archiver (file-roller), Evince, F-Spot… etc).</p>
                    <h4>XFCE4</h4>
                    <p>Mageia 1 will ship the latest stable version, 4.8.1, of XFCE, it brings many improvements, for the full details
                    have a look at the XFCE 4.8 <a href="http://xfce.org/about/news/?post=1295136000">release announcement</a>.</p>
                    <h4>LXDE</h4>
                    <p>Mageia 1 will ship the latest stable LXDE packages (PCManFM, LXSession, LXTerminal, Gpicview, LXRandR).</p>
                    <h4>Window Managers</h4>
                    <p>Mageia 1 will ship various window managers, which in reality they're just small and very light weight desktop
                    environments:
                    <ul>
                        <li>Openbox</li>
                        <li>WindowMaker</li>
                        <li>IceWM</li>
                        <li>Fluxbox</li>
                        <li>Fvwm2</li>
                    </ul>

                    <h3>Desktop Applications</h3>
                    <p>Mageia 1 will ship a lot of the popular desktop applications, here are the highlights.</p>
                    <h4>Web Browsers and email clients</h4>
                    <p>
                    <ul>
                        <li><span style="font-weight:bold;"><a href="http://www.mozilla.com/firefox/">Firefox</a>:</span>
                            Firefox 4.0.1 will be shipped with Mageia 1, this new release brings with it a lot of improvements concerning all aspects of Firefox, for more info have a look at the <a href="http://www.mozilla.com/en-US/firefox/4.0/releasenotes/">Firefox 4 release notes</a></li>
                        <li><span style="font-weight:bold;"><a href="http://www.chromium.org/Home">Chromium-Browser</a>:</span>
                            Google Chromium-browser 11.0.696.65 will be shipped with Mageia 1, and for users' convenience the Chromium-browser comes in three different flavours, stable, beta and unstable, each one following a different upstream channel/branch, needless to say that beta and unstable are not for the weak of heart!</li>
                        <li><span style="font-weight:bold;"><a href="http://www.gnome.org/projects/epiphany/">Epiphany</a>:</span>
                            The latest stable version, 2.30.6, of the GNOME web browser based on the webkit rendering engine is available in the Mageia repos</li>
                        <li><span style="font-weight:bold;"><a href="http://pim.kde.org/">KMail</a>:</span>
                            The latest stable version, 4.4.11.1, of the famous KDE4 email client will be shipped in Mageia 1</li>
                        <li><span style="font-weight:bold;"><a href="http://www.mozillamessaging.com/thunderbird">Thunderbird</a>:</span>
                            The latest stable version of the famous email client from Mozilla, Thunderbird 3.1.10, is available in the online repositories, with all the improvements and fixes in the 3.1.x series, for more info have a look a the <a href="http://www.mozillamessaging.com/en-US/thunderbird/3.1.10/releasenotes/">release notes</a>. Both the Enigmail and Lightning extensions are available too</li>
                        <li><span style="font-weight:bold;"><a href="http://www.gnome.org/projects/evolution/">Evolution</a>:</span>
                            The latest stable version, 2.32.2, of the famous GNOME mailer, calendar, contact manager and communications tool will be shipped in Mageia 1</li>
                    </ul>
                    </p>
                    <h4>Office</h4>
                    <p>
                    <ul>
                        <li><span style="font-weight:bold;"><a href="http://www.documentfoundation.org/develop">LibreOffice</a>:</span>
                            <a href="http://blog.mageia.org/en/?p=190">Mageia promised to fully support LibreOffice</a> and it's kept its promise, the stable LibreOffice 3.3.2.2 is available the Mageia repositories, bringing a full suite of office applications</li>
                        <li><span style="font-weight:bold;"><a href="http://www.calligra-suite.org/">Calligra</a>:</span>
                            The Calligra Suite project is a continuation of the KOffice project, it has all the familiar components of KOffice, for a detailed list of available applications and what they can do check their web site</li>
                        <li><span style="font-weight:bold;"><a href="http://techbase.kde.org/Projects/KMyMoney">KmyMoney</a>:</span>
                            The latest, stable, KmyMoney 4.5.3, personal finance manager for KDE4 is already in the online repositories, its mainly focuses on being accurate, easy to use and feature-full with all the familiar features you'd expect in a finance manager</li>
                        <li><span style="font-weight:bold;"><a href="http://skrooge.org/">Skrooge</a>:</span>
                            with the philosophy of giving users options, Skrooge 0.8.1 is available in the Mageia repositories too, a personal finance manager for KDE4, it aims to be highly intuitive, while providing powerful functions</li>
                        <li><span style="font-weight:bold;"><a href="http://www.gnucash.org/">GnuCash</a>:</span>
                            GnuCash 2.4.5 is available in the online repositories, it's comes with a check-book like register GUI allows you to enter and track your financial matters</li>
                    </ul>
                    </p>
                    <h4>Communications</h4>
                    <p><span style="font-weight:bold;padding-left:1.2em;">Instant Messaging</span>
                    <ul>
                        <li><span style="font-weight:bold;"><a href="http://kopete.kde.org/">Kopete</a>:</span>
                            The latest stable version of the familiar instant messenger, part of KDE SC 4.6.3, is available, with support for a wide variety of instant messaging protocol</li>
                        <li><span style="font-weight:bold;"><a href="http://www.pidgin.im/">Pidgin</a>:</span>
                            The latest stable version, 2.7.11, of the famous GTK+2.0 based instant messaging client is available in the online repositories, it supports a plethora of instant messaging protocols, for more details about the fixes and improvements this version brings have a look at the <a href="http://developer.pidgin.im/wiki/ChangeLog">changelog</a></li>
                        <li><span style="font-weight:bold;"><a href="http://live.gnome.org/Empathy">Empathy</a>:</span>
                            Empathy is an IM client based on the Telepathy framework, Empathy 2.34.0 will be shipped with Mageia 1</li>
                        <li><span style="font-weight:bold;"><a href="http://www.kadu.net/">Kadu</a>:</span>
                            An instant messenger compatible with the Gadu-Gadu protocol, the latest stable version, 0.9.1, will be shipped in Mageia 1</li>
                    </ul>
                    </p>
                    <p><span style="font-weight:bold;padding-left:1.2em;">IRC</span>
                    <ul>
                        <li><span style="font-weight:bold;"><a href="http://quassel-irc.org/">Quassel</a>:</span>
                            The latest stable version, 0.7.2, of Quassel, a Qt-based modern distributed IRC client is available in the online repositories</li>
                        <li><span style="font-weight:bold;"><a href="http://konversation.kde.org/">Konversation</a>:</span>
                            A feature-full graphical IRC client with KDE support, the latest stable version, 1.3.1, is available in the Mageia online repositories</li>
                        <li><span style="font-weight:bold;"><a href="http://xchat-gnome.navi.cx/">XChat-gnome</a>:</span>
                            A Graphical IRC client for the GNOME desktop, the latest stable version, 0.26.1, is available in the repositories</li>
                        <li><span style="font-weight:bold;"><a href="http://www.kvirc.net/">KVIrc</a>:</span>
                            A Qt-based IRC client with support for themes, transparency, encryption, many extended IRC features, and scripting, the latest stable version, 4.0.4, is available in the repositories</li>
                    </ul>
                    </p>
                    <p><span style="font-weight:bold;padding-left:1.2em;">VOIP</span>
                    <ul>
                        <li><span style="font-weight:bold;"><a href="http://www.qutecom.com/">QuteCom</a>:</span>
                            A SIP softphone which allows you to make free PC to PC video and voice calls, and to integrate all your IM contacts in one place, it's Qt-based. The latest stable version 2.2 will be shipped with Mageia 1</li>
                        <li><span style="font-weight:bold;"><a href="http://www.ekiga.org/">Ekiga</a>:</span>
                            A tool to communicate with video and audio over the internet. It uses both SIP and H323 protocol and is compatible with Microsoft Netmeeting. It used to be called GnomeMeeting. The latest stable version, 3.2.7, will be shipped with Mageia 1</li>
                    </ul>
                    </p>
                    <h4>Virtualisation</h4>
                    <p>
                    <ul>
                        <li><span style="font-weight:bold;"><a href="http://www.virtualbox.org/">VirtualBox</a>:</span>
                            Version 4.0.6, of the general-purpose full virtualizer is available in the Mageia repositories</li>
                        <li><span style="font-weight:bold;"><a href="http://virt-manager.et.redhat.com/">virt-manager</a>:</span>
                            Mageia ship the latest version of virt-manager ( and libvirtd ), the popular management toolset for virtualisation, along with binding for various languges, to ease the management of virtual machines, either based on kvm or xen.</li>
                        <li><span style="font-weight:bold;"><a href="http://www.winehq.org/">WINE</a>:</span>
                            The latest development version of WINE, 1.3.20, is available in the repositories; you can be assured that you'll usually find the latest version of this famous application in the Backports repository shortly after upstream pushes a new release!</li>
                    </ul>
                    </p>
                    <h4>Graphics</h4>
                    <p>
                    <ul>
                        <li><span style="font-weight:bold;"><a href="http://www.gimp.org/">Gimp</a>:</span>
                            The latest stable version, 2.6.11, of the famous GNU Image Manipulation Program will be shipped with Mageia 1</li>
                        <li><span style="font-weight:bold;"><a href="http://inkscape.sourceforge.net/">Inkscape</a>:</span>
                            The latest version, 0.48.1, of the famous SVG-based vector-drawing program will be shipped in Mageia 1</li>
                        <li><span style="font-weight:bold;">Blender<a href="http://www.blender.org/"></a>:</span>
                            The high quality animation studio, the latest version, 2.49b, will be shaped in Mageia 1</li>
                    </ul>
                    </p>
                    <h4>IDEs</h4>
                    <p>
                    <ul>
                        <li><span style="font-weight:bold;"><a href="http://anjuta.org/">Anjuta</a>:</span>
                            A powerful GNOME IDE for C, C++, Python, Java,…</li>
                        <li><span style="font-weight:bold;"><a href="http://www.eclipse.org/">Eclipse</a>:</span>
                            The well known IDE for Java and other languages</li>
                        <li><span style="font-weight:bold;"><a href="http://netbeans.org/">Netbeans</a>:</span>
                            The equally well known alternative for eclipse</li>
                        <li><span style="font-weight:bold;"><a href="http://kdevelop.org/">KDevelop</a>:</span>
                            The KDE IDE</li>
                    </ul>
                    <p>
                    <h3>Base System</h3>
                    <p>
                    <ul>
                        <li>Mageia 1 will ship the 2.6.38 kernel series, specifically 2.6.38.7 at release time, for more details on
                            the improvements in this kernel series have a look <a href="http://kernelnewbies.org/Linux_2_6_38">here</a>; the highlights of this kernel:
                        <ul>
                            <li>Support for automatic process grouping (for more details see Linus Torvalds' post on <a href="http://lkml.org/lkml/2011/1/18/322">LKML</a> (Linux Kernel Mailing list); and mentions of that patch on <a href="https://lwn.net/Articles/418884/">LWN.net</a>)</li>
                            <li>Significant scalability improvements in the Linux VFS (Virtual File System) layer</li>
                            <li>Transparent Huge Page support (without using hugetblfs)</li>
                            <li>Automatic spreading of outgoing network traffic across multiple CPUs</li>
                            <li>Support for the AMD Fusion APUs</li>
                            <li>Support for Intel Sandy Bridge and Panther Point.</li>
                            <li>Ipset 6.4 with IPv6 support</li>
                        </ul></li>
                        <li>Boot system: Mageia 1 still uses initscripts, 9.21</li>
                        <li>ALSA: Mageia 1 will ship the latest stable version(s) of the Advanced Linux Sound Architecture,
                            1.0.24.x:
                        <ul>
                            <li>libalsa2-1.0.24.1</li>
                            <li>alsa-plugins-1.0.24</li>
                            <li>alsa-tools-1.0.24.1: The firmware bits have been split in a new separate package, alsa-firmware</li>
                            <li>alsa-utils-1.0.24.2</li>
                        </ul></li>
                    </ul>
                    </p>
                    <h3>X server</h3>
                    <p>
                    <ul>
                        <li>Mageia 1 will ship X server 1.10.1, with full Udev support (Udev replaces HAL in this regard)</li>
                        <li>ATI/AMD free radeon driver: Kernel Mode Setting is now enabled by default, bringing performance and compatibility improvements.</li>
                        <li>Intel Sandy Bridge (2nd Generation Intel® Core™ i7/i5/i3) support according to <a href="http://intellinuxgraphics.org/2011Q1.html">Intel specifications</a>.</li>
                        <li>Nouveau: the Nouveau driver will be used by default for supported nVidia graphics cards. It brings Kernel Mode Setting support, 2D acceleration, and RandR 1.2 support (for easy multi-monitor setup)</li>
                    </ul>
                    </p>
                    <h4>Proprietary graphics cards drivers</h4>
                    <p>The latest versions of both the nVidia and ATI (fglrx) proprietary drivers are available in the Nonfree online repository.</p>

                    <h3>Input Methods</h3>
                    <p>To select the Input Method of your choice, you can use draklocale (“Manage localization of your system” in the Mageia Control Center &rarr; System). Mageia 1 will have two input methods:</p>
                    <h4>IBus</h4>
                    <p>Mageia 1 will support IBus (the Intelligent Input Bus), version 1.3.9 is already available in the official repositories.</p>
                    <h4>SCIM</h4>
                    <p>SCIM (Smart Common Input Method), version 1.4.9, is also available in the official repositories.</p>
                    <hr>
                    
                    <h2>Available installation media</h2>
                    <p>Mageia has two distinctive installation media types:
                    <ul>
                        <li>DVD ISO and Dual-arch CD ISO, which use the drakx traditional installer and</li>
                        <li>Live CD ISO, this is a live ISO which can be used to preview the distribution and can also be
                            used to install Mageia on your HDD</li>
                    </ul>
                    For more information have a look at the <a href="http://www.mageia.org/wiki/doku.php?id=mageia_installation_media">Mageia installation media page</a>.<br />
                    You'll always find the download info on the <a href="http://mageia.org/downloads/">Mageia download page</a>;
                    direct (ftp and http) and BitTorrent downloads are available.</p>
                    <hr>

                    <h2>Software online repositories</h2>
                    <p>The packages in Mageia exist in three different repositories/media, depending on what license each package
                    uses.<br />
                    Here's an overview of those repositories:
                    <ul>
                        <li><span style="font-weight:bold;">Core:</span>
                            The Core repository includes packages with free-open-source software, i.e. packages
                            licensed under a free-open-source license, the set of the Core media are added by default and the
                            “Core Release” and “Core Updates” are enabled by default</li>
                        <li><span style="font-weight:bold;">Nonfree:</span>
                            The Nonfree repository includes packages that are free-of-charge, i.e. Mageia can
                            redistribute them, but they contain closed-source software (hence the Nonfree name); For example this
                            repository includes the nVidia and ATI graphics cards proprietary drivers, firmware for various Wi-Fi
                            cards… etc. The set of the Nonfree media is added by default and the “Nonfree Release” and
                            “Nonfree Updates” are enabled by default</li>
                        <li><span style="font-weight:bold;">Tainted:</span>
                            The Tainted repository includes packages under various licenses, free and nonfree ones, but the main
                            criteria for packages in this repository is that they may infringe patents and copyright laws in some
                            countries in the world (e.g. multimedia codecs needed to play various audio/video files, packages needed
                            to play commercial video DVD… etc); as such the set of the Tainted media is added by default but
                            <span style="font-weight:bold;">not</span> enabled by default, i.e. it's completely opt-in; so check
                            your local laws before using packages from this repository. This repository is only added for the
                            convenience of the users. This repository is to    Mageia what PLF is to Mandriva users or RPM Fusion is
                            to Fedora users.</li>
                    </ul>
                    </p>
                    <hr>
                </div>
            </div>
            <div class="yui-g bb1">
                <div class="yui-u first rb1">
                </div>
                <div class="yui-u">
                </div>
            </div>
            <?php include '../nav.php'; ?>
        </div>
    </div>
</body>
</html>
