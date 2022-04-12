<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M11005-2 : Les arrays</title>
</head>

<body>
    <div>
        <a href="/">Retour à l'index</a>
    </div>
    <!-- Créer et déclarer un tableau PHP avec les informations suivantes :

    |           | id  | first_name | last_name | age | genre |
    | :-------: | :-: | :--------: | :-------: | :-: | :---: |
    | **EM001** |  3  |   Claude   |  Basset   | 54  |  "M"  |
    | **EM005** |  6  |   Polly    |   Smith   | 41  |  "F"  |
    | **EM065** | 13  |   Nabil    | Bensaoud  | 34  |  "M"  |

    Puis ajouter via la méthode de votre choix les 2 employés suivants :

    |           | id  | first_name | last_name | age | genre |
    | :-------: | :-: | :--------: | :-------: | :-: | :---: |
    | **EM078** | 24  |   Clyde    |  Powell   | 52  |  "M"  |
    | **EM095** | 32  |   Emily    | Goodwall  | 47  |  "F"  |

    Afficher **toutes les informations** de Clyde Powell dans le **\<body\>** du fichier M11005-2.php -->
    <?php
        $employees = [
            "EM001" => [
                "id" => 3,
                "first_name" => "Claude",
                "last_name" => "Basset",
                "age" => 54,
                "genre" => "M"
            ],
            "EM005" => [
                "id" => 6,
                "first_name" => "Polly",
                "last_name" => "Smith",
                "age" => 41,
                "genre" => "F"
            ],
            "EM065" => [
                "id" => 13,
                "first_name" => "Nabil",
                "last_name" => "Bensaoud",
                "age" => 34,
                "genre" => "M"
            ],
        ];
        var_dump($employees);
        $employees["EM078"] = [
            "id" => 24,
            "first_name" => "Clyde",
            "last_name" => "Powell",
            "age" => 52,
            "genre" => "M"
        ];
        $employees["EM095"] = [
            "id" => 32,
            "first_name" => "Emily",
            "last_name" => "Goodwall",
            "age" => 47,
            "genre" => "F"
        ];
        var_dump($employees);
        var_dump($employees["EM095"]);
    ?>
</body>

</html>