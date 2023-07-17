<?php

// include_once __DIR__ . '/Products.php';
class Food extends Product
{
    public $type;
    public $ingredients;
    public $age;

    function __construct($name, $price, $description, $image, $category, string $type, string $ingredients, string $age)
    {
        parent::__construct($name, $price, $description, $image, $category);
        $this->type = $type;
        $this->ingredients = $ingredients;
        $this->age = $age;
    }

}
?>