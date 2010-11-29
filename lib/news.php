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
    $formats = array(
        'en' => 'M d Y',
        'fr' => 'd M Y',
        'default' => 'Y-m-d'
    );
    $ft = array_key_exists($locale, $formats) ? $locale : 'default';
    
    $dts = strtotime($dt);
    return date($formats[$ft], $dts);
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
        'es' => 'http://blog.mageia.org/es/'
    );

    if (!array_key_exists($locale, $news))
        $locale = 'en';
    
    $source_url = $news[$locale];

    include_once G_APP_ROOT . '/lib/simplepie/simplepie.inc';
    $feed = new SimplePie($source_url,
        realpath(G_APP_ROOT . '/var/tmp/cache'),
        3600 * $cache_timeout);

    //$feed->enable_order_by_date(true);

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