<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="fr">
<head>
    <meta charset="utf-8" />
    <title>Mageia - Une nouvelle distribution Linux communautaire</title>
    <meta name="description" content="Mageia est une nouvelle distribution Linux communautaire." />
    <meta name="keywords" content="mageia, linux, mandriva, logiciel libre" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" />
    <link rel="alternate" type="application/rss+xml" title="Mageia Blog (français)" href="http://blog.mageia.org/fr/?feed=rss" />
    <?php include '../analytics.php'; ?>
</head>
<body>
    <?php include '../langs.php'; ?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner">
                <h1><a id="logo" href="/fr/"><span>Mageia</span></a>
                    <span class="lsep">|</span>
                    <span class="subh">Une Distribution Linux</span></h1>
        </div>
        <div id="bd" role="main">
            <div class="yui-g bb1">
                <div class="para"><p>Mageia est un fork de Mandriva Linux,
                    reposant sur une association de type 1901 composée de
                    contributeurs reconnus et élus pour leur travail.</p>

                    <p>Au delà d&rsquo;un système d&rsquo;exploitation libre,
                        sécurisé, stable et pérenne, l&rsquo;objectif est d&rsquo;établir
                        une gouvernance stable et légitime autour d&rsquo;un modèle
                        collaboratif
                        (<a href="#announce">voir l&rsquo;annonce originale</a>).</p>
                </div>
            </div>
            <?php include '../release_counter.php'; ?>
            <div class="yui-g bb1">
                <div class="yui-u first rb1">
                    <div class="para" id="news">
                        <h2><a href="http://blog.mageia.org/fr/">Actualités</a></h2>
                    <?php include '../lib/news.php'; echo html_news('fr'); ?>
                    </div>
                </div>
                <div class="yui-u">
                    <div class="para" lang="en">
                        <h2>En ce moment</h2>
                        <?php include '../roadmap.php'; ?>
                    </div>
                </div>
            </div>
            <div class="yui-g bb1">
                <div class="yui-u first">
                    <div class="para" id="contact">
                        <h2>Rejoignez-nous&nbsp;!</h2>
                        <ul>
                            <li><a href="https://www.mageia.org/mailman/">Listes de discussion</a></li>
                            <li><a href="http://mageia.org/wiki/doku.php?id=irc">IRC (Freenode network)</a></li>
                            <li><a href="http://mageia.org/wiki/" hreflang="en">Wiki Mageia</a> (en anglais)</li>
                            <li><a href="http://mageia.org/wiki/doku.php#teams" hreflang="en">&Eacute;quipes</a> (en anglais)</li>
                            <li>Contacter l&rsquo;équipe fondatrice&nbsp;:
                                <ul>
                                    <li><a href="mailto:mageia-contact@mageia.org">mageia-contact@mageia.org</a></li>
                                    <li><a href="mailto:press@mageia.org">press@mageia.org</a></li>
                                    <li>attendez une réponse dans les 2 jours</li>
                                </ul></li>
                        </ul>
                    </div>
                </div>
                <div class="yui-u">
                    <div class="para">
                        <p>
                            <a href="http://blog.mageia.org/fr/?feed=rss"><img src="/g/images/smi/feed-32x32.png" alt="Mageia Blog (français)"></a>
                            <a href="http://www.twitter.com/mageia_org"><img src="/g/images/smi/twitter-32x32.png" alt="@mageia_org"></a>
                            <a href="http://identi.ca/mageia"><img src="/g/images/smi/identica-32x32.png" alt="@mageia"></a>
                            <a href="http://www.facebook.com/Mageia"><img src="/g/images/smi/facebook-32x32.png" alt="Mageia"></a>
                            <a href="http://www.flickr.com/photos/mageia_org"><img src="/g/images/smi/flickr-32x32.png"></a>
                        </p>
                    <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FMageia%2F157247240967735&amp;width=320&amp;connections=10&amp;stream=false&amp;header=false&amp;height=255" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:320px; height:255px;" allowTransparency="true"></iframe>
                    </div>
                </div>
            </div>
            <div class="yui-g">
                <div class="para" id="announce">
                    <h2>Annonce</h2>
                    <p class="date">Paris, 18 septembre 2010</p>
                    <p>Comme vous l'avez peut-être deviné, l'avenir de la distribution Mandriva Linux est aujourd'hui incertain.</p>
                    <p>La plupart des employés qui travaillaient sur la distribution ont été licenciés lors de la liquidation de Edge-It. Nous ne faisons plus confiance aux plans de la société Mandriva et nous ne pensons pas que Mandriva soit une solution sûre pour soutenir un tel projet.</p>

                    <p>De nombreux événements ont ponctué ces 12&nbsp;dernières années.
                    Certains ont été très positifs&nbsp;: la communauté Mandriva Linux s'est développée, elle est solide, motivée et expérimentée, la distribution reste parmi les plus connues et récompensées, facile à utiliser et innovante.
                    D'autres événements ont eu de réels impacts négatifs et la communauté doute de plus en plus de la viabilité de sa distribution favorite.</p>
                    <p>Ceux qui travaillent sur ce projet ne souhaitent plus dépendre des fluctuations économiques, plus ou moins erratiques, de changements de stratégie non étayés de l'entreprise.</p>
                </div>
                <hr />
                <div class="para">
                    <h2>Forker Mandriva Linux&nbsp;? Oui.</h2>

                    <p>Forker un projet open source existant n'est jamais une décision simple à prendre, et forker Mandriva Linux est une tâche immense.</p>
                    <p>Il ne s'agit pas d'un coup de tête. Nous en avons beaucoup discuté au préalable&nbsp;: entre anciens employés, contributeurs Cooker et utilisateurs. Nous avons écouté les uns et les autres ces dernières semaines, car nous avions besoin de sentir un début de consensus à ce sujet avant d'aller plus loin.</p>

                    <p>Nous pensons qu'un fork est la meilleure solution et nous avons décidé de lancer une nouvelle distribution&nbsp;: <strong>Mageia</strong>.</p>
                </div>
                <hr />
                <div class="para">
                    <h2>De nouvelles fondations.</h2>
                    <p>Mageia est un projet communautaire&nbsp;: il ne dépendra pas du sort d'une quelconque entreprise.</p>
                    <p>Une association (organisation à but non lucratif) sera mise en place dans les jours à venir et sera gérée par un conseil constitué de membres de la communauté. Après la première année, ce conseil sera élu régulièrement par la communauté.</p>
                    <p>Cette organisation gèrera et coordonnera la distribution&nbsp;: code et hébergement du logiciel et de la distribution, système de build, marketing, favorisera la discussion et les événements. Les données, roadmaps, designs seront partagés et discutés au sein de cette organisation.</p>
                    <p>Nous discuterons et formaliserons tous ces détails dans les jours à venir.</p>
                    <p>La distribution Mageia sera ce que le conseil voudra en faire, avec l'aide et la contribution de toute la communauté. Nous avons déjà des idées et des plans pour cette contribution&nbsp;; nous souhaitons&nbsp;:</p>
                    <ul>
                        <li>rendre Linux et le logiciel libre encore plus accessible à tous&nbsp;;</li>
                        <li>fournir des outils de configuration complètement intégrés au système&nbsp;;</li>
                        <li>maintenir un haut niveau d'intégration entre le système de base, le bureau (KDE/GNOME) et les application&nbsp;; avec un focus particulier sur l'intégration des logiciels tiers (propriétaires ou non)</li>
                        <li>cibler de nouvelles architectures matérielles et des plates-formes&nbsp;;</li>
                        <li>améliorer notre compréhension des ordinateurs et des périphériques.</li>
                    </ul>
                    <p>Vous avez sans doute vos idées également. Nous allons prendre le temps de les partager.</p>
                </div>
                <hr />
                <div class="para">
                    <h2>La communauté.</h2>
                    <p>La communauté Mageia est pour nous&nbsp;:</p>
                    <ul>
                        <li>des utilisateurs,</li>
                        <li>des fabricants (designers, développeurs, packageurs, traducteurs, testeurs, etc.),</li>
                        <li>des défenseurs.</li>
                    </ul>
                    <p>Tous ces membres peuvent être des individus, des organisations, des entreprises du monde entier.</p>
                    <p>Il y a là un vrai beau challenge&nbsp;: de nombreux pays, de nombreuses langues, de nombreuses cultures, des besoins tout aussi nombreux. Et ça nous semble formidable.</p>
                    <p>L'expérience de Mandriva Assembly a mis en évidence la difficulté de la tâche. Mais nous pensons que nous pouvons proposer beaucoup mieux&nbsp;!</p>
                </div>
                <hr />
                <div class="para">
                    <h2>Les gens.</h2>
                    <p>Quelles que soient l'activité ou les connaissances, vous êtes, nous sommes cruciaux. Mageia a pour objectif de vous être utile à vous, à chacun de nous, en tant que personne. La confiance est un requis. Indispensable.</p>
                    <p>Nous sommes au tout début de ce fork. Ca ne sera pas facile. Mais nous pensons que c'est nécessaire.</p>

                    <?php include '../people.html'; ?>
                    
                    <p>Pour les autres contributeurs&nbsp;: si vous souhaitez être ajouté à la liste pour suivre ce fork, faites-nous en part sur IRC ou par email.</p>
                </div>
                <hr />
                <div class="para">
                    <h2>À suivre.</h2>
                    <p>Nous aurons beaucoup de besoins dans les jours à venir&nbsp;:</p>
                    <ul>
                        <li>du matériel pour héberger le code, construire le système de build et un hébergement pour ce matériel ;</li>
                        <li>des développeurs, contributeurs, traducteurs, testeurs pour s'investir dans le développement de Mageia ;</li>
                        <li>des conseils sur la mise en place de l'organisation et de ses processus...</li>
                    </ul>
                    <p>Votre aide et votre support sont très appréciés.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="ft"><p><a href="http://mageia.org/">mageia.org</a></p></div>
</body>
</html>
