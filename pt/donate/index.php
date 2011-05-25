<!DOCTYPE html>
<html dir="ltr" lang="pt">
<head>
    <meta charset="utf-8">
    <title>Campanha de Donação Mageia</title>
    <meta name="description" content="A Mageia é uma nova distribuição Linux baseada na comunidade.">
    <meta name="keywords" content="mageia, doar, donação">
    <meta name="author" content="Mageia">
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
                            <li><a href="#status">Andamento das doações</a></li>
                            <li><a href="#d-paypal">Doar</a> (PayPal, banco, cheque)</li>
                            <li><a href="/en/thank-you/#fund">Agradecimentos!</a></li>
                        </ul>
                    </div>
                    <h2 id="why">Porquê doar?</h2>
                    <p> Mageia.Org é uma associação sem fins lucrativos para gerenciar a distribuição Mageia. Como associação sem fins lucrativos, podemos receber doações da comunidade para ajudar em vários campos diferentes:</p>
                    <ul>
                        <li>hardware e hospedagem para servidores;</li>
                        <li>nomes de domínios;</li>
                        <li>registos de marca;</li>
                        <li>presentinhos para espalhar a Mageia;</li>
                        <li>despesas administrativas;</li>
                        <li>eventualmente, assistência jurídica e </li>
                        <li>etc.</li>
                    </ul>

                    <h2 id="status">Como andam as doações?</h2>
                    <p>Actualmente, temos <strong><?php echo $g_donate_amount; ?></strong>
                        agradecemos a todos nossos <a href="/en/thank-you/">doadores</a>! (actualizado semanalmente)</p>

                    <p>Haverá um relatório mensal sobre os fundos recebidos e como foram utilizados. 
                       Acreditamos que a responsabilidade pública é crucial. Como indicado na ata da Primeira Assembleia Geral Constituinte,
                       o tesoureiro da Mageia.Org é Damien Lallement.</p>
                </div>
            </div>
            <div class="yui-g"><div class="para">
                <h2 id="d-paypal">Doe via PayPal,</h2>
                <?php include '../../paypal.inc.php'; echo html_paypal_form('pt'); ?>
            </div></div>
            <div class="yui-g">
                <div class="yui-u first"><div class="para" style="padding-right: 0;">
                    <h3>por transferência bancária,</h3>
                    <p>usando o seguinte 
                        código de identificação bancária (IBAN-BIC):</p>
                    <pre class="donate-coord"><u>Em favor de:</u>
<?php echo $G_coord_assos; ?>


<u>Conta Bancária:</u>

<?php echo $G_coord_assos_bank; ?>

</pre>
                </div></div>
                <div class="yui-u"><div class="para">
                    <h3>ou via cheque (só Euro).</h3>
                    <p>Pode enviar sua doação por cheque para o endereço:</p>
                    <pre class="donate-coord">
<?php echo $G_coord_assos; ?>

                    </pre>
                    <p>Use "Mageia.Org" na linha "Pague à ordem de...".</p>
                </div><div class="para">
                    <p><strong>Por favor note que:</strong></p>
                    <ul>
                        <li>Paypal retira uma pequena comissão de cada doação (cerca de... %) então ficamos com um pouco menos do que você enviar;</li>
                        <li>taxas de conversão são cobradas a Mageia, então por favor use € (Euro) como moeda;</li>
                        <li>se você quiser fazer uma doação anónima, por favor adicione um comentário.</li>
                    </ul>
                </div></div>
            </div>
        </div>
    </div>
</body></html>