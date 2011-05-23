<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="es">
<head>
    <meta charset="utf-8" />
    <title>Mageia - Una Nueva Distribución Linux</title>
    <meta name="description" content="Mageia es una nueva distribución linux basada en la comunidad." />
    <meta name="keywords" content="mageia, linux, mandriva, free software" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" />
    <link rel="alternate" type="application/rss+xml" title="Mageia Blog (Español)" href="http://blog.mageia.org/es/?feed=rss" />
    <?php include '../analytics.php';?>
</head>
<body>
    <?php include '../langs.php'; ?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh">Una Nueva Distribución Linux</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g bb1">
                <div class="para"><p>Mageia es una bifurcación (fork) de Mandriva Linux,
                    apoyada por una organización sin fines de lucro de contribuyentes elegidos y reconocidos.</p>

                    <p>Mas que la entrega de un sistema operativo libre, seguro, estable y sostenible,
                        la meta es establecer una gobernabilidad estable y confiable para la dirección
                        de proyectos colaborativos (<a href="/es/about/2010-sept-announcement.html">revisa el anuncio original</a>).</p>
                </div>
            </div>
            <?php include '../release_counter.php'; ?>
            <div class="yui-g bb1">
                <div class="yui-u first rb1">
                    <div class="para" id="news">
                        <h2><a href="http://blog.mageia.org/es/">Novedades</a></h2>
                    <?php include '../lib/news.php'; echo html_news('es'); ?>
                    </div>
                </div>
                <div class="yui-u">
                    <div class="para" lang="en">
                        <h2>Ocurre en este momento</h2>
                        <?php include '../roadmap.php'; ?>
                    </div>
                </div>
            </div>
            <div class="yui-g bb1">
                <div class="yui-u first">
                    <div class="para" id="contact">
                        <h2>Para ponerse en contacto con nosotros</h2>
                        <ul>
                            <li><a href="https://www.mageia.org/mailman/">Listas de correo</a></li>
                            <li><a href="http://mageia.org/wiki/doku.php?id=irc">IRC (por la red Freenode)</a></li>
                            <li><a href="http://mageia.org/wiki/" hreflang="en">Mageia Wiki</a></li>
                            <li>Contacta al equipo de fundadores (de preferencia en Inglés o Frances, aunque no es obligatorio):
                                <ul>
                                    <li><a href="mailto:mageia-contact@mageia.org">mageia-contact@mageia.org</a></li>
                                    <li><a href="mailto:press@mageia.org">press@mageia.org</a></li>
                                    <li>Espera una respuesta dentro de dos días</li>
                                </ul></li>
                            <li><a href="http://www.twitter.com/mageia_org">twitter.com/mageia_org</a></li>
                            <li><a href="http://identi.ca/mageia">identi.ca/mageia</a></li>
                        </ul>
                        <!-->
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
        </div>
    </div>
</body>
</html>
