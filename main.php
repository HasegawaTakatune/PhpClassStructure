<?php

// クラスの結合度を低くしたサービスクラスのサンプル(草案)
// 実装とモックの切り替えを意識した作りにしている。

use ./Service/Instance;

class Payment 
{
    private $instance = null;

    __construct()
    {
        // インスタンス生成
        $instance = Instance::init();
    }

    public function show_payment($price)
    {
        $value = $instance->pay($price);
        echo("支払金額は ${value}円(＋税)です。");
    }

    public function show_payment_tax($price)
    {
        $value = $instance->pay_tax($price);
        echo("支払金額は ${value}円(税込)です。");
    }
}