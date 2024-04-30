<?php
   // snack 5
   $paragrafo='Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora rem quae cum inventore accusantium temporibus corporis est 
   necessitatibus nemo enim nostrum mollitia nesciunt odio, suscipit libero voluptates eligendi officia error quasi vitae, reprehenderit possimus, 
   consectetur non exercitationem! Nam excepturi laboriosam harum cupiditate dolorem ratione totam commodi quis unde. Hic harum architecto reiciendis 
   accusantium a sit id nobis sapiente tempora aliquid cumque eaque vel mollitia, incidunt voluptates! Odio debitis quae culpa rem obcaecati 
   dolores illo totam beatae unde? Sed soluta consequatur voluptas minus ipsam ex aspernatur quas optio beatae velit quasi dolor pariatur, obcaecati, 
   itaque nisi tempore. Est saepe excepturi fuga.';
   $newParagrafo = explode("." , $paragrafo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>snack 5</h2>
    <?php 
        foreach($newParagrafo as $new){
            echo "<p>$new</p>";
        }    
    ?>
</body>
</html>