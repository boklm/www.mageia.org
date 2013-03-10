<?php
/** Mageia.org 2012 fi report. */

$year       = 2012;
$source_csv = 'mageia-financial-report-2012.csv';
$page_kw    = 'mageia, financial report, 2012, revenues, expenses';

$js_options_hAxis = '{title: "2012"}';

// year, total revenues, total expenses
$js_data2_values  = <<<S
    ['2010', 8801.66, 1277.77],
    ['2011', 11154.02, 8327.25],
    ['2012', 10072.08, 10766.69]
S;

$intro = <<<S
    <ul>
        <li>Read the <a href="mageia_rapport_financier_2012_fr.pdf" hreflang="fr">French, original report</a>
            or the <a href="mageia_financial_report_2012_en.pdf" hreflang="en">English translation</a>
            (both are PDF documents).</li>
        <li>Get the <a href="mageia-financial-report-2012.csv">raw report data</a>
            (CSV document, licensed under <a href="http://opendatacommons.org/licenses/odbl/1.0/">ODbL 1.0</a>).
            The rest of this page is built from this data.</li>
        <li>You may also want to check out our <a href="https://wiki.mageia.org/en/General_report_2012">general report for 2012</a>.</li>
    </ul>
S;

$last_known_account_title = sprintf('Account status on December 31<sup>st</sup>, %s', $year);

include '../template.php';

