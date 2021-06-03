<?php

namespace Ahmard\Flutterwave\Tests;

use Ahmard\Flutterwave\Webhook;
use PHPUnit\Framework\TestCase;

class WebhookTest extends TestCase
{
    protected Webhook $webhook;

    protected function setUp(): void
    {
        $this->webhook = WebhookTestBait::capture();
        parent::setUp();
    }

    public function testThatCreateMethodReturnInstance(): void
    {
        self::assertInstanceOf(Webhook::class, $this->webhook);
    }

    public function testEventName(): void
    {
        self::assertSame('charge.completed', $this->webhook->getEvent());
    }

    public function testDataId(): void
    {
        self::assertSame(2266292, $this->webhook->getId());
    }

    public function testDataTxRef(): void
    {
        self::assertSame('60b9087ad9063', $this->webhook->getTxRef());
    }

    public function testDataFlwRef(): void
    {
        self::assertSame('FLW-MOCK-c091809b01bda7adeba0f9e0375aa358', $this->webhook->getFlwRef());
    }

    public function testDataFingerprint(): void
    {
        self::assertSame('5af6121b773711871bb766e0f32ef541', $this->webhook->getDeviceFingerprint());
    }

    public function testDataAmount(): void
    {
        self::assertSame(100.0, $this->webhook->getAmount());
    }

    public function testDataCurrency(): void
    {
        self::assertSame('NGN', $this->webhook->getCurrency());
    }

    public function testDataChargedAmount(): void
    {
        self::assertSame('100', $this->webhook->getChargedAmount());
    }

    public function testDataAppFee(): void
    {
        self::assertSame(1.4, $this->webhook->getAppFee());
    }

    public function testDataMerchantFee(): void
    {
        self::assertSame(0.0, $this->webhook->getMerchantFee());
    }

    public function testDataProcessorResponse(): void
    {
        self::assertSame('Approved. Successful', $this->webhook->getProcessorResponse());
    }

    public function testDataAuthModel(): void
    {
        self::assertSame('VBVSECURECODE', $this->webhook->getAuthModel());
    }

    public function testDataIP(): void
    {
        self::assertSame('56.108.153.116', $this->webhook->getIP());
    }

    public function testDataNarration(): void
    {
        self::assertSame('CARD Transaction ', $this->webhook->getNarration());
    }

    public function testDataStatus(): void
    {
        self::assertSame('successful', $this->webhook->getStatus());
    }

    public function testDataPaymentStatus(): void
    {
        self::assertSame('card', $this->webhook->getPaymentType());
    }

    public function testDataCreatedAt(): void
    {
        self::assertSame('2021-06-03T16:55:29.000Z', $this->webhook->getCreatedAt());
    }

    public function testDataAccountId(): void
    {
        self::assertSame(738117, $this->webhook->getAccountId());
    }

    public function testDataCustomerId(): void
    {
        self::assertSame(1068589, $this->webhook->getCustomerId());
    }

    public function testDataCustomerName(): void
    {
        self::assertSame('Mallam Tanko', $this->webhook->getCustomerName());
    }

    public function testDataCustomerEmail(): void
    {
        self::assertSame('mallamtanko@flutterwave.test', $this->webhook->getCustomerEmail());
    }

    public function testDataCustomerCreatedAt(): void
    {
        self::assertSame('2021-06-03T16:55:29.000Z', $this->webhook->getCustomerCreatedAt());
    }

    public function testDataCardFirst6Digit(): void
    {
        self::assertSame('418742', $this->webhook->getCardFirst6Digits());
    }

    public function testDataCardIssuer(): void
    {
        self::assertSame('VISA ACCESS BANK PLC DEBIT CLASSIC', $this->webhook->getCardIssuer());
    }

    public function testDataCardCountry(): void
    {
        self::assertSame('NG', $this->webhook->getCardCountry());
    }

    public function testDataCardType(): void
    {
        self::assertSame('VISA', $this->webhook->getCardType());
    }

    public function testDataCardExpiry(): void
    {
        self::assertSame('09/2032', $this->webhook->getCardExpiry());
    }
}
