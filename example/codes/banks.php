<?php

require_once '../../vendor/autoload.php';

use Iamport\RestClient\Iamport;
use Iamport\RestClient\Request\Code;

$iamport = new Iamport('imp_apikey', 'ekKoeW8RyKuT0zgaZsUtXXTLQ4AhPFW3ZGseDA6bkA5lamv9OqDMnxyeB9wqOsuO9W3Mx9YSJ4dTqJ3f');
$request = Code::banks();
$result = $iamport->callApi($request);

if ($result->getSuccess()) {
    $banks = $result->getData()->getItems();
    dump($banks);
} else {
    var_dump($result->getError());
}