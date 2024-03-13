<?php
class Product {
    public $name;
    public $amount;
    public $price;

    function __construct($name, $amount, $price) {
        $this->name = $name;
        $this->amount = $amount;
        $this->price = $price;
    }
    function get_name() {
        return $this->name;
    }
    function get_amount() {
        return $this->amount;
    }
    function get_price() {
        return $this->price;
    }
}
?>