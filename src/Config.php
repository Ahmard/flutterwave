<?php


namespace Ahmard\Flutterwave;


class Config
{
    protected static array $data = [
        'api.uri' => 'https://api.flutterwave.com/',
        'endpoints' => [
            'transaction.payment' => 'v3/payments',
            'transaction.verify' => 'v3/transactions/{{transactionId}}/verify'
        ],
        'keys' => [
            'public' => '',
            'private' => '',
            'webhook-key' => '',
            'webhook-hash' => '',
        ]
    ];

    public static function publicKey(string $publicKey): void
    {
        self::$data['keys']['public'] = $publicKey;
    }

    public static function privateKey(string $privateKey): void
    {
        self::$data['keys']['private'] = $privateKey;
    }

    public static function webhookSecretKey(string $key): void
    {
        self::$data['keys']['webhook-key'] = $key;
    }

    public static function webhookSecretHash(string $hash): void
    {
        self::$data['keys']['webhook-hash'] = $hash;
    }


    /**
     * @return array
     */
    public static function getData(): array
    {
        return self::$data;
    }

    /**
     * Get endpoint uri
     *
     * @param string $endpointKey
     * @return string
     */
    public static function getEndpoint(string $endpointKey): string
    {
        return self::$data['api.uri'] . self::$data['endpoints'][$endpointKey];
    }
}