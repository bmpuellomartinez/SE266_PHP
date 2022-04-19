<?php

function dd($data){
    echo '<pre>';

    die(var_dump($data));

    echo '</pre>';
}

$animals = [
    "Dog", "Cat", "Butterfly",
];

dd($animals);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini_Task F: Function</title>
</head>
<body>

<!-- Berta M. Puello-Martinez -->
<!--Instructor: Timothy Henry, PhD, PMP -->
<!--Course: PHP -->
<!--Date: 4/19/2022 -->
<!-- Absorbed from https://laracasts.com/series/php-for-beginners/episodes/10 -->
    
    <!-- This is the Header for the main page -->
    <h1>Tanks Week1 DD function</h1>

<!-- 1-dd stands for "Dump and Die.
2- dd() function can be defined as a helper function, in which is used to.
3-dump a variable´s contents to the browser and prevent the further script.
4-execution.
5-Example: dd($array); -->
    <ul>
        <?php 
        foreach($animals as $animal){
            echo "<li>$animal</li>";
        }
        ?>

    </ul> 

    
</body>
</html>