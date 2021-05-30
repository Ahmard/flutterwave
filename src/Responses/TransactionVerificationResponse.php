<?php


namespace Ahmard\Flutterwave\Responses;


use Ahmard\Flutterwave\Wave\Card;
use Ahmard\Flutterwave\Wave\Customer;

class TransactionVerificationResponse extends BaseResponse
{
    public function id(): ?int
    {
        return $this->responseData['data']['id'];
    }

    public function txRef(): ?string
    {
        return $this->responseData['data']['tx_ref'];
    }

    public function flwRef(): ?string
    {
        return $this->responseData['data']['flw_ref'];
    }

    public function deviceFingerprint(): ?string
    {
        return $this->responseData['data']['device_fingerprint'];
    }

    public function amount(): ?string
    {
        return $this->responseData['data']['amount'];
    }

    public function currency(): ?string
    {
        return $this->responseData['data']['amount'];
    }

    public function chargedAmount(): ?string
    {
        return $this->responseData['data']['charged_amount'];
    }

    public function appFee(): ?string
    {
        return $this->responseData['data']['app_fee'];
    }

    public function merchantFee(): ?string
    {
        return $this->responseData['data']['merchant_fee'];
    }

    public function processorResponse(): ?string
    {
        return $this->responseData['data']['processor_response'];
    }

    public function authModel(): ?string
    {
        return $this->responseData['data']['auth_model'];
    }

    public function ip(): ?string
    {
        return $this->responseData['data']['ip'];
    }

    public function narration(): ?string
    {
        return $this->responseData['data']['narration'];
    }

    public function status(): ?string
    {
        return $this->responseData['data']['status'];
    }

    public function paymentType(): ?string
    {
        return $this->responseData['data']['payment_type'];
    }

    public function createdAt(): ?string
    {
        return $this->responseData['data']['created_at'];
    }

    public function amountSettled(): ?string
    {
        return $this->responseData['data']['amount_settled'];
    }

    public function card(): Card
    {
        return new Card($this->responseData['data']['card'] ?? []);
    }

    public function customer(): Customer
    {
        return new Customer($this->responseData['data']['customer'] ?? []);
    }
}