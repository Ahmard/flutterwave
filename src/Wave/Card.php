<?php


namespace Ahmard\Flutterwave\Wave;


class Card
{
    private array $cardInfo;

    public function __construct(array $cardInfo)
    {
        $this->cardInfo = $cardInfo;
    }

    public function first6Digits(): ?string
    {
        return $this->cardInfo['first_6digits'] ?? null;
    }

    public function last4Digits(): ?string
    {
        return $this->cardInfo['last_4digits'] ?? null;
    }

    public function issuer(): ?string
    {
        return $this->cardInfo['issuer'] ?? null;
    }

    public function country(): ?string
    {
        return $this->cardInfo['country'] ?? null;
    }

    public function type(): ?string
    {
        return $this->cardInfo['type'] ?? null;
    }

    public function token(): ?string
    {
        return $this->cardInfo['token'] ?? null;
    }

    public function expiry(): ?string
    {
        return $this->cardInfo['expiry'] ?? null;
    }
}