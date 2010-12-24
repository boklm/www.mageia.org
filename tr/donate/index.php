<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="tr">
<head>
    <meta charset="utf-8" />
    <title>Mageia Donation Campaign</title>
    <meta name="description" content="Mageia is new community-based Linux distribution." />
    <meta name="keywords" content="mageia, donate, donation" />
    <meta name="author" content="Mageia" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" >
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>
    
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1>Mageia <span>| Bağış Kampanyası</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para donate">
                    <div style="float: right; border: 1px solid #aaa; padding: 0 0 1em 0; margin: 0 0 2em 1em;">
                        <ul>
                            <li><a href="#why">Neden Bağış?</a></li>
                            <li><a href="#status">Bağışlarda İzlenecek Yol</a></li>
                            <li><a href="#d-paypal">Bağış</a> (PayPal, banka, çek)</li>
                            <li><a href="/en/thank-you/#fund">Teşekkürler!</a></li>
                        </ul>
                    </div>
                    <h2 id="why">Neden Bağış?</h2>
                    <p>Mageia.Org, Mageia dağıtımını yönetmek için kâr amacı
                        gütmeyen bir kuruluştur. Kâr amacı gütmeyen bir kuruluş,
                        birçok farklı konunun çözümüne yardım için, topluluk olarak
                        bağış kabul edebilir;</p>
                    <ul>
                        <li>sunucuları için hosting ve donanım;</li>
                        <li>alan adları;</li>
                        <li>Mageia marka tescili;</li>
                        <li>Mageia'yi yaymak için çalışmalar;</li>
                        <li>yönetim giderleri;</li>
                        <li>hukuk danışmanları;</li>
                        <li>vb.</li>
                    </ul>

                    <h2 id="status">Nasıl bağışta bulunulabilir?</h2>
                    <p>Şu anda; bağışçılarımız sayesinde <strong><?php echo $g_donate_amount; ?></strong> var,
                        <a href="/en/thank-you/">teşekkürler</a>! (haftalık olarak güncellenir).</p>

                    <p>Bu paranın nasıl kullanıldığına dair alınan fonlar aylık
                        bir rapor olarak sunulacak. Bizler bunun bir kamu sorumluluğu
                        olduğuna inanıyoruz. Genel kurul bünyesinde belirtildiği gibi,
                        Mageia.Org Mali işler sorumlusu Damien Lallement'dır.</p>
                </div>
            </div>
            <div class="yui-g"><div class="para">
                <h2 id="d-paypal">Palpay aracılığı ile Bağış,</h2>
                <?php include '../../paypal.inc.php'; echo html_paypal_form('tr'); ?>
            </div></div>
            <div class="yui-g">
                <div class="yui-u first"><div class="para" style="padding-right: 0;">
                    <h3>Banka havalesiyle,</h3>
                    <p>banka tanıtım kodu kullanarak (IBAN-BIC):</p>
                    <pre class="donate-coord">
<u>Lehine olarak:</u>

<?php echo $G_coord_assos; ?>


<u>Banka hesabı:</u>

<?php echo $G_coord_assos_bank; ?>

</pre>
                    <p>İhtiyacınız varsa, bizim <a href="/iban_Mageia.Org.pdf" title="IBAN of Mageia.Org">IBAN'imizi indirebilirsin.</a></p>
                </div></div>
                <div class="yui-u"><div class="para">
                    <h3>veya çekle (yalnıca €),</h3>
                    <p>Bu adrese çek yoluyla bağış gönderebilirsiniz:</p>
                    <pre class="donate-coord">
<?php echo $G_coord_assos; ?>
</pre>
                    <p>Use &quot;Mageia.Org&quot; in the &quot;Pay to the order of...&quot; line.</p>
                </div><div class="para">
                    <p><strong>Lütfen dikkat edin:</strong></p>
                    <ul>
                        <li>Palpay yaptığınız her bağış için küçükte olsa (yaklaşık ...%) bir komisyon almaktadır;</li>
                        <li>Para birimi olarak lütfen € kullanın, dönüşüm oranları Mageia'e yansıtılmaktadır;</li>
                        <li>Eğer isimsiz bir bağış yapmak isterseniz,lütfen bir yorum ekleyin.</li>
                    </ul>
                </div></div>
            </div>
        </div>
    </div>
</body>
</html>
