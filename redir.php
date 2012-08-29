<?php

// temporary poor fix for bad queries
// if (isset($_GET['id']) && isset($_GET['msg'])) {
if (false !== strpos($_SERVER['QUERY_STRING'], 'Tenemos')
    || false !== strpos($_SERVER['HTTP_REFERER'], 'blogdeklx1')
) {
    if (rand(0, 2) == 1) {
        header('HTTP/1.1 503 Service Temporarily Unavailable');
        header('Status: 503 Service Temporarily Unavailable');
        header('Retry-After: 7200');
    } else {
        header('HTTP/1.0 404 Not Found');
        header('Status: 404 Not Found');
    }
    die;
}