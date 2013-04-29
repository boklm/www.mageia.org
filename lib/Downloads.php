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
     * Get mirrors list from mirrors.mageia.org,
     * store/cache it in a different key/value format
     * (keys are: "$country" and "_C:$continent"),
     * and return it.
     *
     * Note that the mirrors list doesn't change with versions, for now;
     * it's a full or nothing list.
     *
     * @return array
    */
    public static function get_all_mirrors($prod = true)
    {
        $cache_file = realpath(__DIR__ . '/cached.list.php');

        if ($prod) {
            require $cache_file;

        } else {
            $data    = file('http://mirrors.mageia.org/api/mageia.1.i586.list');
            $mirrors = array();
            foreach ($data as $line) {
                $line = explode(',', trim($line));
                $m    = array();
                foreach ($line as $val) {
                    $val        = explode('=', trim($val));
                    $m[$val[0]] = $val[1];
                }
                $pu = parse_url($m['url']);
                if (in_array($pu['scheme'], array('http', 'ftp'))) {

                    $item = array(
                        'city'      => isset($m['city']) ? $m['city'] : '?',
                        'continent' => isset($m['continent']) ? $m['continent'] : '?',
                        'zone'      => $m['zone'],
                        // BEWARE of the path substitution here. Must match.
                        'url'       => str_replace('/distrib/1/i586', '', $m['url'])
                    );

                    $mirrors[$m['country']][]           = $item;
                    $mirrors['_C:' . $m['continent']][] = $item;
                }
            }

            file_put_contents($cache_file,
                sprintf('<?php $mirrors = %s; ?>',
                        var_export($mirrors, true)));
        }

        return $mirrors;
    }

    /**
     * Get mirrors from stored dictionnary and find:
     * - best matching country
     * - or best matching continent
     * - or random
     *
     * @param string $country
     * @param string $continent
     *
     * @return array
    */
    function get_mirror($country, $continent = null)
    {
        $mirs      = self::get_all_mirrors();
        $continent = '_C:' . $continent;

        if (array_key_exists($country, $mirs))
        {
            $mirs_tmp = $mirs[$country];
            if ($country == 'FR')
            {
                $mirs_tmp = array_merge($mirs_tmp, $mirs['DE']);
            }
            $mirs = $mirs_tmp;
        }
        elseif (array_key_exists($continent, $mirs)) {
            $mirs = $mirs[$continent];
        }
        else
        {
            shuffle($mirs);
            $mirs = array_shift($mirs);
        }

        shuffle($mirs);

        return array_shift($mirs);
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

        // FIXME break this into smaller parts and extract globals so we can test st
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
                    require_once realpath(__DIR__ . '/mga_geoip.php');
                    $country      = MGA_Geoip::mga_geoip_country_by_ip($ip, false);
                    $continent    = MGA_Geoip::mga_geoip_continent_by_country($country);
                    $fuzzy_mirror = true;
                    $_SESSION['country']   = $country;
                    $_SESSION['continent'] = $continent;
                }

                $mirror         = $this->get_mirror($country, $continent);
                $mirror['purl'] = parse_url($mirror['url']);
                
                // reassign country, as get_one_mirror() may have decided
                // to return a mirror from another country than the one
                // requested initially - @see get_one_mirror()
                $country   = $mirror['zone'];
                $continent = $mirror['continent'];

                if (is_null($mirror)) {
                    // @todo?
                }
            }

            // write to session
            $_SESSION['dl-data'] = array(
                'system'    => $system,
                'country'   => $country,
                'continent' => $continent,
                'mirror'    => $mirror
            );
        }
        //
        return array(
            'arch'          => $system['arch'],
            'mirror_host'   => $mirror['purl']['host'],
            'mirror_scheme' => $mirror['purl']['scheme'],
            'mirror_url'    => $mirror['url'],
            'country'       => $country,
            'continent'     => $continent,
            'city'          => $mirror['city'],
            'fuzzy_mirror'  => $fuzzy_mirror
        );
    }
}