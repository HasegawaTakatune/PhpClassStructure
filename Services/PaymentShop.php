<?php

use ../Models/Instance;
use ./Interface;

// ショップ用の支払い処理
class PaymentShop implements Payment
{
    private $instance = null;

    private $charge = 300; // ショップ手数料
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
        return $data->price + $charge + $postage;
    }

    public function pay_tax($price)
    {
        $data = $instance->get();
        return $data->price + ($data->price * $tax_rate) + $charge + $postage;
    }
}