<?php

$_months = array(
    1 => 'January',   2 => 'February',  3 => 'March',
    4 => 'April',     5 => 'May',       6 => 'June',
    7 => 'July',      8 => 'August',    9 => 'September',
    10 => 'October', 11 => 'November', 12 => 'December'
);

$data = file('mageia-financial-report-2011.csv');
$parsed = array();
foreach ($data as $l) {
    if (trim($l) == ',,,,,,')
        continue;

    $l = str_getcsv(str_replace(array(',,,', ",\n"), '', $l));
    if (substr($l[0], 0, 2) == '# ') {
        $tag = $l[0];
        $parent = $tag;
    } elseif (substr($l[0], 0, 2) == '##') {
        $tag = $parent . ' > ' . $l[0];
    } else {
        $parsed[$tag][] = $l;
    }
}

foreach ($parsed as $tag => $values) {
    $val2 = array();
    $tag2  = strtolower($tag);
    $teststr = strlen($tag) > 12 ? substr($tag2, 0, 13) : null;
    foreach ($values as $v) {
        if ($tag2 == "# head"
            || $teststr == "# account bal"
            || $teststr == "# income stat"
            || $teststr == "# balance she"
            || $tag2 == '## expenses'
            || $tag2 == '## revenues'
            || $tag2 == '## liabilities'
            || $tag2 == '## assets') {
            $val2[$v[0]] = $v[1];
        } else {
            $val2[] = $v;
        }
    }

    $parsed[$tag] = $val2;
}
$flow = array();

$list = array();
$count = array();
foreach ($parsed['# Expenses details > ## Monthly summary'] as $line) {
    $list[] = $line[2];
    $count[] = $line[1];
}
unset($list[0]);
unset($list[13]);
unset($count[0]);
unset($count[13]);

$flow = array(
    'expenses'    => $list,
    'expenses_op' => $count,
    'revenue'     => null,
    'revenue_op'  => null
);

$list = array();
$count = array();
foreach ($parsed['# Income details > ## Donations monthly summary'] as $line) {
    $list[]  = $line[2];
    $count[] = $line[1];
}
unset($list[0]);
unset($list[13]);
unset($count[0]);
unset($count[13]);

$flow['revenue'] = $list;
$flow['revenue_op'] = $count;


?><!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <title>Mageia 2011 Financial Report</title>
    <meta name="description" content="Financial report for Mageia.org activity in 2011.">
    <meta name="keywords" content="mageia, financial report, 2011, revenues, expenses">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <?php include '../../../../analytics.php'; ?>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript">
          google.load('visualization', '1', {packages: ['corechart']});
        </script>
        <script type="text/javascript">
          function drawVisualization() {
            // Some raw data (not necessarily accurate)
            var data = google.visualization.arrayToDataTable([
              ['Month', 'Revenues', 'Expenses'],
              <?php
              $arr = array();
              $qRevenues = 0;
              $qExpenses = 0;
              $i = 0;
              $j = 0;
              $qarr = array();
              foreach ($flow['revenue'] as $month => $val) {
                  $arr[] = sprintf("['%s', %s, %s]", $_months[$month], str_replace(',', '.', $val), str_replace(',', '.', $flow['expenses'][$month]));
                  $i += 1;
                  if ($i == 3) {
                      $j += 1;
                      $qarr[] = sprintf("['%s', %s, %s]", 'Q' . $j, $qRevenues, $qExpenses);
                      $qRevenues = 0;
                      $qExpenses = 0;
                      $i = 0;
                  } else {
                      $qRevenues += str_replace(',', '.', $val);
                      $qExpenses += str_replace(',', '.', $flow['expenses'][$month]);
                  }
              }
              echo implode(', ', $arr);
              ?>
            ]);

            var options = {
              title : 'Monthly Cash Flow',
              vAxis: {title: "Amount (€)"},
              hAxis: {title: "2011"},
              seriesType: "bars",
            };

            var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
            chart.draw(data, options);
            
            var data2 = google.visualization.arrayToDataTable([
                ['Year', 'Revenues', 'Expenses'],
                ['2010', 8801.66, 1277.77],
                ['2011', 11154.02, 8327.25]
            ]);
            var options2 = {
                title : 'Yearly Cash Flow',
                vAxis: {title: "Amount (€)"},
                hAxis: {title: "Years"},
                seriesType: "bars"
            };
            
            var chart2 = new google.visualization.ComboChart(document.getElementById('chart2'));
            chart2.draw(data2, options2);

            var data3 = google.visualization.arrayToDataTable([
                ['Quarter', 'Revenues', 'Expenses'],
                <?php echo implode(', ', $qarr); ?>
            ]);
            var options3 = {
                title : 'Quarterly Cash Flow',
                vAxis: {title: "Amount (€)"},
                hAxis: {title: "2011"},
                seriesType: "bars"
            };
            
            var chart3 = new google.visualization.ComboChart(document.getElementById('chart3'));
            chart3.draw(data3, options3);
          }
          google.setOnLoadCallback(drawVisualization);
        </script>
</head>
<body>
    <?php include '../../../../langs.php'; ?>
    
    <div id="doc4" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/en/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh">2011 Financial Report</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para values">
                    <p>Here is our financial report for 2011.</p>

                    <ul>
                        <li>Read the <a href="mageia_rapport_financier_2011_fr.pdf" hreflang="fr">French, original report</a>
                            or the <a href="mageia_financial_report_2011_en.pdf" hreflang="en">English translation</a>
                            (both are PDF documents).</li>
                        <li>Get the <a href="mageia-financial-report-2011.csv">raw report data</a>
                            (CSV document, licensed under <a href="http://opendatacommons.org/licenses/odbl/1.0/">ODbL 1.0</a>).
                            The rest of this page is built from this data.</li>
                    </ul>

                    <p>Last updated on <?php echo $parsed['# Head']['last updated']; ?>.</p>

                    <hr>
                    <h2>Account status on December 31<sup>st</sup>, 2011</h2>
                    <?php
                    $v = $parsed['# Account balance on 2011/12/31'];
                    echo '<table class="fr-table">';
                    foreach ($v as $k => $w) {
                        $s .= sprintf('<tr><td>%s</td><td class="money"><span class="currency">EUR</span>&nbsp;%s</td></tr>', $k, $w);
                    }
                    $s .= '</table>';
                    echo $s;
                    ?>

                    <hr>

                    <h2>Cash flow</h2>
                    <div id="chart_div" style="width: 650px; height: 280px;"></div>
                    <div id="chart3" style="width: 650px; height: 200px;"></div>
                    <div id="chart2" style="width: 650px; height: 200px;"></div>
                    <hr>

                    <h2>Income statement</h2>
                    <table>
                        <tr><th>Revenues</th><th>Expenses</th></tr>
                        <tr><td>
                            <table class="fr-table">
                            <?php
                            $s = '';
                            foreach ($parsed['# Income Statement > ## Revenues'] as $k => $v)
                                $s .= sprintf('<tr><td>%s</td><td class="money"><span class="currency">EUR</span>&nbsp;%s</td></tr>', $k, $v);
                            
                            echo $s;
                            ?>
                            </table>
                        </td><td>
                            <table class="fr-table">
                            <?php
                            $s = '';
                            foreach ($parsed['# Income Statement > ## Expenses'] as $k => $v)
                                $s .= sprintf('<tr><td>%s</td><td class="money"><span class="currency">EUR</span>&nbsp;%s</td></tr>', $k, $v);
                            
                            echo $s;
                            ?>
                            </table>
                        </td></tr>
                    </table>
                    
                    <hr>

                    <h2>Balance sheet</h2>
                    <table>
                        <tr><th>Revenues</th><th>Expenses</th></tr>
                        <tr><td>
                            <table>
                            <?php
                            $s = '';
                            foreach ($parsed['# Balance Sheet (incomplete) > ## Assets'] as $k => $v)
                                $s .= sprintf('<tr><td>%s</td><td>%s</td></tr>', $k, $v);
                            
                            echo $s;
                            ?>
                            </table>
                        </td><td>
                            <table>
                            <?php
                            $s = '';
                            foreach ($parsed['# Balance Sheet (incomplete) > ## Liabilities'] as $k => $v)
                                $s .= sprintf('<tr><td>%s</td><td>%s</td></tr>', $k, $v);
                            
                            echo $s;
                            ?>
                            </table>
                        </td></tr>
                    </table>
                    <hr>

                    <h2>Expenses</h2>
                    
                    <?php
                    
                    $v = $parsed['# Expenses details > ## Monthly summary'];
                    echo '<table class="fr-table">';
                    foreach ($v as $line) {
                        echo sprintf('<tr><td>%s</td><td>%s</td><td class="money"><span class="currency">EUR</span>&nbsp;%s</td></tr>',
                            $_months[$line[0]], $line[1], $line[2]);
                    }
                    echo '</table>';
                    ?>
                    
                    <h3>Details</h3>
                    
                    <table class="fr-table">
                    <?php
                    $v = $parsed['# Expenses details > ## More details'];
                    foreach ($v as $line) {
                        echo sprintf('<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td class="money"><span class="currency">EUR</span>&nbsp;%s</td></tr>',
                            $line[0], $line[1],
                            $line[2], $line[3],
                            $line[4],
                            $line[5]);
                    }
                    ?>
                    </table>
                    <hr>
                    <h2>Income, donations</h2>
                    <?php
                    
                    $v = $parsed['# Income details > ## Donations monthly summary'];
                    echo '<table class="fr-table">';
                    foreach ($v as $line) {
                        echo sprintf('<tr><td>%s</td><td>%s</td>
                            <td class="money"><span class="currency">EUR</span>&nbsp;%s</td>
                            <td class="money"><span class="currency">EUR</span>&nbsp;%s</td>
                            <td class="money"><span class="currency">EUR</span>&nbsp;%s</td>
                            <td class="money"><span class="currency">EUR</span>&nbsp;%s</td>
                            <td class="money"><span class="currency">EUR</span>&nbsp;%s</td></tr>',
                            $_months[$line[0]], $line[1], $line[2],
                            $line[3],
                            $line[4],
                            $line[5], $line[6]);
                    }
                    echo '</table>';
                    ?>

                    <hr>
                    <p>Feel free to <a href="/en/contact/">contact us</a> regarding this report.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
