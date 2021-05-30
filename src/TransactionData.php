<?php


namespace Ahmard\Flutterwave;


class TransactionData
{
    public static function create(): TransactionData
    {
        return new TransactionData();
    }


    protected array $data = [
        'amount' => 0.0,
        'tx_ref' => null,
        'currency' => 'NGN',
        'redirect_url' => '',
        'payment_options' => 'card,mobilemoney,ussd',
        'meta' => [
            'customer_id' => 0,
        ],
        'customer' => [
            'email' => null,
            'phonenumber' => null,
            'name' => null,
        ],
        'customizations' => [
            'title' => null,
            'description' => null,
            'logo' => null,
        ],
    ];


    public function publicKey(string $publicKey): TransactionData
    {
        $this->data['__data']['tx_ref'] = $publicKey;
        return $this;
    }

    public function privateKey(string $privateKey): TransactionData
    {
        $this->data['__data']['private_key'] = $privateKey;
        return $this;
    }

    public function reference(string $transactionReference): TransactionData
    {
        $this->data['tx_ref'] = $transactionReference;
        return $this;
    }

    public function amount(float $amount): TransactionData
    {
        $this->data['amount'] = $amount;
        return $this;
    }

    public function currency(string $currency): TransactionData
    {
        $this->data['currency'] = $currency;
        return $this;
    }

    public function redirectUrl(string $url): TransactionData
    {
        $this->data['redirect_url'] = $url;
        return $this;
    }

    public function paymentOption(string $paymentOption = 'card'): TransactionData
    {
        $this->data['payment_options'] = $paymentOption;
        return $this;
    }

    public function customerId(int $identifier): TransactionData
    {
        $this->data['meta']['customer_id'] = $identifier;
        return $this;
    }

    public function customerName(string $name): TransactionData
    {
        $this->data['customer']['name'] = $name;
        return $this;
    }

    public function customerEmail(string $email): TransactionData
    {
        $this->data['customer']['email'] = $email;
        return $this;
    }

    public function customerPhoneNumber(string $phoneNumber): TransactionData
    {
        $this->data['customer']['phonenumber'] = $phoneNumber;
        return $this;
    }

    public function modalTitle(string $title): TransactionData
    {
        $this->data['customizations']['title'] = $title;
        return $this;
    }

    public function modalLogo(string $logo): TransactionData
    {
        $this->data['customizations']['logo'] = $logo;
        return $this;
    }

    public function modalDescription(string $description): TransactionData
    {
        $this->data['customizations']['description'] = $description;
        return $this;
    }


    public function getData(): array
    {
        return $this->data;
    }
}