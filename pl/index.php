<?xml version="1.0" encoding="utf-8" ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
<head>
    <meta charset="utf-8" />
    <title>Mageia - Nowa dystrybucja Linuksa</title>
    <meta name="description" content="Mageia jest nowš dystrybucjš Linuksa opartš na działaniach społecznoci." />
    <meta name="keywords" content="mageia, linux, mandriva, darmowe oprogramowanie" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" />
    <link rel="alternate" type="application/rss+xml" title="Mageia Blog (Polski)" href="http://blog.mageia.org/pl/?feed=rss" />
    <?php include '../analytics.php';?>
</head>
<body>
    <?php include '../langs.php'; ?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh">Nowa dystrybucja Linuksa</span></h1></div>
        <div class="yui-g bb1">
            <div class="para"><p>Mageia jest odłamem systemu Mandriva Linux, wspieranym przez organizacje niedochodową znanych i wybranych twórców.</p>

                <p>Mageia jest czymś więcej niż tylko wolnym, bezpiecznym, stabilnym i zrównoważonym systemem operacyjnym, naszym celem jest stworzenie stabilnej i wiarygodnej organizacji która bezpośrednio wspiera wspólne projekty. (<a href="#announce">sprawdź oryginalne ogłoszenie</a>).</p>
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
                    <h2>Jak się z nami skontaktować</h2>
                    <ul>
                        <li><a href="https://www.mageia.org/mailman/">Listy dyskusyjne</a></li>
                        <li><a href="http://mageia.org/wiki/doku.php?id=irc">IRC (sieć Freenode)</a></li>
                        <li><a href="http://mageia.org/wiki/">Mageia Wiki</a></li>
                        <li>Skontaktuj się z zespołem założycieli:
                            <ul>
                                <li><a href="mailto:mageia-contact@mageia.org">mageia-contact@mageia.org</a></li>
                                <li><a href="mailto:press@mageia.org">press@mageia.org</a></li>
                                <li>oczekuj na odpowiedzi w ciągu ok. 2dni</li>
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
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para" id="announce">
                    <p class="date">Paryż, 18 września 2010</p>
                    <p>Jak mogliście już usłyszeć, przyszłość dystrybucji Mandriva Linux jest niepewna.</p>
                    <p>Większość pracowników tworzących dystrybucję została zwolniona po sprzedaniu akcji spółki Edge-IT. Nie ufamy już planom korporacji Mandriva SA i nie wydaje nam się, żeby firma ta (lub jakakolwiek inna) była odpowiednim miejscem do rozwoju takiego projektu.</p>

                    <p>Wiele się wydarzyło przez ostatnie 12 lat.
                        Były chwile miłe: społeczność Mandrivy Linux jest dosyć liczna, zmotywowana i doświadczona, a sama dystrybucja pozostaje jednym z najpopularniejszych i najwyżej ocenianych produktów dzięki wprowadzanym innowacjom oraz łatwości w użytkowaniu.
                        Były jednak także wydarzenia, które charakteryzowały się negatywnymi konsekwencjami, a w efekcie odebrały ufność użytkowników w żywotność ich ulubionej dystrybucji.</p>
                    <p>Ludzie pracujący nad nią nie chcą być uzależnieni od wahań ekonomicznych i błędnych, niewytłumaczalnych ruchów strategicznych firmy.</p>
                </Div>
                <div class="para">
                    <h2>Rozwidlenie Mandrivy Linux? Tak.</h2>

                    <p>Rozwidlenie istniejącego projektu open source nigdy nie jest łatwą do podjęcia decyzją, a utworzenie nowej drogi dla Mandrivy Linux jest ogromnym zadaniem.</p>

                    <p>Nie była to decyzja oparta na chwilowym impulsie. Wszyscy dokładnie to przedyskutowaliśmy: byli pracownicy, współtwórcy oraz społeczność użytkowników. Przez ostatnich kilka tygodni zbieraliśmy opinie i reakcje, żeby dojść do ogólnego porozumienia przed postawieniem kolejnego kroku.</p>

                    <p>Wierzymy, że podział jest najlepszym rozwiązaniem. Dlatego też zdecydowaliśmy się na utworzenie nowej dystrybucji:
                        <strong>Mageia</strong>.</p>
                </div>
                <div class="para">
                    <h2>Nowe tereny.</h2>
                    <p>Mageia jest projektem społeczności: nie będzie zależna od losu poszczególnej firmy.</p>

                    <p>W przeciągu następnych kilku dni założona zostanie organizacja charytatywna zarządzana przez członków społeczności. Po pierwszym roku, zarząd będzie regularnie wybierany spośród aktywnych członków społeczności.</p>
                    <p>Organizacja ta będzie zarządzać i koordynować prace nad dystrybucją: przechowywaniem i dystrybucją kodu i oprogramowania, systemem budowania, marketingiem, komunikacją z użytkownikami oraz wydarzeniami. Dane, fakty, mapy rozwoju, oprawa graficzna będą omawiane poprzez tę organizację.</p>
                    <p>Szczegóły omówimy i przedstawimy w przeciągu nastepnych kilku dni.</p>
                    <p>Dystrubucja Mageia będzie tym, czym zarząd ją uczyni, z pomocą i wsparciem całej społeczności. Mamy juz własne pomysły i plany dotyczące tej dystrybucji; chcemy przede wszystkim:</p>
                    <ul>
                        <li>uczynić Linuksa oraz wolne oprogramowanie przystępnymi w użytkowaniu dla każdego;</li>

                        <li>zapewnić zintegrowany system narzędzi konfiguracyjnych;</li>
                        <li>utrzymać wysoki poziom integracji pomiędzy systemem bazowym, pulpitem (KDE/GNOME) oraz aplikacjami; szczególnie chcemy usprawnić integrację z aplikacjami dodatkowymi (darmowymi lub płatnymi);</li>
                        <li>dotrzeć do nowych architektur i układów;</li>
                        <li>polepszyć nasze zrozumienie komputerów i urządzeń elektronicznych użytkowników.</li>
                    </ul>
                    <p>Zapewne masz także swoje własne pomysły. Na pewno weźmiemy je pod uwagę.</p>
                </div>
                <div class="para">
                    <h2>Społeczność.</h2>
                    <p>Społeczność Mageia rozumiemy jako:</p>
                    <ul>
                        <li>użytkowników,</li>
                        <li>twórców (grafików, deweloperów, tłumaczy, testerów, itp.),</li>

                        <li>zwolenników.</li>
                    </ul>
                    <p>Mogą to być osoby indywidualne, organizacje, firmy z całego świata.</p>
                    <p>Istnieją tutaj nowe wyzwania; tyle narodowości, tyle języków, tyle kultur, tak odmienne wymagania. I to właśnie jest wspaniałe.</p>
                    <p>Podczas eksperymentu o nazwie Mandriva Assembly zauważyliśmy, że nie jest to łatwe zadanie. Wierzymy jednak, że możemy uczynić ją jeszcze lepszą.</p>
                </div>
                <div class="para" id="people">
                    <h2>Ludzie.</h2>
                    <p>Cokolwiek byś w życiu nie robił, czynnik ludzki zawsze będzie największym atutem. Celem Mageia jest właśnie niesienie pomocy ludziom. Zaufanie ma znaczenie. Jesteśmy dopiero w początkowej fazie tego podziału. Nie będzie łatwo. Jednak wierzymy, że jest on konieczny.</p>
                    <?php include '../people.html'; ?>
                    <p>Dla pozostałych współtwórców: jeśli chcesz, aby twoje imię zostało dodane do listy oraz żeby zostało powiązane z naszym odłamem, skontaktuj się z nami na kanale IRC lub drogą mailową.</p>
                </div>
                <div class="para">
                    <h2>Dalsze kroki.</h2>
                    <p>W przeciągu następnych kilku dni planujemy zrealizować kilka podstawowych czynności:</p>
                    <ul>

                        <li>uruchomić hardware do przechowywania kodu, serwery budowania + datacenter do ich instalacji;</li>
                        <li>zachęcić deweloperów, współtwórców, tłumaczy, testerów do zainwestowania w rozwój Mageia;</li>
                        <li>utworzyć organizację oraz zaplanować jej działania itp.</li>
                    </ul>
                    <p>Będziemy ogromnie wdzięczni za waszą pomoc i wsparcie.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
