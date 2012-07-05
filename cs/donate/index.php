<!DOCTYPE html>
<html dir="ltr" lang="cs">
<head>
    <meta charset="utf-8">
    <title>Dary pro Mageiu</title>
    <meta name="description" content="Dary pro Mageiu">
    <meta name="keywords" content="mageia, donate, donation, donors, help">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>
    
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh">Darovací kampaň</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para donate">
                    <div style="float: right; border: 1px solid #aaa; padding: 0 0 1em 0; margin: 0 0 2em 1em;">
                        <ul>
                            <li><a href="#why">Proč dát dar?</a></li>
                            <li><a href="#status">Přehled darů</a></li>
                            <li><a href="#d-paypal">Dary</a> (PayPal, bank, check)</li>
                            <li><a href="/en/thank-you/#fund">Srdečné díky!</a></li>
                        </ul>
                    </div>
                    <h2 id="why">Proč dát dar?</h2>
                    <p>Mageia.Org je organizace, která se neorientuje na zisk, 
                        ale spravuje distribuci Mageia.
                        Jako taková může od společenství přijímat dary, které Mageiu podpoří v mnoha
                        různých oblastech:</p>
                    <ul>
                        <li>vybavení servery a hostování serverů;</li>
                        <li>zakoupení domén;</li>
                        <li>registrace značky Mageia;</li>
                        <li>vybrané věci k dalšímu rozšíření Mageii;</li>
                        <li>správní náklady;</li>
                        <li>a konečně i právní poradenství;</li>
                        <li>a mnohé další.</li>
                    </ul>
                    <hr />
                    <h2 id="status">Kde je přehled o darech?</h2>
		    <p>Dostali jsme mnoho darů a díky všem našim laskavým dárcům (<a href="/en/about/reports/<?php echo date('Y'); ?>">máme v současnosti částku</a> <strong><?php echo $g_amount_remain; ?></strong>)!</p>

		    <p>Věříme, že je nezbytné, abychom odkrývali naše finanční aktivity. Více se o tom, jak jsou používány tyto obdržené fondy, dočtete ve
			<a href="/en/about/reports/">finančních</a>.
                        Jak se dá dočíst v protokolu naší zakladatelské schůze,
                        finance Mageia.Org spravuje Damien Lallement.</p>
                        
                    <hr />
                </div>
            </div>
            <div class="yui-g"><div class="para">
                <h2 id="d-paypal">Darování přes PayPal,</h2>
                <?php include '../../paypal.inc.php'; echo html_paypal_form('en'); ?>
            </div></div>
            <div class="yui-g">
                <div class="yui-u first"><div class="para" style="padding-right: 0;">
                    <h3>bankovním převodem,</h3>
                    <p>pomocí následujícího kódu banky (IBAN-BIC):</p>
                    <pre class="donate-coord">
<u>Ve prospěch:</u>

<?php echo $G_coord_assos; ?>


<u>Bankovní účet:</u>

<?php echo $G_coord_assos_bank; ?>

</pre>
                </div></div>
                <div class="yui-u"><div class="para">
                    <h3>nebo šekem (pouze &euro;).</h3>
                    <p>Své dary můžete posílat šekem na tuto adresu:</p>
                    <pre class="donate-coord">
<?php echo $G_coord_assos; ?>
</pre>
                    <p>Použijte "Mageia.Org" v řádku "Příkaz k úhradě...".</p>
                </div><div class="para">
                    <p><strong>Dejte, prosím pozor na toto:</strong></p>
                    <ul>
                        <li>Paypal si bere za každý dar malý poplatek (kolem 2%), takže dostaneme o něco méně, než pošlete;</li>
                        <li>náklady za převod jdou k tíži Mageii, proto jako měnu používejte, prosím, &euro;;</li>
                        <li>v případě, že byste chtěli darovat anonymně, připojte, prosím, poznámku.</li>
                    </ul>
                </div></div>
            </div>
        </div>
    </div>
</body>
</html>
