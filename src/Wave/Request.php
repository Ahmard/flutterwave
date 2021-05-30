<?php


namespace Ahmard\Flutterwave\Wave;


use Ahmard\Flutterwave\Config;
use Guzwrap\Wrapper\Guzzle;
use JsonException;

class Request
{
    /**
     * @param string $endpoint
     * @param array $requestData
     * @return Guzzle
     * @throws JsonException
     */
    public static function createPost(string $endpoint, array $requestData): Guzzle
    {
        $config = Config::getData();

        return \Guzwrap\Request::post($endpoint)
            ->json($requestData)
            ->header('Authorization', "Bearer {$config['keys']['private']}");
    }

    /**
     * @param string $endpoint
     * @return Guzzle
     */
    public static function createGet(string $endpoint): Guzzle
    {
        $config = Config::getData();

        return \Guzwrap\Request::get($endpoint)
            ->header('Authorization', "Bearer {$config['keys']['private']}");
    }
}