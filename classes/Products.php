<?php
include_once __DIR__ . '../db.php';
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
    public $typeOfProduct;

    public function __construct(string $name, float $price, string $description, string $image, string $category, string $typeOfProduct)
    {
        $this->name = $name;

        $this->price = $price;
        $this->description = $description;
        $this->image = $image;
        $this->category = $category;
        $this->typeOfProduct = $typeOfProduct;
    }
}
?>