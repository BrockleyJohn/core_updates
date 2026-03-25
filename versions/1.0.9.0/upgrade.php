<?php

    $this_upgrade = [
        'title'    => 'Updating Phoenix Cart 1.0.8.21 to 1.0.9.0',
        'requires' => '1.0.8.21',
        'delete'   => [],
        'disable'  => [],
        'enable'   => [],
        'sql'      => [],
        'notes'    => 'This is the 1.0.9.0 release, the culmination of the 1.0.8.* series.',
    ];

    $version_dir = __DIR__;

    require_once dirname(__DIR__) .  '/version_upgrade_builder.php';
    
