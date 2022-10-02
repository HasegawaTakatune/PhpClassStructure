<?php

use ./Structure;

// テスト用の支払い処理
class PaymentUser implements Payment
{
    private $tax_rate = 0.08; // 消費税

    public function pay($price)
    {
        return $price;
    }

    public function pay_tax($price)
    {
        return $price + ($price * $tax_rate);
    }
}