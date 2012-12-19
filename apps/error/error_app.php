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

class Error extends Pinq_App
{
    public function __construct($controller, $options)
    {
        $this->_control = $controller;
        $this->_options = $options;
    }

    public function run()
    {
        if ($this->_options['code'] == 404) {
            return $this->_error_404();
        }
    }

    private function _error_404()
    {
        define('HLANG', true);
        require 'langs.php'; // needs absolute path in some form to be link depth independent
        _lang_load($locale, '404');

        ob_start();
        include 'templates/404.tpl';

        return array(
            'headers' => array(
                'Mageia-Test: 1',
                'HTTP/1.0 404 Not Found',
                'Status: 404 Not Found'
            ),
            'body'    => ob_get_clean()
        );
    }
}