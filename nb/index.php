<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="nb">
<head>
    <meta charset="utf-8" />
    <title>Mageia - en ny Linux distribusjon</title>
    <meta name="description" content="Mageia - en ny Linux distribusjon." />
    <meta name="keywords" content="mageia, linux, mandriva, free software" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" />
    <?php include '../analytics.php';?>
</head>
<body>
    <?php include '../langs.php'; ?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1>Mageia <span>&ndash; en ny Linux distribusjon</span></h1></div>
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
            <div class="yui-g bb1">
                <div class="yui-u first rb1">
                    <div class="para" id="news">
                        <h2><a href="http://blog.mageia.org/">Nyheter</a></h2>
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
                        <h2>Slik kontakter du oss</h2>
                        <ul>
                            <li><a href="https://www.mageia.org/mailman/">Mailing-lists</a></li>
                            <li><a href="http://mageia.org/wiki/doku.php?id=irc">IRC (Freenode network)</a></li>
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
                    <p class="date">Paris, 18. September 2010</p>
                    <p>Som du kanskje har hørt er fremtiden til Mandriva Linux distribusjonen uklar.</p>
                    <p>Flesteparten av medarbeiderne som arbeidet med distribusjonen måtte slutte da Edge-IT ble likvidert. Vi stoler ikke på planene til Mandriva SA mer. Og vi tror ikke at selskapet (eller noe annet selskap) er en trygg vert for et slikt prosjekt.</p>

                    <p>Mye har hendt i de siste 12 årene. Noe av det var veldig fint: Mandriva-fellesskapet er ganske stort, motivert og erfarent, distribusjonen forblir en av de mest populære og er et prisvinnende produkt, lett å bruke og innovativt. Noen andre hendelser hadde noen dårlige konsekvenser som gjorde at folk ikke hadde så stor tillit til at deres favoritt-distribusjon skulle være levedyktig.</p>
                    <p>Folkene som arbeider med det ønsker ikke å være avhengig av de økonomiske svingningene og uforståelige, uforklarte strategiske valg som er gjort av selskapet.</p>
                </Div>
                <div class="para">
                    <h2>Forke Mandriva Linux? Ja.</h2>

                    <p>Det er aldri en enkel beslutning å å forke en eksisterende distribusjon, og det er en enorm oppgave å forke Mandriva Linux.</p>

                    <p>Det var ingen impulsavgjørelse. Vi snakket mye sammen på forhånd: tidligere ansatte, Cooker bidragsytere og brukere samt fellesskapene. Vi har samlet meninger og reaksjoner i de siste ukene, da vi var avhengige av en slags global enighet, samt å samles, før vi la i vei.</p>

                    <p>Vi er alle av den oppfatning at en fork er den beste løsningen så vi har besluttet å lage en ny distribusjon:
                        <strong>Mageia</strong>.</p>
                        
                </div>
                <div class="para">
            <h2>Nybrottsmark.</h2>
            <p>Mageia er et fellesskapsprosjekt som ikke vil være avhengig av et enkelt selskaps skjebene.</p>

            <p>En ikke kommersiell organisasjon vil bli satt opp i de neste dagene som vil bli drevet av et styre bestående av fellesskaps-medlemmer.</p>
            <p>Denne organisasjonen vil håndtere og koordinere distribusjonen mht kode, programvare, hosting,  distribusjon, byggesystemer, markedsføring, kommunikasjon og begivenheter. Data, fakta,  veikart og design vil bli delt og diskutert i denne organisasjonen.</p>
            <p>Vi kommer til å diskutere dette og presentere detaljer i de kommende dager.</p>
            <p>Mageia distribusjonen kommer til å bli det styret gjør ut av det, med hjelp og bidrag fra hele felleskapet. Vi har allerede ideer og planer for denne distribusjonen; vi ønsker å:</p>
            <ul>
                <li>gjøre Linux og fri programvare lett å bruke for alle;</li>

                <li>frembringe integrerte systemkonfigurasjons-verktøy;</li>
                <li>beholde et høyt nivå av integrasjonen mellom grunnsystem, skrivebordet (KDE/GNOME) og applikasjoner; 
Spesiell vekt vil bli tillagt å integrere tredjeparts programmer (frie og proprietære):</li>
                <li>Gå for nye arkitekturer og form-factors;</li>
                <li>Bedre vår forståelse av brukerne av computere og elektroniske innretninger.</li>
            </ul>
            <p>Du har sikkert ideer selv også. Vi har tid til dem også.</p>

        </div>
        <div class="para">
            <h2>Felleskapet.</h2>
            <p>Slik vi ser det består Mageia fellesskapet av:</p>
            <ul>
                <li>brukere,</li>
                <li>Bidragsytere (designere, utviklere, pakkere, oversettere, testere, etc.),</li>

                <li>Talsmenn.</li>
            </ul>
            <p>Disse kan være individer, organisasjoner og selskaper, fra hele verden.</p>
            <p>Det ligger utfordringer her; så mange land så mange språk, så mange kulturer, så mange forskjellige behov. Og det er flott.</p>
            <p>Vi har sett via Mandriva Assembly eksperimentet at dette ikke er en lett oppgave. Vi tror vi kan få dette til på en bedre måte.</p>
        </div>
        <div class="para" id="people">

            <h2>Folkene.</h2>
            <p>Hva du enn gjør her i livet, så er folkene din største og eneste sanne tilgang. Og Mageia tar mål av seg til å hjelpe folk. Tillit betyr noe. Vi er kun i startgropen i dette prosjektet. Det kommer ikke til å bli lett. Men vi mener det er nødvendig.</p>

            <?php include '../people.html'; ?>
            <p>For andre bidragsytere: dersom du ønsker ditt navn på listen, og derved indikere at du planlegger å følge forken, gi oss beskjed via IRC kanalen eller ved hjelp av e-post.</p>
            </div>
            <div class="para">

                <h2>Neste.</h2>
                <p>Vi ser etter mye forskjellig i de neste dagene:</p>
                <ul>
                    <li>hardware for code hosting, build tjenere + datasentere som kan hoste disse tjenerne; </li>
                    <li>utviklere, bidragsytere, oversettere, testere som kan investere i utviklingen av Mageia; </li>
                    <li>konsulenttjenester ang. bygging av organisasjonen og dens prosesser etc.</li>

                </ul>
                <p>Din hjelp og støtte vil bli høyt verdsatt.</p>
            </div>
            </div>
        </div>
    </div>

</body>
</html>

