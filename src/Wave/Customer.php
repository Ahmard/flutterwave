<?php


namespace Ahmard\Flutterwave\Wave;


class Customer
{
    private array $customerData;

    public function __construct(array $customerData)
    {
        $this->customerData = $customerData;
    }

    public function id(): ?int
    {
        return $this->customerData['id'] ?? null;
    }

    public function name(): ?int
    {
        return $this->customerData['name'] ?? null;
    }

    public function phoneNumber(): ?int
    {
        return $this->customerData['phone_number'] ?? null;
    }

    public function email(): ?int
    {
        return $this->customerData['email'] ?? null;
    }

    public function createdAt(): ?int
    {
        return $this->customerData['created_at'] ?? null;
    }
}