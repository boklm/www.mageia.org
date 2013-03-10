<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <title>Mageia Financial Report (2011)</title>
    <meta name="description" content="Mageia is new community-based Linux distribution.">
    <meta name="keywords" content="mageia, financial report, 2011">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <?php include '../../../../analytics.php'; ?>
</head>
<body>
    <?php include '../../../../langs.php'; ?>
    
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/en/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh">Financial Report (2011)</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para values">
                    <p style="color: #fff; background: red; padding: 0.3em 0.4em 0.4em 0.6em; font-size: 85%;">
                        Being redesigned &ndash; Take with a grain of salt for now.</p>
                    <?php
                        include G_APP_ROOT . '/lib/fi-report.php';

                        $mfr = Mageia_Financial_Report::build(array(
                            'accounts' => 'mageia-accounts-2011.csv',
                            'report'   => 'mageia-report-2011.csv',
                            'forecast' => 'mageia-forecast-2011.csv'
                        ));
                        
                        $hReport   = $mfr->html_report();
                        $hForecast = $mfr->html_forecast();
                        $hAccounts = $mfr->html_accounts();
                        $hSummary  = $mfr->html_summary();
                    ?>
                    <h2>Summary</h2>
                    <?php echo $hSummary; ?>
                    <hr>

                    <h2>Bank accounts situation</h2>
                    <?php echo $hAccounts; ?>
                    <hr>

                    <h2>Financial Report</h2>
                    <?php echo $hReport; ?>
                    <hr>

                    <h2>Forecast for 2011</h2>
                    <?php echo $hForecast; ?>
                    <hr>

                    <h2>Miscellaneous</h2>
                    <ul>
                        <li>You can <a href="#" hreflang="en">download this report</a> as a PDF file.</li>
                        <li>You can help Mageia.Org by <a href="/en/donate/" hreflang="en">doing a donation</a>.</li>
                        <li>You can see the <a href="/en/thank-you" hreflang="en">"thank you" page</a>.</li>
                    </ul>
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