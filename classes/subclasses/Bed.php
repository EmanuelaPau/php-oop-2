<?php

// include_once __DIR__ . '/Products.php';
class Bed extends Product
{
    public $type;
    public $size;
    public $material;

    function __construct($name, $price, $description, $image, $category, string $type, string $size, string $material)
    {
        parent::__construct($name, $price, $description, $image, $category);
        $this->type = $type;
        $this->size = $size;
        $this->material = $material;

    }
}
?>