<?php


namespace Ahmard\Flutterwave\Responses;


use Psr\Http\Message\ResponseInterface;

abstract class BaseResponse
{
    protected ResponseInterface $response;

    protected array $responseData = [];


    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;

        $this->responseData = json_decode(
            $response->getBody()->getContents(),
            true
        );
    }

    public function requestStatus(): string
    {
        return $this->responseData['status'] ?? '';
    }

    public function isSuccessful(): bool
    {
        return 'success' == $this->requestStatus();
    }

    public function isFailed(): bool
    {
        return !$this->isSuccessful();
    }

    public function message(): string
    {
        return $this->responseData['message'] ?? '';
    }
}