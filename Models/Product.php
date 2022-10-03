<?php

use ../Models/Product;
use ./Interface;

class PaymentShop implements DefaultModel
{
    public function get($param)
    {
        return Product::get();
    }

    public function update($param)
    {
        try {
            Product::update($param);
        }catch{
            return false;
        }
        return true;

    }
}