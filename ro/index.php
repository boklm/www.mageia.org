<!DOCTYPE html>
<html dir="ltr" lang="ro">
<head>
    <meta charset="utf-8">
    <title>Mageia - O nouă distribuție Linux</title>
    <meta name="description" content="Mageia este o nouă distribuție Linux.">
    <meta name="keywords" content="mageia, linux, mandriva, free software">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" />
    <link rel="alternate" type="application/rss+xml" title="Mageia Blog (Română)" href="http://blog.mageia.org/ro/?feed=rss" />
    <?php include '../analytics.php'; ?>
</head>
<body>
    <?php include '../langs.php'; ?>

    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh">O nouă distribuție Linux</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g bb1">
                <div class="para"><p>Mageia este o derivație de Mandriva Linux, ce se bazează pe o  organizație
                    nonprofit, compusă din contribuitori cunoscuți și votați pentru  munca lor.</p>

                    <p>Dincolo de un sistem de operare liber, securizat, stabil și peren, obiectivul
                        este constituirea unei guvernări stabile și legitime în jurul unui  model
                        colaborativ (<a href="#announce">citiți anunțul oficial</a>).</p>
                </div>
            </div>
            <?php include '../release_counter.php'; ?>
            <div class="yui-g bb1">
                <div class="yui-u first rb1">
                    <div class="para" id="news">
                        <h2><a href="http://blog.mageia.org/ro/">Actualități</a></h2>
                    <?php include '../lib/news.php'; echo html_news('ro'); ?>
                    </div>
                </div>
                <div class="yui-u">
                    <div class="para" lang="en">
                        <h2>Se întîmplă acum</h2>
                        <?php include '../roadmap.php'; ?>
                    </div>
                </div>
            </div>
            <div class="yui-g bb1">
                <div class="yui-u first">
                    <div class="para" id="contact">
                        <h2>Alăturați-vă nouă!</h2>
                        <ul>
                            <li><a href="https://www.mageia.org/mailman/">Listele de difuziune</a></li>
                            <li><a href="http://mageia.org/wiki/doku.php?id=irc">IRC (rețeaua Freenode)</a></li>
                            <li><a href="http://mageia.org/wiki/">Mageia Wiki</a></li>
                            <li>Contactați echipa fondatoare:
                                <ul>
                                    <li><a href="mailto:mageia-contact@mageia.org">mageia-contact@mageia.org</a></li>
                                    <li><a href="mailto:press@mageia.org">press@mageia.org</a></li>
                                    <li>așteptați un răspuns în termen de 2 zile</li>
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
                    <h2>Anunț</h2>
                    <p class="date">Paris, 18 septembrie 2010</p>
                    <p>Cum poate ați dedus deja, viitorul distribuției Mandriva Linux est astăzi incert.</p>
                    <p>Marea majoritate a angajaților care lucrau la 
distribuție au fost concediați odată cu lichidarea diviziei Edge-It. Noi  
nu mai avem încredere în planurile de viitor ale societății Mandriva și nu mai  
credem că Mandriva este o soluție sigură pentru susținerea unui astfel de 
proiecet.</p>

                    <p>Un număr mare de evenimente au marcat   
 ultimii 12 ani.
                    Unele au fost foarte pozitive: comunitatea 
Mandriva Linux s-a dezvoltat, este solidă, motivată și 
experimentată, distribuția rămîne una dintre cele mai cunoscute și 
apreciate, ușor de utilizat și inovantă.
                    Alte evenimente au avut un adevărat impact negativ
 și comunitatea se îndoiește astăzi din ce în ce mai mult de viabilitatea distribuției 
sale favorite.</p>
                    <p>Cei care lucrează la acest proiect nu doresc să mai  
depindă de fluctuațiile economiei, mai mult sau mai puțin neregulate, sau de
 schimbările de strategie fără explicație ale firmei.</p>
                </div>
                <div class="para">
                    <h2>Rupere de Mandriva Linux? Da.</h2>

                    <p>Ruperea de un proiect cu sursă deschisă existent nu 
este niciodată o decizie simplă, iar ruperea de Mandriva Linux reprezintă o sarcină 
imensă.</p>
                    <p>Nu este vorba de un capriciu. Am discutat destul 
înainte de-a lua decizia: între foștii angajați, cu contribuitorii 
la Cooker și cu utilizatorii. Ne-am ascultat reciproc în aceste ultime  
săptămîni, deoarece aveam nevoie să se facă simțite începuturile unui 
consens înainte de-a merge mai departe.</p>

                    <p>Sîntem de părere că ruptura este cea mai bună soluție și am decis să lansăm o nouă distribuție: <strong>Mageia</strong>.</p>
                    </div>
                    <div class="para">
                        <h2>Baze noi.</h2>
                        <p>Mageia este un proiect comunitar: nu depinde de soarta nici unei firme.</p>
                        <p>O asociație (organizație nonprofit)
se va înființa în zilele ce vor veni și va fi gestionată de un 
consiliu constituit din membrii comunității. După un an,
acest consiliu va fi reales în mod regulat de către comunitate.</p>
                        <p>Această organizație va gestiona și coordona 
distribuția: codul și găzduirea aplicațiilor și a distribuției, 
sistemului de clădit (build), marketing, va favoriza discuțiile și 
evenimentele. Datele, foile de parcurs, conceptele vor fi partajate și 
discutate în cadrul acestei organizații.</p>
                        <p>Vom discuta și formaliza toate aceste detalii în zilele ce vor veni.</p>
                        <p>Distribuția Mageia va fi ceea ce 
va dori consiliul cu ajutorul și contribuția întregii 
comunități. Avem deja idei și planuri pentru această 
contribuție, dorim să:</p>
                        <ul>
                            <li>facem Linuxul și aplicațiile informatice libere mult mai accesibile pentru toată lumea;</li>
                            <li>oferim unelte de configurare complet integrate cu sistemul;</li>
                            <li>menținem un înalt nivel 
de integrare între sistemul de bază, birou (KDE/GNOME) și 
aplicații cu o focalizare în mod particular pe integrarea 
aplicațiilor terțe (proprietare sau nu);</li>
                            <li>orientăm către noi arhitecturi materiale și platforme;</li>
                            <li>ameliorăm înțelegerea noastră despre calculatoare și periferice.</li>
                        </ul>
                        <p>Fără îndoială că aveți și voi ideile voastre. O să vă acordăm tot timpul necesar să le partajăm.</p>
                    </div>
                    <div class="para">
                        <h2>Comunitatea.</h2>
                        <p>Pentru noi comunitatea Mageia este alcătuită din:</p>
                        <ul>
                            <li>utilizatori,</li>
                            <li>fabricanți (creatori, dezvoltatori, împachetatori, traducători, testeri, etc.),</li>
                            <li>susținători și avocați liberi.</li>
                        </ul>
                        <p>Membri comunității prot fi indivizi, organizații sau firme din lumea întreagă.</p>
                        <p>Avem aici o adevărată provocare: țări diferite, limbi diferite, culturi și nevoi tot 
                            atît de diferite. Iar acest lucru ni-se pare formidabil.</p>
                        <p>Experiența cu Mandriva Assembly a pus în 
                            evidență dificultatea acestei sarcini. Dar credem că putem propune 
                            ceva mult mai bun!</p>
                    </div>
                    <div class="para">
                        <h2>Oamenii.</h2>
                        <p>Indiferent de ce faceți în viață, oamenii sînt adevărata resursă și cea mai importantă. Mageia are ca obiectiv să  vă fie utilă fiecăruia dintre voi. Încrederea este un imperativ.</p>
                        <p>Sîntem încă la începutul acestei rupturi. N-o să fie simplu. Dar sîntem de părere că este necesar.</p>

                        <?php include '../people.html'; ?>
                        <p>Pentru restul de contribuitori: dacă doriți să fiți adăugat în această listă ca susținător, semnalați-ne pe IRC sau pe poșta electronică.</p>
                    </div>
                    <div class="para">
                        <h2>Ce va urma.</h2>
                        <p>Vom avea nevoie de o mulțime de lucruri în zilele ce vor urma:</p>
                        <ul>
                            <li>de servere pentru a găzdui codul, construi sistemul de clădit, cît și de găzduire pentru servere;</li>
                            <li>de dezvoltatori, contribuitori, traducători, testeri care să se implice în procesul de dezvoltare a distribuției Mageia;</li>
                            <li>de sfaturi referitoare la constituirea organizației și a proceselor sale funcționale...</li>
                        </ul>
                        <p>Ajutorul și suportul vostru vor fi mai mult decît apreciate.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body></html>
