<?php
include_once __DIR__ . '/db.php';

class Category
{
    public $animal;
    public $icon;
    public $picture;

    function __construct($animal, $icon, $picture)
    {
        $this->animal = $animal;
        $this->icon = $icon;
        $this->picture = $picture;
    }
}

foreach ($categories as $category) {
    $category['animal'] = new Category($category['animal'], $category['icon'], $category['picture']);
}
?>