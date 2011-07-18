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
    'zh-tw' => array(
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
        'mageia_milestone' => '自從 <a href="https://www.mageia.org/zh-tw/about/2010-sept-announcement.html">Mageia 套件誕生</a>以來，Mageia 1 是第一個里程碑。',
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
        'text_available_media_2' => '您可以在 <a href="http://mageia.org/zh-tw/downloads/">Mageia 下載頁面</a>直接透過 http 與 ftp 下載這些映像檔；
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
        'page_title' => 'Poznámky k vydání Mageia 1',
        'page_desc' => 'Poznámky k vydání Mageia 1',
        'page_kw' => 'mageia, release notes, Mga1',
        'page_h1' => 'Poznámky k vydání',
        'major_features' => 'Hlavní vlastnosti',
        'major_features_array' => array('Správa balíčků',
                'Nastavení systému',
                'Přechod z Mandriva Linuxu',
                'Pracovní prostředí',
                'Programy',
                'Základní systém',
                'X server'),
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
        'h4_xfce' => 'XFCE4',
        'text_xfce' => 'Poslední stabilní verze 4.8.1 XFCE přináší četná vylepšení. Abyste získali celkový přehled, podívejte se na XFCE 4.8 <a href="http://xfce.org/about/news/?post=1295136000">oznámení o vydání</a>.',
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
                            Poslední stabilní verze, 2.7.11, slavného na GTK+2.0 založeného klienta pro okamžitou výměnu zpráv je dostupná v internetových repozitářích. Podporuje spoustu protokolů. Podrobnější přehled oprav a vylepšení v této verzi naleznete v <a href="http://developer.pidgin.im/wiki/ChangeLog">seznamu změn</a>',
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
                            Telefon SIP, který vám umožňuje dělat videohovory mezi dvěma počítači a hlasové přenosy, a mít všechna svá spojení na lidi na jednom místě. Je založen na Qt. Poslední stabilní verze 2.2.',
                '<span style="font-weight:bold;"><a href="http://www.ekiga.org/">Ekiga</a>:</span>
                            Nástroj pro komunikaci prostřednictvím videa a audia přes internet. Používá protokoly SIP a H323 a rozumí si s Microsoft Netmeeting. Dříve se mu říkalo GnomeMeeting. Poslední stabilní verze, 3.2.7,.'),
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
                            Het Mageia configuratiecentrum, welke gebruikt kan worden om allerlei systeembeheergereedschappen te starten',
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
        'h4_proprietary' => 'Bedrijfseigen grafische kaart drivers',
        'text_proprietary' => 'De laatste versies van zowel de  nVidia alsook de ATI (fglrx) bedrijfseigen drivers zijn beschikbaar in de \'Nonfree\' online repository.',
        'h3_input_methods' => 'Invoermethoden',
        'text_input_methods' => 'Om de invoermethode van uw voorkeur te selecteren kunt u draklocale (“Manage localization of your system” in het Mageia Control Center &rarr; Systeem) gebruiken. Mageia 1 heeft twee invoermethodes:',
        'h4_ibus' => 'IBus',
        'text_ibus' => 'IBus-ondersteuning (de Intelligente Input Bus), versie 1.3.9 is reeds beschikbaar in de officiële repositories.',
        'h4_scim' => 'SCIM',
        'text_scim' => 'SCIM (Smart Common Input Method), versie 1.4.9, is ook beschikbaar in de officiële repositories.',
        'h2_available_media' => 'Beschikbare installatiemedia',
        'text_available_media_1' => 'Mageia heeft twee verschillende typen installatiemedia beschikbaar:',
        'array_available_media' => array('DVD ISO en Dual-arch CD ISO, welke het traditionele drakx-installatieprogramma gebruiken en',
                'Live CD ISO, een live ISO welke zowel gebruikt kan worden als preview van de distributie alsook om Mageia op
                            uw harde schijf te installeren'),
        'text_available_media_2' => 'Informatie over het downloaden van Mageia kunt u te allen tijde vinden op de <a href="http://mageia.org/downloads/">Mageia downloadpagina</a>;
                    direkte (ftp en http) en BitTorrent-downloads zijn beschikbaar.
                    Voor verdere informatie kijkt u op de <a href="http://www.mageia.org/wiki/doku.php?id=mageia_installation_media">Mageia installatiemedia pagina</a>.',
        'h2_software_repos' => 'Software online repositories',
        'text_software_repos_1' => 'De pakketten die in Mageia beschikbaar zijn bevinden zich in drie verschillende repositories of media, afhankelijk 
            van de licentievoorwaarden van ieder pakket.',
        'text_software_repos_2' => 'Een overzicht van deze drie repositories:',
        'h4_core' => 'Core:',
        'text_core' => 'De Core-repository bevatten pakketten met gratis verkrijgbare open source software, dat wil zeggen, pakketten
                            die onder een free-open-source licentie zijn uitgegeven. De Core media worden standaard toegevoegd en
                            “Core Release” en “Core Updates” staan standaard ingeschakeld',
        'h4_nonfree' => 'Nonfree:',
        'text_nonfree' => 'De Nonfree-repository bevat pakketten die gratis verspreid mogen worden, dat wil zeggen dat Mageia vrij
                is om ze te distribueren, maar welke niet vrije software bevatten; Voorbeelden van pakketten die in deze
                repository zitten zijn bijvoorbeeld de bedrijfseigen drivers voor op nVidia en ATI gebaseerde grafische kaarten,
                firmware for diverse Wi-Fi-kaarten, enz. De Nonfree media worden standaard toegevoegd en
                “Nonfree Release” en “Nonfree Updates” staan standaard ingeschakeld',   
        'h4_tainted' => 'Tainted:',
        'text_tainted' => 'De Tainted-repository bevat pakketten uitgebracht onder diverse licenties, zowel vrije als niet vrije, maar
                hebben als belangrijkste kenmerk dat de inhoud van deze pakketten, volgens de patent- of copyright-wetgeving
                in bepaalde landen, (mogelijk) inbreuk maken op de rechten van de patent- of copyright-houder. Voorbeelden 
                hiervan zijn bijvoorbeeld multimedia codecs om bepaalde audio- en videobestandsformaten af te kunnen spelen,
                of pakketten welke nodig zijn om commerciële DVD\'s af te kunnen spelen. Om deze redenen worden deze Tainted
                media wel toegevoegd, maar staan ze standaard <strong>niet</strong> ingeschakeld. Met andere woorden zijn
                bronnen \'opt-in\' en dient u zelf te beslissen of u deze repositories wel of niet inschakelt; Deze repository
                wordt aangeboden voor het gemak van de gebruiker, maar controleert u alstublieft zelf welke lokale wetgeving
                van toepassing is alvorens pakketten uit deze repository te gebruiken. Deze repository voor Mageia is te 
                vergelijken met de rol die de PLF-repository voor Mandriva-gebruikers speelt of RPM-Fusion voor Fedora-gebruikers.'
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
    ),
    'fr' => array(
        'page_title' => 'Notes de version de Mageia 1',
        'page_desc' => 'Notes de version de Mageia 1',
        'page_kw' => 'mageia, notes de version, Mga1',
        'page_h1' => 'Notes de version',
        'major_features' => 'Principales fonctionnalités',
        'major_features_array' => array('Gestion de paquets',
                'Configuration du système',
                'Migration depuis Mandriva Linux',
                'Environnements de bureau',
                'Application de bureau',
                'Système de Base',
                'Serveur X'),
        'installation_methods' => 'Méthodes d\'installation disponibles',
        'support' => 'Support',
        'hw_req' => 'Prérequis matériel',
        'mageia_milestone' => 'Mageia 1 est le fruit d\'un dur labeur qui a commencé le jour de <a href="https://www.mageia.org/en/about/2010-sept-announcement.html">la naissance de Mageia</a>.',
        'overview' => 'Voici un tour d\'horizon de ce que Mageia offre à ses utilisateurs.',
        'h2_major_features' => 'Principales fonctionnalités de Mageia',
        'h3_package_management' => 'Les outils de gestion de paquets',
        'text_package_management_1' => 'Mageia utilise l\'outil en ligne de commande urpmi, déjà connu, pour installler les paquets rpm et gérer les problèmes de dépendances du système. Cet outil permet également bien entendu de mettre à jour le système ; consulter la page de man de urpmi pour plus de détails sur l\'ensemble de ses fonctionnalités.',
        'text_package_management_2' => 'Voici les autres outils de gestion des paquets en ligne de commande :',
        'array_package_management' => array('<span style="font-weight:bold;">urpme :</span>
                            utilisé pour désinstalller des paquets RPM du système, accepte de nombreuses options',
                '<span style="font-weight:bold;">urpmf :</span>
                            outil de recherche de fichiers, permettant de retrouver le paquet contenant celui-ci ; il permet également de faire des recherches basées sur les tags RPM (require, suggest, conflict, obsolete) dans les paquets des dépôts officiels, entre autres possibilités',
                '<span style="font-weight:bold;">urpmq :</span>
                            outil de recherche dans la base de données urpmi. Il est similaire à « rpm -q » mais des possibilités de recherches  les paquets RPM dans les dépôts officiels',
                '<span style="font-weight:bold;">urpmi.update :</span>
                            cet outil permet de mettre à jour la base de données urpmi locale de l\'utilisateur, et peut aussi servir à désactiver certains médias sources du système',
                '<span style="font-weight:bold;">urpmi.addmedia :</span>
                            cet outil permet d\'ajouter des medias ou ressources de Mageia en ligne (HTTP, FTP, rsync) ou bien locaux',
                '<span style="font-weight:bold;">urpmi.removemedia :</span>
                            cette commande permet d\'enlever des ressources media configurées pour le système'),
        'h3_system_configuration' => 'Outils de configuration de Mageia',
        'text_system_configuration' => 'Mageia continuera à utiliser les draktools familiers; en voici l\'essentiel :',
        'array_system_configuration' => array('<span style="font-weight:bold;">drakconf :</span>
                            Le centre de contrôle de Mageia, qui peut s\'utiliser pour démarrer toutes sortes d\'outils d\'administration du système',
                '<span style="font-weight:bold;">drak3d :</span>
                            Un outil de configuration des effets 3D du bureau (ex : Compiz)',
                '<span style="font-weight:bold;">drakguard :</span>
                            Un outil de configuration du contrôle parental. Il peut bloquer l\'accès aux sites web et restreindre la connexion à internet à des périodes spécifiques.',
                '<span style="font-weight:bold;">rpmdrake :</span>
                            Une interface simple qui facilite l\'installation et la désinstallation de paquets dans Mageia (RPM)',
                '<span style="font-weight:bold;">drakx-net :</span>
                            Les outils réseau par défaut de Mageia',
                '<span style="font-weight:bold;">userdrake :</span>
                            Un outil convivial et puissant pour l\'administration des utilisateurs et des groupes',
                '<span style="font-weight:bold;">system-config-printer:</span>
                            Un outil puissant de configuration de l\'imprimante, développé par  Redhat/Fedora'),
        'h3_migration' => '<a href="../migrate/">Migration depuis Mandriva Linux</a>',
        'text_migration' => 'Si vous utilisez Mandriva Linux 2010.1 ou 2010.2,
                        consultez notre <a href="../migrate">guide de migration</a>.',
        'h3_available_des' => 'Environnements de bureau disponibles',
         'text_available_des' => 'En tant que distribution agnostique, Mageia propose tous les environnements de bureau populaires, aux côtés de plusieurs gestionnaires de fenêtres. En voici un aperçu :',
        'h4_kde' => 'KDE4',
        'text_kde' => 'Mageia disposera de KDE SC 4.6.3. Cette version apporte beaucoup d\'améliorations et de nouvelles fonctions. Pour plus d\'informations, visitez l\'<a href="http://www.kde.org/announcements/4.6/">annonce de la version</a>.',
        'h4_gnome' => 'GNOME',
        'text_gnome' => 'GNOME 2.32, livré avec une pléthore d\'applications populaires (Totem, Rhythmbox, Epiphany, Evolution, The GNOME Archiver - file-roller, Evince, F-Spot… etc. ).',
        'h4_xfce' => 'XFCE4',
        'text_xfce' => 'Mageia fournit la dernière version 4.8.1 de XFCE, qui apporte beaucoup d\'améliorations ; pour plus de détails jetez un œil sur <a href="http://xfce.org/about/news/?post=1295136000">l\'annonce de mise à jour</a> de  XFCE 4.8.',
        'h4_lxde' => 'LXDE',
        'text_lxde' => 'les derniers paquets stables de LXDE (PCManFM, LXSession, LXTerminal, Gpicview, LXRandR).',
        'h4_wms' => 'Gestionnaires de fenêtres',
        'text_wms' => 'Différents gestionnaires de fenêtres, d\'autant que ce sont de vrais poids plumes et qu\'ils ont des bureaux très légers :',
        'array_wms' => array('Openbox',
                'WindowMaker',
                'IceWM',
                'Fluxbox',
                'Fvwm2'),
        'h3_desktop_apps' => 'Applications de bureau',
        'text_desktop_apps' => 'De nombreuses applications de bureau très connues, en voici l\'essentiel',
        'h4_web_and_mail' => 'Navigateurs Internet et clients de courriel',
        'array_web_and_mail' => array('<span style="font-weight:bold;"><a href="http://www.mozilla.com/firefox/">Firefox</a>:</span>
                             Firefox 4.0.1., cette nouvelle version apporte avec elle de nombreuses améliorations concernant tous les aspects de Firefox, consultez les <a href="http://www.mozilla.com/en-US/firefox/4.0/releasenotes/">notes de version de Firefox 4</a> pour en savoir plus',
                '<span style="font-weight:bold;"><a href="http://www.chromium.org/Home">Chromium-Browser</a>:</span>
                             Chromium-browser 11.0.696.65 de Google est, pour le confort des utilisateurs, disponible en trois versions différentes (stable, beta et instable). Chacune d\'elles provient, en amont, d\' une voie différente, inutile de préciser que la beta et l\'instable ne sont pas destinées aux cardiaques !',
                '<span style="font-weight:bold;"><a href="http://www.gnome.org/projects/epiphany/">Epiphany</a>:</span>
                             La dernière version stable 2.30.6 du navigateur Web de GNOME,  basée sur le moteur de rendu WebKit, est disponible dans le dépôt de Mageia',
                '<span style="font-weight:bold;"><a href="http://pim.kde.org/">KMail</a>:</span>
                            La dernière version stable, la 4.4.11.1, du célèbre client de courriel de KDE4',
                '<span style="font-weight:bold;"><a href="http://www.mozillamessaging.com/thunderbird">Thunderbird</a>:</span>
                             La dernière version stable de Thunderbird 3.1.10, le célèbre client de courriel de la fondation Mozilla, est disponible sur le dépôt en ligne avec toutes les améliorations et les correctifs de la série 3.1.x. Pour de plus amples informations vous pouvez consultez les <a href="http://www.mozillamessaging.com/en-US/thunderbird/3.1.10/releasenotes/">notes de version</a>. Les extensions Enigmail et Lightning sont également disponibles',
                '<span style="font-weight:bold;"><a href="http://www.gnome.org/projects/evolution/">Evolution</a>:</span>
                             La dernière version stable, la 2.32.2, du célèbre client de messagerie, agenda, carnet d\'adresses et outil de communication de GNOME.'),
        'h4_office' => 'Bureautique',
        'array_office' => array('<span style="font-weight:bold;"><a href="http://www.documentfoundation.org/develop">LibreOffice</a>:</span>
                            <a href="http://blog.mageia.org/en/?p=190">Mageia a promis de supporter entièrement LibreOffice</a> et nous avons tenu notre promesse. La version stable 3.3.2.2 de LibreOffice est disponible dans les dépôts de Mageia, apportant une suite d\'applications bureautiques complète',
                '<span style="font-weight:bold;"><a href="http://www.calligra-suite.org/">Calligra</a>:</span>
                             Le projet Calligra Suite est la suite du projet KOffice, il dispose de tous les éléments habituels de KOffice, vous pouvez consulter leur site internet pour connaître la liste des applications disponibles et savoir ce qu\'elles font',
                '<span style="font-weight:bold;"><a href="http://techbase.kde.org/Projects/KMyMoney">KmyMoney</a>:</span>
                             La dernière version stable, 4.5.3 du gestionnaire de finances personnelles de KDE4 est déjà sur les dépôts en ligne, il a pour objectif d\'être précis, simple d\'utilisation et de disposer de toutes les fonctionnalités que l\'on attend habituellement d\'un gestionnaire de finances',
                '<span style="font-weight:bold;"><a href="http://skrooge.org/">Skrooge</a>:</span>
                             Ayant pour philosophie de donner le choix aux utilisateurs, Skrooge 0.8.1 est également disponible dans les dépôts de Mageia ; gestionnaire de finances de KDE4, il se veut très intuitif, tout en ayant des fonctions très puissantes',
                '<span style="font-weight:bold;"><a href="http://www.gnucash.org/">GnuCash</a>:</span>
                GnuCash 2.4.5 est disponible sur les dépôts en ligne, il est installé avec un utilitaire d\'enregistrement pour les chèques (interface graphique) qui vous permet de garder les traces de vos transactions financières'),                      
        'h4_communication' => 'Les applications de communication',
          'h5_im' => 'La messagerie instantanée',
        'array_im' => array('<span style="font-weight:bold;"><a href="http://kopete.kde.org/">Kopete</a>:</span>
        La dernière version de cette messagerie instantanée, qui fait partie de  KDE SC 4.6.3, est disponible avec le support d\'une quantité considérable de protocoles de messagerie instantanée',
                '<span style="font-weight:bold;"><a href="http://www.pidgin.im/">Pidgin</a>:</span>
                             La dernière version stable 2.7.11 du fameux client de messagerie basé sur GTK+2.0 est disponible sur les dépôts en ligne, elle supporte pléthore de protocoles de messagerie instantanée. Pour plus de détails sur les choix et les améliorations que cette version propose, voir <a href="http://developer.pidgin.im/wiki/ChangeLog">le journal de bord</a>',              
                 '<span style="font-weight:bold;"><a href="http://live.gnome.org/Empathy">Empathy</a>:</span>
                 Empathy 2.34.0 est un client de messagerie instantanée basé sur l\'architecture de Telepathy.',
                '<span style="font-weight:bold;"><a href="http://www.kadu.net/">Kadu</a>:</span>
                            Une messagerie instantanée compatible avec le protocole Gadu-Gadu. La dernière version stable est la 0.9.1'),
                           'h5_irc' => 'IRC (messagerie instantanée)',
        'array_irc' => array('<span style="font-weight:bold;"><a href="http://quassel-irc.org/">Quassel</a>:</span>
        La dernière version stable est la version  0.7.2 de Quassel : une version moderne, basée sur Qt du client IRC distribué est disponible sur les dépôts en ligne',
                              '<span style="font-weight:bold;"><a href="http://konversation.kde.org/">Konversation</a>:</span>
                Un client IRC complètement graphique avec le support KDE, la dernière version stable 1.3.1 est disponible sur les dépôts en ligne',
                              '<span style="font-weight:bold;"><a href="http://xchat-gnome.navi.cx/">XChat-gnome</a>:</span>
                             Un client IRC graphique pour le bureau GNOME. La dernière version stable, 0.26.1, est disponible dans les dépôts',
                             '<span style="font-weight:bold;"><a href="http://www.kvirc.net/">KVIrc</a>:</span>
                             Un client IRC basé sur Qt avec le support pour les thèmes, la transparence, le chiffrement, et beaucoup d\'autres caractéristiques IRC, ainsi que le langage de script. La dernière version, 4.0.4, est disponible dans les dépôts'),                             
        'h5_voip' => 'la VoIP',
        'array_voip' => array('<span style="font-weight:bold;"><a href="http://www.qutecom.com/">QuteCom</a>:</span>
                             Un utilitaire de téléphonie utilisant le protocole SIP (Session Initiation Protocol) qui permet les communications gratuites de PC à PC en appels voix et vidéo, et qui intégre tous vos contacts IM en un seul endroit, c\'est basé en Qt. La dernière version stable est la 2.2.',                            
                '<span style="font-weight:bold;"><a href="http://www.ekiga.org/">Ekiga</a>:</span>
                             Un outil pour communiquer en audio et vidéo partout via Internet. Il utilise à la fois les protocoles SIP et H323 et est compatible avec Microsoft Netmeeting.Il s\'appelait auparavant GnomeMeeting. Dernière version stable 3.2.7.'),                            
        'h4_virt' =>  'La virtualisation',
        'array_virt' => array('<span style="font-weight:bold;"><a href="http://www.virtualbox.org/">VirtualBox</a>:</span>
                            La version 4.0.6, pour des utilisations généralistes de virtualisation complète, est disponible dans les dépôts Mageia',     
                '<span style="font-weight:bold;"><a href="http://virt-manager.et.redhat.com/">Virt-manager</a>:</span>
                             Mageia est livrée avec la dernière version de Virt-manager (et libvirtd), le célèbre groupe d\'applications pour la  virtualisation en relation avec une variété de langues pour faciliter la gestion des machines virtuelles, qu\'elles soient basées sur  kvm ou xen.',
                         '<span style="font-weight:bold;"><a href="http://www.winehq.org/">WINE</a>:</span>
                             Le dernier développement de WINE, version 1.3.20, est disponible sur les dépôts ; vous pouvez être certain de trouver la dernière application sur les dépôts Backports tout de suite après une toute nouvelle mise à jour !'), 
        'h4_graphics' =>  'Les applications graphiques', 
        'array_graphics' => array('<span style="font-weight:bold;"><a href="http://www.gimp.org/">Gimp</a>:</span>
                            la version 2.6.11 du célèbre programme GNU de manipulation d\'image.',                           
                '<span style="font-weight:bold;"><a href="http://inkscape.sourceforge.net/">Inkscape</a>:</span>
                            la version 0.48.1 du programme de dessin vectoriel SVG basé sur XML.',
                            '<span style="font-weight:bold;">Blender<a href="http://www.blender.org/"></a>:</span>
                            Le studio d\'animation en très haute qualité. Version 2.49b.'),
                           'h4_ides' => 'les environnements pour les applications de développement intégrés (IDE)',
        'array_ides' => array('<span style="font-weight:bold;"><a href="http://anjuta.org/">Anjuta</a>:</span>
                            Un puissant environnement IDE pour  GNOME pour C, C++, Python, Java,…',
                           '<span style="font-weight:bold;"><a href="http://www.eclipse.org/">Eclipse</a>:</span>
                            L\'environnement IDE bien connu pour Java et d\'autres langages',
                            '<span style="font-weight:bold;"><a href="http://netbeans.org/">Netbeans</a>:</span> L\'alternative pour Eclipse, bien connue également',
                            '<span style="font-weight:bold;"><a href="http://kdevelop.org/">KDevelop</a>:</span>
                          L\'environnement IDE de développement de KDE'),
        'h3_base_system' => 'Le système de base',
        'kernel' => 'Mageia est livrée avec les séries du noyau 2.6.38, en particulier la version  2.6.38.7 à l\'instant de cette mise à jour, pour plus de détails sur les améliorations de ces séries du noyau, jetez un œil <a href="http://kernelnewbies.org/Linux_2_6_38">ici</a>; les grandes lignes de ce noyau sont :',
        'kernel_array' => array('Le support pour les processus automatiques groupés (pour de plus amples détails voir le billet de Linus Torvalds sur
                            <a href="http://lkml.org/lkml/2011/1/18/322">LKML</a> (La liste de diffusion du Noyau Linux) ; et les mentions du correctif (patch) sur 
                             <a href="https://lwn.net/Articles/418884/">LWN.net</a>)',
                'Améliorations sensibles de l\'extensibilité dans la couche Linux de VFS (Virtual File System)',
                'Le support transparent pour le support des pages gigantesques (sans l\'utilisation de hugetblfs)',
                'L\'augmentation automatique du trafic du réseau sortant à travers de multiples flux CPU',
             'Le support pour les APU de l\'AMD Fusion', 
             'Le support d\'Intel Sandy Bridgeet de Panther Point.',
             'Ipset 6.4 avec le support d\'IPv'),
             'initscripts' => 'Le système de boot (ou de démarrage) : continue à utiliser initscripts, 9.21',
        'alsa' => 'ALSA 1.0.24.x :',
        'alsa_array' => array('libalsa2-1.0.24.1',
                'alsa-plugins-1.0.24',
                'alsa-tools-1.0.24.1 : le firmware a été divisé en un nouveau paquet séparé,  alsa-firmware',
             'alsa-utils-1.0.24.2'),
        'h3_x' => ' Le serveur X',
        'array_x' => array('Serveur X 1.10.1, avec le support UDEV entier (Udev remplace HAL à cet égard)',
        'Le pilote ATI/AMD free radeon : le mode Kernel Mode Setting est maintenant activé par défaut, apportant performance et des améliorations en compatibilité.',
                  'Le support d\'Intel Sandy Bridge (2nd Generation Intel® Core™ i7/i5/i3) d\'après <a href="http://intellinuxgraphics.org/2011Q1.html">les spécifications d\'Intel</a>.',       
                 'Nouveau : le pilote Nouveau  est utilisé par défaut pour le support des cartes graphiques nVidia. Cela fournit le support de configuration du Kernel Mode (Mode Noyau), l\'accélération, et le support de RandR 1.2 (afin de faciliter la configuration pour les moniteurs multiples'),                 
        'h4_proprietary' => 'Les pilotes pour cartes graphiques propriétaires',
        'text_proprietary' => 'Les dernières versions des deux pilotes propriétaires nVidia et  ATI (fglrx) sont disponibles sur le dépôt en ligne Nonfree.',
        'h3_input_methods' => 'Les méthodes d\'entrée des caractères au clavier (Input Methods)',
        'text_input_methods' => 'Pour sélectionner les méthodes de saisie des caractères selon votre choix, vous pouvez utiliser draklocale (“Configurer la localisation dans votre système" depuis le Centre de contrôle Mageia). Mageia 1 propose deux méthodes de saisie  :',  
        'h4_ibus' => 'IBus',
        'text_ibus' => 'Le support iBus (le support intelligent de la saisie Input Bus), version  1.3.9 est d\'ores et déjà disponible dans les dépôts officiels.',
        'h4_scim' => 'SCIM (méthode d\'entrée des caractères au clavier)',
                'text_scim' => 'SCIM (Smart Common Input Method), version 1.4.9, est également disponible dans les dépôts officiels.',
        'h2_available_media' =>'Dépôts ou media disponibles pour les installations de Mageia', 
        'text_available_media_1' => 'Mageia propose deux supports différents d\'installation de media :',
        'array_available_media' => array(' les images ISO sur DVD et sur Dual-arch CD, qui utilisent l\'installeur habituel drakx et',
                'L\'image ISO sur live CD qui peut servir à visionner la distribution et qui peut également servir à installer Mageia sur votre disque dur'),

        'text_available_media_2' => ' Vous pourrez toujours trouver de l\'aide pour télécharger sur <a href="http://mageia.org/downloads/">Mageia, page de téléchargement</a>',
                    'Des liens directs (FTP et http) et par Bittorrent  sont disponibles pour le téléchargement. Pour plus de détails, jetez un œil sur <a href="http://www.mageia.org/wiki/doku.php?id=mageia_installation_media">la page d\'installation de Mageia</a>.',
                     'h2_software_repos' => 'Les dépôts ou media  en ligne', 
        'text_software_repos_1' => 'Les paquets de logiciels pour Mageia sont disponibles en trois différents dépôts ou media, selon la licence qui les régit.', 
        'text_software_repos_2' => 'Voici un aperçu de ces dépôts ou media :',
        'h4_core' => 'Core :',
        'text_core' => 'Le dépôt Core (cœur) comprend les paquets de logiciels libres, c\'est-à-dire les paquets relevant d\'une licence libre (open-source). Le dépôt Core est ajouté par défaut et les médias « Core Release » et « Core Updates » sont activés par défaut pour les mises à jour',
        'h4_nonfree' => 'Nonfree :',
        'text_nonfree' => 'Le dépôt Nonfree (non libre) comprend les paquets qui sont en libre diffusion, c\'est-à-dire que Mageia peut les distribuer mais ils contiennent du logiciel non libre (d\'où son nom). Par exemple, ce dépôt contient les pilotes propriétaires des cartes graphiques ATI et nVidia, le firmware de diverses cartes Wi-Fi, etc. Le dépôt Nonfree est ajouté par défaut, les médias « Nonfree Release » et « Nonfree Updates » sont activés par défaut.',
        'h4_tainted' => 'Tainted :',
        'text_tainted' => 'Le dépôt Tainted (impur) comprend les paquets sous diverses licences, libres ou non libres, mais le principal critère pour les paquets placés dans ce dépôt est qu\'ils peuvent enfreindre, <strong>dans certains pays</strong>, les brevets et les lois sur les droits d\'auteur (par exemple, les codecs multimédia nécessaires à l\'exécution de certains fichiers audio/vidéo, les paquets nécessaires pour lire les DVD vidéo du commerce, etc.). Le dépôt Tainted est ajouté par défaut mais <strong>n\'est pas activé par défaut</strong>, c\'est-à-dire que l\'option est ouverte et vous devez vérifier si la loi de votre pays vous autorise à utiliser les paquets de ce dépôt. Celui-ci n\'est ajouté que par commodité pour les utilisateurs. Il est à Mageia ce que PLF est à Mandriva et ce que RPM Fusion est à Fedora.'
    ),
    'it' => array(
        'page_title' => 'Mageia 1 Note di Rilascio',
        'page_desc' => 'Note per il rilascio di Mageia 1',
        'page_kw' => 'mageia, note rilascio, Mga1',
        'page_h1' => 'Note di rilascio',
        'major_features' => 'Principali caratteristiche',
        'major_features_array' => array('Gestione pacchetti',
                'Configurazione di sistema',
                'Migrazione da Mandriva Linux',
                'Ambienti Desktop',
                'Applicazioni Desktop',
                'Sistema Base',
                'Server X'),
        'installation_methods' => 'Metodi di Installazione disponibili',
        'support' => 'Supporti',
        'hw_req' => 'Requisiti Hardware',
        'mageia_milestone' => 'Mageia 1 è la pietra miliare di molto duro lavoro che ha avuto inizio il giorno che
                    <a href="https://www.mageia.org/en/about/2010-sept-announcement.html">la distribuzione Mageia è nata</a>.',
        'overview' => 'Questa pagina d&agrave; una panoramica di cosa Mageia ti offre.',
        'h2_major_features' => 'Principali caratteristiche di Mageia',
        'h3_package_management' => 'Strumenti per la Gestione dei Pacchetti',
        'text_package_management_1' => 'Mageia usa l\'ormai a tutti familiare urpmi, il risolutore di dipendenze di default in Mageia,
                    che puoi usare per installare pacchetti RPM nel sistema. Pu&ograve; essere anche usato per aggiornare il sistema, per tutti i dettagli
                    d\'utilizzo controllate la pagina di manuale di urpmi.',
        'text_package_management_2' => 'Il resto della famiglia:',
        'array_package_management' => array('<span style="font-weight:bold;">urpme:</span>
                            usato per disinstallare pacchetti RPM installati nel sistema, con molte opzioni da linea di comando',
                '<span style="font-weight:bold;">urpmf:</span>
                            uno strumento che pu&ograve; essere utilizzato per sapere quale pacchetto contiene un determinato file; pu&ograve; essere usato anche per cercare
                            ogni sorta di tag RPM (requisiti, consigliati, conflitti, obsoleti) nei pacchetti nel repositories
                            ufficiali, oltre ad altre caratteristiche',
                '<span style="font-weight:bold;">urpmq:</span>
                            lo strumento per interrogare il database di urpmi, pensa a lui come \'rpm -q\' ma con caratteristiche molto più estese che pu&ograve; essere
                            utilizzato per verificare i pacchetti RPM nei repository ufficiali',
                '<span style="font-weight:bold;">urpmi.update:</span>
                            uno strumento per aggiornare il database di urpmi sull\'installazione dell\'utente, pu&ograve; essere usato anche per disabilitare (ignorare)
                            sorgenti dei media configurate sul sistema',
                '<span style="font-weight:bold;">urpmi.addmedia:</span>
                            uno strumento per aggiungere sorgenti di media di Mageia (online (http, ftp, rsync) e locali)',
                '<span style="font-weight:bold;">urpmi.removemedia:</span>
                            uno strumento per rimuovere sorgenti di media configurate sul sistema'),
        'h3_system_configuration' => 'Strumenti di configurazione del sistema per Mageia',
        'text_system_configuration' => 'Mageia continuer&agrave; ad utilizzare gli strumenti drak ormai noti; qui trovate i principali:',
        'array_system_configuration' => array('<span style="font-weight:bold;">drakconf:</span>
                            Il centro di controllo Mageia, che pu&ograve; essere utiizzato per avviare ogni sorta di strumento di amministrazione del sistema',
                '<span style="font-weight:bold;">drak3d:</span>
                            Uno strumento per configurare gli effetti 3D del desktop (ad esempio Compiz)',
                '<span style="font-weight:bold;">drakguard:</span>
                            Uno strumento che permette di configurare il controllo parentale. Pu&ograve; l\'accesso a siti web e restringere
                            la connessione ad internet a specifici intervalli orari',
                '<span style="font-weight:bold;">rpmdrake:</span>
                            Una semplice interfaccia che rende semplice installare e rimuovere pacchetti software (RPM) in Mageia',
                '<span style="font-weight:bold;">drakx-net:</span>
                            Lo strumento di default di Mageia per la gestione della rete',
                '<span style="font-weight:bold;">userdrake:</span>
                            Uno strumento potente e user-friendly per amministrare utenti e gruppi',
                '<span style="font-weight:bold;">system-config-printer:</span>
                            Un potente strumento di configurazione della stampante, sviluppato da RedHat/Fedora'),
        'h3_migration' => '<a href="../migrate/">Migrazione da Mandriva Linux</a>',
        'text_migration' => 'Se stai usando Mandriva Linux 2010.1 o 2010.2,
                        guarda la <a href="../migrate">guida alla migrazione</a>.',
        'h3_available_des' => 'Ambienti Desktop disponibili',
        'text_available_des' => 'Come distribuzione rivolta al desktop, Mageia ha tutti gli ambienti desktop più poplari, assieme a vari
                    window managers. A seguire una panoramica:',
        'h4_kde' => 'KDE4',
        'text_kde' => 'KDE SC 4.6.3. Questa release porta con se molti miglioramenti e nuove caratteristiche. Per ulteriori dettagli
                    controllate l\'<a href="http://www.kde.org/announcements/4.6/">annuncio di rilascio</a>.',
        'h4_gnome' => 'GNOME',
        'text_gnome' => 'GNOME 2.32, con la pletora di applicazioni poplari che si porta dietro (Totem, Rhythmbox,
                    Epiphany, Evolution, l\' Archiviatore di GNOME (file-roller), Evince, F-Spot, ecc).',
        'h4_xfce' => 'XFCE4',
        'text_xfce' => 'L\'ultima versione stabile, la 4.8.1, di XFCE, porta con se molte migliorie, per i dettagli completi
                    date un\'occhiata all\'<a href="http://xfce.org/about/news/?post=1295136000">annuncio di rilascio</a> di XFCE 4.8.',
        'h4_lxde' => 'LXDE',
        'text_lxde' => 'Gli ultimi pacchetti stabili di LXDE (PCManFM, LXSession, LXTerminal, Gpicview, LXRandR).',
        'h4_wms' => 'Window Managers',
        'text_wms' => 'Altri vari window managers, che sono in realt&agrave; solo piccoli e molto leggeri ambienti desktop:',
        'array_wms' => array('Openbox',
                'WindowMaker',
                'IceWM',
                'Fluxbox',
                'Fvwm2'),
        'h3_desktop_apps' => 'Applicazioni Desktop',
        'text_desktop_apps' => 'Molte delle popolari applicazioni desktop, qui trovate le principali.',
        'h4_web_and_mail' => 'Browser Web e client email',
        'array_web_and_mail' => array('<span style="font-weight:bold;"><a href="http://www.mozilla.com/firefox/">Firefox</a>:</span>
                            Firefox 4.0.1., questa nuova release porta con se molti miglioramenti riguardanti tutti gli aspetti di Firefox, per ulteriori informazioni date un\'occhiata alle <a href="http://www.mozilla.com/en-US/firefox/4.0/releasenotes/">note di rilascio di Firefox 4</a>',
                '<span style="font-weight:bold;"><a href="http://www.chromium.org/Home">Chromium-Browser</a>:</span>
                            Google Chromium-browser 11.0.696.65., e per comodità degli utenti il Chromium-browser è presente in tre differnti versioni, stabile, beta e instabile, ognuna delle quali segue un differente canale di upstream, inutile dire che beta e instabile non sono per la salute del cuore!',
                '<span style="font-weight:bold;"><a href="http://www.gnome.org/projects/epiphany/">Epiphany</a>:</span>
                            L\'ultima versione stabile, 2.30.6, del browser web di GNOME basato sul motore di rendering webkit è disponibile nei repo Mageia',
                '<span style="font-weight:bold;"><a href="http://pim.kde.org/">KMail</a>:</span>
                            L\'ultima versione stabile, 4.4.11.1, del famoso client email per KDE4',
                '<span style="font-weight:bold;"><a href="http://www.mozillamessaging.com/thunderbird">Thunderbird</a>:</span>
                            L\'ultima versione stabile del famoso client email prodotto da Mozilla, Thunderbird 3.1.10, &egrave; disponibile nei repo online, con tutte le migliorie e le correzioni della serie 3.1.x, per ulteriori info guardate le <a href="http://www.mozillamessaging.com/en-US/thunderbird/3.1.10/releasenotes/">note di rilascio</a>. Anche le estensioni Enigmail e Lightning sono disponibili.',
                '<span style="font-weight:bold;"><a href="http://www.gnome.org/projects/evolution/">Evolution</a>:</span>
                            L\'ultima versione stabile, 2.32.2, del famoso mailer, calendario, gestore di contatti e strumento di comunicazione di GNOME.'),
        'h4_office' => 'Ufficio',
        'array_office' => array('<span style="font-weight:bold;"><a href="http://www.documentfoundation.org/develop">LibreOffice</a>:</span>
                            <a href="http://blog.mageia.org/en/?p=190">Mageia ha promesso di supportare pienamente LibreOffice</a> e ha mantenuto la promessa, la versione stabile di LibreOffice 3.3.2.2 è disponibile nei repositories Mageia e fornisce una suite completa di applicazioni per ufficio.',
                '<span style="font-weight:bold;"><a href="http://www.calligra-suite.org/">Calligra</a>:</span>
                            Il progetto Calligra Suite &egrave; la continuazione del progetto KOffice, ha tutti i componenti familiari di KOffice, per una lista dettagliata delle applicazioni disponibili e per cosa possono fare visitate il loro sito web',
                '<span style="font-weight:bold;"><a href="http://techbase.kde.org/Projects/KMyMoney">KmyMoney</a>:</span>
                            L\'ultima versione stabile, 4.5.3, del gestore personale delle finanze per KDE4 &egrave; già disponibile nelle fonti online, le sue caratteristiche principali sono l\'accuratezza, la facilità d\'utilizzo e la completezza di funzionalità insieme a tutte le caratteristiche familiari che ti aspetti in un programma per la gestione delle finanze',
                '<span style="font-weight:bold;"><a href="http://skrooge.org/">Skrooge</a>:</span>
                            con la filosofia di dare più opzioni agli utenti, è disponibile anche Skrooge 0.8.1 nelle fonti Mageia, un programma per la gestione delle finanze personali per KDE4, che si prefigge di essere intuitivo pur fornendo funzionalità avanzate',
                '<span style="font-weight:bold;"><a href="http://www.gnucash.org/">GnuCash</a>:</span>
                            GnuCash 2.4.5 è disponibile nelle fonti online'),
        'h4_communication' => 'Comunicazione',
        'h5_im' => 'Messaggistica Istantanea',
        'array_im' => array('<span style="font-weight:bold;"><a href="http://kopete.kde.org/">Kopete</a>:</span>
                            L\'ultima versione stabile dell\'istant messanger familiare, parte di KDE SC 4.6.3, è disponibile con il supporto per una grande varietà di protocolli di messagistica istantanea',
                '<span style="font-weight:bold;"><a href="http://www.pidgin.im/">Pidgin</a>:</span>
                            È disponibile nelle fonti online l\'ultima versione stabile, la 2.7.11, del famoso client di messaggistica istantanea basato sulle GTK+2.0; supporta molti protocolli di messaggistica istantanea. Per maggiori dettagli riguardo alle correzioni e miglioramenti che porta con sé questa versione, dai un\'occhiata al <a href="http://developer.pidgin.im/wiki/ChangeLog">changelog</a>',
                '<span style="font-weight:bold;"><a href="http://live.gnome.org/Empathy">Empathy</a>:</span>
                            Empathy è un client IM che si basa sull\'infrastruttura Telepathy; la versione è la 2.34.0.',
                '<span style="font-weight:bold;"><a href="http://www.kadu.net/">Kadu</a>:</span>
                            Un programma di messagistica istantanea compatibile col protocollo Gadu-Gadu. È disponibile l\'ultima versione stabile, la 0.9.1'),
        'h5_irc' => 'IRC',
        'array_irc' => array('<span style="font-weight:bold;"><a href="http://quassel-irc.org/">Quassel</a>:</span>
                            È disponibile nelle fonti online l\'ultima versione stabile (la 0.7.2) di Quassel, un client IRC moderno basato su Qt',
                '<span style="font-weight:bold;"><a href="http://konversation.kde.org/">Konversation</a>:</span>
                            Un client IRC grafico ricco di funzionalità con il support KDE, l\'ultima versione stabile, la 1.3.1, è disponibile nelle fonti online',
                '<span style="font-weight:bold;"><a href="http://xchat-gnome.navi.cx/">XChat-gnome</a>:</span>
                            A graphical IRC client for the GNOME desktop. The latest stable version, 0.26.1, is available in the repositories',
                '<span style="font-weight:bold;"><a href="http://www.kvirc.net/">KVIrc</a>:</span>
                            Un client IRC basato sulle Qt con il supporto per i temi, trasparenza, cifratura, molte funzionalità avanzate IRC e lo scripting. L\'ultima versione stabile, la 4.0.4, è disponibile nelle fonti'),
        'h5_voip' => 'VOIP',
        'array_voip' => array('<span style="font-weight:bold;"><a href="http://www.qutecom.com/">QuteCom</a>:</span>
                            Un softphone SIP che ti permette di fare chiamate gratuite da PC a PC, sia video che vocali e di integrare tutti i contatti IM in un posto. È basato su Qt ed è disponibile l\'ultima versione stabile, la 2.2.',
                '<span style="font-weight:bold;"><a href="http://www.ekiga.org/">Ekiga</a>:</span>
                            Uno strumento per comunicare con il video e con l\'audio tramite internet. Usa sia SIP che il protocollo H323 ed è compatibile con Microsoft Netmeeting. Precedentemente si chiamava GnomeMeeting. È disponibile l\'ultima release stabile, la 3.2.7,.'),
        'h4_virt' => 'Virtualizzazione',
        'array_virt' => array('<span style="font-weight:bold;"><a href="http://www.virtualbox.org/">VirtualBox</a>:</span>
                            È disponibile nelle fonti Mageia la versione 4.0.6 del famoso emulatore',
                '<span style="font-weight:bold;"><a href="http://virt-manager.et.redhat.com/">virt-manager</a>:</span>
                            Mageia fornisce l\'ultima versione di virt-manager (e libvirtd), il famoso set di strumenti per la gestione dell\'emulazione, insieme ai binding per le varie linuge, per facilitare la gestione delle macchine virtuali, sia quelle basate su kvm che xen.',
                '<span style="font-weight:bold;"><a href="http://www.winehq.org/">WINE</a>:</span>
                            È disponibile nelle fonti l\'ultima versione di sviluppo di WINE, la 1.3.20; puoi stare tranquillo perché troverai sempre l\'ultima versione di questa famosa applicazione nella fonte Backport appena dopo verrà rilasciata una nuova release ufficiale!'),
        'h4_graphics' => 'Graphica',
        'array_graphics' => array('<span style="font-weight:bold;"><a href="http://www.gimp.org/">Gimp</a>:</span>
                            la versione 2.6.11 del famoso software di editing GNU delle immagini.',
                '<span style="font-weight:bold;"><a href="http://inkscape.sourceforge.net/">Inkscape</a>:</span>
                            versione 0.48.1 del famoso software di disegno vettoriale basato su SVG.',
                '<span style="font-weight:bold;">Blender<a href="http://www.blender.org/"></a>:</span>
                            L\'applicazione per l\'animazione in alta qualità. Versione 2.49b.'),
        'h4_ides' => 'IDE',
        'array_ides' => array('<span style="font-weight:bold;"><a href="http://anjuta.org/">Anjuta</a>:</span>
                            Una potente IDE GNOME per C, C++, Python, Java,…',
                '<span style="font-weight:bold;"><a href="http://www.eclipse.org/">Eclipse</a>:</span>
                            Il famoso IDE per Java e altri linguaggi',
                '<span style="font-weight:bold;"><a href="http://netbeans.org/">Netbeans</a>:</span>
                            L\'ugualmente famosa alternativa ad Eclipse',
                '<span style="font-weight:bold;"><a href="http://kdevelop.org/">KDevelop</a>:</span>
                            L\'IDE di KDE'),
        'h3_base_system' => 'Base del Sistema',
        'kernel' => 'Mageia utilizza la serie 2.6.38 del kernel, in particolare la 2.6.38.7 al momento del rilascio; per maggiori informazioni sui miglioramenti presenti in questa serie del kernel dai un\'occhiata <a href="http://kernelnewbies.org/Linux_2_6_38">qua</a>; le novità principali di questo kernel:',
        'kernel_array' => array('Supporto per il ragruppamento automatico dei processi (per maggiori dettagli vedi il post di Linus Torvalds nella
                            <a href="http://lkml.org/lkml/2011/1/18/322">LKML</a> (Mailing List del Kernel Linux); e i richiami di quella patch su  <a href="https://lwn.net/Articles/418884/">LWN.net</a>)',
                'Significative migliore della scalabilità nel layer Linux VFS (Virtual File System)',
                'Supporto Transparent Huge Page (senza usare hugetblfs)',
                'Diffusione automatica del traffico di rete in uscite su più CPU',
                'Supporto per l\'APU AMD Fusion',
                'Supporto per la Intel Sandy Bridge e Panther Point.',
                'Supporto Ipset 6.4 con IPv6'),
        'initscripts' => 'Sistema di avvio: usa ancora l\'initscripts 9.21',
        'alsa' => 'ALSA 1.0.24.x:',
        'alsa_array' => array('libalsa2-1.0.24.1',
                'alsa-plugins-1.0.24',
                'alsa-tools-1.0.24.1: parti del firmware sono stati spostati in un nuovo pacchetto, alsa-firmware',
                'alsa-utils-1.0.24.2'),
        'h3_x' => 'Sistema grafico',
        'array_x' => array('X server 1.10.1, con il pieno supporto a Udev (Udev sostituisce HAL in questo caso)',
                'ATI/AMD free radeon driver: Kernel Mode Setting adesso è abilitato di default, portando miglioramenti sia nella performance che nella compatibilità.',
                'Supporto a Intel Sandy Bridge (2nd Generazione Intel® Core™ i7/i5/i3) secondo quanto riferito nelle <a href="http://intellinuxgraphics.org/2011Q1.html">Specifiche Intel</a>.',
                'Nouveau: il driver Nouveau viene usato di default per le schede video nVidia supportate. Fornisce il supporto al Kernel Mode Setting, accelerazione 2D, e il supporto a RandR 1.2 (per una facile configurazione multi-monitor)'),
        'h4_proprietary' => 'Driver proprietari di schede video',
        'text_proprietary' => 'Sono disponibili nelle fonti online nonfree le ultime versioni sia dei driver proprietari nVidia che ATI (fglrx).',
        'h3_input_methods' => 'Metodi di Input',
        'text_input_methods' => 'Per selezionare il metodo di input di tua scelta, puoi usare draklocale (“Gestisci la localizzazione del sisteam” nel Mageia Control Center &rarr; Sistema). Mageia 1 ha due metodi di input:',
        'h4_ibus' => 'IBus',
        'text_ibus' => 'Il supporto a IBus (the Intelligent Input Bus), in versione 1.3.9, è disponibile nelle fonti ufficiali.',
        'h4_scim' => 'SCIM',
        'text_scim' => 'SCIM (Smart Common Input Method), versione 1.4.9, è disponibile anch\'esso nelle fonti ufficiali.',
        'h2_available_media' => 'Supporti disponibili per l\'installazione',
        'text_available_media_1' => 'Mageia ha due diversi supporti di installazione:',
        'array_available_media' => array('DVD ISO e ISO CD Dual-arch, che usano il tradizionale installer drakx ',
                'e il CD ISO Live, che è una ISO live che può essere usata per avere un\'anteprima della distribuzione e che può anche essere usata per installare Mageia nel tuo disco rigido'),
        'text_available_media_2' => 'Troverai sempre le informazioni relative al download nella <a href="http://mageia.org/downloads/">pagina per il download di Mageia</a>;
                    sono disponibili i download diretti (ftp e http) e i download BitTorrent.
                    Per maggiori informazioni, dai un\'occhiata alla <a href="http://www.mageia.org/wiki/doku.php?id=mageia_installation_media">pagina dei supporti per l\'installazione di Mageia</a>.',
        'h2_software_repos' => 'Fonti online del software',
        'text_software_repos_1' => 'I pacchetti in Mageia sono presenti in tre diverse fonti/repositories, in base alla licenza di ciascun pacchetto.',
        'text_software_repos_2' => 'Ecco una panoramica di queste fonti:',
        'h4_core' => 'Core:',
        'text_core' => 'La fonte Core include pacchetti con software gratuito-libero, ad esempio i pacchetti rilasciati sotto licenza open-source; il set di fonti Core viene aggiunto in automatico e il “Core Release” e il “Core Updates” vengono attivati in automatico',
        'h4_nonfree' => 'Nonfree:',
        'text_nonfree' => 'La fonte Nonfree include pacchetti che non sono gratuiti, Mageia può redistribuirli ma loro contengono software proprietario (da qua il nome Nonfree);     Per esempio questa fonte include i driver proprietari delle schede video nVidia e ATI, il firmware per varie schede Wi-Fi etc. Il set delle fonti Nonfree viene aggiunto di default e il “Nonfree Release” e il “Nonfree Updates” vengono attivati in automatico',
        'h4_tainted' => 'Tainted:',
        'text_tainted' => 'La fonte Tainted contiene pacchetti sotto varie licenza, gratuiti e non, ma il criterio principale per i pacchetti in questa fonte è che potrebbero violare i diritti e i brevetti in alcuni paesi del mondo (es. i codec multimediali di cui hanno bisogno numerosi file audio/video, pacchetti necessari per eseguire DVD video commerciali etc..); per questo il set delle fonti Tainted viene aggiunto in automatico ma  <strong>non</strong> viene attivato in automatico, è completamente opzionale; quindi controlla le tue leggi locali prima di usare i pacchetti da questa fonte. Questa fonte viene aggiunta solo per aiutare gli utenti. Questa fonte è per Mageia ciò che PLF è per gli utenti Mandriva users o RPM Fusion è per gli utenti Fedora.'
    ),
    'es' => array(
        'page_title' => 'Notas de lanzamiento de Mageia 1',
        'page_desc' => 'Notas del release de Mageia 1',
        'page_kw' => 'mageia, notas de lanzamiento, Mga1',
        'page_h1' => 'Notas de lanzamiento',
        'major_features' => 'Caracter&iacute;sticas principales',
        'major_features_array' => array('Administraci&oacute;n de paquetes',
                'Configuraci&oacute;n de sistema',
                'Migraci&oacute;n desde Mandriva Linux',
                'Entornos de escritorio',
                'Aplicaciones de escritorio',
                'Sistema base',
                'Servidor X'),
        'installation_methods' => 'M&eacute;todos disponibles de instalaci&oacute;n',
        'support' => 'Soporte',
        'hw_req' => 'Requerimientos de hardware',
        'mageia_milestone' => 'Mageia 1 marca el hito de mucho trabajo, que fue iniciado desde el d&iacute;a en que
                    <a href="https://www.mageia.org/en/about/2010-sept-announcement.html">Mageia como distribuci&oacute;n naci&oacute;</a>.',
        'overview' => 'Esta p&aacute;gina da un resumen de lo que Mageia tiene para ofrecerle.',
        'h2_major_features' => 'Principales caracter&iacute;sticas de Mageia',
        'h3_package_management' => 'Herramientas para administraci&oacute;n de paquetes',
        'text_package_management_1' => 'Mageia utiliza la muy familiar herramienta urpmi, el solucionador de dependencias de Mageia,
                    puedes usarlo para instalar paquetes RPM en el sistema. Tambi&eacute;n puede ser usado para actualizar el sistema, para mayores
                    detalles de uso, consulta la p&aacute;gina de urpmi con el comando man (man page).',
        'text_package_management_2' => 'El resto de la familia son:',
        'array_package_management' => array('<span style="font-weight:bold;">urpme:</span>
                            usado para desinstalar paquetes RPM previamente instalados, con varias opciones disponibles desde la l&iacute;nea de comandos.',
                '<span style="font-weight:bold;">urpmf:</span>
                            una herramienta que puede ser usada para mostrar que paquete contiene determinado archivo; puede ser usado para buscar
                            todo tipo de etiquetas RPM (requires, suggests, conflicts, obsoletes) en los paquetes dentro de los repositorios
                            oficiales, entre otras cosas.',
                '<span style="font-weight:bold;">urpmq:</span>
                            la herramienta de consulta de la base de datos urpmi, es como \'rpm -q\' pero con m&aacute;s caracter&iacute;sticas extendidas, usado
                            para verificar paquetes RPM en los repositorios oficiales.',
                '<span style="font-weight:bold;">urpmi.update:</span>
                            una herramienta para actualizar la base de datos urpmi en el sistema instalado, puede ser usado para deshabilitar (ignorar)
                            repositorios configurados en el sistema.',
                '<span style="font-weight:bold;">urpmi.addmedia:</span>
                            una herramienta para agregar repositorios (en l&iacute;nea (http, ftp, rsync) y locales).',
                '<span style="font-weight:bold;">urpmi.removemedia:</span>
                            una herramienta para eliminar repositorios configurados en el sistema.'),
        'h3_system_configuration' => 'Herramientas de configuraci&oacute;n de Mageia',
        'text_system_configuration' => 'Mageia usa las familiares herramientas drak tools; Aqu&iacute; se mencionan las m&aacute;s importantes:',
        'array_system_configuration' => array('<span style="font-weight:bold;">drakconf:</span>
                            El centro de control de Mageia, el cual contiene varias herramientas de configuraci&oacute;n del sistema.',
                '<span style="font-weight:bold;">drak3d:</span>
                            Una herramienta para configurar los efectos 3D en el escritorio (ej. Compiz).',
                '<span style="font-weight:bold;">drakguard:</span>
                            Una herramienta que permite configurar el control parental. Puede bloquear el acceso a sitios web y restringir la conexi&oacute;n a internet a una ventana de tiempo en espec&iacute;fico.',
                '<span style="font-weight:bold;">rpmdrake:</span>
                            Una interf&aacute;z simple que facilita las tareas de instalaci&oacute;n y desinstalaci&oacute;n de paquetes (RPM) en Mageia',
                '<span style="font-weight:bold;">drakx-net:</span>
                            La herramienta por defecto para administrar la red de Mageia.',
                '<span style="font-weight:bold;">userdrake:</span>
                            Una herramienta amigable y poderosa para administrar usuarios y grupos.',
                '<span style="font-weight:bold;">system-config-printer:</span>
                            Una poderosa herramienta de configuraci&oacute;n de impresoras desarrollada por Redhat/Fedora.'),
        'h3_migration' => '<a href="../migrate/">Migraci&oacute;n desde Mandriva Linux</a>',
        'text_migration' => 'Si usted utiliza Mandriva Linux 2010.1 o 2010.2,
                        vea nuestra <a href="../migrate">gu&iacute;a de migraci&oacute;n</a>.',
        'h3_available_des' => 'Entornos de escritorio disponibles',
        'text_available_des' => 'Como una distribuci&oacute;n de escritorio-agn&oacute;stica, Mageia tiene todos los entornos de escritorio populares, junto con varios manejadores de ventanas. Aqu&iacute; se muestr&aacute; una pequeña reseña de ellos:',
        'h4_kde' => 'KDE4',
        'text_kde' => 'KDE SC 4.6.3. &eacute;sta entrega trae muchas mejoras y nuevas caracter&iacute;sticas para m&aacute;s detalles
                    consulte el <a href="http://www.kde.org/announcements/4.6/">anuncio de release</a>.',
        'h4_gnome' => 'GNOME',
        'text_gnome' => 'GNOME 2.32, con un gr&aacute;n n&uacute;mero de aplicaciones populares incluidas en el (Totem, Rhythmbox,
                    Epiphany, Evolution, The GNOME Archiver (file-roller), Evince, F-Spot, etc.).',
        'h4_xfce' => 'XFCE4',
        'text_xfce' => 'La versi&oacute;n estable m&aacute;s reciente 4.8.1, de XFCE, incluyendo muchas mejoras, para m&aacute;s detalles
                    consulte el <a href="http://xfce.org/about/news/?post=1295136000">anuncio de release de XFCE 4.8</a>.',
        'h4_lxde' => 'LXDE',
        'text_lxde' => 'Los paquetes m&aacute;s estables de LXDE (PCManFM, LXSession, LXTerminal, Gpicview, LXRandR).',
        'h4_wms' => 'Manejadores de ventanas',
        'text_wms' => 'Algunos manejadores de ventanas, que en realidad son entornos de escritorio tan pequeños y ligeros:',
        'array_wms' => array('Openbox',
                'WindowMaker',
                'IceWM',
                'Fluxbox',
                'Fvwm2'),
        'h3_desktop_apps' => 'Aplicaciones de escritorio',
        'text_desktop_apps' => 'Un mont&oacute;n de aplicaciones de escritorio populares, aqu&iacute; los m&aacute;s importantes.',
        'h4_web_and_mail' => 'Navegadores web y clientes de correo',
        'array_web_and_mail' => array('<span style="font-weight:bold;"><a href="http://www.mozilla.com/firefox/">Firefox</a>:</span>
                            Firefox 4.0.1., Esta versi&oacute;n viene con muchas mejoras en todos los aspectos de Firefox, para mayor informaci&oacute;n vea las <a href="http://www.mozilla.com/en-US/firefox/4.0/releasenotes/">notas de lanzamiento de Firefox 4</a>',
                '<span style="font-weight:bold;"><a href="http://www.chromium.org/Home">Navegador Chromium</a>:</span>
                            El navegador Google Chromium 11.0.696.65., y para la conveniencia de los usuarios el navegador viene en 3 diferentes versiones, estable, beta e inestable, cada uno siguiendo diferentes canales de actualizaciones, no hace falta decir que las versiones beta e inestable no son para los d&eacute;biles de coraz&oacute;n!',
                '<span style="font-weight:bold;"><a href="http://www.gnome.org/projects/epiphany/">Epiphany</a>:</span>
                            La versi&oacute;n m&aacute;s estable, 2.30.6, del navegador web de GNOME basado en el motor webkit est&aacute; disponible en los repositorios de Mageia.',
                '<span style="font-weight:bold;"><a href="http://pim.kde.org/">KMail</a>:</span>
                            La versi&oacute;n m&aacute;s reciente, 4.4.11.1 de el famoso KDE4 cliente de correo.',
                '<span style="font-weight:bold;"><a href="http://www.mozillamessaging.com/thunderbird">Thunderbird</a>:</span>
                            La versi&oacute;n m&aacute;s reciente del famoso cliente de correo de Mozilla, Thunderbird 3.1.10, est&aacute; disponible en los repositorios online con todas las mejoras y correcciones en la serie 3.1.x, para m&aacute;s informaci&oacute;n vea las <a href="http://www.mozillamessaging.com/en-US/thunderbird/3.1.10/releasenotes/">notas de lanzamiento</a>. Las extenciones Enigmail y Lightning est&aacute;n disponibles tambi&eacute;n.',
                '<span style="font-weight:bold;"><a href="http://www.gnome.org/projects/evolution/">Evolution</a>:</span>
                            La versi&oacute;n m&aacute;s estable 2.32.2, del famoso cliente de correo de GNOME, calendario, administrador de contactos y herramienta de comunicaci&oacute;n.'),
        'h4_office' => 'Programas para oficina',
        'array_office' => array('<span style="font-weight:bold;"><a href="http://www.documentfoundation.org/develop">LibreOffice</a>:</span>
                            <a href="http://blog.mageia.org/en/?p=190">Mageia prometi&oacute; soporte completo a LibreOffice</a>  y mantiene su promesa, la versi&oacute;n estable de LibreOffice 3.3.2.2 est&aacute; disponible en los repositorios de Mageia, nos trae una suite completa de aplicaciones de ofim&aacute;tica.',
                '<span style="font-weight:bold;"><a href="http://www.calligra-suite.org/">Calligra</a>:</span>
                            El proyecto Calligra Suite es la continuaci&oacute;n del proyecto KOffice, tiene todos los componentes conocidos de KOffice,  para una lista detallada de aplicaciones y que pueden hacer vea su sitio web.',
                '<span style="font-weight:bold;"><a href="http://techbase.kde.org/Projects/KMyMoney">KmyMoney</a>:</span>
                            La versi&oacute;n m&aacute;s reciente y estable 4.5.3 del administrador de finanzas personales para KDE4 est&aacute; disponible en los repositorios oficiales, su enfoque se basa en ser preciso, facil de usar y con muchas utilidades que esperar&iacute;as en un administrador de finanzas personales.',
                '<span style="font-weight:bold;"><a href="http://skrooge.org/">Skrooge</a>:</span>
                            Con la filosof&iacute;a de dar a los usuarios opciones, Skrooge 0.8.1 est&aacute; disponible en los repositorios de Mageia tambi&eacute;n, un administrador de finanzas personales para KDE4, enfocado en ser altamente intuitivo, a la vez de proveer funcionalidades poderosas.',
                '<span style="font-weight:bold;"><a href="http://www.gnucash.org/">GnuCash</a>:</span>
                            GnuCash 2.4.5 Tambi&eacute;n est&aacute; disponible en los repositorios en l&iacute;nea, integra una interf&aacute;z de usuario parecida a una chequera que permite registrar y rastrear tus ingresos y egresos.'),
        'h4_communication' => 'Comunicaciones',
        'h5_im' => 'Mensajer&iacute;a instant&aacute;nea',
        'array_im' => array('<span style="font-weight:bold;"><a href="http://kopete.kde.org/">Kopete</a>:</span>
                            La &uacute;ltima versi&oacute;n estable del conocido mensajero parte de KDE SC 4.6.3, est&aacute; disponible ofreciendo soporte a una gran variedad de protocolos de mensajer&iacute;a.',
                '<span style="font-weight:bold;"><a href="http://www.pidgin.im/">Pidgin</a>:</span>
                            La versi&oacute;n 2.7.11, del famoso cliente de mensajer&iacute;a instant&aacute;nea basado en GTK+2.0 est&aacute; disponible en los repositorios en l&iacute;nea, soporta varios protocolos de mensajer&iacute;a. para m&aacute;s detalles acerca de correcciones y mejoras de &eacute;sta versi&oacute;n vea el <a href="http://developer.pidgin.im/wiki/ChangeLog">log de cambios</a>.',
                '<span style="font-weight:bold;"><a href="http://live.gnome.org/Empathy">Empathy</a>:</span>
                            Empathy 2.34.0 es un cliente de mensajer&iacute;a basado en el framework Telepathy.',
                '<span style="font-weight:bold;"><a href="http://www.kadu.net/">Kadu</a>:</span>
                            Un mensajero instant&aacute;neo compatible con el protocolo Gadu-Gadu. se incluye en su versi&oacute;n 0.9.1'),
        'h5_irc' => 'IRC',
        'array_irc' => array('<span style="font-weight:bold;"><a href="http://quassel-irc.org/">Quassel</a>:</span>
                            La versi&oacute;n 0.7.2, de Quassel, un cliente moderno de IRC basado en Qt est&aacute; disponible en los repositorios en l&iacute;nea.',
                '<span style="font-weight:bold;"><a href="http://konversation.kde.org/">Konversation</a>:</span>
                            Un cliente IRC completamente gr&aacute;fico con soporte de KDE, la versi&oacute;n, 1.3.1, se encuentra disponible en los repositorios de Mageia.',
                '<span style="font-weight:bold;"><a href="http://xchat-gnome.navi.cx/">XChat-gnome</a>:</span>
                            Un cliente gr&aacute;fico de IRC para el escritorio GNOME. la versi&oacute;n m&aacute;s reciente 0.26.1, est&aacute; disponible en los repositorios.',
                '<span style="font-weight:bold;"><a href="http://www.kvirc.net/">KVIrc</a>:</span>
                            Un cliente IRC basado en Qt con soporte para instalar y usar temas, transparencia, encriptaci&oacute;n, entre otras caracter&iacute;sticas. La versi&oacute;n 4.0.4 est&aacute; disponible en los repositorios.'),
        'h5_voip' => 'VOIP',
        'array_voip' => array('<span style="font-weight:bold;"><a href="http://www.qutecom.com/">QuteCom</a>:</span>
                            Un programa de telefon&iacute;a para SIP basado en Qt que permite hacer llamadas con video gratuitas, y permite integrar todos tus contactos de mensajer&iacute;a en un solo lugar, en su versi&oacute;n 2.2.',
                '<span style="font-weight:bold;"><a href="http://www.ekiga.org/">Ekiga</a>:</span>
                            Una herramienta para comunicarse con video y audio en internet. Usa los protocolos SIP y H323 y es compatible con Microsoft Netmeeting. Antes era llamado GnomeMeeting, la versi&oacute;n 3.2.7 est&aacute; disponible en Mageia.'),
        'h4_virt' => 'Virtualizaci&oacute;n',
        'array_virt' => array('<span style="font-weight:bold;"><a href="http://www.virtualbox.org/">VirtualBox</a>:</span>
                            Versi&oacute;n 4.0.6, del virtualizador de proposito general est&aacute; disponible en los repositorios de Mageia.',
                '<span style="font-weight:bold;"><a href="http://virt-manager.et.redhat.com/">virt-manager</a>:</span>
                            Mageia incorpora la versi&oacute;n m&aacute;s reciente de virt-manager (y libvirtd), el popular conjunto de herramientas para virtualizaci&oacute;n, junto con enlaces para varios lenguajes, para facilitar la administraci&oacute;n de maquinas virtuales, ya sea basadas en kvm o xen.',
                '<span style="font-weight:bold;"><a href="http://www.winehq.org/">WINE</a>:</span>
                            La versi&oacute;n m&aacute;s reciente de desarrollo de WINE 1.3.20, est&aacute; disponible en los repositorios; puede estar seguro que encontrar&aacute; la versi&oacute;n m&aacute;s actualizada de esta famosa aplicaci&oacute;n en el repositorios de Backports un poco despues que los encargados de WINE ¡tengan un nuevo release!'),
        'h4_graphics' => 'Gr&aacute;ficos',
        'array_graphics' => array('<span style="font-weight:bold;"><a href="http://www.gimp.org/">Gimp</a>:</span>
                            La versi&oacute;n 2.6.11 del famoso programa manipulador de im&aacute;genes GNU viene incluida.',
                '<span style="font-weight:bold;"><a href="http://inkscape.sourceforge.net/">Inkscape</a>:</span>
                            La versi&oacute;n 0.48.1 del programa de dibujo vectorial SVG tambi&eacute;n viene incluida.',
                '<span style="font-weight:bold;"><a href="http://www.blender.org/">Blender</a>:</span>
                            El programa de diseño de alta calidad en animaci&oacute;n en su versi&oacute;n 2.49b viene incluida.'),
        'h4_ides' => 'IDEs',
        'array_ides' => array('<span style="font-weight:bold;"><a href="http://anjuta.org/">Anjuta</a>:</span>
                            Un poderoso IDE del escritorio GNOME para C/C++, Python, Java, entre otros.',
                '<span style="font-weight:bold;"><a href="http://www.eclipse.org/">Eclipse</a>:</span>
                            El bien conocido IDE para desarrollo en Java y otros lenguajes.',
                '<span style="font-weight:bold;"><a href="http://netbeans.org/">Netbeans</a>:</span>
                            La tambi&eacute;n conocida alternativa a eclipse.',
                '<span style="font-weight:bold;"><a href="http://kdevelop.org/">KDevelop</a>:</span>
                            La IDE de desarrollo para KDE'),
        'h3_base_system' => 'Sistema Base',
        'kernel' => 'Mageia viene con la serie del kernel 2.6.38, spec&iacute;ficamente la versi&oacute;n 2.6.38.7 al momento del lanzamiento, para m&aacute;s detalles sobre las mejoras en el kernel vea los <a href="http://kernelnewbies.org/Linux_2_6_38">detalles de este kernel</a> :',
        'kernel_array' => array('Soporte para agrupamiento autom&aacute;tico de procesos (para m&aacute;s detalles vea el mensaje de Linus Torvalds en
                            <a href="http://lkml.org/lkml/2011/1/18/322">LKML</a> (lista de correlo del kernel de Linux); y las menciones del parche en <a href="https://lwn.net/Articles/418884/">LWN.net</a>)',
                'Mejoras significativas de escalabilidad en la capa de VFS (Sistema de archivos virtuales).',
                'Soporte para gran paginado de manera transparente (sin usar hugetblfs).',
                'Env&iacute;o autom&aacute;tico de tr&aacute;fico saliente de red sobre varios CPUs.',
                'Soporte para los APUs AMD Fusion.',
                'Soporte para la arquitectura Sandy Bridge de Intel y Panther Point.',
                'Ipset 6.4 con soporte para IPv6.'),
        'initscripts' => 'Sistema de arranque: a&uacute;n utiliza initscripts 9.21',
        'alsa' => 'ALSA 1.0.24.x:',
        'alsa_array' => array('libalsa2-1.0.24.1',
                'alsa-plugins-1.0.24',
                'alsa-tools-1.0.24.1: Los bits del firmware han sido separados en un nuevo paquete, alsa-firmware',
                'alsa-utils-1.0.24.2'),
        'h3_x' => 'X server',
        'array_x' => array('X server 1.10.1, con soporte completo Udev (Udev reemplaza HAL)',
                'Controladores libres para radeon ATI/AMD: El m&oacute;dulo del Kernel ya est&aacute; habilitado por defecto, obteniendo mejoras en desempeño y compatibilidad.',
                'Soporte para Intel Sandy Bridge (2da. Generaci&oacute;n Intel® Core™ i7/i5/i3) de acuerdo a <a href="http://intellinuxgraphics.org/2011Q1.html">especificaciones de Intel</a>.',
                'Nouveau: El controlador Nouveau es usado por defecto para las tarjetas gr&aacute;ficas de nVidia soportadas. agregando soporte al modo de configuraci&oacute;n del kernel, aceleraci&oacute;n en 2D, y soporte para RandR 1.2 (para una f&aacute;cil configuraci&oacute;n multi-monitor)'),
        'h4_proprietary' => 'Controladores propietarios de tarjetas gr&aacute;ficas',
        'text_proprietary' => 'Las versiones m&aacute;s recientes de ambos controladores propietarios nVidia y ATI (fglrx) est&aacute;n disponibles en el repositorio Nonfree en l&iacute;nea.',
        'h3_input_methods' => 'M&eacute;todos de entrada',
        'text_input_methods' => 'Para seleccionar el m&eacute;todo de entrada de su elecci&oacute;n, puede usar draklocale (“Administrar la localizaci&oacute;m de su sistema” en el centro de control Mageia &rarr; sistema). Mageia 1 tiene dos m&eacute;todos de entrada disponibles:',
        'h4_ibus' => 'IBus',
        'text_ibus' => 'Soporte para IBus (the Intelligent Input Bus), en su versi&oacute;n 1.3.9 est&aacute; disponible en los repositorios oficiales.',
        'h4_scim' => 'SCIM',
        'text_scim' => 'SCIM (Smart Common Input Method), versi&oacute;n 1.4.9, tambi&eacute;n est&aacute; disponible en los repositorios oficiales.',
        'h2_available_media' => 'Medios de instalaci&oacute;n disponibles',
        'text_available_media_1' => 'Mageia cuenta con dos tipos de medios instalables:',
        'array_available_media' => array('ISO de DVD y Dual-arch CD, que utilizan el instalador tradicional drakx y ',
                'Live CD ISO, este es una imagen de disco viva que puede ser usada para probar la distribuci&oacute;n y tambi&eacute;n para realizar la instalaci&oacute;n de Mageia en su equipo.'),
        'text_available_media_2' => 'Siempre encontrar&aacute; la informaci&oacute;n de descarga en la <a href="http://mageia.org/downloads/">p&aacute;gina de descarga de Mageia</a>,
                    descargas directas (ftp y http) y por BitTorrent est&aacute;n disponibles.
                    Para m&aacute;s informaci&oacute;n, vea la <a href="http://www.mageia.org/wiki/doku.php?id=mageia_installation_media">p&aacute;gina de medios de instalaci&oacute;n de Mageia</a>.',
        'h2_software_repos' => 'Repositorios de software en l&iacute;nea',
        'text_software_repos_1' => 'Los paquetes en Mageia existen en tres diferentes repositorios, dependiendo del tipo de licencia de cada paquete.',
        'text_software_repos_2' => 'Aqu&iacute; hay una descripci&oacute;n de los repositorios:',
        'h4_core' => 'Core:',
        'text_core' => 'El repositorio Core incluye paquete con software libre y open source, por ejemplo paquetes con licencias libres u open source, el conjunto de repositorios Core es añadido por defecto y "Core Release" y "Core Updates" son habilitados autom&aacute;ticamente',
        'h4_nonfree' => 'Nonfree:',
        'text_nonfree' => 'El repositorio Nonfree incluye paquetes que son gratuitos, Mageia puede
                            redistribuirlos, pero contienen software privativo (por ello el nombre de Nonfree); Por ejemplo este repositorio incluye los controladores privativos de las tarjetas gr&aacute;ficas nVidia y ATI, controladores para tarjetas de red inal&aacute;mbrica, etc. Los repositorios Nonfree son agregados por defecto, “Nonfree Release” y
                            “Nonfree Updates” son habilitados tamb&iacute;en de manera autom&aacute;tica.',
        'h4_tainted' => 'Tainted:',
        'text_tainted' => 'El repositorio Tainted incluye paquetes con varios tipos de licencias, libres y no libres pero la mayor raz&oacute;n para este repositorio es que pueden infringir patentes y leyes de derechos de autor en algunos paises (Ej. codecs multimedia necesarios para reproducir varios archivos de video/audio, paquetes necesarios para reproducir videos en DVD, etc.); El repositorio Tainted es agregado por defecto pero <strong>no</strong> se habilita de manera autom&aacute;tica, es completamente opcional; as&iacute; que verifique sus leyes locales antes de usar los paquetes de este repositorio. Este repositorio es solo agregado para la conveniencia de los usuarios. Este repositorio es a Mageia lo que PLF era a los usuarios de Mandriva o RPM Fusion a los usuarios de Fedora.'
    ),
    'ro' => array(
        'page_title' => 'Notele ediției Mageia 1',
        'page_desc' => 'Notele ediției Mageia 1',
        'page_kw' => 'mageia, notele ediției, Mga1',
        'page_h1' => 'Notele ediției',
        'major_features' => 'Funcționalități majore',
        'major_features_array' => array('Gestiunea pachetelor',
                'Configurarea sistemului',
                'Migrare de la Mandriva Linux',
                'Medii grafice de birou',
                'Aplicații de birou',
                'Sistemul de bază',
                'Serverul X'),
        'installation_methods' => 'Metode de instalare disponibile',
        'support' => 'Suport',
        'hw_req' => 'Cerințe materiale',
        'mageia_milestone' => 'Mageia 1 marchează piatra de hotar a unei cantități enorme de muncă asiduă, care a început din ziua în care
                    <a href="https://www.mageia.org/en/about/2010-sept-announcement.html">a luat ființă distribuția Mageia</a>.',
        'overview' => 'Această pagină vă oferă o prezentare generală a tot ce Mageia are de oferit.',
        'h2_major_features' => 'Funcționalități majore în Mageia',
        'h3_package_management' => 'Unelte pentru gestionarea pachetelor',
        'text_package_management_1' => 'Mageia folosește bine cunoscutul urpmi, rezolvatorul de dependențe implicit în Mageia,
                    pe care-l puteți utiliza pentru instalarea pachetelor în sistem. Acesta poate fi utilizat, de asemenea, și pentru actualizarea sistemului. Pentru instrucțiunile
                    de folosire consultați pagina de manual urpmi.',
        'text_package_management_2' => 'Ceilalți membri ai familiei sînt:',
        'array_package_management' => array('<span style="font-weight:bold;">urpme:</span>
                            utilizat pentru dezinstalarea pachetelor RPM instalate în sistem, cu multe opțiuni în linie de comandă',
                '<span style="font-weight:bold;">urpmf:</span>
                            o unealtă ce poate fi utilizată pentru afișarea pachetului care conține un anumit fișier; aceasta mai poate fi utilizată și pentru căutarea
                            a tot felul de etichete RPM (cerințe, sugestii, conflicte, învechite) în pachetele din depozitele
                            oficiale, printre multe alte funcționalități',
                '<span style="font-weight:bold;">urpmq:</span>
                            unealta de interogare a bazei de date urpmi, gîndiți-vă la ea ca la „rpm -q” dar cu mult mai multe funcționalități extinse,
                            care pot fi utilizate pentru verificarea pachetelor RPM din depozitele oficiale',
                '<span style="font-weight:bold;">urpmi.update:</span>
                            o unealtă pentru actualizarea bazei de date urpmi locale a utilizatorului, însă poate fi utilizată pentru a dezactiva (ignora)
                            mediile sursă configurate deja în sistem',
                '<span style="font-weight:bold;">urpmi.addmedia:</span>
                            o unealtă pentru adăugarea mediilor sursă Mageia (online (http, ftp, rsync) precum și locale)',
                '<span style="font-weight:bold;">urpmi.removemedia:</span>
                            o unealtă pentru înlăturarea mediilor sursă configurate în sistem'),
        'h3_system_configuration' => 'Uheltele Mageia pentru configurarea sistemului',
        'text_system_configuration' => 'Mageia va continua să utilizeze binecunoscutele unelte drak; iată aici lista celor principale:',
        'array_system_configuration' => array('<span style="font-weight:bold;">drakconf:</span>
                            Centrul de control Mageia, care poate fi utilizat pentru lansarea unei multitudini de unelte de administrare a sistemului',
                '<span style="font-weight:bold;">drak3d:</span>
                            O unealtă pentru configurarea efectelor de birou 3D (ex: Compiz).',
                '<span style="font-weight:bold;">drakguard:</span>
                            O unealtă care permite configurarea controlului parental. Aceasta poate bloca accesul la situri web și restricționa
                            conexiunea la Internet pentru o perioadă de timp specificată.',
                '<span style="font-weight:bold;">rpmdrake:</span>
                            O interfață simplă care facilitează instalarea și înlăturarea pachetelor (RPM) cu aplicații în Mageia.',
                '<span style="font-weight:bold;">drakx-net:</span>
                            Uneltele Mageia implicite pentru gestionarea rețelei.',
                '<span style="font-weight:bold;">userdrake:</span>
                            O unealtă prietenoasă și puternică pentru administrarea utilizatorilor și grupurilor de utilizatori.',
                '<span style="font-weight:bold;">system-config-printer:</span>
                            O unealtă puternică pentru configurarea imprimantei, dezvoltată de Redhat/Fedora.'),
        'h3_migration' => '<a href="../migrate/">Migrarea de la Mandriva Linux</a>',
        'text_migration' => 'Dacă utilizați Mandriva Linux 2010.1 sau 2010.2,
                        consultați <a href="../migrate">ghidul nostru de migrare</a>.',
        'h3_available_des' => 'Mediile grafice de birou disponibile',
        'text_available_des' => 'Ca și distribuție orientată pentru birou, Mageia propune toate mediile grafice de birou populare, pe lîngă diverși
                            gestionari de ferestre. Iată o scurtă prezentare:',
        'h4_kde' => 'KDE4',
        'text_kde' => 'KDE SC 4.6.3. Această versiune aduce multe îmbunătățiri și funcționalități, pentru mai multe detalii
                    consultați <a href="http://www.kde.org/announcements/4.6/">anunțul versiunii KDE 4.6</a>.',
        'h4_gnome' => 'GNOME',
        'text_gnome' => 'GNOME 2.32, cu mulțimea de aplicații care-l acompaniază (Totem, Rhythmbox,
                    Epiphany, Evolution, The GNOME Archiver (file-roller), Evince, F-Spot… etc).',
        'h4_xfce' => 'XFCE4',
        'text_xfce' => 'Cea mai recentă versiune stabilă de XFCE, 4.8.1, vine cu multe ameliorări, pentru lista completă de detalii
                    consultați <a href="http://xfce.org/about/news/?post=1295136000">anunțul versiunii XFCE 4.8</a>.',
        'h4_lxde' => 'LXDE',
        'text_lxde' => 'Ultimele pachete LXDE stabile (PCManFM, LXSession, LXTerminal, Gpicview, LXRandR).',
        'h4_wms' => 'Gestionari de ferestre',
        'text_wms' => 'Diverși gestionari de ferestre, care în realitate sînt medii grafice de birou care ocupă foarte puțin și sînt foarte lejere în resurse:',
        'array_wms' => array('Openbox',
                'WindowMaker',
                'IceWM',
                'Fluxbox',
                'Fvwm2'),
        'h3_desktop_apps' => 'Aplicații de birou',
        'text_desktop_apps' => 'O multitudine de aplicații de birou populare, iată aici o prezentare generală.',
        'h4_web_and_mail' => 'Navigatoare de Internet și clienți de poștă electronică',
        'array_web_and_mail' => array('<span style="font-weight:bold;"><a href="http://www.mozilla.com/firefox/">Firefox</a>:</span>
                            Firefox 4.0.1., această ediție nouă vine cu multe ameliorări în toate domeniile, pentru informații suplimentare consultați <a href="http://www.mozilla.com/en-US/firefox/4.0/releasenotes/">notele ediției Firefox 4</a>.',
                '<span style="font-weight:bold;"><a href="http://www.chromium.org/Home">Chromium</a>:</span>
                            Navigatorul Google Chromium 11.0.696.65., iar pentru deliciul utilizatorilor Chromium este oferit în diferite versiuni, stabilă, beta și instabilă, fiecare din ele urmînd o branșă/canal în amonte diferit, inutil să mai menționăm că versiunile beta și instabilă nu sînt pentru cei slabi cu inima!',
                '<span style="font-weight:bold;"><a href="http://www.gnome.org/projects/epiphany/">Epiphany</a>:</span>
                            Ultima versiune stabilă, 2.30.6, a navigatorului GNOME bazat pe motorul de randare webkit este disponibil în depozitele  Mageia.',
                '<span style="font-weight:bold;"><a href="http://pim.kde.org/">KMail</a>:</span>
                            Ultima versiune stabilă, 4.4.11.1, a faimosului client KDE4 de poștă electronică.',
                '<span style="font-weight:bold;"><a href="http://www.mozillamessaging.com/thunderbird">Thunderbird</a>:</span>
                            Ultima versiune stabilă a foarte popularului client de poștă electronică din Mozilla, Thunderbird 3.1.10, este disponibil în depozitele online, cu toate ameliorările și corectările seriei 3.1.x, pentru mai multe informații consultați <a href="http://www.mozillamessaging.com/en-US/thunderbird/3.1.10/releasenotes/">notele acestei ediții</a>. Ambele extensii, Enigmail și Lightning, sînt de asemenea disponibile.',
                '<span style="font-weight:bold;"><a href="http://www.gnome.org/projects/evolution/">Evolution</a>:</span>
                            Ultima versiune stabilă, 2.32.2, a faimoasei unelte GNOME de poștă electronică, calendar, gestionar de contacte și comunicații.'),
        'h4_office' => 'Birotică',
        'array_office' => array('<span style="font-weight:bold;"><a href="http://www.documentfoundation.org/develop">LibreOffice</a>:</span>
                            <a href="http://blog.mageia.org/en/?p=190">Mageia a promis să suporte în totalitate LibreOffice</a> și și-a ținut promisiunea, versiunea stabilă LibreOffice 3.3.2.2 este disponibilă în depozitele Mageia, oferind o suită completă de aplicații de birotică.',
                '<span style="font-weight:bold;"><a href="http://www.calligra-suite.org/">Calligra</a>:</span>
                            Proiectul suitei Calligra este o continuare a proiectului KOffice, care conține toate componentele deja familiare din KOffice, consultați situl lor pentru o listă detaliată a aplicațiilor disponibile și la ce le puteți utiliza.',
                '<span style="font-weight:bold;"><a href="http://techbase.kde.org/Projects/KMyMoney">KmyMoney</a>:</span>
                            Ultima versiune stabilă, 4.5.3, a gestionarului financiar personal pentru KDE4 este deja în depozitele online, acesta se axează în principal pe acuratețe, facilitatea în utilizare și conține toate funcționalitățile obișnuite la care vă așteptați de la un gestionar financiar.',
                '<span style="font-weight:bold;"><a href="http://skrooge.org/">Skrooge</a>:</span>
                            Un gestionar financiar personal pentru KDE4, care-și propune să fie foarte intuitiv, oferind în același timp funcții puternice utilizatorului, este disponibil și el în versiunea 0.8.1 în depozitele Mageia.',
                '<span style="font-weight:bold;"><a href="http://www.gnucash.org/">GnuCash</a>:</span>
                            GnuCash 2.4.5 este disponibil în depozitele online, vine cu o interfață grafică de tip registru de evidență contabilă care vă permite să vă înregistrați și să vă urmăriți aspectele financiare.'),
        'h4_communication' => 'Comunicații',
        'h5_im' => 'Mesagerie instantanee',
        'array_im' => array('<span style="font-weight:bold;"><a href="http://kopete.kde.org/">Kopete</a>:</span>
                            Ultima versiune stabilă a popularului client de mesagerie instantane, parte integrantă din KDE SC 4.6.3, este disponibilă și suportă o mare varietate de protocoale de mesagerie instantanee.',
                '<span style="font-weight:bold;"><a href="http://www.pidgin.im/">Pidgin</a>:</span>
                            Ultima mersiune stabilă, 2.7.11, a faimosului client de mesagerie instantanee bazat pe GTK+2.0 este disponibil în depozitele online, cu suport pentru o sumedenie de protocoale de mesagerie instantanee. Pentru mai multe detalii despre corectările și ameliorările aduse de această versiune consultați <a href="http://developer.pidgin.im/wiki/ChangeLog">lista modificărilor</a>.',
                '<span style="font-weight:bold;"><a href="http://live.gnome.org/Empathy">Empathy</a>:</span>
                            Empathy este un client de mesagerie instantanee bazat pe platforma Telepathy și este oferit în versiunea  2.34.0.',
                '<span style="font-weight:bold;"><a href="http://www.kadu.net/">Kadu</a>:</span>
                            Un client de mesagerie instantanee compatibil cu protocolul Gadu-Gadu. Prezent în ultima versiune stabilă, 0.9.1.'),
        'h5_irc' => 'IRC',
        'array_irc' => array('<span style="font-weight:bold;"><a href="http://quassel-irc.org/">Quassel</a>:</span>
                            Ultima versiune stabilă de Quassel, 0.7.2, un client modern de IRC bazat pe Qt este disponibil în depozitele online.',
                '<span style="font-weight:bold;"><a href="http://konversation.kde.org/">Konversation</a>:</span>
                            Un client grafic multifuncțional de IRC cu suport pentru KDE, ultima versiune stabilă, 1.3.1, este disponibilă în depozitele Mageia online.',
                '<span style="font-weight:bold;"><a href="http://xchat-gnome.navi.cx/">XChat-gnome</a>:</span>
                            Un client grafic de IRC pentru biroul GNOME. Ultima versiune stabilă, 0.26.1, este disponibilă în depozite.',
                '<span style="font-weight:bold;"><a href="http://www.kvirc.net/">KVIrc</a>:</span>
                            Un client de IRC bazat pe Qt cu suport pentru tematici grafice, transparență, criptare, multe funcționalități IRC extinse scripturi. Ultima versiune stabilă, 4.0.4, este disponibilă în depozite.'),
        'h5_voip' => 'VOIP',
        'array_voip' => array('<span style="font-weight:bold;"><a href="http://www.qutecom.com/">QuteCom</a>:</span>
                            O aplicație de telefonie SIP bazat pe Qt, care vă permite să efectuați comunicații audio și video între două calculatoare, permițîndu-vă regruparea tuturor contactelor de mesagerie instantanee într-un singur loc. Ultima versiune stabilă este 2.2.',
                '<span style="font-weight:bold;"><a href="http://www.ekiga.org/">Ekiga</a>:</span>
                            O unealtă pentru comunicațiile audion și video prin Internet. Utilizează protocoalele SIP, H323 și este compatibil cu Microsoft Netmeeting. În trecut se numea GnomeMeeting. Ultima versiune stabilă este 3.2.7,.'),
        'h4_virt' => 'Virtualizare',
        'array_virt' => array('<span style="font-weight:bold;"><a href="http://www.virtualbox.org/">VirtualBox</a>:</span>
                            Versiunea 4.0.6 a virtualizatorului de uz general este disponibil în depozitele Mageia.',
                '<span style="font-weight:bold;"><a href="http://virt-manager.et.redhat.com/">virt-manager</a>:</span>
                            Mageia vine cu ultima versiune de virt-manager (și libvirtd), celebrul set de unelte pentru virtualizare, împreună cu suportul în diverse limbi, pentru facilitarea gesionării mașinilor virtuale, fie că sînt bazate pe kvm sau xen.',
                '<span style="font-weight:bold;"><a href="http://www.winehq.org/">WINE</a>:</span>
                            Ultima versiune de WINE, 1.3.20, este disponibilă în depozite; puteți fi sigur că găsiți crea mai recentă versiune a acestei aplicații faimoase în depozitul de pachete retroportate, la scurt timp după lansarea noii versiuni în amonte!'),
        'h4_graphics' => 'Grafică',
        'array_graphics' => array('<span style="font-weight:bold;"><a href="http://www.gimp.org/">Gimp</a>:</span>
                            Versiunea 2.6.11 a celebrului program GNU de manipulare a imaginilor.',
                '<span style="font-weight:bold;"><a href="http://inkscape.sourceforge.net/">Inkscape</a>:</span>
                            Versiunea 0.48.1 a celebrului program de grafică vectorială pe bază de SVG.',
                '<span style="font-weight:bold;">Blender<a href="http://www.blender.org/"></a>:</span>
                            Studioul de animație de înaltă calitate în versiunea 2.49b.'),
        'h4_ides' => 'Medii de dezvoltare integrate',
        'array_ides' => array('<span style="font-weight:bold;"><a href="http://anjuta.org/">Anjuta</a>:</span>
                            Un IDE puternic GNOME pentru C, C++, Python, Java,…',
                '<span style="font-weight:bold;"><a href="http://www.eclipse.org/">Eclipse</a>:</span>
                            Bine cunoscutul IDE pentru Java și alte limbaje',
                '<span style="font-weight:bold;"><a href="http://netbeans.org/">Netbeans</a>:</span>
                            Le fel de bine cunoscuta alternativă pentru Eclipse.',
                '<span style="font-weight:bold;"><a href="http://kdevelop.org/">KDevelop</a>:</span>
                            Mediul de dezvoltare KDE cu predilecție.'),
        'h3_base_system' => 'Sistemul de bază',
        'kernel' => 'Mageia vine cu nucleul din seria 2.6.38, mai precis 2.6.38.7 la data lansării, pentru mau multe detalii
                            despre ameliorările nucleelor din această serie citiți <a href="http://kernelnewbies.org/Linux_2_6_38">aici</a>; liniile generale ale acestui nucleu:',
        'kernel_array' => array('Suport pentru gruparea automată a proceselor (pentru detalii suplimentare citiți rticolul lui Linus Torvalds pe
                            <a href="http://lkml.org/lkml/2011/1/18/322">LKML</a> (lista de difuziune a nucleului Linux); și mențiunile acelui petic pe <a href="https://lwn.net/Articles/418884/">LWN.net</a>)',
                'Ameliorări semnifictive de scalabilitate la nivelul Linux VFS (Virtual File System)',
                'Suport pentru pagini mari transparente (fără a utiliza hugetblfs)',
                'Repartizarea automată a traficului de rețea de ieșire pe mai multe procesoare',
                'Suport pentru AMD Fusion APU',
                'Suport pentru Intel Sandy Bridge și Panther Point.',
                'Ipset 6.4 cu suport pentru IPv6'),
        'initscripts' => 'Sistemul de pornire: se utilizează încă initscripts, 9.21',
        'alsa' => 'ALSA 1.0.24.x:',
        'alsa_array' => array('libalsa2-1.0.24.1',
                'alsa-plugins-1.0.24',
                'alsa-tools-1.0.24.1: microcodul a fost divizat într-un pachet nou separat, alsa-firmware',
                'alsa-utils-1.0.24.2'),
        'h3_x' => 'Serverul X',
        'array_x' => array('Serverul X în versiunea 1.10.1, cu suport complet pentru Udev (Udev înlocuiește HAL în cazul de față)',
                'Pilotul liber ATI/AMD Radeon: „Kernel Mode Setting” este activat implicit, aducînd ameliorări de performanță și compatibilitate.',
                'Suport pentru Intel Sandy Bridge (a doua generație de Intel® Core™ i7/i5/i3) conform <a href="http://intellinuxgraphics.org/2011Q1.html">specificațiilor Intel</a>.',
                'Nouveau: pilotul Nouveau este utilizat în mod implicit pentru toate plăcile grafice nVidia suportate. Acesta vine cu suport pentru „Kernel Mode Setting”, accelerare 2D și suport pentru RandR 1.2 (pentru o configurare facilă a sistemelor cu ecrane multiple).'),
        'h4_proprietary' => 'Piloți proprietari pentru plăcile grafice',
        'text_proprietary' => 'Ultimele versiuni ale piloților proprietari nVidia și ATI (fglrx) sînt disponibile în depozitele non-free online.',
        'h3_input_methods' => 'Metodele de intrare',
        'text_input_methods' => 'Pentru a selecta o metodă de intrare dorită, puteți utiliza draklocale („Gestionați localizarea sistemului” din centrul de control Mageia). Mageia 1 va avea două metode de intrare:',
        'h4_ibus' => 'IBus',
        'text_ibus' => 'Suport pentru IBus (Intelligent Input Bus), versiunea 1.3.9 este deja disponibilă în depozitele oficiale.',
        'h4_scim' => 'SCIM',
        'text_scim' => 'SCIM (Smart Common Input Method), versiunea 1.4.9 este de asemenea disponibilă în depozitele oficiale.',
        'h2_available_media' => 'Medii de instalare disponibile',
        'text_available_media_1' => 'Mageia dispune de două medii de instalare distincte:',
        'array_available_media' => array('DVD ISO și Dual-arch CD ISO, care utilizează instalatorul tradițional drakx și',
                'Live CD ISO, aceasta este o versiune Live ISO care poate fi utilizată pentru previzualizarea distribuției, însă poate fi utilizată și pentru instalarea ei pe discul dur.'),
        'text_available_media_2' => 'Veți găsi întotdeauna informații despre descărcare pe <a href="http://mageia.org/downloads/">pagina de descărcări Mageia</a>;
                    sînt disponibile descărcări directe (ftp și http) sau BitTorrent.
                    Pentru informații suplimentare, consultați <a href="http://www.mageia.org/wiki/doku.php?id=mageia_installation_media">pagina mediilor de instalare Mageia</a>.',
        'h2_software_repos' => 'Depozitele online cu aplicații',
        'text_software_repos_1' => 'Pachetele Mageia există în trei depozite/medii, în funcție de licența utilizată.',
        'text_software_repos_2' => 'Iată o prezentare a acestor depozite:',
        'h4_core' => 'Core:',
        'text_core' => 'Depozitul „Core” include pachete cu aplicații libere și cu sursă deschisă, precum pachetele
                            cu o licență liberă și cu sursă deschisă, acest set de medii este adăugat implicit, iar mediile                      „Core Release” și „Core Updates” sînt activate în mod implicit.',
        'h4_nonfree' => 'Nonfree:',
        'text_nonfree' => 'Dedpozitul „Nonfree” include pacheltele care pot fi utilizate liber, precum cele pe care Mageia le poate
                            redistribui, însă acestea conțin aplicații cu sursă închisă (de unde și numele „Nonfree”); Spre exemplu,
                            acest depozit include piloții grafici proprietari nVidia și ATI, microcod pentru diferite plăci de rețea fără-fir… etc. Setul de medii „Nonfree” este adăugat implicit, iar mediile „Nonfree Release” și
                            „Nonfree Updates” sînt activate în mod implicit',
        'h4_tainted' => 'Tainted:',
        'text_tainted' => 'Depozitul „Tainted” include pachete cu diferite licențe, libere și non-libere, însă criteriul
                            principal pentru plasarea pachetelor în acest depozit este faptul că încalcă brevete și drepturi de 
                            autor în anumite țări ale lumii (ex: codecuri multimedia necesare pentru redarea diferitelor fișiere audio/video, pechete necesare
                            pentru redarea DVD-urilor din comerț… etc.). Setul de medii „Tainted” este adăugat implicit însă
                            <strong>nu</strong> este și activat în mod implicit, adică le puteți selecta și trebuie să verificați dacă legile din țara de rezidență vă permit utilizarea lor. Acest depozit este adăugat numai din comoditate pentru utilizatori. Acest depozit este pentru Mageia ceea ce PLF este pentru Mandriva sau RPM Fusion pentru Fedora.'
    ),
    'pt' => array(
		'page_title' => 'Notas de Lançamento da Mageia 1',
		'page_desc' => 'Notas do lançamento da Mageia 1',
		'page_kw' => 'mageia, notas de lançamento, Mga1',
		'page_h1' => 'Notas de Lançamento',
        'major_features' => 'Características Principais',
        'major_features_array' => array('Gestão de pacotes',
                'Configuração do Sistema',
                'Migração da Mandriva Linux',
                'Ambientes de Ecrã',
                'Aplicações de Ecrã',
                'Sistema Base',
                'Servidor X'),
        'installation_methods' => 'Métodos de Instalação Disponíveis',
        'support' => 'Suporte',
        'hw_req' => 'Requerimentos de Material',
        'mageia_milestone' => 'A Mageia 1 define um marco de muito trabalho árduo, que começou desde o dia em que a
                    <a href="/pt/about/2010-sept-announcement.html">distribuição Mageia nasceu</a>.',
        'overview' => 'Esta página oferece uma visão geral do que a Mageia lhe oferece.',
        'h2_major_features' => 'Características principais na Mageia',
        'h3_package_management' => 'Ferramentas de gestão de pacotes',
        'text_package_management_1' => 'A Mageia usa o familiar urpmi, esta é a ferramenta predefinida de resolução de dependências
                    na  Mageia, pode-a usar para instalar pacotes RPM no sistema. Pode também ser usada para actualizar o sistema,
                    para todos os completos acerca do urpmi veja a página do manual.',
        'text_package_management_2' => 'O resto da família:',
        'array_package_management' => array('<span style="font-weight:bold;">urpme:</span>
                            usado para desinstalar pacotes RPM no sistema, com muitas opções na linha de comandos',
                '<span style="font-weight:bold;">urpmf:</span>
                            uma ferramenta que pode ser usada para mostrar que pacote contém um certo ficheiro; pode também ser 
                            usado para procurar todo o tipo de marcas RPM (requerimentos, sugestões, conflitos, obsoletos) nos pacotes dos repositórios oficiais, entre outras características',
                '<span style="font-weight:bold;">urpmq:</span>
                            a ferramenta de consulta da base de dados urpmi, pense nela como o \'rpm -q\' mas com muito mais opções
                            extendidas, que podem ser usadas para verificar os pacotes RPM nos repositórios oficiais',
                '<span style="font-weight:bold;">urpmi.update:</span>
                            uma ferramenta para actualizar a base de dados urpmi na instalação do utilizador, pode também ser usada
                            para desactivar (ignorar) médias fonte configuradas no sistema',
                '<span style="font-weight:bold;">urpmi.addmedia:</span>
                            uma ferramenta para adicionar as médias fonte Mageia (em-linha (http, ftp, rsync) e local)',
                '<span style="font-weight:bold;">urpmi.removemedia:</span>
                            uma ferramenta para remover as médias fonte configuradas no sistema'),
        'h3_system_configuration' => 'Ferramentas de configuração do sistema Mageia',
        'text_system_configuration' => 'A Mageia continuará a usar todas as ferramentas drak familiares; aqui estão os destaques:',
        'array_system_configuration' => array('<span style="font-weight:bold;">drakconf:</span>
                            O centro de controlo Mageia, que pode ser usado para lançar todo o tipo de ferramentas administrativas',
                '<span style="font-weight:bold;">drak3d:</span>
                            Uma ferramenta para configurar os efeitos 3D do ecrã (e.g. Compiz)',
                '<span style="font-weight:bold;">drakguard:</span>
                            Uma ferramenta que permite configurar o controlo parental. Pode bloquear o acesso a sítios \'web\' e
                            restringir o acesso da conexão Internet para um determinado intervalo horário',
                '<span style="font-weight:bold;">rpmdrake:</span>
                            Um interface prático que torna simples a instalação e a remoção de pacotes de programas (RPM) na Mageia',
                '<span style="font-weight:bold;">drakx-net:</span>
                            As ferramentas de rede predefinidas na Mageia',
                '<span style="font-weight:bold;">userdrake:</span>
                            Uma ferramenta amigável e poderosa para administrar utilizadores e grupos',
                '<span style="font-weight:bold;">system-config-printer:</span>
                            Uma ferramenta poderosa para configurar a impressão, desenvolvida pela Redhat/Fedora'),
        'h3_migration' => '<a href="../migrate/">Migração da Mandriva Linux</a>',
        'text_migration' => 'Se está a usar a Mandriva Linux 2010.1 ou 2010.2,
                        veja o nosso <a href="../migrate">guia de migração</a>.',
        'h3_available_des' => 'Ambientes de Ecrã Disponíveis',
        'text_available_des' => 'Como uma distribuição de ecrã agnóstica, a Mageia tem todos os ambientes de ecrã populares, com
                    vários gestores de janelas. Aqui está uma visão geral:',
        'h4_kde' => 'KDE4',
        'text_kde' => 'KDE SC 4.6.3. Este lançamento trás  muitos melhoramentos e novas opções, para mais detalhes consulte a
                    página de <a href="http://www.kde.org/announcements/4.6/">anúncio do lançamento</a>.',
        'h4_gnome' => 'GNOME',
        'text_gnome' => 'GNOME 2.32, com uma infinidade de aplicações populares (Totem, Rhythmbox, Epiphany, Evolution,
                    O Arquivador GNOME (file-roller), Evince, F-Spot… etc).',
        'h4_xfce' => 'XFCE4',
        'text_xfce' => 'A última versão estável, 4.8.1, do XFCE, trás muitos melhoramentos, para mais detalhes consulte a página de
                    <a href="http://xfce.org/about/news/?post=1295136000">anúncio de lançamento do XFCE 4.8</a>.',
        'h4_lxde' => 'LXDE',
        'text_lxde' => 'Os últimos pacotes estáveis LXDE (PCManFM, LXSession, LXTerminal, Gpicview, LXRandR).',
        'h4_wms' => 'Gestores de Janelas',
        'text_wms' => 'Outros gestores de janelas, que na realidade são apenas pequenos ambientes de ecrã e muito leves:',
        'array_wms' => array('Openbox',
                'WindowMaker',
                'IceWM',
                'Fluxbox',
                'Fvwm2'),
        'h3_desktop_apps' => 'Aplicações de Ecrã',
        'text_desktop_apps' => 'Muitas das aplicações populares, aqui estão os destaques.',
        'h4_web_and_mail' => 'Navegadores Web e clientes de correio electrónico',
        'array_web_and_mail' => array('<span style="font-weight:bold;"><a href="http://www.mozilla.com/firefox/">Firefox</a>:</span>
                            Firefox 4.0.1, este novo lançamento trás muitos melhoramentos relativamente a todos os aspectos, para mais informações consulte a página de <a href="http://www.mozilla.com/en-US/firefox/4.0/releasenotes/">notas de lançamento do Firefox 4</a>',
                '<span style="font-weight:bold;"><a href="http://www.chromium.org/Home">Chromium-Browser</a>:</span>
                            Navegador Google Chromium 11.0.696.65., e para a conveniência dos utilizadores o navegador Chromium vem com diferentes versões, estável, beta e instável, cada um seguindo os diferentes canais/ramos de desenvolvimento, será escusado dizer que a versão beta e instável não é para aqueles fracos do coração!',
                '<span style="font-weight:bold;"><a href="http://www.gnome.org/projects/epiphany/">Epiphany</a>:</span>
                            A ultima versão estável, 2.30.6, do navegador web GNOME baseado no motor de renderização webkit que está disponível nos repositórios Mageia',
                '<span style="font-weight:bold;"><a href="http://pim.kde.org/">KMail</a>:</span>
                            A última versão estável, 4.4.11.1, do famoso cliente de correio electrónico KDE4',
                '<span style="font-weight:bold;"><a href="http://www.mozillamessaging.com/thunderbird">Thunderbird</a>:</span>
                            A última versão estável do famoso cliente de correio electrónico da Mozilla, o Thunderbird 3.1.10, está disponível nos repositórios em-linha, com todos os melhoramentos e correcções nas séries 3.1.x, para mais informação consulte a página de <a href="http://www.mozillamessaging.com/en-US/thunderbird/3.1.10/releasenotes/">notas de lançamento</a>. Tanto as extensões Enigmail e Lightning estão também disponíveis',
                '<span style="font-weight:bold;"><a href="http://www.gnome.org/projects/evolution/">Evolution</a>:</span>
                            A última versão estável, 2.32.2, do famoso cliente de correio GNOME, calendário, gestor de contactos e ferramenta de comunicação.'),
        'h4_office' => 'Escritório',
        'array_office' => array('<span style="font-weight:bold;"><a href="http://www.documentfoundation.org/develop">LibreOffice</a>:</span>
                            <a href="http://blog.mageia.org/pt/?p=190">A Mageia prometeu suportar totalmente o LibreOffice</a> e cumpriu a promessa, o LibreOffice 3.3.2.2 está disponível nos repositórios Mageia, trazendo um conjunto completo de aplicações de escritório',
                '<span style="font-weight:bold;"><a href="http://www.calligra-suite.org/">Calligra</a>:</span>
                            O projecto Calligra Suite é uma continuação do projecto KOffice, tem todas as componentes familiares do KOffice, para uma lista detalhada das aplicações disponíveis e do que podem fazer, consulte o seu sítio web',
                '<span style="font-weight:bold;"><a href="http://techbase.kde.org/Projects/KMyMoney">KmyMoney</a>:</span>
                            A última versão estável, 4.5.3, o gestor de finanças pessoal para o KDE4 já está nos repositórios, o seu principal objectivo em ser preciso, fácil de usar e com todas as opções familiares que esperaria de um gestor de finanças',
                '<span style="font-weight:bold;"><a href="http://skrooge.org/">Skrooge</a>:</span>
                            com a filosofia de dar opções aos utilizadores, o Skrooge 0.8.1 está disponível também nos repositórios Mageia, um gestor de finanças pessoal para o KDE4, por definição altamente intuitivo, enquanto providencia poderosas funções',
                '<span style="font-weight:bold;"><a href="http://www.gnucash.org/">GnuCash</a>:</span>
                            O GnuCash 2.4.5 está disponível nos repositórios, vem com um livro de cheques como um interface gráfico de registos que permite inserir e controlar os seus assuntos financeiros'),
        'h4_communication' => 'Comunicações',
        'h5_im' => 'Mensagens Instantâneas',
        'array_im' => array('<span style="font-weight:bold;"><a href="http://kopete.kde.org/">Kopete</a>:</span>
                            A última versão estável do mensageiro instantâneo familiar, parte do KDE SC 4.6.3, está disponível com suporte para uma grande variedade de protocolos de mensagens instantâneas',
                '<span style="font-weight:bold;"><a href="http://www.pidgin.im/">Pidgin</a>:</span>
                            A última versão estável, 2.7.11, do famoso cliente de mensagens instantâneas baseado no GTK+2.0 está disponível nos nossos repositórios, suporta uma infinidade de protocolos de mensagens instantâneas. Para mais detalhes acerca das correcções e melhoramentos que esta versão trás consulte a página <a href="http://developer.pidgin.im/wiki/ChangeLog">de registos (changelog)</a>',
                '<span style="font-weight:bold;"><a href="http://live.gnome.org/Empathy">Empathy</a>:</span>
                            O Empathy é um cliente de MI baseado na infra-estrutura Telepathy, o Empathy 2.34.0.',
                '<span style="font-weight:bold;"><a href="http://www.kadu.net/">Kadu</a>:</span>
                            Um mensageiro instantâneo compatível com o protocolo Gadu-Gadu. A última versão estável, 0.9.1'),
        'h5_irc' => 'IRC',
        'array_irc' => array('<span style="font-weight:bold;"><a href="http://quassel-irc.org/">Quassel</a>:</span>
                            A última versão estável, 0.7.2, do Quassel, um cliente IRC moderno baseado no Qt está disponível nos repositórios',
                '<span style="font-weight:bold;"><a href="http://konversation.kde.org/">Konversation</a>:</span>
                            Um cliente IRC completo com suporte gráfico KDE, a última versão estável, 1.3.1, está disponível nos nossos repositórios',
                '<span style="font-weight:bold;"><a href="http://xchat-gnome.navi.cx/">XChat-gnome</a>:</span>
                            Um cliente IRC gráfico para o ecrã GNOME. A última versão estável, 0.26.1, já se encontra disponível nos repositórios',
                '<span style="font-weight:bold;"><a href="http://www.kvirc.net/">KVIrc</a>:</span>
                            Um cliente IRC baseado no Qt com suporte para temas, transparência, encriptação, muitas opções IRC extendidas, e com scripts. A última versão estável, 4.0.4, já se encontra disponível nos repositórios'),
        'h5_voip' => 'VOIP',
        'array_voip' => array('<span style="font-weight:bold;"><a href="http://www.qutecom.com/">QuteCom</a>:</span>
                            Uma aplicação de telefone SIP que lhe permite fazer chamadas de voz e vídeo de PC para PC, e integrar todos os seus contactos num único sítio, é baseado no Qt. A última versão estável 2.2.',
                '<span style="font-weight:bold;"><a href="http://www.ekiga.org/">Ekiga</a>:</span>
                            Uma ferramenta para comunicar com vídeo e áudio na Internet. Usa ambos os protocolos SIP e H323 e é compatível com o Microsoft Netmeeting. Chamava-se GnomeMeeting. A última versão estável, 3.2.7,.'),
        'h4_virt' => 'Virtualização',
        'array_virt' => array('<span style="font-weight:bold;"><a href="http://www.virtualbox.org/">VirtualBox</a>:</span>
                            Versão 4.0.6, o virtualizador de propósito geral está disponível nos repositórios Mageia.',
                '<span style="font-weight:bold;"><a href="http://virt-manager.et.redhat.com/">virt-manager</a>:</span>
                            A Mageia distribui com a última versão do virt-manager (e libvirtd), o popular conjunto de ferramentas de gestão para virtualização, juntamente com a ligação para várias linguagens, para facilitar a gestão de máquinas virtuais, tanto baseadas no kvm ou no xen.',
                '<span style="font-weight:bold;"><a href="http://www.winehq.org/">WINE</a>:</span>
                            A última versão de desenvolvimento do WINE, 1.3.20, está disponível nos repositórios; pode ficar dsecansado que normalmente encontrará a última versão desta famosa aplicação nos repositórios \'Backports\' logo após a um novo lançamento!'),
        'h4_graphics' => 'Gráficos',
        'array_graphics' => array('<span style="font-weight:bold;"><a href="http://www.gimp.org/">Gimp</a>:</span>
                            versão 2.6.11 do famoso Programa de Manipulação de Imagem GNU, o GIMP.',
                '<span style="font-weight:bold;"><a href="http://inkscape.sourceforge.net/">Inkscape</a>:</span>
                            versão 0.48.1 do famoso programa de desenho baseado em vectores SVG.',
                '<span style="font-weight:bold;">Blender<a href="http://www.blender.org/"></a>:</span>
                            O estúdio de animação de alta definição e qualidade. Versão 2.49b.'),
        'h4_ides' => 'IDEs',
        'array_ides' => array('<span style="font-weight:bold;"><a href="http://anjuta.org/">Anjuta</a>:</span>
                            UM IDE GNOME poderoso para C, C++, Python, Java,…',
                '<span style="font-weight:bold;"><a href="http://www.eclipse.org/">Eclipse</a>:</span>
                            O IDE bem conhecido para Java e outras linguagens',
                '<span style="font-weight:bold;"><a href="http://netbeans.org/">Netbeans</a>:</span>
                            A alternativa igualmente bem conhecida para o eclipse',
                '<span style="font-weight:bold;"><a href="http://kdevelop.org/">KDevelop</a>:</span>
                            O IDE KDE'),
        'h3_base_system' => 'Sistema Base',
        'kernel' => 'A Mageia distribui com as séries do kernel 2.6.38, especificamente a 2.6.38.7 na versão de lançamento,
                            para mais detalhes acerca
                            dos melhoramentos nas séries deste kernel veja <a href="http://kernelnewbies.org/Linux_2_6_38">aqui</a>;
                            os destaques:',
        'kernel_array' => array('Suporte para o processo de agrupamento automático (para mais detalhes consulte a informação
                            colocado pelo Linus Torvalds na
                            <a href="http://lkml.org/lkml/2011/1/18/322">LKML</a> (Lista de Correio Kernel Linux); e referências às
                            correcções em <a href="https://lwn.net/Articles/418884/">LWN.net</a>)',
                'Melhoramentos significativos na escalabilidade no VFS do Linux (Virtual File System)',
                'Suporte de transparência de página grande (sem usar o hugetblfs)',
                'Propagação automática da saída do tráfego da rede através de múltiplos CPUs',
                'Suporte para os APUs de Fusão AMD',
                'Suporte para o Intel Sandy Bridge e o Panther Point.',
                'Ipset 6.4 com suporte IPv6'),
        'initscripts' => 'Sistema de Arranque: ainda usa o initscripts, 9.21',
        'alsa' => 'ALSA 1.0.24.x:',
        'alsa_array' => array('libalsa2-1.0.24.1',
                'alsa-plugins-1.0.24',
                'alsa-tools-1.0.24.1: Os bits do \'firmware\' foram separados num novo pacote, alsa-firmware',
                'alsa-utils-1.0.24.2'),
        'h3_x' => 'Servidor X',
        'array_x' => array('O servidor X 1.10.1, com total suporte Udev (neste aspecto o Udev substitui o HAL)',
                'Controlador livre radeon ATI/AMD: o \'Kernel Mode Setting\' é agora activado por predefinição, trazendo os melhoramentos do desempenho e da compatibilidade.',
                'Intel Sandy Bridge (2ª Geração Intel® Core™ i7/i5/i3) suporte de acordo com as <a href="http://intellinuxgraphics.org/2011Q1.html">especificações Intel</a>.',
                'Nouveau: o controlador \'Nouveau\' é usado por predefinição para placas gráficas nvidia suportadas. Trás o suporte do \'Kernel Mode Setting\', aceleração 2D, e o suporte RandR 1.2 (para fácil configuração de vários monitores)'),
        'h4_proprietary' => 'Controladores proprietários de placas gráficas',
        'text_proprietary' => 'As últimas versões dos controladores proprietários da nVidia e da ATI (fglrx) estão disponíveis no repositório Nonfree.',
        'h3_input_methods' => 'Métodos de Entrada',
        'text_input_methods' => 'Para seleccionar o Método de Entrada da sua eleição, pode usar o draklocale (“Gere a localização do seu sistema” no Centro de Controlo Mageia do &rarr; Sistema). A Mageia 1 terá dois métodos de entrada:',
        'h4_ibus' => 'IBus',
        'text_ibus' => 'Suporte IBus (Intelligent Input Bus), a versão 1.3.9 encontra-se disponível nos repositórios oficiais.',
        'h4_scim' => 'SCIM',
        'text_scim' => 'SCIM (Smart Common Input Method), versão 1.4.9, está também disponível nos repositórios oficiais.',
        'h2_available_media' => 'Média de instalação disponível',
        'text_available_media_1' => 'A Mageia tem dois distintos tipos de média de instalação:',
        'array_available_media' => array('ISO DVD e ISO Dual-arch CD, que usa o instalador tradicional drakx',
                            'ISO Live CD, este é um ISO \'live\' que pode ser usado para prever a distribuição e pode também ser
                            usado para instalar a Mageia no seu disco rígido'),
        'text_available_media_2' => 'Encontrará sempre a informação de transferência na <a href="http://mageia.org/downloads/">página de transferência Mageia</a>;
                            as transferências directas (ftp e http) e BitTorrent estão disponíveis.
                            Para mais informação, consulte a <a href="http://www.mageia.org/wiki/doku.php?id=mageia_installation_media">página de média de instalação Mageia</a>.',
        'h2_software_repos' => 'Repositórios dos Programas',
        'text_software_repos_1' => 'Os pacotes na Mageia têm três diferentes repositórios/médias, dependendo da licença
                            que cada programa usa.',
        'text_software_repos_2' => 'Aqui está uma visão geral dos repositórios:',
        'h4_core' => 'Core:',
        'text_core' => 'O repositório \'Core\' inclui pacotes com programas de código livre (open-source), i.e. pacotes
                            licenciados sob uma licença de código livre, o conjunto da média fonte \'Core\' é adicionado por
                            predefinição e o “Core Release” e o “Core Updates” são activados por predefinição',
        'h4_nonfree' => 'Nonfree:',
        'text_nonfree' => 'O repositório \'Nonfree\' inclui pacotes que estão livres de encargos, i.e. A Mageia pode
                            redistribuí-los, mas contêm programas de código-fonte fechado (por isso se chama \'Nonfree\'); Por
                            exemplo este repositório inclui os controladores proprietários das placas gráficas nVidia e ATI,
                            \'firmware\' para várias placas Sem-Fios… etc. O conjunto da média \'Nonfree\' é adicionado
                            por predefinição e as “Nonfree Release” e “Nonfree Updates” são activadas por predefinição',
        'h4_tainted' => 'Tainted:',
        'text_tainted' => 'O repositório \'Tainted\' inclui pacotes sob várias licenças, livres e não-livres, mas o principal
                            critério para os pacotes neste repositório é de que podem infringir as patentes e leis dos direitos
                            de autor em certos países (e.g. os codificadores multimédia para reproduzir vários ficheiros
                            áudio/vídeo, os pacotes necessários para reproduzir vídeo nos DVDs comerciais… etc); como tal
                            o conjunto das médias\'Tainted\' é adicionado por predefinição mas <strong>não</strong> activadas
                            por predefinição, i.e. é totalmente opcional; veja as suas leis locais antes de usar os
                            pacotes deste repositório. Este repositório é apenas adicionado por conveniência dos utilizadores.
                            Este repositório representa para a Mageia o mesmo que o PLF representa para os utilizadores
                            Mandriva ou o \'RPM Fusion\' é para os utilizadores Fedora.'
    )
);

