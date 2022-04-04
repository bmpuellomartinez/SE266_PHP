<?php

//This is the array for the aninal. I created 5 animal.
$animals = [ 
    'Elephant', 'Lion' , 'Leopard', 'Snake', 'Wolf', 'Monkey'
];

?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>w1 Mini Task</title>

    <!--Berta M. Puello-Martinez -->
    <!--Instructor: Timothy Henry, PhD, PMP -->
    <!--Course: PHP -->
    <!--This Program will display five animals names. The code was 
    absorbed from https://laracasts.com/series/php-for-beginners/episodes/6 -->

    <style>
        ul{
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
<!--This is the list of the array that goes through the foreach loop -->
    <ul>
        <?php 
        foreach($animals as $animal){
            echo "<li>$animal</li>";
        }
        ?>
   
    </ul>  
    <!--This is the end of the code -->
</body> 
</html>