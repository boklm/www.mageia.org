<!DOCTYPE html>
<html dir="ltr" lang="nl">
<head>
    <meta charset="utf-8">
    <title>Mageia Donatiecampagne</title>
    <meta name="description" content="Mageia is een nieuwe door de gemeenschap ontwikkelde Linux distributie.">
    <meta name="keywords" content="mageia, donatie">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>

    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh">Donatiecampagne</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para donate">
                    <div style="float: right; border: 1px solid #aaa; padding: 0 0 1em 0; margin: 0 0 2em 1em;">
                        <ul>
                            <li><a href="#why">Waarom doneren?</a></li>
                            <li><a href="#status">Volgen van donaties</a></li>
                            <li><a href="#d-paypal">Doe een donatie</a> (PayPal, bankoverschrijving, cheque)</li>
                            <li><a href="/en/thank-you/#fund">Dank u!</a></li>
                        </ul>
                    </div>
                    <h2 id="why">Waarom doneren?</h2>
                    <p>Mageia.Org is een stichting (not-for-profit association) welke is opgericht om de Mageia-distributie te beheren.
                        Als non-profit organisatie kan Mageia.Org donaties ontvangen van de gebruikersgemeenschap
                        welke voor velerlei doelen aangewend kunnen worden:</p>
                    <ul>
                        <li>hardware en hosting voor servers;</li>
                        <li>domeinnaamregistraties;</li>
                        <li>registratie van het Mageia handelsmerk;</li>
                        <li>materialen ter promotie van Mageia;</li>
                        <li>administratieve onkosten;</li>
                        <li>eventueel juridisch advies;</li>
                        <li>enz.</li>
                    </ul>
                    <hr />
                    <h2 id="status">Hoe de donaties te volgen?</h2>
                    <p>Op dit moment hebben wij <strong><?php echo $g_donate_amount; ?></strong>
                        mogen ontvangen. Dank hiervoor aan alle <a href="/en/thank-you/">gulle gevers</a>! (weekelijks bijgewerkt)</p>

                    <p>Ook zal er een maandelijkse rapportage zijn over de ontvangen giften en hoe zij besteed zijn.
                        Wij geloven dat openbare verantwoording van cruciaal belang is. Zoals te lezen valt in de notulen van de eerste
                        General Constitutive Assembly, is de penningmeester van Mageia.Org Damien Lallement.</p>
                        
                    <p><strong>2011 May 4<sup>th</sup></strong>: Ja, deze pagina dient beter beter bijgehouden te worden;
                        Zie ook <a href="https://bugs.mageia.org/show_bug.cgi?id=1135">bug 1135</a>
                        en vertel ons hoe we dit kunnen verbeteren (visualisatie van de rapportage, terugkoppeling, donaties).

                        Voor het moment kunt u kijken naar onze rapportage over <a href="/en/about/reports/2010/">2010</a>
                        en onze financiële planning voor <a href="/en/about/reports/2011/">2011</a>.</p>
                    <hr />
                </div>
            </div>
            <div class="yui-g"><div class="para">
                <h2 id="d-paypal">Doneer via PayPal,</h2>
                <?php include '../../paypal.inc.php'; echo html_paypal_form('en'); ?>
            </div></div>
            <div class="yui-g">
                <div class="yui-u first"><div class="para" style="padding-right: 0;">
                    <h3>via een bankoverschrijving,</h3>
                    <p>gebruikmakende van
                        Bank Identifier Code (IBAN-BIC):</p>
                    <pre class="donate-coord">
<u>Ten name van:</u>

<?php echo $G_coord_assos; ?>


<u>Bankrekening:</u>

<?php echo $G_coord_assos_bank; ?>

</pre>
                </div></div>
                <div class="yui-u"><div class="para">
                    <h3>of via een cheque (alleen in &euro;).</h3>
                    <p>U kunt u donatie via cheque sturen naar dit adres:</p>
                    <pre class="donate-coord">
<?php echo $G_coord_assos; ?>
</pre>
                    <p>Gebruik "Mageia.Org" als de begunstigde.</p>
                </div><div class="para">
                    <p><strong>Let erop dat:</strong></p>
                    <ul>
                        <li>Paypal een kleine commissie inhoudt op elke donatie (ongeveer 2%) waardoor wij iets minder ontvangen
                            dan u stuurt;</li>
                        <li>Kosten voor wisselkoersen worden Mageia in rekening gebracht, dus gebruikt u alstublieft &euro; als valuta;</li>
                        <li>Wilt u uw donatie anoniem doen, vermeldt dit dan als opmerking.</li>
                    </ul>
                </div></div>
            </div>
        </div>
    </div>
</body>
</html>
