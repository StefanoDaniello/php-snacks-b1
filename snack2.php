<?php
    // snack2
    function checkform(){
        $message='';
        $class='';
        if(isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['age'])){
            $nome = $_GET['nome'];
            $email = $_GET['email'];
            $age = $_GET['age'];
            if(strlen($nome) > 3  && !is_numeric($nome) && strpos($email ,'@') !== false && strpos($email, '.') !== false && is_numeric($age)){
                $message="Accesso riuscito";
                $class='alert-success';
            }else{
                $message= "Accesso negato";
                $class='alert-danger';
            }
        }
        return ['class' => $class, 'message' => $message];
    }
    $acesso = checkform();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h2>snack 2</h2>
<?php if($acesso['message'] == '') {?>     
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
        <label for="nome">Nome</label>
        <input type="text" name="nome">
        <label for="email">Email</label>
        <input type="email" name="email">
        <label for="age">Age</label>
        <input type="text" name="age">
        <button type="submit">Invia</button>
    </form>
<?php } else { 
    echo '<p class="alert ' . $acesso['class'] . '">' . $acesso['message'] . '</p>';
}?>    
</body>
</html>