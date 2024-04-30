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
        if(strlen($nome) > 3  && !is_numeric($nome) && strpos($email ,'@') !== false && strpos($email, '.') !== false && is_numeric($age)){
            $acesso="Accesso riuscito";
        }else{
            $acesso= "Accesso negato";
        }
    }
    // snack3
    $posts = [

        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];

    // snack 4
    $numeri_casuali=[];
    while(count($numeri_casuali) < 15){
        $controllo_numeri = rand(1, 100);
        if(!in_array($controllo_numeri , $numeri_casuali)){
            $numeri_casuali[] = $controllo_numeri;
        }
    }
    // snack 5
    $paragrafo='Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora rem quae cum inventore accusantium temporibus corporis est 
    necessitatibus nemo enim nostrum mollitia nesciunt odio, suscipit libero voluptates eligendi officia error quasi vitae, reprehenderit possimus, 
    consectetur non exercitationem! Nam excepturi laboriosam harum cupiditate dolorem ratione totam commodi quis unde. Hic harum architecto reiciendis 
    accusantium a sit id nobis sapiente tempora aliquid cumque eaque vel mollitia, incidunt voluptates! Odio debitis quae culpa rem obcaecati 
    dolores illo totam beatae unde? Sed soluta consequatur voluptas minus ipsam ex aspernatur quas optio beatae velit quasi dolor pariatur, obcaecati, 
    itaque nisi tempore. Est saepe excepturi fuga.';
    $newParagrafo = explode("." , $paragrafo);
    // snack 6
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
        <label for="nome">Nome</label>
        <input type="text" name="nome">
        <label for="email">Email</label>
        <input type="email" name="email">
        <label for="age">Eta'</label>
        <input type="text" name="age">
        <button type="submit">Invia</button>
        <?php echo $acesso; ?>
    </form>
    <h2>snack 3</h2>
    <?php 
        foreach($posts as $date => $postList){
            echo "<h3>$date</h3>";
            foreach($postList as $post){
                // echo $post['title'];
                echo "<h4>{$post['title']}</h4>"; 
                echo "<p><strong>Autore:</strong> {$post['author']}</p>"; 
                echo "<p>{$post['text']}</p>";
                echo "<hr>"; //linea divisoria 
            }
        }
    ?>
    <h2>snack 4</h2>
    <?php 
     foreach($numeri_casuali as $numero){
        echo $numero . "<br>";
     }
    ?>
    <h2>snack 5</h2>
    <?php 
        foreach($newParagrafo as $new){
            echo "<p>$new</p>";
        }    
    ?>
    <h2>snack 6</h2>
    <?php 
        echo '<div class="teachers-container">';
        echo '<h2>Insegnanti</h2>';
        foreach ($db['teachers'] as $teacher) {
            echo '<p>' . $teacher['name'] . ' ' . $teacher['lastname'] . '</p>';
        }
        echo '</div>';
    
        echo '<div class="pm-container">';
        echo '<h2>PM</h2>';
        foreach ($db['pm'] as $pm) {
            echo '<p>' . $pm['name'] . ' ' . $pm['lastname'] . '</p>';
        }
        echo '</div>';
    ?>
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