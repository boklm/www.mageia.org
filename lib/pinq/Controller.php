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
class Pinq_Controller
{
    /**
     * @param string $dir     root application directory
     * @param array  $server  $_SERVER array
     *
    */
    public function __construct($dir, $server)
    {
        $this->_app_root = $dir;
        $this->_server   = $server;
    }

    /**
    */
    public static function run($app_root, $routes, $_server, $cache)
    {
        $pc = new self($app_root, $_server);
        $pc->init();

        if (isset($cache)
            && $res = $cache->get($pc->get_cache_key())) {

        } else {
            $res = $pc->_run($routes);

            if (isset($cache)
                && isset($res['cache'])
                && $res['cache'] > 0) {

                $cache->set($res, $pc->cache_key());
            }
        }

        $pc->publish($res);
        unset($pc);
    }

    /**
    */
    public function init()
    {
        $this->method = $this->_server['REQUEST_METHOD'];
        $this->uri    = $this->_server['REQUEST_URI'];

        if (strpos('?', $this->uri) !== false) {
            $uri = explode('?', $this->uri);
            $this->query = $uri[1];
            $this->uri   = $uri[0];
        }
    }

    /**
    */
    public function get_cache_key()
    {
        return sha1(implode('#', array($this->method, $this->uri)));
    }

    /**
     * Prints document headers and contents.
     * It _expects_ $res to be correctly formatted.
     *
     * @param array $res as returned by self::_run()
     *
     * @return void
    */
    public function publish($res)
    {
        //$res['statuts']
        // Content-Length must match buffer + body
        foreach ($res['headers'] as $h => $v) {
            header($h);
        }
        echo $res['buffer'];
        echo $res['body'];
    }

    /**
     * @param array $routes
     *
     * @return boolean
    */
    private function _run($routes = null)
    {
        // static, image files are expected to be served directly by the server.
        $ret = array(
            'body'    => '',
            'buffer'  => '',
            'cache'   => 0,
            'headers' => array()
        );

        // detect path language; if not set, redirect to best fallback language (English for now), end
        $this->lang = $this->get_request_language($this->uri);

        if (!$this->lang_is_managed($this->lang)) {
            // TODO - ignore, with a special code or redirect?
            $this->lang = 'en';
        }

        // TODO ob_start, etc.?

        if ($app = $this->matches_route($this->uri, $routes)) {
            // 1.
            $ret = $this->delegate_to($app);
        } elseif (false) { // TODO
            // 2.
            // delegate to local script
            // TODO look at local code at $uri, and decide if we can/should load it and decorate it. How?
        } elseif ($this->fallback_to_previous_mode($this->uri, $this->lang)) {
            // 3.
            // finally, act as we used to before
        } else {
            // 4.
            // if nothing matched, well...
            $ret = $this->delegate_to('error', array('code' => '404'));
        }

        return $ret;
    }

    /**
     * @param string $uri
     * @param array  $routes
     *
     * @return string
    */
    private function matches_route($uri, $routes)
    {
        $re = '
        /
            \/(([a-zA-Z\-\_]{2,5})\/)?
            (.*)
        /x';

        if (preg_match_all($re, $uri, $matches)) {
            $this->_lang = $matches[2][0];
            $this->_path = $matches[3][0];
        }

        if (is_array($routes) && count($routes) > 0) {
            foreach ($routes as $r => $app) {
                $re = '/' . $r . '/';
                if (preg_match_all($re, $uri, $m)) {
                    return $app;
                }
            }
        }

        return null;
    }

    /**
     * @param string $uri
     *
     * @return string
    */
    function get_request_language($uri)
    {
        $tu   = explode('/', $uri);
        $lang = $tu[1];
        $sl   = strlen($lang);
        if ($this->lang_exists($lang)) {
            return $lang;
        }

        return null;
    }

    /**
    */
    function lang_exists($lang)
    {
        // is it a valid language code? ll[-cc] or ll[_CC]?
        return true;
    }

    /**
    */
    function lang_is_managed($lang)
    {
        // in managed languages array?
        return true;
    }

    /**
     * @param  string $app_name
     *
     * @return boolean
    */
    private function delegate_to($app_name, $options = null)
    {
        $app_cont = realpath(sprintf('%s/apps/%s/%s_app.php', $this->_app_root, $app_name, $app_name));
        if (!file_exists($app_cont)) {
            throw new Exception(sprintf('Expected "%s" app, found no definition file.', $app_name));
        }

        include $app_cont;
        $a = new $app_name($this, $options);

        return $a->run();
    }

    /**
     * @return boolean true if fallback happened
    */
    function fallback_to_previous_mode($uri, $lang)
    {
        $uri = explode('?', $uri);
        $qs  = count($uri) > 1 ? $uri[1] : null;
        $uri = $uri[0];

        $alt_uri = sprintf(
            '/%s/%s',
            'en',
            substr($uri, strlen($lang) + 2)
        );

        $test_uris = array(
            $uri,
            $uri . 'index.php',
            $uri . 'index.html',
            $alt_uri,
            $alt_uri . 'index.php',
            $alt_uri . 'index.html'
        );

        $found = false;

        foreach ($test_uris as $inc_uri) {

            $real_file = realpath($this->_app_root . $inc_uri);
            if (file_exists($real_file) && !is_dir($real_file)) {

                $found = true;
                break;
            }
        }

        if ($found) {
            chdir(dirname($real_file));
            require $real_file;
            return true;
        }

        return false;
    }

}
