<?php

// 各モデルごとにインスタンス生成させる。
use ./Product;
use ./ProductMock;

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
        case Mode::Debug: return new ProductMock();
        case Mode::Product: return new Product();
    }
}