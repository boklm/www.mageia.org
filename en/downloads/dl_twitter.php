<?php

/**
*/
function dl_twitter($locale)
{
    $langs = array(
        'en' => 'I just downloaded Mageia 1, a new Linux distribution! Try it out!',
        'fr' => 'Je viens de télécharger Mageia 1, nouvelle distribution Linux. À vous d\'essayer !',
        'de' => 'Habe gerade Mageia 1, eine neue Linuxdistribution heruntergeladen, Versuche es selbst!'
    );
    if (!array_key_exists($locale, $langs))
        $locale = 'en';

    $s = <<<S
<a
    href="http://twitter.com/share"
    class="twitter-share-button"
    data-url="http://mageia.org"
    data-text="{$langs[$locale]}"
    data-count="horizontal"
    data-via="mageia_org"
    data-lang="{$locale}">Tweet</a>
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
S;
    return $s;
}
