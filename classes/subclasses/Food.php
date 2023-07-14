<?php
class Food extends Product
{
    public $type;
    public $ingredients;
    public $age;

    public function __construct(string $type, string $ingredients, string $age)
    {
        $this->type = $type;
        $this->ingredients = $ingredients;
        $this->age = $age;
    }

}
?>