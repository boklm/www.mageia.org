<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Pobierz (niestabilne) wydanie Mageia alpha</title>
    <meta name="description" content="Page de téléchargement de la première version alpha technique de Mageia" />
    <meta name="keywords" content="mageia, alpha, unstable, iso, download, test, not for production" />
    <meta name="author" content="Mageia" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" >
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>
    
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1>Mageia <span>| Alpha Downloads</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para" style="color: #f22; text-align: center;">
                    <h2 style="font-weight: bold;">Bądz Ostrożny! Alpha == Niestabilne oprogramowanie!</h2>
                    <p>To NIE jest DO: używania, publicznych recenzji, personal or production evaluation.</p>
                    <p>To JEST dla: programistów i testerów pakietów.</p>
                </div>
            </div>
            <div class="yui-g"><div class="para">
                <p>Cokolwiek robisz z udostępnionym obrazem ISO,
					robisz na własne ryzyko i własną odpowiedzialność.
                    Jeżeli szukasz stabilnej dystrybucji Linuksa powinieneś poczekać
                    na poźniejsze wydanie systemu.</p>

                <p style="font-weight: bold; color: rgb(255, 34, 34);">Jeszcze raz proszę NIE pobrać i nie instalować tego systemu, jeśli nie wiesz czym jest a czym NIE jest to ISO.</p>
                
                <h2>Mimo to chcesz pobrać Mageia Factory Alpha?</h2>
                <p>Ok. Więc w pierwszym wydaniu: mamy dwa obrazy ISO: 32bit i 64bit DVD. Każda waży około 2Gb&nbsp;GiB.</p>
                <p>Poniżej znajdziecie listę serwerów lustrzanych systemu Mageia:</p>
                <ol>
                    <li>wybierz serwer, który najbardziej Ci odpowiada (najlepiej w swoim własnym kraju);</li>

                    <li>wybrać obraz ISO, który jest najlepszy dla Ciebie (ich nazewnictwopowinno być oczywiste, mamy nadzieję).</li>
                </ol>
                <br />
                <table id="dl-table"><thead>
                    <tr><th>Położenie</th><th>Protokół</th><th>Serwer</th></tr>
                </thead><tbody>
                <?php
                /* @fixme note to self: brains! */
                    $mirrors = array(
                        array('China', 'Beijing', 'http://fundawang.lcuc.org.cn/mageia/'),
                        array('Czech Republic', 'Praha', 'http://mageia.supp.name/'),
                        array('Deutschland', 'Erfurt', 'http://ftp.mandrivauser.de/mirrors/Mageia/'),
                        array('Deutschland', 'Erfurt', 'ftp://ftp.mandrivauser.de/mirrors/Mageia/'),
                        array('France', 'Paris', 'http://distrib-coffee.ipsl.jussieu.fr/pub/linux/Mageia/'),
                        array('France', 'Paris', 'ftp://distrib-coffee.ipsl.jussieu.fr/pub/linux/Mageia/'),
                        array('Nouvelle Calédonie', 'Nouméa', 'http://mageia.nautile.nc/mageia/distrib/'),
                        array('USA', 'Durham', 'ftp://distro.ibiblio.org/pub/linux/distributions/mageia/'),
                        array('USA', 'Durham', 'http://distro.ibiblio.org/pub/linux/distributions/mageia/'),
                    );
                    $tmpl = '<tr><td>%s, %s</td><td>%s</td><td><a href="%s%s">%s</a></td></tr>';
                    foreach ($mirrors as $m):
                        $pu = parse_url($m[2]);
                        echo sprintf($tmpl,
                            $m[1], $m[0],
                            strtoupper($pu['scheme']),
                            $m[2],
                            'iso/',
                            $pu['host']);
                    endforeach;
                ?>
                </body>
                </table>
                
                
            </div></div>
            <div class="yui-g">
                <div class="yui-u first"><div class="para" style="padding-right: 0;">
                    <h2>O wydaniu</h2>
                    <p>To jest nasz pierwszy ISO, wydanym z naszego systemu budowania dystrybucji. Wydanie go teraz to jest dobry sposób na przetestowanie go i sprawdzenie co trzeba jeszcze poprawić na najbliższych tygodniach.</p>
                    
                    <ul>
			<li><a href="http://blog.mageia.org/?p=492" hreflang="en">Wiadomość na blogu</a></li>

			<li><a href="http://mageia.org/wiki/doku.php?id=iso1:alpha1_release_notes" hreflang="en">Notka o wydaniu</a></li>
                        <li><a href="http://mageia.org/wiki/doku.php?id=iso1:alpha1_errata" hreflang="en">Errata</a></li>
                        <li><a href="http://mageia.org/en/">Co to jest Mageia?</a></li>
                    </ul>
                    <p>Alpha 2 bedzie wydana 15 marca<sup>th</sup>.</p>
                    <p>Możesz sprawdzić <a href="http://mageia.org/wiki/doku.php?id=iso_1_specifications#expected_milestones">harmonogram dla Mageia 1</a>.</p>
                    
                    
                </div></div>
                <div class="yui-u"><div class="para">
                    <h2>Możesz pomóc!</h2>
                    <p>Tak! To wydanie jest jeszcze bardzo surowe i następne też takie będzie lecz coraz lepsze.</p>
                    <p>Tutaj jest wiele rzeczy które mogą się przyczynić dla projektu Mageia: programowanie, tworzenie paczek, testowanie, tłumaczenie, zgłaszanie błędów i naprawianie ich <a href="http://mageia.org/wiki/">i wiele więcej</a>!</p>
                    <p><a href="http://mageia.org/wiki/doku.php?id=contribute">Zobacz, jak możesz przyłączyć się do zabawy i przyczynić się do rozwoju Mageia.</a></p>

                </div>
                <div class="para">
                    <h3>Dotacje!</h3>
                    <p>Tak! <a href="http://mageia.org/en/donate/">Możesz przekazać też!</a></p>
                    <p>Mageia opiera się tylko na własnym zaangażowanium społeczności. Jest to ich czas, umiejętności, pieniądze!</p>
                </div></div>
            </div>
            <div class="para" style="color: #999;">
		<p>Tak, to jest raczej szorstka strona pobierania, na razie. Ale to jest dobre gdyż strona może wyda się mniej atrakcyjna dla osób nie będących deweloperami. Czy możemy powiedzieć, że z zadowoleniem przyjmujemy osoby do współpracy w naszej
                    <a href="http://www.mageia.org/wiki/doku.php?id=web">sieci</a> i <a href="http://www.mageia.org/wiki/doku.php?id=sysadmin">zespołach administratorów systemu</a>?
                    Są także <a href="http://www.mageia.org/wiki/doku.php?#teams">inne przyjazne zespoły</a> w naszym projekcie.</p>

            </div>
        </div>
    </div>
</body>
</html>
