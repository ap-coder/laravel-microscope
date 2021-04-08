<?php

return [
    
    /*
    |--------------------------------------------------------------------------
    | Microscope Master Switch
    |--------------------------------------------------------------------------
    |
    | This option may be used to disable Microscope until you need to use it. After you change the value in your 
    | .env file remember to run php artisan config:cache to turn on the artisan commands.
    |
    */
    
    'enabled' => env('MICROSCOPE_ENABLED', true),

    /*
    |--------------------------------------------------------------------------
    | Microscope User Specific Access
    |--------------------------------------------------------------------------
    |
    | This only allows users with specific user ID to see the artisan commands in Microscope. After you change the value in your 
    | .env file remember to run php artisan config:cache to turn on the artisan commands for those specific user_id.
    |
    */
    
    'allowed_users' => env('MICROSCOPE_USERS', '1,2'),
    
    /**
     * Avoids auto-fix if is set to true.
     */
    'no_fix' => false,

    /**
     * An array of patterns relative to base_path that should be ignored when reporting.
     */
    'ignore' => [
        // 'nova*',
    ],

    /**
     * You can turn off the extra variable passing detection, which performs some logs.
     */
    'log_unused_view_vars' => true,

    /**
     * An array of root namespaces to be ignored while scanning for errors.
     */
    'ignored_namespaces' => [
        // 'Laravel\\Nova\\',
        // 'Laravel\\Nova\\Tests\\'
    ],

    /**
     * By default, we only process the first 2000 characters of a file to find the "class" keyword.
     * So, if you have a lot of use statements or very big docblocks for your classes so that
     * the "class" falls deep down, you may increase this value, so that it searches deeper.
     */
    'class_search_buffer' => 2500,
];
