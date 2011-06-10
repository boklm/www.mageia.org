<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="ru">
<head>
    <meta charset="utf-8" />
    <title>Кампания по сбору подертвований</title>
    <meta name="description" content="Mageia is new community-based Linux distribution." />
    <meta name="keywords" content="mageia, donate, donation" />
    <meta name="author" content="Mageia" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" >
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh">Пожертвования</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para donate">
                    <div style="float: right; border: 1px solid #aaa; padding: 0 0 1em 0; margin: 0 0 2em 1em;">
                        <ul>
                            <li><a href="#why">Зачем нужны пожертвования?</a></li>
                            <li><a href="#status">Отслеживание взносов</a></li>
                            <li><a href="#d-paypal">Внести пожертвование</a> (PayPal, bank, check)</li>
                            <li><a href="/en/thank-you/#fund">Спасибо!</a></li>
                        </ul>
                    </div>
                    <h2><a name="why">Зачем нужны пожертвования?</a></h2>
                    <p>Mageia.Org это некоммерческая организация, занимающаяся управлением и развитием дистрибутива Mageia. 
			    Как некоммерческая организация, мы принимаем пожертвования для помощи в следующих областях:</p>
                    <ul>
                        <li>оборудование и хостинг для серверов;</li>
                        <li>доменные имена;</li>
                        <li>регистрация торговой марки Mageia;</li>
                        <li>товары для популяризации Mageia;</li>
                        <li>административные расходы;</li>
                        <li>периодические юридические затраты</li>
                        <li>и прочее</li>
                    </ul>

                    <h2><a name="status">Как отследить ваши взносы?</a></h2>
                    <p>В настоящее время мы получили <strong><?php echo $g_donate_amount; ?></strong>
                        , спасибо всем нашим <a href="/en/thank-you/">спонсорам</a>! (обновляется еженедельно)</p>

                    <p>Ежемесячно будет выпускаться отчёт о получении и использовании средств.
                        Мы считаем, что доступная публично подотчетность имеет решающее значение. Как указанно в протоколе Первого генерального учередительного собрания, казначеем Mageia.Org является Дамиен Лаллемент.</p>
                </div>
            </div>
            <div class="yui-g"><div class="para">
                <h2><a name="d-paypal">Внести пожертвование через PayPal,</a></h2>
                <?php include '../../paypal.inc.php'; echo html_paypal_form('ru'); ?>
            </div></div>
            <div class="yui-g">
                <div class="yui-u first"><div class="para" style="padding-right: 0;">
                    <h3>через банковский перевод,</h3>
                    <p>используя следующий идентификационный код банка (IBAN-BIC):</p>
                    <pre class="donate-coord">
<u>In favor of:</u>

<?php echo $G_coord_assos; ?>


<u>Bank Account:</u>

<?php echo $G_coord_assos_bank; ?>

</pre>
                </div></div>
                <div class="yui-u"><div class="para">
                    <h3>или через чек (только &euro;).</h3>
                    <p>Вы можете отправлять свои пожертвования чеком, на этот адрес:</p>
                    <pre class="donate-coord">
<?php echo $G_coord_assos; ?>

</pre>
                    <p>Используйте "Mageia.Org" в строке "Оплата на счет ..."</p>
                </div><div class="para">
                    <p><strong>Пожалуйста, примите во внимание, что:</strong></p>
                    <ul>
                        <li>Paypal снимет небольшую комиссию за каждое пожертвование (около 2%), таким образом мы получаем несколько меньше средств, чем вы хотели отправить нам;</li>
                        <li>Пожалуйста, используйте  &euro; как валюту взносов, так как любая другая валюта будет обменяна по текущему курсу.</li>
                        <li>Если вы хотите сделать пожертвование анонимно, пожалуйста, оставьте комментарий.</li>
                    </ul>
                </div></div>
            </div>
        </div>
    </div>
</body>
</html>
