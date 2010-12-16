<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Mageia Donation Campaign</title>
    <meta name="description" content="Mageia is new community-based Linux distribution." />
    <meta name="keywords" content="mageia, donate, donation" />
    <meta name="author" content="Mageia" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" />
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>
    
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1>Mageia <span>| Donation Campaign</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para donate">
                    <div style="float: right; border: 1px solid #aaa; padding: 0 0 1em 0; margin: 0 0 2em 1em;">
                        <ul>
                            <li><a href="#why">Why donate?</a></li>
                            <li><a href="#status">Donation Tracks</a></li>
                            <li><a href="#d-paypal">Donate</a> (Paypal, bank, check)</li>
                            <li><a href="/en/thank-you/#fund">Thank you!</a></li>
                        </ul>
                    </div>
                    <h2>Why donate?</h2>
                    <p>Mageia.Org is a not-for-profit association to manage the Mageia distribution.
                        As a not-for-profit association, it can receive donations from the community
                        to help in a lot of differents fields:</p>
                    <ul>
                        <li>hardware and hosting for servers;</li>
                        <li>domain names;</li>
                        <li>registrations of Mageia trademark;</li>
                        <li>goodies for spreading Mageia;</li>
                        <li>administrative expenses;</li>
                        <li>eventually, legal counsel and </li>
                        <li>etc.</li>
                    </ul>

                    <h2>How to track donation?</h2>
                    <p>Currently, we have got <strong>{amount} &euro;<sup>[1]</sup></strong>
                        thanks to all of our <a href="/en/thank-you/">donators</a>!</p>

                    <p>There will be a monthly report on the funds received and how they were used.
                        We believe public accountability is crucial. As stated in the minutes of
                        The First General Constitutive Assembly, the treasurer of Mageia.Org is Damien Lallement.<br /><br /><sup>[1]</sup>: The amount of donation is updated every Thursday at 23:00 UTC+1.</p>
                </div>
            </div>
            <div class="yui-g"><div class="para">
                <h2>Donate via PayPal,</h2>
                <?php include '../../paypal.inc.php'; echo html_paypal_form('en'); ?>
                <p><strong>Beware: PayPal withdraws a commission from each donation
                    (so we get less than you sent).</strong></p>
            </div></div>
            <div class="yui-g">
                <div class="yui-u first"><div class="para" style="padding-right: 0;">
                    <h3>via bank transfer,</h3>
                    <p>You can donate through bank transfer by using the following
                        Bank Identifier Code (IBAN-BIC):</p>

                    <pre class="donate-coord">
<u>In favor of:</u>

<?php echo $G_coord_assos; ?>


<u>Bank Account:</u>

<?php echo $G_coord_assos_bank; ?>


<u>Amount:</u>

    Put here the amount of your donation
    in EURO (&euro;) or US Dollar (US$)

    /!\ The conversion rate bank
        (if currency other than EURO)
        will be charged for Mageia
</pre>
                </div></div>
                <div class="yui-u"><div class="para">
                    <h3>or via check.</h3>
                    <p>You can then send your donation by check to (if the currency
                        is not &euro;/EURO, thank you to prefer bank transfer or Paypal)</p>
                        
                    <pre class="donate-coord">
<?php echo $G_coord_assos; ?>
</pre>
            </div></div>
        </div>
    </div>
</body>
</html>
