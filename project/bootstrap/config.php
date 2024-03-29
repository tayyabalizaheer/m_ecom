<?php
return array(
    'app' =>
    array(
        'name' => 'Laravel',
        'env' => 'local',
        'debug' => true,
        'url' => 'http://fyp.onlinewebshop.net/',
        'asset_url' => NULL,
        'timezone' => 'UTC',
        'locale' => '1567232745AoOcvCtY',
        'fallback_locale' => 'en',
        'faker_locale' => 'en_US',
        'key' => 'base64:Jv+WvmI5e+wo4xbMQdLnmI3zjlFR6pFUY2Gv42ox8W8=',
        'cipher' => 'AES-256-CBC',
        'providers' =>
        array(
            0 => 'Illuminate\\Auth\\AuthServiceProvider',
            1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
            2 => 'Illuminate\\Bus\\BusServiceProvider',
            3 => 'Illuminate\\Cache\\CacheServiceProvider',
            4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
            5 => 'Illuminate\\Cookie\\CookieServiceProvider',
            6 => 'Illuminate\\Database\\DatabaseServiceProvider',
            7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
            8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
            9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
            10 => 'Illuminate\\Hashing\\HashServiceProvider',
            11 => 'Illuminate\\Mail\\MailServiceProvider',
            12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
            13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
            14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
            15 => 'Illuminate\\Queue\\QueueServiceProvider',
            16 => 'Illuminate\\Redis\\RedisServiceProvider',
            17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
            18 => 'Illuminate\\Session\\SessionServiceProvider',
            19 => 'Illuminate\\Translation\\TranslationServiceProvider',
            20 => 'Illuminate\\Validation\\ValidationServiceProvider',
            21 => 'Illuminate\\View\\ViewServiceProvider',
            22 => 'App\\Providers\\AppServiceProvider',
            23 => 'App\\Providers\\AuthServiceProvider',
            24 => 'App\\Providers\\EventServiceProvider',
            25 => 'App\\Providers\\RouteServiceProvider',
            26 => 'Cartalyst\\Stripe\\Laravel\\StripeServiceProvider',
            27 => 'Laravel\\Socialite\\SocialiteServiceProvider',
            28 => 'Intervention\\Image\\ImageServiceProvider',
            29 => 'Barryvdh\\DomPDF\\ServiceProvider',
            30 => 'Tymon\\JWTAuth\\Providers\\LaravelServiceProvider',
            31 => 'ZanySoft\\Zip\\ZipServiceProvider',
        ),
        'aliases' =>
        array(
            'App' => 'Illuminate\\Support\\Facades\\App',
            'Arr' => 'Illuminate\\Support\\Arr',
            'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
            'Auth' => 'Illuminate\\Support\\Facades\\Auth',
            'Blade' => 'Illuminate\\Support\\Facades\\Blade',
            'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
            'Bus' => 'Illuminate\\Support\\Facades\\Bus',
            'Cache' => 'Illuminate\\Support\\Facades\\Cache',
            'Config' => 'Illuminate\\Support\\Facades\\Config',
            'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
            'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
            'DB' => 'Illuminate\\Support\\Facades\\DB',
            'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
            'Event' => 'Illuminate\\Support\\Facades\\Event',
            'File' => 'Illuminate\\Support\\Facades\\File',
            'Gate' => 'Illuminate\\Support\\Facades\\Gate',
            'Hash' => 'Illuminate\\Support\\Facades\\Hash',
            'Http' => 'Illuminate\\Support\\Facades\\Http',
            'Lang' => 'Illuminate\\Support\\Facades\\Lang',
            'Log' => 'Illuminate\\Support\\Facades\\Log',
            'Mail' => 'Illuminate\\Support\\Facades\\Mail',
            'Notification' => 'Illuminate\\Support\\Facades\\Notification',
            'Password' => 'Illuminate\\Support\\Facades\\Password',
            'Queue' => 'Illuminate\\Support\\Facades\\Queue',
            'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
            'Redis' => 'Illuminate\\Support\\Facades\\Redis',
            'Request' => 'Illuminate\\Support\\Facades\\Request',
            'Response' => 'Illuminate\\Support\\Facades\\Response',
            'Route' => 'Illuminate\\Support\\Facades\\Route',
            'Schema' => 'Illuminate\\Support\\Facades\\Schema',
            'Session' => 'Illuminate\\Support\\Facades\\Session',
            'Storage' => 'Illuminate\\Support\\Facades\\Storage',
            'Str' => 'Illuminate\\Support\\Str',
            'URL' => 'Illuminate\\Support\\Facades\\URL',
            'Validator' => 'Illuminate\\Support\\Facades\\Validator',
            'View' => 'Illuminate\\Support\\Facades\\View',
            'Datatables' => 'yajra\\Datatables\\Datatables',
            'Stripe' => 'Cartalyst\\Stripe\\Laravel\\Facades\\Stripe',
            'Socialite' => 'Laravel\\Socialite\\Facades\\Socialite',
            'Image' => 'Intervention\\Image\\Facades\\Image',
            'PDF' => 'Barryvdh\\DomPDF\\Facade',
            'Zip' => 'ZanySoft\\Zip\\ZipFacade',
        ),
    ),
    'auth' =>
    array(
        'defaults' =>
        array(
            'guard' => 'web',
            'passwords' => 'users',
        ),
        'guards' =>
        array(
            'web' =>
            array(
                'driver' => 'session',
                'provider' => 'users',
            ),
            'api' =>
            array(
                'driver' => 'jwt',
                'provider' => 'users',
            ),
            'admin' =>
            array(
                'driver' => 'session',
                'provider' => 'admins',
            ),
            'admin-api' =>
            array(
                'driver' => 'token',
                'provider' => 'admins',
            ),
        ),
        'providers' =>
        array(
            'users' =>
            array(
                'driver' => 'eloquent',
                'model' => 'App\\Models\\User',
            ),
            'admins' =>
            array(
                'driver' => 'eloquent',
                'model' => 'App\\Models\\Admin',
            ),
        ),
        'passwords' =>
        array(),
    ),
    'broadcasting' =>
    array(
        'default' => 'log',
        'connections' =>
        array(
            'pusher' =>
            array(
                'driver' => 'pusher',
                'key' => '',
                'secret' => '',
                'app_id' => '',
                'options' =>
                array(
                    'cluster' => NULL,
                    'useTLS' => true,
                ),
            ),
            'redis' =>
            array(
                'driver' => 'redis',
                'connection' => 'default',
            ),
            'log' =>
            array(
                'driver' => 'log',
            ),
            'null' =>
            array(
                'driver' => 'null',
            ),
        ),
    ),
    'cache' =>
    array(
        'default' => 'file',
        'stores' =>
        array(
            'apc' =>
            array(
                'driver' => 'apc',
            ),
            'array' =>
            array(
                'driver' => 'array',
                'serialize' => false,
            ),
            'database' =>
            array(
                'driver' => 'database',
                'table' => 'cache',
                'connection' => NULL,
            ),
            'file' =>
            array(
                'driver' => 'file',
                'path' => storage_path('framework/cache/data'),
            ),
            'memcached' =>
            array(
                'driver' => 'memcached',
                'persistent_id' => NULL,
                'sasl' =>
                array(
                    0 => NULL,
                    1 => NULL,
                ),
                'options' =>
                array(),
                'servers' =>
                array(
                    0 =>
                    array(
                        'host' => '127.0.0.1',
                        'port' => 11211,
                        'weight' => 100,
                    ),
                ),
            ),
            'redis' =>
            array(
                'driver' => 'redis',
                'connection' => 'cache',
            ),
            'dynamodb' =>
            array(
                'driver' => 'dynamodb',
                'key' => NULL,
                'secret' => NULL,
                'region' => 'us-east-1',
                'table' => 'cache',
                'endpoint' => NULL,
            ),
        ),
        'prefix' => 'laravel_cache',
    ),
    'cors' =>
    array(
        'paths' =>
        array(
            0 => 'api/*',
        ),
        'allowed_methods' =>
        array(
            0 => '*',
        ),
        'allowed_origins' =>
        array(
            0 => '*',
        ),
        'allowed_origins_patterns' =>
        array(),
        'allowed_headers' =>
        array(
            0 => '*',
        ),
        'exposed_headers' =>
        array(),
        'max_age' => 0,
        'supports_credentials' => false,
    ),
    'database' =>
    array(
        'default' => 'mysql',
        'connections' =>
        array(
            'sqlite' =>
            array(
                'driver' => 'sqlite',
                'url' => NULL,
                'database' => 'ecom',
                'prefix' => '',
                'foreign_key_constraints' => true,
            ),
            'mysql' =>
            array(
                'driver' => 'mysql',
                'url' => NULL,
                'host' => 'localhost',
                'port' => '3306',
                'database' => 'm_ecom',
                'username' => 'root',
                'password' => '',
                'unix_socket' => '',
                'charset' => 'utf8mb4',
                'collation' => 'utf8mb4_unicode_ci',
                'prefix' => '',
                'prefix_indexes' => true,
                'strict' => true,
                'engine' => NULL,
                'options' =>
                array(),
            ),
            'pgsql' =>
            array(
                'driver' => 'pgsql',
                'url' => NULL,
                'host' => 'localhost',
                'port' => '3306',
                'database' => 'ecom',
                'username' => 'root',
                'password' => '',
                'charset' => 'utf8',
                'prefix' => '',
                'prefix_indexes' => true,
                'schema' => 'public',
                'sslmode' => 'prefer',
            ),
            'sqlsrv' =>
            array(
                'driver' => 'sqlsrv',
                'url' => NULL,
                'host' => 'localhost',
                'port' => '3306',
                'database' => 'ecom',
                'username' => 'root',
                'password' => '',
                'charset' => 'utf8',
                'prefix' => '',
                'prefix_indexes' => true,
            ),
        ),
        'migrations' => 'migrations',
        'redis' =>
        array(
            'client' => 'phpredis',
            'options' =>
            array(
                'cluster' => 'redis',
                'prefix' => 'laravel_database_',
            ),
            'default' =>
            array(
                'url' => NULL,
                'host' => '127.0.0.1',
                'password' => NULL,
                'port' => '6379',
                'database' => '0',
            ),
            'cache' =>
            array(
                'url' => NULL,
                'host' => '127.0.0.1',
                'password' => NULL,
                'port' => '6379',
                'database' => '1',
            ),
        ),
    ),
    'filesystems' =>
    array(
        'default' => 'local',
        'cloud' => 's3',
        'disks' =>
        array(
            'local' =>
            array(
                'driver' => 'local',
                'root' => storage_path('app'),
            ),
            'public' =>
            array(
                'driver' => 'local',
                'root' => storage_path('app'),
                'url' => 'http://fyp.onlinewebshop.net/storage',
                'visibility' => 'public',
            ),
            's3' =>
            array(
                'driver' => 's3',
                'key' => NULL,
                'secret' => NULL,
                'region' => NULL,
                'bucket' => NULL,
                'url' => NULL,
                'endpoint' => NULL,
            ),
        ),
        'links' =>
        array(
            public_path('storage') => storage_path('app/public'),
        ),
    ),
    'hashing' =>
    array(
        'driver' => 'bcrypt',
        'bcrypt' =>
        array(
            'rounds' => 10,
        ),
        'argon' =>
        array(
            'memory' => 1024,
            'threads' => 2,
            'time' => 2,
        ),
    ),
    'jwt' =>
    array(
        'secret' => NULL,
        'keys' =>
        array(
            'public' => NULL,
            'private' => NULL,
            'passphrase' => NULL,
        ),
        'ttl' => 60,
        'refresh_ttl' => 20160,
        'algo' => 'HS256',
        'required_claims' =>
        array(
            0 => 'iss',
            1 => 'iat',
            2 => 'exp',
            3 => 'nbf',
            4 => 'sub',
            5 => 'jti',
        ),
        'persistent_claims' =>
        array(),
        'lock_subject' => true,
        'leeway' => 0,
        'blacklist_enabled' => true,
        'blacklist_grace_period' => 0,
        'decrypt_cookies' => false,
        'providers' =>
        array(
            'jwt' => 'Tymon\\JWTAuth\\Providers\\JWT\\Lcobucci',
            'auth' => 'Tymon\\JWTAuth\\Providers\\Auth\\Illuminate',
            'storage' => 'Tymon\\JWTAuth\\Providers\\Storage\\Illuminate',
        ),
    ),
    'logging' =>
    array(
        'default' => 'stack',
        'channels' =>
        array(
            'stack' =>
            array(
                'driver' => 'stack',
                'channels' =>
                array(
                    0 => 'single',
                ),
                'ignore_exceptions' => false,
            ),
            'single' =>
            array(
                'driver' => 'single',
                'path' => storage_path('logs/laravel.log'),
                'level' => 'debug',
            ),
            'daily' =>
            array(
                'driver' => 'daily',
                'path' => storage_path('logs/laravel.log'),
                'level' => 'debug',
                'days' => 14,
            ),
            'slack' =>
            array(
                'driver' => 'slack',
                'url' => NULL,
                'username' => 'Laravel Log',
                'emoji' => ':boom:',
                'level' => 'critical',
            ),
            'papertrail' =>
            array(
                'driver' => 'monolog',
                'level' => 'debug',
                'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
                'handler_with' =>
                array(
                    'host' => NULL,
                    'port' => NULL,
                ),
            ),
            'stderr' =>
            array(
                'driver' => 'monolog',
                'handler' => 'Monolog\\Handler\\StreamHandler',
                'formatter' => NULL,
                'with' =>
                array(
                    'stream' => 'php://stderr',
                ),
            ),
            'syslog' =>
            array(
                'driver' => 'syslog',
                'level' => 'debug',
            ),
            'errorlog' =>
            array(
                'driver' => 'errorlog',
                'level' => 'debug',
            ),
            'null' =>
            array(
                'driver' => 'monolog',
                'handler' => 'Monolog\\Handler\\NullHandler',
            ),
            'emergency' =>
            array(
                'path' => storage_path('logs/laravel.log'),
            ),
        ),
    ),
    'mail' =>
    array(
        'default' => 'smtp',
        'mailers' =>
        array(
            'smtp' =>
            array(
                'transport' => 'smtp',
                'host' => 'smtp.mailtrap.io',
                'port' => '2525',
                'encryption' => NULL,
                'username' => NULL,
                'password' => NULL,
                'timeout' => NULL,
                'auth_mode' => NULL,
            ),
            'ses' =>
            array(
                'transport' => 'ses',
            ),
            'mailgun' =>
            array(
                'transport' => 'mailgun',
            ),
            'postmark' =>
            array(
                'transport' => 'postmark',
            ),
            'sendmail' =>
            array(
                'transport' => 'sendmail',
                'path' => '/usr/sbin/sendmail -bs',
            ),
            'log' =>
            array(
                'transport' => 'log',
                'channel' => NULL,
            ),
            'array' =>
            array(
                'transport' => 'array',
            ),
        ),
        'from' =>
        array(
            'address' => 'hello@example.com',
            'name' => 'Example',
        ),
        'markdown' =>
        array(
            'theme' => 'default',
            'paths' =>
            array(
                0 => '\\project\\resources\\views/vendor/mail',
            ),
        ),
    ),
    'queue' =>
    array(
        'default' => 'sync',
        'connections' =>
        array(
            'sync' =>
            array(
                'driver' => 'sync',
            ),
            'database' =>
            array(
                'driver' => 'database',
                'table' => 'jobs',
                'queue' => 'default',
                'retry_after' => 90,
            ),
            'beanstalkd' =>
            array(
                'driver' => 'beanstalkd',
                'host' => 'localhost',
                'queue' => 'default',
                'retry_after' => 90,
                'block_for' => 0,
            ),
            'sqs' =>
            array(
                'driver' => 'sqs',
                'key' => NULL,
                'secret' => NULL,
                'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
                'queue' => 'your-queue-name',
                'suffix' => NULL,
                'region' => 'us-east-1',
            ),
            'redis' =>
            array(
                'driver' => 'redis',
                'connection' => 'default',
                'queue' => 'default',
                'retry_after' => 90,
                'block_for' => NULL,
            ),
        ),
        'failed' =>
        array(
            'driver' => 'database',
            'database' => 'mysql',
            'table' => 'failed_jobs',
        ),
    ),
    'services' =>
    array(
        'mailgun' =>
        array(
            'domain' => NULL,
            'secret' => NULL,
            'endpoint' => 'api.mailgun.net',
        ),
        'postmark' =>
        array(
            'token' => NULL,
        ),
        'ses' =>
        array(
            'key' => NULL,
            'secret' => NULL,
            'region' => 'us-east-1',
        ),
        'genius' =>
        array(
            'ocean' => '',
        ),
    ),
    'session' =>
    array(
        'driver' => 'file',
        'lifetime' => 120,
        'expire_on_close' => false,
        'encrypt' => false,
        'files' => storage_path('framework/sessions'),
        'connection' => NULL,
        'table' => 'sessions',
        'store' => NULL,
        'lottery' =>
        array(
            0 => 2,
            1 => 100,
        ),
        'cookie' => 'laravel_session',
        'path' => '/',
        'domain' => NULL,
        'secure' => NULL,
        'http_only' => true,
        'same_site' => 'lax',
    ),
    'view' =>
    array(
        'paths' =>
        array(
            0 => resource_path('views'),
        ),
        'compiled' => storage_path('framework/views'),
    ),

    'flare' =>
    array(
        'key' => NULL,
        'reporting' =>
        array(
            'anonymize_ips' => true,
            'collect_git_information' => false,
            'report_queries' => true,
            'maximum_number_of_collected_queries' => 200,
            'report_query_bindings' => true,
            'report_view_data' => true,
            'grouping_type' => NULL,
            'report_logs' => true,
            'maximum_number_of_collected_logs' => 200,
            'censor_request_body_fields' =>
            array(
                0 => 'password',
            ),
        ),
        'send_logs_as_events' => true,
        'censor_request_body_fields' =>
        array(
            0 => 'password',
        ),
    ),
    'ignition' =>
    array(
        'editor' => 'phpstorm',
        'theme' => 'light',
        'enable_share_button' => true,
        'register_commands' => false,
        'ignored_solution_providers' =>
        array(
            0 => 'Facade\\Ignition\\SolutionProviders\\MissingPackageSolutionProvider',
        ),
        'enable_runnable_solutions' => NULL,
        'remote_sites_path' => '',
        'local_sites_path' => '',
        'housekeeping_endpoint_prefix' => '_ignition',
    ),
    'image' =>
    array(
        'driver' => 'gd',
    ),
    'datatables' =>
    array(
        'search' =>
        array(
            'smart' => true,
            'multi_term' => true,
            'case_insensitive' => true,
            'use_wildcards' => false,
            'starts_with' => false,
        ),
        'index_column' => 'DT_RowIndex',
        'engines' =>
        array(
            'eloquent' => 'Yajra\\DataTables\\EloquentDataTable',
            'query' => 'Yajra\\DataTables\\QueryDataTable',
            'collection' => 'Yajra\\DataTables\\CollectionDataTable',
            'resource' => 'Yajra\\DataTables\\ApiResourceDataTable',
        ),
        'builders' =>
        array(),
        'nulls_last_sql' => ':column :direction NULLS LAST',
        'error' => NULL,
        'columns' =>
        array(
            'excess' =>
            array(
                0 => 'rn',
                1 => 'row_num',
            ),
            'escape' => '*',
            'raw' =>
            array(
                0 => 'action',
            ),
            'blacklist' =>
            array(
                0 => 'password',
                1 => 'remember_token',
            ),
            'whitelist' => '*',
        ),
        'json' =>
        array(
            'header' =>
            array(),
            'options' => 0,
        ),
    ),
    'trustedproxy' =>
    array(
        'proxies' => NULL,
        'headers' => 94,
    ),
    'mollie' =>
    array(
        'key' => 'test_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
    ),
    'tinker' =>
    array(
        'commands' =>
        array(),
        'alias' =>
        array(),
        'dont_alias' =>
        array(
            0 => 'App\\Nova',
        ),
    ),
);
