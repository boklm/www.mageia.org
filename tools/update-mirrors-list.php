<?php
/**
 * Run this to update lib/cached.list.php mirrors list from mirrors.mageia.org/api
 *
*/

require __DIR__ . '/../lib/Downloads.php';
Downloads::get_all_mirrors(false);