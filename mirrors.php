<?php
/**
*/

// update this list from mirrors.mageia.org
/* @fixme note to self: brains! */
$mirrors = array(
    'China' => array(
        'Beijing' => array(
            'http://fundawang.lcuc.org.cn/mageia/'
        )
    ),
    'Czech Republic' => array(
        'Praha' =>  array('http://mageia.supp.name/')
    ),
    'Deutschland' => array(
        'Erfurt' => array(
            'http://ftp.mandrivauser.de/mirrors/Mageia/',
            'ftp://ftp.mandrivauser.de/mirrors/Mageia/'
        ),
        'Erlangen' => array(
            'http://ftp.uni-erlangen.de/mirrors/Mageia/',
            'ftp://ftp.uni-erlangen.de/mirrors/Mageia/'
        ),
        'Esslingen' => array(
            'http://ftp-stud.hs-esslingen.de/pub/Mirrors/Mageia/',
            'ftp://ftp-stud.hs-esslingen.de/pub/Mirrors/Mageia/'
        )
    ),
    'France' => array(
        'Paris' => array(
            'http://distrib-coffee.ipsl.jussieu.fr/pub/linux/Mageia/',
            'ftp://distrib-coffee.ipsl.jussieu.fr/pub/linux/Mageia/'
        )
    ),
    'Schweitz' => array(
        'Lucern' => array(
            'ftp://ftp.LinuxCabal.org/pub/mirrors/Mageia/'
        )
    ),
    'Nouvelle Calédonie' => array(
        'Nouméa' => array(
            'http://mageia.nautile.nc/mageia/'
        )
    ),
    'USA' => array(
        'Durham' => array(
            'ftp://distro.ibiblio.org/pub/linux/distributions/mageia/',
            'http://distro.ibiblio.org/pub/linux/distributions/mageia/'
        )
    )
);

// update this list 
$headers = array(
    'en' => array('Location', 'Protocol', 'Server'),
    'de' => array('Ort', 'Protokoll', 'Server'),
    'el' => array('Τοποθεσία', 'Πρωτόκολλο', 'Εξυπηρετητής'),
    'et' => array('Asukoht', 'Protokoll', 'Serveur'),
    'fr' => array('Emplacement', 'Protocole', 'Serveur'),
    'it' => array('Posizione', 'Protocollo', 'Server'),
    'pl' => array('Położenie', 'Protokół', 'Serwer'),
    'pt' => array('Localização', 'Protocolo', 'Servidor'),
    'ro' => array('Locație', 'Protocol', 'Server'),
    'ru' => array('Расположение', 'Протокол', 'Сервер'),
    'tr' => array('Yer', 'Protokol', 'Sunucu'),
    'zh-tw' => array('位置', '協定', '伺服器'),
    
);
$hl = array_key_exists($locale, $headers) ? $locale : 'en';

$s = '';
foreach ($mirrors as $country => $cities):
    $s_cities = '';
    $rowspan = 0;
    foreach ($cities as $city => $servers):
        $s_mirrors = '';
        foreach ($servers as $url):
            $pu = parse_url($url);
            $s_mirrors .= sprintf('<td>%s</td><td><a href="%s%s">%s</a></td></tr>',
                strtoupper($pu['scheme']),
                $url, 'iso/cauldron/', $pu['host']);
        endforeach;
        $s_cities .= sprintf('<td class="city" rowspan="%d">%s</td>',
            count($servers), $city) . $s_mirrors;
        
        $rowspan += count($servers);
    endforeach;
    
    $s .= sprintf('<tr><td class="country" rowspan="%d">%s</td>',
        $rowspan, $country) . $s_cities;
endforeach;

$th = array('<thead>', '<tr>',
    sprintf('<th colspan="2">%s</th><th>%s</th><th>%s</th>',
        $headers[$hl][0],
        $headers[$hl][1],
        $headers[$hl][2]),
    '</tr>', '</thead>');

echo '<br /><table id="dl-table">', implode($th), '<tbody>';
echo $s;
echo '</tbody></table>';

