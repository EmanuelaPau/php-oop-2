<?php
include_once __DIR__ . '/classes/Product.php';
include_once __DIR__ . '/classes/subclasses/Toy.php';
include_once __DIR__ . '/classes/subclasses/Food.php';
include_once __DIR__ . '/classes/subclasses/Bed.php';
include_once __DIR__ . '/classes/subclasses/Category.php';
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

    <!-- style -->
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="row d-flex justify-content-between p-2 align-items-center">
                <div class="col-10  free-delivery">
                    <p class="mb-0">
                        Free delivery from €49 (T&C's apply)**
                    </p>
                </div>

                <div class="col-2 d-flex justify-content-between">
                    <div class="user-menu">
                        <a class="text-reset text-decoration-none" href="#">Contact us</a>
                    </div>
                    <div class="user-menu">
                        <a class="text-reset text-decoration-none" href="#">My zooplus</a>
                    </div>
                </div>
            </div>

            <nav class="row upper-nav p-2 d-flex justify-content-between">
                <img class="col-2 logo"
                    src="https://cdn-prod.shphdrp.ext.aws.zooplus.io/3.14.1/images/zooplus/logo/zooplus@2x.png" />
                <button type="button" class="btn btn-primary border-0 bg-orange col-2">Shopping Basket</button>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">

                <?php foreach ($products as $product):
                    $newProduct = new Product($product["name"], $product["price"], $product["description"], $product["image"], $product["category"]);

                    ?>

                    <div class="card col-3 p-0 m-3">

                        <img class="card-img-top" src="<?php echo $newProduct->image ?>"
                            alt="<?php echo $newProduct->name ?> image">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $newProduct->name ?>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <?php echo $newProduct->price ?> $
                            </h6>
                            <p class="card-text">
                                <?php echo $newProduct->description ?>
                            </p>
                            <ul class="list-group list-group-flush mb-3 p-0">
                                <?php

                                ?>
                                <li class="list-group-item"><strong>
                                        <?php
                                        $animal = $newProduct->category;
                                        echo $animal ?>
                                    </strong>
                                    <?php
                                    if ($animal == 'dog') {
                                        var_dump($dog);
                                        ?>
                                        <i class="<?php $dog->icon ?>"><?php $dog->icon ?></i>
                                    <?php } elseif ($animal == 'cat') {
                                        var_dump($cat);
                                        ?>
                                        <i class="<?php $cat->icon ?>"><?php $cat->icon ?></i>
                                    <?php } ?>

                                </li>

                                <?php

                                if ($product["typeOfProduct"]["type"] == 'Bed') {
                                    $beds = new Bed($product["name"], $product["price"], $product["description"], $product["image"], $product["category"], $product["typeOfProduct"]["type"], $product["typeOfProduct"]["size"], $product["typeOfProduct"]["material"]);
                                    ?>
                                    <li class="list-group-item">
                                        <?php echo $beds->type ?>
                                    </li>
                                    <li class="list-group-item">
                                        <?php echo $beds->size ?>
                                    </li>
                                    <li class="list-group-item">
                                        <?php echo $beds->material ?>
                                    </li>
                                    <?php
                                } elseif ($product["typeOfProduct"]["type"] == 'Food') {
                                    $foods = new Food($product["name"], $product["price"], $product["description"], $product["image"], $product["category"], $product["typeOfProduct"]["type"], $product["typeOfProduct"]["ingredients"], $product["typeOfProduct"]["age"]); ?>
                                    <li class="list-group-item">
                                        <?php echo $foods->type ?>
                                    </li>
                                    <li class="list-group-item">
                                        <?php echo $foods->ingredients ?>
                                    </li>
                                    <li class="list-group-item">
                                        <?php echo $foods->age ?>
                                    </li>
                                    <?php
                                } elseif ($product["typeOfProduct"]["type"] == 'Toy') {
                                    $toys = new Toy($product["name"], $product["price"], $product["description"], $product["image"], $product["category"], $product["typeOfProduct"]["type"], $product["typeOfProduct"]["material"], ); ?>
                                    <li class="list-group-item">
                                        <?php echo $toys->type ?>
                                    </li>
                                    <li class="list-group-item">
                                        <?php echo $toys->material ?>
                                    </li>
                                    <?php
                                }
                                ?>


                            </ul>
                            <a href="#" class="btn btn-primary">Buy now</a>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
    </main>
</body>

</html>