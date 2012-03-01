<?php

//include G_APP_ROOT . '/lib/fi-report.php';

$data = file('mageia-financial-report-2011.csv');
$parsed = array();
foreach ($data as $l) {
    if (trim($l) == ',,,,,,')
        continue;

    $l = str_getcsv(str_replace(array(',,,', ",\n"), '', $l));
    if ($l[0][0] == '#') {
        $tag = $l[0];
    } else {
        $parsed[$tag][] = $l;
    }
}
#echo '<pre style="text-align: left;">', print_r($parsed, true), '</pre>';

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
</head>
<body>
    <?php include '../../../../langs.php'; ?>
    
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/en/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh">2011 Financial Report</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para values">
                    <p style="color: #fff; background: red; padding: 0.3em 0.4em 0.4em 0.6em; font-size: 85%;">
                        Being redesigned &ndash; Take with a grain of salt for now.</p>

                    <ul>
                        <li><a href="mageia_rapport_financier_2011_fr.pdf" hreflang="fr">Lire le rapport financier 2011 (in French, PDF)</a></li>
                        <li><a href="mageia_financial_report_2011_en.pdf" hreflang="en">Read financial report 2011 (in English, translated from French original, PDF)</a></li>
                        <li><a href="mageia-financial-report-2011.csv">Get the raw report data (CSV, under ODbL 1.0)</a></li>
                    </ul>

                    <h2>Account status</h2>
                    TODO
                    <hr>

                    <h2>Cash flow</h2>
                    TODO
                    <hr>

                    <h2>Income statement</h2>
                    TODO
                    <hr>

                    <h2>Balance sheet</h2>
                    TODO
                    <hr>

                    <h2>2012 Forecast</h2>
                    TODO

                    <hr>
                    <h2>Contact</h2>
                    <p>Financial report published by Damien Lallement (Mageia Treasurer on the 2011 Fiscal Year).<br>
                        You can contact him by sending an email to <em>treasurer[at]mageia[dot]org</em>.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
