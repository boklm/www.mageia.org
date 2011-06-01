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
	),
    'zh_TW' => array(
        'page_title' => 'Mageia 1 釋出通告',
        'page_desc' => 'Mageia 1 釋出通告',
        'page_kw' => 'mageia, release notes, Mga1',
        'page_h1' => '釋出通告',
        'major_features' => '主要功能',
        'major_features_array' => array('套件管理',
                '系統設定',
                '從 Mandriva Linux 升級',
                '桌面環境',
                '桌面應用程式',
                '基礎系統',
                'X 伺服器'),
        'installation_methods' => '可使用的安裝方式',
        'support' => '支援',
        'hw_req' => '硬體需求',
        'mageia_milestone' => '自從 <a href="https://www.mageia.org/en/about/2010-sept-announcement.html">Mageia 套件誕生</a>以來，Mageia 1 是第一個里程碑。',
        'overview' => '這個頁面告訴您 Mageia 能帶給您什麼。',
        'h2_major_features' => 'Mageia 主要功能',
        'h3_package_management' => '套件管理工具',
        'text_package_management_1' => 'Mageia 使用了大家熟悉的 urpmi 做為套件相依性處理的預設工具。您可以用於在系統上安裝 RPM 套件。它也可以用於更新系統。詳情請參考 urpmi 的 man page。',
        'text_package_management_2' => '這一系列的工具還有：',
        'array_package_management' => array('<span style="font-weight:bold;">urpme：</span>
                            用於解除安裝系統上的套件。有許多選項可以使用。',
                '<span style="font-weight:bold;">urpmf：</span>
                            用於找出某個檔案是屬於哪個套件；它也可以用於搜尋在官方套件庫中的軟體套件裡的各種 RPM 標籤 （如需求、建議、衝突或已廢棄等）。還有許多其他的功能。',
                '<span style="font-weight:bold;">urpmq：</span>
                            用於查詢 urpmi 的資料庫，想像它就是 \'rpm -q\'，但是多出更多功能，例如檢查官方套件庫中的套件等等。',
                '<span style="font-weight:bold;">urpmi.update：</span>
                            用於更新 urpmi 資料庫，以及關閉已設定的媒體來源等等。',
                '<span style="font-weight:bold;">urpmi.addmedia：</span>
                            用於新增媒體來源（包含線上如 http, ftp, rsync，以及本地端來源等）',
                '<span style="font-weight:bold;">urpmi.removemedia：</span>
                            用於移除已設定的媒體來源'),
        'h3_system_configuration' => 'Mageia 系統設定工具',
        'text_system_configuration' => 'Mageia 繼續使用了大家熟悉的 drak 工具集。包括：',
        'array_system_configuration' => array('<span style="font-weight:bold;">drakconf：</span>
                            Mageia 控制中心，用於啟動各式系統管理工具',
                '<span style="font-weight:bold;">drak3d：</span>
                            設定 3D 桌面效果（如 Compiz）的工具',
                '<span style="font-weight:bold;">drakguard：</span>
                            讓您設定家長控制的工具。它能幫您限制存取某些網站，限制特定時間才能使用網路連線等',
                '<span style="font-weight:bold;">rpmdrake：</span>
                            讓您輕鬆安裝與移除 Mageia 的 RPM 套件的工具',
                '<span style="font-weight:bold;">drakx-net：</span>
                            預設的 Mageia 網路設定工具',
                '<span style="font-weight:bold;">userdrake：</span>
                            管理使用者與群組的工具',
                '<span style="font-weight:bold;">system-config-printer：</span>
                            印表機設定工具，由 Redhat/Fedora 所開發'),
        'h3_migration' => '<a href="../migrate/">從 Mandriva Linux 升級</a>',
        'text_migration' => '若您正在使用 Mandriva Linux 2010.1 或 2010.2，請參考我們的<a href="../migrate">升級指南</a>。',
        'h3_available_des' => '可使用的桌面環境',
        'text_available_des' => 'Mageia 裡包含了所有受歡迎的桌面環境，以及視窗管理員。包括了：',
        'h4_kde' => 'KDE4',
        'text_kde' => 'KDE SC 4.6.3。目前 KDE SC 最新版本，包含許多改進與新功能。詳情可以參考它的<a href="http://www.kde.org/announcements/4.6/">釋出通告</a>。',
        'h4_gnome' => 'GNOME',
        'text_gnome' => 'GNOME 2.32，包含許多受歡迎的應用程式在內（Totem, Rhythmbox,
                    Epiphany, Evolution, The GNOME Archiver (file-roller), Evince, F-Spot… 等等）。',
        'h4_xfce' => 'XFCE4',
        'text_xfce' => 'XFCE 的最新版本 4.8.1。有許多改進，詳情可以參考 XFCE 4.8 的<a href="http://xfce.org/about/news/?post=1295136000">釋出通告</a>。',
        'h4_lxde' => 'LXDE',
        'text_lxde' => '最新的 LXDE 穩定版及套件，包括 PCManFM, LXSession, LXTerminal, Gpicview, LXRandR 等。',
        'h4_wms' => '視窗管理員',
        'text_wms' => '多種其它的視窗管理員，事實上它們也就是輕量級的小型桌面環境。包括：',
        'array_wms' => array('Openbox',
                'WindowMaker',
                'IceWM',
                'Fluxbox',
                'Fvwm2'),
        'h3_desktop_apps' => '桌面應用程式',
        'text_desktop_apps' => '許許多多受歡迎的桌面應用程式。包括：',
        'h4_web_and_mail' => '網頁瀏覽器與收發信程式',
        'array_web_and_mail' => array('<span style="font-weight:bold;"><a href="http://www.mozilla.com/firefox/">Firefox</a>:</span>
                            Firefox 4.0.1。有許多改進與新功能的最新版 Firefox。詳情可以參考它的<a href="http://www.mozilla.com/en-US/firefox/4.0/releasenotes/">Firefox 4 釋出通告</a>',
                '<span style="font-weight:bold;"><a href="http://www.chromium.org/Home">Chromium-Browser</a>：</span>
                            Google Chromium-browser 11.0.696.65。除了穩定版的 11.0 外，為了讓使用者有更多選擇，也加入了 Beta 與 unstable 版。每個都有不同的上游來源與分支，不過應該不用我們提醒您，使用 Beta 與 Unstable 心臟要夠大顆！',
                '<span style="font-weight:bold;"><a href="http://www.gnome.org/projects/epiphany/">Epiphany</a>：</span>
                            最新版 2.30.6。它是使用 webkit 引擎的 GNOME 網頁瀏覽器',
                '<span style="font-weight:bold;"><a href="http://pim.kde.org/">KMail</a>：</span>
                            最新版 4.4.11.1。它是 KDE SC 裡的收發信程式',
                '<span style="font-weight:bold;"><a href="http://www.mozillamessaging.com/thunderbird">Thunderbird</a>：</span>
                            最新版 3.1.10。它是 Mozilla 家族裡的收發信程式。詳情可以參考它的<a href="http://www.mozillamessaging.com/en-US/thunderbird/3.1.10/releasenotes/">釋出通告</a>。裡頭還包括了 Enigmail 與 Lightning 的延伸套件',
                '<span style="font-weight:bold;"><a href="http://www.gnome.org/projects/evolution/">Evolution</a>：</span>
                            最新版 2.32.2。GNOME 上的個人資訊管理程式，功能包含收發信、行事曆、聯絡人管理與聯繫工具等'),
        'h4_office' => '辦公套件',
        'array_office' => array('<span style="font-weight:bold;"><a href="http://www.documentfoundation.org/develop">LibreOffice</a>：</span>
                            <a href="http://blog.mageia.org/en/?p=190">Mageia 曾允諾完全支持 LibreOffice</a>。現在 LibreOffice 3.3.2.2  完整辦公套件已收錄在 Mageia 套件庫中。',
                '<span style="font-weight:bold;"><a href="http://www.calligra-suite.org/">Calligra</a>：</span>
                            Calligra Suite 是從 KOffice 衍生而來。裡頭的組件都跟 KOffice 很相近。詳情與套件中可用的應用程式有哪些，您可以參考它們的網站。',
                '<span style="font-weight:bold;"><a href="http://techbase.kde.org/Projects/KMyMoney">KmyMoney</a>：</span>
                            最新版 4.5.3。KDE4 上的個人理財軟體。標榜好用、精確、功能完整。',
                '<span style="font-weight:bold;"><a href="http://skrooge.org/">Skrooge</a>：</span>
                            Skrooge 0.8.1 版，是 KDE4 上另一套個人理財軟體。標榜操作直覺，功能強大。',
                '<span style="font-weight:bold;"><a href="http://www.gnucash.org/">GnuCash</a>：</span>
                            GnuCash 2.4.5 版，是 Gnome 上的理財軟體。裡面有個類似支票簿的介面，讓您輸入並追蹤您的財務狀況。'),
        'h4_communication' => '通訊軟體',
        'h5_im' => '即時通訊',
        'array_im' => array('<span style="font-weight:bold;"><a href="http://kopete.kde.org/">Kopete</a>：</span>
                            最新版 4.6.3。KDE SC 裡的即時通訊軟體。支援多種即時通訊協定。',
                '<span style="font-weight:bold;"><a href="http://www.pidgin.im/">Pidgin</a>：</span>
                            最新版 2.7.11。使用 GTK+2.0 做的即時通訊軟體。支援多種即時通訊協定。詳情與各版本之間的演進可以參考它的<a href="http://developer.pidgin.im/wiki/ChangeLog">變更紀錄</a>',
                '<span style="font-weight:bold;"><a href="http://live.gnome.org/Empathy">Empathy</a>：</span>
                            最新版 2.34.0。Empathy 是以 Telepathy 框架建構的即時通訊軟體。',
                '<span style="font-weight:bold;"><a href="http://www.kadu.net/">Kadu</a>：</span>
                            最新版 0.9.1。是支援 Gadu-Gadu 協定的即時通訊軟體。'),
        'h5_irc' => 'IRC',
        'array_irc' => array('<span style="font-weight:bold;"><a href="http://quassel-irc.org/">Quassel</a>：</span>
                            最新版 0.7.2。Quassel 是一套以 Qt 開發的 IRC 客戶端程式。',
                '<span style="font-weight:bold;"><a href="http://konversation.kde.org/">Konversation</a>：</span>
                            最新版 1.3.1。KDE 上的 IRC 客戶端程式。',
                '<span style="font-weight:bold;"><a href="http://xchat-gnome.navi.cx/">XChat-gnome</a>：</span>
                            最新版 0.26.1。GNOME 上的 IRC 客戶端程式。',
                '<span style="font-weight:bold;"><a href="http://www.kvirc.net/">KVIrc</a>：</span>
                            最新版 4.0.4。另一套以 Qt 開發的 IRC 客戶端程式，支援外觀變換、加密等 IRC 功能。'),
        'h5_voip' => 'VOIP',
        'array_voip' => array('<span style="font-weight:bold;"><a href="http://www.qutecom.com/">QuteCom</a>：</span>
                            最新版 2.2。一套以 Qt 開發的 SIP 軟體電話應用程式，您可以免費做電腦對電腦的影音對話，也可以整合您的即時通訊聯絡人。',
                '<span style="font-weight:bold;"><a href="http://www.ekiga.org/">Ekiga</a>：</span>
                            最新版 3.2.7。前身為 GnomeMetting，是一套可以在網路上以影音連繫的工具。使用 SIP 與 H323 協定，並與 Microsoft Netmeeting 相容。'),
        'h4_virt' => '虛擬機器',
        'array_virt' => array('<span style="font-weight:bold;"><a href="http://www.virtualbox.org/">VirtualBox</a>：</span>
                            4.0.6 版。一套廣受歡迎的虛擬機器應用程式。',
                '<span style="font-weight:bold;"><a href="http://virt-manager.et.redhat.com/">virt-manager</a>：</span>
                            Mageia 提供了最新版的 virt-manager（及 libvirtd）。它是一套虛擬機器的管理工具集，支援多種語言，讓您輕鬆管理虛擬機器，不管是用 kvm 還是 xen。',
                '<span style="font-weight:bold;"><a href="http://www.winehq.org/">WINE</a>：</span>
                            最新版 1.3.20。只要上游發布新的版本，您都可以很快在 Backports 套件庫中找到。'),
        'h4_graphics' => '美工軟體',
        'array_graphics' => array('<span style="font-weight:bold;"><a href="http://www.gimp.org/">Gimp</a>：</span>
                            版本 2.6.11。GNU 所發布的，功能相當強大的圖片處理軟體。',
                '<span style="font-weight:bold;"><a href="http://inkscape.sourceforge.net/">Inkscape</a>：</span>
                            版本 0.48.1。一套廣受歡迎的 SVG 為主的向量繪圖軟體。',
                '<span style="font-weight:bold;">Blender<a href="http://www.blender.org/"></a>：</span>
                            版本 2.49b。一套高品質的動畫與美工製作軟體。'),
        'h4_ides' => '整合開發環境',
        'array_ides' => array('<span style="font-weight:bold;"><a href="http://anjuta.org/">Anjuta</a>：</span>
                            一套在 GNOME 上功能強大的整合開發環境，支援 C, C++, Python, Java,… 等。',
                '<span style="font-weight:bold;"><a href="http://www.eclipse.org/">Eclipse</a>：</span>
                            一套廣受歡迎的整合開發環境，支援 Java 與多種程式語言。',
                '<span style="font-weight:bold;"><a href="http://netbeans.org/">Netbeans</a>：</span>
                            與 Eclipse 齊名的另一套整合開發環境。',
                '<span style="font-weight:bold;"><a href="http://kdevelop.org/">KDevelop</a>：</span>
                            KDE 上的整合開發環境。'),
        'h3_base_system' => '基本系統',
        'kernel' => 'Mageia 裡內含 2.6.38 版的核心系列。Mageia 釋出時核心版本為 2.6.38.7。關於核心的改進等詳情可以參考<a href="http://kernelnewbies.org/Linux_2_6_38">這裡</a>。此版核心的重點功能包括：',
        'kernel_array' => array('支援自動行程分組（詳情請參考 Linus Torvalds 在
                            <a href="http://lkml.org/lkml/2011/1/18/322">Linux 核心郵件論壇</a>裡的發言；以及 <a href="https://lwn.net/Articles/418884/">LWN.net</a> 上關於該修補的資訊。）',
                'Linux 虛擬檔案系統（VFS）層的重大改進',
                'Transparent Huge Page 支援（不使用 hugetblfs）',
                '透過多個 CPU 自動分攤對外的網路傳輸',
                '支援 AMD Fusion APUs',
                '支援 Intel Sandy Bridge 與 Panther Point。',
                'Ipset 6.4，包含 IPv6 支援'),
        'initscripts' => '開機系統：仍然使用 initscripts 9.21',
        'alsa' => 'ALSA 1.0.24.x：',
        'alsa_array' => array('libalsa2-1.0.24.1',
                'alsa-plugins-1.0.24',
                'alsa-tools-1.0.24.1：韌體的部份被分到一個新的套件 alsa-firmware',
                'alsa-utils-1.0.24.2'),
        'h3_x' => 'X 伺服器',
        'array_x' => array('X 伺服器 1.10.1 版，包含完整的 Udev 支援（取代 HAL）',
                'ATI/AMD 開放源碼的 Radeon 驅動程式：核心模式設定預設開啟，以改進效能與相容性。',
                '依據 <a href="http://intellinuxgraphics.org/2011Q1.html">Intel 規格</a>支援 Intel Sandy Bridge (2nd Generation Intel® Core™ i7/i5/i3)',
                'Nouveau: Nouveau 是 nVidia 顯示卡的預設驅動程式。它也支援核心模式設定，2D 加速，RandR 1.2 等'),
        'h4_proprietary' => '非開放源碼的顯示卡驅動程式',
        'text_proprietary' => 'nVidia 與 ATI (flgrx) 的官方驅動程式最新版本，都放在 Nonfree 套件庫中。',
        'h3_input_methods' => '輸入法',
        'text_input_methods' => '您可以在 draklocale（在 Mageia 控制中心裡，「系統」分頁中選擇「管理您的系統之區域及語言」）裡選擇您要使用的輸入法。Mageia 1 裡有兩種輸入法（譯註：其實還有 GCIN 1.6.2）：',
        'h4_ibus' => 'IBus',
        'text_ibus' => 'IBus (Intelligent Input Bus) 1.3.9 版。',
        'h4_scim' => 'SCIM',
        'text_scim' => 'SCIM (Smart Common Input Method) 1.4.9 版。',
        'h2_available_media' => '可用的安裝媒體',
        'text_available_media_1' => 'Mageia 有兩種安裝媒體類型：',
        'array_available_media' => array('DVD ISO 與 Dual-arch CD ISO，使用傳統的 drakx 安裝程式，還有',
                'Live CD ISO，這是可以用於預覽這個套件的開機光碟，它也可以將 Mageia 安裝到您的硬碟中。'),
        'text_available_media_2' => '您可以在 <a href="http://mageia.org/downloads/">Mageia 下載頁面</a>直接透過 http 與 ftp 下載這些映像檔；
                    另外也提供 BitTorrent 的下載。
                    您可以在 <a href="http://www.mageia.org/wiki/doku.php?id=mageia_installation_media">Mageia 安裝媒體</a>頁面中看到更多資訊。',
        'h2_software_repos' => '線上軟體套件庫',
        'text_software_repos_1' => 'Mageia 依據每個套件使用的授權不同，將其存放於三種不同的套件庫。', 
        'text_software_repos_2' => '以下是這些套件庫的介紹：',
        'h4_core' => 'Core：',
        'text_core' => 'Core 核心套件庫裡包含了自由軟體的套件。Core 媒體預設會被加入，並且會開啟 "Core Release" 與 "Core Updates"。',
        'h4_nonfree' => 'Nonfree：',
        'text_nonfree' => 'Nonfree 套件庫裡的軟體套件是免費（Mageia 可以散布），但不是自由、開放源碼的軟體（所以才叫 nonfree）。
                            例如 nVidia 與 ATI 顯示卡的官方驅動程式，多種 WiFi 無線網卡的韌體等等。Nonfree 媒體預設會被加入，並且會開啟
                            “Nonfree Release” 與 “Nonfree Updates”。',
        'h4_tainted' => 'Tainted：',
        'text_tainted' => 'Tainted 套件庫裡的軟體套件有各種不同的授權，自由或非自由都有。但是主要的問題是它們有可能在某些國家裡
                            會有侵犯專利或授權法律的問題（例如用於播放影音檔的多媒體編解碼器，用於播放商業影像 DVD 的軟體等等）。
                            因此 Tainted 媒體預設會加入，但不會開啟。在使用此套件庫之前請先確認您當地的法律。這個套件庫的角色就類似
                            Mandriva 裡的 PLF 或 Fedora 裡的 RPM Fusion。'
    ),
    'et' => array(
        'page_title' => 'Mageia 1 väljalaskemärkmed',
        'page_desc' => 'Märkmed Mageia 1 väljalaske kohta',
        'page_kw' => 'mageia, väljalaskemärkmed',
        'page_h1' => 'Väljalaskemärkmed',
        'major_features' => 'Tähtsamad omadused',
        'major_features_array' => array('Tarkvarahaldus',
                'Süsteemi seadistamine',
                'Kolimine Mandriva Linuxi pealt',
                'Töökeskkonnad',
                'Rakendused',
                'Baassüsteem',
                'X\'i server'),
        'installation_methods' => 'Võimalikud paigaldamisviisid',
        'support' => 'Toetus',
        'hw_req' => 'Nõuded riistvarale',
        'mageia_milestone' => 'Mageia 1 kujutab endast olulist teetähist, mille taga seisab palju tööd, mis sai alguse päevast, mil
                    <a href="https://www.mageia.org/et/about/2010-sept-announcement.html">Mageia distributsioon sündis</a>.',
        'overview' => 'Järgnevalt antakse ülevaade, mida Mageia teile pakub.',
        'h2_major_features' => 'Mageia tähtsamad omadused',
        'h3_package_management' => 'Tarkvara haldamise tööriistad',
        'text_package_management_1' => 'Mageia kasutab varasemastki tuttavat urpmi\'t, mis on Mageia vaikimisi sõltuvuste lahendaja
                    ja mille abil saab süsteemi paigaldada RPM-pakette. Samuti saab seda kasutada süsteemi uuendamiseks. Põhjalikult
                    kõneleb urpmi kasutamisest programmi manuaalilehekülg.',
        'text_package_management_2' => 'Sama pere teised liikmed:',
        'array_package_management' => array('<span style="font-weight:bold;">urpme:</span>
                            tööriist süsteemi paigaldatud RPM-pakettide eemaldamiseks, lubab kasutada arvukalt käsureavõtmeid',
                '<span style="font-weight:bold;">urpmf:</span>
                            tööriist, mis näitab, milline pakett sisaldab konkreetset faili, samuti saab sellega otsida näiteks
                            kõikvõimalikke RPM-silte (requires, suggests, conflicts, obsoletes) ametlike tarkvarahoidlate
                            pakettides',
                '<span style="font-weight:bold;">urpmq:</span>
                            urpmi andmebaasi päringutööriist, umbes sama, mis \'rpm -q\', aga rohkemate võimalustega, suutes
                            kontrollida RPM-pakette ametlikes tarkvarahoidlates',
                '<span style="font-weight:bold;">urpmi.update:</span>
                            tööriist urpmi andmebaasi uuendamiseks, mida võib pruukida ka süsteemis seadistatud
                            tarkvaraallikate keelamiseks (eiramiseks)',
                '<span style="font-weight:bold;">urpmi.addmedia:</span>
                            tööriist Mageia tarkvaraallikate (nii võrgu- (http, ftp, rsync) kui ka kohalike allikate) lisamiseks',
                '<span style="font-weight:bold;">urpmi.removemedia:</span>
                            tööriist süsteemis seadistatud tarkvaraallikate eemaldamiseks'),
        'h3_system_configuration' => 'Mageia süsteemi seadistamise tööriistad',
        'text_system_configuration' => 'Mageia jätkab varasemastki tuttavate drak-tööriistade kasutamist, millest olulisemad on:',
        'array_system_configuration' => array('<span style="font-weight:bold;">drakconf:</span>
                            Mageia juhtimiskeskus, kust saab käivitada mitmesuguseid süsteemi haldamise tööriistu',
                '<span style="font-weight:bold;">drak3d:</span>
                            tööriist 3D töölaua efektide (nt. Compiz) seadistamiseks',
                '<span style="font-weight:bold;">drakguard:</span>
                            tööriist lapseluku seadistamiseks, mis võib blokeerida ligipääsu teatavatele veebilehtedele
                            ja piirata internetiühenduse kasutamise kindla ajaga',
                '<span style="font-weight:bold;">rpmdrake:</span>
                            lihtne tööriist tarkvara paigaldamiseks ja eemaldamiseks',
                '<span style="font-weight:bold;">drakx-net:</span>
                            Mageia peamised võrgutööriistad',
                '<span style="font-weight:bold;">userdrake:</span>
                            kasutajasõbralik ja võimas tööriist kasutajate ja gruppide haldamiseks',
                '<span style="font-weight:bold;">system-config-printer:</span>
                            võimas trükkimise ja printerite seadistamise tööriist, mille on välja töötanud Redhat/Fedora'),
        'h3_migration' => '<a href="../migrate/">Kolimine Mandriva Linuxi pealt</a>',
        'text_migration' => 'Kui kasutate Mandriva Linux 2010.1 või 2010.2,
                        vaadake meie <a href="../migrate">kolimisjuhiseid</a>.',
        'h3_available_des' => 'Saadaolevad töökeskkonnad',
        'text_available_des' => 'Otseselt ühtegi töökeskkonda eelistamata pakub Mageia kõiki levinumaid töökeskkondi ning
                    mitmesuguseid aknahaldureid. Põgus ülevaade:',
        'h4_kde' => 'KDE4',
        'text_kde' => 'KDE SC 4.6.3 pakub rohkelt uuendusi ja parandusi, täpsemalt kõneleb neist
                    <a href="http://www.kde.org/announcements/4.6/">väljalasketeade</a>.',
        'h4_gnome' => 'GNOME',
        'text_gnome' => 'GNOME 2.32 koos rohkete populaarsete rakendustega (Totem, Rhythmbox,
                    Epiphany, Evolution, GNOME Archiver (file-roller), Evince, F-Spot jne.).',
        'h4_xfce' => 'XFCE4',
        'text_xfce' => 'XFCE uusim stabiilne versioon 4.8.1 sisaldab ohtralt parandusi, millest kõneleb täpsemalt
                    XFCE 4.8 <a href="http://xfce.org/about/news/?post=1295136000">väljalasketeade</a>.',
        'h4_lxde' => 'LXDE',
        'text_lxde' => 'Uusimad stabiilsed LXDE rakendused (PCManFM, LXSession, LXTerminal, Gpicview, LXRandR).',
        'h4_wms' => 'Aknahaldurid',
        'text_wms' => 'Hulk veidi vähem tuntud aknahaldureid, mis tegelikult on pigem pisikesed ja vähenõudlikud
                    töökeskkonnad:',
        'array_wms' => array('Openbox',
                'WindowMaker',
                'IceWM',
                'Fluxbox',
                'Fvwm2'),
        'h3_desktop_apps' => 'Rakendused',
        'text_desktop_apps' => 'Rohkelt populaarseid rakendusi, millest allpool antakse vaid põgus ülevaade.',
        'h4_web_and_mail' => 'Veebilehitsejad ja e-posti kliendid',
        'array_web_and_mail' => array('<span style="font-weight:bold;"><a href="http://www.mozilla.com/firefox/">Firefox</a>:</span>
                            Firefox 4.0.1 sisaldab ohtralt parandusi ja uuendusi, mis puudutavad veebilehitseja tegevuse kõiki aspekte; täpsemalt kõnelevad sellest <a href="http://www.mozilla.com/et/firefox/">Firefox 4 väljalaskemärkmed</a>',
                '<span style="font-weight:bold;"><a href="http://www.chromium.org/Home">Chromium-Browser</a>:</span>
                            Google\'i Chromium-browser 11.0.696.65 on kasutajate rõõmuks saadaval kolmel eri kujul - stable, beta ja unstable -, mis kõik kasutavad omaette koodibaasi. Pole vist vaja öeldagi, et beta ja unstable on vaid tugevate närvidega inimestele!',
                '<span style="font-weight:bold;"><a href="http://www.gnome.org/projects/epiphany/">Epiphany</a>:</span>
                            Mageia pakub GNOME webkiti-põhise veebilehitseja uusimat stabiilset versiooni 2.30.6',
                '<span style="font-weight:bold;"><a href="http://pim.kde.org/">KMail</a>:</span>
                            tuntud KDE4 e-posti kliendi uusim stabiilne versioon 4.4.11.1',
                '<span style="font-weight:bold;"><a href="http://www.mozillamessaging.com/thunderbird">Thunderbird</a>:</span>
                            tuntud Mozilla e-posti kliendi uusim stabiilne versioon 3.1.10 pakub kõiki 3.1.x seeria uuendusi, täiendusi ja parandusi, millest lähemalt kõneldakse Thunderbirdi <a href="http://www.mozillamessaging.com/en-US/thunderbird/3.1.10/releasenotes/">väljalaskemärkmetes</a>; saadaval on ka Enigmaili ja Lightningi laiendused',
                '<span style="font-weight:bold;"><a href="http://www.gnome.org/projects/evolution/">Evolution</a>:</span>
                            tuntud GNOME e-posti kliendi, kalendri, kontaktide halduri ja üldse suurepärase sidevahendi uusim stabiilne versioon 2.32.2'),
        'h4_office' => 'Kontoritöö',
        'array_office' => array('<span style="font-weight:bold;"><a href="http://www.documentfoundation.org/develop">LibreOffice</a>:</span>
                            <a href="http://blog.mageia.org/en/?p=190">Mageia lubas LibreOffice\'i täielikku toetust</a> ja on oma lubadust pidanud, pakkudes LibreOffice\'i stabiilset versiooni 3.3.2.2',
                '<span style="font-weight:bold;"><a href="http://www.calligra-suite.org/">Calligra</a>:</span>
                            Calligra kujutab endast KOffice\'i edasiarendust ning pakub kõike seda, mida pakkus KOffice, ja rohkemgi; täpsemalt annab sellesse komplekti kuuluvatest rakendustest ja nende võimekusest teada Calligra veebilehekülg',
                '<span style="font-weight:bold;"><a href="http://techbase.kde.org/Projects/KMyMoney">KmyMoney</a>:</span>
                            KDE4 isiklike rahaasjade halduri uusim stabiilne versioon 4.5.3 püüab olla täpne, lihtne kasutada ja pakkuda kõike seda, mida ühelt rahaasjade haldurilt oodatakse',
                '<span style="font-weight:bold;"><a href="http://skrooge.org/">Skrooge</a>:</span>
                            mitmekesisuse süvendamiseks ja kasutajatele valikuvabaduse andmiseks on saadaval ka isiklike rahaasjade halduri Skrooge versioon 0.8.1, mis püüab olla maksimaalselt tundlik, pakkudes samal ajal võimsaid funktsioone',
                '<span style="font-weight:bold;"><a href="http://www.gnucash.org/">GnuCash</a>:</span>
                            rahaasjade haldamiseks on saadaval ka GnuCashi versioon 2.4.5'),
        'h4_communication' => 'Side',
        'h5_im' => 'Kiirsuhtlus',
        'array_im' => array('<span style="font-weight:bold;"><a href="http://kopete.kde.org/">Kopete</a>:</span>
                            KDE SC 4.6.3 koosseisu kuuluva tuntud kiirsuhtlusrakenduse uusim stabiilne versioon toetab väga paljusid kiirsuhtlusprotokolle',
                '<span style="font-weight:bold;"><a href="http://www.pidgin.im/">Pidgin</a>:</span>
                            tuntud GTK+2.0 põhise kiirsuhtluskliendi uusim stabiilne versioon 2.7.11 toetab arvukaid kiirsuhtlusprotokolle; täpsemalt kõneleb selle versiooni parandustest ja täiendustest <a href="http://developer.pidgin.im/wiki/ChangeLog">muutuste logi</a>',
                '<span style="font-weight:bold;"><a href="http://live.gnome.org/Empathy">Empathy</a>:</span>
                            Empathy on Telepathy raamistikule tuginev kiirsuhtlusklient, praeguse versiooniga 2.34.0',
                '<span style="font-weight:bold;"><a href="http://www.kadu.net/">Kadu</a>:</span>
                            Gadu-Gadu protokolli tundva kiirsuhtluskliendi uusim stabiilne versioon 0.9.1'),
        'h5_irc' => 'IRC',
        'array_irc' => array('<span style="font-weight:bold;"><a href="http://quassel-irc.org/">Quassel</a>:</span>
                            moodsa Qt-põhise IRC kliendi uusim stabiilne versioon 0.7.2',
                '<span style="font-weight:bold;"><a href="http://konversation.kde.org/">Konversation</a>:</span>
                            kõigi võimalustega graafiline IRC klient KDE toetusega, uusim stabiilne versioon 1.3.1',
                '<span style="font-weight:bold;"><a href="http://xchat-gnome.navi.cx/">XChat-gnome</a>:</span>
                            GNOME töökeskkonna graafilise IRC kliendi uusim stabiilne versioon 0.26.1',
                '<span style="font-weight:bold;"><a href="http://www.kvirc.net/">KVIrc</a>:</span>
                            Qt-põhise IRC kliendi, mis toetab teemasid, läbipaistvust, krüptimist ja paljusid muid IRC võimalusi, rääkimata skriptimisest, uusim stabiilne versioon 4.0.4'),
        'h5_voip' => 'VOIP',
        'array_voip' => array('<span style="font-weight:bold;"><a href="http://www.qutecom.com/">QuteCom</a>:</span>
                            Qt-põhise SIP tarkvaralise telefoni, mis võimaldab tasuta video- ja häälkõnesid arvutist arvutisse ning kõigi oma kiirsuhtluskontaktide koondamist ühte koha, uusim stabiilne versioon 2.2.',
                '<span style="font-weight:bold;"><a href="http://www.ekiga.org/">Ekiga</a>:</span>
                            tööriist nii pildis kui helis suhtlemiseks üle interneti, mis kasutab nii SIP kui ka H323 protokolli ja ühildub Microsoft Netmeetinguga (varem kandiski nime GnomeMeeting); uusim stabiilne versioon 3.2.7.'),
        'h4_virt' => 'Virtualiseerimine',
        'array_virt' => array('<span style="font-weight:bold;"><a href="http://www.virtualbox.org/">VirtualBox</a>:</span>
                            üldotstarbelise täiemahulise virtualiseerimisprogrammi versioon 4.0.6',
                '<span style="font-weight:bold;"><a href="http://virt-manager.et.redhat.com/">virt-manager</a>:</span>
                            Mageia pakub populaarse virtualiseerimise halduri virt-manager (ja libvirtd) uusimat versiooni, samuti seoseid eri keelte jaoks, et lihtsustada virtuaalmasinate haldamist, olgu nende aluseks kvm või xen',
                '<span style="font-weight:bold;"><a href="http://www.winehq.org/">WINE</a>:</span>
                            WINE uusim arendusversioon 1.3.20; võite olla kindel, et leiate selle kuulsa rakenduse uusima versiooni meie hoidlatest (Backports alt) peaaegu kohe pärast seda, kui arendajad on uue versiooni välja lasknud!'),
        'h4_graphics' => 'Graafika',
        'array_graphics' => array('<span style="font-weight:bold;"><a href="http://www.gimp.org/">Gimp</a>:</span>
                            tuntud GNU pilditöötlusprogrammi versioon 2.6.11',
                '<span style="font-weight:bold;"><a href="http://inkscape.sourceforge.net/">Inkscape</a>:</span>
                            tuntud SVG-põhise vektorgraafikaprogrammi versioon 0.48.1',
                '<span style="font-weight:bold;">Blender<a href="http://www.blender.org/"></a>:</span>
                            kõrge kvaliteediga animatsioonistuudio versioon 2.49b'),
        'h4_ides' => 'Arenduskeskkonnad',
        'array_ides' => array('<span style="font-weight:bold;"><a href="http://anjuta.org/">Anjuta</a>:</span>
                            võimas GNOME IDE C, C++, Pythoni, Java ja teistele keeltele',
                '<span style="font-weight:bold;"><a href="http://www.eclipse.org/">Eclipse</a>:</span>
                            mainekas IDE Java ja teiste keelte tarbeks',
                '<span style="font-weight:bold;"><a href="http://netbeans.org/">Netbeans</a>:</span>
                            Eclipse\'i sama tuntud alternatiiv',
                '<span style="font-weight:bold;"><a href="http://kdevelop.org/">KDevelop</a>:</span>
                            KDE IDE'),
        'h3_base_system' => 'Baassüsteem',
        'kernel' => 'Mageia pakub kerneli 2.6.38 seeriat, mis väljalaske ajaks on jõudnud alaversioonini 2.6.38.7; täpsemalt kõneldakse
                            kerneli selle seeria parandustest <a href="http://kernelnewbies.org/Linux_2_6_38">siin</a>, aga siiski mõned olulisemad asjad:',
        'kernel_array' => array('Protsesside automaatse rühmitamise toetus (täpsemalt vaadake Linus Torvaldsi postitust
                            <a href="http://lkml.org/lkml/2011/1/18/322">LKML-is</a> (Linuxi kerneli postiloend) ja selle paiga mainimist
                            <a href="https://lwn.net/Articles/418884/">LWN.net-i</a> artiklis)',
                'Märkimisväärsed parandused skaleeritavuse osas Linuxi VFS (virtuaalne failisüsteem) kihis',
                'Läbipaistev suurte lehekülgede toetus (ilma hugetblfs kasutamiseta)',
                'Väljuva võrguliikluse automaatne levitamine üle mitme protsessori',
                'AMD Fusion APU-de toetus',
                'Inteli Sandy Bridge\'i ja Panther Pointi toetus',
                'Ipset 6.4 koos IPv6 toetusega'),
        'initscripts' => 'Alglaadimissüsteem: endiselt on kasutusel initscripts, versioon 9.21',
        'alsa' => 'ALSA 1.0.24.x:',
        'alsa_array' => array('libalsa2-1.0.24.1',
                'alsa-plugins-1.0.24',
                'alsa-tools-1.0.24.1: püsivaraosa on eraldatud uude paketti alsa-firmware',
                'alsa-utils-1.0.24.2'),
        'h3_x' => 'X\'i server',
        'array_x' => array('X\'i server 1.10.1 täieliku Udevi toetusega (Udev asendab selles osas HAL-i)',
                'ATI/AMD vaba radeoni draiver: Kernel Mode Setting on vaikimisi sisse lülitatud, mis parandab jõudlust ja ühilduvust.',
                'Inteli Sandy Bridge\'i (2. põlvkonna Intel® Core™ i7/i5/i3) toetus vastavalt <a href="http://intellinuxgraphics.org/2011Q1.html">Inteli spetsifikatsioonile</a>.',
                'Nouveau: toetatud nVidia graafikaartide puhul kasutatakse vaikimisi Nouveau draiverit. See tähendab Kernel Mode Settingi toetust, 2D kiirendust ja RandR 1.2 toetust (mitme monitoriga süsteemi hõlpsamaks häälestamiseks)'),
        'h4_proprietary' => 'Omanduslikud graafikakaartide draiverid',
        'text_proprietary' => 'Nonfree-tarkvarahoidlas võib leida nii nVidia kui ka ATI (fglrx) omanduslike draiverite uusimad versioonid.',
        'h3_input_methods' => 'Sisestusmeetodid',
        'text_input_methods' => 'Vajaliku sisestusmeetodi valimiseks võib kasutada tööriista draklocale (“Süsteemi lokaliseerimine” Mageia juhtimiskeskuse rubriigis Süsteem). Mageia 1 võimaldab kasutada kaht sisestusmeetodit:',
        'h4_ibus' => 'IBus',
        'text_ibus' => 'IBusi (Intelligent Input Bus) toetus, versioon 1.3.9.',
        'h4_scim' => 'SCIM',
        'text_scim' => 'SCIM (Smart Common Input Method), versioon 1.4.9.',
        'h2_available_media' => 'Saadaolevad paigaldusandmekandjad',
        'text_available_media_1' => 'Mageia tarvitab kaht eristuvat paigaldusandmekandja tüüpi:',
        'array_available_media' => array('DVD ISO ja Dual-arch CD ISO, mis tarvitavad traditsioonilist drakx paigaldusprogrammi',
                'Live CD ISO, mida saab kasutada nii distributsioonist ülevaate saamiseks kui ka Mageia paigaldamiseks kõvakettale'),
        'text_available_media_2' => 'Allalaadimise kohta leiab alati rohkem teavet <a href="http://mageia.org/downloads/">Mageia allalaadimise leheküljelt</a>;
                    saadaval on otseallalaadimise võimalused (ftp ja http) ning BitTorrent.
                    Rohkem teavet leiab <a href="http://www.mageia.org/wiki/doku.php?id=mageia_installation_media">Mageia paigaldusandmekandjate leheküljelt</a>.',
        'h2_software_repos' => 'Tarkvara võrguhoidlad',
        'text_software_repos_1' => 'Mageia tarkvarapaketid on jagatud kolme hoidla vahel vastavalt sellele, millist litsentsi konkreetsed paketid kasutavad.',
        'text_software_repos_2' => 'Hoidlad on järgmised:',
        'h4_core' => 'Core:',
        'text_core' => 'Core hoidla sisaldab vaba ja avatud lähtekoodiga tarkvara; see hoidla lisatakse vaikimisi ning vaikimisi on kasutusel nii
                            “Core Release” kui ka “Core Updates” (viimane sisaldab uuendusi)',
        'h4_nonfree' => 'Nonfree:',
        'text_nonfree' => 'Nonfree hoidla sisaldab tasuta tarkvara, s.t. tarkvara, mida Mageia võib
                            levitada, aga mis sisaldab suletud lähtekoodi (siit ka nimetus Nonfree); selles hoidlas leiab näiteks
                            nVidia ja ATI graafikakaartide omanduslikud draiverid, mitmesuguste Wi-Fi kaartide
                            püsivara jms. Nonfree hoidla lisatakse vaikimisi ning vaikimisi on kasutusel nii “Nonfree Release” kui ka
                            “Nonfree Updates”',
        'h4_tainted' => 'Tainted:',
        'text_tainted' => 'Tainted hoidla sisaldab mitmesuguste litsentsidega pakette, nii vabasid kui mittevabasid, ent peamiseks
                            kriteeriumiks on asjaolu, et need paketid võivad mõnes riigis rikkuda patente ja autoriõigust
                            (nt. mitmesuguste heli- või videofailide esitamiseks vajalikud multimeediakoodekid, kommerts-video-DVD-de
                            esitamiseks vajalikud paketid jms.); seepärast on küll Tainted hoidla vaikimisi lisatud, aga
                            <strong>ei ole</strong> vaikimisi kasutusel, s.t. selle kasutamine sõltub ainult kasutajast endast; sestap
                            kontrollige oma kohalikke seadusi, enne kui hakkate selle hoidla pakette kasutama. Hoidla on lisatud
                            ainult kasutajate elu lihtsustamiseks. See hoidla on Mageia jaoks sama, mis Mandriva puhul PLF või Fedora
                            puhul RPM Fusion.'
    ),
    'cs' => array(
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
        'installation_methods' => 'Dostupné způsoby instalace',
        'support' => 'Podpora',
        'hw_req' => 'Požadavky na vybavení',
        'mageia_milestone' => 'Mageia 1 značí milník na cestě složené z hodně tvrdé práce, která začala toho dne, kdy
                    <a href="https://www.mageia.org/en/about/2010-sept-announcement.html">se zrodila distribuce Mageia</a>.',
        'overview' => 'Tato stránka podává přehled toho, co vám Mageia nabízí.',
        'h2_major_features' => 'Hlavní vlastnosti Mageii',
        'h3_package_management' => 'Nástroje na správu balíčků',
        'text_package_management_1' => 'Mageia používá dobře známé urpmi jako výchozího řešitele závislostí mezi balíčky v Mageii,
                    kterého můžete můžete použít pro instalaci balíčků RPM do systému. Také jej lze použít pro aktualizaci systému. O veškerých podrobnostech, které se vztahují k jeho používání, se dočtete
                    v manuálových stránkách k urpmi.',
        'text_package_management_2' => 'Zbytek rodiny tvoří:',
        'array_package_management' => array('<span style="font-weight:bold;">urpme:</span>
                            používané pro odinstalaci balíčků RPM packages nainstalovaných v systému, s mnoha volbami příkazového řádku',
                '<span style="font-weight:bold;">urpmf:</span>
                            nástroj, jehož lze mimo jiné použít na zobrazení toho, co balíček obsahuje za soubory; také se dá využít na vyhledávání všech druhů značek RPM (požadavky, návrhy, střety, zastaralé balíčky) v balíčcích, které jsou v oficiálních
                            repozitářích',
                '<span style="font-weight:bold;">urpmq:</span>
                            nástroj na dotazování se v databázi urpmi. Je to něco jako \'rpm -q\', ale s mnoha velmi pokročilými vlastnostmi, kterých se dá používat pro kontrolu balíčků RPM v oficiálních repozitářích',
                '<span style="font-weight:bold;">urpmi.update:</span>
                            nástroj na aktualizaci databáze urpmi v uživatelově instalaci. také se dá použít pro zakázání v systému nastavených zdrojů',
                '<span style="font-weight:bold;">urpmi.addmedia:</span>
                            nástroj pro přidání zdrojů Mageia (internetové (http, ftp, rsync) a stejně tak i místní)',
                '<span style="font-weight:bold;">urpmi.removemedia:</span>
                            nástroj pro odebrání zdrojů nastavených pro systém'),
        'h3_system_configuration' => 'Nástroje pro nastavení systému Mageii',
        'text_system_configuration' => 'Mageia bude pokračovat v používání všech známých nástrojů (drak tools); zde k tomu více:',
        'array_system_configuration' => array('<span style="font-weight:bold;">drakconf:</span>
                            Ovládací centrum Mageia, jehož se dá používat ke spouštění všech druhů nástrojů na správu systému',
                '<span style="font-weight:bold;">drak3d:</span>
                            Nástroj pro nastavení efektů 3D desktopu (např. Compiz)',
                '<span style="font-weight:bold;">drakguard:</span>
                            Nástroj umožňující rodičům nastavit rozsah oprávnění pro své děti. Může bránit v přístupu k internetovým stránkám a omezit internetové připojení na určitou dobu',
                '<span style="font-weight:bold;">rpmdrake:</span>
                            Jednoduché rozhraní, které dělá z instalace a odstraňování balíčků s programy v Mageii jednoduchou věc (RPM)',
                '<span style="font-weight:bold;">drakx-net:</span>
                            The default Mageia network tools',
                '<span style="font-weight:bold;">userdrake:</span>
                            K uživatelům přátelský a mocný nástroj na správu uživatelů a skupin',
                '<span style="font-weight:bold;">system-config-printer:</span>
                            Silný nástroj na nastavení tiskárny vyvíjený společností Redhat/Fedora'),
        'h3_migration' => '<a href="../migrate/">Migration from Mandriva Linux</a>',
        'text_migration' => 'Pokud používáte Mandriva Linux 2010.1 nebo 2010.2,
                        projděte si náš <a href="../migrate">migration guide</a>.',
        'h3_available_des' => 'Dostupná pracovní prostředí',
        'text_available_des' => 'Jako distribuce, která se nehlásí jen k jednomu určitému prostředí, Mageia má všechna populární pracovní prostředí, společně s různými správci oken. Zde je jejich přehled:',
        'h4_kde' => 'KDE4',
        'text_kde' => 'KDE SC 4.6.3. Toto vydání přináší četná vylepšení a nové vlastnosti; další podrobnosti jsou v <a href="http://www.kde.org/announcements/4.6/">oznámení o vydání</a>.',
        'h4_gnome' => 'GNOME',
        'text_gnome' => 'GNOME 2.32, se spoustou oblíbených programů, které jsou dodávány společně s ním (Totem, Rhythmbox,
                    Epiphany, Evolution, The GNOME Archiver (file-roller), Evince, F-Spot… etc).',
        'h4_xfce' => 'Xfce4',
        'text_xfce' => 'Poslední stabilní verze 4.8.1 Xfce přináší četná vylepšení. Abyste získali celkový přehled, podívejte se na Xfce 4.8 <a href="http://xfce.org/about/news/?post=1295136000">oznámení o vydání</a>.',
        'h4_lxde' => 'LXDE',
        'text_lxde' => 'Nejnovější stabilní balíčky pro LXDE (PCManFM, LXSession, LXTerminal, Gpicview, LXRandR).',
        'h4_wms' => 'Okenní správci',
        'text_wms' => 'Různí další okenní správci, jež jsou ve skutečnosti velmi malými a velmi lehkými pracovními prostředími:',
        'array_wms' => array('Openbox',
                'WindowMaker',
                'IceWM',
                'Fluxbox',
                'Fvwm2'),
        'h3_desktop_apps' => 'Programy',
        'text_desktop_apps' => 'Spousta oblíbených programů pro vaše pracovní prostředí. Nejdůležitější z nich.',
        'h4_web_and_mail' => 'Prohlížeče internetu a poštovní klienti',
        'array_web_and_mail' => array('<span style="font-weight:bold;"><a href="http://www.mozilla.com/firefox/">Firefox</a>:</span>
                            Firefox 4.0.1., toto nové vydání s sebou nese notně vylepšení, která se dotýkají Firefoxu ve všech ohledech. Více informací zde: <a href="http://www.mozilla.com/en-US/firefox/4.0/releasenotes/">Poznámky k vydání Firefox 4</a>',
                '<span style="font-weight:bold;"><a href="http://www.chromium.org/Home">Prohlížeč Chromium</a>:</span>
                            Prohlížeč Chromium od firmy Google, ve verzi 11.0.696.65., pro pohodlí uživatelů jen prohlížeč Chromium, přichází ve třech různých podobách, stabilní, beta a nestabilní, každá z nich vycházející z jiného hlavního kanálu/větve, aniž by bylo třeba říkat, že beta a nestabilní tu nejsou pro slabost srdce!',
                '<span style="font-weight:bold;"><a href="http://www.gnome.org/projects/epiphany/">Epiphany</a>:</span>
                            Poslední stabilní verze, 2.30.6, internetového prohlížeče pro GNOME založená na vykreslovacím jádru webkit je dostupná v repozitářích Mageia',
                '<span style="font-weight:bold;"><a href="http://pim.kde.org/">KMail</a>:</span>
                            Poslední stabilní verze, 4.4.11.1, slavného poštovního klienta pro KDE 4',
                '<span style="font-weight:bold;"><a href="http://www.mozillamessaging.com/thunderbird">Thunderbird</a>:</span>
                            Poslední stabilní verze slavného poštovního klienta od Mozilly, Thunderbird 3.1.10, je dostupná v internetových repozitářích, se všemi vylepšeními a opravami v řadě 3.1.x, více informací naleznete v <a href="http://www.mozillamessaging.com/en-US/thunderbird/3.1.10/releasenotes/">poznámkách k vydání</a>. Jsou dostupná i obě rozšíření Enigmail a Lightning',
                '<span style="font-weight:bold;"><a href="http://www.gnome.org/projects/evolution/">Evolution</a>:</span>
                            Poslední stabilní verze, 2.32.2, slavného poštovního programu pro GNOME, kalendáře, správce kontaktů a nástroje na komunikaci.'),
        'h4_office' => 'Kancelář',
        'array_office' => array('<span style="font-weight:bold;"><a href="http://www.documentfoundation.org/develop">LibreOffice</a>:</span>
                            <a href="http://blog.mageia.org/en/?p=190">Mageia přislíbila plnou podporu LibreOffice</a> a svůj slib drží. Stabilní LibreOffice 3.3.2.2 je dostupný v repozitářích Mageia, a přináší úplnou sadu kancelářských programů',
                '<span style="font-weight:bold;"><a href="http://www.calligra-suite.org/">Calligra</a>:</span>
                            Projekt Calligra Suite je pokračováním projektu KOffice, který má všechny známé součásti KOffice. podrobný seznam dostupných programů a co se s nimi dá dělat najdete na stránkách projektu',
                '<span style="font-weight:bold;"><a href="http://techbase.kde.org/Projects/KMyMoney">KmyMoney</a>:</span>
                            Poslední stabilní verze, 4.5.3 osobního správce vašich peněz pro KDE4 je již v internetových repozitářích. Soustředí se na přesnost, snadnost použití a plný rozsah vlastností zahrnující všechny známé vlastnosti, které od správce financí očekáváte',
                '<span style="font-weight:bold;"><a href="http://skrooge.org/">Skrooge</a>:</span>
                            program s filozofií dát uživatelům možnost volby je Skrooge 0.8.1 v repozitářích Mageia dostupný také. Osobní správce financí pro KDE4, který chce být vysoce intuitivní a přitom poskytovat skvělé funkce',
                '<span style="font-weight:bold;"><a href="http://www.gnucash.org/">GnuCash</a>:</span>
                            GnuCash 2.4.5 je dostupný v internetových repozitářích. Přichází s šekovou knížkou, jako zapisovacím rozhraním, které vám dovoluje zadávat a sledovat vaše finanční záležitosti'),
        'h4_communication' => 'Komunikace',
        'h5_im' => 'Okamžitá výměna zpráv (IM)',
        'array_im' => array('<span style="font-weight:bold;"><a href="http://kopete.kde.org/">Kopete</a>:</span>
                            Poslední stabilní verze známého programu na okamžitou výměnu zpráv, součást KDE SC 4.6.3, je dostupná s podporou pro velký počet v IM používaných protokolů',
                '<span style="font-weight:bold;"><a href="http://www.pidgin.im/">Pidgin</a>:</span>
                            Poslední stabilní verze, 2.7.11 slavného na GTK+2.0 založeného klienta pro okamžitou výměnu zpráv je dostupná v internetových repozitářích. Podporuje spoustu protokolů. Podrobnější přehled oprav a vylepšení v této verzi naleznete v <a href="http://developer.pidgin.im/wiki/ChangeLog">seznamu změn</a>',
                '<span style="font-weight:bold;"><a href="http://live.gnome.org/Empathy">Empathy</a>:</span>
                            Empathy je klient IM založený na prostředí Telepathy, Empathy 2.34.0.',
                '<span style="font-weight:bold;"><a href="http://www.kadu.net/">Kadu</a>:</span>
                            Program na okamžitou výměnu zpráv rozumící si s protokolem Gadu-Gadu. Poslední stabilní verze, 0.9.1'),
        'h5_irc' => 'IRC',
        'array_irc' => array('<span style="font-weight:bold;"><a href="http://quassel-irc.org/">Quassel</a>:</span>
                            Poslední stabilní verze, 0.7.2, Quasselu, na Qt založeného moderního distribuovaného IRC klienta je dostupná v internetových repozitářích',
                '<span style="font-weight:bold;"><a href="http://konversation.kde.org/">Konversation</a>:</span>
                            IRC klient se všemi funkcemi s podporou pro KDE. Poslední stabilní verze, 1.3.1, je dostupná v internetových repozitářích Mageia',
                '<span style="font-weight:bold;"><a href="http://xchat-gnome.navi.cx/">XChat-gnome</a>:</span>
                            IRC klient pro pracovní prostředí GNOME. Poslední stabilní verze, 0.26.1, je dostupná v repozitářích',
                '<span style="font-weight:bold;"><a href="http://www.kvirc.net/">KVIrc</a>:</span>
                            Na Qt založený IRC klient s podporou motivů, průhlednosti, šifrování, s mnoha pokročilými vlastnostmi IRC, a skriptováním. Poslední stabilní verze, 4.0.4, je dostupná v repozitářích'),
        'h5_voip' => 'VOIP',
        'array_voip' => array('<span style="font-weight:bold;"><a href="http://www.qutecom.com/">QuteCom</a>:</span>
                            SIP Telefon, který vám umožňuje dělat videohovory mezi dvěma počítači a hlasové přenosy, a mít všechna svá spojení na lidi na jednom místě. Je založen na Qt. Poslední stabilní verze 2.2.',
                '<span style="font-weight:bold;"><a href="http://www.ekiga.org/">Ekiga</a>:</span>
                            Nástroj pro přenos videa a audia přes internet. Používá protokoly SIP a H323 a rozumí si i s Microsoft Netmeeting. Dříve se mu říkalo GnomeMeeting. Poslední stabilní verze, 3.2.7,.'),
        'h4_virt' => 'Virtualizace',
        'array_virt' => array('<span style="font-weight:bold;"><a href="http://www.virtualbox.org/">VirtualBox</a>:</span>
                            Verze 4.0.6, obecně zaměřeného virtualizačního programu dostupná v repozitářích Mageia',
                '<span style="font-weight:bold;"><a href="http://virt-manager.et.redhat.com/">virt-manager</a>:</span>
                            Mageia má poslední verzi virt-manager (and libvirtd), populární sady správcovských nástrojů pro virtualizaci, společně s napojeními pro různé jazyky, pro usnadnění správy virtuálních strojů, založených buď na technologii kvm nebo na xen.',
                '<span style="font-weight:bold;"><a href="http://www.winehq.org/">WINE</a>:</span>
                            Poslední vývojářská verze WINE, 1.3.20, je dostupná v repozitářích; můžete si být jisti tím, že obvykle naleznete poslední verzi tohoto slavného nástroje v repozitáři Backports krátce potom, co se objeví nové vydání!'),
        'h4_graphics' => 'Grafika',
        'array_graphics' => array('<span style="font-weight:bold;"><a href="http://www.gimp.org/">Gimp</a>:</span>
                            verze 2.6.11 slavného programu pro práci s obrázky (GNU Image Manipulation Program).',
                '<span style="font-weight:bold;"><a href="http://inkscape.sourceforge.net/">Inkscape</a>:</span>
                            verze 0.48.1 slavného programu pro vektorové kreslení (SVG).',
                '<span style="font-weight:bold;">Blender<a href="http://www.blender.org/"></a>:</span>
                            Vysoce kvalitní animační studio. Verze 2.49b.'),
        'h4_ides' => 'Jednotná vývojářská prostředí (IDE)',
        'array_ides' => array('<span style="font-weight:bold;"><a href="http://anjuta.org/">Anjuta</a>:</span>
                            Mocné GNOME IDE pro C, C++, Python, Java,…',
                '<span style="font-weight:bold;"><a href="http://www.eclipse.org/">Eclipse</a>:</span>
                            Známé IDE pro Javu a jiné jazyky',
                '<span style="font-weight:bold;"><a href="http://netbeans.org/">Netbeans</a>:</span>
                            Dobře známá rovnocenná náhrada za Eclipse',
                '<span style="font-weight:bold;"><a href="http://kdevelop.org/">KDevelop</a>:</span>
                            KDE IDE'),
        'h3_base_system' => 'Základní systém',
        'kernel' => 'Mageia používá řadu jádra 2.6.38, v době vydání 2.6.38.7, více podrobností o
                            vylepšeních v této řadě jádra najdete na <a href="http://kernelnewbies.org/Linux_2_6_38">tu</a>; důležité poznámky k tomuto jádru:',
        'kernel_array' => array('Podpora pro seskupování automatických procesů (více viz příspěvek Linuse Torvaldse na
                            <a href="http://lkml.org/lkml/2011/1/18/322">LKML</a> (Linux Kernel Mailing list); a zmínky o této úpravě <a href="https://lwn.net/Articles/418884/">LWN.net</a>)',
                'Značné zlepšení škálovatelsnosti v linuxové vrstvě VFS (Virtual File System)',
                'Transparentní podpora velkých stránek (bez použití hugetblfs)',
                'Automatické rozšíření odchozího síťového provozu přes více CPU',
                'Podpora pro AMD Fusion APU',
                'Podpora pro Intel Sandy Bridge a Panther Point.',
                'Ipset 6.4 s podporou IPv6'),
        'initscripts' => 'Zavádění systému: stále používá spouštěcí skripty, 9.21',
        'alsa' => 'ALSA 1.0.24.x:',
        'alsa_array' => array('libalsa2-1.0.24.1',
                'alsa-plugins-1.0.24',
                'alsa-tools-1.0.24.1: kousky firmware byly rozděleny do nového odděleného balíčku, alsa-firmware',
                'alsa-utils-1.0.24.2'),
        'h3_x' => 'X server',
        'array_x' => array('X server 1.10.1, s plnou podporou pro Udev (Udev nahrazuje v tomto ohledu HAL)',
                'ATI/AMD svobodný ovladač radeon: Kernel Mode Setting je nyní povoleno jako výchozí, přináší výkonnostní a provozní zlepšení.',
                'Podpora pro Intel Sandy Bridge (2nd Generation Intel® Core™ i7/i5/i3) podle <a href="http://intellinuxgraphics.org/2011Q1.html">intelovských specifikací</a>.',
                'Nouveau: ovladač Nouveau se používá jako výchozí u podporovaných grafický support, 2D akceleraci, a podporu pro RandR 1.2 (snadné nastavení více monitorů)'),
        'h4_proprietary' => 'Soukromé ovladače grafických karet',
        'text_proprietary' => 'Poslední verze ovladačů nVidia a ATI (fglrx) jsou dostupné v internetovém repozitáři Nonfree.',
        'h3_input_methods' => 'Vstupní metody',
        'text_input_methods' => 'Pro výběr vstupní metody dle vlastní volby můžete použít draklocale (“Spravovat lokalizaci systému” v Ovládacím centru Mageia &rarr; Systém). Mageia 1 bude mít dvě vstupní metody:',
        'h4_ibus' => 'IBus',
        'text_ibus' => 'Podpora pro IBus (Intelligent Input Bus), verze 1.3.9 je již dostupná v oficiálních repozitářích.',
        'h4_scim' => 'SCIM',
        'text_scim' => 'SCIM (Smart Common Input Method), verze 1.4.9, je rovněž dostupná v oficiálních repozitářích.',
        'h2_available_media' => 'Dostupná instalační média',
        'text_available_media_1' => 'Mageia má dva odlišné typy instalačních médií:',
        'array_available_media' => array('DVD ISO a Dual-arch CD ISO, které používá tradiční instalátor drakx a',
                'Live CD ISO, toto je živý ISO obraz, který se dá použít na náhled na  distribuci a lze jej taktéž použít pro instalaci Mageii na váš HDD'),
        'text_available_media_2' => 'Informace ke stahování naleznete vždy na <a href="http://mageia.org/downloads/">stránkách pro stažení Mageii</a>;
                    přímé stahování (ftp a http) a BitTorrent je dostupné.
                    Více informací naleznete na <a href="http://www.mageia.org/wiki/doku.php?id=mageia_installation_media">stránkách k instalačním médiím pro Mageiu</a>.',
        'h2_software_repos' => 'Internetové repozitáře s programy',
        'text_software_repos_1' => 'Balíčky pro Mageiu jsou ve třech různých repozitářích/médiích, v závislosti na tom, jakou licenci 
            daný balíček používá.',
        'text_software_repos_2' => 'Zde je přehled těchto repozitářů:',
        'h4_core' => 'Core:',
        'text_core' => 'Repozitář Core zahrnuje balíčky s programy se svobodným otevřeným zdrojovým kódem, tj. balíčky
                            licencované pod některou svobodnou licencí Open Source. Sada médií Core je přidána jako výchozí a
                            “Core Release” a “Core Updates” jsou povoleny jako výchozí',
        'h4_nonfree' => 'Nonfree:',
        'text_nonfree' => 'Repozitář Nonfree repository zahrnuje balíčky, které jsou zadarmo, tj. Mageia je
                            může šířit, ale obsahují programy s uzavřeným zdrojovým kódem (odtud název pro Nonfree); Tento repozitář například zahrnuje soukromé ovladače pro grafické karty nVidia a ATI, firmware pro různé Wi-Fi
                            carty… atd. Sada médií Nonfree je přidána jako výchozí a “Nonfree Release” a
                            “Nonfree Updates” jsou povoleny jako výchozí',
        'h4_tainted' => 'Tainted:',
        'text_tainted' => 'Repozitář Tainted zahrnuje balíčky s různými licencemi, svobodnými, i s těmi, které svobodné nejsou, ale hlavním hlediskem pro balíčky v tomto repozitáři je, že se některých světových zemích porušovat patenty a zákony vztahující se k autorskému právu (např. multimediální kodeky nezbytné pro přehrání různých souborů audia/videa, balíčky potřebné pro
                            přehrávání komerčních video DVD… atd.); jako taková je sada médií Tainted přidána jako výchozí, ale
                            <strong>není</strong> povolena jako výchozí, tj. je to věc volby; takže před tím, než balíčky z tohoto repozitáře použijete, nahlédněte do zákonů své země. Repozitář je přidán jen kvůli pohodlí uživatelů. Tento repozitář je pro    uživatele Mageii to, co je PLF pro uživatele Mandrivy nebo RPM Fusion pro uživatele Fedory.'
    ),
    'nl' => array(
        'page_title' => 'Mageia 1 opmerkingen bij deze release',
        'page_desc' => 'Opmerkingen bij de Mageia 1-release',
        'page_kw' => 'mageia, release notes, Mga1, opmerkingen bij deze release',
        'page_h1' => 'Opmerkingen bij deze release',
        'major_features' => 'Belangrijke eigenschappen en features',
        'major_features_array' => array('Pakketmanagement',
                'Systeemconfiguratie',
                'Migratie vanuit Mandriva Linux',
                'Werkomgevingen',
                'Bureaublad-applicaties',
                'Basissysteem',
                'X Server'),
        'installation_methods' => 'Beschikbare Installatiemethoden',
        'support' => 'Support',
        'hw_req' => 'Hardware-eisen',
        'mageia_milestone' => 'Mageia 1 markeert het eindpunt van een proces van grote inspanningen die begon op de dag dat de
                    <a href="https://www.mageia.org/nl/about/2010-sept-announcement.html">Mageia-distributie werd geboren</a>.',
        'overview' => 'Deze pagina geeft u een overzicht van wat Mageia u te bieden heeft.',
        'h2_major_features' => 'Belangrijke eigenschappen en features in Mageia',
        'h3_package_management' => 'Gereedschappen voor Pakketmanagement',
        'text_package_management_1' => 'Mageia gebruikt het bekende programma urpmi, de standaard oplosser van afhankelijkheden in Mageia,
                    om RPM-pakketten te installeren op het systeem. Ook kan dit gereedschap gebruikt worden om uw systeem bij te werken. Voor de volledige
                    details over het gebruik van dit gereedschap verwijzen wij naar de urpmi handleiding (man urpmi).',
        'text_package_management_2' => 'Andere gezinsleden voor het beheren van de pakketten zijn:',
        'array_package_management' => array('<span style="font-weight:bold;">urpme:</span>
                            gebruikt om op uw systeem geïnstalleerde RPM-pakketten te verwijderen, met vele op de commandoregel beschikbare opties',
                '<span style="font-weight:bold;">urpmf:</span>
                            een gereedschap om te tonen in welk pakket een specifiek bestand zit; Naast vele andere mogelijkheden kan het ook gebruikt worden om te zoeken naar
                            allerlei RPM-labels (requires, suggests, conflicts, obsoletes) in de pakketten van de officiële
                            bronnen',
                '<span style="font-weight:bold;">urpmq:</span>
                            Het query-gereedschap voor de urpmi-database, u kunt dit zien als \'rpm -q\' maar met meer uitgebreide mogelijkheden, welke gebruikt
                            kan worden om de RPM-pakketten in de officiële bronnen te bevragen',
                '<span style="font-weight:bold;">urpmi.update:</span>
                            een gereedschap om de urpmi database op de installatie van de gebruiker bij te kunnen werken, maar kan ook gebruikt worden
                            om bepaalde geconfigureerde mediabronnen op het systeem (tijdelijk) uit te schakelen of te negeren',
                '<span style="font-weight:bold;">urpmi.addmedia:</span>
                            een gereedschap om Mageia-mediabronnen toe te voegen (zowel online (http, ftp, rsync) alsook lokale bronnen)',
                '<span style="font-weight:bold;">urpmi.removemedia:</span>
                            een gereedschap om geconfigureerde mediabronnen van het systeem te verwijderen'),
        'h3_system_configuration' => 'Mageia systeemconfiguratiegereedschappen',
        'text_system_configuration' => 'Mageia zal ook de bekende \'drak\'-gereedschappen blijven gebruiken; dit zijn een paar van de belangrijkste:',
        'array_system_configuration' => array('<span style="font-weight:bold;">drakconf:</span>
                            Het Mageia control center, welke gebruikt kan worden om allerlei systeembeheergereedschappen te starten',
                '<span style="font-weight:bold;">drak3d:</span>
                            Een gereedschap om 3D-effecten op de desktop te configureren (bijv. Compiz)',
                '<span style="font-weight:bold;">drakguard:</span>
                            Een gereedschap om ouderlijk toezicht mee in te stellen. Het kan gebruikt worden om toegang tot websites te blokkeren of
                            de toegang tot internet te beperken tot bepaalde tijden',
                '<span style="font-weight:bold;">rpmdrake:</span>
                            Een eenvoudige interface waarmee het installeren en verwijderen van softwarepakketten (RPM) in Mageia de gebruiker gemakkelijk wordt gemaakt',
                '<span style="font-weight:bold;">drakx-net:</span>
                            De standaard Mageia-netwerkgereedschappen',
                '<span style="font-weight:bold;">userdrake:</span>
                            Een gebruiksvriendelijk en krachtig gereedschap voor het beheer van gebruikers en groepen',
                '<span style="font-weight:bold;">system-config-printer:</span>
                            Een krachtig gereedschap om de printer te configureren, ontwikkeld door Redhat/Fedora'),
        'h3_migration' => '<a href="../migrate/">Migreren vanaf Mandriva Linux</a>',
        'text_migration' => 'Als u Mandriva Linux 2010.1 of 2010.2 gebruikt,
                        kijkt u dan naar onze <a href="../migrate">migratiegids</a>.',
        'h3_available_des' => 'Beschikbare werkomgevingen',
        'text_available_des' => 'Aangezien Mageia een distributie is welke niet aan één specifieke werkomgeving geliëerd is, ondersteunt het alle populaire werkomgevingen en diverse
                    windowmanagers. Hier is een overzicht:',
        'h4_kde' => 'KDE4',
        'text_kde' => 'KDE SC 4.6.3. Deze uitgave brengt vele verbeteringen en nieuwe mogelijkheden. Voor meer details
                    kunt u de <a href="http://www.kde.org/announcements/4.6/">release-aankondiging</a> bekijken.',
        'h4_gnome' => 'GNOME',
        'text_gnome' => 'GNOME 2.32, tezamen met de complete verzameling van populaire bijgeleverde applicaties (Totem, Rhythmbox,
                    Epiphany, Evolution, The GNOME Archiver (file-roller), Evince, F-Spot, enz.).',
        'h4_xfce' => 'XFCE4',
        'text_xfce' => 'De meest recente stabiele versie van XFCE, versie 4.8.1, brengt vele verbeteringen. Voor de volledige details
                    kunt u de <a href="http://xfce.org/about/news/?post=1295136000">XFCE 4.8 release-aankondiging</a> bekijken.',
        'h4_lxde' => 'LXDE',
        'text_lxde' => 'Met de meest recente LXDE pakketten (PCManFM, LXSession, LXTerminal, Gpicview, LXRandR).',
        'h4_wms' => 'Windowmanagers',
        'text_wms' => 'Diverse windowmanagers (welke in de praktijk eigenlijk kleine en lichtgewicht werkomgevingen zijn):',
        'array_wms' => array('Openbox',
                'WindowMaker',
                'IceWM',
                'Fluxbox',
                'Fvwm2'),
        'h3_desktop_apps' => 'Bureaublad-applicaties',
        'text_desktop_apps' => 'Veel van de meest populaire bureaublad-applicaties. Hier is een overzicht',
        'h4_web_and_mail' => 'Web Browsers en e-mailprogramma\'s',
        'array_web_and_mail' => array('<span style="font-weight:bold;"><a href="http://www.mozilla.com/firefox/">Firefox</a>:</span>
                            Firefox 4.0.1., deze nieuwe release brengt veel verbeteringen voor alle aspecten van Firefox. Zie voor verdere informatie de <a href="http://www.mozilla.com/nl/firefox/4.0/releasenotes/">Firefox 4 release-opmerkingen</a>',
                '<span style="font-weight:bold;"><a href="http://www.chromium.org/Home">Chromium-Browser</a>:</span>
                            Google Chromium-browser 11.0.696.65., en voor het gemak van de gebruiker is de Chromium-browser er in drie verschillende smaken: stable, beta, en unstable, waarbij elke smaak de respectievelijke upstream bron volgt. Het spreekt natuurlijk voor zichzelf dat het gebruik van de beta en unstable versies niet geheel zonder gevaar is!',
                '<span style="font-weight:bold;"><a href="http://www.gnome.org/projects/epiphany/">Epiphany</a>:</span>
                            De meest recente versie, 2.30.6, van deze GNOME web browser, gebaseerd op de webkit rendering engine, is beschikbaar in Mageia',
                '<span style="font-weight:bold;"><a href="http://pim.kde.org/">KMail</a>:</span>
                            De meest recente stabiele versie, 4.4.11.1, van dit bekende KDE4 e-mailprogramma',
                '<span style="font-weight:bold;"><a href="http://www.mozillamessaging.com/thunderbird">Thunderbird</a>:</span>
                            De meest recente stabiele versie van dit bekende e-mailprogramma van Mozilla, Thunderbird 3.1.10, is beschikbaar in Mageia met alle verbeteringen en foutoplossingen van de 3.1.x series. Voor verdere informatie, zie de <a href="http://www.mozillamessaging.com/nl/thunderbird/3.1.10/releasenotes/">release-opmerkingen</a>. Zowel de Enigmail- en de Lightning-extensies zijn beschikbaar',
                '<span style="font-weight:bold;"><a href="http://www.gnome.org/projects/evolution/">Evolution</a>:</span>
                            De meest recente stabiele versie, 2.32.2, van dit bekende GNOME-e-mailprogramma met ingebouwde kalender en contactenbeheer.'),
        'h4_office' => 'Office',
        'array_office' => array('<span style="font-weight:bold;"><a href="http://www.documentfoundation.org/develop">LibreOffice</a>:</span>
                            <a href="http://blog.mageia.org/en/?p=190">Mageia heeft beloofd om LibreOffice volledig te ondersteunen</a> en heeft zich aan deze belofte gehouden, de stabiele versie 3.3.2.2 van LibreOffice is beschikbaar in de Mageia repositories, waardoor een volledige set van office applicaties beschikbaar komt',
                '<span style="font-weight:bold;"><a href="http://www.calligra-suite.org/">Calligra</a>:</span>
                            Het Calligra Suite-projekt is een vervolg op het KOffice-projekt en bevat alle bekende componenten van KOffice. Voor een gedetailleerde lijst met de beschikbare programma\'s en wat zij doen kunt u op hun website kijken',
                '<span style="font-weight:bold;"><a href="http://techbase.kde.org/Projects/KMyMoney">KmyMoney</a>:</span>
                            De meest recente stabiele versie, 4.5.3, van dit KDE-gereedschap voor het bijhouden van uw persoonlijke financiën is reeds beschikbaar in onze repositories. De focus van dit programma ligt primair op de accuraatheid, het gebruiksgemak, en de aanwezigheid van alle gebruikelijke functies die u in een dergelijk pakket verwacht',
                '<span style="font-weight:bold;"><a href="http://skrooge.org/">Skrooge</a>:</span>
                            In lijn met onze filosofie om gebruikers de keuze te laten, bieden wij ook Skrooge 0.8.1 aan, een ander KDE4-gereedschap voor het bijhouden van uw persoonlijke financiën. Het programma heeft als doel om erg intuïtief in het gebruik te zijn en toch krachtige functies te bieden',
                '<span style="font-weight:bold;"><a href="http://www.gnucash.org/">GnuCash</a>:</span>
                            GnuCash 2.4.5 is beschikbaar in onze online repositories en komt met een chequeboek-achtig grafisch register welke u in staat stelt om uw financiën in te kunnen voeren en te volgen'),
        'h4_communication' => 'Communicatie',
        'h5_im' => 'Instant Messaging',
        'array_im' => array('<span style="font-weight:bold;"><a href="http://kopete.kde.org/">Kopete</a>:</span>
                            De meeste recente versie van deze bekende instant messenger, onderdeel van KDE 4.6.3, is beschikbaar met ondersteuning voor een grote variëteit aan instant messaging-protocollen',
                '<span style="font-weight:bold;"><a href="http://www.pidgin.im/">Pidgin</a>:</span>
                            De meeste recente versie (2.7.11) van deze bekende op GTK+2.0 gebaseerde instant messenger is beschikbaar in de online repositories en ondersteunt een grote variëteit aan instant messaging-protocollen. Voor meer details over de foutoplossingen en verbeteringen die deze versie brengt verwijzen door naar de <a href="http://developer.pidgin.im/wiki/ChangeLog">lijst met veranderingen</a>',
                '<span style="font-weight:bold;"><a href="http://live.gnome.org/Empathy">Empathy</a>:</span>
                            Empathy is een IM-programma gebaseerd op het Telepathy framewerk, Empathy 2.34.0.',
                '<span style="font-weight:bold;"><a href="http://www.kadu.net/">Kadu</a>:</span>
                            Een instant messenger programma dat compatible is met het Gadu-Gadu protocol. De meest recente stabiele versie is 0.9.1'),
        'h5_irc' => 'IRC',
        'array_irc' => array('<span style="font-weight:bold;"><a href="http://quassel-irc.org/">Quassel</a>:</span>
                            De meest recente versie (0.7.2) van Quassel, een moderne en gedistribueerde op Qt-gebaseerde IRC-client is beschikbaar in de online repositories',
                '<span style="font-weight:bold;"><a href="http://konversation.kde.org/">Konversation</a>:</span>
                            Een grafische IRC-client met KDE-ondersteuning en veel functionaliteit. De meest recente stabiele versie (1.3.1) is beschikbaar in de online Mageia-repositories',
                '<span style="font-weight:bold;"><a href="http://xchat-gnome.navi.cx/">XChat-gnome</a>:</span>
                            Een grafische IRC-client voor de GNOME werkomgeving. De meest recente stabiele versie (0.26.1) is beschikbaar in de online repositories',
                '<span style="font-weight:bold;"><a href="http://www.kvirc.net/">KVIrc</a>:</span>
                            Een op Qt-gebaseerde IRC-client met ondersteuning voor themes, transparantie, encryptie, scripting, en nog veel andere uitgebreide IRC-mogelijkheden. De meest recente stabiele versie (4.0.4) is beschikbaar in de online Mageia-repositories'),
        'h5_voip' => 'VOIP',
        'array_voip' => array('<span style="font-weight:bold;"><a href="http://www.qutecom.com/">QuteCom</a>:</span>
                            Een SIP-programma welk u in staat stelt om gratis PC-naar-PC video- en voicegesprekken te voeren. Tevens kunt u al uw IM-contacten in één plaats integreren in dit Qt-gebaseerde programma. De meest recente stabiele versie is 2.2.',
                '<span style="font-weight:bold;"><a href="http://www.ekiga.org/">Ekiga</a>:</span>
                            Een programma om met zowel video als audio over het internet te communiceren. Zowel het SIP- als het H323-protocol worden ondersteund en het is compatible met Microsoft Netmeeting. Voorheen heette dit programma GnomeMeeting. De meest recente stabiele versie is 3.2.7,.'),
        'h4_virt' => 'Virtualisatie',
        'array_virt' => array('<span style="font-weight:bold;"><a href="http://www.virtualbox.org/">VirtualBox</a>:</span>
                            Versie 4.0.6 van deze voor algemeen gebruik geschikte virtual machine is beschikbaar in de Mageia-repositories',
                '<span style="font-weight:bold;"><a href="http://virt-manager.et.redhat.com/">virt-manager</a>:</span>
                            Deze Mageia-release komt ook met de meest recente versie van virt-manager (and libvirtd), het populaire beheertool voor virtualisatie. Ook kan het beheer van op kvm- of xen-gebaseerde virtuele machines vereenvoudigd worden door de meegeleverde koppelingen voor diverse populaire computertalen.',
                '<span style="font-weight:bold;"><a href="http://www.winehq.org/">WINE</a>:</span>
                            De laatste ontwikkelaarsversie van WINE (1.3.20) is beschikbaar in de repositories; U kunt ervan uitgaan dat de meest recente versie van deze bekende applicatie kort na release in de \'Backports repository\' beschikbaar is!'),
        'h4_graphics' => 'Grafisch',
        'array_graphics' => array('<span style="font-weight:bold;"><a href="http://www.gimp.org/">Gimp</a>:</span>
                            Versie 2.6.11 van het bekende GNU Image Manipulation Program.',
                '<span style="font-weight:bold;"><a href="http://inkscape.sourceforge.net/">Inkscape</a>:</span>
                            Versie 0.48.1 van het bekende SVG-gebaseerde vector-drawing programma.',
                '<span style="font-weight:bold;">Blender<a href="http://www.blender.org/"></a>:</span>
                            Het animatiepakket van hoge kwaliteit. Versie 2.49b.'),
        'h4_ides' => 'IDEs',
        'array_ides' => array('<span style="font-weight:bold;"><a href="http://anjuta.org/">Anjuta</a>:</span>
                            Een krachte GNOME IDE voor C, C++, Python, Java,…',
                '<span style="font-weight:bold;"><a href="http://www.eclipse.org/">Eclipse</a>:</span>
                            De bekende IDE voor Java en andere talen',
                '<span style="font-weight:bold;"><a href="http://netbeans.org/">Netbeans</a>:</span>
                            Het eveneens bekende alternatief voor eclipse',
                '<span style="font-weight:bold;"><a href="http://kdevelop.org/">KDevelop</a>:</span>
                            De KDE IDE'),
        'h3_base_system' => 'Basissysteem',
        'kernel' => 'Mageia 1 wordt uitgebracht met kernel 2.6.38, versie 2.6.38.7 in het specifiek bij de eerste release, voor verdere details over
                            de verbeteringen in deze versie van de kernel kunt u <a href="http://kernelnewbies.org/Linux_2_6_38">hier vinden</a>; Significante aanpassingen in deze versie van de kernel:',
        'kernel_array' => array('Ondersteuning voor automatische procesgroepering (voor verdere details: zie de mail van Linus Torvalds\' op
                            <a href="http://lkml.org/lkml/2011/1/18/322">LKML</a> (Linux Kernel Mailing list); en verwijzingen naar deze wijziging
                            op <a href="https://lwn.net/Articles/418884/">LWN.net</a>)',
                'Significante verbeteringen in de schaalbaarheid van de Linux VFS (Virtual File System) layer',
                'Transparent Huge Page ondersteuning (zonder gebruik te maken van hugetblfs)',
                'Automatisch verdelen van uitgaand netwerkverkeer over meerdere processoren',
                'Ondersteuning voor AMD Fusion APUs',
                'Ondersteuning voor Intel Sandy Bridge en Panther Point.',
                'Ipset 6.4 met IPv6-ondersteuning'),
        'initscripts' => 'Boot system: gebruikt nog steeds versie 9.21 van initscripts',
        'alsa' => 'ALSA 1.0.24.x:',
        'alsa_array' => array('libalsa2-1.0.24.1',
                'alsa-plugins-1.0.24',
                'alsa-tools-1.0.24.1: De firmware-code is ondergebracht in een nieuw seperaat pakket: alsa-firmware',
                'alsa-utils-1.0.24.2'),
        'h3_x' => 'X server',
        'array_x' => array('X server (1.10.1) met volledige Udev-ondersteuning (Udev vervangt HAL wat dat betreft)',
                'ATI/AMD free radeon driver: Kernel Mode Setting is nu standaard ingeschakeld wat resulteert in betere prestaties en een grotere compatibiliteit.',
                'Intel Sandy Bridge (2e Generatie Intel® Core™ i7/i5/i3) ondersteuning in lijn met de <a href="http://intellinuxgraphics.org/2011Q1.html">Intel specificaties</a>.',
                'Nouveau: De Nouveau driver wordt standaard gebruikt voor ondersteunde nVidia grafische kaarten. Deze driver brengt ook ondersteuning voor Kernel Mode Setting, 2D-acceleratie, en RandR 1.2-ondersteuning (voor gemakkelijke multi-monitor-installatie)'),
        'h4_proprietary' => 'Proprietary grafische kaart drivers',
        'text_proprietary' => 'De laatste versies van zowel de  nVidia alsook de ATI (fglrx) proprietary drivers zijn beschikbaar in de \'Nonfree\' online repository.',
        'h3_input_methods' => 'Invoermethoden',
        'text_input_methods' => 'Om de invoermethode van uw voorkeur te selecteren kunt u draklocale (“Manage localization of your system” in het Mageia Control Center &rarr; Systeem) gebruiken. Mageia 1 heeft twee invoermethodes:',
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
    ),
    'de' => array(
                'page_title' => 'Mageia 1 Release-Notes',
                'page_desc' => 'Hinweise zur Veröffentlichung von Mageia 1',
                'page_kw' => 'mageia, release notes, Mga1',
                'page_h1' => 'Release-Notes',
        'major_features' => 'Hauptmerkmale',
        'major_features_array' => array('Paketverwaltung',
                'Systemkonfiguration',
                'Migration von Mandriva Linux',
                'Desktop-Umgebungen',
                'Desktop-Anwendungen',
                'Basis-System',
                'X-Server'),
        'installation_methods' => 'Verfügbare Installationsmethoden',
        'support' => 'Unterstützung',
        'hw_req' => 'Hardware Anforderungen',
        'mageia_milestone' => 'Mageia 1 ist der Meilenstein einer Menge harter Arbeit, die mit dem Tag began, als die 
                    <a href="https://www.mageia.org/de/about/2010-sept-announcement.html">Mageia-Distribution geboren wurde</a>.',
        'overview' => 'Diese Seite dient zur Übersicht, was Mageia Ihnen bieten kann.',
        'h2_major_features' => 'Hauptmerkmale in Mageia',
        'h3_package_management' => 'Die Paketverwaltung',
        'text_package_management_1' => 'Mageia nutzt das bereit bekannte urpmi - das ist die Standard-Paketverwaltung in Mageia, die selbstständig die Abhängigkeiten auflöst -
                    zum Installieren von RPM-Paketen. Weiterhin kann es auch zum Aktualisieren Ihres Systems verwendet werden.
                    Details zur Verwendung von urpmi, finden Sie in den entsprechendes Man-Pages (man urpmi).',
        'text_package_management_2' => 'Der Rest der Familie sind:',
        'array_package_management' => array('<span style="font-weight:bold;">urpme:</span>
                            zum Deinstallieren von RPM-Paketen auf Ihrem System, mit  vielen Optionen',
                '<span style="font-weight:bold;">urpmf:</span>
                            ein Werkzeug, das zeigt welche Pakete eine bestimmte Datei enthalten; Neben weiteren Funktionen, kann es zudem genutzt werden um nach allen möglichen RPM-Tags in Paketen zu suchen 
                           (requires, suggests, conflicts, obsoletes) die in den offiziellen Paketquellen liegen',
                '<span style="font-weight:bold;">urpmq:</span>
                            das Werkzeug für Anfragen an die urpmi-Datenbank. Ähnlich wie \'rpm -q\', jedoch mit vielen weiteren Funktionen, die genutzt werden können, um
                            RPM-Pakete in den offizielen Paketquellen zu prüfen',
                '<span style="font-weight:bold;">urpmi.update:</span>
                            ein Werkzeug zum Aktualisieren der urpmi-Datenbank der vorhandenen Installation. Es kann ebenfalls zur Deaktivierung bereits konfigurierter Paketquellen genutzt werden',
                '<span style="font-weight:bold;">urpmi.addmedia:</span>
                            ein Werkzeug um Mageia Paketquellen (sowohl online (http, ftp, rsync) als auch lokal) hinzuzufügen',
                '<span style="font-weight:bold;">urpmi.removemedia:</span>
                            ein Werkzeug zum Entfernen bereits konfigurierter Paketquellen'),
        'h3_system_configuration' => 'Mageia-Systemverwaltungs-Werkzeuge',
        'text_system_configuration' => 'Mageia wird weiterhin die bekannten Drak-Tools verwenden; hier sind die Highlights:',
        'array_system_configuration' => array('<span style="font-weight:bold;">drakconf:</span>
                            Das Mageia-Kontrollzentrum (mcc), das es erlaubt, alle Arten der Systemadministrations-Werkzeuge zu starten',
                '<span style="font-weight:bold;">drak3d:</span>
                            Ein Werkzeug zur Einrichtung der 3D-Desktop-Effekte (z.B. Compiz)',
                '<span style="font-weight:bold;">drakguard:</span>
                            Ein Werkzeug, das es Ihnen erlaubt eine Kindersicherung einzurichten. Es kann den Zugang zu Webseiten blockieren und den Zugang zum Internet zeitabhängig beschränken',
                '<span style="font-weight:bold;">rpmdrake:</span>
                            Eine einfache Oberfläche zur Installation und Deinstallation der Software-Pakete (RPM) in Mageia',
                '<span style="font-weight:bold;">drakx-net:</span>
                            Das Standard Mageia-Netzwerk-Werkzeug',
                '<span style="font-weight:bold;">userdrake:</span>
                            Ein benutzerfreundliches aber mächtiges Werkzeug zur Administration der Nutzer und Gruppen',
                '<span style="font-weight:bold;">system-config-printer:</span>
                            Ein mächtiges Einrichtungsprogramm für Drucker, das von Redhat/Fedora entwickelt wurde'),
        'h3_migration' => '<a href="../migrate/">Migration von Mandriva Linux</a>',
        'text_migration' => 'Wenn Sie Mandriva Linux 2010.1 oder 2010.2 nutzen,
                        beachten Sie unsere <a href="../migrate">Migrations-Anleitung</a>.',
        'h3_available_des' => 'Verfügbare Desktop-Umgebungen',
        'text_available_des' => 'Als eine Desktop-unabhängige Distribution bietet Mageia alle populären Desktop-Umgebungen zusammen mit verschiedenen Fenster-Managern. Hier ist ein kurzer Überblick: ',
        'h4_kde' => 'KDE4',
        'text_kde' => 'KDE SC 4.6.3. Diese Version kommt mit vielen Verbessungen und neuen Funktionen. Weitere Details finden Sie
                    in der <a href="http://www.kde.org/announcements/4.6/">Release Ankündigung</a>.',
        'h4_gnome' => 'GNOME',
        'text_gnome' => 'GNOME 2.32, mit einer Fülle an beliebten Anwendungen (Totem, Rhythmbox,
                    Epiphany, Evolution, The GNOME Archiver (file-roller), Evince, F-Spot… etc.).',
        'h4_xfce' => 'XFCE4',
        'text_xfce' => 'Die aktuellste stabile Version, 4.8.1, von XFCE, kommt mit vielen Verbesserungen. Details entnehmen Sie der 
                    XFCE 4.8 <a href="http://xfce.org/about/news/?post=1295136000">Release-Ankündigung</a>.',
        'h4_lxde' => 'LXDE',
        'text_lxde' => 'Die aktuellsten stabilen LXDE-Pakete (PCManFM, LXSession, LXTerminal, Gpicview, LXRandR).',
        'h4_wms' => 'Window-Manager',
        'text_wms' => 'Viele weitere Window-Managers, welche in Wirklichkeit sehr kleine Desktop-Umgebungen mit geringen Hardware-Anforderungen sind:',
        'array_wms' => array('Openbox',
                'WindowMaker',
                'IceWM',
                'Fluxbox',
                'Fvwm2'),
        'h3_desktop_apps' => 'Desktop-Anwendungen',
        'text_desktop_apps' => 'Viele bekannte Desktop-Anwedungen, hier sind die Highlights.',
        'h4_web_and_mail' => 'Web-Browser und Email-Programme',
        'array_web_and_mail' => array('<span style="font-weight:bold;"><a href="http://www.mozilla.com/firefox/">Firefox</a>:</span>
                            Firefox 4.0.1., diese Version bringt viele Verbesserung in allen Bereichen von Firefox, weitere Informationen können Sie den <a href="http://www.mozilla.com/en-US/firefox/4.0/releasenotes/">Firefox 4 Release-Notes</a> entnehmen',
                '<span style="font-weight:bold;"><a href="http://www.chromium.org/Home">Chromium-Browser</a>:</span>
                            Google Chromium-Browser 11.0.696.65., und zur Nutzerfreundlichkeit wird der Chromium-Browser in drei verschiedenen Editionen angeboten (stable, beta und unstable), die jeweils den unterschiedlichen Upstream-Entwicklungszweigen folgenen. Natürlich sind die Beta- und Unstable-Versionen nichts für schwache Nerven!',
                '<span style="font-weight:bold;"><a href="http://www.gnome.org/projects/epiphany/">Epiphany</a>:</span>
                            Die aktuellste stabile Version, 2.30.6, des GNOME-Web-Browsers, der auf der Webkit-Rendering-Engine basiert, ist in den Mageia Repos verfügbar',
                '<span style="font-weight:bold;"><a href="http://pim.kde.org/">KMail</a>:</span>
                            Die aktuellste stabile Version, 4.4.11.1, des beliebten KDE4 E-Mail-Programmes',
                '<span style="font-weight:bold;"><a href="http://www.mozillamessaging.com/thunderbird">Thunderbird</a>:</span>
                            Die aktuellste stabile Version des beliebten Emai-Programmes von Mozilla, Thunderbird 3.1.10, ist in den online Repositories vorhanden, mit allen Verbesserungen und Fixes der 3.1.x Serie. Weitere Informationen finden Sie in den <a href="http://www.mozillamessaging.com/en-US/thunderbird/3.1.10/releasenotes/">Release-Notes</a>. Sowohl die Enigmail- als auch Lightning-Erweiterung sind verfügbar',
                '<span style="font-weight:bold;"><a href="http://www.gnome.org/projects/evolution/">Evolution</a>:</span>
                            Die aktuellste stabile Version, 2.32.2,der beliebten GNOME-E-Mail-, Kalendar-, Adressbuch- und Kommunikations-Software.'),
        'h4_office' => 'Office',
        'array_office' => array('<span style="font-weight:bold;"><a href="http://www.documentfoundation.org/develop">LibreOffice</a>:</span>
                            <a href="http://blog.mageia.org/de/2010/11/14/mageia-unterstutzt-libreoffice/">Mageia hat versprochen, LibreOffice vollständig zu unterstützen</a> und wir haben dieses Versprechen gehalten. Die stabile Version 3.3.2.2 von LibreOffice ist in den Software-Quellen vorhanden und Mageia bietet damit eine vollständige Office-Suite. ',
                '<span style="font-weight:bold;"><a href="http://www.calligra-suite.org/">Calligra</a>:</span>
                            Das Calligra Suite-Projekt ist die Fortsetzung des KOffice-Projektes. Calligra hat alle bekannten Komponenten von KOffice. Eine detaillierte Liste der vorhandenen Applikationen und was Sie damit tun können, finden Sie auf der Webseite des Projektes',
                '<span style="font-weight:bold;"><a href="http://techbase.kde.org/Projects/KMyMoney">KmyMoney</a>:</span>
                            Die letzte stabile Version 4.5.3 der persönlichen Finanz-Software für KDE 4 ist in den Software-Quellen enthalten. Die Entwickler haben ihren Fokus gelegt auf Genauigkeit, einfach zu benutzen und alle Funktionen, die Sie von einer Finanz-Software erwarten. ',
                '<span style="font-weight:bold;"><a href="http://skrooge.org/">Skrooge</a>:</span>
                            Mit der Philosophie, dem Benutzer verschiedene Optionen zu bieten, ist Skrooge 0.8.1 ebenfalls in den Mageia Software-Quellen enthalten. Skrooge ist eine persönliche Finanz-Software die intuitiv ist und dennoch wichtige Funktionen bietet. ',
                '<span style="font-weight:bold;"><a href="http://www.gnucash.org/">GnuCash</a>:</span>
                            GnuCash 2.4.5 ist ebenfalls vorhanden in den Software-Quellen. Die Benutzer-Oberfläche erinnert an ein Buchführungs-Journal und erlaubt es Ihnen, Ihre finanziellen Transaktionen einzugeben und nachzuverfolgen. '),
        'h4_communication' => 'Kommunikation',
        'h5_im' => 'Instant Messaging',
        'array_im' => array('<span style="font-weight:bold;"><a href="http://kopete.kde.org/">Kopete</a>:</span>
                            Die aktuellste stabile Version  des bekannten Instant-Messenger, der Teil der KDE SC 4.6.3 ist, ist mit umfangreicher Unterstützung der verschiedenen Instant-messaging-Protokolle verfügbar',
                '<span style="font-weight:bold;"><a href="http://www.pidgin.im/">Pidgin</a>:</span>
                            Die aktuellste stabile Version, 2.7.11, des beliebten GTK+2.0 basierten Instant-Messager-Clients ist in den Repositories vorhanden. Er unterstützt eine große Fülle von Instant-Messaging-Protokollen. Weitere Details zu den Verbesserungen und Korrekturen dieser Version finden Sie im <a href="http://developer.pidgin.im/wiki/ChangeLog">Changelog</a>',
                '<span style="font-weight:bold;"><a href="http://live.gnome.org/Empathy">Empathy</a>:</span>
                            Empathy ist ein IM-Client, der auf dem Telepathy-Framework basiert. Empathy 2.34.0.',
                '<span style="font-weight:bold;"><a href="http://www.kadu.net/">Kadu</a>:</span>
                            Ein Instant-Messenger, kompatibel mit dem Gadu-Gadu Protokol. Die aktuellste stabile Version ist 0.9.1'),
        'h5_irc' => 'IRC',
        'array_irc' => array('<span style="font-weight:bold;"><a href="http://quassel-irc.org/">Quassel</a>:</span>
                            Die aktuellste stabile Version, 0.7.2, von Quassel, ein Qt-basierter moderner IRC-Client ist in den Repositories vorhanden',
                '<span style="font-weight:bold;"><a href="http://konversation.kde.org/">Konversation</a>:</span>
                            Ein funktionsreicher grafischer IRC-Client mit KDE Unterstützung, die aktuellste stabile Version, 1.3.1, ist in den Mageia Repositories verfügbar',
                '<span style="font-weight:bold;"><a href="http://xchat-gnome.navi.cx/">XChat-Gnome</a>:</span>
                            Ein grafischer IRC-Client für den GNOME-Desktop. Die aktuellste stabile Version, 0.26.1, ist in the Repositories zu finden',
                '<span style="font-weight:bold;"><a href="http://www.kvirc.net/">KVIrc</a>:</span>
                            Ein Qt-basierter IRC-Client, der Themes, Tranzparenz, Verschlüsselung, viele erweiternde IRC-Features und Scripting unterstützt. Die aktuellste stabile Version, 4.0.4, ist in den Repositories vorhanden'),

        'h5_voip' => 'VOIP',
        'array_voip' => array('<span style="font-weight:bold;"><a href="http://www.qutecom.com/">QuteCom</a>:</span>
                            Ein Qt-basiertes SIP-Softphone (Software-Telefon), dass es Ihnen ermöglicht kostenlose Gespräche vom PC zu einem anderen PC zu führen und gleichzeitig all Ihre IM-Kontakte in einer Stelle versammelt. Die aktuellste stabile Version ist 2.2.',
                '<span style="font-weight:bold;"><a href="http://www.ekiga.org/">Ekiga</a>:</span>
                           Ein Programm für Video- und Audio-Gespräche über das Internet. Es verwendet sowohl das SIP als auch das H323 Protokol und ist kompatible mit Microsoft Netmeeting. Es ist ebenfalls unter dem Namen GnomeMeeting bekannt. Die aktuellste stabile Version ist 3.2.7,.'),
        'h4_virt' => 'Virtualissierung',
        'array_virt' => array('<span style="font-weight:bold;"><a href="http://www.virtualbox.org/">VirtualBox</a>:</span>
                            Version 4.0.6 der für alle Einsatzzwecke geeigneten Virtualisierungs-Software ist in den Software-Quellen enthalten. ',
                '<span style="font-weight:bold;"><a href="http://virt-manager.et.redhat.com/">virt-manager</a>:</span>
                            Mageia kommt mit der aktuellsten Version des Virt-Managers (und libvirtd), den populären Werkzeugen für Virtualisierung mit Anbindungen für verschiedene Programmiersprachen, um die Verwaltung von virtuellen Maschinen, die auf kvm oder xen basieren, zu vereinfachen.',
                '<span style="font-weight:bold;"><a href="http://www.winehq.org/">WINE</a>:</span>
                            Die aktuellste Entwickler-Version von WINE, 1.3.20, ist in den Software-Quellen enthalten. Sie können sicher sein, dass Sie die jeweils aktuellste Version dieser Anwendung kurz nach Freigabe durch die Entwickler in den Backports-Quellen finden.'),
        'h4_graphics' => 'Grafik-Programme',
        'array_graphics' => array('<span style="font-weight:bold;"><a href="http://www.gimp.org/">Gimp</a>:</span>
                            Version 2.6.11 des bekannten  GNU-Bildbearbeitungs-Programmes.',
                '<span style="font-weight:bold;"><a href="http://inkscape.sourceforge.net/">Inkscape</a>:</span>
                            Version 0.48.1 des bekannten  SVG-vektor-basierten Zeichenprorgramm.',
                '<span style="font-weight:bold;">Blender<a href="http://www.blender.org/"></a>:</span>
                            Das "High-Quality" Animations-Studio. Version 2.49b.'),
        'h4_ides' => 'IDEs',
        'array_ides' => array('<span style="font-weight:bold;"><a href="http://anjuta.org/">Anjuta</a>:</span>
                            Eine mächtige GNOME-IDE für C, C++, Python, Java,…',
                '<span style="font-weight:bold;"><a href="http://www.eclipse.org/">Eclipse</a>:</span>
                            Die bekannte-IDE für Java und andere Programmiersprachen',
                '<span style="font-weight:bold;"><a href="http://netbeans.org/">Netbeans</a>:</span>
                            Die genau so bekannte Alternative für Eclipse',
                '<span style="font-weight:bold;"><a href="http://kdevelop.org/">KDevelop</a>:</span>
                            Die KDE-IDE'),
        'h3_base_system' => 'Grundsystem',
        'kernel' => 'Mageia kommt mit Kernel 2.6.38, genauer 2.6.38.7 zum Release-Zeitpunkt, weitere Hinweise zu den Verbesserungen in diesem Kernel finden Sie <a href="http://kernelnewbies.org/Linux_2_6_38">hier</a>; Wichtige Neuerungen in diesem Kernel:',
        'kernel_array' => array('Unterstützung für automatische Prozess-Gruppierung (weitere Details finden Sie in dem Post von Linux Torvalds auf der
                            <a href="http://lkml.org/lkml/2011/1/18/322">LKML</a> (Linux-Kernel-Mailingliste); und Anmerkungen über diesen Patch auf <a href="https://lwn.net/Articles/418884/">LWN.net</a>)',
                'Signifikante Skalierungs-Verbesserungen in der Linux-VFS-Schicht (Virtuelles Dateisystem)',
                'Unterstützung für „Transparent Huge Page“ ohne Benutzung von „hugetblfs“)',
                'Automatische Verteilung ausgehenden Netzwerk-Verkehrs über mehrere CPUs',
                'Unterstützung für die AMD-Fusion-APUs',
                'Unterstützung für die Intel-Sandy-Bridge- und -Panther-Point-Architekturen.',
                'Ipset 6.4 mit IPv6-Unterstützung'),
        'initscripts' => 'Boot-System: benutzt weiterhin initscripts, 9.21',
        'alsa' => 'ALSA 1.0.24.x:',
        'alsa_array' => array('libalsa2-1.0.24.1',
                'alsa-plugins-1.0.24',
                'alsa-tools-1.0.24.1: Die Firmware-Teile sind in ein eigenes Paket abgespalten worden: alsa-firmware',
                'alsa-utils-1.0.24.2'),
        'h3_x' => 'X server',
        'array_x' => array('X server 1.10.1, mit vollständiger Udev-Unterstützung (Udev ersetzt HAL in dieser Beziehung)',
                'Freie ATI/AMD-Radeon-Treiber: Kernel-Mode-Setting ist nun standardmäßig aktiviert, hiermit werden eine höhere Performance und Kompatibilitätsverbesserungen erreicht.',
                'Intel-Sandy-Bridge-Unterstützung (2. Generation der Intel® Core™ i7/i5/i3) laut <a href="http://intellinuxgraphics.org/2011Q1.html">Intel-Specifikationen</a>.',
                'Nouveau: der Nouveau-Treiber wird standardmäßig für unterstützte nVidia-Grafikkarten verwendet. Er bietet Kernel-Mode-Setting-Unterstützung, 2D-Beschleunigung und RandR 1.2-Unterstützung. (Für einfache Monitor-Einrichtung)'),
        'h4_proprietary' => 'Unterstützung für proprietäre Grafikkarten-Treiber',
        'text_proprietary' => 'Die neuesten Versionen der proprietären nVidia- und ATI- (fglrx) -Treiber sind über die Nonfree-Paketquellen verfügbar.',
        'h3_input_methods' => 'Eingabe-Methoden',
        'text_input_methods' => 'Um die von Ihnen bevorzugte Eingabe-Methoden auszuwählen, können Sie draklocale (“Auswählen der Region und Sprache” im Mageia-Kontrollzentrum &rarr; System). Mageia 1 besitzt zwei Eingabe-Methoden:',
        'h4_ibus' => 'IBus',
        'text_ibus' => 'IBus (der „Intelligent Input Bus“), Version 1.3.9 ist in den Paketquellen verfügbar.',
        'h4_scim' => 'SCIM',
        'text_scim' => 'SCIM („Smart Common Input Method“), Version 1.4.9, ist auch in den Paketquellen verfügbar.',
        'h2_available_media' => 'Zur Ferfügung stehende Installationsmedien',
        'text_available_media_1' => 'Mageia bietet zwei verschiedene Installationsmedien:',
        'array_available_media' => array('Die DVD-ISO und die Dual-arch-CD-ISO mit Benutzung des traditionellen Drakx-Installers und',
                'Die Live-CD-ISO zum vorherigen Testen des Systems, kann aber auch auf die Festplatte installiert werden.'),
        'text_available_media_2' => 'Sie finden weitere Informationen über die Möglichkeiten, diese Medien herunterzuladen auf der <a href="http://mageia.org/downloads/">Mageia Download-Seite</a>;
                    es bestehen sowohl direkte Download-Möglichkeiten (via ftp und http) als auch Bittorrents.
                    Für weitere Informationen beachten Sie bitte auch die <a href="http://www.mageia.org/wiki/doku.php?id=mageia_installation_media">Mageia-Installationsmedien-Seite</a>.',
        'h2_software_repos' => 'Online Software-Quellen',
        'text_software_repos_1' => 'Die Pakete in Mageia befinden in 3 verschiedenen Paketquellen (Repositories, Medien), abhängig von der jeweiligen Lizenz, enthalten. ',
        'text_software_repos_2' => 'Hier ist ein kurzer Überblick:',
        'h4_core' => 'Core:',
        'text_core' => 'Die Core-Quelle enthält Pakete mit einer freien Open-Source-Lizenz. Das Set der Core-Medien wird standardmäßig hinzugefügt und "Core Release" und "Core Updates" sind automatisch aktiviert. ',
        'h4_nonfree' => 'Nonfree:',
        'text_nonfree' => 'Die  Nonfree-Quelle beinhaltet Pakete, die kostenlos sind, so dass Mageia sie weiter verteilen kann, aber sie enthalten Closed-Source Software (daher auch der Name "Nonfree"). Beispiele für hier enthaltene Pakete sind die proprietären nVidia- und ATI-Grafiktreiber, Firmware für verschiedene WiFi-Karten usw. 
        Das Set der Nonfree-Medien wird ebenfalls standardmäßig hinzugefügt, "Nonfree Release" und "Nonfree Updates" sind automatisch aktiviert. ',
        'h4_tainted' => 'Tainted:',
        'text_tainted' => 'Die Tainted-Quelle enthält Pakete unter verschiedenen Lizenzen, freie und unfreie, aber das wichtigste Kriterium für Pakete in diesem Medium ist, dass die Pakete bestehende Patente in den verschiedenen Ländern verletzen können. Beispiele hierfür sind die verschiedenen Multimedia-Codecs die zum Abspielen von verschiedenen Audio-/Video-Formaten benötigt werden, Pakte die zum Abspielen von Kauf-Video-DVDs gebraucht werden, usw. Daher wird zwar das Set der Tainted-Quellen standardmäßig hinzugefügt, aber 
                            <strong>nicht</strong> automatisch aktiviert. Diese Aktivierung müssen Sie selbst vornehmen. Am besten, Sie überprüfen vorher, wie die Gesetze in Ihrem Land bezüglich Software-Patenten gestaltet sind, bevor Sie die hier angebotenen Pakete verwenden. Dieses Repository wird nur hinzugefügt, um die Verwendung für die Benutzer zu vereinfachen. Dieses Verzeichnis ist für Mageia was PLF für Mandriva-Benutzer oder RPM Fusion für Fedora-Benutzer ist. '
    )
);

