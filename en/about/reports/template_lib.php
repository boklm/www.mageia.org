<?php


function get_expenses($v)
{
    $html = '<div id="expenses-cats-pie"></div>';
    $html .= '<table class="fr-table">';

    $line = array_shift($v);
    $sums = array();

    $html .= sprintf('<thead><tr><th>%s</th><th>%s</th><th>%s</th><th class="money">%s</th></tr></thead><tbody>',
        $line[0], $line[1],
        $line[2], $line[3],
        $line[4],
        $line[5]);

    foreach ($v as $line) {
        if (count($line) < 2)
            continue;

        $html .= sprintf('<tr><td>%s</td><td>%s</td><td>%s</td><td class="money">%s</td></tr>',
            date('Y-M-d', strtotime($line[0])), $line[1],
            $line[2], 
            number_format(str_replace(',', '.', $line[3]), 2, '.', ','));

        $cat = explode(':', $line[1]);
        $sums[$cat[0]] += $line[3];
        $sums['total'] += $line[3];
    }

    $html .= '</tbody>
    <tfoot><tr>
        <td colspan="3">Total:</td>
        <td class="money">' . number_format(str_replace(',', '.', $sums['total']), 2, '.', ',') . '</td>
    </tr></tfoot>
</table>';

    unset($sums['total']);
    arsort($sums);
    foreach ($sums as $k => $v)
        $sums[$k] = "['{$k}', $v]";

    $values = implode(', ', $sums);
    $html .= <<<H
<script type="text/javascript">
    google.setOnLoadCallback(drawChartExpenses);
    function drawChartExpenses() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Source');
        data.addColumn('number', 'Amount');
        data.addRows([{$values}]);
        var options = {'title':'Expenses by category',
           'width':400,
           'height':300};

        var chart = new google.visualization.PieChart(document.getElementById('expenses-cats-pie'));
        chart.draw(data, options);
    }
</script>
H;

    return array('html' => $html);
}

/**
 * @param string $v
 *
 * @return array('html' => string, 'data' => mixed)
*/
function get_revenues($v)
{
    global $_months;

    $html = '<div id="income-pie"></div>';
    $html .= '<table class="fr-table">';

    $line = array_shift($v);
    $html .= sprintf('<thead><tr><th>%s</th><th>%s</th>
        <th>%s</th><th>%s</th><th>%s</th><th>%s</th>
        <th>%s</th><th>average</th></tr></thead>',
        $line[0], $line[1], $line[2],
        $line[3],
        $line[4],
        $line[5], $line[6]);

    $html .= '<tbody>';

    $sums = array();

    foreach ($v as $line) {
        $html .= sprintf('<tr><td>%s</td><td>%s</td>
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
    $html .= '</tbody><tfoot>';
    $html .= sprintf('<tr><th>Total</th>
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
    $total_revenues = $sums['total'];
    $html .= '</tfoot></table>';
    
    $html .= <<<S
    <script type="text/javascript">
          google.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Source');
            data.addColumn('number', 'Amount');
            data.addRows([
              ['Paypal', {$sums['paypal']}],
              ['Bank transfer', {$sums['xfer']}],
              ['Check', {$sums['check']}],
              ['Cash', {$sums['cash']}],
            ]);

            var options = {'title':'Donations by source',
                           'width':400,
                           'height':300};

            var chart = new google.visualization.PieChart(document.getElementById('income-pie'));
            chart.draw(data, options);
          }
        </script>
S;

    return array('html' => $html, 'data' => array('total' => $total_revenues));
}