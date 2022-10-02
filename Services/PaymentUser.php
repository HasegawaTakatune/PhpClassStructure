<?php

use ./Structure;

// 利用者用の支払い処理
class PaymentUser implements Payment
{
    private $postage = 500; // 送料
    private $tax_rate = 0.08; // 消費税

    public function pay($price)
    {
        return $price + $postage;
    }

    public function pay_tax($price)
    {
        return $price + ($price * $tax_rate) + $postage;
    }
}