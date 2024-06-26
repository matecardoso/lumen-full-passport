<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Passport Guard
    |--------------------------------------------------------------------------
    |
    | Here you may specify which authentication guard Passport will use
    | while authenticating incoming API requests. This value should
    | correspond with one of your guards that is already present.
    |
    */

    'guard' => 'api',

    /*
    |--------------------------------------------------------------------------
    | Passport Token Expiration
    |--------------------------------------------------------------------------
    |
    | Here you may specify the number of minutes that the issued tokens should
    | be considered valid. You may adjust these values as needed based on
    | the requirements of your application.
    |
    */

    'tokens_expire_in' => env('PASSPORT_TOKENS_EXPIRE_IN', 15),
    'refresh_tokens_expire_in' => env('PASSPORT_REFRESH_TOKENS_EXPIRE_IN', 30),
    'personal_access_tokens_expire_in' => env('PASSPORT_PERSONAL_ACCESS_TOKENS_EXPIRE_IN', 6),

    /*
    |--------------------------------------------------------------------------
    | Passport Client ID
    |--------------------------------------------------------------------------
    |
    | This value is the client ID of your Passport client that is used
    | to issue tokens. This can be retrieved from the Passport clients
    | table in your database.
    |
    */

    'client_id' => env('PASSPORT_CLIENT_ID', ''),

    /*
    |--------------------------------------------------------------------------
    | Passport Client Secret
    |--------------------------------------------------------------------------
    |
    | This value is the client secret of your Passport client that is used
    | to issue tokens. This can be retrieved from the Passport clients
    | table in your database.
    |
    */

    'client_secret' => env('PASSPORT_CLIENT_SECRET', ''),

    /*
    |--------------------------------------------------------------------------
    | Passport Storage Driver
    |--------------------------------------------------------------------------
    |
    | This configuration option allows you to specify the storage driver that
    | will be used by Passport. This may be useful when you want to store
    | Passport tokens in a different location than the default database.
    |
    */

    'storage' => [
        'database' => [
            'connection' => env('DB_CONNECTION', 'mysql'),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Passport Personal Access Client
    |--------------------------------------------------------------------------
    |
    | Here you may specify the client ID and client secret for the personal
    | access client that will be used to generate personal access tokens.
    | These values should correspond to a valid client in your database.
    |
    */

    'personal_access_client' => [
        'id' => env('PASSPORT_PERSONAL_ACCESS_CLIENT_ID'),
        'secret' => env('PASSPORT_PERSONAL_ACCESS_CLIENT_SECRET'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Passport Default Scope
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default scopes that should be applied to tokens
    | that are issued by Passport. These values may be overridden by passing
    | a different set of scopes to the token issuing method manually.
    |
    */

    'default_scope' => env('PASSPORT_DEFAULT_SCOPE', 'basic'),

    /*
    |--------------------------------------------------------------------------
    | Passport Logging
    |--------------------------------------------------------------------------
    |
    | This option allows you to enable logging for Passport. When enabled,
    | Passport will log important actions that occur, such as token issuance,
    | token revocation, and client creation.
    |
    */

    'logging' => env('PASSPORT_LOGGING', false),

];
