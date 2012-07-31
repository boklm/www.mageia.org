<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex,nofollow,nosnippet">
    <title>www.mageia.org translation report</title>
    <style>
    html, body { margin: 0; padding: 0; font-family: Verdana, "Trebuchet MS", "Lucida Grande", "Lucida Sans", Verdana, Tahoma, Arial, sans-serif; }
    #page { padding: 1em; position: absolute; top: 128px; }
    th, td { padding: 0.3em; }
    th { text-align: left; }
    .ok a {
        text-decoration: none;
        color: inherit;
    }
    .ok { color: darkgreen; background: lightgreen; text-align: center; }
    .strings { background: orange; }
    .missing {}
    .strings, .missing { font-size: 80%; }
    .number, .strings, .missing { text-align: right; }
    .small { font-size: 80%; }
    td, th { vertical-align: top; font-family: Arial; font-size: 80%; }
    .lv { display: inline-block; -webkit-transform: rotate(-40deg); }
    </style>
</head>
<body class="contribute">
    <header id="mgnavt">
        <h1><a href="//www.mageia.org/">www.mageia.org</a> translation report</h1>
        <ul>
            <li><a href="https://wiki.mageia.org/en/Internationalisation_Team_(i18n)#Website_translation">i18n Web Wiki</a></li>
        </ul>
    </header>
    <div id="page">
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

    $languages      = array();

    foreach ($otherLangs as $l) {

        if (is_dir($f)) continue;

        $stats['en']['files'] += 1;

        $s = sprintf('<tr><th>%s<br><span style="font-weight: normal; font-size: smaller;">(%s)</span></th>',
            $langs[$l], $l);

        $cols = '';

        foreach ($enFiles as $f) {

            $langF = str_replace('.en.lang', '.' . $l . '.lang', $f);
            $langF = $l . substr($langF, 2);

            if (file_exists($langF)) {

                $stats[$l]['files'] += 1;

                $link = str_replace(array('en/', '.en.lang', 'index'), '', $f);
                $link = sprintf('<a href="//www.mageia.org/%s/%s" style="font-size: smaller; display: block;">check page</a>', $l, $link);

                $test = _lang_diff($f, $langF);

                if (count($test['missing']) === 0
                    && count($test['notrans']) === 0) {

                    $extra = null;
                    if (count($test['extra']) > 0) {
                        $extra = ' <span class="small">' . sprintf($diff_link, $f, $l) . '(+' . count($test['extra']) . ')</a></span>';
                    }

                    $cols .= sprintf('<td class="ok"><a href="%s" title="get a copy of the file">OK</a>%s%s</td>',
                        $langF, $extra, $link);

                    $done = $test['a'];
                }
                else {
                    // special case, en
                    if ($l == 'en') {
                        $cols .= '<td class="number">' . count($test['notrans']) . ' strings</td>';
                        $enStringsCount[$f] += $test['a'];
                        $done = $test['a'];

                    // regular case
                    } else {

                        $cols .= sprintf('<td class="strings">' . $diff_link,
                            $f, $l);

                        if (count($test['missing']) > 0) {
                            $cols .= count($test['missing']) . '&nbsp;missing<br>';
                        }
                        if (count($test['notrans']) > 0) {
                            $cols .= count($test['notrans']) . '&nbsp;untranslated<br>';
                        }
                        if (count($test['extra']) > 0) {
                            $cols .= count($test['extra']) . '&nbsp;extra';
                        }
                        $cols .= '</a>';
                        $cols .= $link . '</td>';
                        $done = $test['a'] - count($test['notrans']) - count($test['missing']);
                    }
                }
                $stats[$l]['strings'] += $done;

            } else {
                $stats[$l]['files'] += 0;
                $stats[$l]['strings'] += 0;
                $cols .= sprintf('<td class="missing"><a href="missing.php?s=%s&l=%s">add</a></td>',
                    $f, $l
                );
            }
        }

        $progress = floor($stats[$l]['strings'] / $stats['en']['strings'] * 100);
        $s .= sprintf(
            '<td class="number">%d%%<br><span style="font-size: smaller;">%d / %d</span></td>',
            $progress,
            $stats[$l]['strings'],
            $stats['en']['strings']
        );
        $s .= $cols;
        
        $s .= '</tr>';
        $languages[$progress . '-' . $l] = $s;
    }
    $en_language = array_shift($languages); // shift English for proper sorting
    krsort($languages, SORT_NUMERIC);
    array_unshift($languages, $en_language); // unshift English back
    $s = implode($languages);

    $thfiles = '<th>' . implode('</th><th>', $enFiles) . '</th>';
    $count   = count($otherLangs);

    echo <<<S
<table border="1">
<thead><tr>
    <th>{$count} languages</th>
    <th>Completeness</th>
    {$thfiles}
</tr></thead>
<tbody>
{$s}
</tbody>
</table>

<hr>
S;
?>
    </div>
    <script src="//nav.mageia.org/js/"></script>
</body>
</html>