<?php
/* mga_geoip.php
 * 
 * A simple wrapper around a few geoip functions.
 * Could be improved:
 * - moving the country/continent map in a more efficient structure?
 *
 * Copyright (C) 2012 Mageia.org
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */


class MGA_Geoip {

    // "iso 3166 country","continent code"
    // taken from http://www.maxmind.com/app/country_continent
    public static $MGA_GEOIP_COUNTRY_TO_CONTINENT = array(
        'A1' => '--', 'A2' => '--', 'AD' => 'EU', 'AE' => 'AS', 'AF' => 'AS',
        'AG' => 'NA', 'AI' => 'NA', 'AL' => 'EU', 'AM' => 'AS', 'AN' => 'NA',
        'AO' => 'AF', 'AP' => 'AS', 'AQ' => 'AN', 'AR' => 'SA', 'AS' => 'OC',
        'AT' => 'EU', 'AU' => 'OC', 'AW' => 'NA', 'AX' => 'EU', 'AZ' => 'AS',

        'BA' => 'EU', 'BB' => 'NA', 'BD' => 'AS', 'BE' => 'EU', 'BF' => 'AF',
        'BG' => 'EU', 'BH' => 'AS', 'BI' => 'AF', 'BJ' => 'AF', 'BL' => 'NA',
        'BM' => 'NA', 'BN' => 'AS', 'BO' => 'SA', 'BR' => 'SA', 'BS' => 'NA',
        'BT' => 'AS', 'BV' => 'AN', 'BW' => 'AF', 'BY' => 'EU', 'BZ' => 'NA',

        'CA' => 'NA', 'CC' => 'AS', 'CD' => 'AF', 'CF' => 'AF', 'CG' => 'AF',
        'CH' => 'EU', 'CI' => 'AF', 'CK' => 'OC', 'CL' => 'SA', 'CM' => 'AF',
        'CN' => 'AS', 'CO' => 'SA', 'CR' => 'NA', 'CU' => 'NA', 'CV' => 'AF',
        'CX' => 'AS', 'CY' => 'AS', 'CZ' => 'EU',

        'DE' => 'EU', 'DJ' => 'AF', 'DK' => 'EU', 'DM' => 'NA', 'DO' => 'NA',
        'DZ' => 'AF',

        'EC' => 'SA', 'EE' => 'EU', 'EG' => 'AF', 'EH' => 'AF', 'ER' => 'AF',
        'ES' => 'EU', 'ET' => 'AF', 'EU' => 'EU',

        'FI' => 'EU', 'FJ' => 'OC', 'FK' => 'SA', 'FM' => 'OC', 'FO' => 'EU',
        'FR' => 'EU', 'FX' => 'EU',

        'GA' => 'AF', 'GB' => 'EU', 'GD' => 'NA', 'GE' => 'AS', 'GF' => 'SA',
        'GG' => 'EU', 'GH' => 'AF', 'GI' => 'EU', 'GL' => 'NA', 'GM' => 'AF',
        'GN' => 'AF', 'GP' => 'NA', 'GQ' => 'AF', 'GR' => 'EU', 'GS' => 'AN',
        'GT' => 'NA', 'GU' => 'OC', 'GW' => 'AF', 'GY' => 'SA',

        'HK' => 'AS', 'HM' => 'AN', 'HN' => 'NA', 'HR' => 'EU', 'HT' => 'NA',
        'HU' => 'EU',

        'ID' => 'AS', 'IE' => 'EU', 'IL' => 'AS', 'IM' => 'EU', 'IN' => 'AS',
        'IO' => 'AS', 'IQ' => 'AS', 'IR' => 'AS', 'IS' => 'EU', 'IT' => 'EU',

        'JE' => 'EU', 'JM' => 'NA', 'JO' => 'AS', 'JP' => 'AS',

        'KE' => 'AF', 'KG' => 'AS', 'KH' => 'AS', 'KI' => 'OC', 'KM' => 'AF',
        'KN' => 'NA', 'KP' => 'AS', 'KR' => 'AS', 'KW' => 'AS', 'KY' => 'NA',
        'KZ' => 'AS',

        'LA' => 'AS', 'LB' => 'AS', 'LC' => 'NA', 'LI' => 'EU', 'LK' => 'AS',
        'LR' => 'AF', 'LS' => 'AF', 'LT' => 'EU', 'LU' => 'EU', 'LV' => 'EU',
        'LY' => 'AF',

        'MA' => 'AF', 'MC' => 'EU', 'MD' => 'EU', 'ME' => 'EU', 'MF' => 'NA',
        'MG' => 'AF', 'MH' => 'OC', 'MK' => 'EU', 'ML' => 'AF', 'MM' => 'AS',
        'MN' => 'AS', 'MO' => 'AS', 'MP' => 'OC', 'MQ' => 'NA', 'MR' => 'AF',
        'MS' => 'NA', 'MT' => 'EU', 'MU' => 'AF', 'MV' => 'AS', 'MW' => 'AF',
        'MX' => 'NA', 'MY' => 'AS', 'MZ' => 'AF',

        'NA' => 'AF', 'NC' => 'OC', 'NE' => 'AF', 'NF' => 'OC', 'NG' => 'AF',
        'NI' => 'NA', 'NL' => 'EU', 'NO' => 'EU', 'NP' => 'AS', 'NR' => 'OC',
        'NU' => 'OC', 'NZ' => 'OC',

        'O1' => '--', 'OM' => 'AS',

        'PA' => 'NA', 'PE' => 'SA', 'PF' => 'OC', 'PG' => 'OC', 'PH' => 'AS',
        'PK' => 'AS', 'PL' => 'EU', 'PM' => 'NA', 'PN' => 'OC', 'PR' => 'NA',
        'PS' => 'AS', 'PT' => 'EU', 'PW' => 'OC', 'PY' => 'SA',

        'QA' => 'AS',

        'RE' => 'AF', 'RO' => 'EU', 'RS' => 'EU', 'RU' => 'EU', 'RW' => 'AF',

        'SA' => 'AS', 'SB' => 'OC', 'SC' => 'AF', 'SD' => 'AF', 'SE' => 'EU',
        'SG' => 'AS', 'SH' => 'AF', 'SI' => 'EU', 'SJ' => 'EU', 'SK' => 'EU',
        'SL' => 'AF', 'SM' => 'EU', 'SN' => 'AF', 'SO' => 'AF', 'SR' => 'SA',
        'ST' => 'AF', 'SV' => 'NA', 'SY' => 'AS', 'SZ' => 'AF',

        'TC' => 'NA', 'TD' => 'AF', 'TF' => 'AN', 'TG' => 'AF', 'TH' => 'AS',
        'TJ' => 'AS', 'TK' => 'OC', 'TL' => 'AS', 'TM' => 'AS', 'TN' => 'AF',
        'TO' => 'OC', 'TR' => 'EU', 'TT' => 'NA', 'TV' => 'OC', 'TW' => 'AS',
        'TZ' => 'AF',

        'UA' => 'EU', 'UG' => 'AF', 'UM' => 'OC', 'US' => 'NA', 'UY' => 'SA',
        'UZ' => 'AS',

        'VA' => 'EU', 'VC' => 'NA', 'VE' => 'SA', 'VG' => 'NA', 'VI' => 'NA',
        'VN' => 'AS', 'VU' => 'OC',

        'WF' => 'OC', 'WS' => 'OC',

        'YE' => 'AS', 'YT' => 'AF',

        'ZA' => 'AF', 'ZM' => 'AF', 'ZW' => 'AF'
    );

    /**
     * Wrapper to PHP module function or available MaxMind API library.
     * Works with IPv4 and IPv6 addresses.
     *
     * @param string $ip
     * @param boolean $try_php_module
     *
     * @return string
     *
     * If fail, use $country as a fallback to return.
     * @see http://www.maxmind.com/app/php & http://www.maxmind.com/app/geoip_country
     * It has limitations too & needs to be updated from time to time.
    */
    public static function mga_geoip_country_by_ip($ip, $try_php_module = true)
    {
        if ($ip == '127.0.0.1' || $ip == '::1')
            return null;

        if ($try_php_module && function_exists('geoip_country_code_by_name'))
        {
            // may shout a "Host {IP} not found"
            $loc = @geoip_country_code_by_name($ip);
        }
        else
        {
            require_once realpath(__DIR__ . '/maxmind/geoip/geoipv6.inc.php');
            $gi = _lib_geoip_open(realpath(__DIR__ . '/maxmind/geoip/GeoIPv6.dat'), GEOIP_STANDARD);

            // naive rewrite of IPv4 into IPv6
            if (strpos($ip, ':') === false)
                $ip = '::' . $ip;

            $loc = _lib_geoip_country_code_by_addr_v6($gi, $ip);
            _lib_geoip_close($gi);
        }
        if (trim($loc) == '' || is_null($loc))
            return null;

        return strtoupper($loc);
    }

    /**
     * Get continent after country.
     *
     * @param string $country
     *
     * @return string
    */
    public static function mga_geoip_continent_by_country($country) {

        if (array_key_exists($country, self::$MGA_GEOIP_COUNTRY_TO_CONTINENT))
            return self::$MGA_GEOIP_COUNTRY_TO_CONTINENT[$country];

        return '--';
    }
}