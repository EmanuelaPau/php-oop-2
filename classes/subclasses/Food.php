<?php
class Food extends Product
{
    public $type;
    public $ingredients;
    public $age;

    public function __construct($name, $price, $description, $image, $category, string $type, string $ingredients, string $age)
    {
        parent::__construct($name, $price, $description, $image, $category);
        $this->type = $type;
        $this->ingredients = $ingredients;
        $this->age = $age;
    }

}
?>