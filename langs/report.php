<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex,nofollow,nosnippet">
    <title>www.mageia.org translation report</title>
    <style>
    .ok a,
    .strings a,
    .missing a {
        text-decoration: none;
        color: inherit;
    }
    .ok { color: darkgreen; background: lightgreen; text-align: center; }
    .strings { background: orange; }
    .missing { background: darkorange; }
    .strings, .missing { font-size: 80%; }
    .number, .strings, .missing { text-align: right; }
    .small { font-size: 80%; }
    
    </style>
</head>
<body>
    <h1><a href="//www.mageia.org/">www.mageia.org</a> translation report</h1>
    <ul>
        <li>TODO article/link on the Wiki: How to translate this Web site?</li>
    </ul>
    <hr>
    <h2>Report</h2>
    <?php
    /**
    */
    include 'lib.php';

    $enFiles    = get_lang_references();
    $otherLangs = get_other_langs();
    
    $enStringsCount = array();
    $report         = array();
    $stats          = array();
    
    $diff_link      = '<a href="diff.php?s=%s&l=%s" title="see detailed diff">';

    $s = '';
    foreach ($enFiles as $f) {

        if (is_dir($f)) continue;
        
        $stats['en']['files'] += 1;

        $s .= sprintf('<tr><td><a href="%s">%s</a></td>',
            $f, $f);

        foreach ($otherLangs as $l) {

            $langF = str_replace('.en.lang', '.' . $l . '.lang', $f);
            $langF = $l . substr($langF, 2);

            if (file_exists($langF)) {

                $stats[$l]['files'] += 1;

                $test = _lang_diff($f, $langF);

                if (count($test['missing']) === 0
                    && count($test['notrans']) === 0) {

                    $extra = null;
                    if (count($test['extra']) > 0) {
                        $extra = '<span class="small">' . sprintf($diff_link, $f, $l) . '(+' . count($test['extra']) . ')</a></span>';
                    }

                    $s .= sprintf('<td class="ok"><a href="%s" title="get a copy of the file">OK</a>%s</td>',
                        $langF, $extra);
                }
                else {
                    // special case, en
                    if ($l == 'en') {
                        $s .= '<td class="number">' . count($test['notrans']) . ' strings</td>';
                        $enStringsCount[$f] += $test['a'];

                    // regular case
                    } else {

                        $s .= sprintf('<td class="strings">' . $diff_link,
                            $f, $l);

                        if (count($test['missing']) > 0) {
                            $s .= count($test['missing']) . ' missing';
                        }
                        if (count($test['notrans']) > 0) {
                            $s .= count($test['notrans']) . ' untranslated';
                        }
                        $s .= '</a></td>';
                    }
                }
                $stats[$l]['strings'] += $test['b'];

            } else {
                $stats[$l]['files'] += 0;
                $stats[$l]['strings'] += 0;
                $s .= '<td class="missing">missing</td>';
            }
        }
        $s .= '</tr>';
    }

    $th = '';
    array_shift($otherLangs);
    foreach ($otherLangs as $l) {
        $th .= '<th>' . $langs[$l] . '<br>' . $l . '</th>';
    }
    
    $ths = '';
    foreach ($stats as $l => $data) {
        if ($l == 'en') continue;
        $ths .= '<th>' . $data['files'] . ' / ' . $data['strings'] . '<br>' . round($data['strings'] / $stats['en']['strings'] * 100). '%</th>';
    }

    echo <<<S
<table border="1">
<thead>
    <tr>
        <th colspan="2">English</th>
        {$th}
        <th><a href="">How to add a new language</a></th>
    </tr>
    <tr>
        <th colspan="2">Reference</th>
    </tr>
    <tr>
        <th>{$stats['en']['files']} files</th>
        <th col="scol">{$stats['en']['strings']} strings</th>
        {$ths}
    </tr>
</thead>
<tbody>
{$s}
</tbody>
</table>

<hr>
S;
?>
</body>
</html>