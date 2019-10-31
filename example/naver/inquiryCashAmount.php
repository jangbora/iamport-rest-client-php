<?php

require_once '../../vendor/autoload.php';

use Iamport\RestClient\Iamport;
use Iamport\RestClient\Request\Naver\NaverInquiry;

$iamport = new Iamport('imp_apikey', 'ekKoeW8RyKuT0zgaZsUtXXTLQ4AhPFW3ZGseDA6bkA5lamv9OqDMnxyeB9wqOsuO9W3Mx9YSJ4dTqJ3f');
$request = NaverInquiry::cashAmount('imp_2019010101');
$result = $iamport->callApi($request);
dump($result);
if ($result->getSuccess()) {
    $cashAmount = $result->getData();
    dump($cashAmount);
} else {
    dump($result->getError());
}