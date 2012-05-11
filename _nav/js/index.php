<?php
//header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Methods: GET');
header('Content-Type: text/javascript;charset=utf-8');
header(sprintf('Expires: %s', gmdate('r', strtotime('+2 day'))));
readfile('source.js');