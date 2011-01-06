<?php
/**
*/

/**
*/
$donators = array(
    "Pascal Vilarem (Maât)",
    "Vicente Salvador Cubedo",
    "Samuel Verschelde (Stormi)",
    "Frédéric Hugot",
    "Jonathan Bayle",
    "Markus Schimpf (arno911)", 
    "HTJ Simons", 
    "François Jaouen", 
    "Josep Guallar-Esteve", 
    "Daniel Le Berre", 
    "Richard Neill", 
    "Peter Trussel", 
    "Marc Pare", 
    "Dave Postles", 
    "Basilio Rosa", 
    "George Mitchell", 
    "Louis Ramel", 
    "Tomislav Jankovic", 
    "Alexandre Lucazeau", 
    "Michael Golden", 
    "Jean Peyratout", 
    "Philippe Seraphin", 
    "Bernard Siaud", 
    "Luis Maria Garcia Ruiperez", 
    "Céline Harrand", 
    "Ángel Jiménez Álvaro", 
    "Jean-Michel Varvou (vouf)", 
    "Margot Lawrence", 
    "Teofilo Casares De La Iglesia", 
    "Steven Hess", 
    "Erwien Yustitiawan", 
    "Thibaut François", 
    "Bernd Deinzer", 
    "Roland Gillard", 
    "Dušan Pavlík", 
    "Enrico Gsell", 
    "Ernst Pini", 
    "Dick Gevers", 
    "Gonzalo Igartua", 
    "Alexander Andreyev", 
    "Frank Eisele", 
    "Björn Olsson", 
    "Lanfranco Gandolfo", 
    "Gerardo Bueno Jiménez", 
    "Murat Demir", 
    "Николай Путроенок (nick7rus)", 
    "Alfred Lang", 
    "Antonio Pimentel", 
    "Olivier Mergnac", 
    "Anonymous", 
    "Eduardo Llana Ugalde", 
    "Derek Jennings", 
    "Brian Saunderson", 
    "Abel Rodríguez Reádigos", 
    "Barry Jackson", 
    "Mike Burgener", 
    "Jin-tong Hu", 
    "Jani J Välimaa", 
    "Jose Fernández Rosa", 
    "Pierre Bonneau", 
    "Richard Monnier", 
    "Frederic Forjan", 
    "Vincent Calame", 
    "Renaud Michel", 
    "Sahaghian", 
    "Wolfgang Bornath (wobo)", 
    "Werner Brinkmann", 
    "Serge Moreau", 
    "Jean Goujoun", 
    "Anonymous", 
    "Freddy Janssens", 
    "Nico Bergmann", 
    "Adrien Guichard", 
    "Markus Vollmer", 
    "Philippe Cherpentier", 
    "Jean-François Bellanger", 
    "Laurent Clerel", 
    "Anonymous", 
    "Glen Ogilvie", 
    "Jérôme Benoit", 
    "Anonymous", 
    "Doug Lytle", 
    "M. &amp; Mme Vilarem", 
    "Anonymous", 
    "Anonymous", 
    "Hoyt Duff", 
    "Henk Elbers", 
    "Didier Leunen (sisopetron)", 
    "Emmanuel Andry", 
    "Sébastien Pinet", 
    "Vicente Salvador Cubedo", 
    "Sébastien Guerin", 
    "Tomeu Ferrer Redondo", 
    "Philippe Jusseaume", 
    "Anonymous", 
    "Dick Gevers", 
    "Thomas Lottmann", 
    "姜 奕轲", 
    "Raphael Vinet", 
    "Pierre-Yves Dirand", 
    "Yannick Le Ny", 
    "Jean-jacques Barret", 
    "Heiko Geier", 
    "Livre Livre", 
    "Patrick Charpentier", 
    "Brian Hewitt", 
    "Christian Prior", 
    "Livre Livre", 
    "Arnaud Gibert", 
    "David Pernot (deap)", 
    "Sylvain Haye", 
    "Dave Null", 
    "Jacques Spring", 
    "Anonymous", 
    "Anonymous", 
    "Felipe Valladolid Gonzalo", 
    "Rémi Verschelde (Akien)", 
    "Fabrice Gaillard", 
    "Jerome Martin (jmartin)", 
    "Jean-Luc Versini", 
    "Joao P S Carvalho", 
    "Pierre Gabet", 
    "Åke Mellin", 
    "Laurent Espitallier", 
    "Laurent Breton", 
    "Fabrice Jade", 
    "Julio Geraldo", 
    "Patrice Riant", 
    "Corrado Bove", 
    "Marek Walter", 
    'Anonymous',
    'Stefan John',
    'Paul Dupouy',
    'Cedric Drolet',
    'Jacques Paret-gris',
    'Sreejiraj Eluvangal',
    'Rémy Clouard (shikamaru)',
    'Sandro Veronese',
    'Alain Gudefin',
    'Vasileios Karampelas',
    'Morgan Leijström (Tribun AB)',
    'Alain Lamarche',
    'Marita Launonen',
    'Distrowatch.com',
    'Denis Prost',
    'François Lamboley',
    'Martin Alduncin Garrido',
    'Pietr Petronov'
    'Jürgen Thurau'
    'Frederic Hugot'
    'Julia Jumeau'
    'Michael Lossin'
    'Jean-Guy Tesseraud'
    'Lucas Betschart'
    'Otto Fischer'
    'Loïc Carré'
);

//$html .= '<img src="/g/images/mageia_0.svg" style="position: absolute; top: 180px; width: 300px; opacity: 0.2;" />';

$orgs = array(
    array('http://www.mandrivafr.org/', 'AUFML'),
    array('http://dedibox.fr/', 'Dédibox'),
    array('http://www.gandi.net/', 'Gandi.net'),
    array('http://www.kazar.net/', 'Kazar.net'),
    array('http://www.lost-oasis.net/', 'Lost-Oasis'),
    array('http://www.mandrivalinux-online.org/', 'MLO'),
    array('http://nfrance.fr/', 'NFrance'),
    array('http://www.spreadshirt.com/', 'Spreadshirt'),
    array('http://zarb.org/', 'zarb.org'),
);


/**
 * @param array  $donators
 *
 * @return string
*/
function html_donators_list($donators)
{
    $count_donators = count($donators);
    //$donators = array_unique($donators);
    sort($donators);

    $html = sprintf('<p>%d amazing people <a href="/en/donate/">donated money</a> to Mageia.Org:</p>', $count_donators);
    $html .= '<ul class="ty-ppl-list">';
    foreach ($donators as $p)
        $html .= sprintf('<li>%s</li>', $p);
    $html .= '</ul>';
    
    return $html;
}

/**
*/
function html_people_list($people)
{
    $html = '<ul class="ty-ppl-list">';
    foreach ($people as $p)
        $html .= sprintf('<li>%s</li>', $p);
    $html .= '</ul>';

    return $html;
}

/**
*/
function html_orgs_list($orgs)
{
    $html = '<ul class="ty-ppl-list">';
    foreach ($orgs as $o)
        $html .= sprintf('<li><a href="%s">%s</a> %s</li>', $o[0], $o[1], @$o[2]);
    $html .= '</ul>';

    return $html;
}

