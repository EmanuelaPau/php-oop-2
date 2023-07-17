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

$cat = new Category('cat', 'fa-solid fa-cat', 'https://images.pexels.com/photos/1317844/pexels-photo-1317844.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');

$dog = new Category('dog', 'fa-solid fa-dog', 'https://images.pexels.com/photos/3361739/pexels-photo-3361739.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');

// foreach ($categories as $category) {
//     $category['animal'] = new Category($category['animal'], $category['icon'], $category['picture']);
// }
?>