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
    // snack2
    $acesso='';
    if(isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['age'])){
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        $age = $_GET['age'];
        if(strlen($nome) > 3  && strpos($email ,'@') !== false && strpos($email, '.') !== false && is_numeric($age)){
            $acesso="Accesso riuscito";
        }else{
            $acesso= "Accesso negato";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-b1</title>
</head>
<body>
    <h2> snack 1</h2>
    <?php
        foreach($partite as $partita){
           echo $partita['squadra_casa']. '-' .$partita['squadra_ospite'] . ' | ' . $partita['punti_casa'] . '-' . $partita['punti_ospite'] . '<br>';
        }
    ?>
    <h2>snack 2</h2>
    <form action="index.php" method="GET">
        <input type="text" name="nome">
        <input type="email" name="email">
        <input type="text" name="age">
        <button type="submit">Invia</button>
        <?php echo $acesso; ?>
    </form>



</body>
</html>