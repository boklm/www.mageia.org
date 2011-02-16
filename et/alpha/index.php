<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Mageia alfaväljalaske (ebastabiilne) allalaadimine</title>
    <meta name="description" content="Mageia esimese tehnilise alfaväljalaske allalaadimislehekülg" />
    <meta name="keywords" content="mageia, alpha, alfa, ebastabiilne, iso, allalaadimine, test, ainult arendajatele" />
    <meta name="author" content="Mageia" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" >
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>
    
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1>Mageia <span>| Alfaväljalaske allalaadimine</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para" style="color: #f22; text-align: center;">
                    <h2 style="font-weight: bold;">Ettevaatust! Alfa == ebastabiilne tarkvara!</h2> 
                    <p>See EI OLE mõeldud: igapäevakasutamiseks, avalikuks tarbimiseks või hindamiseks, eraviisiliselt või ettevõtetes põhitarkvarana.</p> 
                    <p>See ON mõeldud: arendajatele ja pakendajatele testimiseks.</p> 
                </div>
            </div>
            <div class="yui-g"><div class="para">
                <p>Mida te ka ei võtaks ette meie pakutava ISO-plaaditõmmisega,
                    on see ainult teie enda vastutusel.
                    Kui otsite stabiilset Linuxi süsteemi,
                    tasuks ära oodata Mageia hilisem väljalase.</p> 

                <p style="font-weight: bold; color: #f22">Veel kord: palume MITTE
                    seda alla laadida ja/või paigaldada, kui te ei ole kindel,
                    et mõistate, milleks see ISO-tõmmis on mõeldud ja milleks mitte.</p>
                
                <h2>Kas soovite kõigest hoolimata Mageia alfaväljalaset alla laadida?</h2> 
                <p>Olgu siis. Esiteks tuleb arvestada, et me pakume kaht ISO-tõmmist: 32-bitine DVD ja 64-bitine DVD.
                    Mõlema suuruseks on umbes 2&nbsp;GiB.</p> 
                <p>Allpool näete servereid, mis praegu pakuvad Mageia tarkvara:</p>
                <ol> 
                    <li>valige kõige paremini sobiv server (eelistatavalt muidugi oma kodumaal);</li> 
                    <li>valige kõige paremini sobiv ISO-tõmmis (nimed peaksid olema enesestmõistetavad, me vähemalt loodame).</li> 
                </ol>
                <br />
                <table id="dl-table"><thead>
                    <tr><th>Asukoht</th><th>Protokoll</th><th>Serveur</th></tr>
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
                    <h2>Väljalaskest</h2> 
                    <p>See on meie esimene ISO-tõmmis, mis on valmistatud meie enda ehitamissüsteemis.
                        Väljalase pakub head võimalust seda testida ning välja selgitada,
                        mida juba lähinädalatel on selle juures võimalik paremaks muuta.</p> 
                    
                    <ul> 
			<li><a href="http://blog.mageia.org/?p=492" hreflang="en">Ajaveebi sissekanne</a></li> 
			<li><a href="http://www.mageia.org/wiki/doku.php?id=iso1:alpha1_release_notes" hreflang="en">Väljalaskemärkmed</a></li> 
                        <li><a href="http://www.mageia.org/wiki/doku.php?id=iso1:alpha1_errata" hreflang="en">Võimalikud vead</a></li> 
                        <li><a href="http://www.mageia.org/et/">Mis on Mageia?</a></li> 
                    </ul> 
                    <p>Alpha 2 ilmub 15. märtsil.</p> 
                    <p>Siin saab näha meie <a href="http://mageia.org/wiki/doku.php?id=iso_1_specifications#expected_milestones">Mageia 1 ajakava</a>.</p>
                    
                    
                </div></div>
                <div class="yui-u"><div class="para">
                    <h2>Ka teie saate abistada!</h2> 
                    <p>Täpselt! See väljalase on küll alles algus, nagu ka järgmine,
                        aga see läheb aina paremaks!</p> 
                    <p>Te võite Mageiat aidata väga mitmesuguste asjadega:
                        arendamine, tarkvara pakendamine, testimine, tõlkimine,
                        vigadest teatamine ja nende parandamine ning <a href="http://mageia.org/wiki/">veel õige mitmel viisil</a>!</p> 
                    <p><a href="http://mageia.org/wiki/doku.php?id=contribute">Siin näeb,
                        kuidas te võite liituda meie vaimustava seltskonnaga ja anda oma panuse</a>.</p>

                </div>
                <div class="para">
                    <h3>Annetage!</h3> 
                    <p>Jah! <a href="http://www.mageia.org/et/donate/">Te võite meid ka rahaliselt aidata!</a></p> 
                    <p>Mageia toetub ainult oma kogukonna tööle ja panusele,
                        olgu selleks siis aeg, oskused või raha!</p>
                </div></div>
            </div>
            <div class="para" style="color: #999;">
		<p>Jah, see on esialgu veel üsna rohmakas allalaadimislehekülg. Ent sellel on ka oma pluss:
                    see muudab alfaväljalaske allalaadimise mittearendajatele veidi vähem külgetõmbavaks.
                    Ahjaa, kas me ütlesime juba, et ootame pikisilmi inimesi, kes võiksid anda oma panuse meie
                    <a href="http://www.mageia.org/wiki/doku.php?id=web">veebi</a>- ja <a href="http://www.mageia.org/wiki/doku.php?id=sysadmin">süsteemihaldurite meeskonnas</a>?
                    Lisaks neile on mõistagi <a href="http://www.mageia.org/wiki/doku.php?#teams">teisigi väga sõbralikke meeskondi</a>.</p>

            </div>
        </div>
    </div>
</body>
</html>
