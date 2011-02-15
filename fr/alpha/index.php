<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Télécharger la version alpha (non stable) de Mageia</title>
    <meta name="description" content="Page de téléchargement de la première version alpha technique de Mageia" />
    <meta name="keywords" content="mageia, alpha, unstable, iso, download, test, not for production" />
    <meta name="author" content="Mageia" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" >
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>
    
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1>Mageia <span>| Télécharger la version Alpha</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para" style="color: #f22; text-align: center;">
                    <h2 style="font-weight: bold;">Attention ! Alpha == Logiciel Instable !</h2>
                    <p>Ce n'est PAS prévu POUR : usage quotidien, évaluation publique, mise en production.</p>
                    <p>C'est prévu POUR : test des développeurs et empacketeurs.</p>
                </div>
            </div>
            <div class="yui-g"><div class="para">
                <p>Whatever you may do with the provided ISO disc image
                    will be done at your own risk, with your own responsibility.
                    If you are looking for a stable Linux system, you may prefer to wait
                    for later releases of Mageia.</p>

                <p style="font-weight: bold; color: #f22">Again, please DO NOT
                    download it and/or install it if you are not certain
                    that you understand what this ISO is and what it is not.</p>
                
                <h2>Vous voulez toujours télécharger l'alpha <em>brute de décoffrage</em> de Mageia ?</h2>
                <p>Ok. So first, presentations: we have two ISO images: a 32bit DVD and a 64bit DVD.
                    Each weights about 2&nbsp;GiB.</p>
                <p>Below you will find the list of servers that currently mirror Mageia software:</p>
                <ol>
                    <li>pick the server that suits you best (preferably in your own country);</li>
                    <li>pick the ISO image that is best for you (their names should be self-evident, we hope).</li>
                </ol>
                <br />
                <table id="dl-table"><thead>
                    <tr><th>Emplacement</th><th>Protocole</th><th>Serveur</th></tr>
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
                    <h2>A propos de cette version</h2>
                    <p>C'est notre premiere ISO, réalisée depuis notre propre <em>build-system</em>.
                        Publier cette image maintenant et le meilleur moyen de le tester et de voir ce qu'il reste à améliorer dans les prochaines semaines.</p>
                    
                    <ul>
			<li><a href="http://blog.mageia.org/?p=492" hreflang="en">Annonce sur le blog</a></li>
			<li><a href="/wiki/doku.php?id=iso1:alpha1_release_notes" hreflang="en">Notes de version</a></li>
                        <li><a href="/wiki/doku.php?id=iso1:alpha1_errata" hreflang="en">Erratas</a></li>
                        <li><a href="/en/">Qu'est ce que Mageia ?</a></li>
                    </ul>
                    <p>L'alpha 2 sera diffusée le 15 mars.</p>
                    <p>Vous pouvez vérifier notre <a href="http://mageia.org/wiki/doku.php?id=iso_1_specifications#expected_milestones">calendrier pour Mageia 1</a>.</p>
                    
                    
                </div></div>
                <div class="yui-u"><div class="para">
                    <h2>Vous pouvez aider !</h2>
                    <p>Oui ! Cette version is toujours brute, and ainsi sera la suivante,
			mais en bien mieux !</p>
                    <p>Il y a beaucoup de choses que l'on peut faire pour contribuer à Mageia :
                        développer, packager, tester, traduire, remonter et fixer des bugs, et <a href="http://mageia.org/wiki/">bien plus encore</a> !</p>
                    <p><a href="http://mageia.org/wiki/doku.php?id=contribute">Voir comment vous pouvez vous amuser et contribuer</a></p>

                </div>
                <div class="para">
                    <h3>Donner !</h3>
                    <p>Oui ! <a href="/fr/donate/">Vous pouvez donner aussi !</a></p>
                    <p>Mageia ne repose que sur la participation de sa communauté, que ce soit par son temps, ses compétences et son argent !</p>
                </div></div>
            </div>
            <div class="para" style="color: #999;">
		<p>Oui, c'est une page de téléchargement un peu rude, pour le moment. Mais elle est bien dans le sens où elle pourrait rebuter les personnes qui ne sont pas développeurs ou packageurs.
                    Avons-nous dit que nous invitions les gens à contribuer dans nos
                    <a href="http://www.mageia.org/wiki/doku.php?id=web">équipes Web</a> et <a href="http://www.mageia.org/wiki/doku.php?id=sysadmin">Sysadmim</a> ?
                    Il y a <a href="http://www.mageia.org/wiki/doku.php?#teams">aussi d'autres équipes très sympathiques</a> dans le projet.</p>

            </div>
        </div>
    </div>
</body>
</html>
