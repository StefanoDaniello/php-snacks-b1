<?php
   // snack 4
   $numeri_casuali=[];
   while(count($numeri_casuali) < 15){
       $controllo_numeri = rand(1, 100);
       if(!in_array($controllo_numeri , $numeri_casuali)){
           $numeri_casuali[] = $controllo_numeri;
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
<h2>snack 4</h2>
    <?php 
     foreach($numeri_casuali as $numero){
        echo $numero . "<br>";
     }
    ?>
</body>
</html>