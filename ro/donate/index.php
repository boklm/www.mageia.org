<!DOCTYPE html>
<html dir="ltr" lang="ro">
<head>
    <meta charset="utf-8">
    <title>Campanie de recoltare de fonduri pentru Mageia</title>
    <meta name="description" content="Mageia este o nouă distribuție comunitară de Linux.">
    <meta name="keywords" content="mageia, donați, donație">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" >
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh">Campanie de recoltare de fonduri</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para donate">
                    <div style="float: right; border: 1px solid rgb(170, 170, 170); padding: 0pt 0pt 1em; margin: 0pt 0pt 2em 1em;">
                        <ul>
                            <li><a href="#why">Pentru ce să donați?</a></li>
                            <li><a href="#status">Urmărirea donațiilor</a></li>
                            <li><a href="#d-paypal">Donați</a> (PayPal, bancă, cec)</li>
                            <li><a href="/en/thank-you/#fund">Vă mulțumim!</a></li>
                        </ul>
                    </div>
                    <h2><a name="why">Pentru ce să donați?</a></h2>
                    <p>Mageia.Org este o asociație nonprofit creată pentru gestionarea distribuției Mageia.
                        Ca asociație nonprofit, se pot primi donații din partea comunității pentru
                        a ajuta în multe domenii diverse:</p>
                    <ul>
                        <li>componentele materiale și găzduirea serverelor;</li>
                        <li>numele de domenii;</li>
                        <li>înregistrările mărcii Mageia;</li>
                        <li>bunătățiuri pentru a face cunoscută distribuția;</li>
                        <li>cheltuieli administrative;</li>
                        <li>eventual, consultanță legală;</li>
                        <li>etc.</li>
                    </ul>

                    <h2><a name="status">Cum urmăriți o donație?</a></h2>
                    <p>Astăzi dispunem de <strong><?php echo $g_donate_amount; ?></strong>
                        mulțumită tuturor <a href="/en/thank-you/">donatorilor</a> noștri! (actualizare săptămînală)</p>

                    <p>Se va întocmi un raport lunar cu fondurile primite și cu modul în care au fost utilizate.
                        Credem că publicarea contabilității este de o importanță crucială. După cum s-a decis în cadrul
                        primei întruniri generale de constituire, trezorierul asociației Mageia.Org este Damien Lallement.</p>
                </div>
            </div>
            <div class="yui-g"><div class="para">
                <h2><a name="d-paypal">Donați prin PayPal,</a></h2>
                <?php include '../../paypal.inc.php'; echo html_paypal_form('ro'); ?>
            </div></div>
            <div class="yui-g">
                <div class="yui-u first"><div class="para" style="padding-right: 0pt;">
                    <h3>prin transfer bancar,</h3>
                    <p>utilizînd
                        codul de identificare bancară (IBAN-BIC):</p>
                    <pre class="donate-coord"><u>În favoarea:</u>

<?php echo $G_coord_assos; ?>


<u>Cont bancar:</u>

<?php echo $G_coord_assos_bank; ?>


</pre>
                    <p>Dacă este necesar, puteți <a href="/iban_Mageia.Org.pdf" title="IBAN of Mageia.Org">descărca IBAN-ul nostru</a>.</p>
                </div></div>
                <div class="yui-u"><div class="para">
                    <h3>sau prin cec (numai în €).</h3>
                    <p>Puteți trimite donația prin cec la adresa următoare:</p>
                    <pre class="donate-coord">
<?php echo $G_coord_assos; ?> 
</pre>
                    <p>Treceți celul pe numele „Mageia.Org”.</p>
                </div><div class="para">
                    <p><strong>Notați că:</strong></p>
                    <ul>
                        <li>Paypal reține un mic comision pentru fiecare donație (în jur de ...%) așa încît primim o sumă un pic mai mică
                            decît cea trimisă;</li>
                        <li>taxele de conversie sînt imputate asociației Mageia, așa că vă rugăm să utilizați € ca monedă;</li>
                        <li>dacă doriți să faceți o donație anonimă, vă rugăm să menționați în comentariu.</li>
                    </ul>
                </div></div>
            </div>
        </div>
    </div>
</body>
</html>