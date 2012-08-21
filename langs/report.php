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
    .ok { color: darkgreen; background: lightgreen; }
    .ok, .strings, .missing { text-align: center; }
    .number { text-align: right; }
    .strings { background: orange; }
    .strings, .missing { font-size: 80%; }
    .small { font-size: 80%; }
    td, th { vertical-align: top; font-family: Arial; font-size: 80%; padding: 0.3em; }
    td { vertical-align: middle; }
    .lv { display: inline-block; -webkit-transform: rotate(-40deg); }
    .action { font-size: smaller; display: block; text-align: center;
        text-decoration: none; padding: 0.3em 0.5em; border-radius: 3px;
        background: rgba(0, 0, 0, 0.1); }
    .viewpage {}
    .addlang { color: #333; }
    </style>
</head>
<body class="contribute">
    <header id="mgnavt">
        <h1><a href="//www.mageia.org/">www.mageia.org</a> translation report</h1>
        <ul>
            <li><a href="https://wiki.mageia.org/en/Internationalisation_Team_(i18n)#Website_translation">i18n Web Wiki</a> (<a href="https://wiki.mageia.org/en/Internationalisation_Team_%28i18n%29#Special_cases_of_web_pages">Special cases for some web pages like downloads/get, constitution</a>)</li>
        </ul>
    </header>
    <div id="page">
    <?php
    /**
    */
    include 'lib.php';
    define('APP_ROOT', realpath(__DIR__ . '/..'));

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

        $s = sprintf('<tr><th>%s<br><span style="font-weight: normal; font-size: smaller;">%s</span></th>',
            $langs[$l], $l);

        $cols = '';

        foreach ($enFiles as $f) {

            $langF = str_replace('.en.lang', '.' . $l . '.lang', $f);
            $langF = $l . substr($langF, 2);
            $link = str_replace(array('en/', '.en.lang', 'index'), '', $f);
            $dest_l = sprintf('%s/%s/%s/%s', APP_ROOT, $l, $link, 'index.php');
            $dest_en = sprintf('%s/%s/%s/%s', APP_ROOT, 'en', $link, 'index.php');
            // if symlink e.g. does directly translated page exist?
            if ((realpath($dest_l) == realpath($dest_en))) {
                $page_not_linked = '';
                $old_page = '';
            } else {
                $page_not_linked = sprintf('<a href="/%s/%s">old page</a> still exists!', $l, $link);
                $old_page = sprintf('by recycling <a href="/%s/%s">old page</a>', $l, $link);
            }

            if (file_exists($langF)) {

                $stats[$l]['files'] += 1;

                $test = _lang_diff($f, $langF);
                $num_of_untranslated_strings = count($test['notrans']);

                if ($link == 'about/constitution') {
                    $dest_constitution = sprintf('%s/%s/%s/%s_%s.md', APP_ROOT, $l, 'about/constitution', 'mageia.org_statutes', $l);
                    if ($l == 'en') {
                        $strings_en_constitution = count(array_unique(file($dest_constitution)));
                    }
                    $test['a'] += $strings_en_constitution; // add aproximate number of strings from constitution to translate
                    if(!is_readable($dest_constitution) || $l == 'en') {
                        $num_of_untranslated_strings += $strings_en_constitution; // add constitution strings as not translated
                    }
                }

                if ($link == 'downloads/get') {
                    $link = sprintf('<a href="//www.mageia.org/%s/%s/?q=Mageia-2-dual-CD.iso&amp;d=1" class="action viewpage">view download OK page</a><span style="font-size: 3px; display: block;">&nbsp;</span><a href="//www.mageia.org/%s/%s/?q=Non_existing_file&amp;d=1" class="action viewpage">view non existing file page</a>', $l, $link, $l, $link);
                } else {
                    $link = sprintf('<a href="//www.mageia.org/%s/%s" class="action viewpage">view page</a>%s', $l, $link, $page_not_linked);
                }

                if (count($test['missing']) === 0
                    && $num_of_untranslated_strings === 0) {

                    $extra = null;
                    if (count($test['extra']) > 0) {
                        $extra = ' <span class="small">' . sprintf($diff_link, $f, $l) . '+' . count($test['extra']) . '</a></span>';
                    }

                    $cols .= sprintf('<td class="ok"><a href="%s" title="get a copy of the file">OK</a>%s%s</td>',
                        $langF, $extra, $link);

                    $done = $test['a'];
                } else {
                    // special case, en
                    if ($l == 'en') {
                        $cols .= '<td class="number">' . $num_of_untranslated_strings . ' strings</td>';
                        $enStringsCount[$f] += $test['a'];
                        $done = $test['a'];

                    // regular case
                    } else {

                        $cols .= sprintf('<td class="strings">' . $diff_link,
                            $f, $l);

                        if (count($test['missing']) > 0) {
                            $cols .= count($test['missing']) . '&nbsp;missing<br>';
                        }
                        if ($num_of_untranslated_strings > 0) {
                            $cols .= $num_of_untranslated_strings . '&nbsp;untranslated<br>';
                        }
                        if (count($test['extra']) > 0) {
                            $cols .= count($test['extra']) . '&nbsp;extra';
                        }
                        $cols .= '</a>';
                        $cols .= $link . '</td>';
                        $done = $test['a'] - $num_of_untranslated_strings - count($test['missing']);
                    }
                }
                $stats[$l]['strings'] += $done;

            } else {
                $stats[$l]['files']   += 0;
                $stats[$l]['strings'] += 0;

                $cols .= sprintf('<td class="missing"><a href="missing.php?s=%s&amp;l=%s" class="action addlang">add translation</a>%s</td>',
                    $f, $l, $old_page
                );
            }
        }

        $progress = floor($stats[$l]['strings'] / $stats['en']['strings'] * 100);
        // special case, en
        if ($l == 'en') {
            $s .= sprintf('<td class="number">%d strings</td>', $stats[$l]['strings']);
        // regular case
        } else {
            $s .= sprintf(
                '<td class="number">%d%%<br><span style="font-size: smaller;">%d / %d</span></td>',
                $progress,
                $stats[$l]['strings'],
                $stats['en']['strings']
            );
        }
        $s .= $cols;
        
        $s .= '</tr>';
        $languages[$progress . '-' . $l] = $s;
    }
    $en_language = array_shift($languages); // shift English for proper sorting
    krsort($languages, SORT_NUMERIC);
    array_unshift($languages, $en_language); // unshift English back
    $s = implode($languages);

    $enFiles = array_map(function ($e) { return str_replace('en/', '', $e); }, $enFiles);
    $thfiles = '<th>' . implode('</th><th>', $enFiles) . '</th>';
    $count   = count($otherLangs);

    echo <<<S
<table border="1">
<thead><tr>
    <th>{$count} languages</th>
    <th>Progress</th>
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