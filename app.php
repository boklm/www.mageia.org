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
 * @license  http://www.gnu.org/licenses/gpl-2.0.html GPL-2+
 * @link     http://www.mageia.org/
 *
*/

require 'lib/Pinq/Controller.php';
require 'lib/Pinq/App.php';

$pc = new Pinq_Controller(__DIR__, $_SERVER);
$pc->init();

$routes = array(
//    'downloads' => 'MGA_Downloads'
);

$pc->run($routes);


