<?php


namespace Ahmard\Flutterwave\Tests;


use Ahmard\Flutterwave\Webhook;

class WebhookTestBait extends Webhook
{
    public static function capture(): Webhook
    {
        self::$data = json_decode(file_get_contents(__DIR__ . '/.webhook.json'), true);
        return new WebhookTestBait();
    }
}