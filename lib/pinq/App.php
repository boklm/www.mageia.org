<?php
/**
 *
 * PHP version 5.4
 *
 * @category Mageia
 * @package  Mageia\Web\www\Pinq
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


/**
*/
abstract class Pinq_App
{
    function __construct($controller, $options)
    {
        $this->_control = $controller;
        $this->_options = $options;
    }

    abstract function run();
}