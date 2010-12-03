<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="es">
<head>
    <meta charset="utf-8" />
    <title>Mageia - Una Nueva Distribución Linux</title>
    <meta name="description" content="Mageia es una nueva distribución linux basada en la comunidad." />
    <meta name="keywords" content="mageia, linux, mandriva, free software" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" />
    <?php include '../analytics.php';?>
</head>
<body>
    <?php include '../langs.php'; ?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1>Mageia <span>&ndash; Una Nueva Distribución Linux</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g bb1">
                <div class="para"><p>Mageia es una bifurcación (fork) de Mandriva Linux,
                    apoyada por una organización sin fines de lucro de contribuyentes elegidos y reconocidos.</p>

                    <p>Mas que la entrega de un sistema operativo libre, seguro, estable y sostenible,
                        la meta es establecer una gobernabilidad estable y confiable para la dirección
                        de proyectos colaborativos (<a href="#announce">revisa el anuncio original</a>).</p>
                </div>
            </div>
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
            <div class="yui-g">
                <div class="para" id="announce">
                    <p class="date">Paris, 18 de Septiembre de 2010</p>
                    
                    <p>Como ya habréis oído, el futuro de la distribución Mandriva Linux es incierto.</p>
                    
                    <p>La mayoría de los empleados que estaban trabajando en la distribución han sido despedidos cuando Edge-IT se ha liquidado. Ya no confiamos en los planes de Mandriva y no creemos que la empresa (o cualquier empresa) pueda llevar adelante este proyecto.</p>
                    <p>Han sucedido muchas cosas en estos 12 años. Algunas muy buenas: la comunidad de Mandriva Linux es muy grande, motivada y experimentada, la distribución continua siendo un producto muy popular y premiado, fácil de usar e innovador. Ha habido otros sucesos que trajeron malas consecuencias y provocaron que la gente no confiara en la viabilidad de su distribución favorita. Los que trabajaban en ella ya no quieren ser dependientes de las fluctuaciones de la economía, y de los erráticos e inexplicables movimientos estratégicos de la empresa.</p>
                </div>
                <div class="para">
                    <h2>¿Crear un fork de Mandriva Linux? Sí.</h2>
                    <p>Crear un fork de un proyecto de código abierto jamás es una decisión fácil de tomar, y crear un fork de Mandriva Linux es una tarea inmensa. No ha sido una decisión tomada por impulso. Todos hemos discutido mucho al respecto anteriormente: empleados, contribuidores de Cooker y comunidades de usuarios. En las pasadas semanas hemos reunido opiniones y reacciones, ya que necesitábamos conseguir un acuerdo global antes de seguir adelante con el proyecto.</p>
                    <p>Creemos que un fork es la mejor solución, y decidimos crear una nueva distribución: <strong>Mageia</strong>.</p>  
                </div>
                <div class="para">

            <h2>Nuevas bases</h2>
            <p>Mageia es un proyecto comunitario: no dependerá de una empresa en particular.<p>
            <p>Se pondrá en marcha una organización sin ánimo de lucro en los próximos días y será administrada por una junta de miembros de la comunidad. Tras el primer año esta junta será elegida regularmente por miembros comprometidos de la comunidad.</p>
            <p>Esta organización va a administrar y coordinar la distribución: el hospedaje y distribución de código y aplicaciones, los sistemas de compilación, marketing, promoción de eventos y comunicación. Los datos, hechos, hojas de ruta y diseños serán compartidos y discutidos a través de esta organización.</p>
            <p>Discutiremos y estableceremos los detalles en los próximos días.</p>
            <p>La distribución Mageia será lo que la junta haga que sea, con la ayuda y participación de toda la comunidad. Ya tenemos ideas y planes sobre esta distribución; queremos:</p>

            <ul>
                <li>hacer Linux y las aplicaciones libres accesibles a todos;</li>
                <li>mantener un alto nivel de integración entre el sistema base, el escritorio (KDE/GNOME) y las aplicaciones;  mejorar especialmente la integración de terceros (ya sean aplicaciones libre o privativas);</li>
		<li>tener como objetivo nuevas arquitecturas y formatos;</li>
                <li>mejorar nuestra comprensión sobre los usuarios de computadoras y dispositivos electrónicos;</li>
            </ul>
            <p>Tú seguramente tendrás ideas también. Nos tomaremos el tiempo para escucharlas.</p>

        </div>
        <div class="para">
            <h2>Comunidad.</h2>
            <p>Entendemos a la comunidad de Mageia como:</p>
            <ul>
                <li>usuarios,</li>
                <li>creadores (diseñadores, desarrolladores, empaquetadores, traductores, probadores, etc)</li>
                <li>defensores del software libre.</li>
            </ul>
            <p>Pueden ser personas, organizaciones y empresas de todas partes del mundo.</p>
            <p>También afrontamos importantes desafíos; muchos países, tantos idiomas, tantas culturas y diferentes necesidades. Y eso es fabuloso.</p>
            <p>Hemos visto con el experimento de la Asamblea de Mandriva que no será una tarea fácil. Nosotros creemos que lo vamos a hacer aún mejor.</p>
        </div>
        <div class="para" id="people">

            <h2>Personas.</h2>
            
            <p>Hagas lo que hagas en la vida, las personas son el mayor y único capital. Y Mageia esta inclinada a ayudar a las personas. La confianza importa. Estamos en el comienzo de este fork. No será fácil. Pero creemos que es necesario.</p>
            <?php include '../people.html'; ?>
            
            <p>Para otros contribuidores: si quieres que tu nombre sea agregado a la lista, indicando que planeas seguir el fork, háznoslo saber en el canal IRC o por correo electrónico.</p>
            </div>
            <div class="para">
                <h2>Continuando.</h2>
                <p>Para los próximos días estamos buscando cosas muy diferentes:</p>
                <ul>
                    <li>hardware para albergar código, servidores de compilación y datacenters para albergar estos servidores,</li>
                    <li>desarrolladores, contribuidores, traductores y probadore para el desarrollo de Mageia</li>
                    <li>consejeros y abogados para la construcción de la organización y sus procesos, etc.</li>
                </ul>
                <p>Tu ayuda y apoyo serán muy apreciados.</p>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
