<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tom and Jerry </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
</head>
<body>
    <h1 class="fw-bold text-center text-uppercase">
        Tom & Jerry
    </h1>

    <h2>CAT</h2>
    <?php 
    $imgLink= 'https://www.zoomalia.it/negozio-di-animali/friskies-crocchette-per-gatti-adulti-p-39988.html';

    $croccantini= new Food('Croccantini', 'Friskies', 40, $imgLink, 'cat', 'fish',20/05/2024)
    ?>
</body>
</html>