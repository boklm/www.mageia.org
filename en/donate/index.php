<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <title>Mageia Donation Campaign</title>
    <meta name="description" content="Mageia is new community-based Linux distribution.">
    <meta name="keywords" content="mageia, donate, donation, donors, help">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>
    
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh">Donation Campaign</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para donate">
                    <div style="float: right; border: 1px solid #aaa; padding: 0 0 1em 0; margin: 0 0 2em 1em;">
                        <ul>
                            <li><a href="#why">Why donate?</a></li>
                            <li><a href="#status">Donation Tracks</a></li>
                            <li><a href="#d-paypal">Donate</a> (PayPal, bank, check)</li>
                            <li><a href="/en/thank-you/#fund">Thank you!</a></li>
                        </ul>
                    </div>
                    <h2 id="why">Why donate?</h2>
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
                    <hr />
                    <h2 id="status">How to track donation?</h2>
		    <p>Currently, we received a lot of generous donations (<a href="/en/about/reports/<?php echo date('Y'); ?>">remains</a> <strong><?php echo $g_donate_amount; ?></strong>)
                        thanks to all of our <a href="/en/thank-you/">donors</a>!</p>

		    <p>We believe public accountability is crucial. You can know more about how are used the funds received by reading our 
			<a href="/en/about/reports/">financial reports</a>.
                        As stated in the minutes of The First General Constitutive Assembly, the treasurer of Mageia.Org is Damien Lallement.</p>
                        
                    <hr />
                </div>
            </div>
            <div class="yui-g"><div class="para">
                <h2 id="d-paypal">Donate via PayPal,</h2>
                <?php include '../../paypal.inc.php'; echo html_paypal_form('en'); ?>
            </div></div>
            <div class="yui-g">
                <div class="yui-u first"><div class="para" style="padding-right: 0;">
                    <h3>via bank transfer,</h3>
                    <p>using the following
                        Bank Identifier Code (IBAN-BIC):</p>
                    <pre class="donate-coord">
<u>In favor of:</u>

<?php echo $G_coord_assos; ?>


<u>Bank Account:</u>

<?php echo $G_coord_assos_bank; ?>

</pre>
                </div></div>
                <div class="yui-u"><div class="para">
                    <h3>or via check (&euro; only).</h3>
                    <p>You can send your donation by check to this address:</p>
                    <pre class="donate-coord">
<?php echo $G_coord_assos; ?>
</pre>
                    <p>Use "Mageia.Org" in the "Pay to the order of..." line.</p>
                </div><div class="para">
                    <p><strong>Please note that:</strong></p>
                    <ul>
                        <li>Paypal withdraws a small commission for each donation (around 2%) so we get a little bit less
                            than you send;</li>
                        <li>conversion rates are charged to Mageia, so please use &euro; as currency;</li>
                        <li>if you want to do an anonymous donation, please add a comment.</li>
                    </ul>
                </div></div>
            </div>
        </div>
    </div>
</body>
</html>
