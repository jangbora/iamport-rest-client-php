<?php

require_once '../../vendor/autoload.php';

use Iamport\RestClient\Iamport;
use Iamport\RestClient\Request\Naver\NaverInquiry;

$iamport = new Iamport('imp_apikey', 'ekKoeW8RyKuT0zgaZsUtXXTLQ4AhPFW3ZGseDA6bkA5lamv9OqDMnxyeB9wqOsuO9W3Mx9YSJ4dTqJ3f');
$request = NaverInquiry::single('2019083013231750');
$result = $iamport->callApi($request);
dump($result);
if ($result->getSuccess()) {
    $productOrder = $result->getData();
    // 원본값 조회시에는 getAttributes() 메소드를 사용합니다.
    dump($product_order_status = $productOrder->product_order_status);
    dump($product_order_status = $productOrder->getAttributes('product_order_status'));
    dump($claim_type = $productOrder->claim_type);
    dump($claim_status = $productOrder->claim_status);

} else {
    dump($result->getError());
}