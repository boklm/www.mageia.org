<?php
header('Content-Type: text/css;charset=utf-8');
header(sprintf('Expires: %s', gmdate('r', strtotime('+1 day'))));
readfile('source.css');
