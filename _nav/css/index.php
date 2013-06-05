<?php
/**
 * mageia.org global nav bar.
 *
 * PHP version 5.4
 *
 * @category Mageia
 * @package  Mageia\Web\nav
 * @author   rda <rda@mageia.org>
 * @link     http://nav.mageia.org/
 *
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU GPL v2+
 *
 * This program is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License aspublished by the
 * Free Software Foundation; either version 2 of the License, or (at your
 * option) any later version.
*/

header('Content-Type: text/css;charset=utf-8');
header(sprintf('Expires: %s', gmdate('r', strtotime('+1 day'))));
echo str_replace('nav.mageia.org', $_SERVER['HTTP_HOST'], file_get_contents('source.css'));
