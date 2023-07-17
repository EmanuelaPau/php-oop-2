<?php

// include_once __DIR__ . '/Products.php';
class Toy extends Product
{
    public $type;
    public $material;

    function __construct($name, $price, $description, $image, $category, string $type, string $material)
    {
        parent::__construct($name, $price, $description, $image, $category);
        $this->type = $type;
        $this->material = $material;
    }
}
?>