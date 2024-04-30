<?php 
    // snack 7
    $classe = [
        [
            'nome' => 'Mario',
            'cognome' => 'Rossi',
            'voti' => [8, 7, 6, 9, 8]
        ],
        [
            'nome' => 'Anna',
            'cognome' => 'Verdi',
            'voti' => [7, 6, 7, 8, 9]
        ],
        [
            'nome' => 'Luca',
            'cognome' => 'Bianchi',
            'voti' => [9, 8, 9, 7, 8]
        ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<h2>snack 7</h2>
    <?php 
   
        foreach($classe as $class){
            echo '<div class="pm-container">';
            echo  $class['nome']. ' ' .$class['cognome']. "<br>";
            $voti= $class['voti'];
            $media= array_sum($voti) / count($voti);
            echo "Media voti: " . $media;
            echo '</div>';
        }
    ?>
</body>
</html>