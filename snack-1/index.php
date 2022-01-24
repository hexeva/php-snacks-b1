<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>SNACK 1</title>
</head>
<body>

<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

    $random_points1 = rand(1,100);
    $random_points2 = rand(1,100);

    $matches = [
        [
            'home'=> 'Olimpia Milano',
            'visiting'=> 'Cantù',
            'home_points'=> $random_points1,
            'visiting_points'=> $random_points2,
        ],
        [
            'home'=> 'Virtus Bologna',
            'visiting'=> 'Reyer Venezia',
            'home_points'=> $random_points1,
            'visiting_points'=> $random_points2,
        ],
        [
            'home'=> 'V. L. Pesaro',
            'visiting'=> 'Virtus Roma',
            'home_points'=> $random_points1,
            'visiting_points'=> $random_points2,
        ],
        [
            'home'=> 'Treviso',
            'visiting'=> 'Olimpia Milano',
            'home_points'=> $random_points1,
            'visiting_points'=> $random_points2,
        ],
        [
            'home'=> 'Dinamo Sassari',
            'visiting'=> 'Basket Rimini',
            'home_points'=> $random_points1,
            'visiting_points'=> $random_points2,
        ],
    ];
    // var_dump($matches[1]['visiting']);
?>
    <div class="container">

        <?php for($i = 0; $i < count($matches); $i++) { ?>
        <?php $this_match = $matches[$i]; ?>
            <div class="single-match">
                <div class="teams">
                    <span class="single-team"> <?php echo $this_match['home']; ?> </span> -
                    <span class="single-team"> <?php echo $this_match['visiting']; ?> </span> 
                </div>
                <div class="results">
                    <span > <?php echo $this_match['home_points']; ?> </span> ||
                    <span > <?php echo $this_match['visiting_points']; ?> </span>
                </div>
                
            </div>
        
        <?php } ?>

    </div>

   

    
    
</body>
</html>