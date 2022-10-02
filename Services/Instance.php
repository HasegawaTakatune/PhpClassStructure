<?php

// 各サービスごとにインスタンス生成させる。
// main.phpと実装したサービスクラスとの橋渡し役

use ./PaymentTest;
use ./PaymentShop;
use ./PaymentUser;

enum Mode
{
    case Debug;
    case Product;
}

$mode = Mode::Debug;

public function init()
{
    // .envやビルド時のタイプから判定させても良い
    switch($mode){
        case Mode::Debug: return new PaymentTest();
        case Mode::Product: return new PaymentShop(); // new PaymentUser()
    }
}