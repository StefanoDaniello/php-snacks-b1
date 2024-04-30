<?php
    // snack2
    $acesso='';
    if(isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['age'])){
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        $age = $_GET['age'];
        if(strlen($nome) > 3  && !is_numeric($nome) && strpos($email ,'@') !== false && strpos($email, '.') !== false && is_numeric($age)){
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
    <title>Document</title>
</head>
<body>
<h2>snack 2</h2>
    <form action="snack2.php" method="GET">
        <label for="nome">Nome</label>
        <input type="text" name="nome">
        <label for="email">Email</label>
        <input type="email" name="email">
        
        <input type="text" name="age">
        <button type="submit">Invia</button>
        <?php echo $acesso; ?>
    </form>
</body>
</html>