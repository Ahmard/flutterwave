# Flutterwave
[Flutterwave](https://flutterwave.com) API client.


## Installation
```
composer require ahmard/flutterwave
```

### Create Transaction
```php
use Ahmard\Flutterwave\Config;
use Ahmard\Flutterwave\Transaction;
use Ahmard\Flutterwave\TransactionData;

require 'vendor/autoload.php';

Config::privateKey('<Your-Private-Key-Here>');

$data = TransactionData::create()
    ->reference(uniqid())
    ->amount(100)
    ->paymentOption('card,banktransfer,ussd')
    ->customerName('Aminu Mustapha')
    ->customerEmail('ahmard06@gmail.com')
    ->customerPhoneNumber(7035636394)
    ->customerId(1)
    ->redirectUrl('http://localhost:8800/redir');

$payment = Transaction::create($data);
var_dump($payment->redirectLink());
```

### Transaction Verification
```php
use Ahmard\Flutterwave\Transaction;

$verification = Transaction::verify('2323');

var_dump($verification->isSuccessful());
var_dump($verification->isFailed());
var_dump($verification->txRef());
var_dump($verification->currency());
var_dump($verification->amount());
```
**Transaction::verify()** returns instance of [TransactionVerificationResponse](src/Responses/TransactionVerificationResponse.php)


**Enjoy accepting payments** 😎