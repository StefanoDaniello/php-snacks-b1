<?php
  // snack1
  include __DIR__ . '/Models/model.php';
 function getMatch($partite){
    // importante e passare l'array di partite per poterlo usare nella funzione
    $match =""; 
    foreach($partite as $partita){
        $match .= $partita['squadra_casa']. ' - ' .$partita['squadra_ospite'] . ' | ' . $partita['punti_casa'] . '-' . $partita['punti_ospite'] . '<br>';
    }
    return $match;
    // importante l' uso del return altrimenti la funzione non ci ritornera nulla
}
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
        echo getMatch($partite);
    ?>
</body>
</html>