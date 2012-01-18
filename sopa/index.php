<?php
/**
 * Anti-SOPA/PIPA online campaign for www.mageia.org - January 18 2012
 * by Romain d'Alverny
 *
 * Derived from https://github.com/zachstronaut/stop-sopa
 * by Zachary Johnson / http://www.zachstronaut.com
 * Licensed under Public Domain.
*/


header('HTTP/1.1 503 Service Temporarily Unavailable');
header('Status: 503 Service Temporarily Unavailable');
header('Retry-After: 7200');

$_t = array(
    'en' => array(
        'title'      => 'Protect the Internet - STOP SOPA!',
        'STOP SOPA!' => 'STOP SOPA!',
        'text'       => '
        <p>This site has gone dark today, January 18<sup>th</sup>, in protest of the U.S.
            Stop Online Piracy Act (SOPA) and PROTECT-IP Act (PIPA).</p>
        <p>The U.S. Congress is about to censor the Internet,
            even though the vast majority of Americans are opposed.</p>
        <p>We need to kill these bills to protect our rights to free speech,
            privacy, and prosperity.
            Learn more at <a href="http://americancensorship.org/">AmericanCensorship.org</a>.</p>
        <p>See our <a href="http://blog.mageia.org/en/2012/01/18/stop-sopa/">blog post</a> too.</p>
        '
    ),
    'fr' => array(
        'title'      => 'Protégez Internet - Arrêtez SOPA !',
        'STOP SOPA!' => 'ARRÊTEZ SOPA!',
        'text'       => '
        <p>Mageia.org passe au noir, ce 18 janvier, en protestation envers
            les projets de lois américaines SOPA (Stop Online Piracy Act) et PROTECT-IP Act (PIPA)
            actuellement à l&rsquo;étude.</p>
        <p>Ces projets de loi qui menacent la liberté d&rsquo;expression, d&rsquo;entreprise,
            la vie privée et l&rsquo;innovation, doivent être abandonnés.</p>

        <p>Apprenez-en plus&nbsp;:</p>
        <ul>
            <li><a href="http://www.framablog.org/index.php/post/2011/12/15/sopa-stop-online-piracy-act-1">Pourquoi le projet de loi américain SOPA nous menace-t-il tous&nbsp;?</a>,</li>
            <li><a href="http://www.framablog.org/index.php/post/2011/12/18/sopa-education">La menace SOPA plane aussi sur le monde éducatif</a>,</li>
            <li><a href="http://www.framablog.org/index.php/post/2011/12/16/sopa-stop-online-piracy-act-2">12 actions pour combattre et stopper SOPA</a>,</li>
            <li><a href="http://americancensorship.org/" hreflang="en">AmericanCensorship.org</a>,</li>
            <li>notre <a href="http://blog.mageia.org/fr/2012/01/18/stop-sopa/">note de blog</a> sur le sujet.</li>
        </ul>
        '
    )
);

$_t = i18n::get_strings($_t, $locale, $i18n_fallback_rules);

?>
<!DOCTYPE html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $_t['title']; ?></title>
    <style type="text/css" media="all">
html,
body {
    margin: 0;
    padding: 0;
}

#text-shadow-box {
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    background: #444;
    font-family: Arial, sans-serif;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
	-webkit-user-select: none;
}

#text-shadow-box #tsb-text,
#text-shadow-box #tsb-link {
    position: absolute;
    top: 25%;
    left: 0;
    width: 100%;
    height: 1em;
    margin: -0.77em 0 0 0;
    font-size: 90px;
    line-height: 1em;
    font-weight: bold;
    text-align: center;
}

#text-shadow-box #tsb-text {
    font-size: 100px;
    color: transparent;
    text-shadow: black 0px -45.2px 19px; 
}

#text-shadow-box #tsb-link a {
    color: #999;
    text-decoration: none;
}

#text-shadow-box #tsb-box,
#text-shadow-box #tsb-wall {
    position: absolute;
    top: 25%;
    left: 0;
    width: 100%;
    height: 75%;
}

#text-shadow-box #tsb-box {
    -webkit-box-shadow: black 0px -45.2px 39px;
    -moz-box-shadow: black 0px -45.2px 39px;
}

#text-shadow-box #tsb-wall {
    background: #999;
}

#text-shadow-box #tsb-wall p,
#text-shadow-box #tsb-wall ul {
    position: relative;
    font-size: 18px;
    line-height: 1.3em;
    text-align: justify;
    color: #222;
    width: 550px;
    margin: 1em auto;
    cursor: default;
}

#text-shadow-box #tsb-wall p a,
#text-shadow-box #tsb-wall ul a
 {
    color: #fff;
}

#text-shadow-box #tsb-wall p a:hover {
    text-decoration: none;
    color: #000;
    background: #fff;
}

#tsb-spot {
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    pointer-events: none;
    background: -webkit-gradient(radial, center center, 0, center center, 450, from(rgba(0,0,0,0)), to(rgba(0,0,0,1)));
    background: -moz-radial-gradient(center 45deg, circle closest-side, transparent 0, black 450px);
}
</style>

<!--[if IE]>
<style type="text/css">
/* Sadly no IE9 support for pointer-events: none; nor CSS2 text-shadow */
#tsb-spot {
    display: none;
}
#tsb-ie {
    position: absolute;
    top: -90%;
    left: -50%;
    width: 200%;
    height: 334%;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPHJhZGlhbEdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgY3g9IjUwJSIgY3k9IjUwJSIgcj0iNzUlIj4KICAgIDxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiMwMDAwMDAiIHN0b3Atb3BhY2l0eT0iMCIvPgogICAgPHN0b3Agb2Zmc2V0PSI3NCUiIHN0b3AtY29sb3I9IiMwMDAwMDAiIHN0b3Atb3BhY2l0eT0iMSIvPgogICAgPHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjMDAwMDAwIiBzdG9wLW9wYWNpdHk9IjEiLz4KICA8L3JhZGlhbEdyYWRpZW50PgogIDxyZWN0IHg9Ii01MCIgeT0iLTUwIiB3aWR0aD0iMTAxIiBoZWlnaHQ9IjEwMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
}
</style>
<![endif]-->

</head>
<body>
    
<div id="text-shadow-box">
    <div id="tsb-box"></div>
    <p id="tsb-text"><?php echo $_t['STOP SOPA!']; ?></p>
    <p id="tsb-link"><a href="http://americancensorship.org/" hreflang="en"><?php echo $_t['STOP SOPA!']; ?></a></p>
    <div id="tsb-wall">
        <div id="tsb-ie"></div>
        <?php echo $_t['text']; ?>
    </div>
    <div id="tsb-spot"></div>
</div>

<script>
/**
 * Zachary Johnson
 * http://www.zachstronaut.com
 * I place the following code in the public domain.
 *
 * Fork it on GitHub: https://github.com/zachstronaut/stop-sopa
 */
 
var text = null;
var spot = null;
var box = null;
var boxProperty = '';

init();

function init() {
    text = document.getElementById('tsb-text');
    spot = document.getElementById('tsb-spot');
    box = document.getElementById('tsb-box');
    
    if (typeof box.style.webkitBoxShadow == 'string') {
        boxProperty = 'webkitBoxShadow';
    } else if (typeof box.style.MozBoxShadow == 'string') {
        boxProperty = 'MozBoxShadow';
    } else if (typeof box.style.boxShadow == 'string') {
        boxProperty = 'boxShadow';
    }

    if (text && spot && box) {
        document.getElementById('text-shadow-box').onmousemove = onMouseMove;
        document.getElementById('text-shadow-box').ontouchmove = function (e) {e.preventDefault(); e.stopPropagation(); onMouseMove({clientX: e.touches[0].clientX, clientY: e.touches[0].clientY});};
    }
}

function onMouseMove(e) {
    if (typeof e === 'undefined' || typeof e.clientX === 'undefined') {
        return;
    }
    
    var xm = (e.clientX - Math.floor(window.innerWidth / 2)) * 0.4;
    var ym = (e.clientY - Math.floor(window.innerHeight / 3)) * 0.4;
    var d = Math.round(Math.sqrt(xm*xm + ym*ym) / 5);
    text.style.textShadow = -xm + 'px ' + -ym + 'px ' + (d + 10) + 'px black';
    
    if (boxProperty) {
        box.style[boxProperty] = '0 ' + -ym + 'px ' + (d + 30) + 'px black';
    }
    
    xm = e.clientX - Math.floor(window.innerWidth / 2);
    ym = e.clientY - Math.floor(window.innerHeight / 2);
    spot.style.backgroundPosition = xm + 'px ' + ym + 'px';
}
</script>

</body>
</html>
