<?php
include_once __DIR__ . '/db.php';

class Category extends Product
{
    public $animal;
    public $icon;
    public $picture;

    function __construct($name, $price, $description, $image, $category, $animal, $icon, $picture)
    {
        parent::__construct($name, $price, $description, $image, $category);
        $this->animal = $animal;
        $this->icon = $icon;
        $this->picture = $picture;
    }
}
?>