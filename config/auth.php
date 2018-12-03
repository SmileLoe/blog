<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | 此选项控制应用程序的默认身份验证“保护”和密码重置选项。
    | 您可以根据需要更改这些缺省值，
    | 但对于大多数应用程序来说，它们是一个完美的开始。
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"

    | 接下来，您可以为应用程序定义每个身份验证保护。
    | 当然，这里已经为您定义了一个很好的默认配置，
    | 它使用会话存储和Eloquent User提供程序。所有身份验证驱动程序都有用户提供程序。
    | 这定义如何实际从数据库或此应用程序用于持久化用户数据的其他存储机制中检索用户。
    | 支持：“会话”、“令牌”
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | 所有身份验证驱动程序都有用户提供程序。
    | 这定义了用户实际上是如何从数据库或其他应用程序使用的存储机制中检索来保存用户的数据的。
    | 如果有多个用户表或模型，可以配置代表每个模型/表的多个源。
    | 然后，这些源可以被分配给您定义的任何额外的身份验证卫士。
    | 支持：“database”，“Eloquent”
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | 如果在应用程序中有多个用户表或模型，
    | 并且希望根据特定用户类型设置单独的密码重置设置，则可以指定多个密码重置配置。
    | 期满时间是重置令牌应被认为有效的分钟数。
    | 这个安全特性使令牌保持寿命短，因此它们的猜测时间更少。你可以根据需要改变这一点。
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];
