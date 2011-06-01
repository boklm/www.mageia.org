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
    ),
    'fr' => array(
        'page_title' => 'Migrer de Mandriva Linux à Mageia',
        'page_desc' => 'Quelques étapes pour migrer de façon sûre de Mandriva Linux 2010.1 ou 2010.2 à Mageia 1.',
        'page_kw' => 'mageia, mandriva, mise a jour, migrer',
        'page_h1' => 'Migrer depuis Mandriva Linux',
        'upgrading_general' => 'La mise à niveau depuis Mandriva Linux 2010.1 et 2010.2 est prévue, elle a été mise au point dans le détail ces derniers mois et devrait fonctionner. Mais, au préalable et comme toujours&nbsp;:',
        'upgrading_general_array' => array('Sauvegardez vos données avant la mise à niveau.',
                'Si vous utilisez un portable, connectez-le au secteur&nbsp;!
                        Vous allez mettre à jour plus de 2000 paquets et cela peut prendre un peu de temps.',
                'Ne lancez pas d\'application qui utilise le réseau de manière intensive durant la mise à niveau 
                        &ndash; mieux vaut réserver la bande passante pour la mise à niveau.'),
        'upgrading_ways' => 'Il existe plusieurs façons de mettre à niveau depuis l\'une de ces versions de Mandriva&nbsp;:',
        'upgrading_ways_dvd' => '<a href="#dvd">utiliser le DVD de Mageia 1</a>',
        'upgrading_ways_inline' => '<a href="#inline">utiliser directement les sources de médias en ligne</a>,
                        utiliser <a href="#mgaonline">mgaonline</a> ou <a href="#urpmi">urpmi</a>.',
        'h2_dvd' => 'Mise à niveau en utilisant le DVD de Mageia 1',
        'dvd_clean_install' => 'Vous pouvez utiliser le <a href="/fr/downloads/">DVD de Mageia 1</a> pour une nouvelle installation 
                    mais également pour mettre votre système à niveau depuis une version précédente.',
        'to_upgrade' => 'Pour mettre à niveau&nbsp;:',
        'to_upgrade_array' => array('<a href="/fr/downloads/">Télécharger l\'image ISO</a> et la graver sur un DVD.',
                'Démarrer depuis le DVD et choisir « Installer Mageia 1 » dans le menu de démarrage;',
                'Choisir l\'option « Upgrade » dans l\'installeur.'),
        'recommended' => 'Il est recommandé de configurer les dépôts en ligne, si possible
                    &ndash; l\'installeur vous posera la question durant la mise à niveau.
                    En effet le DVD ne peut seulement inclure qu\'une partie des dépôts en ligne complets de Mageia.',
        'h2_inline' => 'Mise à niveau en ligne',
        'inline_1' => 'Vous pouvez mettre à niveau en utilisant directement les sources de médias en ligne, depuis votre installation Mandriva.',
        'inline_2' => 'Cela peut se faire soit en utilisant l\'outil graphique <code>mgaonline</code>, soit en 
                    ligne de commande avec <code>urpmi</code>.
                    Les deux méthodes sont décrites ci-dessous. Mais, tout d\'abord, téléchargez et installez
                    le paquet <code>mgaonline</code> qui vous aidera durant le processus&nbsp;:',
        'mgaonline_image_title' => 'pour Mandriva Linux 2010.1 ou 2010.2',
        'inline_3' => 'Notez qu\'il est possible que vous receviez un avertissement de sécurité dû à une signature de paquets incorrecte. 
                    C\'est parce qu\'un système Mandriva ne reconnaît pas les signatures Mageia&nbsp;;
                    vous pouvez donc ne pas tenir compte de ces avertissements. Oui, c\'est nul, on sait.',
        'a_or_b' => 'Bon, le paquet est installé&nbsp;? Alors, avançons, et choisissez a) ou b) ci-dessous&nbsp;:',
        'h2_a' => 'a) Mise à niveau en ligne en utilisant mgaonline (graphique)',
        'popup_window_1' => 'a) Mise à niveau en ligne en utilisant mgaonline (graphique)',
        'popup_window_2' => 'Suivez simplement les instructions&nbsp;; les sources de médias de Mageia seront configurées et la migration va démarrer.',
        'as_soon_complete' => 'Aussitôt que la migration sera terminée, vous devrez redémarrer votre système. Et voilà.',
        'h2_b' => 'b) Mise à niveau en ligne en utilisant urpmi (ligne de commande)',
        'cli_1' => 'Vous pouvez aussi mettre à niveau en utilisant <code>urpmi</code> depuis votre émulateur de terminal favori si vous êtes à l\'aise avec. Voici les étapes&nbsp;:',
        'cli_2' => 'Retirez toutes les sources de médias existant sur votre système.',
        'cli_3' => 'Ajoutez les sources en ligne de Mageia.',
        'cli_4' => 'soit directement (selon le lieu que vous avez défini, le meilleur miroir sera sélectionné).',
        'cli_5' => 'soit en utilisant un miroir de médias spécifique (vous pouvez faire votre choix dans <a href="http://mirrors.mageia.org/distrib">notre liste de miroirs</a>).',
        'h2_thats_it' => 'Et voilà&nbsp;!',
        'h3_question' => 'Des questions&nbsp;?',
        'join_and_ask' => 'N\'hésitez pas à rejoindre notre canal IRC <a href="irc://irc.freenode.net/#mageia">#mageia</a>
                        sur Freenode ou aller sur <a href="http://forums.mageia.org/">notre forum</a>
                        pour y demander de l\'aide ou des détails.',
        'h3_feedback' => 'Vous voulez partager votre retour d\'expérience&nbsp;?',
        'tweet_it' => 'Alors <a href="http://twitter.com/mageia_org">tweetez à @mageia_org</a>.'
    ),
    'it' => array(
        'page_title' => 'Migra da Mandriva Linux a Mageia',
        'page_desc' => 'Come migrare da Mandriva Linux 2010.1/2010.2 a Mageia 1 in pochi passi e in sicurezza.',
        'page_kw' => 'mageia, mandriva, aggiornamento, migrazione',
        'page_h1' => 'Migra da Mandriva Linux',
        'upgrading_general' => 'L\'aggiornamento da Mandriva Linux 2010.1 e 2010.2 è supportato ed è stato messo a punto nei mesi
                passati, quindi dovrebbe funzionare. Ma come sempre e prima di tutto:',
        'upgrading_general_array' => array('fai un backup dei tuoi dati prima di aggiornare;',
                'se stai aggiornando un portatile, collegalo alla corrente!
                        Potresti trovarti ad aggiornare più di 2000 pacchetti e questo può richiedere un po\' di tempo;',
                'non avviare alcuna applicazione che sfrutti intensivamente la rete durante l\'aggiornamento
                        &ndash; devi riservare banda per l\'aggiornamento.'),
        'upgrading_ways' => 'Esistono svariati modi di aggiornare partendo da una delle precedenti release Mandriva:',
        'upgrading_ways_dvd' => '<a href="#dvd">utilizzare il DVD di Mageia 1</a>',
        'upgrading_ways_inline' => '<a href="#inline">utilizzare direttamente media online direttamente</a>,
                        utilizzare <a href="#mgaonline">mgaonline</a> o <a href="#urpmi">urpmi</a>.',
        'h2_dvd' => 'Aggiornare usando il DVD di Mageia 1',
        'dvd_clean_install' => 'Puoi utilizzare il <a href="/downloads/">DVD di Mageia 1</a> per un\'installazione pulita
                    ma anche per aggiornare da precedenti versioni..',
        'to_upgrade' => 'Per aggiornare:',
        'to_upgrade_array' => array('<a href="/downloads/">Scarica la ISO</a> e masterizzala su un DVD;',
                'Avvia il DVD e seleziona "Installa Mageia 1" dal menu del bootloader;',
                'Seleziona l\'opzione "Aggiornamento" nell\'installatore.'),
        'recommended' => 'Si raccomanda di impostare i repositories online se possibile
                    &ndash; l\'installatore ti farà delle domande in proposito durante l\'aggiornamento.
                    La ragione &egrave; che il solo DVD include un sottoinsieme
                    dei repositories completi di Mageia online.',
        'h2_inline' => 'Aggiornare online',
        'inline_1' => 'Puoi aggiornare utilizzando direttamente i media online da dentro la tua installazione di Mandriva.',
        'inline_2' => 'Questo pu&ograve; essere fatto sia utilizzando lo strumento grafico <code>mgaonline</code>
                    sia lo strumento da linea di comando <code>urpmi</code>.
                    Entrambi i metodi sono descritti qui di seguito. Ma prima, scarica ed installa
                    questo pacchetto <code>mgaonline</code> che ti aiuterà nel processo:',
        'mgaonline_image_title' => 'per Mandriva Linux 2010.1 o 2010.2',
        'inline_3' => 'Nota che potresti ricevere degli allarmi sicurezza a causa di firme dei pacchetti non valide.
                    Ci&ograve; &egrave; dovuto al fatto che il sistema Mandriva non riconosce le firme di Mageia;
                    puoi tranquillamente ignorare questi allarmi.
                    Sì, fa schifo, lo sappiamo.',
        'a_or_b' => 'Quindi, il pacchetto è installato? Bene, prosegui e scegli a) o b) qui di seguito:',
        'h2_a' => 'a) Aggiornamento online, utilizzando mgaonline (GUI)',
        'popup_window_1' => 'a) Aggiornamento online, utilizzando mgaonline (GUI)',
        'popup_window_2' => 'Segui semplicemente le istruzioni della procedura guidata; questa ti configura; le sorgenti dei Media e avvia la migrazione.',
        'as_soon_complete' => 'Al termine della migrazione dovrai riavviare il tuo sistema; ecco fatto.',
        'h2_b' => 'b) Aggiornamento online, utilizzando urpmi (CLI)',
        'cli_1' => 'Puoi anche aggiornare utilizzando <code>urpmi</code> dal tuo emulatore di terminale preferito,
                    se ti senti a tuo agio con questo. Questi sono i passi:',
        'cli_2' => 'Rimuovi tutte le sorgenti dei media del tuo sistema:',
        'cli_3' => 'Aggiungi le sorgenti online di Mageia:',
        'cli_4' => 'sia direttamente (questo selezioner&agrave; il mirror migliore, dopo la tua posizione):',
        'cli_5' => 'sia utilizzando un media mirror specifico (puoi sceglierlo dalla <a href="http://mirrors.mageia.org/distrib">nostra lista dei mirror</a>):',
        'h2_thats_it' => 'Finito!',
        'h3_question' => 'Hai domande?',
        'join_and_ask' => 'Non esitare a collegarti al nostro canale IRC <a href="irc://irc.freenode.net/#mageia">#mageia</a>
                        su Freenode o ad andare nel <a href="http://forums.mageia.org/">nostro forum</a>
                        per chiedere assistenza o dettagli.',
        'h3_feedback' => 'Vuoi inviare qualche commento?',
        'tweet_it' => '<a href="http://twitter.com/mageia_org">tweettalo semplicemente a @mageia_org</a>.'
    ),
    'uk' => array(
        'page_title' => 'Перехід з Mandriva Linux на Mageia',
        'page_desc' => 'Як перейти з Mandriva Linux 2010.1/2010.2 на Mageia 1 у декілька безпечних кроків.',
        'page_kw' => 'mageia, mandriva, оновлення, перехід',
        'page_h1' => 'Перехід з Mandriva Linux',
        'upgrading_general' => 'Передбачено підтримку оновлення з Mandriva Linux 2010.1 та 2010.2. Описані способи перевірено і визнано надійними,
                отже проблем не повинно виникнути. Але вам, як завжди, варто виконати такі дії:',
        'upgrading_general_array' => array('створити резервну копію ваших даних до оновлення;',
                'якщо оновлюється система на портативному комп’ютері, з’єднайте його з джерелом живлення!
                        Можливо, доведеться оновити понад 2000 пакунків, отже оновлення може бути тривалою справою;',
                'під час оновлення не запускайте жодних програм, які активно обмінюються даними у мережі
                        &ndash; для оновлення вам потрібен буде весь канал обміну даними.'),
        'upgrading_ways' => 'Передбачено декілька способів оновлення з одного з попередніх випусків Mandriva:',
        'upgrading_ways_dvd' => '<a href="#dvd">за допомогою DVD Mageia 1</a>',
        'upgrading_ways_inline' => '<a href="#inline">безпосереднє оновлення з інтернет-сховища даних</a>,
                        за допомогою <a href="#mgaonline">mgaonline</a> або <a href="#urpmi">urpmi</a>.',
        'h2_dvd' => 'Оновлення за допомогою DVD Mageia 1',
        'dvd_clean_install' => 'Ви можете скористатися <a href="/downloads/">DVD Mageia 1</a> для встановлення системи
                    «з нуля», а також для оновлення раніше встановленої системи Mandriva Linux.',
        'to_upgrade' => 'Щоб оновити систему, виконайте такі дії:',
        'to_upgrade_array' => array('<a href="/downloads/">Звантажте образ ISO</a> і запишіть образ (не файл образу) на DVD;',
                'Завантажте систему з DVD і виберіть у меню завантажувача пункт «Встановити Mageia 1»;',
                'Скористайтеся варіантом «Оновити» ("Upgrade").'),
        'recommended' => 'Рекомендуємо вам налаштувати роботу з інтернет-сховищами пакунків, якщо це можливо,
                    &ndash; програма для встановлення попросить вас виконати це налаштування під час оновлення.
                    Причиною цього є те, що на DVD зберігається лише частина пакунків з
                    повноцінного інтернет-сховища пакунків Mageia.',
        'h2_inline' => 'Оновлення з інтернету',
        'inline_1' => 'Ви можете оновити систему безпосередньо з інтернет-сховища пакунків, скориставшись вже встановленою Mandriva.',
        'inline_2' => 'Виконати цю дію можна за допомогою графічного інструмента <code>mgaonline</code>
                    або інструмента командного рядка <code>urpmi</code>.
                    Обидва ці способи описано нижче. Спочатку вам слід отримати і встановити
                    пакунок <code>mgaonline</code>, який допоможе вам у оновленні:',
        'mgaonline_image_title' => 'для Mandriva Linux 2010.1 або 2010.2',
        'inline_3' => 'Зауважте, що може бути показано попередження щодо загрози безпеці через невідповідність підписів.
                    Причиною є те, що системи Mandriva не розпізнають підписи Mageia;
                    отже ви можете знехтувати цими попередженнями.
                    Так, це не дуже красиво, ми про це знаємо.',
        'a_or_b' => 'Отже, пакунок встановлено? Добре, рухаємося далі. Виберіть один варіант «а» або «б»:',
        'h2_a' => 'а) Оновлення зі сховищ у інтернеті за допомогою mgaonline (графічний інтерфейс)',
        'popup_window_1' => 'а) Оновлення зі сховищ у інтернеті за допомогою mgaonline (графічний інтерфейс)',
        'popup_window_2' => 'Виконайте настанови майстра. Майстер налаштує джерела пакунків Mageia і розпочне процедуру оновлення.',
        'as_soon_complete' => 'Щойно перехід буде завершено, вам варто перезапустити систему. Ось і все.',
        'h2_b' => 'б) Оновлення зі сховищ у інтернеті за допомогою urpmi (командний рядок)',
        'cli_1' => 'Оновити систему можна також за допомогою <code>urpmi</code> з вашого улюбленого емулятора термінала,
                    якщо ви надаєте перевагу користуванню таким способом. Ось що треба зробити:',
        'cli_2' => 'Вилучіть всі створені записи джерел пакунків у вашій системі:',
        'cli_3' => 'Додайте записи інтернет-джерел пакунків Mageia:',
        'cli_4' => 'або безпосередньо (дзеркало буде вибрано автоматично так, щоб його було розташовано якнайближче до вас):',
        'cli_5' => 'або за допомогою вказаного вами дзеркала (визначитися з вибором можна <a href="http://mirrors.mageia.org/distrib">тут</a>):',
        'h2_thats_it' => 'Ось і все!',
        'h3_question' => 'Маєте питання?',
        'join_and_ask' => 'Приєднуйтеся до нашого каналу IRC <a href="irc://irc.freenode.net/#mageia">#mageia</a>
                        на сервері Freenode або завітайте на <a href="http://forums.mageia.org/">наш форум</a>,
                        щоб задати ваші питання або уточнити незрозумілі моменти.',
        'h3_feedback' => 'Маєте якісь відгуки?',
        'tweet_it' => 'Просто додайте їх до <a href="http://twitter.com/mageia_org">твіту @mageia_org</a>.'
    ),
    'nl' => array(
        'page_title' => 'Migratie van Mandriva Linux naar Mageia',
        'page_desc' => 'Hoe te migreren van Mandriva Linux 2010.1/2010.2 naar Mageia 1 in een paar veilige stappen.',
        'page_kw' => 'mageia, mandriva, upgrade, migratie',
        'page_h1' => 'Migreren van Mandriva Linux',
        'upgrading_general' => 'Een upgrade vanuit Mandriva Linux 2010.1 en 2010.2 wordt ondersteund en is over de afgelopen maanden uitvoerig getweaked en getest
                en zou dus moeten werken. Maar zoals altijd:',
        'upgrading_general_array' => array('Maak een kopie van uw data voordat u de upgrade start;',
                'als u op een laptop werkt, sluit deze dan op het lichtnet aan!
                        Het kan zijn dat er meer dan 2000 pakketten voor een upgrade in aanmerking komen en dit kan enige tijd in beslag nemen;',
                'start geet netwerkbelastende applicaties tijdens de upgrade
                        &ndash; u heeft deze bandbreedte nodig voor de upgrade.'),
        'upgrading_ways' => 'Er zijn meerdere manieren om te upgraden van een van de vorige Mandriva releases:',
        'upgrading_ways_dvd' => '<a href="#dvd">Gebruikmakende van de Mageia 1 DVD</a>',
        'upgrading_ways_inline' => '<a href="#inline">direkt gebruikmakende van de online mediabronnen</a>,
                        met behulp van <a href="#mgaonline">mgaonline</a> of <a href="#urpmi">urpmi</a>.',
        'h2_dvd' => 'Upgrade gebruikmakende van de Mageia 1 DVD',
        'dvd_clean_install' => 'U kunt de <a href="/downloads/">Mageia 1 DVD</a> gebruiken om zowel een schone installatie te doen
                    maar ook om eerdere releases te upgraden.',
        'to_upgrade' => 'Om te upgraden:',
        'to_upgrade_array' => array('<a href="/downloads/">Download het ISO-bestand</a> en brand deze op een DVD;',
                'Start uw computer vanaf de DVD en selecteer "Install Mageia 1" vanuit het opstartmenu;',
                'Selecteer de "Upgrade"-optie in het installatieprogramma.'),
        'recommended' => 'Het wordt aangeraden om de online bronnen indien mogelijk te configureren
                    &ndash; het installatieprogramma zal u hierom vragen tijdens de upgrade.
                    De reden hiervoor is dat de DVD maar een subset bevat van de pakketten 
                    die beschikbaar zijn op de volledige online Mageia bronnen.',
        'h2_inline' => 'Upgraden vanuit Mandriva',
        'inline_1' => 'U kunt gebruikmakende van de online beschikbare mediabronnen direkt vanuit uw Mandriva-installatie upgraden.',
        'inline_2' => 'Dit kan door middel van het grafische <code>mgaonline</code> progamma
                    of op de commandoregel met het programma <code>urpmi</code>.
                    Beide methoden worden hieronder beschreven. Maar, ten eerste dient u
                    dit <code>mgaonline</code> pakket te downloaden en te installeren welke u verder door dit proces zal helpen:',
        'mgaonline_image_title' => 'Voor Mandriva Linux 2010.1 of 2010.2',
        'inline_3' => 'U kunt een veiligheidswaarschuwing krijgen ten gevolg van een ongeldigde pakketondertekening.
                    Dit komt doordat een Mandriva-systeem de ondertekeningen van Mageia niet herkent;
                    U kunt deze waarschuwing met een gerust hart negeren.
                    We begrijpen dat dit niet zo elegant is, maar wij kunnen hier helaas niets aan veranderen.',
        'a_or_b' => 'Het pakket is met succes geïnstalleerd? Mooi zo, laten we doorgaan en kiest u hier beneden a) of b):',
        'h2_a' => 'a) Upgraden vanuit Mandriva gebruikmakende van mgaonline (GUI)',
        'popup_window_1' => 'a) Upgraden vanuit Mandriva gebruikmakende van mgaonline (GUI)',
        'popup_window_2' => 'Volg de instructies van de wizard; deze zal de Mageia mediabronnen instellen en de migratie starten.',
        'as_soon_complete' => 'Zodra de migratie compleet it dient u uw systeem opnieuw op te starten; Tadaa!',
        'h2_b' => 'b) Upgraden vanuit Mandriva gebruikmakende van urpmi (CLI)',
        'cli_1' => 'Wanneer u dit op prijs stelt, kunt ook upgraden vanuit Mandriva gebruikmakende van <code>urpmi</code> vanuit uw favoriete terminal emulator.
                 Dit zijn de benodigde stappen:',
        'cli_2' => 'Verwijder alle bestaande mediabronnen van uw systeem:',
        'cli_3' => 'Voeg de Mageia online mediabronnen toe:',
        'cli_4' => 'of direkt (dit zal de beste spiegelserver voor u selecteren op basis van uw lokatie):',
        'cli_5' => 'of gebruikmakende van een specifieke spiegelserver (u kunt er een kiezen van de lijst beschikbaar op <a href="http://mirrors.mageia.org/distrib">de lijst met spiegelservers</a>):',
        'h2_thats_it' => 'En dat is het dan!',
        'h3_question' => 'Heeft u nog vragen?',
        'join_and_ask' => 'Schroom niet om een bezoek te brengen aan ons <a href="irc://irc.freenode.net/#mageia">#mageia</a>
                        IRC-kanaal op Freenode of op <a href="http://forums.mageia.org/">ons forum</a>
                        voor hulp of verdere informatie.',
        'h3_feedback' => 'Wilt u ons feedback geven?',
        'tweet_it' => 'Stuur gerust een <a href="http://twitter.com/mageia_org">tweet naar @mageia_org</a>.'
    )
);
