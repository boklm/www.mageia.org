<?php
/**
 * Template for financial reports.
 * See 201?/index.php scripts including it.
 *
 * TODO rewrite this properly, of course. Still use a CSV? Use a clean template anyway.
*/
$_months = array(
    1 => 'January',   2 => 'February',  3 => 'March',
    4 => 'April',     5 => 'May',       6 => 'June',
    7 => 'July',      8 => 'August',    9 => 'September',
    10 => 'October', 11 => 'November', 12 => 'December'
);

$data = file($source_csv);
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

$list  = array();
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
    <title>Mageia.org <?php echo $year; ?> Financial Report</title>
    <meta name="description" content="Financial report for Mageia.org activity in <?php echo $year?>">
    <meta name="keywords" content="<?php echo $page_kw;?>">
    <meta name="author" content="Mageia.org">
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
              $i = 1;
              $j = 1;
              $qarr = array();
              foreach ($flow['revenue'] as $month => $val) {

                  $arr[] = sprintf("['%s', %s, %s]", $_months[$month], str_replace(',', '.', $val), str_replace(',', '.', $flow['expenses'][$month]));

                  if ($i == 4) {
                      $qarr[] = sprintf("['%s', %s, %s]", 'Q' . $j, $qRevenues, $qExpenses);
                      $qRevenues = 0;
                      $qExpenses = 0;
                      $i = 1;
                      $j += 1;
                  }

                  $qRevenues += str_replace(',', '.', $val);
                  $qExpenses += str_replace(',', '.', $flow['expenses'][$month]);

                  $i += 1;
              }
              echo implode(', ', $arr);
              ?>
            ]);

            var options = {
              title : 'Monthly Cash Flow',
              vAxis: {title: "Amount (€)"},
              hAxis: {title: "<?php echo $year?>"},
              seriesType: "bars",
            };

            var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
            chart.draw(data, options);
            
            var data2 = google.visualization.arrayToDataTable([
                ['Year', 'Revenues', 'Expenses'],
                <?php echo $js_data2_values; ?>
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
                hAxis: {title: "<?php echo $year?>"},
                seriesType: "bars"
            };
            
            var chart3 = new google.visualization.ComboChart(document.getElementById('chart3'));
            chart3.draw(data3, options3);
          }
          google.setOnLoadCallback(drawVisualization);
        </script>
</head>
<body class="about reports">
    <?php include '../../../../langs.php'; ?>
    <h1 id="mgnavt"><a href="../">Activity Reports</a> &raquo; <?php echo $year; ?> Financial Report</h1>
    <div id="doc4" class="yui-t7">
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para values">
                    <?php echo $intro;?>

                    <p>Last updated on <?php echo $parsed['# Head']['last updated']; ?>.</p>
                    <p>All amounts are in EURO.</p>
                    <hr>
                    <h2><?php echo $last_known_account_title?></h2>
                    <?php
                    $k = sprintf('# Account balance on %d/12/31', $year);
                    $k = array_key_exists($k, $parsed) ? $k : '# Account balance';
                    $v = $parsed[$k];
                    $s = '<table class="fr-table">';
                    foreach ($v as $k => $w) {
                        $s .= sprintf('<tr><td>%s</td><td class="money">%s</td></tr>',
                            $k, number_format(str_replace(',', '.', $w), 2, '.', ','));
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
                    <table summary="Income statement" class="fr-table">
                        <thead><tr><th colspan="2">Revenues</th>
                            <th colspan="2">Expenses</th></tr></thead>
                        <tbody>
                        <tr><td colspan="2">
                            <table class="fr-table">
                            <?php
                            $s = '';
                            foreach ($parsed['# Income Statement > ## Revenues'] as $k => $v) {
                                if (in_array($k, array('Total of revenues', 'Net Loss')))
                                    continue;

                                $s .= sprintf('<tr><td>%s</td><td class="money">%s</td></tr>',
                                    $k, number_format(str_replace(',', '.', $v), 2, '.', ','));
                            }
                            echo $s;
                            ?>
                            </table>
                        </td><td colspan="2">
                            <table class="fr-table">
                            <?php
                            $s = '';
                            foreach ($parsed['# Income Statement > ## Expenses'] as $k => $v) {
                                if (in_array($k, array('Total of expenses', 'Net Income')))
                                    continue;

                                $s .= sprintf('<tr><td>%s</td><td class="money">%s</td></tr>',
                                    $k, number_format(str_replace(',', '.', $v), 2, '.', ','));
                            }
                            echo $s;
                            ?>
                            </table>
                        </td></tr>
                        </tbody>
                        <tfoot style="font-weight: bold;">
                        <tr><td>Total of revenues</td>
                            <td class="money"><?php echo number_format(str_replace(',', '.', $parsed['# Income Statement > ## Revenues']['Total of revenues']), 2, '.', ','); ?></td>
                            <td>Total of expenses</td>
                            <td class="money"><?php echo number_format(str_replace(',', '.', $parsed['# Income Statement > ## Expenses']['Total of expenses']), 2, '.', ','); ?></td>
                            </tr>
                        <tr><td colspan="2"></td>
                            <td>Net Income</td>
                            <td class="money"><?php echo number_format(str_replace(',', '.', $parsed['# Income Statement > ## Expenses']['Net Income']), 2, '.', ','); ?></td>
                            </tr>
                        </tfoot>
                    </table>
                    
                    <hr>

                    <h2>Balance sheet</h2>
                    <table class="fr-table">
                        <thead><tr><th colspan="2">Assets</th>
                            <th colspan="2">Liabilities</th></tr></thead>
                        <tbody><tr><td colspan="2">
                            <table class="fr-table">
                            <?php
                            $s = '';
                            foreach ($parsed['# Balance Sheet (incomplete) > ## Assets'] as $k => $v) {
                                $v = str_replace(',', '.', $v);
                                $v = is_numeric($v) ? number_format($v, 2, '.', ',') : $v;
                                $s .= sprintf('<tr><td>%s</td><td class="money">%s</td></tr>', $k, $v);
                            }
                            echo $s;
                            ?>
                            </table>
                        </td><td colspan="2">
                            <table class="fr-table">
                            <?php
                            $s = '';
                            foreach ($parsed['# Balance Sheet (incomplete) > ## Liabilities'] as $k => $v) {
                                $v = str_replace(',', '.', $v);
                                $v = is_numeric($v) ? number_format($v, 2, '.', ',') : $v;
                                $s .= sprintf('<tr><td>%s</td><td class="money">%s</td></tr>', $k, $v);
                            }
                            echo $s;
                            ?>
                            </table>
                        </td></tr></tbody>
                        <tfoot><tr><td>Total Assets</td><td></td>
                            <td>Total Liabilities</td><td></td></tr></tfoot>
                    </table>
                    <hr>

                    <h2>Expenses</h2>
                    
                    <?php
                    
                    $v = $parsed['# Expenses details > ## Monthly summary'];
                    echo '<table class="fr-table">';
                    $s = array_shift($v);
                    echo vsprintf('<thead><tr><th>%s</th><th>%s</th><th>%s</th><th>average/expense</th></tr></thead><tbody>',
                        $s);
                    $sums = array();
                    foreach ($v as $line) {
                        if ($line[0] == 'total')
                            continue;

                        echo sprintf('<tr><td>%s</td><td class="money">%s</td><td class="money">%s</td><td class="money">%s</td></tr>',
                            $_months[$line[0]],
                            $line[1],
                            number_format(str_replace(',', '.', $line[2]), 2, '.', ','),
                            $line[1] > 0 ? number_format(str_replace(',', '.', $line[2] / $line[1]), 2, '.', ',') : ''
                        );
                    
                        $sums['count'] += $line[1];
                        $sums['total'] += $line[2];
                    }
                    echo '</tbody><tfoot>';
                    echo sprintf('<tr><th>Total</th>
                        <td class="money">%s</td>
                        <td class="money">%s</td>
                        <td class="money">%s</td></tr>',
                        $sums['count'],
                        number_format(str_replace(',', '.', $sums['total']), 2, '.', ','),
                        $sums['count'] > 0 ? number_format(str_replace(',', '.', $sums['total'] / $sums['count']), 2, '.', ',') : ''
                    );
                    echo '</tfoot></table>';
                    ?>
                    
                    <h3>Details</h3>
                    
                    <table class="fr-table">
                    <?php
                    $v = $parsed['# Expenses details > ## More details'];
                    $line = array_shift($v);
                    echo sprintf('<thead><tr><th>%s</th><th>%s</th><th>%s</th><th>%s</th><th>%s</th><th class="money">%s</th></tr></thead><tbody>',
                        $line[0], $line[1],
                        $line[2], $line[3],
                        $line[4],
                        $line[5]);

                    foreach ($v as $line) {
                        if (count($line) < 2)
                            continue;
                        echo sprintf('<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td class="money">%s</td></tr>',
                            $line[0], $line[1],
                            $line[2], $line[3],
                            $line[4],
                            number_format(str_replace(',', '.', $line[5]), 2, '.', ','));
                    }
                    ?>
                    </tbody>
                    </table>
                    <hr>
                    <h2>Income, donations</h2>
                    <?php
                    
                    $v = $parsed['# Income details > ## Donations monthly summary'];
                    echo '<table class="fr-table">';
                    $line = array_shift($v);
                    echo sprintf('<thead><tr><th>%s</th><th>%s</th>
                        <th>%s</th><th>%s</th><th>%s</th><th>%s</th>
                        <th>%s</th><th>Average per donation</tr></thead>',
                        $line[0], $line[1], $line[2],
                        $line[3],
                        $line[4],
                        $line[5], $line[6]);

                    echo '<tbody>';
                    
                    $sums = array();

                    foreach ($v as $line) {
                        echo sprintf('<tr><td>%s</td><td>%s</td>
                            <td class="money">%s</td>
                            <td class="money">%s</td>
                            <td class="money">%s</td>
                            <td class="money">%s</td>
                            <td class="money">%s</td>
                            <td class="money">%s</td></tr>',
                            $_months[$line[0]],
                            $line[1],
                            number_format(str_replace(',', '.', $line[2]), 2, '.', ','),
                            number_format(str_replace(',', '.', $line[3]), 2, '.', ','),
                            number_format(str_replace(',', '.', $line[4]), 2, '.', ','),
                            number_format(str_replace(',', '.', $line[5]), 2, '.', ','),
                            number_format(str_replace(',', '.', $line[6]), 2, '.', ','),
                            $line[1] > 0 ? number_format(str_replace(',', '.', $line[2] / $line[1]), 2, '.', ',') : ''
                        );

                        $sums['count'] += $line[1];
                        $sums['total'] += $line[2];
                        $sums['check'] += $line[3];
                        $sums['xfer']  += $line[4];
                        $sums['paypal'] += $line[5];
                        $sums['cash']  += $line[6];
                    }
                    echo '</tbody><tfoot>';
                    echo sprintf('<tr><th>Total</th>
                        <td class="money">%s</td>
                        <td class="money">%s</td>
                        <td class="money">%s</td>
                        <td class="money">%s</td>
                        <td class="money">%s</td>
                        <td class="money">%s</td>
                        <td class="money">%s</td></tr>',
                        $sums['count'],
                        number_format(str_replace(',', '.', $sums['total']), 2, '.', ','),
                        number_format(str_replace(',', '.', $sums['check']), 2, '.', ','),
                        number_format(str_replace(',', '.', $sums['xfer']), 2, '.', ','),
                        number_format(str_replace(',', '.', $sums['paypal']), 2, '.', ','),
                        number_format(str_replace(',', '.', $sums['cash']), 2, '.', ','),
                        $sums['count'] > 0 ? number_format(str_replace(',', '.', $sums['total'] / $sums['count']), 2, '.', ',') : ''
                    );
                    echo '</tfoot></table>';

                    ?>

                    <hr>
                    <p>Feel free to <a href="/en/contact/">contact us</a> regarding this report.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
