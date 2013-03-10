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

/**
 * Format numbers after ISO_31 recommandation,
 * using the comma as decimal sep.
 * See http://en.wikipedia.org/wiki/ISO_31-0#Numbers
 *
 * @param float  $n decimal number
 * @param char   $dec_sep
 *
 * @return string
*/
function _report_number_format($n, $dec_sep = ',')
{
    return str_replace('#', '&nbsp;', number_format($n, 2, $dec_sep, '#'));
}

$data   = file($source_csv);
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

$list  = array_fill(1, 12, 0);
$count = array_fill(1, 12, 0);
$tmp = $parsed['# Expenses details > ## More details'];
array_shift($tmp);
foreach ($tmp as $line) {
    $month          = date('n', strtotime($line[0]));
    $list[$month]  += $line[3]; // amount
    $count[$month] += 1;
}
$expenses_monthly_summary = array($list, $count);

$flow = array(
    'expenses'    => $list,
    'expenses_op' => $count,
    'revenue'     => null,
    'revenue_op'  => null
);

$list  = array();
$count = array();

// FIXME take ## Other revenues lines into account.
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

include 'template_lib.php';

$R = get_revenues($parsed['# Income details > ## Donations monthly summary'], $_months);
$expenses_total = array_sum($expenses_monthly_summary[0]);


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

                  // save monthly data
                  $arr[] = sprintf("['%s', %s, %s]", $_months[$month], str_replace(',', '.', $val), str_replace(',', '.', $flow['expenses'][$month]));

                  // sum quarterly data
                  $qRevenues += str_replace(',', '.', $val);
                  $qExpenses += str_replace(',', '.', $flow['expenses'][$month]);

                  // save quarterly data
                  if ($i % 3 == 0) {
                      $qarr[] = sprintf("['%s', %s, %s]", 'Q' . $j, $qRevenues, $qExpenses);

                      $qRevenues = 0;
                      $qExpenses = 0;
                      $j += 1;
                  }

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
    <header id="mgnavt">
        <h1><a href="../">Activity Reports</a> &raquo; <?php echo $year; ?> Financial Report</h1>
        <ul>
        </ul>
    </header>
    <style>
    #summary { width: 300px; float: left; text-align: left; background: #fff; border-bottom: 1px solid #ddd; }
    #report { text-align: left; width: 800px; float: left; border: 1px solid #ddd; border-top: 0; }
    #links { width: 150px; float: left; background: #fff; text-align: left; border-right: 1px solid #ddd; border-bottom: 1px solid #ddd; padding: 1em;}
    .accounts tr.total { font-weight: 600; }
    </style>
    <aside id="summary">
        <div class="para">
            <h2><?php echo $last_known_account_title?></h2>
            <p>All amounts are in EURO.</p>
            <p>Last updated on <?php echo $parsed['# Head']['last updated']; ?>.</p>
            <?php
            $k = sprintf('# Account balance on %d/12/31', $year);
            $k = array_key_exists($k, $parsed) ? $k : '# Account balance';
            $v = $parsed[$k];
            $s = '<table class="fr-table accounts">';
            foreach ($v as $k => $w) {
                $s .= sprintf('<tr class="%s"><td>%s</td><td class="money">%s</td></tr>',
                    str_replace(' ', '-', $k),
                    $k,
                    _report_number_format($w));
            }
            $s .= '</table>';
            echo $s;
        ?>
        </div>
        <div class="para">
            <?php echo $intro; ?>
            <p>Feel free to <a href="/en/contact/">contact us</a> regarding this report.</p>
        </div>
    </aside>

    <article id="report">
        <section class="para values" id="flow">
            <h2>Cash flow</h2>
            <div id="chart_div" style="width: 650px; height: 280px;"></div>
            <div id="chart3" style="width: 650px; height: 200px;"></div>
            <div id="chart2" style="width: 650px; height: 200px;"></div>
            <hr>
        </section>
        <section class="para values" id="inc-state">
            <h2>Income statement</h2>
            <!-- <mark>full income statement. For now, check details below.</mark>-->
            <table summary="Income statement" class="fr-table">
                <tbody>
                <tr>
                    <th>Revenues</th>
                    <td></td>
                    <td class="money"><?php echo _report_number_format($R['data']['total']);?></td>
                </tr>
                <tr>
                    <th>Expenses</th>
                    <td class="money"><?php echo _report_number_format($expenses_total);?></td>
                    <td></td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                <?php
                $result = $R['data']['total'] - $expenses_total;
                if ($result > 0):
                ?>
                    <td>Net Income</td>
                    <td></td>
                    <td class="money"><?php echo _report_number_format($result); ?></td>
                <?php else: ?>
                    <td>Net Loss</td>
                    <td class="money"><?php echo _report_number_format(-$result); ?></td>
                    <td></td>
                <?php endif; ?>
                </tr>
                </tfoot>
            </table>
        </section>
        <hr>
        <!--
        <section class="para values" id="balance">
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
                        $v = is_numeric($v) ? _report_number_format($v) : $v;
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
                        $v = is_numeric($v) ? _report_number_format($v) : $v;
                        $s .= sprintf('<tr><td>%s</td><td class="money">%s</td></tr>', $k, $v);
                    }
                    echo $s;
                    ?>
                    </table>
                </td></tr></tbody>
                <tfoot><tr><td>Total Assets</td><td></td>
                    <td>Total Liabilities</td><td></td></tr></tfoot>
            </table>
        </section>
        <hr>
        -->
        <section class="para values" id="expenses">
            <h2>Expenses</h2>
            <?php $E = get_expenses($parsed['# Expenses details > ## More details']); echo $E['html']; ?>
        </section>
        <hr>
        <section class="para values" id="revenues">
            <h2>Income, donations</h2>
            <?php echo $R['html']; ?>
        </section>
        <p class="para"><a href="#top">Return to top</a></p>
    </article>
    
    <nav id="links">
        <ul class="hl">
            <li><a href="#flow">Cash flow</a></li>
            <li><a href="#inc-state">Income statement</a></li>
            <li><a href="#balance">Balance sheet</a></li>
            <li><a href="#expenses">Expenses</a></li>
            <li><a href="#revenues">Revenues</a></li>
    </nav>
</body>
</html>
