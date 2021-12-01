<!-- Snack 1
Passare come parametri GET name, mail e age e verificare 

(cercando i metodi che non conosciamo nella documentazione) 

-che name sia più lungo di 3 caratteri, 
-che mail contenga un punto 
-e una chiocciola e che 
-age sia un numero. 
-Se tutto è ok stampare 
“Accesso riuscito”, altrimenti “Accesso negato” -->


<?php 
 


$nameUtente = $_GET['name'];
$emailUtente = $_GET['email'];
$ageUtente = $_GET['age'];
/* 
if (strlen($nameUtente) < 3 ){
    echo "troppo breve " . $nameUtente;
};


if (strpos ($emailUtente, '@')){
    echo "email corretta " . $emailUtente;
} else {
    echo "email incompleta " . $emailUtente;
} */

$userEmail = strpos($emailUtente, '@');
//$userDot = strpos($dotlUtente, '.');
$userName = strlen(($nameUtente) < 3);
$userAge = is_numeric($ageUtente);
var_dump($nameUtente, $emailUtente);

if ($userName && $userEmail && $userAge){
    echo "Accesso riuscito";
} else{
    echo "Accesso negato";
}

?>

<p> 
    <?php echo $nameUtente  ?>
    <?php echo $emailUtente  ?>
    <?php echo $ageUtente  ?>

</p>