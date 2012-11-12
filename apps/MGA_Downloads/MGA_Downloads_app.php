<?php
/**
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

class MGA_Downloads extends Pinq_App
{
    function __construct($controller, $options)
    {
        $this->_control = $controller;
        $this->_options = $options;
        echo "c";
    }

    function run()
    {
        echo "run";
    }
}