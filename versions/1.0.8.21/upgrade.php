<?php

    $this_upgrade = [
        'title'    => 'Updating Phoenix Cart 1.0.8.20 to 1.0.8.21',
        'requires' => '1.0.8.20',
        'delete'   => [],
        'disable'  => [],
        'enable'   => [],
        'sql'      => [],
        'notes'    => 'This is the 1.0.8.21 release, in the 1.0.8.* series. This is the third release candidate for 1.0.9.0. *** This release will break your store if you have any calls to old tep_ functions. Consult the forums before upgrading if you have any older code in your store and you are uncertain if it supports this version.',
    ];

    $version_dir = __DIR__;

    require_once dirname(__DIR__) .  '/version_upgrade_builder.php';
    



