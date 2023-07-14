<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

<?php
include_once __DIR__ . '/classes/Products.php';
include_once __DIR__ . '/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Shop</title>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
</body>
<h1>Animal Shop</h1>
<?php var_dump($product = new Product('spazzola pippo', 10.20, 'spazzola per cani', 'url', 'cane')) ?>

<?php var_dump($beds = new Bed('Cuccia Billy', 10, 'Questa semplice cuccia risponde alle esigenze ...', 'url', 'Cucce', 'Cuccia da esterno', 'Grande', 'legno')) ?>

<?php var_dump($products[1]['name']); ?>

<?php foreach ($products as $product) {
    if ($product["typeOfProduct"]["type"] == 'Bed') {
        var_dump($beds = new Bed($product["name"], $product["price"], $product["description"], $product["image"], $product["category"], $product["typeOfProduct"]["type"], $product["typeOfProduct"]["size"], $product["typeOfProduct"]["material"]));
    } elseif ($product["typeOfProduct"]["type"] == 'Food') {
        var_dump($foods = new Food($product["name"], $product["price"], $product["description"], $product["image"], $product["category"], $product["typeOfProduct"]["type"], $product["typeOfProduct"]["ingredients"], $product["typeOfProduct"]["age"]));
    } elseif ($product["typeOfProduct"]["type"] == 'Toy') {
        var_dump($toys = new Toy($product["name"], $product["price"], $product["description"], $product["image"], $product["category"], $product["typeOfProduct"]["type"], $product["typeOfProduct"]["material"], ));
    }
} ?>


</html>