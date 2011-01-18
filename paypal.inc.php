<?php
/**
*/

/**
*/
function html_paypal_form($lang = 'en')
{
    $buttons = array(
        'en' => 'en_US',
        'fr' => 'fr_FR',
        'es' => 'es_ES',
        'de' => 'de_DE',
        'it' => 'it_IT',
        'nl' => 'nl_NL',
        'pl' => 'pl_PL',
        'zh' => 'zh_CN',
        'zh_cn' => 'zh_CN'
    );
    if (!array_key_exists($lang, $buttons))
        $lang = 'en';

    $btnLoc = $buttons[$lang];

    $html = <<<H
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="pp_form">
    <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="62X2MFQRAYABL">
        <p id="pp_form_btn">
            <input type="image" src="https://www.paypal.com/{$btnLoc}/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypal.com/{$btnLoc}/i/scr/pixel.gif" width="1" height="1">
        </p>
</form>
H;
    return $html;
}