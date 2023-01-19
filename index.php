<?php 
//Affichage des carrés de tous les nombres entre 1 et 30.

$numbers = [];

//Fonction qui ajoute des données dans un array.
function ajoute($numbers) {
    for ($i = 1; $i <= 30; $i++) {
        $numbers[$i] = pow($i, 2);
    }
    return $numbers;
}

//Fonction qui affiche la liste non ordonnée
function affiche($numbers) {
    echo "<html lang='fr'><body>";
    echo "<ul>";
    for ($i = 1; $i <= 30; $i++) {
        echo "<li>$i<sup>2</sup> = $numbers[$i]</li>";
    }
    echo "</ul>";
    echo "</body></html>";
}

affiche(ajoute($numbers));

//Fonction qui prend en paramètre un nombre n et retournant la chaîne de caractères n2 = m
function donneM ($numbers,int $num) {
    foreach ($numbers as $key => $value) {
        if ($key == $num) {
            echo "<div>$num<sup>2</sup> = $value</div>";
        }
    }
}

donneM(ajoute($numbers), 24);



//Table de multiplication
const START = 2;
const END = 9;

//Fonction qui affiche le tableau
function afficheTableau($table) {
    echo "<html lang='fr'><body>";
    echo "<table cellpadding='5' cellspacing='0'>";

    for ($row = 0; $row < count($table[0]); $row++){
        echo "<tr>";

        for ($col = 0; $col < count($table[0]); $col++) {
            if ($row == 0 || $col == 0) {
                echo "<td style='width: 20px; height: 20px; background-color: #d4802f;'>";
            } else if ($row  % 2 == 0){
                echo "<td style='width: 20px; height: 20px; background-color: #bea58e;'>";
                if($row == $col){
                    echo "<b>";
                }
            } else {
                echo "<td style='width: 20px; height: 20px; background-color: #ebd9c8;'>";
                if($row == $col){
                    echo "<b>";
                }
            }

            echo $table[$row][$col];
            echo "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
    echo "</body></html>";
}

//Fonction qui ajoute des données dans un array.
function ajouteTableau() {
    $tableDeMultiplication = [0 =>
        ['', 2, 3, 4, 5, 6, 7, 8, 9]
    ];

    for ($i = 1, $row = START; $row <= END; $row++, $i++){
        for ($j = 0, $col = START - 1; $col <= END; $col++, $j++) {
            if ($j == 0) {
                $tableDeMultiplication[$i][0] = $row;
            } else {
                $tableDeMultiplication[$i][$j] = $col * $row;
            }
        }
    }

    afficheTableau($tableDeMultiplication);
}

ajouteTableau();
?>