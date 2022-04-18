<?php

// Creatign a array with a boolean value and condition
$task = [

    "title:" => "Software Engineer",

    "due:" => "Today's afternoon",

    "assigned_to" => "Berta Puello",

    "complete" => true,

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wk1: Mini-Task E: Booleans and Conditionals</title>
</head>
<body>
    
<!-- Berta M. Puello-Martinez -->
<!--Instructor: Timothy Henry, PhD, PMP -->
<!--Course: PHP -->
<!--Date: 4/11/2022 -->
<!-- Absorbed from https://laracasts.com/series/php-for-beginners/episodes/8 -->
<!-- & https://laracasts.com/series/php-for-beginners/episodes/9 -->

<body>

    <!-- This is the Header for the main page -->
    <h1>Tanks Week 1 Booleans and Conditionals</h1>

    <!-- The foreach loop works only on arrays, and is used to loop through each key/value pair in an array -->
    <!-- Booleans and conditionals -->


    <!-- Creating a list with the associate arrays that will only display the value not the key's names. This another way of having more control of the -->
    <!-- Creating list tag for each array values so they display based on their value and creating a new hearder inside of a strong <tag> -->
    <ul>
        <!-- This is for the array that has the key value "title" and the header is the Job -->
        <li>

            <strong>Job: </strong> <?= $task['title:']; ?>

        </li>

        <!-- This is for the array that has the key value of "due" and the new header Due.-->
        <li>

            <strong>Due: </strong> <?= $task['due:']; ?>
            
        </li>

        <!-- This is for the array's key value of "assigned_to" and the new header Assigned -->
        <li>

            <strong>Assigned to: </strong> <?= $task['assigned_to']; ?>
            
        </li>

        <!-- Here I created an boolean that will check for the false value -->
        <!-- Checking the value of the boolean (completed) based on the value "true" statement! -->
        <li>

            <strong>Completed: </strong> 

            <!-- if the value of completed is iqual to true the checkbox will show, if it's not then the x box will show.-->
            <?php if ($task['complete']) : ?>

                <spam class="check">&#9989;</spam>

            <?php else : ?>

                <spam class="nottrue">&#10062;</spam>
            <?php endif; ?>


            
        </li>

    </ul>

</body>
</html>