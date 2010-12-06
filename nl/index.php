<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="nl">
<head>
    <meta charset="utf-8" />
    <title>Mageia - Een nieuwe Linux distributie</title>
    <meta name="description" content="Mageia is een nieuwe Linux distributie die door de gebruikersgemeenschap ontwikkeld en ondersteund wordt." />
    <meta name="keywords" content="mageia, linux, mandriva, free software" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" />
    <?php include '../analytics.php';?>
</head>
<body>
    <?php include '../langs.php'; ?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1>Mageia <span>&ndash; Een nieuwe Linux Distributie</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g bb1">
                <div class="para"><p>Mageia is een kloon van Mandriva Linux,
                    ondersteund door een stichting (not-for-profit organization)
                    van erkende en verkozen medewerkers.</p>

                    <p>Meer dan enkel bezorgen van een gratis, veilig, stabiel en onderhoudbaar
                        operating systeem, het doel is om een stabiele en vertrouwgevende
                        organisatie-structuur op te zetten om collaboratieve projecten
                        te dirigeren (<a href="#announce">zie origineel bericht</a>).</p>
                </div>
            </div>
            <div class="yui-g bb1">
                <div class="yui-u first rb1">
                    <div class="para" id="news">
                        <h2><a href="http://blog.mageia.org/">Nieuws</a></h2>
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
                        <h2>Hoe met ons in contact te komen</h2>
                        <ul>
                            <li><a href="https://www.mageia.org/mailman/">Mailing lijsten</a></li>
                            <li><a href="http://mageia.org/wiki/doku.php?id=irc">IRC (Freenode netwerk)</a></li>
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
                    <p class="date">Parijs, 18 september<sup>th</sup> 2010</p>
                    <p>Zoals u wellicht vernomen heeft, bestaat er veel onduidelijkheid over de toekomst van Mandriva Linux.</p>
                    <p>De meeste werknemers die werkten aan de distributie zijn ontslagen toen Edge-IT, een onderdeel van Mandriva SA, geliquideerd werd. Wij hebben geen vertrouwen meer in de plannen van Mandriva SA voor Mandriva Linux en denken dan ook niet dat dit bedrijf (of welk bedrijf dan ook) een veilige haven kan zijn voor zo'n project.</p>

                    <p>Er zijn veel dingen gebeurd in de laatste 12 jaar.
                        Sommige daarvan waren heel fijn: De gemeenschap rond Mandriva Linux is vrij groot, gemotiveerd en ervaren; De distributie is ondanks alles nog steeds een van de populairste distributies en heeft een aantal onderscheidingen gewonnen, en is nog steeds innovatief en gemakkelijk in het gebruik.
                        Andere gebeurtenissen hadden erg vervelende consequenties en riepen bij velen vragen op over de gezondheid van hun favoriete distributie.</p>
                    <p>Mensen die aan de distributie werken willen niet langer afhankelijk zijn van de economische situatie en fluctuaties en de soms moeilijk verklaarbare strategische keuzes die door het bedrijf gemaakt werden.</p>
                </Div>
                <div class="para">
                    <h2>Een kloon van Mandriva Linux? Jazeker.</h2>

                    <p>Het besluit om een kloon te maken van een bestaand open source project is nooit een makkelijke beslissing om te nemen en het klonen van Mandriva Linux is een gigantisch karwei.</p>
                    <p>Dit besluit was zeker geen impulsieve beslissing. We hebben het er veelvuldig met elkaar over gehad: Voormalige werknemers, vrijwilligers die aan de 'Cooker' distributie bijdroegen, en gebruikersgemeenschappen. We hebben de afgelopen weken hun meningen gepeild en reacties verzameld om zo tot een globaal idee en overeenstemming te komen alvorens dit project te starten.</p>

                    <p>Wij geloven dat een kloon de beste oplossing is en daarom hebben wij besloten tot het maken van een nieuwe distributie:
                        <strong>Mageia</strong>.</p>
                        
                </div>
                <div class="para">
            <h2>Nieuwe uitdagingen.</h2>
            <p>Mageia is een project dat gedragen wordt door de gemeenschap: Dit project is niet afhankelijk van het reilen en zeilen van een enkel specifiek bedrijf.</p>
            <p>In de komende dagen zal een stichting (not-for-profit organization) worden opgezet onder leiding van een bestuur dat zal bestaan uit leden van de gemeenschap. Na het eerste jaar zal dit bestuur periodiek gekozen worden door de actieve leden van de gemeenschap.</p>
            <p>Deze organisatie zal de distributie beheren en coordineren: code &amp; het verzorgen van hosting van software en de distributie, het build system, marketing, communicate en evenementen. Data, feiten, roadmaps, ontwerpen en dergelijke zullen binnen deze organisatie gedeeld en besproken worden.</p>
            <p>In de komende dagen zullen meer details na onderling overleg duidelijk worden.</p>
            <p>De Mageia distributie zal worden tot wat het bestuur voor ogen staat met de hulp en ondersteuning van de hele gemeenschap. We hebben al een aantal doelen gesteld, waaronder:</p>
            <ul>
                <li>Het geschikt maken van Linux en vrije software voor makkelijk gebruik door iedereen;</li>
                <li>Het bieden van geintegreerde configuratiegereedschappen voor het hele systeem;</li>
                <li>Het behouden van integratie op een hoog niveau van het basissysteem, de desktop (KDE/GNOME) en applicaties, en verder het verbeteren van de integratie met software van derden (of deze nu vrijelijk beschikbaar zijn of niet);</li>
                <li>Het ondersteunen van nieuwe architecturen;</li>
                <li>Het beter begrijpen van de gebruikers van computers en andere electronische apparaten.</li>
            </ul>
            <p>Natuurlijk heeft u zelf ook ideeen. Wij zullen de tijd nemen om deze met u te delen en hierover van gedachten te wisselen.</p>
        </div>
        <div class="para">
            <h2>De gemeenschap.</h2>
            <p>Onder 'de gemeenschap', verstaand wij:</p>
            <ul>
                <li>gebruikers,</li>
                <li>bouwers (ontwerpers, ontwikkelaars, packagers, vertalers, testers, enz.),</li>
                <li>supporters.</li>
            </ul>
            <p>Dit kunnen zowel individuen, organisaties, of bedrijven zijn van over de hele wereld.</p>
            <p>Er zijn veel uitdagingen om aan te gaan: Zoveel verschillende landen, talen, culturen, en behoeften.</p>
            <p>We hebben met Mandriva gezien dat dit geen eenvoudige taak is. Maar toch geloven wij dat wij dit nog beter kunnen maken.</p>
        </div>
        <div class="para" id="people">
            <h2>De mensen.</h2>
            <p>Wat u ook doet in het leven, mensen zijn het belangrijkste. Mageia probeert mensen te helpen. Alles draait om vertrouwen en alhoewel we pas aan het begin van deze kloon staan, en we weten dat het niet makkelijk zal worden, geloven wij wel dat deze stap nodig is.</p>

            <?php include '../people.html'; ?>
            
            <p>Voor anderen die aktief (willen) bijdragen aan dit project en die hun naam toe willen voegen aan deze lijst: Laat het ons weten via IRC of via een mailtje.</p>
            </div>
            <div class="para">
                <h2>Volgende stappen.</h2>
                <p>In de komende paar dagen moet er een grote verscheidenheid van dingen gedaan worden:</p>
                <ul>
                    <li>hardware voor het hosten van code, build servers om op te bouwen en datacenters to om deze servers in te plaatsen;</li>
                    <li>ontwikkelaars, vertalers, testers en anderen die bijdragen recruiten en op gang helpen bij de verdere ontwikkeling van Mageia;</li>
                    <li>adviezen inwinnen over het uitbouwen van de organisatie en het standaardiseren van processen e.d.</li>
                </ul>
                <p>Uw hulp en ondersteuning hierbij wordt zeer op prijs gesteld!</p>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
