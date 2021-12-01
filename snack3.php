<!-- Snack 3
Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

 
$numeriCarsuali = [];



while (count($numeriCarsuali) < 15){
    $numeri = rand(0, 100);

    if (!in_array($numeri, $numeriCarsuali)){
        $numeriCarsuali[] = $numeri;

    }

    
};


var_dump($numeriCarsuali);



//creo numero casuale
/* $numeriCarsuali = rand(0, 100);
echo $numeriCarsuali;
 

 */





?>