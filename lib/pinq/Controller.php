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
    public function init()
    {
        $this->uri = $this->_server['REQUEST_URI'];

        if (strpos('?', $this->uri) !== false) {
            $uri = explode('?', $this->uri);
            $this->query = $uri[1];
            $this->uri   = $uri[0];
        }
    }

    /**
     * @param array $routes
     *
     * @return boolean
    */
    public function run($routes = null)
    {
        // static, image files are expected to be served directly by the server.

        // detect path language; if not set, redirect to best fallback language (English for now), end
        $this->lang = $this->get_request_language($this->uri);
        if (!$this->lang_is_managed($this->lang)) {
            // TODO
        }

        // delegate to declared routes/apps
        $re = '
        /
            \/(([a-zA-Z\-\_]{2,5})\/)?
            (.*)
        /x';

        if (preg_match_all($re, $this->uri, $matches)) {
            $this->_lang = $matches[2][0];
            $this->_path = $matches[3][0];
        }

        if (is_array($routes) && count($routes) > 0) {
            foreach ($routes as $r => $app) {
                $re = '/' . $r . '/';
                if (preg_match_all($re, $this->uri, $m)) {
                    return $this->delegate_to($app);
                }
            }
        }

        // delegate to local script
        // TODO look at local code at $uri, and decide if we can load it and decorate it.

        // finally, act as we used to before
        if ($this->fallback_to_previous_mode($this->uri, $this->lang)) {
            return true;
        }

        // if nothing matched, well...
        return $this->delegate_to('error', array('code' => '404'));
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
        $alt_uri = sprintf(
            '/%s/%s', 
            'en',
            substr($uri, strlen($lang) + 2)
        );

        $test_uris = array(
/*
            $uri,
            $uri . 'index.php',
            $uri . 'index.html',
/**/
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
