<?php


namespace Ahmard\Flutterwave\Responses;


class TransactionCreationResponse extends BaseResponse
{
    public function redirectLink(): string
    {
        if ($this->isSuccessful()) {
            return $this->responseData['data']['link'];
        }

        return '';
    }
}