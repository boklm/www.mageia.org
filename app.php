<?php
/**
 * Transition controller for www.mageia.org:
 * we are moving from a simple site where each page is called by its own script file
 * to a site where requests are managed and dispatched by a single controller.
 *
 * But, we do it step by step, without migrating/breaking everything at once.
 * See comments below.
 *
 * PHP version 5.4
 *
 * @category Mageia
 * @package  Mageia\Web\www
 * @author   rda <rda@mageia.org>
 * @link     http://www.mageia.org/
 *
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU GPL v2+
 *
 * This program is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License aspublished by the
 * Free Software Foundation; either version 2 of the License, or (at your
 * option) any later version.
*/

$routes = array(
    //'downloads' => 'MGA_Downloads'
);

require 'lib/Pinq/Controller.php';
require 'lib/Pinq/App.php';
require 'lib/Pinq/Cache.php';

$cache = new Pinq_Memcache_Cache(20);

Pinq_Controller::run(
    __DIR__,
    $routes,
    $_SERVER,
    new Pinq_Memcache_Cache(20)
);
