<?php
/**
*/

include '../langs.inc.php';

/**
 * Diff two .lang files, to get:
 * - strings count of each
 * - missing strings (in $a, not in $b)
 * - extra strings (in $b, not in $a)
 * - untranslated strings (same in $a and $b, or empty in $b)
 *
 * @param string $a file name
 * @param string $b file name
 *
 * @return array
 *
 * @todo some strings may be left untranslated on purpose
*/
function _lang_diff($a, $b)
{
    $fa = i18n::_lang_return($a);
    $fb = i18n::_lang_return($b);

    $ret = array(
        'aCount' => count($fa),
        'bCount' => count($fb),
        'diff'   => count($fa) - count($fb),
    );
    $missing = array();
    $notrans = array();

    $ka = array_keys($fa);
    $kb = array_keys($fb);

    $missing = array_diff($ka, $kb);
    $extra   = array_diff($kb, $ka);

    // search for untranslated strings
    foreach ($fa as $k => $v) {
        if (array_key_exists($k, $fb)) {
            if ($v == $fb[$k] || '' == $fb[$k]) {
                $notrans[] = $k;
            }
        }
    }

    return array(
        'a_name'  => $a,
        'b_name'  => $b,
        'a'       => count($fa),
        'b'       => count($fb),
        'missing' => $missing,
        'notrans' => $notrans,
        'extra'   => $extra
    );
}

function _lang_diff_stats($a, $b)
{
    $diff = _lang_diff($a, $b);

    $diff['missing'] = count($diff['missing']);
    $diff['notrans'] = count($diff['notrans']);
    $diff['extra']   = count($diff['extra']);
    $diff['ok']      = (($diff['b'] - $diff['a']) == 0) ? true : false;
    $diff['correct'] = $diff['b'] - $diff['notrans'] - $diff['missing'];

    return $diff;
}

if ( ! function_exists('glob_recursive'))
{
    // Does not support flag GLOB_BRACE

    function glob_recursive($pattern, $flags = 0)
    {
        $files = glob($pattern, $flags);

//      removing dirs from $files as they are not files ;)
        $files_wo_dirs = array();
        foreach ($files as $single_file) {
            $single_file_as_string = str_split($single_file);
            $last_sign = array_pop($single_file_as_string);
            if($last_sign != '/') {
                $files_wo_dirs[] = $single_file;
            };
        }
        $files = $files_wo_dirs;

        foreach (glob(dirname($pattern).'/*', GLOB_ONLYDIR|GLOB_NOSORT) as $dir)
        {
			$files = array_merge($files, glob_recursive($dir.'/'.basename($pattern), $flags));
        }

        return $files;
    }
}

function _lang_file_switch($s, $l)
{
    $s = str_replace('en.lang', $l . '.lang', $s);
    return str_replace('en/', $l . '/', $s);
}

function get_lang_references()
{
    return glob_recursive('en/*', GLOB_MARK);
}

function get_other_langs()
{
    $ls = glob('*');
    $re = array();
    foreach ($ls as $l) {
        if (!is_dir($l)) continue;
        if ($l == 'en') continue;
        $re[] = $l;
    }
    array_unshift($re, 'en');
    return $re;
}