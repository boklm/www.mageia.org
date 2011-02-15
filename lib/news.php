<?php
/**
*/


/**
 * @param string $locale
 *
 * @return array
*/
function html_news($locale = 'en')
{
    $news = get_news($locale);
    $html =  '<ul class="news">';
    $item_tmpl = '<li><span class="dt">%s</span> <a href="%s">%s</a> </li>';
    foreach ($news as $item)
    {
        $html .= sprintf($item_tmpl,
            news_date($item['date'], $locale),
            $item['link'],
            $item['title']
            );
    }
    $html .= '</ul>';
    return $html;
}

/**
 * @param string $dt
 * @param string $locale
 *
 * @return string
*/
function news_date($dt, $locale = 'en')
{
    $months = array(
        'en' => array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
        'fr' => array('jan', 'fév', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'sept', 'oct', 'nov', 'déc'),
        'de' => array('Jan', 'Feb', 'Mär', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez')
    );
    $formats = array(
        'en' => 'M d Y',
        'fr' => 'd M Y',
        'de' => 'd. M Y',
        'default' => 'Y-m-d'
    );
    $ft = array_key_exists($locale, $formats) ? $locale : 'default';
    
    $dts = strtotime($dt);
    $dt = date($formats[$ft], $dts);
    if (array_key_exists($locale, $months))
        $dt = str_replace($months['en'], $months[$locale], $dt);

    return $dt;
}

/**
 * @param string $locale
 * @param integer $count
 * @param integer $cache_timeout
 *
 * @return array
*/
function get_news($locale = 'en', $count = 5, $cache_timeout = 5)
{
    $news = array(
        'en' => 'http://blog.mageia.org/',
        'fr' => 'http://blog.mageia.org/fr/',
        'es' => 'http://blog.mageia.org/es/',
        'de' => 'http://blog.mageia.org/de/',
        'el' => 'http://blog.mageia.org/el/',
        'it' => 'http://blog.mageia.org/it/',
        'pt' => 'http://blog.mageia.org/pt-br/', // @fixme => /pt/ once blog is moved
        'ro' => 'http://blog.mageia.org/ro/',
        'tr' => 'http://blog.mageia.org/tr/',
        /* missing: ru, pl, et, fi, lv, nb, nl, sl, zh-cn, zh-tw */
    );

    if (!array_key_exists($locale, $news))
        $locale = 'en';
    
    $source_url = $news[$locale];

    include_once G_APP_ROOT . '/lib/simplepie/simplepie.inc';
    $feed = new SimplePie($source_url,
        realpath(G_APP_ROOT . '/var/tmp/cache'),
        3600 * $cache_timeout);

    $feed->enable_order_by_date(true);

    $feed->handle_content_type();

    $items = array();
    foreach ($feed->get_items(0, $count) as $item)
        $items[] = array(
            'link'  => $item->get_permalink(),
            'title' => $item->get_title(),
            'date'  => $item->get_date('c'),
            'desc'  => $item->get_description(),
            'author' => $item->get_author()
        );

    unset($feed);

    return $items;
}
