<?php

require realpath(__DIR__ . '/../testmore.php');
require realpath(__DIR__ . '/../../langs.inc.php');

plan('no_plan');

diag('Testing langs.inc.php functions.');


is(relocate($langs, null, 'en', 'en'), '/en/');
is(relocate($langs, null, 'en', 'pt-BR,pt;q=0.8,es;q=0.6,en-US;q=0.4,en;q=0.2'), '/pt-br/');

