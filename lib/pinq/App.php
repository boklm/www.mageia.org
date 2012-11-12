<?php
/**
 *
 * PHP version 5.4
 *
 * @category Mageia
 * @package  Mageia\Web\www\Pinq
 * @author   rda <rda@mageia.org>
 * @license  http://www.gnu.org/licenses/gpl-2.0.html GPL-2+
 * @link     http://www.mageia.org/
 *
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