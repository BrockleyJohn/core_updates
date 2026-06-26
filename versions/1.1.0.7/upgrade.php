<?php

    $this_upgrade = [
        'title'    => 'Updating Phoenix Cart 1.1.0.6 to 1.1.0.7',
        'requires' => '1.1.0.6',
        'delete'   => [],
        'disable'  => [],
        'enable'   => [],
        'sql'      => [],
        'notes'    => 'This is the 1.1.0.7 release, continuing the 1.1.0.* optimisation series.
This release includes minor bugfixes, php 8.4 compatibility and general updates.<br/> New Features:<ul>
    <li>[Layout PI] - More PI Product Info Modules introduced</li>
    <li>[Navigation] - Extra Module "Announcements" added to Navigation</li>
    <li>[Side Boxes] - Some Side Boxes re-introduced</li>
    <li>[Modularisation] - Advanced Search Result page modularisation</li>
</ul>',
    ];

    $version_dir = __DIR__;

    require_once dirname(__DIR__) .  '/version_upgrade_builder.php';

