<?php

$ini = parse_ini_file('definitions.ini', true);

foreach ($ini as $section => $values) {
    
        echo '<section><h2>', $section, '</h2>';
        echo sprintf('<section><h2>%s</h2><ul><li><code>%s</code></li><li>%s</li></section>',
            $values['name'],
            '$MIRROR/' . $values['path'] . $values['file'],
            $values['size']
        );

        echo '<ul>';
        foreach ($values as $k => $v)
            echo '<li>', $k, ' = ', $v, '</li>';
        echo '</ul></section>';
}