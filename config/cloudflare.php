<?php

return [

    /*
     * API token generated from the User Profile 'My Profile > Api Tokens > API Tokens' page.
     * create token > Edit zone DNS > "Permissions" Zone:Cache Purge:Purge
     */
    'token' => env('_OvJbOZNcKVKxGmRrpktiZYQjMrV-yLiv8nJ2zse'),

    /*
     * Global API Key on the "My Profile > Api Tokens > API Keys" page.
     */
    'key' => env('7c62d0d563e8304e1ce2c42ba030d99cfcb73'),

    /*
     * Email address associated with your account.
     */
    'email' => env('mosharofsheikh85@gmail.com'),

    /*
     * Array of zones.
     *
     * Each zone must have its identifier as a key. The value is an
     * associated array with *optional* arrays of files and/or tags.
     *
     * you can find your zoneId under 'Account Home > site > Api'.
     *
     * E.g.
     *
     * '023e105f4ecef8ad9ca31a8372d0c353' => [
     *      'files' => [
     *          'http://example.com/css/app.css',
     *      ],
     *      'tags' => [
     *          'styles',
     *          'scripts',
     *      ],
     *      'hosts' => [
     *          'www.example.com',
     *          'images.example.com',
     *      ],
     * ],
     */
    'zones' => [
        //
    ],
];
