<?php


namespace Ahmard\Flutterwave;


class Webhook
{
    public static function capture(): ?array
    {
        $contents = (string)file_get_contents('php://input');
        return json_decode($contents, true);
    }
}