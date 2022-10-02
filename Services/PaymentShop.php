<?php

use ./Structure;

// ショップ用の支払い処理
class PaymentShop implements Payment
{
    private $charge = 300; // ショップ手数料
    private $postage = 500; // 送料
    private $tax_rate = 0.08; // 消費税

    public function pay($price)
    {
        return $price + $charge + $postage;
    }

    public function pay_tax($price)
    {
        return $price + ($price * $tax_rate) + $charge + $postage;
    }
}