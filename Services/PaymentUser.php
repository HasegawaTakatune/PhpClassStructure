<?php

use ../Models/Instance;
use ./Interface;

// 利用者用の支払い処理
class PaymentUser implements Payment
{
    private $instance = null;

    private $postage = 500; // 送料
    private $tax_rate = 0.08; // 消費税

    __construct()
    {
        // インスタンス生成
        $instance = Instance::init();
    }

    public function pay($price)
    {
        $data = $instance->get();
        return $data->price + $postage;
    }

    public function pay_tax($price)
    {
        $data = $instance->get();
        return $data->price + ($data->price * $tax_rate) + $postage;
    }
}