<?xml version="1.0" encoding="utf-8"?> 
<!DOCTYPE html> 
<html dir="ltr" lang="es"> 
<head> 
    <meta charset="utf-8" /> 
    <title>Mageia Campaña de Donaciones</title> 
    <meta name="description" content="Mageia is new community-based Linux distribution." /> 
    <meta name="keywords" content="mageia, donate, donation" /> 
    <meta name="author" content="Mageia" /> 
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" > 
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>
    <div id="doc" class="yui-t7"> 
        <div id="hd" role="banner"><h1>Mageia <span> | Campaña de Donaciones</span></h1></div> 
        <div id="bd" role="main"> 
            <div class="yui-g"> 
                <div class="para donate"> 
                    <div style="float: right; border: 1px solid #aaa; padding: 0 0 1em 0; margin: 0 0 2em 1em;"> 
                        <ul> 
                            <li><a href="#why">¿Por qué donar?</a></li> 
                            <li><a href="#status">Seguimiento de donaciones</a></li> 
                            <li><a href="#d-paypal">Donaciones</a> (PayPal, transferencias, cheques)</li> 
                            <li><a href="/en/thank-you/#fund">Gracias!</a></li> 
                        </ul> 
                    </div> 
                    <h2><a name="why">¿Por qué donar?</a></h2> 
                    <p>Mageia.org es una organización sin fines de lucro cuya misión principal es administrar la distribucción Mageia. Como toda organización de este tipo, puede recibir donaciones de la comunidad para ayudar en diferentes campos:</p> 
                    <ul> 
                        <li>Hardware y servicios de hosting de los servidores.</li>
                        <li>Nombre de dominio internet.</li>
                        <li>El registro de la marca Mageia.</li>
                        <li>Difusión de la distribucción.</li>
                        <li>Gastos administrativos.</li>
                        <li>eEventualidades, asesoramiento legal, etc </li>
                     </ul>

                    <h2><a name="status">¿Cómo realizar un seguimiento a las donaciones?</a></h2>
                    <p>Actualmente, disponemos de <strong><?php echo $g_donate_amount; ?></strong> (cifra que se actualiza semanalmente)
                        y, desde aquí, nuestro sincero agradecimiento a todos los  <a href="/en/thank-you/">donantes</a></p> 

                    <p>Se realizará un informe mensual con los fondos recibidos y cómo han sido usados. Creemos que la contabilidad pública es crucial. Damien Lamien es el tesorero de Mageia.org, tal y como está establecido en las minutas de Primera Asamblea Constituiva General.</p>
                </div>
            </div>
            <div class="yui-g"><div class="para">
                <h2><a name="d-paypal">Donaciones Via PayPal,</a></h2>
                <?php include '../../paypal.inc.php'; echo html_paypal_form('es'); ?>
            </div></div>
            <div class="yui-g">
                <div class="yui-u first"><div class="para" style="padding-right: 0;">
                    <h3>Vía transferencia bancaria</h3>
                    <p>Usando el siguiente Codígo de Identificación Bancaria (IBAN-BIC):</p>
                    <pre class="donate-coord">
<u>A favor de:</u>

<?php echo $G_coord_assos; ?>


<u>Cuenta bancaria:</u>

<?php echo $G_coord_assos_bank; ?>


</pre>
                    <p>Si es necesario puede <a href="/iban_Mageia.Org.pdf" title="IBAN of Mageia.Org">descargar nuestro IBAN</a>.</p>
                </div></div> 
                <div class="yui-u"><div class="para"> 
                    <h3>o vía cheque (&euro; solamente).</h3> 
                    <p>Puede enviar su donación a la siguiente dirección:</p> 
                    <pre class="donate-coord"> 
<?php echo $G_coord_assos; ?>

</pre> 
                    <p>En el apartado "a favor de" o "a la orden de": deberá indicar "Mageia.org".</p>
                </div><div class="para"> 
                    <p><strong>Por favor tenga en cuenta que:</strong></p> 
                    <ul> 
                        <li>Paypal cobra una pequeña comisión por cada donación, con lo cual la donación se verá ligeramente reducida por ese sistema.</li>
                        <li>El cambio de moneda será cobrado siempre a Mageia.org; por lo cual, le agradeceremos mucho si pudiera usar el &euro como moneda.</li> 
                        <li>Si desea que su donación permanezca anónima, indíquelo explícitamente en su comentario.</li>
                    </ul> 
                </div></div> 
            </div> 
        </div> 
    </div> 
</body> 
</html>