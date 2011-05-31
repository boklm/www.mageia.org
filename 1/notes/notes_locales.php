<?php

$_t = array(
    'en' => array(
		'page_title' => 'Mageia 1 Release Notes',
		'page_desc' => 'Notes of the Mageia 1 release',
		'page_kw' => 'mageia, release notes, Mga1',
		'page_h1' => 'Release Notes',
        'major_features' => 'Major features',
        'major_features_array' => array('Packagement management',
                'System configuration',
                'Migration from Mandriva Linux',
                'Desktop Environments',
                'Desktop Apps',
                'Base system',
                'X Server'),
        'installation_methods' => 'Available Installation Methods',
        'support' => 'Support',
        'hw_req' => 'Hardware Requirements',
        'mageia_milestone' => 'Mageia 1 marks the milestone of a lot of hard work, that has started since the day the
                    <a href="https://www.mageia.org/en/about/2010-sept-announcement.html">Mageia distribution was born</a>.',
        'overview' => 'This page gives an overview of what Mageia offers to you.',
        'h2_major_features' => 'Major features in Mageia',
        'h3_package_management' => 'Package Management tools',
        'text_package_management_1' => 'Mageia uses the all too familiar urpmi, this the default dependency resolver in Mageia,
                    you can use to install RPM packages on the system. It can also be used to update the system, for the full
                    usage details check the urpmi man page.',
        'text_package_management_2' => 'The rest of the family are:',
        'array_package_management' => array('<span style="font-weight:bold;">urpme:</span>
                            used to uninstall RPM packages installed on the system, with many command line options',
                '<span style="font-weight:bold;">urpmf:</span>
                            a tool that can be used to show what package contains a certain file; it can also be used to search for
                            all sorts of RPM tags (requires, suggests, conflicts, obsoletes) in the packages in the official
                            repositories, among other features',
                '<span style="font-weight:bold;">urpmq:</span>
                            the urpmi database query tool, think of it as \'rpm -q\' but with many more extended features, that can
                            be used to check RPM packages in the official repositories',
                '<span style="font-weight:bold;">urpmi.update:</span>
                            a tool to update the urpmi database on the user\'s installation, it can also be used to disable (ignore)
                            configured media sources on the system',
                '<span style="font-weight:bold;">urpmi.addmedia:</span>
                            a tool to add the Mageia media sources (online (http, ftp, rsync) and local alike)',
                '<span style="font-weight:bold;">urpmi.removemedia:</span>
                            a tool to remove the media sources configured on the system'),
        'h3_system_configuration' => 'Mageia system configuration tools',
        'text_system_configuration' => 'Mageia will go on using all the familiar drak tools; here\'re the highlights:',
        'array_system_configuration' => array('<span style="font-weight:bold;">drakconf:</span>
                            The Mageia control center, which can be used to launch all sorts of system administration tools',
                '<span style="font-weight:bold;">drak3d:</span>
                            A tool to to configure 3D desktop effects (e.g. Compiz)',
                '<span style="font-weight:bold;">drakguard:</span>
                            A tool that allows to configure parental control. It can block access to web sites and restrict the
                            internet connection to specific timeframe',
                '<span style="font-weight:bold;">rpmdrake:</span>
                            A simple interface that makes it easy to install and remove software packages (RPM) in Mageia',
                '<span style="font-weight:bold;">drakx-net:</span>
                            The default Mageia network tools',
                '<span style="font-weight:bold;">userdrake:</span>
                            A user-friendly and powerful tool for administrating users and groups',
                '<span style="font-weight:bold;">system-config-printer:</span>
                            A powerful printer configuration tool, developed by Redhat/Fedora'),
        'h3_migration' => '<a href="../migrate/">Migration from Mandriva Linux</a>',
        'text_migration' => 'If you are using Mandriva Linux 2010.1 or 2010.2,
                        see our <a href="../migrate">migration guide</a>.',
        'h3_available_des' => 'Available Desktop Environments',
        'text_available_des' => 'As a desktop-agnostic distribution, Mageia has all the popular desktop environments, along with various
                    window managers. Here\'s an overview of them:',
        'h4_kde' => 'KDE4',
        'text_kde' => 'KDE SC 4.6.3. This release brings many improvements and new features for more details
                    check the <a href="http://www.kde.org/announcements/4.6/">release announcement</a>.',
        'h4_gnome' => 'GNOME',
        'text_gnome' => 'GNOME 2.32, with the plethora of popular applications that come with it (Totem, Rhythmbox,
                    Epiphany, Evolution, The GNOME Archiver (file-roller), Evince, F-Spot… etc).',
        'h4_xfce' => 'XFCE4',
        'text_xfce' => 'The latest stable version, 4.8.1, of XFCE, it brings many improvements, for the full details
                    have a look at the XFCE 4.8 <a href="http://xfce.org/about/news/?post=1295136000">release announcement</a>.',
        'h4_lxde' => 'LXDE',
        'text_lxde' => 'Latest stable LXDE packages (PCManFM, LXSession, LXTerminal, Gpicview, LXRandR).',
        'h4_wms' => 'Window Managers',
        'text_wms' => 'Various other window managers, which in reality they\'re just small and very lightweight desktop
                    environments:',
        'array_wms' => array('Openbox',
                'WindowMaker',
                'IceWM',
                'Fluxbox',
                'Fvwm2'),
        'h3_desktop_apps' => 'Desktop Applications',
        'text_desktop_apps' => 'A lot of the popular desktop applications, here are the highlights.',
        'h4_web_and_mail' => 'Web Browsers and email clients',
        'array_web_and_mail' => array('<span style="font-weight:bold;"><a href="http://www.mozilla.com/firefox/">Firefox</a>:</span>
                            Firefox 4.0.1., this new release brings with it a lot of improvements concerning all aspects of Firefox, for more info have a look at the <a href="http://www.mozilla.com/en-US/firefox/4.0/releasenotes/">Firefox 4 release notes</a>',
                '<span style="font-weight:bold;"><a href="http://www.chromium.org/Home">Chromium-Browser</a>:</span>
                            Google Chromium-browser 11.0.696.65., and for users\' convenience the Chromium-browser comes in three different flavours, stable, beta and unstable, each one following a different upstream channel/branch, needless to say that beta and unstable are not for the weak of heart!',
                '<span style="font-weight:bold;"><a href="http://www.gnome.org/projects/epiphany/">Epiphany</a>:</span>
                            The latest stable version, 2.30.6, of the GNOME web browser based on the webkit rendering engine is available in the Mageia repos',
                '<span style="font-weight:bold;"><a href="http://pim.kde.org/">KMail</a>:</span>
                            The latest stable version, 4.4.11.1, of the famous KDE4 email client',
                '<span style="font-weight:bold;"><a href="http://www.mozillamessaging.com/thunderbird">Thunderbird</a>:</span>
                            The latest stable version of the famous email client from Mozilla, Thunderbird 3.1.10, is available in the online repositories, with all the improvements and fixes in the 3.1.x series, for more info have a look at the <a href="http://www.mozillamessaging.com/en-US/thunderbird/3.1.10/releasenotes/">release notes</a>. Both Enigmail and Lightning extensions are available too',
                '<span style="font-weight:bold;"><a href="http://www.gnome.org/projects/evolution/">Evolution</a>:</span>
                            The latest stable version, 2.32.2, of the famous GNOME mailer, calendar, contact manager and communications tool.'),
        'h4_office' => 'Office',
        'array_office' => array('<span style="font-weight:bold;"><a href="http://www.documentfoundation.org/develop">LibreOffice</a>:</span>
                            <a href="http://blog.mageia.org/en/?p=190">Mageia promised to fully support LibreOffice</a> and it\'s kept its promise, the stable LibreOffice 3.3.2.2 is available the Mageia repositories, bringing a full suite of office applications',
                '<span style="font-weight:bold;"><a href="http://www.calligra-suite.org/">Calligra</a>:</span>
                            The Calligra Suite project is a continuation of the KOffice project, it has all the familiar components of KOffice, for a detailed list of available applications and what they can do check their web site',
                '<span style="font-weight:bold;"><a href="http://techbase.kde.org/Projects/KMyMoney">KmyMoney</a>:</span>
                            The latest stable version, 4.5.3 personal finance manager for KDE4 is already in the online repositories, its mainly focuses on being accurate, easy to use and fully featured with all the familiar features you\'d expect in a finance manager',
                '<span style="font-weight:bold;"><a href="http://skrooge.org/">Skrooge</a>:</span>
                            with the philosophy of giving users options, Skrooge 0.8.1 is available in the Mageia repositories too, a personal finance manager for KDE4, it aims to be highly intuitive, while providing powerful functions',
                '<span style="font-weight:bold;"><a href="http://www.gnucash.org/">GnuCash</a>:</span>
                            GnuCash 2.4.5 is available in the online repositories, it\'s comes with a check-book like register GUI that allows you to enter and track your financial matters'),
        'h4_communication' => 'Communications',
        'h5_im' => 'Instant Messaging',
        'array_im' => array('<span style="font-weight:bold;"><a href="http://kopete.kde.org/">Kopete</a>:</span>
                            The latest stable version of the familiar instant messenger, part of KDE SC 4.6.3, is available with support for a wide variety of instant messaging protocol',
                '<span style="font-weight:bold;"><a href="http://www.pidgin.im/">Pidgin</a>:</span>
                            The latest stable version, 2.7.11, of the famous GTK+2.0 based instant messaging client is available in the online repositories, it supports a plethora of instant messaging protocols. For more details about the fixes and improvements this version brings have a look at the <a href="http://developer.pidgin.im/wiki/ChangeLog">changelog</a>',
                '<span style="font-weight:bold;"><a href="http://live.gnome.org/Empathy">Empathy</a>:</span>
                            Empathy is an IM client based on the Telepathy framework, Empathy 2.34.0.',
                '<span style="font-weight:bold;"><a href="http://www.kadu.net/">Kadu</a>:</span>
                            An instant messenger compatible with the Gadu-Gadu protocol. The latest stable version, 0.9.1'),
        'h5_irc' => 'IRC',
        'array_irc' => array('<span style="font-weight:bold;"><a href="http://quassel-irc.org/">Quassel</a>:</span>
                            The latest stable version, 0.7.2, of Quassel, a Qt-based modern distributed IRC client is available in the online repositories',
                '<span style="font-weight:bold;"><a href="http://konversation.kde.org/">Konversation</a>:</span>
                            A fully featured graphical IRC client with KDE support, the latest stable version, 1.3.1, is available in the Mageia online repositories',
                '<span style="font-weight:bold;"><a href="http://xchat-gnome.navi.cx/">XChat-gnome</a>:</span>
                            A graphical IRC client for the GNOME desktop. The latest stable version, 0.26.1, is available in the repositories',
                '<span style="font-weight:bold;"><a href="http://www.kvirc.net/">KVIrc</a>:</span>
                            A Qt-based IRC client with support for themes, transparency, encryption, many extended IRC features, and scripting. The latest stable version, 4.0.4, is available in the repositories'),
        'h5_voip' => 'VOIP',
        'array_voip' => array('<span style="font-weight:bold;"><a href="http://www.qutecom.com/">QuteCom</a>:</span>
                            A SIP softphone which allows you to make free PC to PC video and voice calls, and to integrate all your IM contacts in one place, it\'s Qt-based. The latest stable version 2.2.',
                '<span style="font-weight:bold;"><a href="http://www.ekiga.org/">Ekiga</a>:</span>
                            A tool to communicate with video and audio over the internet. It uses both SIP and H323 protocol and is compatible with Microsoft Netmeeting. It used to be called GnomeMeeting. The latest stable version, 3.2.7,.'),
        'h4_virt' => 'Virtualisation',
        'array_virt' => array('<span style="font-weight:bold;"><a href="http://www.virtualbox.org/">VirtualBox</a>:</span>
                            Version 4.0.6, of the general-purpose full virtualizer is available in the Mageia repositories',
                '<span style="font-weight:bold;"><a href="http://virt-manager.et.redhat.com/">virt-manager</a>:</span>
                            Mageia ships with the latest version of virt-manager (and libvirtd), the popular management toolset for virtualisation, along with binding for various languges, to ease the management of virtual machines, either based on kvm or xen.',
                '<span style="font-weight:bold;"><a href="http://www.winehq.org/">WINE</a>:</span>
                            The latest development version of WINE, 1.3.20, is available in the repositories; you can be assured that you\'ll usually find the latest version of this famous application in the Backports repository shortly after upstream pushes a new release!'),
        'h4_graphics' => 'Graphics',
        'array_graphics' => array('<span style="font-weight:bold;"><a href="http://www.gimp.org/">Gimp</a>:</span>
                            version 2.6.11 of the famous GNU Image Manipulation Program.',
                '<span style="font-weight:bold;"><a href="http://inkscape.sourceforge.net/">Inkscape</a>:</span>
                            version 0.48.1 of the famous SVG-based vector-drawing program.',
                '<span style="font-weight:bold;">Blender<a href="http://www.blender.org/"></a>:</span>
                            The high quality animation studio. Version 2.49b.'),
        'h4_ides' => 'IDEs',
        'array_ides' => array('<span style="font-weight:bold;"><a href="http://anjuta.org/">Anjuta</a>:</span>
                            A powerful GNOME IDE for C, C++, Python, Java,…',
                '<span style="font-weight:bold;"><a href="http://www.eclipse.org/">Eclipse</a>:</span>
                            The well known IDE for Java and other languages',
                '<span style="font-weight:bold;"><a href="http://netbeans.org/">Netbeans</a>:</span>
                            The equally well known alternative for eclipse',
                '<span style="font-weight:bold;"><a href="http://kdevelop.org/">KDevelop</a>:</span>
                            The KDE IDE'),
        'h3_base_system' => 'Base System',
        'kernel' => 'Mageia ships with the 2.6.38 kernel series, specifically 2.6.38.7 at release time, for more details on
                            the improvements in this kernel series have a look <a href="http://kernelnewbies.org/Linux_2_6_38">here</a>; the highlights of this kernel:',
        'kernel_array' => array('Support for automatic process grouping (for more details see Linus Torvalds\' post on
                            <a href="http://lkml.org/lkml/2011/1/18/322">LKML</a> (Linux Kernel Mailing list); and mentions of
                            that patch on <a href="https://lwn.net/Articles/418884/">LWN.net</a>)',
                'Significant scalability improvements in the Linux VFS (Virtual File System) layer',
                'Transparent Huge Page support (without using hugetblfs)',
                'Automatic spreading of outgoing network traffic across multiple CPUs',
                'Support for the AMD Fusion APUs',
                'Support for Intel Sandy Bridge and Panther Point.',
                'Ipset 6.4 with IPv6 support'),
        'initscripts' => 'Boot system: still uses initscripts, 9.21',
        'alsa' => 'ALSA 1.0.24.x:',
        'alsa_array' => array('libalsa2-1.0.24.1',
                'alsa-plugins-1.0.24',
                'alsa-tools-1.0.24.1: The firmware bits have been split in a new separate package, alsa-firmware',
                'alsa-utils-1.0.24.2'),
        'h3_x' => 'X server',
        'array_x' => array('X server 1.10.1, with full Udev support (Udev replaces HAL in this regard)',
                'ATI/AMD free radeon driver: Kernel Mode Setting is now enabled by default, bringing performance and compatibility improvements.',
                'Intel Sandy Bridge (2nd Generation Intel® Core™ i7/i5/i3) support according to <a href="http://intellinuxgraphics.org/2011Q1.html">Intel specifications</a>.',
                'Nouveau: the Nouveau driver is used by default for supported nVidia graphics cards. It brings Kernel Mode Setting support, 2D acceleration, and RandR 1.2 support (for easy multi-monitor setup)'),
        'h4_proprietary' => 'Proprietary graphics cards drivers',
        'text_proprietary' => 'The latest versions of both the nVidia and ATI (fglrx) proprietary drivers are available in the Nonfree online repository.',
        'h3_input_methods' => 'Input Methods',
        'text_input_methods' => 'To select the Input Method of your choice, you can use draklocale (“Manage localization of your system” in the Mageia Control Center &rarr; System). Mageia 1 will have two input methods:',
        'h4_ibus' => 'IBus',
        'text_ibus' => 'IBus support (the Intelligent Input Bus), version 1.3.9 is already available in the official repositories.',
        'h4_scim' => 'SCIM',
        'text_scim' => 'SCIM (Smart Common Input Method), version 1.4.9, is also available in the official repositories.',
        'h2_available_media' => 'Available installation media',
        'text_available_media_1' => 'Mageia has two distinctive installation media types:',
        'array_available_media' => array('DVD ISO and Dual-arch CD ISO, which use the drakx traditional installer and',
                'Live CD ISO, this is a live ISO which can be used to preview the distribution and can also be
                            used to install Mageia on your HDD'),
        'text_available_media_2' => 'You will always find the download info on the <a href="http://mageia.org/downloads/">Mageia download page</a>;
                    direct (ftp and http) and BitTorrent downloads are available.
                    For more information, have a look at the <a href="http://www.mageia.org/wiki/doku.php?id=mageia_installation_media">Mageia installation media page</a>.',
        'h2_software_repos' => 'Software online repositories',
        'text_software_repos_1' => 'The packages in Mageia exist in three different repositories/media, depending on what license 
            each package uses.',
        'text_software_repos_2' => 'Here\'s an overview of those repositories:',
        'h4_core' => 'Core:',
        'text_core' => 'The Core repository includes packages with free-open-source software, i.e. packages
                            licensed under a free-open-source license, the set of the Core media are added by default and the
                            “Core Release” and “Core Updates” are enabled by default',
        'h4_nonfree' => 'Nonfree:',
        'text_nonfree' => 'The Nonfree repository includes packages that are free-of-charge, i.e. Mageia can
                            redistribute them, but they contain closed-source software (hence the Nonfree name); For example this
                            repository includes the nVidia and ATI graphics cards proprietary drivers, firmware for various Wi-Fi
                            cards… etc. The set of the Nonfree media is added by default and the “Nonfree Release” and
                            “Nonfree Updates” are enabled by default',
        'h4_tainted' => 'Tainted:',
        'text_tainted' => 'The Tainted repository includes packages under various licenses, free and nonfree ones, but the main
                            criteria for packages in this repository is that they may infringe patents and copyright laws in some
                            countries in the world (e.g. multimedia codecs needed to play various audio/video files, packages needed
                            to play commercial video DVD… etc); as such the set of the Tainted media is added by default but
                            <strong>not</strong> enabled by default, i.e. it\'s completely opt-in; so check
                            your local laws before using packages from this repository. This repository is only added for the
                            convenience of the users. This repository is to    Mageia what PLF is to Mandriva users or RPM Fusion is
                            to Fedora users.'
	)
);

