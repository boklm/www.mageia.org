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
    )
);

