<?php

return [
    'enabled' => env('BHAR_PHYIT_ENABLED', true),

    'usuage_mode' => 'local',

    /**
     * The values of these keys in headers and parameters will be replaced with *****.
     */
    'hidden' => [
        'search',
    ],

    /**
     * The exception log of these classes will not be stored.
     */
    'except' => [
        // Exception::class,
    ],
];
