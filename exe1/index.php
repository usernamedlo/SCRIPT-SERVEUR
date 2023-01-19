<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>PHP</title>
</head>
<body>
    <div class="container">
        <?php 

        $produits = array(
            array(
                'nom' => 'Produit 1',
                'prix' => 19.99,
                'quantite' => 10
            ),
            array(
                'nom' => 'Produit 2',
                'prix' => 29.99,
                'quantite' => 5
            ),
            array(
                'nom' => 'Produit 3',
                'prix' => 39.99,
                'quantite' => 2
            )
            );

        foreach ($produits as $index => $produit) {
            echo $produit['nom'] . " - " . $produit['prix'] . " - " . $produit['quantite'] . "<br>";
        };

        ?>
    </div>
</body>
</html>