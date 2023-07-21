<?php

return \StubsGenerator\Finder::create()
    ->in('source/gravityforms/includes')
    ->append(
        \StubsGenerator\Finder::create()
            ->in(['source/gravityforms'])
            ->files()
            ->depth('< 1')
            ->name('*.php')
            ->sortByName(true)
    )
    ->notPath('webapi/v2/includes/controllers/class-wp-rest-controller.php')
    ->sortByName()
;
