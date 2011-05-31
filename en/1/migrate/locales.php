<?php
$_t = array(
    'en' => array(
        'page_title' => 'Migrate from Mandriva Linux to Mageia',
        'page_desc' => 'How to migrate from Mandriva Linux 2010.1/2010.2 to Mageia 1 in a few, safe steps.',
        'page_kw' => 'mageia, mandriva, upgrade, migrate',
        'page_h1' => 'Migrate from Mandriva Linux',
        'upgrading_general' => 'Upgrading from Mandriva Linux 2010.1 and 2010.2 is supported, and has been fine tuned over the past
                months, so it should work. But as always and before:',
        'upgrading_general_array' => array('back up your data before upgrading;',
                'if you are upgrading a laptop, connect to power!
                        You might be updating over 2000 packages, and this can take some time;',
                'do not start up any net-intensive applications during the upgrade
                        &ndash; you need to reserve bandwidth for the upgrade.'),
        'upgrading_ways' => 'There are several ways to upgrade from one of those previous Mandriva releases:',
        'upgrading_ways_dvd' => '<a href="#dvd">using the Mageia 1 DVD</a>',
        'upgrading_ways_inline' => '<a href="#inline">using the online media sources directly</a>,
                        using <a href="#mgaonline">mgaonline</a> or <a href="#urpmi">urpmi</a>.',
        'h2_dvd' => 'Upgrade using the Mageia 1 DVD',
        'dvd_clean_install' => 'You can use the <a href="/downloads/">Mageia 1 DVD</a> to do a clean install
                    but also to upgrade from previous releases.',
        'to_upgrade' => 'To upgrade:',
        'to_upgrade_array' => array('<a href="/downloads/">Download the ISO</a> and burn it on a DVD;',
                'Boot the DVD and select "Install Mageia 1" from the bootloader menu;',
                'Select the "Upgrade" option in the installer.'),
        'recommended' => 'It is recommended to set up the online repositories, if possible
                    &ndash; the installer will ask you about this during the upgrade.
                    The reason is that the DVD only includes a subset
                    of these full fledged online Mageia repositories.',
        'h2_inline' => 'Upgrading inline',
        'inline_1' => 'You can upgrade using the online media sources directly, from within your Mandriva installation.',
        'inline_2' => 'This can be done either using the graphical <code>mgaonline</code> tool
                    or the command-line <code>urpmi</code>.
                    Both methods are outlined below. But first, download and install
                    this <code>mgaonline</code> package that will help you through the process:',
        'mgaonline_image_title' => 'for Mandriva Linux 2010.1 or 2010.2',
        'inline_3' => 'Note that you may get a security warning, due to invalid package signatures.
                    This is because a Mandriva system does not recognise Mageia signatures;
                    you can safely ignore these warnings.
                    Yes, that sucks, we know.',
        'a_or_b' => 'So, it installed the package? Good, let\'s move on and pick a) or b) below:',
        'h2_a' => 'a) Upgrading inline, using mgaonline (GUI)',
        'popup_window_1' => 'a) Upgrading inline, using mgaonline (GUI)',
        'popup_window_2' => 'Just follow the wizard instructions; it will configure Mageia media sources and start the migration.',
        'as_soon_complete' => 'As soon as the migration is complete, you should restart your system; and here you are.',
        'h2_b' => 'b) Upgrading inline, using urpmi (CLI)',
        'cli_1' => 'You can also upgrade using <code>urpmi</code> from your favourite terminal emulator,
                    if you are confortable with it. Here are the steps:',
        'cli_2' => 'Remove all the existing media sources on your system:',
        'cli_3' => 'Add the Mageia online sources:',
        'cli_4' => 'either directly (this will select a best matching mirror, after your location):',
        'cli_5' => 'either using a specific media mirror (you can decide from <a href="http://mirrors.mageia.org/distrib">our mirrors list</a>):',
        'h2_thats_it' => 'That\'s it!',
        'h3_question' => 'Have a question?',
        'join_and_ask' => 'Do not hesitate to join our <a href="irc://irc.freenode.net/#mageia">#mageia</a>
                        IRC channel on Freenode or go in <a href="http://forums.mageia.org/">our forum</a>
                        to ask for assistance or details.',
        'h3_feedback' => 'Want to send some feedback?',
        'tweet_it' => 'Just <a href="http://twitter.com/mageia_org">tweet it to @mageia_org</a>.'
    ),
    'de' => array(
        'page_title' => 'Migration von Mandriva Linux zu Mageia',
        'page_desc' => 'Die Migration von Mandriva Linux 2010.1/2010.2 zu Mageia 1 in wenigen, sicheren Schritten.',
        'page_kw' => 'mageia, mandriva, upgrade, migrate',
        'page_h1' => 'Migration von Mandriva Linux',
        'upgrading_general' => ' Ein Upgrade von Mandriva Linux 2010.1 und 2010.2 wird unterstützt und wurde in den letzten Monaten verfeinert,
                so dass es funktionieren sollte. Aber zunächst und wie gewohnt:',
        'upgrading_general_array' => array('Sichern Sie Ihre Daten vor der Migration!;',
                'wenn Sie einen Laptop aktualisieren, nutzen Sie bitte die externe Stromversorgung!
                        Sie können mehr als 2000 Pakete aktualisieren, was einige Zeit in Anspruch nehmen kann.;',
                'Starten Sie während des Upgrades keine Anwendungen, die Ihre Netzverbindung stark beanspruchen. 
                        &ndash; Sie benötigen die Bandbreite für das Upgrade.'),
        'upgrading_ways' => 'Es gibt mehrere Wege um eine frühere Mandriva-Installation zu aktualisieren:',
        'upgrading_ways_dvd' => '<a href="#dvd">Verwendung der Mageia 1 DVD</a>',
        'upgrading_ways_inline' => '<a href="#inline">Direkte Verwendung der Online-Quellen</a>
                        durch <a href="#mgaonline">mgaonline</a> oder <a href="#urpmi">urpmi</a>.',
        'h2_dvd' => 'Verwendung der Mageia 1 DVD',
        'dvd_clean_install' => 'Sie können die <a href="/downloads/">Mageia 1 DVD</a> verwenden, um eine Neuinstallation oder eine Aktualisierung von einer früheren Installation durchzuführen.',
        'to_upgrade' => 'Aktualisierung:',
        'to_upgrade_array' => array('Laden Sie <a href="/downloads/">das ISO-Abbild</a> herunter und brennen Sie es auf eine DVD;',
                'Starten Sie von der DVD und wählen Sie "Installation von Mageia 1" im Start-Menü aus.;',
                'Wählen Sie die "Aktualisieren" Option im Installations-Menü aus.'),
        'recommended' => 'Es wird empfohlen - falls möglich - die Online-Quellen einzurichten 
                    &ndash; der Installer wird Sie während des Upgrades danach fragen. 
                    Der Grund hierfür ist, dass die DVD nur einen Teil der in den Software-Quellen vorhandenen Programme enthält. ',
        'h2_inline' => 'Direkte Verwendung der Online-Quellen',
        'inline_1' => 'Sie können die Installation von Mageia 1 aus Ihrer Mandriva-Installation heraus vornehmen.',
        'inline_2' => 'Hierfür können Sie entweder das grafische Werkzeug <code>mgaonline</code> 
                    oder das Kommandozeilen-Werkzeug <code>urpmi</code> verwenden.
                    Beide Methoden sind unten beschrieben, doch zunächst sollten Sie das Paket  <code>mgaonline</code> herunterladen, das Ihnen bei dem Prozess helfen wird:',
        'mgaonline_image_title' => 'für Mandriva Linux 2010.1 oder 2010.2',
        'inline_3' => 'Anmerkung: Sie werden möglicherweise eine Sicherheitswarnung wegen einer ungültigen Paketsignatur sehen. 
                    Das liegt daran, dass ein Mandriva-System keine Mageia-Signaturen kennt. Sie können diese Warnung bedenkenlos übergehen. 
                    Ja, wir wissen, dass das nervt.',
        'a_or_b' => 'Ist das Paket installiert? Gut, dann können Sie weiter machen und entweder a) oder b) auswählen:',
        'h2_a' => 'a) Aktualisierung mit Hilfe des grafischen Werkzeuges mgaonline (GUI)',
        'popup_window_1' => 'a) Aktualisierung mit Hilfe des grafischen Werkzeuges mgaonline (GUI)',
        'popup_window_2' => 'Sie brauchen nur den Angaben des Assistenten zu folgen. Der Assistent wird die Mageia-Quellen einrichten und die Migration starten.',
        'as_soon_complete' => 'Sobald die Migration vollständig abgeschlossen ist, sollten Sie Ihr System neu starten; Willkommen bei Mageia! ',
        'h2_b' => 'b) Nahtloser Upgrade mithilfe von urpmi (Konsole)',
        'cli_1' => 'Sie können auch mit <code>urpmi</code> ein Upgrade von einem Terminal-Emulator Ihrer Wahl durchführen,
                    wenn Sie sich das zutrauen. Hier sind die einzelnen Schritte:',
        'cli_2' => 'Entfernen Sie alle existierenden Paket-Quellen aus Ihrem System:',
        'cli_3' => 'Fügen Sie die Mageia online Paket-Quellen ein:',
        'cli_4' => 'entweder direkt (dies wird einen passenden Spiegelserver - abhängig von Ihrem Standort - auswählen):',
        'cli_5' => 'oder durch Auswahl eines spezfischen Spiegelservers  (den Sie aus  <a href="http://mirrors.mageia.org/distrib">unserer Mirror-Liste </a>auswählen können):',
        'h2_thats_it' => 'Das ist alles!',
        'h3_question' => 'Haben Sie Fragen?',
        'join_and_ask' => 'Zögern Sie nicht und fragen Sie nach Hilfe in unserem  <a href="irc://irc.freenode.net/#mageia">#mageia</a>
                        IRC Kanal auf  Freenode oder in unserem  <a href="http://forums.mageia.org/">Forum</a>.',
        'h3_feedback' => 'Möchten Sie uns eine Rückmeldung geben? ',
        'tweet_it' => 'Twittern Sie einfach <a href="http://twitter.com/mageia_org">an  @mageia_org</a>.'
    ),
    'es' => array(
        'page_title' => 'Migrar desde Mandriva Linux a Mageia',
        'page_desc' => 'Cómo migrar desde Mandriva Linux 2010.1/2010.2 a Mageia 1 en pocos y seguros pasos.',
        'page_kw' => 'mageia, mandriva, actualizar, migrar',
        'page_h1' => 'Migrar desde Mandriva Linux',
        'upgrading_general' => 'La actualización desde Mandriva Linux 2010.1 y 2010.2 está soportada, y ha sido bien afinada en los meses
                pasados, así que debería funcionar. Pero como siempre y antes:',
        'upgrading_general_array' => array('respalde sus datos antes de actualizar;',
                'si está actualizando un laptop, ¡conéctelo a la toma de electricidad!
                        Usted va a estar actualizando alrededor de 2000 paquetes, y esto puede tomar algo de tiempo;',
                'no inicie aplicaciones intensivas en red durante la actualización
                        &ndash; necesita reservar ancho de banda para la actualización.'),
        'upgrading_ways' => 'Hay muchas formas de actualizar desde una de estas versiones anteriores de Mandriva:',
        'upgrading_ways_dvd' => '<a href="#dvd">usando el DVD de Mageia 1</a>',
        'upgrading_ways_inline' => '<a href="#inline">usando los medios en línea directamente</a>,
                        usando <a href="#mgaonline">mgaonline</a> o <a href="#urpmi">urpmi</a>.',
        'h2_dvd' => 'Actualizar usando el DVD de Mageia 1',
        'dvd_clean_install' => 'Usted puede usar el <a href="/downloads/">DVD de Mageia 1</a> para hacer una instalación limpia
                    pero también para actualizar desde versiones anteriores.',
        'to_upgrade' => 'Para actualizar:',
        'to_upgrade_array' => array('<a href="/downloads/">Descargue la ISO</a> y grábela en un DVD;',
                'Arranque con el DVD y seleccione "Instalar Mageia 1" desde el menú del cargador de arranque;',
                'Seleccione la opción "Actualizar" en el instalador.'),
        'recommended' => 'Se recomienda configurar los repositorios en línea, si es posible
                    &ndash; el instalador le preguntará sobre ello durante la actualización.
                    La razón es que el DVD sólo contiene un subconjunto
                    de todas las bondades que poseen los repositorios en línea de Mageia.',
        'h2_inline' => 'Actualizando en línea',
        'inline_1' => 'Usted puede actualizar utilizando los medios en línea directamente desde su instalación Mandriva.',
        'inline_2' => 'Ésto se puede hacer ya sea usando la herramienta gráfica <code>mgaonline</code>
                    o la línea de comandos <code>urpmi</code>.
                    Ambos métodos se detallan mas abajo. Pero primero, descargue e instale
                    el paquete <code>mgaonline</code> que lo ayudará en el proceso:',
        'mgaonline_image_title' => 'Para Mandriva Linux 2010.1 o 2010.2',
        'inline_3' => 'Note que puede obtener una advertencia de seguridad debido a firmas de paquetes inválidas.
                    Esto ocurre porque un sistema Mandriva no reconoce las firmas de Mageia;
                    usted puede ignorar estas advertencias tranquilamente.
                    Sí, apesta, lo sabemos.',
        'a_or_b' => 'Entonces, ¿instaló el paquete? Bien, vamos a continuar y elegir a) o b) de mas abajo:',
        'h2_a' => 'a) Actualizar en línea, usando mgaonline (IGU)',
        'popup_window_1' => 'a) Actualizar en línea, usando mgaonline (IGU)',
        'popup_window_2' => 'Sólo siga las instrucciones del asistente; él configurará los medios de Mageia e iniciará la migración.',
        'as_soon_complete' => 'Cuando la migración está completa, debería reiniciar su sistema; y listo.',
        'h2_b' => 'b) Actualizar en línea, usando urpmi (ILC)',
        'cli_1' => 'También puede actualizar usando <code>urpmi</code> en su emulador de terminal favorito
                    si esto le acomoda. Éstos son los pasos:',
        'cli_2' => 'Quitar todos los medios existentes en su sistema:',
        'cli_3' => 'Agregar las fuentes en línea de Mageia:',
        'cli_4' => 'ya sea de manera directa (ésto seleccionará el mejor servidor espejo conforme a su ubicación):',
        'cli_5' => 'o usando un espejo específico (puede elejir desde <a href="http://mirrors.mageia.org/distrib">nuestra lista de espejos</a>):',
        'h2_thats_it' => '¡Eso es todo!',
        'h3_question' => '¿Tiene alguna pregunta?',
        'join_and_ask' => 'No dude en unirse a nuestro canal de IRC <a href="irc://irc.freenode.net/#mageia">#mageia</a>
                        en Freenode o entrar a <a href="http://forums.mageia.org/">nuestro foro</a>
                        para preguntar por asistencia o más detalles.',
        'h3_feedback' => '¿Quiere enviar comentarios?',
        'tweet_it' => 'Sólo <a href="http://twitter.com/mageia_org">twitéelo a @mageia_org</a>.'
    )
);
