<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Download Mageia alpha (unstable) releases</title>
    <meta name="description" content="Page de téléchargement de la première version alpha technique de Mageia" />
    <meta name="keywords" content="mageia, alpha, unstable, iso, download, test, not for production" />
    <meta name="author" content="Mageia" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" >
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>
    
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1>Mageia <span>| Descărcați versiunea Alfa</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para" style="color: #f22; text-align: center;">
                    <h2 style="font-weight: bold;">Atenție! Alfa == Aplicații instabile!</h2>
                    <p>Această versiune NU ESTE PENTRU: utilizare, recenzii, evaluare personală sau în producție.</p>
                    <p>Această versiune este PENTRU: dezvoltatori și testarea pachetelor.</p>
                </div>
            </div>
            <div class="yui-g"><div class="para">
                <p>Indiferent ce doriți să faceți cu imaginea ISO furnizată
                    o faceți pe propriul risc și pe propria voastră răspundere.
                    Dacă doriți un sistem Linux stabil, ar fi de preferat să așteptați
                    versiunile ulterioare de Mageia.</p>

                <p style="font-weight: bold; color: rgb(255, 34, 34);">Încă odată, vă rugăm
                    SĂ NU descărcați și/sau instalați dacă nu sînteți sigur că 
                    înțelegeți ceea ce este acest ISO și ceea ce nu este.</p>
                
                <h2>Sigur doriți să descărcați versiunea Mageia Factory Alfa?</h2>
                <p>Bine. Pentru început să facem prezentările: avem două imagini ISO, un DVD pe 32 de biți și unul pe 64 de biți.
                    Fiecare are în jur de 2&nbsp;GiB.</p>
                <p>Mai jos veți găsi lista serverelor alternative care găzduiesc aplicațiile Mageia:</p>
                <ol>
                    <li>alegeți serverul care vă avantajează (de preferință în țara de rezidență);</li>
                    <li>alegeți imaginea ISO care vă convine (sperăm că denumirile lor sînt evidente).</li>
                </ol>
                <br />
                <table id="dl-table"><thead>
                    <tr><th>Locație</th><th>Protocol</th><th>Server</th></tr>
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
                    <h2>Despre această ediție</h2>
                    <p>Acesta este primul nostru ISO, realizat cu propriul sistem de clădit.
                        Publicarea acestei imagini acum este cea mai bună metodă de
                        test pentru a vedea ce trebuie ameliorat în săptămînile următoare.</p>
                    
                    <ul>
			<li><a href="http://blog.mageia.org/ro/?p=323" hreflang="en">Anunțul pe blog</a></li>

			<li><a href="http://mageia.org/wiki/doku.php?id=iso1:alpha1_release_notes" hreflang="en">Nota ediției</a></li>
                        <li><a href="http://mageia.org/wiki/doku.php?id=iso1:alpha1_errata" hreflang="en">Erată</a></li>
                        <li><a href="http://mageia.org/en/">Ce este Mageia?</a></li>
                    </ul>
                    <p>Alfa 2 va fi publicată pe 15 martie.</p>
                    <p>Puteți consulta <a href="http://mageia.org/wiki/doku.php?id=iso_1_specifications#expected_milestones">foaia de parcurs pentru Mageia 1</a>.</p>
                    
                    
                </div></div>
                <div class="yui-u"><div class="para">
                    <h2>Ne puteți ajuta!</h2>
                    <p>Da! Această versiune este încă aridă și așa va fi și următoarea,
                        dar mult mai bine!</p>
                    <p>Există o mulțime de lucruri prin care puteți contribui la
                        Mageia: dezvoltare, împachetare, testare, traducere,
                        raportare și corectare de erori, și <a href="http://mageia.org/wiki/">chiar mai mult</a>!</p>
                    <p><a href="http://mageia.org/wiki/doku.php?id=contribute">Vedeți
                        cum vă puteți alătura distracției și contribui.</a></p>

                </div>
                <div class="para">
                    <h3>Donați!</h3>
                    <p>Da! <a href="http://mageia.org/en/donate/">Chiar puteți dona!</a></p>
                    <p>Mageia depinde de implicarea propriei comunități,
                        fie că este vorba de timp, competențe, sau bani!</p>
                </div></div>
            </div>
            <div class="para" style="color: #999;">
		<p>Da, această pagină este un pic neșlefuită, pentru moment. Dar este bine dacă face
                    această versiune alfa mai puțin atractivă publicului neavizat.
                    Oare v-am spus că toți cei care vor să contribue sînt bine poftiți în echipele
                    <a href="http://www.mageia.org/wiki/doku.php?id=web">Web</a> și <a href="http://www.mageia.org/wiki/doku.php?id=sysadmin">Sysadmin</a>?
                    De asemenea, există și alte <a href="http://www.mageia.org/wiki/doku.php?#teams">echipe mult mai prietenoase</a> în proiect.</p>

            </div>
        </div>
    </div>
</body>
</html>
