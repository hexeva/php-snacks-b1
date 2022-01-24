<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>
<!-- ## Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->


<?php
// creo un array vuoto
$random_array = [];
 
// creo un ciclo while che per 15 volte pusherà 15 numeri

while (count($random_array) < 15 ){
    // per 15 volte genero 15 numeri casuali
    $random_numbers = rand(1,50);
    // assgno random_number come key dell'array(ogni key è univoca)
    $random_array[$random_numbers]= $random_numbers;
}
var_dump($random_array);

?>

</body>
</html>