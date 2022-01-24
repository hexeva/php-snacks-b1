<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Snack-5</title>
</head>
<body>
<!-- ## Snack 5
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php
 
 $db = [
     'teachers' => [
         [
             'name' => 'Michele',
             'lastname' => 'Papagni'
         ],
         [
             'name' => 'Fabio',
             'lastname' => 'Forghieri'
         ]
     ],
     'pm' => [
         [
             'name' => 'Roberto',
             'lastname' => 'Marazzini'
         ],
         [
             'name' => 'Federico',
             'lastname' => 'Pellegrini'
         ]
     ]
 ];

?>

    <div class="container">
        <h1>SNACK 5</h1>
        <!-- ciclo teachers all'interno dell'array db -->
       <div class="grey">
        <?php for($i = 0; $i < count($db['teachers']); $i++){ ?>
                <?php $this_teacher = $db['teachers'][$i]; ?>

                
                    <div class="single-teacher">
                        <h2> Name:  <?php echo $this_teacher['name']; ?></h2>
                        <h2> lastname:  <?php echo $this_teacher['lastname']; ?></h2>
                    </div>
                

            <?php } ?> 
       </div>
        <!-- ciclo pm all'interno dell'array db -->

        <div class="green">
            <?php for($i = 0; $i < count($db['pm']); $i++){ ?>
                <?php $this_pm = $db['pm'][$i]; ?>

                <div class="single-pm">
                    <h2> Name: <?php echo $this_pm['name']; ?></h2>
                    <h2> lastname: <?php echo $this_pm['lastname']; ?></h2>

                </div>

            <?php } ?>
        </div>

    </div>

  

</body>
</html>