<?php

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/..');
$dotenv->load();

function getConfig()
{
    return [

        // -------------------------------------------------------------------------------------------------------------
        // Web PKI Configuration
        // -------------------------------------------------------------------------------------------------------------
        'webPki' => [

            // Base64-encoded binary license for the Web PKI. This value is passed to Web PKI component's constructor.
            'license' => $_ENV['REST_PKI_LICENSE']
        ],

        // -------------------------------------------------------------------------------------------------------------
        // REST PKI Configuration
        // -------------------------------------------------------------------------------------------------------------
        'restPki' => [

            // =================================================
            //     >>>> PASTE YOU ACCESS TOKEN BELOW <<<<
            // =================================================
            'accessToken' => $_ENV['REST_PKI_TOKEN'],
            // Address of your Rest PKI installation (with the trailing '/' character)
            "endpoint" => $_ENV['REST_PKI_ENDPOINT']
        ]
    ];
}