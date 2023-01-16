<?php

require_once "./classes/categorie.php";
require_once "./classes/prodotto.php";

$productClassesList = [
    $prodotto1 = new Categorie("PATE'",  23, "Cibo", "", "Gatto"),
    $prodotto2 = new Categorie("TIRAGRAFFI",  50, "Giocattolo", "", "Gatto"),
    $prodotto4 = new Categorie("CUCCIA",  74, "Cucce", "", "Cane"),
    $prodotto5 = new Categorie("PALLA DA TENNIS",  6, "Giocattolo", "", "Cane"),
    $prodotto6 = new Categorie("CROCCANTINI", 20, "Giocattolo", "", "Cane")

];


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="data:image/png;base64,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" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Animazon</title>
</head>

<body>

    <h1 class="text-center fw-bold mt-3">Animazon </h1>
    <h3 class="text-center mb-5">L'E-Commerce per il tuo animale!</h3>
    <?php foreach ($productClassesList as $card) { ?>



        <div class="d-flex gap-5 mb-2 ">
            <div class="card ">
                <img src="https://picsum.photos/200/300" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><strong> <?php echo $card->getNomeProdotto() ?></strong></h5>
                    <p> PRODOTTO:<br> <em><?php echo $card->getTipo() ?></em></p>
                    <p><i class="<?php echo $card->getSpecie() ?>"></i></p>
                    <p>CATEGORIA:<em><br><?php echo $card->getCategoria() ?></em></p>
                    <p>PREZZO:<br><em><?php echo $card->getPrezzo() ?>€</em></p>
                </div>
            </div>


        <?php } ?>
</body>

</html>