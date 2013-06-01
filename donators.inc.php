<?php
/**
*/

$orgs = array(
    array('http://www.mandrivafr.org/', 'AUFML'),
    array('http://dedibox.fr/', 'Dédibox'),
    array('http://www.gandi.net/', 'Gandi.net'),
    array('http://www.kazar.net/', 'Kazar.net'),
    array('http://www.lost-oasis.net/', 'Lost-Oasis'),
    array('http://www.mageialinux-online.org/', 'MLO'),
    array('http://nfrance.fr/', 'NFrance'),
    array('http://www.spreadshirt.com/', 'Spreadshirt'),
    array('http://zarb.org/', 'zarb.org'),
    
    // see mirrors.mageia.org
    array('http://www.upmc.fr/', 'Université Pierre et Marie Curie'),
    array('http://www.ibiblio.org/', 'The Public\'s Library and Digital Archive'),
    array('http://www.mandrivauser.de', 'Mandrivauser.de'),
    array('http://www.hs-esslingen.de/', 'Hochschule Esslingen'),
    array('http://uni-erlangen.de/', 'Universit&auml;t Erlangen-N&uuml;rnberg'),
    // mageia.supp.name?
    // fundawang.lcuc.org.cn?
    // ftp.LinuxCabal.org?
    // mageia.nautile.nc?
);


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
    $html = '<ul class="ty-ppl-list twocol">';
    foreach ($orgs as $o)
        $html .= sprintf('<li><a href="%s">%s</a> %s</li>', $o[0], $o[1], @$o[2]);
    $html .= '</ul>';

    return $html;
}

