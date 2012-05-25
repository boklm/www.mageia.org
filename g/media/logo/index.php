<ul><?php
array_walk(glob('*'), function ($i) { if ($i != 'index.php') echo sprintf('<li><a href="%s">%s</a></li>', $i, $i); });
?></ul>