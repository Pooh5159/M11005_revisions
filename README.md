# RÉVISIONS GLOBALES Niveau 1

## CONSIGNES

Après avoir forké ou récupéré ce projet, ouvrez le avec VS Code ou votre éditeur préféré.

### Exercice 1 : Les variables - M11005-1.php

Après avoir défini la variable $str avec la valeur "Hello World", et l'avoir ajouté dans un **\<h1\>** à l'intérieur du **\<body\>** de notre template. Trouver, grâce à la documentation PHP, la fonction permettant de forcer notre chaine en **majuscule**
PS: Le **\<h1\>** doit être centré et de couleur **#0a9396**

### Exercice 2 : Les tableaux - M11005-2.php

Créer et déclarer un tableau PHP avec les informations suivantes :

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

Afficher **toutes les informations** de Clyde Powell dans le **\<body\>** du fichier M11005-2.php

### Exercice 3 : Les conditions - M11005-3.php

Soit le tableau suivant comme modèle de produit :

```php
$product = [
    "ref" => "REF_NUMBER",
    "name" => "PRODUCT_NAME",
    "brand" => "PRODUCT_BRAND",
    "price" => PRODUCT_PRICE,
    "stock" =>  [
        "Paris" => PRODUCT_QUANTITY,
        "Lyon" => PRODUCT_QUANTITY
    ]
];
```

Créer deux nouvelles variables de type Array :

- Un **téléviseur LED de 47" LG**, ayant pour ref **"47LG1000",** valant **499 euros** et disponible à **Paris (14 exemplaires)** et à **Lyon (7 exemplaires)**
- Un **robot cuisine KENWOOD**, ref **"ROB4000"**, à **679 euros** et **en rupture à Paris** et en **21 quantités à Lyon**

Afficher les deux produits ainsi que toutes leurs données dans le \<body\> du fichier M11005-3.php. Il est important **d'afficher les stocks** produits, et **d'afficher en rouge un "Non disponible" si produit en rupture**.
