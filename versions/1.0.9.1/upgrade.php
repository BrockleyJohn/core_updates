<?php

    $this_upgrade = [
        'title'    => 'Updating Phoenix Cart 1.0.9.0 to 1.0.9.1',
        'requires' => '1.0.9.0',
        'delete'   => [],
        'disable'  => [],
        'enable'   => [],
        'sql'      => [],
        'notes'    => 'This is the 1.0.9.1 release, the first in the 1.0.9.* optimisation series.',
    ];

    $version_dir = __DIR__;

    require_once dirname(__DIR__) .  '/version_upgrade_builder.php';
    
