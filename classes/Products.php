<?php
// include_once __DIR__ . '../db.php';
include_once __DIR__ . '/subclasses/Toys.php';
include_once __DIR__ . '/subclasses/Food.php';
include_once __DIR__ . '/subclasses/Beds.php';

class Product
{
    public $name;
    public $price;
    public $description;
    public $image;
    public $category;

    public function __construct($name, $price, $description, $image, $category)
    {
        $this->name = $name;

        $this->price = $price;
        $this->description = $description;
        $this->image = $image;
        $this->category = $category;
    }
}
?>