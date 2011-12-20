<?php
/**
 * Class regrouping basic methods for download page.
 *
 * @copyright 2009-2011  Romain d'Alverny <rda>
 * @license GPL-3+
 *
*/
class Downloads
{
    /**
    */
    function __construct()
    {
    }
    /**
     * @param string $ua
     *
     * @return array
     *
     * @todo unit tests or use something else
     * Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_4_11; fr) AppleWebKit/533.18.1 (KHTML, like Gecko) Version/4.1.2 Safari/533.18.5
     * Mozilla/5.0 (X11; Linux i686; rv:2.0) Gecko/20110330 Firefox/4.0
     * other old ones
     *
     * @todo refactor this
    */
    public static function get_platform($ua = null)
    {
        if ($ua == '')
            return array(
                'arch'    => 'i586',
                'system'  => 'unknown',
                'locale'  => 'en',
                'browser' => null
            );

        $locale = null;

        if (preg_match_all('/([.^\(^\)]*) \((.*)\) (.*)/', $ua, $r))
        {
            $r = $r[2][0];
            $r = explode(';', $r);
            if (isset($r[3])) {
                $r = explode(')', trim($r[3]));
                if (strlen($r[0]) > 5)
                    $r = substr($r[0], 0, 5);
                else
                    $r = $r[0];
            }
            else
                $r = null;

            $locale = $r;
        }

        $arch = 'i586';
        if (strpos($ua, 'x86_64') !== false)
            $arch = 'x86_64';

        $sys = null;
        if (strpos($ua, 'Windows') !== false)
            $sys = 'win';
        elseif (strpos($ua, 'Macintosh') !== false
            || strpos($ua, 'Mac OS X') !== false)
            $sys = 'mac';
        elseif (strpos($ua, 'Linux') !== false)
            $sys = 'linux';

        $browser = null;
        if (strpos($ua, 'Firefox') !== false)
            $browser = 'firefox';
        elseif (strpos($ua, 'MSIE') !== false)
            $browser = 'msie';
        elseif (strpos($ua, 'Safari') !== false)
            $browser = 'safari';
        elseif (strpos($ua, 'Opera') !== false)
            $browser = 'opera';

        return array(
            'arch'    => $arch,
            'system'  => $sys,
            'locale'  => $locale, // FIXME (rda) use Accept-Language instead
            'browser' => $browser
        );
    }

    /**
    */
    public static function get_all_mirrors()
    {
        $prod = true;
        $cache_file = realpath(__DIR__ . '/cached.list.php');

        if ($prod) {
            require $cache_file;
            return $mirrors;
        }

        // @todo cache this!
        $data     = file('http://mirrors.mageia.org/api/mageia.1.i586.list');
        $mirrors3 = array();
        foreach ($data as $line) {
            $line = explode(',', trim($line));
            $m    = array();
            foreach ($line as $val) {
                $val        = explode('=', trim($val));
                $m[$val[0]] = $val[1];
            }
            $pu = parse_url($m['url']);
            if (in_array($pu['scheme'], array('http', 'ftp')))
                $mirrors3[$m['country']][] = array(
                    'city' => isset($m['city']) ? $m['city'] : '?',
                    'zone' => $m['zone'],
                    // BEWARE of the path substitution here. Must match.
                    'url' => str_replace('/distrib/1/i586', '', $m['url'])
                );
        }

        /*
        file_put_contents($cache_file,
            sprintf('<?php $mirrors = %s; ?>',
                    var_export($mirrors3, true)));
        //*/

        return $mirrors3;
    }

    /**
    */
    function get_mirror($country)
    {
        $mirs = self::get_all_mirrors();
        if (array_key_exists($country, $mirs))
        {
            $mirs_tmp = $mirs[$country];
            if ($country == 'FR')
            {
                $mirs_tmp = array_merge($mirs_tmp, $mirs['DE']);
            }
            shuffle($mirs_tmp);

            return array_shift($mirs_tmp);
        }
        else
        {
            shuffle($mirs);
            $mirs = array_shift($mirs);
            shuffle($mirs);

            return array_shift($mirs);
        }
    }

    /**
     * Queries a GeoIP db for $ip to get the country.
     *
     * @param string $ip
     *
     * @return string
     *
     * If fail, use $country as a fallback to return.
     * @see http://www.maxmind.com/app/php & http://www.maxmind.com/app/geoip_country
     * It has limitations too & needs to be updated from time to time.
     *
     * @todo make a separate class for this.
     * @todo unit tests for this!
    */
    function get_country($ip)
    {
        if ($ip == '127.0.0.1' || $ip == '::1')
            return null;

        if (function_exists('geoip_country_code_by_name'))
        {
            // may shout a "Host {IP} not found"
            $loc = @geoip_country_code_by_name($ip);
        }
        else
        {
            require_once realpath(__DIR__ . '/maxmind/geoip/geoip.inc.php');
            $gi  = geoip_open(realpath(__DIR__ . '/maxmind/geoip/GeoIP.dat'), GEOIP_STANDARD);
            $loc = @geoip_country_code_by_addr($gi, $ip);
            geoip_close($gi);
        }
        if (trim($loc) == '' || is_null($loc))
            return null;

        return strtoupper($loc);
    }

    function prepare_download($force = false, $country = null)
    {
        return $this->get_one_mirror($force, $country);
    }

    /**
     * Setup session data about current visitor for downloads.
     *
     * @param boolean $force
     *
     * @return array
     *
     * TODO extract as much as possible $_SESSION(read) and $_SERVER and $_GET
    */
    function get_one_mirror($force = false, $country = null)
    {
        $fuzzy_mirror = false;

        if (!is_null($country))
            $force = true;

        if (!$force && isset($_SESSION['dl-data']))
        {
            //error_log(sprintf('Got session data: %s', print_r($_SESSION['dl-data'], true)));
            $system  = $_SESSION['dl-data']['system'];
            if (isset($_GET['mirror']))
            {
                $mirror                        = array('url' => $_GET['mirror']);
                $mirror['purl']                = parse_url($mirror['url']);
                $_SESSION['dl-data']['mirror'] = $mirror;
                $country                       = '';
            }
            else
            {
                $country = $_SESSION['dl-data']['country'];
                $mirror  = $_SESSION['dl-data']['mirror'];
            }
        }
        else
        {
            //error_log('getting platform');
            $system = self::get_platform($_SERVER['HTTP_USER_AGENT']);
            if (isset($_GET['mirror']))
            {
                $mirror         = array('url' => $_GET['mirror']);
                $mirror['purl'] = parse_url($mirror['url']);
                $country        = null;
            }
            else
            {
                //error_log('no mirror set yet');
                if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])
                    && $str = $_SERVER['HTTP_X_FORWARDED_FOR'])
                {
                    $arr = explode(', ', $str);
                    $ip  = $arr[0];
                }
                else
                    $ip = $_SERVER['REMOTE_ADDR'];

                $_SESSION['ip'] = $ip;
                if (is_null($country))
                {
                    $country      = self::get_country($ip);
                    $fuzzy_mirror = true;
                }

                $mirror         = $this->get_mirror($country);
                $mirror['purl'] = parse_url($mirror['url']);
                
                // reassign country, as get_one_mirror() may have decided
                // to return a mirror from another country than the one
                // requested initially - @see get_one_mirror()
                $country = $mirror['zone'];

                if (is_null($mirror)) {
                    // @todo?
                }
            }

            // write to session
            $_SESSION['dl-data'] = array(
                'system'  => $system,
                'country' => $country,
                'mirror'  => $mirror
            );
        }
        //
        return array(
            'arch'          => $system['arch'],
            'mirror_host'   => $mirror['purl']['host'],
            'mirror_scheme' => $mirror['purl']['scheme'],
            'mirror_url'    => $mirror['url'],
            'country'       => $country,
            'city'          => $mirror['city'],
            'fuzzy_mirror'  => $fuzzy_mirror
        );
    }
}