<?php
header('Content-Type: text/html; charset=UTF-8');

// Payop data
$publicKey = 'application-27';
$secretKey = '0a0642946ac8d8cb87008b9acfa7a07c';

// Order params
$params['transactionId'] = 1222;

require_once('../Payop.php');

$payop = new Payop($publicKey,$secretKey);
$response = $payop->api('getPayment', $params);

print_r($response);