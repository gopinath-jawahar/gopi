<?php
return [
    'remote_storage' => [
        'driver' => 'file'
    ],
    'backend' => [
        'frontName' => 'admin'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'backend' => 'Cm_Cache_Backend_Redis',
                'backend_options' => [
                    'server' => 'gopinath-cache.4cruoe.ng.0001.use1.cache.amazonaws.com',
                    'port' => '6379',
                    'database' => '0',
                    'compress_data' => '1',
                    'force_standalone' => '0',
                    'connect_retries' => '10',
                    'read_timeout' => '30',
                    'automatic_cleaning_factor' => '0',
                    'compress_tags' => '1',
                    'compress_threshold' => '20480',
                    'compression_lib' => 'gzip'
                ]
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'config' => [
        'async' => 0
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => '18Av6ITivOZG3gwY1DhMDWtlLfx1spLP'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'gopinath.cluster-cvtfb4uhbukm.us-east-1.rds.amazonaws.com',
                'dbname' => 'gopinath',
                'username' => 'gopinath',
                'password' => 'AdTCZj0d7coTFzyL',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'session' => [
        'save' => 'files'
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'graphql_query_resolver_result' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'downloadable_domains' => [
        'gopinath.mgtcommerce.com'
    ],
    'install' => [
        'date' => 'Tue, 22 Oct 2024 11:08:53 +0000'
    ]
];
