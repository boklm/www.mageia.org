<?php
/**
*/


/**
 * @param string $locale
 *
 * @return array
*/
function html_news($locale = 'en', $count = 5)
{
    $news = get_news($locale, $count);
    $html =  '<ul class="news">';
    $item_tmpl = '<li><a href="%2$s">%3$s</a> <span class="dt">%1$s</span></li>';
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
    return get_feed(blog_link($locale), $count, cache_timeout);

}

/**
*/
function get_feed($url, $count = 5, $cache_timeout = 5)
{
    include_once G_APP_ROOT . '/lib/simplepie/simplepie.inc';

    $feed = new SimplePie($url,
        realpath(G_APP_ROOT . '/var/tmp/cache'),
        3600 * $cache_timeout);

    $feed->set_timeout(2);
    $feed->enable_order_by_date(true);
    $feed->handle_content_type();
    $items = array();

    foreach ($feed->get_items(0, $count) as $item)
    {
        $items[] = array(
            'source' => $item->get_feed()->get_link(),
            'link'   => $item->get_permalink(),
            'title'  => $item->get_title(),
            'date'   => $item->get_date('c'),
            'desc'   => $item->get_description(),
            'author' => $item->get_author()
        );
    }

    unset($feed);

    return $items;
}

/**
*/
function show_feed($locale, $title, $link, $feed, $count = 5, $skip = null) {

    if (!is_null($skip))
        $count += 5;

    $data = get_feed($feed, $count);

    $s = '';
    if (!is_null($title))
        $s .= sprintf('<h3><a href="%s">%s</a></h3>', $link, $title);

    $s .= '<ul id="newslist">';
    foreach ($data as $d) {
        if (!is_null($skip) && strpos($d['link'], $skip) !== false)
            continue;

        $s .= sprintf('<li><a href="%s">%s</a> <span class="dt">%s</span></li>',
            $d['link'], $d['title'], news_date($d['date'], $locale));
    }
    $s .= '</ul>';
    echo $s;
}

/**
*/
function blog_link($locale)
{
    $news = array(
        'el' => 'http://blog.mageia.org/el/',
        'en' => 'http://blog.mageia.org/en/',
        'es' => 'http://blog.mageia.org/es/',
        'fr' => 'http://blog.mageia.org/fr/',
        'de' => 'http://blog.mageia.org/de/',
        'it' => 'http://blog.mageia.org/it/',
        'pl' => 'http://blog.mageia.org/en/', // pl when up to date
        'pt' => 'http://blog.mageia.org/pt/',
        'ro' => 'http://blog.mageia.org/ro/',
        'ru' => 'http://blog.mageia.org/en/', // ru, when up to date
        'tr' => 'http://blog.mageia.org/tr/',
        /* missing: et, fi, lv, nb, nl, sl, zh-cn, zh-tw */
    );

    if (!array_key_exists($locale, $news))
        $locale = 'en';

    $source_url = $news[$locale];

    return $source_url;
}

function planet_link($locale)
{
    $planets = array('en', 'fr', 'de', 'es', 'it', 'pt');
    $locale = in_array($locale, $planets) ? $locale : 'en';

    return sprintf('http://planet.mageia.org/%s/', $locale);
}