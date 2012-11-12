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

abstract class Pinq_Cache
{
    abstract public function __construct();

    /**
     * @param string $key
     *
     * @return mixed
    */
    abstract public function get($key);

    /**
     * @param mixed   $value
     * @param string  $key
     * @param integer $timeout
    */
    abstract public function set($value, $key, $timeout = 0);
}

class Pinq_Memcache_Cache extends Pinq_Cache
{

    public function __construct($timeout = 0)
    {
        $this->timeout = $timeout;
    }

    public function get($key)
    {

    }

    public function set($value, $key, $timeout = 0)
    {
        $timeout = $timeout > 0 ? $timeout : $this->timeout;
    }
}