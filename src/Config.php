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
        return self::$data['api.uri'] . self::$data['endpoints'][$endpointKey] ?? '';
    }
}