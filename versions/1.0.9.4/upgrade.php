<?php

    $this_upgrade = [
        'title'    => 'Updating Phoenix Cart 1.0.9.3 to 1.0.9.4',
        'requires' => '1.0.9.3',
        'delete'   => [],
        'disable'  => [],
        'enable'   => [],
        'sql'      => [],
        'notes'    => 'This is the 1.0.9.4 release, continuing the 1.0.9.* optimisation series. This release changes the default look of PhoenixCart which is a requisite on the pathway to Bootstrap 5.',
    ];

    $version_dir = __DIR__;

    require_once dirname(__DIR__) .  '/version_upgrade_builder.php';
    
