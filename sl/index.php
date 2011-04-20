<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="sl">
<head>
    <meta charset="utf-8" />
    <title>Mageia - A New Linux Distribution</title>
    <meta name="description" content="Mageia je nova distribucija Linuxa, ki jo razvija skupnost" />
    <meta name="keywords" content="mageia, linux, mandriva, free software, prosto programje, odprta koda, operacijski sistemi, os" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" />
    <?php include '../analytics.php';?>
</head>
<body>
    <?php include '../langs.php'; ?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh">nova distribucija Linuxa</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g bb1">
                <div class="para"><p>Mageia is a fork of Mandriva Linux,
                    supported by a not-for-profit organisation of
                    recognized and elected contributors.</p>

                    <p>Further than just delivering a free, secure, stable and sustainable operating system,
                        the goal is to set up a stable and trustable governance to direct collaborative projects
                        (<a href="#announce">check original announcement</a>).</p>
                </div>
            </div>
            <?php include '../release_counter.php'; ?>
            <div class="yui-g bb1">
                <div class="yui-u first rb1">
                    <div class="para" id="news">
                        <h2><a href="http://blog.mageia.org/">News</a></h2>
                    <?php include '../lib/news.php'; echo html_news('en'); ?>
                    </div>
                </div>
                <div class="yui-u">
                    <div class="para" lang="en">
                        <h2>Happening right now</h2>
                        <?php include '../roadmap.php'; ?>
                    </div>
                </div>
            </div>
            <div class="yui-g bb1">
                <div class="yui-u first">
                    <div class="para" id="contact">
                        <h2>Kako stopiti v stik z nami</h2>
                        <ul>
                            <li><a href="https://www.mageia.org/mailman/">Dopisni seznami</a></li>
                            <li><a href="http://mageia.org/wiki/doku.php?id=irc">IRC (omrežje Freenode)</a></li>
                            <li><a href="http://mageia.org/wiki/">Mageia Wiki</a></li>
                            <li>Contact the founders team:
                                <ul>
                                    <li><a href="mailto:mageia-contact@mageia.org">mageia-contact@mageia.org</a></li>
                                    <li><a href="mailto:press@mageia.org">press@mageia.org</a></li>
                                    <li>expect an answer within 2 days</li>
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
                    <p class="date">Pariz, 18. september 2010</p>
                    <p>Kot ste morda slišali, prihodnost distribucije Mandriva Linux ni jasna.</p>
                    <p>Večina zaposlenih, ki so delali na distribuciji, je bila odpuščenih, ko je bil likvidiran Edge-IT. Načrtom podjetja Mandriva SA ne zaupamo več in menimo, da podjetje (katerokoli) ni varen gostitelj tega projekta.</p>

                    <p>V preteklih 12 letih se je zgodilo več stvari.
                        Precej jih je bilo zelo prijetnih: skupnost Mandriva Linuxa je precej velika, motivirana in izkušena. Distribucija ostaja ena najpriljubljenejših in je prejela kar nekaj nagrad ter je preprosta za uporabo in inovativna.</p>
                    <p>Ljudje, ki razvijajo distribucijo, nočejo biti odvisni od nihanj v ekonomiji in nenadnih, nepojasnjenih potez podjetja.</p>
                </Div>
                <div class="para">
                    <h2>Odcepitev od Mandriva Linuxa? Da.</h2>

                    <p>Odcepitev od obstoječega odprto-kodnega projekta nikoli ni lahka odločitev, odcepitev od Mandriva Linuxa pa je še posebej ogromen zalogaj.</p>
                    <p>Odločitev ni bila nenadna. Vsi smo pred tem veliko debatirali: nekdanji zaposleni, prispevajoči in skupnosti uporabnikov. V preteklih tednih smo zbrali mnenja in odzive, saj smo za skupno pot naprej potrebovali neke vrste globalni konsenz.</p>

                    <p>Prepričani smo, da je odcepitev najboljša rešitev, in tako smo se odločili ustvariti novo distribucijo:
                        <strong>Mageia</strong>.</p>
                        
                </div>
                <div class="para">
            <h2>Nove osnove</h2>
            <p>Mageia je projekt skupnosti: ne bo odvisen od usode nekega podjetja.</p>
            <p>V prihodnjih dneh bo ustanovljena ne-profitna organizacija, ki jo bo vodil odbor članov iz skupnosti. Vsako leto bo odbor s strani predanih članov skupnosti izvoljen na novo.</p>
            <p>Ta organizacija bo vodila in koordinirala distribucijo: hrambo izvorne kode, programov in distribuiranje, sistem za gradnjo, promoviranje, vzpodbujanje komunikacije in priprave ter obiske dogodkov. Podatki, dejstva in načrti bodo na voljo ter prediskutirani v okviru te organizacije.</p>
            <p>Podrobnosti bomo predebatirali in sprejeli v naslednjih dneh.</p>
            <p>Distribucija Mageia bo to, kar bo ustvaril odbor s pomočjo in prispevki celotne skupnosti. Ideje in načrte za distribucijo že imamo. Želimo, da:</p>
            <ul>
                <li>bi bili Linux in prosto programje preprosti za uporabo za vsakogar,</li>
                <li>bi bila na voljo integrirana nastavitvena orodja,</li>
                <li>integracija med osnovnim sistemom in namizjem ter programi (KDE/GNOME) ostane visoka: še posebno je potrebno izboljšati integracijo programov tretjih oseb (tako prostih kot tudi zaprto-kodnih),</li>
                <li>bi bile podprte nove arhitekture in oblike strojne opreme,</li>
                <li>izboljšamo znanje o računalnikih in elektronskih napravah.</li>
            </ul>
            <p>Seveda imate svoje ideje tudi vi. Vzeli si bomo čas in vključili tudi te.</p>
        </div>
        <div class="para">
            <h2>Skupnost</h2>
            <p>Skupnost Mageia razumemo kot:</p>
            <ul>
                <li>uporabnike,</li>
                <li>ustvarjalce (načrtovalce, razvijalce, pripravljalce paketov, prevajalce, preizkuševalce, itd.),</li>
                <li>promotorje.</li>
            </ul>
            <p>Ti so lahko posamezniki, organizacije in podjetja z vsega sveta.</p>
            <p>Tu so tudi izzivi: veliko držav, veliko jezikov, veliko kultur, veliko potreb. In to je super.</p>
            <p>S poskusom Mandriva Assembly smo videli da to ni lahka naloga. Prepričani smo, da lahko opravimo bolje.</p>
        </div>
        <div class="para" id="people">
            <h2>Ljudje</h2>
            <p>Karkoli v življenju počnete, so pri tem ljudje vaši največji zavezniki. In cilj Mageia je pomagati ljudem. Zaupanje je pomembno. Smo na samem začetku te odcepitve in ne bo lahko. Prepričani pa smo, da je to potrebno.</p>

            <?php include '../people.html'; ?>
            
            <p>Za prispevkarje: če želite dodati svoje ime na seznam in s tem naznaniti, da nameravate slediti razvoju, nas kontaktirajte na IRC-kanalu ali po pošti.</p>
            </div>
            <div class="para">
                <h2>Sledi</h2>
                <p>V naslednjih dneh bo sledilo kar nekaj stvari:</p>
                <ul>
                    <li>strojna oprema za hranjenje izvorne kode, strežniki za gradnjo in podatke,</li>
                    <li>novi razvijalci, prispevajoči, prevajalci, preizkuševalci, ki bodo pomagali pri razvoju Mageia,</li>
                    <li>posvetovanje glede ustanovitve organizacije in vzpostavitve postopkov</li>
                </ul>
                <p>Vaša pomoč in podpora sta zelo dobrodošli in cenjeni.</p>
            </div>
            </div>
        </div>
    </div>

</body>
</html>
