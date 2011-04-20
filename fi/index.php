<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="fi">
<head>
    <meta charset="utf-8" />
    <title>Mageia - uusi Linux-jakelu</title>
    <meta name="description" content="Mageia, uusi Linux-jakelu" />
    <meta name="keywords" content="mageia, linux, mandriva, free software" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" />
    <?php include '../analytics.php';?>
</head>
<body>
    <?php include '../langs.php'; ?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh">uusi Linux-jakelu</span></h1></div>
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
                        <h2><a href="http://blog.mageia.org/">Uutiset</a></h2>
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
                        <h2>Yhteydenpito.</h2>
                        <ul>
                            <li><a href="https://www.mageia.org/mailman/">Postituslistat</a></li>
                            <li><a href="http://mageia.org/wiki/doku.php?id=irc">IRC (Freenode-verkko)</a></li>
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
                <div class="para">
                    <p class="date">Pariisi, 18.9.2010</p>
                    <p>Kuten saatatte olla kuulleet, Mandriva Linuxin tulevaisuus on epäselvä.</p>
                    <p>Suurin osa Mandrivan työntekijöistä irtisanottiin, kun sen tytäryhtiö Edge-IT lakkautettiin äskettäin. Emme enää luota Mandriva SA:n suunnitelmiin, emmekä usko sen (tai minkään muunkaan yhtiön) olevan turvallinen hostaaja Mandriva-jakelun kaltaiselle projektille.</p>

                    <p>Viimeisten 12 vuoden aikana on tapahtunut paljon. Jotkin tapahtumat olivat hyviä: Mandriva Linux -yhteisö on laaja, motivoitunut ja kokenut. Helppokäyttöinen ja innovatiivinen Mandriva Linux on yksi suosituimmista jakeluista. Toiset tapahtumat taas ovat herättäneet epäilyksiä jakelun tulevaisuudesta.</p>
                    <p>Mandrivan kehittäjät eivät halua olla nykyisellä tavalla riippuvaisia yhtiön menestyksestä ja sekavista, usein selittämättömistä strategisista päätöksistä.</p>
                </Div>
                <div class="para">
                    <h2>Mandriva Linuxin forkkaaminen? Kyllä.</h2>

                    <p>Avoimen lähdekoodin projektin forkkaaminen (haaroittaminen, eli uuden pysyvästi erillisen projektin aloittaminen toisesta projektista) ei ole koskaan helppo päätös, ja Mandriva Linuxin forkkaamisessa on valtava työ.</p>
                    <p>Päätös ei syntynyt hetkessä. Keskustelimme asiasta: entiset Mandrivan työntekijät, vapaaehtoiskehittäjät ja käyttäjäyhteistöt. Keräsimme mielipiteitä ja reaktioita viime viikkojen aikana, tarkoituksenamme päästä yhteisymmärrykseen ja ryhmittäytyä ennen jatkamista.</p>

                    <p>Uskomme forkkaamisen olevan paras ratkaisu ja olemme päättäneet luoda uuden Linux-jakelun:
                        <strong>Mageia</strong>n.</p>
                        
                </div>
                <div class="para">
            <h2>Uudet perustukset.</h2>
            <p>Mageia on yhteisöprojekti: se ei tule riippumaan minkään yksittäisen yhtiön kohtalosta.</p>
            <p>Lähipäivinä jakelun ylläpitoa varten perustetaan ei-kaupallinen yhdistys, jota ohjaa yhteisön jäsenistä koostuva hallitus. Ensimmäisen vuoden jälkeen yhteisö äänestää hallituksesta säännöllisesti.</p>
            <p>Tämä yhdistys tulee hallitsemaan ja koordinoimaan jakelun toimia: koodin ja ohjelmien hostaaminen ja jakelu, jakelunhallintajärjestelmän ylläpito, markkinointi, kommunikointi ja tapahtumat. Kaikki data, faktat ja suunnitelmat jaetaan ja niistä keskustellaan tämän organisaation kautta.</p>
            <p>Näistä asioista tullaan keskustelemaan ja päättämään tarkemmin seuraavien päivien kuluessa.</p>
            <p>Mageia-jakelun kehitys tulee olemaan yhdistyksen ohjaama, koko yhteisön avustaessa. Meillä on jo ideoita ja suunnitelmia; haluamme:</p>
            <ul>
                <li>tehdä Linuxista ja vapaista ohjelmistoista selkeän käyttää jokaiselle;</li>
                <li>tarjota hyvin integroidut järjestelmän asetustyökalut;</li>
                <li>ylläpitää korkeaa integrointia perusjärjestelmän, työpöydän (KDE/GNOME) ja sovelluksien välillä; erityisesti parantaa toimivuutta kolmansien osapuolten (vapaiden ja ei-vapaiden) ohjelmistojen kanssa;</li>
                <li>tähdätä uusiin arkkitehtuureihin ja laitteistoihin;</li>
                <li>parantaa ymmärrystämme tietokoneiden ja muiden laitteiden käyttäjistä.</li>
            </ul>
            <p>Sinulla on varmasti omiakin ideoita, ja otamme niitä vastaan.</p>
        </div>
        <div class="para">
            <h2>Yhteisö.</h2>
            <p>Ymmärrämme Mageia-yhteisön koostuvan:</p>
            <ul>
                <li>käyttäjistä,</li>
                <li>tekijöistä (suunnittelijat, kehittäjät, paketoijat, kääntäjät, testaajat, jne), ja</li>
                <li>kannattajista.</li>
            </ul>
            <p>Nämä voivat olla henkilöitä, organisaatioita tai yhtiöitä ympäri maailmaa.</p>
            <p>Mandriva Assembly -kokeilun myötä olemme nähneet, ettei maailmanlaajuinen yhteistyö yhteisöjen kanssa ole helppoa. Uskomme kuitenkin pystyvämme parempaan.</p>
        </div>
        <div class="para" id="people">
            <h2>Ihmiset.</h2>
            <p>Mitä teetkin, ihmiset ovat suurin ja ainoa oikea vahvuutesi. Ja Mageia haluaa auttaa ihmisiä. Luottamisella on merkitystä. Olemme vasta tämän projektin alussa, eikä tämä tule olemaan helppoa. Mutta uskomme sen olevan välttämätöntä.</p>
            <?php include '../people.html'; ?>

            <p>Muille kehittäjille: Jos haluat lisätä nimesi listaan seuraajana, kerro meille IRC-kanavallamme tai sähköpostilla.</p>
            </div>
            <div class="para">
                <h2>Seuraavaksi.</h2>
                <p>Tarvitsemme monia asioita:</p>
                <ul>
                    <li>laitteistoa koodin hostausta varten, palvelimia pakettien tekemistä varten, sekä palvelimien sijoituspaikkoja;</li>
                    <li>kehittäjiä, kääntäjiä ja testaajia Mageian kehitykseen;</li>
                    <li>apua organisaation, prosessien yms. rakentamiseen.</li>
                </ul>
                <p>Apu ja tuki on erittäin tervetullutta.</p>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
