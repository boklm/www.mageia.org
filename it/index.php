<!DOCTYPE html>
<html dir="ltr" lang="it"><head>
    <meta charset="utf-8"><title>Mageia - Una nuova distribuzione Linux</title>
    <meta name="description" content="Mageia è una distribuzione Linux basata sulla communità.">
    <meta name="keywords" content="mageia, linux, mandriva, software libero">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <link rel="alternate" type="application/rss+xml" title="Mageia Blog (italiano)" href="http://blog.mageia.org/it/?feed=rss" />
    <?php include '../analytics.php';?>
</head><body>
    <?php include '../langs.php'; ?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh">una nuova distribuzione Linux</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g bb1">
                <div class="para"><p>Mageia è un fork di Mandriva Linux,
                    supportata da una organizzazione no-profit di collaboratori 
                    riconosciuti ed eletti.</p>

                    <p>Molto più che un sistema operativo gratuito, libero, sicuro, stabile e sostenibile,
                        l'obiettivo è di mettere in piedi una governance stabile e affidabile per dirigere progetti collaborativi
                        (<a href="#announce">controlla l'annuncio originale</a>).</p>
                </div>
            </div>
            <div class="yui-g bb1">
                <div class="yui-u first rb1">
                    <div class="para" id="news">
                        <h2><a href="http://blog.mageia.org/it/">Notizie</a></h2>
                        <?php include '../lib/news.php'; echo html_news('it'); ?>
                    </div>
                </div>
                <div class="yui-u">
                    <div class="para" lang="en">
                        <h2>Succede adesso</h2>
                        <?php include '../roadmap.php'; ?>
                    </div>
                </div>
            </div>
            <div class="yui-g bb1">
                <div class="yui-u first">
                    <div class="para" id="contact">
                        <h2>Come contattarci</h2>
                        <ul>
                            <li><a href="https://www.mageia.org/mailman/">Mailing-lists</a></li>
                            <li><a href="http://mageia.org/wiki/doku.php?id=irc">IRC (Freenode network)</a></li>
                            <li><a href="http://mageia.org/wiki/">Mageia Wiki</a></li>
                            <li>Contatta la squadra dei fondatori:
                                <ul>
                                    <li><a href="mailto:mageia-contact@mageia.org">mageia-contact@mageia.org</a></li>
                                    <li><a href="mailto:press@mageia.org">press@mageia.org</a></li>
                                    <li>aspettati una risposta in 2 giorni</li>
                                </ul></li>
                            <li><a href="http://www.twitter.com/mageia_org">twitter.com/mageia_org</a></li>
                            <li><a href="http://identi.ca/mageia">identi.ca/mageia</a></li>
                        </ul>
                        <!--
                        <p>Please do not use this address for discussions that can happen on above mailing-lists
                            or IRC channels.</p>
                        -->
                    </div>
                </div>
                <div class="yui-u">
                    <div class="para">
                    <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FMageia%2F157247240967735&amp;width=320&amp;connections=10&amp;stream=false&amp;header=false&amp;height=255" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:320px; height:255px;" allowTransparency="true"></iframe>
                    </div>
                </div>
            </div>
            <div class="yui-g">
                <div class="para">
                    <p class="date">Parigi, 18 Settembre 2010</p>
                    <p>Come forse avete sentito, il futuro della distribuzione Mandriva Linux è incerto.</p>
                    <p>La
maggior parte degli impiegati che lavoravano sulla distribuzione sono
stati licenziati quando Edge-IT è stata liquidata. Noi non abbiamo più
fiducia nei piani di Mandriva SA e non pensiamo che la società (o qualsiasi
società) sia un ospite sicuro per un progetto del genere.</p>

                    <p>Molte cose sono successe negli ultimi dodici anni.
Alcune molto piacevoli: la comunità Mandriva Linux è abbastanza grande,
motivata e con esperienza, la distribuzione è sempre una delle più popolari
e un prodotto premiato, facile da usare e innovativo. Alcuni altri eventi
hanno avuto delle conseguenze molto negative che hanno fatto perdere la
fiducia a molta gente nelle possibilità di sopravvivenza della loro distribuzione
favorita.</p>
                    <p>La gente che ci lavora semplicemente non vuole più
dipendere dalle fluttuazioni economiche e dalle mosse strategiche erratiche ed
inspiegabili della società.</p>
                </div>
                <div class="para">
                    <h2>Fare il fork di Mandriva Linux? Si.</h2>

                    <p>Fare il fork un progetto open source esistente non è mai
una decisione semplice da prendere, e biforcare Mandriva Linux è un operazione enorme.</p>

                    <p>Non è stata una decisione impulsiva.
Noi tutti ne abbiamo discusso a lungo: ex-impiegati, contributori Cooker*
e le comunità di utenti. Nelle ultime settimane abbiamo collezionato opinioni
e reazioni con lo scopo di ottenere un qualche consenso globale e di unirci
prima di procedere.</p>

                    <p>Crediamo che un fork sia la soluzione migliore e
abbiamo deciso di creare una nuova distribuzione:
                        <strong>Mageia</strong>.</p>
                </div>
                <div class="para">
            <h2>Nuove fondamenta.</h2>
            <p>Mageia è un progetto della comunità: non dipenderà dal destino di nessuna azienda.</p>
            <p>Nei prossimi giorni sarà costituita un' organizzazione
non-profit che sarà diretta da un consiglio di membri della comunità.
Dopo il primo anno questo consiglio sarà regolarmente eletto da membri
impegnati della comunità.</p>
            <p>Questa organizzazione dirigerà e coordinerà la distribuzione:
l'hosting del codice sorgente e del software, il build system, il marketing,
la promozione della comunicazione e di eventi. Dati, fatti, progetti e disegni
saranno condivisi e discussi nell'ambito di questa organizzazione.</p>
            <p>Discuteremo e fisseremo i dettagli nei prossimi giorni.</p>
            <p>La distribuzione Mageia
sarà cosa il consiglio ne farà, con l'aiuto e il contributo di tutta
la comunità. Abbiamo già delle idee e dei piani per questa distribuzione; Vogliamo:</p>
            <ul>
                <li>rendere Linux e il software libero facile da utilizzare per tutti;</li>
                <li>offrire utility integrate per la configurazione del sistema;</li>
                <li>mantenere un alto livello di integrazione tra il sistema di base, il desktop
(KDE/GNOME) e le applicazioni; migliorare specialmente l'integrazione di software di terze parti
(sia libero che proprietario);</li>
                <li>prendere di mira nuove architetture e nuovi formati;</li>
                <li>migliorare la nostra conoscenza degli utenti di computer e di apparecchi elettronici.</li>
            </ul>
            <p>Voi certamente avete pure delle idee. Ci prenderemo tempo per condividerle.</p>
        </div>
        <div class="para">
            <h2>Comunità.</h2>
            <p>Noi intendiamo la comunità Mageia composta da:</p>
            <ul>
                <li>utenti,</li>
                <li>produttori (designer, programmatori, packager, traduttori, tester, etc.),</li>
                <li>fautori.</li>
            </ul>
            <p>Questi possono essere individui, organizzazioni e società di tutto il mondo.</p>
            <p>Ci sono molte sfide: tanti paesi, tante lingue, tante culture, tanti bisogni diversi. E questo è un bene.</p>
            <p>Con l'esperimento Mandriva Assembly abbiamo visto che questa non è un' operazione semplice. Crediamo di poterlo fare meglio.</p>
        </div>
        <div class="para">
            <h2>Persone.</h2>
            <p>Indipendentemente da quello che uno fa nella vita,
la persone sono il migliore ed unico vero bene. E l'obbiettivo di
Mageia è di aiutare le persone. La fiducia conta. Noi siamo solamente
agli inizi di questa biforcazione. Non sarà facile. Ma crediamo che sia
necessario.</p>
            
            <?php include '../people.html'; ?>
            
            <p>Per altri contributori: se volete il vostro nome su questa lista,
indicate che avete in mente di seguire questa biforcazione e fateci sapere su IRC o tramite email.</p>
            </div>
            <div class="para">
                <h2>Prossimi passi.</h2>
                <p>Abbiamo bisogno di molte cose nei prossimi giorni:</p>
                <ul>
                    <li>hardware per il hosting del software, build server + un centro di calcolo dove collocare questi server;</li>
                    <li>programmatori, contributori, traduttori e tester che s'impegnano nello sviluppo di Mageia;</li>
                    <li>consulenti su come costruire l'organizzazione e i processi, etc.</li>
                </ul>
                <p>Il vostro aiuto e supporto sarà molto apprezzato.</p>
            </div>
            </div>
        </div>
    </div>

</body></html>