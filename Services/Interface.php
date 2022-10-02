<?php

// 不変のメソッドを定義する
interface Payment
{
    public function pay($price): number;
    public function pay_tax($price): number;
}
