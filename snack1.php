<?php
  // snack1
  $partite = [
    [
        'squadra_casa' => 'Olimpia Milano',
        'squadra_ospite' => 'Cantù',
        'punti_casa' => 55,
        'punti_ospite' => 60
    ],
    [
        'squadra_casa' => 'Virtus Bologna',
        'squadra_ospite' => 'Varese',
        'punti_casa' => 72,
        'punti_ospite' => 68
    ],
    [
        'squadra_casa' => 'Fortitudo Bologna',
        'squadra_ospite' => 'Reggiana',
        'punti_casa' => 80,
        'punti_ospite' => 75
    ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2> snack 1</h2>
    <?php
        foreach($partite as $partita){
           echo $partita['squadra_casa']. '-' .$partita['squadra_ospite'] . ' | ' . $partita['punti_casa'] . '-' . $partita['punti_ospite'] . '<br>';
        }
    ?>
</body>
</html>