<?php
class Product
{
    public $name;
    public $price;
    public function __construct($name = "?", $price = 0)
    {
        $this->name = $name;
        $this->price = $price;
    }
    public function show_info()
    {
        echo $this->name . ": " . $this->price . "\n";
    }
}
