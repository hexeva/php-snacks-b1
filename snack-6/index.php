<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
</head>
<body>

<!-- ## Snack 6
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
    $students = [
        [
            'name'=>'Paolo',
            'lastname'=>'Verdi',
            'grades'=>[7,4,3.5,6.5,9],
                
        ],
        [
            'name'=>'Ettorino',
            'lastname'=>'Bianchi',
            'grades'=>[7,4,6,6.5,5],
                
        ],
        [
            'name'=>'Chiara',
            'lastname'=>'Rossi',
            'grades'=>[8,8,7,7.5,7],
                
        ],
        [
            'name'=>'Veronica',
            'lastname'=>'Neri',
            'grades'=>[6,4,7.5,7,5.5],
                
        ],
    ];

    var_dump($students[2]['grades']);
   $average_grades = array_sum($students['grades']);
   var_dump($average_grades);

?>
    
</body>
</html>