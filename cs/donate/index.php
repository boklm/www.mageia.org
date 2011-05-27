<!DOCTYPE html>
<html dir="ltr" lang="cs">
<head>
    <meta charset="utf-8">
    <title>Dary pro Mageiu</title>
    <meta name="description" content="Mageia Spenden Kampagne">
    <meta name="keywords" content="mageia, spenden, donate, donation">
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
                            <li><a href="#d-paypal">Dary</a> (PayPal, úhrada převodem, šek)</li>
                            <li><a href="/en/thank-you/#fund">Srdečné díky!</a></li>
                        </ul>
                    </div>
                    <h2><a name="why">Proč dát dar?</a></h2>
                    <p>Mageia.Org je organizace, která se neorientuje na zisk
                        ale spravuje distribuci Mageia. Jako taková může od společenství přijímat dary, které Mageiu podpoří v mnoha
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

                    <h2><a name="status">Kde je přehled o darech?</a></h2>
                    <p>Díky <a href="/en/thank-you/">všem našim dárcům</a>
                        máme v současnosti částku
                        <strong><?php echo $g_donate_amount; ?></strong>!
                        (aktualizováno každý týden)</p>

                    <p>Každý měsíc je o přijatých darech a jejich použití vydávána zpráva.
                        Věříme, že je nezbytné, abychom odkrývali naše finanční aktivity.
                        Jak se dá dočíst v protokolu naší zakladatelské schůze,
                        finance Mageia.Org spravuje Damien Lallement.</p>
                </div>
            </div>
            <div class="yui-g"><div class="para">
                <h2><a name="d-paypal">Darování přes PayPal,</a></h2>
                <?php include '../../paypal.inc.php'; echo html_paypal_form('de'); ?>
            </div></div>
            <div class="yui-g">
                <div class="yui-u first"><div class="para" style="padding-right: 0;">
                    <h3>bankovním převodem,</h3>
                    <p>za použití následujících údajů o kontě (IBAN-BLZ (kód BIC)):</p>
                    <pre class="donate-coord">
<u>V prospěch:</u>

<?php echo $G_coord_assos; ?>


<u>Bankovní konto:</u>

<?php echo $G_coord_assos_bank; ?>

</pre>
                </div></div>
                <div class="yui-u"><div class="para">
                    <h3>nebo šekem (pouze €).</h3>
                    <p>Své dary můžete posílat šekem na tuto adresu:</p>
                    <pre class="donate-coord">
<?php echo $G_coord_assos; ?> 
</pre>
                    <p>Použijte, prosím, "Mageia.Org" v řádku "Příkaz k úhradě...".</p>
                </div><div class="para">
                    <p><strong>Dejte, prosím pozor na toto:</strong></p>
                    <ul>
                        <li>Paypal si bere za každý dar malý poplatek (asi ...%),
                            takže se k nám dostane o něco méně z toho, co zaplatíte;</li>
                        <li>jako měnu prosíme používejte eura (€), neboť náklady za převod jdou k tíži Mageii;</li>
                        <li>v případě, že byste chtěli darovat anonymně, potom, prosím, ke svému daru připojte nějaký odkaz.</li>
                    </ul>
                </div></div>
            </div>
        </div>
    </div>
</body>
</html>