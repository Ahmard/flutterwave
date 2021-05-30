<?php


namespace Ahmard\Flutterwave;


use Ahmard\Flutterwave\Responses\TransactionCreationResponse;
use Ahmard\Flutterwave\Responses\TransactionVerificationResponse;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use JsonException;

class Transaction
{
    protected static ?string $endpoint = null;
    protected static ?string $publicKey = null;
    protected static ?string $privateKey = null;


    /**
     * Create payment using standard method
     *
     * @param TransactionData $paymentData
     * @return TransactionCreationResponse
     * @throws GuzzleException
     * @throws JsonException
     * @link https://developer.flutterwave.com/docs/flutterwave-standard
     */
    public static function create(TransactionData $paymentData): TransactionCreationResponse
    {
        $response = Wave\Request::createPost(
            Config::getEndpoint('transaction.payment'),
            $paymentData->getData()
        )->exec();

        return new TransactionCreationResponse($response);
    }

    /**
     * @param int $transactionId
     * @return TransactionVerificationResponse
     * @throws GuzzleException
     */
    public static function verify(int $transactionId): TransactionVerificationResponse
    {
        $endpoint = Config::getEndpoint('transaction.verify');
        $endpoint = str_replace('{{transactionId}}', (string)$transactionId, $endpoint);

        try {
            $response = Wave\Request::createGet($endpoint)->exec();
        } catch (ClientException | BadResponseException $exception) {
            $response = $exception->getResponse();
        }

        return new TransactionVerificationResponse($response);
    }
}