<?php
define('HLANG', true);

require '../../langs.php';
include 'locales.php';

$_t = i18n::get_strings($_t, $locale, $i18n_fallback_rules);

?><!DOCTYPE html>
<html dir="ltr" lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php _e('Donate to Mageia')?></title>
    <meta name="description" content="">
    <meta name="keywords" content="<?php _e('mageia, donate, donation, donors, help'); ?>">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <?php include '../../analytics.php'; ?>
    <style>
    .para { text-align: left; float: left; width: 400px; display: block; }
    .donoptions { width: 400px; float: left; display: block; }
    #options { list-style: none; padding: 0; margin: 0; }
    #options > li { list-style: none; padding: 0; margin: 0 0 4em 0; }
    .dlinfo li { margin-bottom: 0.6em; }
    </style>
</head>
<body class="contribute donate">
    <?php echo $hsnav; ?>
    <h1 id="mgnavt"><?php _e('Donate to Mageia')?></h1>
    
    <div class="para donoptions">
        <ul id="options">
            <li><h2 id="d-paypal"><?php _e('Donate via PayPal,'); ?></h2>
                <?php include '../../paypal.inc.php'; echo html_paypal_form($locale); ?>
            </li>
            <li><h3><?php _e('via bank transfer,'); ?></h3>
                <p><?php _e('using the following Bank Identifier Code (IBAN-BIC):') ?></p>
                <pre class="donate-coord">
<u><?php _e('In favor of:'); ?></u>

<?php echo $G_coord_assos; ?>


<u><?php _e('Bank Account:') ?></u>

<?php echo $G_coord_assos_bank; ?>

</pre>
            </li>
            <li><h3><?php _e('or via check (&euro; only).')?></h3>
                <p><?php _e('You can send your donation by check to this address:')?></p>
                <pre class="donate-coord">
<?php echo $G_coord_assos; ?>
</pre>
                <p><?php _e('Use "Mageia.Org" in the "Pay to the order of..." line.');?></p>
            </li>
            <li class="dlinfo">
                <p><strong><?php _e('Please note that:')?></strong></p>
                <ul>
                    <li><?php _e('Paypal withdraws a small commission for each donation (around 2%) so we get a little bit less than you send;')?></li>
                    <li><?php _e('conversion rates are charged to Mageia, so please use &euro; as currency;')?></li>
                    <li><?php _e('if you want to do an anonymous donation, please add a comment.')?></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="para whydonate">
        <h2 id="why"><?php _e('Why donate?'); ?></h2>
        <p><?php _e('why_donate_txt')?></p>
        <ul><?php foreach (_t('why_donate_items') as $e)
            echo sprintf('<li>%s</li>', $e);
            ?>
        </ul>
    </div>
    <div class="para track">
    <h2 id="status"><?php _e('How to track donation?')?></h2>
    <p><?php echo sprintf(_t('how_to_track_txt'),
        $g_donate_amount, $g_amount_remain);?></p>
    <p><?php echo sprintf(_t('how_to_track_txt2'), '/en/about/reports/' . date('Y') . '/')?></p>

    <hr />
<!--

    <pRE><mark>
TODO: projected funds/provisions: high level, then detailed budget.
People can choose how to distribute their donation among those:
* infrastructure:
- servers
- ...
* communication
- Web
- print
* give back to other projects/associations (April, FS projects)
* employment in mageia.org
* IP/brand
* ?
* other
    </mark></pre>
    </div>
-->
    
</body>
</html>
