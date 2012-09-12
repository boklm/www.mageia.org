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
    ['2012', 6963.28, 10443.16]
S;

$intro = <<<S
    <ul>
        <li>Get the <a href="mageia-financial-report-2012.csv">raw report data</a>
            (CSV document, licensed under <a href="http://opendatacommons.org/licenses/odbl/1.0/">ODbL 1.0</a>).
            The rest of this page is built from this data.</li>
    </ul>
S;

$last_known_account_title = sprintf('Account status on December 31<sup>st</sup>, %s', $year);
$last_known_account_title = sprintf('Account status');

include '../template.php';

