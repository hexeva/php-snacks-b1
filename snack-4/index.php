<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>

<!-- ## Snack 4 -->
<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<!-- creo una variabile stringa -->
<?php
    $paragraph = "Nel mezzo del cammin di nostra vita
    mi ritrovai per una selva oscura
    ché la diritta via era smarrita.
    
    Ahi quanto a dir qual era è cosa dura
    esta selva selvaggia e aspra e forte
    che nel pensier rinova la paura.
    
    Tant'è amara che poco è più morte;
    ma per trattar del ben ch'i' vi trovai,
    dirò de l'altre cose ch'i' v'ho scorte.
    
    Io non so ben ridir com'i' v'intrai,
    tant'era pien di sonno a quel punto
    che la verace via abbandonai.
    
    Ma poi ch'i' fui al piè d'un colle giunto,
    là dove terminava quella valle
    che m'avea di paura il cor compunto.
    
    guardai in alto, e vidi le sue spalle
    vestite già de' raggi del pianeta
    che mena dritto altrui per ogne calle."

    
 ?>

 <p> <?php echo $paragraph; ?> </p>

 <?php
    // CON EXPLODE TORNO UN ARRAY DA UNA STRINGA

    $exploded = explode('.',$paragraph);
    var_dump($exploded[2]);
 
 ?>

 <?php for($i = 0; $i < count($exploded); $i++){ ?>
    <?php $this_paragraph = $exploded[$i]; ?>

    <h2> <?php echo $this_paragraph; ?> </h2>

<?php } ?>


</body>
</html>