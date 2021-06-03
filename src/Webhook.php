<?php


namespace Ahmard\Flutterwave;


class Webhook
{
    protected static array $data;


    public static function capture(): Webhook
    {
        $contents = (string)file_get_contents('php://input');
        self::$data = json_decode($contents, true) ?? [];
        return new Webhook();
    }

    public function isTrusted(): bool
    {
        return true;
    }

    public function getEvent(): ?string
    {
        return self::$data['event'] ?? null;
    }

    public function getId(): ?int
    {
        return self::$data['data']['id'] ?? null;
    }

    public function getTxRef(): ?string
    {
        return self::$data['data']['tx_ref'] ?? null;
    }

    public function getFlwRef(): ?string
    {
        return self::$data['data']['flw_ref'] ?? null;
    }

    public function getDeviceFingerprint(): ?string
    {
        return self::$data['data']['device_fingerprint'] ?? null;
    }

    public function getAmount(): ?float
    {
        return self::$data['data']['amount'] ?? null;
    }

    public function getCurrency(): ?string
    {
        return self::$data['data']['currency'] ?? null;
    }

    public function getChargedAmount(): ?string
    {
        return self::$data['data']['charged_amount'] ?? null;
    }

    public function getAppFee(): ?float
    {
        return self::$data['data']['app_fee'] ?? null;
    }

    public function getMerchantFee(): ?float
    {
        return self::$data['data']['merchant_fee'] ?? null;
    }

    public function getProcessorResponse(): ?string
    {
        return self::$data['data']['processor_response'] ?? null;
    }

    public function getAuthModel(): ?string
    {
        return self::$data['data']['auth_model'] ?? null;
    }

    public function getIP(): ?string
    {
        return self::$data['data']['ip'] ?? null;
    }

    public function getNarration(): ?string
    {
        return self::$data['data']['narration'] ?? null;
    }

    public function getStatus(): ?string
    {
        return self::$data['data']['status'] ?? null;
    }

    public function getPaymentType(): ?string
    {
        return self::$data['data']['payment_type'] ?? null;
    }

    public function getCreatedAt(): ?string
    {
        return self::$data['data']['created_at'] ?? null;
    }

    public function getAccountId(): ?int
    {
        return self::$data['data']['account_id'] ?? null;
    }

    public function getCustomerId(): ?int
    {
        return self::$data['data']['customer']['id'] ?? null;
    }

    public function getCustomerName(): ?string
    {
        return self::$data['data']['customer']['name'] ?? null;
    }

    public function getCustomerPhoneNumber(): ?string
    {
        return self::$data['data']['customer']['phone_number'] ?? null;
    }

    public function getCustomerEmail(): ?string
    {
        return self::$data['data']['customer']['email'] ?? null;
    }

    public function getCustomerCreatedAt(): ?string
    {
        return self::$data['data']['customer']['created_at'] ?? null;
    }

    public function getCardFirst6Digits(): ?string
    {
        return self::$data['data']['card']['first_6digits'] ?? null;
    }

    public function getCardLast4Digits(): ?string
    {
        return self::$data['data']['card']['last_4digits'] ?? null;
    }

    public function getCardIssuer(): ?string
    {
        return self::$data['data']['card']['issuer'] ?? null;
    }

    public function getCardCountry(): ?string
    {
        return self::$data['data']['card']['country'] ?? null;
    }

    public function getCardType(): ?string
    {
        return self::$data['data']['card']['type'] ?? null;
    }

    public function getCardExpiry(): ?string
    {
        return self::$data['data']['card']['expiry'] ?? null;
    }
}