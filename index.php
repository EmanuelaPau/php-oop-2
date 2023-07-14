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
<header>
    <h1 class="mb-5">Animal Shop</h1>
</header>
<main>
    <div class="container">
        <div class="row">

            <?php foreach ($products as $product): ?>
                <?php
                if ($product["typeOfProduct"]["type"] == 'Bed') {
                    $beds = new Bed($product["name"], $product["price"], $product["description"], $product["image"], $product["category"], $product["typeOfProduct"]["type"], $product["typeOfProduct"]["size"], $product["typeOfProduct"]["material"]);
                    ?>

                    <div class="card col-3 p-0 m-3">

                        <img class="card-img-top" src="<?php echo $beds->image ?>" alt="<?php echo $beds->name ?> image">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $beds->name ?>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <?php echo $beds->price ?> $
                            </h6>
                            <p class="card-text">
                                <?php echo $beds->description ?>
                            </p>
                            <ul class="list-group list-group-flush mb-3 p-0">
                                <li class="list-group-item"><strong>
                                        <?php echo $beds->category ?>
                                    </strong> <i></i></li>
                                <li class="list-group-item">
                                    <?php echo $beds->type ?>
                                </li>
                                <li class="list-group-item">
                                    <?php echo $beds->size ?>
                                </li>
                                <li class="list-group-item">
                                    <?php echo $beds->material ?>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary">Buy now</a>
                        </div>
                    </div>

                <?php } elseif ($product["typeOfProduct"]["type"] == 'Food') {
                    $foods = new Food($product["name"], $product["price"], $product["description"], $product["image"], $product["category"], $product["typeOfProduct"]["type"], $product["typeOfProduct"]["ingredients"], $product["typeOfProduct"]["age"]);
                    ?>
                    <div class="card col-3 p-0 m-3">

                        <img class="card-img-top" src="<?php echo $foods->image ?>" alt="<?php echo $foods->name ?> image">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $foods->name ?>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <?php echo $foods->price ?> $
                            </h6>
                            <p class="card-text">
                                <?php echo $foods->description ?>
                            </p>
                            <ul class="list-group list-group-flush mb-3 p-0">
                                <li class="list-group-item"><strong>
                                        <?php echo $foods->category ?>
                                    </strong> <i></i></li>
                                <li class="list-group-item">
                                    <?php echo $foods->type ?>
                                </li>
                                <li class="list-group-item">
                                    <?php echo $foods->ingredients ?>
                                </li>
                                <li class="list-group-item">
                                    <?php echo $foods->age ?>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary">Buy now</a>
                        </div>
                    </div>


                    <?php
                } elseif ($product["typeOfProduct"]["type"] == 'Toy') {
                    $toys = new Toy($product["name"], $product["price"], $product["description"], $product["image"], $product["category"], $product["typeOfProduct"]["type"], $product["typeOfProduct"]["material"], ); ?>


                    <div class="card col-3 p-0 m-3">

                        <img class="card-img-top" src="<?php echo $toys->image ?>" alt="<?php echo $toys->name ?> image">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $toys->name ?>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <?php echo $toys->price ?> $
                            </h6>
                            <p class="card-text">
                                <?php echo $toys->description ?>
                            </p>
                            <ul class="list-group list-group-flush mb-3 p-0">
                                <li class="list-group-item"><strong>
                                        <?php echo $toys->category ?>
                                    </strong> <i class="<?php echo $categories[$toys->category]['icon'] ?>"></i></li>
                                <li class="list-group-item">
                                    <?php echo $toys->type ?>
                                </li>
                                <li class="list-group-item">
                                    <?php echo $toys->material ?>
                                </li>

                            </ul>
                            <a href="#" class="btn btn-primary">Buy now</a>
                        </div>
                    </div>

                    <?php
                }
                ?>

            <?php endforeach; ?>
        </div>
    </div>
</main>

</html>