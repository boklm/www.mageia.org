<!DOCTYPE html>
<html dir="ltr" lang="et">
<head>
    <meta charset="utf-8">
    <title>Mageia annetamiskampaania</title>
    <meta name="description" content="Mageia on uus kogukonna loodav Linuxi distributsioon.">
    <meta name="keywords" content="mageia, annetamine, annetused">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" >
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1>Mageia <span>| Annetamiskampaania</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para donate">
                    <div style="float: right; border: 1px solid #aaa; padding: 0 0 1em 0; margin: 0 0 2em 1em;">
                        <ul>
                            <li><a href="#why">Miks annetada?</a></li>
                            <li><a href="#status">Annetuste jälgimine</a></li>
                            <li><a href="#d-paypal">Annetamine</a> (PayPal, pangaülekanne, tšekid)</li>
                            <li><a href="/en/thank-you/#fund">Suur tänu!</a></li>
                        </ul>
                    </div>
                    <h2><a name="why">Miks annetada?</a></h2>
                    <p>Mageia.Org on Mageia distributsiooni haldamiseks loodud mittetulundusühing. Mittetulundusühinguna võib see saada kogukonnalt annetusi mitmesuguste ülesannete lahendamiseks:</p>
                    <ul>
                        <li>riistvara ja serverite majutamine</li>
                        <li>domeeninimed</li>
                        <li>Mageia kaubamärgi registreerimine</li>
                        <li>Mageiat reklaamivad kaubad</li>
                        <li>halduskulud</li>
                        <li>õigusabi</li>
                        <li>ja veel palju muud</li>
                    </ul>

                    <h2><a name="status">Kuidas annetusi jälgida?</a></h2>
                    <p>Praguseks oleme saanud <strong><?php echo $g_donate_amount; ?></strong>,
                        mille eest tuleb tänada kõiki meie <a href="/en/thank-you/">annetajaid</a>
                        (nimekirja uuendatakse kord nädalas)!</p>

                    <p>Iga kuu avaldatakse aruanne saadud vahendite ja nende kasutamise kohta. Me pooldame täielikult rahaasjade läbipaistvuse põhimõtet. Nagu mainitud esimese asutava üldkogu protokollis, on Mageia.Org-i laekur Damien Lallement.</p>
                </div>
            </div>
            <div class="yui-g"><div class="para">
                <h2><a name="d-paypal">Annetamine PayPali kaudu</a></h2>
                <?php include '../../paypal.inc.php'; echo html_paypal_form('et'); ?>
            </div></div>
            <div class="yui-g">
                <div class="yui-u first"><div class="para" style="padding-right: 0;">
                    <h3>pangaülekandega</h3>
                    <p>kasutades järgmist panga tuvastuskoodi (IBAN-BIC):</p>
                    <pre class="donate-coord"><u>Saaja:</u>
<?php echo $G_coord_assos; ?>


<u>Konto:</u>

<?php echo $G_coord_assos_bank; ?>


</pre>
                    <p>Soovi korral võite <a href="https://docs.google.com/viewer?url=http%3A%2F%2Fmageia.org%2Fiban_Mageia.Org.pdf" title="IBAN of Mageia.Org">meie IBAN-i alla laadida</a>.</p>
                </div></div>
                <div class="yui-u"><div class="para">
                    <h3>tšekiga (ainult eurodes)</h3>
                    <p>Oma annetuse tšeki võite saata järgmisele aadressile:</p>
                    <pre class="donate-coord">
<?php echo $G_coord_assos; ?>
</pre>
                    <p>Märkige tšekil saajaks "Mageia.Org".</p>
                </div><div class="para">
                    <p><strong>Palun arvestage järgmiste asjaoludega:</strong></p>
                    <ul>
                        <li>Paypal võtab iga annetuse eest väikest vahendustasu (umbes ...%), mistõttu me saame veidi vähem, kui te annetate</li>
                        <li>valuutavahetuse tasu peab maksma Mageia, mistõttu oleks kasulikum arveldada eurodes</li>
                        <li>kui soovite annetada anonüümselt, märkige see kindlasti ära</li>
                    </ul>
                </div></div>
            </div>
        </div>
    </div>
</body></html>