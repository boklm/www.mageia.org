<!DOCTYPE html>
<html dir="ltr" lang="et"><head>
    <meta charset="utf-8">
    <title>Mageia - uus Linuxi distributsioon</title>
    <meta name="description" content="Mageia on uus kogukonna loodav Linuxi distributsioon.">
    <meta name="keywords" content="mageia, linux, mandriva, vaba tarkvara">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" />
    <?php include '../analytics.php'; ?>
</head>
<body>
    <?php include '../langs.php'; ?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh">uus Linuxi distributsioon</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g bb1">
                <div class="para">
                    <p>Mageia on Mandriva Linuxi edasiarendus, mida toetab tunnustatud
                        ja valitud kaastöötajatest mittetulundusühing.</p>

                    <p>Vaba, turvalise, stabiilse ja kestliku operatsioonisüsteemi
                        pakkumise kõrval on meie sihiks kujundada vahetule koostööle
                        tuginevate projektide stabiilne ja usaldusväärne juhtimine
                        (<a href="#announce">lugege selle kohta ka esialgset teadaannet allpool</a>).</p>
                </div>
            </div>
            <?php include '../release_counter.php'; ?>
            <div class="yui-g bb1">
                <div class="yui-u first rb1">
                    <div class="para" id="news">
                        <h2><a href="http://blog.mageia.org/">Uudised</a></h2>
                    <?php include '../lib/news.php'; echo html_news('en'); ?>
                    </div>
                </div>
                <div class="yui-u">
                    <div class="para" lang="en">
                        <h2>Viimased sündmused</h2>
                        <?php include '../roadmap.php'; ?>
                    </div>
                </div>
            </div>
            <div class="yui-g bb1">
                <div class="yui-u first">
                    <div class="para" id="contact">
                        <h2>Lööge kaasa!</h2>
                        <ul>
                            <li><a href="https://www.mageia.org/mailman/">Postiloendid</a></li>
                            <li><a href="http://mageia.org/wiki/doku.php?id=irc">IRC (Freenode võrk)</a></li>
                            <li><a href="http://mageia.org/wiki/">Mageia Wiki</a></li>
                            <li>Kontakt asutajate meeskonnaga:
                                <ul>
                                    <li><a href="mailto:mageia-contact@mageia.org">mageia-contact@mageia.org</a></li>
                                    <li><a href="mailto:press@mageia.org">press@mageia.org</a></li>
                                    <li>vastust võib oodata 2 päeva jooksul</li>
                                    <li>kirjutada tasub inglise või prantsuse keeles, aga see pole tingimata kohustuslik</li>
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
                <div class="para" id="announce">
                    <p class="date">Pariis, 18. septembril<sup>th</sup> 2010</p>
                    <p>Nagu olete arvatavasti kuulnud, on Mandriva Linuxi distributsiooni tulevik ebaselge.</p>
                    <p>Paljud distributsiooni kallal töötanud inimesed lasti lahti, kui likvideeriti ettevõte Edge-IT. Me ei usalda enam Mandriva SA plaane ega usu, et see (või ka mis tahes muu) firma on niisuguse projekti jaoks turvaline peremees.</p>

                    <p>Viimase 12 aasta jooksul on juhtunud palju asju.
                        Mõned asjad on olnud väga toredad: Mandriva Linuxi kogukond on üsna suur, motiveeritud ja kogemustega, distributsioon üks populaarsemaid ja mitmeid auhindu võitnud, seda on lihtne kasutada ja see on päris uuendusmeelne.
                        Mõnel sündmusel on aga olnud aga õige halvad tagajärjed, mis on vähendanud inimeste usku oma lemmikdistributsiooni elujõulisusse.</p>
                    <p>Distributsiooni kallal töötavad inimesed lihtsalt ei soovinud enam sõltuda majandusliku olukorra kõikumistest ning ettevõtte seletamatutest ja umbropsu langetatud strateegilistest otsustest.</p>
                </div>
                <div class="para">
                    <h2>Mandriva Linuxi järglane? Jah!</h2>

                    <p>Olemasolevast vaba tarkvara projektist uue haru loomine ei ole kunagi kerge otsus ning Mandriva Linuxi järglase loomine on hiiglaslik ettevõtmine.</p>
                    <p>See ei olnud siiski hetkeajel tehtud otsus. Me kõik rääkisime sellest päris palju: nii endised töötajad, arendusharu (Cooker) kaastöötajad kui ka kasutajate kogukonnad. Me kogusime viimastel nädalatel arvamusi ja reaktsioone, sest soovisime enne järgmisi samme saavutada teatava üleüldise konsensuse.</p>

                    <p>Me usume, et lahkulöömine ja järglase loomine on parim lahendus, mistõttu otsustasime luua uue distributsiooni:
                        <strong>Mageia</strong>.</p>
                        
                </div>
                <div class="para">
            <h2>Uued põhialused</h2>
            <p>Mageia on kogukonna projekt: selle saatus ei sõltu ühegi konkreetse ettevõtte käekäigust.</p>
            <p>Lähipäevil luuakse mittetulundusühing, mida hakkab juhtima kogukonna liikmete nõukogu. Esimese tööaasta järel hakkavad seda nõukogu regulaarselt valima pühendunud kogukonnaliikmed.</p>
            <p>See organisatsioon hakkab haldama ja koordineerima distributsiooni: koodi &amp; tarkvara majutamine ja levitamine, tarkvara ehitamise süsteem, turundus, suhtlemine ja üritused. Selle organisatsiooni vahendusel jagatakse ja arutatakse andmeid, fakte, edasisi kavu ning plaane.</p>
            <p>Üksikasjad arutatakse läbi ja pannakse paika lähipäevil.</p>
            <p>Mageia distributsioon tuleb just selline, nagu nõukogu seda soovib, kusjuures selle juures saavad ulatada oma abikäe kõik kogukonna liikmed. Meil on juba mõningaid mõtteid ja plaane distributsiooni osas, nimelt tahame me:</p>
            <ul>
                <li>muuta Linuxi ja vaba tarkvara kasutamise kõigile lihtsaks ja kergeks;</li>
                <li>pakkuda ühtsel alusel töötavaid süsteemi seadistamise tööriistu;</li>
                <li>kindlustada väga tugeva ühtsuse baassüsteemi, töölaua (KDE/GNOME) ja rakenduste vahel, eriti aga parandada kolmanda poole tarkvara (olgu see vaba või omanduslik) kokkukuuluvust ülejäänud süsteemiga;</li>
                <li>olla valmis kasutamiseks uutel arhitektuuridel ja platvormidel;</li>
                <li>edendada arvutite ja muude elektrooniliste seadmete kasutajate teadmisi.</li>
            </ul>
            <p>Kahtlemata on oma ideid ka teil. Jagage neid meiega ja me jagame neid edasi.</p>
        </div>
        <div class="para">
            <h2>Kogukond</h2>
            <p>Meie arusaamist mööda kuuluvad Mageia kogukonda:</p>
            <ul>
                <li>kasutajad,</li>
                <li>loojad (disainerid, arendajad, pakendajad, tõlkijad, testijad jne.),</li>
                <li>toetajad ja propagandistid.</li>
            </ul>
            <p>Need võivad olla üksikisikud, organisatsioonid või ettevõtted mis tahes maailma nurgast.</p>
            <p>Meie ees seisab hulk raskusi: nii palju riike, nii palju keeli, nii palju kultuure, nii palju eri vajadusi. Ja see on tore ja hea!</p>
            <p>Me nägime Mandriva Assamblee kogemuse varal, et see ei ole lihtne ülesanne. Me usume, et me suudame sellega paremini hakkama saada.</p>
        </div>
        <div class="para" id="people">
            <h2>Inimesed</h2>
            <p>Mida te ka ei teeks, on inimesed alati suurim ja ainuke tõeline vara. Mageia on mõeldud inimeste abistamiseks. Usaldus maksab. Me oleme oma tegevust alles alustanud. Tulevik tõotab raskusi. Kuid me usume, et see, mida me teeme, on hädavajalik.</p>

            <?php include '../people.html'; ?>

<p>Kõik huvilised: kui soovite, et teie nimi oleks siin kirjas, mis annab märku, et tunnete Mageia vastu siirast huvi ja tahate selle arendamises kaasa lüüa, teatage sellest meile IRC kanalil või e-kirjaga.</p>
            </div>
            <div class="para">
                <h2>Edasine tegevus</h2>
                <p>Me püüame lähipäevil edasi liikuda väga mitmel suunal:</p>
                <ul>
                    <li>riistavara koodi majutamiseks, ehitamisserverid + andmekeskused nende serverite majutamiseks;</li>
                    <li>arendajad, kaastöötajad, tõlkijad, testijad, kes tunnevad huvi Mageia arendamise vastu;</li>
                    <li>arupidamine organisatsiooni ülesehituse ja toimimise üle jne.</li>
                </ul>
                <p>Teie abi ja toetus on äärmiselt oodatud.</p>
            </div>
            </div>
        </div>
    </div>
</body></html>