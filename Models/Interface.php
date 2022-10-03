<?php

// 不変のメソッドを定義する
interface DefaultModel
{
    public function get($param): any;
    public function update($param): boolean;
}
