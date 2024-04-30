<?php
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
</body>
</html>