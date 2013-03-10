<?php
/** Mageia.org 2011 fi report. */

$year       = 2011;
$source_csv = 'mageia-financial-report-2011.csv';
$page_kw    = 'mageia, financial report, 2011, revenues, expenses';

$js_options_hAxis = '{title: "2011"}';
$js_data2_values  = <<<S
    ['2010', 8801.66, 1277.77],
    ['2011', 11154.02, 8327.25]
S;

$intro = <<<S
    <p>Here is our financial report for 2011.</p>

    <ul class="hl">
        <li>Read the <a href="mageia_rapport_financier_2011_fr.pdf" hreflang="fr">French, original report</a>
            or the <a href="mageia_financial_report_2011_en.pdf" hreflang="en">English translation</a>
            (both are PDF documents).</li>
        <li>Get the <a href="mageia-financial-report-2011.csv">raw report data</a>
            (CSV document, licensed under <a href="http://opendatacommons.org/licenses/odbl/1.0/">ODbL 1.0</a>).
            The rest of this page is built from this data.</li>
    </ul>
S;

$last_known_account_title = sprintf('Account status on December 31<sup>st</sup>, %s', $year);

include '../template.php';

