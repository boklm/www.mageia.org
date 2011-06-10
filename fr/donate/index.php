<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="fr">
<head>
    <meta charset="utf-8" />
    <title>Campagne de dons de Mageia</title>
    <meta name="description" content="Mageia est une nouvelle distribution Linux communautaire." />
    <meta name="keywords" content="mageia, donate, donation, dons, don" />
    <meta name="author" content="Mageia" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" >
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh">Campagne de dons</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para donate">

                    <div style="float: right; border: 1px solid #aaa; padding: 0 0 1em 0; margin: 0 0 2em 1em;">
                        <ul>
                            <li><a href="#why">Pourquoi donner&nbsp;?</a></li>
                            <li><a href="#status">Suivi des dons</a></li>
                            <li><a href="#d-paypal">Faire un don</a> (PayPal, virement bancaire, chèque)</li>
                            <li><a href="/en/thank-you/#fund">Merci&nbsp;!</a></li>

                        </ul>
                    </div>
                    <h2><a name="why">Pourquoi donner ?</a></h2>
                    <p>Mageia.Org est une association à but non lucratif créée pour gérer la distribution Mageia.
                       Comme association à but non lucratif, elle peut recevoir des dons de la communauté pour aider dans différents domaines&nbsp;: </p>
                    <ul>
                        <li>matériel et hébergement pour les serveurs&nbsp;; </li>
                        <li>noms de domaines&nbsp;; </li>
                        <li>enregistrements de la marque &nbsp;; </li>
                        <li>goodies pour faire connaître Mageia&nbsp;; </li>
                        <li>dépenses administratives&nbsp;; </li>
                        <li>éventuellement, conseil&nbsp;; </li>
                        <li>etc.</li>
                    </ul>

                    <h2><a name="status">Comment suivre les dons&nbsp;?</a></h2>
                    <p>Actuellement, nous avons <strong><?php echo $g_donate_amount; ?></strong>
                        grâce à tous nos <a href="/en/thank-you/" hreflang="en">donateurs</a>&nbsp;!
                        (mise à jour toutes les semaines)</p>
                    <p>Un rapport mensuel sur les fonds reçus et la façon dont ils ont été utilisés va être mis en place. 
                       Nous pensons que des comptes publics sont d'une importance cruciale.
                       Comme décidé lors de la première assemblée générale constitutive, le trésorier de Mageia.Org est Damien Lallement.</p>
                </div>
            </div>
            <div class="yui-g"><div class="para">
                <h2><a name="d-paypal">Donner via PayPal,</a></h2>
                <?php include '../../paypal.inc.php'; echo html_paypal_form('fr'); ?>
            </div></div>
            <div class="yui-g">
                <div class="yui-u first"><div class="para" style="padding-right: 0;">
                    <h3>via un virement bancaire,</h3>
                    <p>en utilisant le code d'identifiant bancaire (IBAN-BIC) suivant&nbsp;: </p>

                    <pre class="donate-coord">
<u>En faveur de&nbsp;:</u>

<?php echo $G_coord_assos; ?>


<u>Compte bancaire&nbsp;:</u>

<?php echo $G_coord_assos_bank; ?>

</pre>
                </div></div>
                <div class="yui-u"><div class="para">

                    <h3>ou par chèque (&euro; uniquement).</h3>
                    <p>Vous pouvez envoyer vos dons par chèque à cette adresse&nbsp;: </p>
                    <pre class="donate-coord">
<?php echo $G_coord_assos; ?>

</pre>
                    <p>Faites le chèque à l'ordre de "Mageia.Org".</p>
                </div><div class="para">
                    <p><strong>Merci de noter que&nbsp;: </strong></p>

                    <ul>
                        <li>Paypal prélève une petite commission (environ 2%) sur chaque don donc nous recevons un peu moins que ce que vous nous avez envoyé&nbsp;; </li>
                        <li>Les frais de change sont à la charge de Mageia donc, s'il vous plaît, utilisez l'euro (&euro;) comme devise&nbsp;; </li>
                        <li>Si vous souhaitez faire un don anonyme, ajoutez-le en commentaire.</li>
                    </ul>
                </div></div>

            </div>
        </div>
    </div>
</body>
</html>

