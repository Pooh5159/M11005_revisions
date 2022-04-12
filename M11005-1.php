<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h1 {
            color: #0a9396;
            text-align: center;
        }
    </style>
    <title>M11005-1 : Les variables</title>
</head>

<body>
    <div>
        <a href="/">Retour à l'index</a>
    </div>
    <!-- Après avoir défini la variable $str avec la valeur "Hello World", et l'avoir ajouté dans un **\<h1\>** à l'intérieur du **\<body\>** de notre template. Trouver, grâce à la documentation PHP, la fonction permettant de forcer notre chaine en **majuscule**
    PS: Le **\<h1\>** doit être centré et de couleur **#0a9396** -->
    <?php
        $str = "Hello World";
        echo  strtoupper("<h1>$str</h1>");
    ?>
</body>

</html>