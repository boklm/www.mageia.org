<!DOCTYPE HTML>
<html dir="ltr" lang="it">
<head>
    <meta charset="utf-8">
    <title>Mageia Donation Campaign</title>
    <meta name="description" content="Mageia is new community-based Linux distribution.">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner">
            <h1>Mageia <span>| Donazioni di soldi</span></h1>
        </div>
        <div id="bd" role="main">
            <div class="yui-g"><div class="para donate">
                <div style="border: 1px solid rgb(170, 170, 170); margin: 0pt 0pt 2em 1em; padding: 0pt 0pt 1em; float: right;">
                    <ul>
                        <li><a href="#why">Perchè donare?</a></li>
                        <li><a href="#status">Traccia donazioni</a></li>
                        <li><a href="#d-paypal">Dona</a> (PayPal, bonifico, assegno)</li>
                        <li><a href="/en/thank-you/#fund">Grazie!</a></li>
                    </ul>
                </div>
                <h2><a name="why">Perchè donare?</a></h2>
                <p>Mageia.Org è un organizzazione senza scopo di lucro per gestire la distribuzione
                    Mageia. Come tutte le associazioni non profit, può ricevere donazioni
                    dalla comunità per finanziare:</p>
                <ul>
                    <li>hardware e hosting dei server;</li>
                    <li>nomi di dominio;</li>
                    <li>registrazioni del marchio Mageia;</li>
                    <li>gadget per pubblicizzare Mageia;</li>
                    <li>spese amministrative;</li>
                    <li>ed infine, consigli legali e</li>
                    <li>ecc.</li>
                </ul>
                <h2><a name="status">Come tener traccia delle donazioni?</a></h2>
                <p>Attualmente abbiamo <strong><?php echo $g_donate_amount; ?></strong>
                    grazie ai nostri <a href="/en/thank-you/">donatori</a>! (aggiornato settimanalmente)</p>
                <p>Ci sarà un report mensile dei fondi ricevuti e di come verranno usati.
                    Crediamo che la responsabilità pubblica sia cruciale. Come stabilito
                    nei verbali della Prima Assemblea Costitutiva Generale, il tesoriere di
                    Mageia.Org è Damien Lallement.</p>
            </div></div>
            <div class="yui-g"><div class="para">
                <h2><a name="d-paypal">Dona con PayPal,</a></h2>
                <?php include '../../paypal.inc.php'; echo html_paypal_form('it'); ?>
            </div></div>
            <div class="yui-g">
                <div class="yui-u first"><div class="para" style="padding-right: 0pt;">
                    <h3>con bonifico bancario,</h3>
                    <p>usando queste Coordinate Bancarie (IBAN-BIC):</p>
                    <pre class="donate-coord"><u>A favore di:</u>
<?php echo $G_coord_assos; ?>


<u>Coordinate Bancarie:</u>

<?php echo $G_coord_assos_bank; ?>


</pre>
                    <p>Se necessario, si può <a href="/iban_Mageia.Org.pdf" title="IBAN of Mageia.Org">scaricare il codice IBAN</a>.</p>
                </div></div>
                <div class="yui-u"><div class="para">
                    <h3>o con assegno (solo €).</h3>
                    <p>Potete spedire le vostre donazioni con assegno a questo indirizzo:</p>
                    <pre class="donate-coord">
<?php echo $G_coord_assos; ?>

</pre>
                    <p>Usate "Mageia.Org" come "Beneficiario".</p>
                </div>
                <div class="para">
                    <p><strong>Per favore ricordate che:</strong></p>
                    <ul>
                        <li>Paypal preleva una piccola commissione per ogni donazione (circa il ...%)
                            cosicchè avremo un po' meno di quello che spedirete;</li>
                        <li>il tasso di cambio è a carico di Mageia, per favore usate € come valuta;</li>
                        <li>se volete fare una donazione anonima, per favore indicatelo nei commenti.</li>
                    </ul>
                </div></div>
            </div>
        </div>
    </div>
</body>
</html>