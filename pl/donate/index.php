<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Kampania wsparcia nowej dystrybucji Mageia</title>
    <meta name="description" content="Mageia jest nową, społecznościową dystrybucją Linuksa." />
    <meta name="keywords" content="mageia, donate, donation, sponsor, dotacja, wsparcie" />
    <meta name="author" content="Mageia" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" >
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>

    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh">Kampania Wsparcia</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para donate">
                    <div style="float: right; border: 1px solid #aaa; padding: 0 0 1em 0; margin: 0 0 2em 1em;">
                        <ul>
                            <li><a href="#why">Dlaczego warto nas wesprzeć?</a></li>
                            <li><a href="#status">Śledzenie dotacji</a></li>
                            <li><a href="#d-paypal">Przekaż dotację</a> (PayPal, przelew bankowy, czek)</li>
                            <li><a href="/en/thank-you/#fund">Dziękujemy!</a></li>
                        </ul>
                    </div>
                    <h2><a name="why">Dlaczego warto nas wesprzeć?</a></h2>
                    <p>Mageia.Org jest organizacją non-profit, zarządzająca dystrybucją Mageia.
                        Jako organizacja non-profit może otrzymywać dotacje z przeznaczeniem
                        na pokrycie różnych dziedzin swojej działalności:</p>
                    <ul>
                        <li>zakup sprzętu i utrzymanie serwerów;</li>
                        <li>rejestracja nazw domen;</li>
                        <li>rejestracja znaku Mageia;</li>
                        <li>gadżety i materiały reklamowe popularyzujace dystrybucję Mageia;</li>
                        <li>pokrycie kosztów administracyjnych;</li>
                        <li>obsługę prawną  </li>
                        <li>itp.</li>
                    </ul>

                    <h2><a name="status">Jak sprawdzić wykorzystanie dotacji?</a></h2>
                    <p>Otrzymaliśmy już <strong><?php echo $g_donate_amount; ?></strong>
                        dzięki wszystkim naszym <a href="/en/thank-you/">sponsorom</a>! (aktualizacja co tydzień)</p>

                    <p>Co miesiąc zostanie opublikowane sprawozdanie z podaniem wysokości uzyskanych funduszy i sposobu ich wykorzystania.
                        Jawność działania ma w naszym przekonaniu zasadnicze znaczenie. Jak podano w protokole Pierwszego Walnego Zgromadzenia Założycielskiego, na stanowisko 
			skarbnika Mageia.Org powołany został Damien Lallement.</p>
                </div>
            </div>
            <div class="yui-g"><div class="para">
                <h2><a name="d-paypal">Przekaż dotację przez PayPal,</a></h2>
                <?php include '../../paypal.inc.php'; echo html_paypal_form('pl'); ?>

            </div></div>
            <div class="yui-g">
                <div class="yui-u first"><div class="para" style="padding-right: 0;">
                    <h3>przelewem bankowym,</h3>
                    <p>używając następującego kodu identyfikacji bankowej (IBAN-BIC):</p>
                    <pre class="donate-coord">
<u>Na rzecz:</u>

<?php echo $G_coord_assos; ?>


<u>Konto bankowe:</u>

<?php echo $G_coord_assos_bank; ?>

</pre>
                </div></div>
                <div class="yui-u"><div class="para">
                    <h3>lub czekiem (tylko &euro;).</h3>
                    <p>Czek z dotacją można wysłać na adres:</p>
                    <pre class="donate-coord">
<?php echo $G_coord_assos; ?>

</pre>
                    <p>W linii "Pay to the order of..." należy podać: "Mageia.Org".</p>
                </div><div class="para">
                    <p><strong>Prosimy zwrócić uwagę, że:</strong></p>
                    <ul>
                        <li>Paypal pobiera prowizję od każdej dotacji (około ...%), dlatego otrzymana kwota będzie nieco niższa od przekazanej;</li>
                        <li>Mageia jest obciążana kosztami przewalutowania, dlatego prosimy o dotację w &euro;;</li>
                        <li>jeśli chcesz, aby Twoja dotacja pozostała anonimowa, prosimy o zaznaczenie tego w komentarzu.</li>
                    </ul>
                </div></div>
            </div>
        </div>
    </div>
</body>
</html>
