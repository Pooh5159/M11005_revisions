<!DOCTYPE html>
<html lang='fr'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <style>
        .red {
            color: red;
            font-weight: bolder;
            text-transform: uppercase;
        }
    </style>
    <title>M11005-3 : Les conditions</title>
</head>

<body>
    <div>
        <a href='/'>Retour à l'index</a>
    </div>
    <!-- Soit le tableau suivant comme modèle de produit :

    ```php
    $product = [
        'ref' => 'REF_NUMBER',
        'name' => 'PRODUCT_NAME',
        'brand' => 'PRODUCT_BRAND',
        'price' => PRODUCT_PRICE,
        'stock' =>  [
            'Paris' => PRODUCT_QUANTITY,
            'Lyon' => PRODUCT_QUANTITY
        ]
    ];
    ```

    Créer deux nouvelles variables de type Array :

    - Un **téléviseur LED de 47' LG**, ayant pour ref **'47LG1000',** valant **499 euros** et disponible à **Paris (14 exemplaires)** et à **Lyon (7 exemplaires)**
    - Un **robot cuisine KENWOOD**, ref **'ROB4000'**, à **679 euros** et **en rupture à Paris** et en **21 quantités à Lyon**

    Afficher les deux produits ainsi que toutes leurs données dans le \<body\> du fichier M11005-3.php. Il est important **d'afficher les stocks** produits, et **d'afficher en rouge un 'Non disponible' si produit en rupture**. -->
    <?php
    $product1 = [
        'ref' => '47LG1000',
        'name' => 'Téléviseur LED 47"',
        'brand' => 'LG',
        'price' => '499',
        'stock' =>  [
            'Paris' => 14,
            'Lyon' => 7
        ]
    ];
    $product2 = [
        'ref' => 'ROB4000',
        'name' => 'Robot de cuisine',
        'brand' => 'KENWOOD',
        'price' => '679',
        'stock' =>  [
            'Paris' => 0,
            'Lyon' => 21
        ]
    ];
    var_dump($product1);
    var_dump($product2);
    ?>

    <h2><?php echo $product1["name"]; ?></h2>
    <p>Stock à Paris :
        <?php
            if ($product1["stock"]["Paris"] === 0) {
                 echo '<span class = "red">Non disponible</span>';
            } else {
                 echo $product1["stock"]["Paris"];
            }
        ?>
    </p>
    <p>Stock à Lyon :
        <?php
            if ($product1["stock"]["Lyon"] === 0) {
                 echo '<span class = "red">Non disponible</span>';
            } else {
                 echo $product1["stock"]["Lyon"];
            }
        ?>
    </p>
    <h2><?php echo $product2["name"]; ?></h2>
    <p>Stock à Paris :
        <?php
            if ($product2["stock"]["Paris"] === 0) {
                 echo '<span class = "red">Non disponible</span>';
            } else {
                 echo $product2["stock"]["Paris"];
            }
        ?>
    </p>
    <p>Stock à Lyon :
        <?php
            if ($product2["stock"]["Lyon"] === 0) {
                 echo '<span class = "red">Non disponible</span>';
            } else {
                 echo $product2["stock"]["Lyon"];
            }
        ?>
    </p>
</body>

</html>