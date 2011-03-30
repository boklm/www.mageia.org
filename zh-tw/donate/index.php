<!DOCTYPE html>
<html dir="ltr" lang="zh-tw">
<head>
    <meta charset="utf-8">
    <title>Mageia | 捐款活動</title>
    <meta name="description" content="Mageia is new community-based Linux distribution.">
    <meta name="keywords" content="mageia, donate, donation">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" >
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh">捐款活動</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para donate">
                    <div style="float: right; border: 1px solid #aaa; padding: 0 0 1em 0; margin: 0 0 2em 1em;">
                        <ul>
                            <li><a href="#why">為什麼需要捐款？</a></li>
                            <li><a href="#status">追蹤捐款的使用情形</a></li>
                            <li><a href="#d-paypal">捐款方式</a> (PayPal, bank, check)</li>
                            <li><a href="/en/thank-you/#fund">感謝您！</a></li>
                        </ul>
                    </div>
                    <h2 id="why">為什麼需要捐款？</h2>
                    <p>Mageia.Org 是一個管理 Mageia 套件的非營利組織。因為是非營利性質，所以它需要社群的捐助，以便協助以下的事項：</p>
                            <ul>
                    <li>伺服器的主機與安置；</li>
                    <li>網域名稱；</li>
                                <li>Mageia 商標的註冊；</li>
                    <li>散佈 Mageia 所需資源；</li>
                    <li>管理上的花費；</li>
                    <li>法律上的諮詢；</li>
                    <li>... 還有更多其它的事項。</li>
                    </ul>

                    <h2 id="status">如何追蹤捐款的使用情形？</h2>
                    <p>目前，我們已經收到了 <strong><?php echo $g_donate_amount; ?></strong> 的捐款。感謝我們所有的<a href="/en/thank-you/">捐款人</a>！（此資訊會每週更新）</p>

		    <p>我們將會每個月報告一次所收到的捐款，以及它們使用的情況。我們相信財務狀況的透明化是絕對必須的。Mageia.Org 的財務主管為 Damien Lallement，並已列名在 The First General Constitutive Assembly 的紀錄中。</p>
                </div>
            </div>
            <div class="yui-g"><div class="para">
                <h2 id="d-paypal">若您要透過 PayPal 捐款，</h2>
                <?php include '../../paypal.inc.php'; echo html_paypal_form('en'); ?>
            </div></div>
            <div class="yui-g">
                <div class="yui-u first"><div class="para" style="padding-right: 0;">
                    <h3>若您要透過銀行轉帳捐款，</h3>
                    <p>請使用下列的銀行代碼(IBAN-BIC)：</p>
                    <pre class="donate-coord"><u>收款對象：</u>

<?php echo $G_coord_assos; ?>


<u>銀行帳戶：</u>

<?php echo $G_coord_assos_bank; ?>

</pre>
                </div></div>
                <div class="yui-u"><div class="para">
                    <h3>若您要透過支票捐款（只接受歐元），</h3>
                    <p>您可以將您的捐款支票寄到以下地址：</p>
                    <pre class="donate-coord">
<?php echo $G_coord_assos; ?>

</pre>
                    <p>付款對象請填寫 "Mageia.Org"。</p>
                </div><div class="para">
                    <p><strong>請注意以下事項：</strong></p>
                    <ul>
                        <li>Paypal 會對每筆付款按比例抽取手續費 (約 ...%)。這表示您捐出來的數目跟我們收到的數目會有點出入；</li>
                        <li>匯率轉換的費用會由 Mageia 吸收，所以請使用歐元捐款；</li>
                        <li>若您要匿名捐款，請加註說明。</li>
                    </ul>
                </div></div>
            </div>
        </div>
    </div>
</body></html>
