<?php

use ./Interface;

class PaymentShop implements DefaultModel
{
    public function get($param)
    {
        return [
            [ 'name' -> '食べ物', 'price' -> 200, ],
            [ 'name' -> '飲み物', 'price' -> 1000, ],
        ];
    }

    public function update($param)
    {
        return true;
    }
}