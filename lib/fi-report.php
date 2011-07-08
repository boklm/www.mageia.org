<?php
/**
*/

class Mageia_Financial_Report
{
    function __construct()
    {
        
    }
    
    /**
    */
    function build($files)
    {
        $i = new self;
        $i->report_file = $files['report'];
        $i->forecast_file = $files['forecast'];
        $i->accounts_file = $files['accounts'];
        
        $i->CUR = '<span style="color: #777; font-size: 80%%;">EUR</span>';

        return $i;
    }
    
    /**
    */
    function html_summary()
    {
        $account2010 = 7523.96;
        $this->hAccount2010 = number_format($account2010, 2);
        $this->hAccountLeft = number_format($account2010 + $this->balance, 2);
        
        return <<<S
        <table class="fr-table">
        <tr>
            <td>Outstanding amount of <a href="../2010/">2010</a></td>
            <td class="money">{$this->CUR}&nbsp;{$this->hAccount2010}</td>
        </tr>
        <tr>
            <td colspan="3">Collected</td>
            <td class="money">{$this->CUR}&nbsp;{$this->hInTotal}</td>
        </tr>
        <tr>
            <td colspan="2">Spent</td>
            <td class="money">{$this->CUR}&nbsp;{$this->hOutTotal}</td>
        </tr>
        <tr>
            <td>Balance</td>
            <td class="money">{$this->CUR}&nbsp;{$this->hBalance}</td>
        </tr>
        <tr>
            <td>Remaining amount today</td>
            <td class="money">{$this->CUR}&nbsp;{$this->hAccountLeft}</td>
        </tr>
        </table>
S;
    }
    
    /**
    */
    function html_report()
    {
        $f = file($this->report_file);
        $hFileMTime = $this->html_source_file($this->report_file);
        
        $inTotal  = 0;
        $outTotal = 0;
        $hLines   = '';

        $line_tmpl = <<<S
        <tr>
            <td>%s</td>
            <td>%s</td>
            <td class="money">%s</td>
            <td class="money">%s</td>
        </tr>
S;
        $cat_tmpl = '<tr><td colspan="4"><em>%s</em></td></tr>';

        foreach ($f as $l)
        {
            $l = str_getcsv($l, ';');
            if ('cat' === trim($l[0])) {
                $hLines .= sprintf($cat_tmpl, $l[1]);
            }
            elseif ('' === trim($l[0])) {
                $hLines .= sprintf($line_tmpl,
                    $l[1], $l[2],
                    $l[3] != '' ? $this->CUR . '&nbsp;' . number_format($l[3], 2) : '',
                    $l[4] != '' ? $this->CUR . '&nbsp;' . number_format($l[4], 2) : '');

                $inTotal += $l[4];
                $outTotal += $l[3];
            }
        }
        $this->balance   = $balance = $inTotal - $outTotal;
        $this->hInTotal  = $hInTotal  = number_format($inTotal, 2);
        $this->hOutTotal = $hOutTotal = number_format($outTotal, 2);
        $this->hBalance  = $hBalance  = number_format($balance, 2);

        $s = <<<S
        <table class="fr-table"><thead>
            <tr><th>Date</th>
                <th>Transaction description</th>
                <th>Outgoing</th>
                <th>Incoming</th>
                </tr>
            </thead><tbody>
            {$hLines}
        <tr>
            <td colspan="2">Total</td>
            <td class="money">{$this->CUR}&nbsp;{$hOutTotal}</td>
            <td class="money">{$this->CUR}&nbsp;{$hInTotal}</td>
        </tr>
        <tr>
            <td colspan="2">Balance</td>
            <td class="money" colspan="2" style="text-align: center;">{$this->CUR}&nbsp;{$hBalance}</td>
        </tr>
        </tbody></table>
        {$hFileMTime}
S;
        return $s;
    }
    
    /**
    */
    function html_forecast()
    {
        $f = file($this->forecast_file);
        $hFileMTime = $this->html_source_file($this->forecast_file);

        $total     = 0;
        $doneTotal = 0;
        $hLines    = '';
        $CUR       = '<span style="color: #777; font-size: 80%%;">EUR</span>';

        $line_tmpl = <<<S
        <tr>
            <td>%s</td>
            <td class="money">{$CUR}&nbsp;%s</td>
            <td class="money">%d</td>
            <td class="money">%d</td>
            <td class="money">{$CUR}&nbsp;%s</td>
            <td>%s</td>
        </tr>
S;

        foreach ($f as $l)
        {
            $l = str_getcsv($l, ';');
            if ('' === trim($l[0])) {
                $subtotal = $l[2] * $l[3] * $l[4];
                $hLines .= sprintf($line_tmpl,
                    $l[1], number_format($l[2], 2), $l[3], $l[4], number_format($subtotal, 2), $l[6]);

                $total += $subtotal;
                if (strtolower($l[6]) != 'pending') {
                    $doneTotal += $subtotal;
                }
            }
        }

        $hTotal     = number_format($total, 2);
        $hDoneTotal = number_format($doneTotal, 2);
        $hProgress  = round($doneTotal / $total * 100, 2);

        $s = <<<S
            <table class="fr-table"><thead>
                <tr><th>Description of planned expenditure</th>
                    <th>Unit Price</th>
                    <th>Quantity</th>
                    <th>Recurrence</th>
                    <th>Total Price</th>
                    <th>Status</th></tr>
                </thead><tbody>
                {$hLines}
            <tr>
                <td colspan="4">Total forecasted</td>
                <td class="money">{$CUR}&nbsp;{$hTotal}</td>
                <td></td>
            </tr>
            <tr>
                <td colspan="4">Total done</td>
                <td class="money">{$CUR}&nbsp;{$hDoneTotal}</td>
                <td class="money">{$hProgress}%</td>
            </tr>
        </tbody></table>
        {$hFileMTime}
S;
        return $s;
    }
    
    /**
    */
    function html_accounts()
    {
        $f = file($this->accounts_file);
        $hFileMTime = $this->html_source_file($this->accounts_file);

        $total     = 0;
        $doneTotal = 0;
        $hLines    = '';
        $CUR       = '<span style="color: #777; font-size: 80%%;">EUR</span>';

        $line_tmpl = <<<S
        <tr>
            <td>%s</td>
            <td class="money">{$CUR}&nbsp;%s</td>
        </tr>
S;

        foreach ($f as $l)
        {
            $l = str_getcsv($l, ';');
            if ('' === trim($l[0])) {
                $hLines .= sprintf($line_tmpl,
                    $l[1], number_format($l[2], 2));

                $total += $l[2];
            }
        }

        $hTotal     = number_format($total, 2);

        $s = <<<S
            <table class="fr-table"><thead>
                <tr><th>Account</th>
                    <th>Amount</th>
                </thead><tbody>
                {$hLines}
            <tr>
                <td>Total</td>
                <td class="money">{$CUR}&nbsp;{$hTotal}</td>
            </tr>
        </tbody></table>
        {$hFileMTime}
S;
        return $s;
    }
    
    /**
    */
    function html_source_file($file)
    {
        return sprintf('<p style="font-size: 80%%; color: #777;">Source: <a href="%s">%s</a> (last updated on %s).</p>',
            $file, $file, date('c', filemtime($file)));
    }
}
