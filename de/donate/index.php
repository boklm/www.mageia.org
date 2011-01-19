<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="de">
<head>
    <meta charset="utf-8" />
    <title>Mageia Spenden-Kampagne</title>
    <meta name="description" content="Mageia Spenden Kampagne" />
    <meta name="keywords" content="mageia, spenden, donate, donation" />
    <meta name="author" content="Mageia" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" >
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>
    
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1>Mageia <span>| Spenden-Kampagne</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para donate">
                    <div style="float: right; border: 1px solid #aaa; padding: 0 0 1em 0; margin: 0 0 2em 1em;">
                        <ul>
                            <li><a href="#why">Warum spenden?</a></li>
                            <li><a href="#status">Spendenübersicht</a></li>
                            <li><a href="#d-paypal">Spenden</a> (PayPal, Überweisung, Scheck)</li>
                            <li><a href="/en/thank-you/#fund">Herzlichen Dank!</a></li>
                        </ul>
                    </div>
                    <h2><a name="why">Warum spenden?</a></h2>
                    <p>Mageia.Org ist eine nicht am Gewinn orientierte Organisation,
                        welche die Distribution Mageia verwaltet. Als solche kann sie
                        Spenden aus der Community entgegennehmen, die Mageia in vielen
                        verschiedenen Bereichen unterstützen:</p>
                    <ul>
                        <li>Serverhardware und Hosten der Server;</li>
                        <li>Domainnamen;</li>
                        <li>Registrierung der Mageia-Markenzeichen;</li>
                        <li>Goodies zur weiteren Verbreitung von Mageia;</li>
                        <li>Verwaltungskosten;</li>
                        <li>schließlich Rechtsberatung und</li>
                        <li>weiteres</li>
                    </ul>

                    <h2><a name="status">Wo gibt es eine Spendenübersicht?</a></h2>
                    <p>Dank all <a href="/en/thank-you/">unserer</a> Spender
                        verfügen wir derzeit über eine Summe von
                        <strong><?php echo $g_donate_amount; ?></strong>!
                        (wird wöchentlich aktualisiert)</p>

                    <p>Es wird monatlich über die eingegangenen Gelder berichtet und wie sie verwendet wurden.
                        Wir glauben, dass es unabdingbar ist, über unsere Finanzen Rechenschaft abzulegen.
                        Wie im Protokoll unserer ersten allgemeinen Gründungsversammlung nachzulesen ist,
                        verwaltet Damien Lallement die Finanzen von Mageia.Org.</p>
                </div>
            </div>
            <div class="yui-g"><div class="para">
                <h2><a name="d-paypal">Spenden via PayPal,</a></h2>
                <?php include '../../paypal.inc.php'; echo html_paypal_form('de'); ?>
            </div></div>
            <div class="yui-g">
                <div class="yui-u first"><div class="para" style="padding-right: 0;">
                    <h3>per Banküberweisung,</h3>
                    <p>unter Verwendung der folgenden Kontoinformationen (IBAN-BLZ (BIC-Code)):</p>
                    <pre class="donate-coord">
<u>Zu Gunsten von:</u>

<?php echo $G_coord_assos; ?>


<u>Bankkonto:</u>

<?php echo $G_coord_assos_bank; ?>

</pre>
                </div></div>
                <div class="yui-u"><div class="para">
                    <h3>oder per Scheck (nur €).</h3>
                    <p>Sie können Ihre Spende per Scheck an diese Adresse senden:</p>
                    <pre class="donate-coord">
<?php echo $G_coord_assos; ?> 
</pre>
                    <p>Bitte "Mageia.Org" in der Zeile "An die Order zahlen von..." benutzen.</p>
                </div><div class="para">
                    <p><strong>Bitte beachten:</strong></p>
                    <ul>
                        <li>Paypal behält für jede Spende eine geringe Gebühr ein (etwa ...%),
                            sodass uns ein bisschen weniger erreicht als Sie einzahlen;</li>
                        <li>bitte benutzen Sie € als Währung, denn Umrechnungskosten gehen zu Lasten von Mageia;</li>
                        <li>falls Sie anonym spenden wollen, so fügen Sie bitte Ihrer Spende einen Hinweis bei.</li>
                    </ul>
                </div></div>
            </div>
        </div>
    </div>
</body>
</html>
