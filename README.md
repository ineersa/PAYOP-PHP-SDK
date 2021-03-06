# Payop PHP-SDK
Php sdk for [Payop](https://payop.com) 

### Payment integration using Payop Api

```php
<?php
header('Content-Type: text/html; charset=UTF-8');

// Payop data
$publicKey = '';
$secretKey = '';

// Order params
$params['amount'] = 1;
$params['currency'] = 'RUB';
$params['orderId'] = 1;
$params['paymentType'] = 'app';
$params['payment'] = 'ALL';

require_once('../Payop.php');

$payop = new Payop($publicKey,$secretKey);
$response = $payop->api('initPayment', $params);

if(!empty($response->result->payUrl)){
    header("Location: " . $response->result->payUrl);
}
```

### Direct download

Download [last version ](https://github.com/Payop/PAYOP-PHP-SDK/archive/master.zip) , unzip and copy to your project folder.

## Contributing ##

Please feel free to contribute to this project! Pull requests and feature requests welcome!
