<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="pt">
<head>
    <meta charset="utf-8" />
    <title>Campanha de Doação Mageia</title>
    <meta name="description" content="A Mageia é uma nova distribuição Linux baseada na comunidade." />
    <meta name="keywords" content="mageia, doar, doação" />
    <meta name="author" content="Mageia" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" >
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>
    
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh">Campanha de Doação</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para donate">
                    <div style="float: right; border: 1px solid #aaa; padding: 0 0 1em 0; margin: 0 0 2em 1em;">
                        <ul>
                            <li><a href="#why">Porquê doar?</a></li>
                            <li><a href="#status">Estado das doações</a></li>
                            <li><a href="#d-paypal">Doar</a> (PayPal, banco, cheque)</li>
                            <li><a href="/en/thank-you/#fund">Obrigado!</a></li>
                        </ul>
                    </div>
                    <h2 id="why">Porquê doar?</h2>
                    <p>A Mageia.Org é uma associação sem fins lucrativos para gerir a distribuição Mageia.
                        Como uma associação sem fins lucrativos, pode receber doações da comunidade
                        para ajudar em campos diferentes:</p>
                    <ul>
                        <li>material e servidores para hospedagem;</li>
                        <li>nomes de domínio;</li>
                        <li>registos para a marca Mageia;</li>
                        <li>presentes para divulgar a Mageia;</li>
                        <li>despesas de administração;</li>
                        <li>eventualmente, assistência jurídica e</li>
                        <li>etc.</li>
                    </ul>
                    <hr />
                    <h2 id="status">Como estão as doações?</h2>
            <p>Actualmente, temos <strong><?php echo $g_donate_amount; ?></strong> (<a href="/en/about/reports/<?php echo date('Y'); ?>">restante</a> <strong><?php echo $g_amount_remain; ?></strong>)
                        obrigado a todos os nossos <a href="/en/thank-you/">doadores</a>!</p>

            <p>Acreditamos que uma contabilidade pública é crucial. Pode saber mais acerca de como os fundos recebidos são usados ao ler os nossos 
            <a href="/en/about/reports/">relatórios financeiros</a>.
                        Como definido na ata da Primeira Assembleia Constituinte Geral, o tesoureiro da Mageia.Org é o Damien Lallement..</p>
                        
                    <hr />
                </div>
            </div>
            <div class="yui-g"><div class="para">
                <h2 id="d-paypal">Doar através da PayPal,</h2>
                <?php include '../../paypal.inc.php'; echo html_paypal_form('pt'); ?>
            </div></div>
            <div class="yui-g">
                <div class="yui-u first"><div class="para" style="padding-right: 0;">
                    <h3>através de transferência bancária,</h3>
                    <p>usando o seguinte
                        Código Identificador Bancário (IBAN-BIC):</p>
                    <pre class="donate-coord">
<u>A favor de:</u>

<?php echo $G_coord_assos; ?>


<u>Conta Bancária:</u>

<?php echo $G_coord_assos_bank; ?>

</pre>
                </div></div>
                <div class="yui-u"><div class="para">
                    <h3>ou através de cheque (apenas em &euro;).</h3>
                    <p>Pode enviar a sua doação por cheque para este endereço:</p>
                    <pre class="donate-coord">
<?php echo $G_coord_assos; ?>
</pre>
                    <p>Use "Mageia.Org" na linha "Pay to the order of...".</p>
                </div><div class="para">
                    <p><strong>Por favor note que:</strong></p>
                    <ul>
                        <li>A Paypal retira uma pequena comissão por cada doação (cerca de 2%) então obtemos um pouco menos daquilo que nos é enviado;</li>
                        <li>as taxas de conversão são debitas à Mageia, como tal use o &euro; como moeda;</li>
                        <li>se desejar fazer uma doação anónima, por favor adicione um comentário.</li>
                    </ul>
                </div></div>
            </div>
        </div>
    </div>
</body>
</html>