<?php

// Creatign a array with in the array
$task = [

    "tile:" => "Software Engineer",

    "due:" => "Today's afternoon",

    "assigned_to" => "Berta Puello",

    "complete" => false,

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

<body>

    <!-- This is the Header for the main page -->
    <h1>Tanks Week 1 Booleans and Conditionals</h1>

    <!-- The foreach loop works only on arrays, and is used to loop through each key/value pair in an array -->
    <!-- Booleans and conditionals -->
    <ul>
        <li>

            <strong>job: </strong> <? = $task['title']; ?>

        </li>

        <li>

            <strong>due: </strong> <? = $task['due']; ?>
            
        </li>

        <li>

            <strong>Assigned to: </strong> <? = $task['assigned_to']; ?>
            
        </li>
        
        <li>

            <strong>date: </strong> <? = $task['due']; ?>
            
        </li>

        <li>

            <strong>completed: </strong> <? = $task['complete'] ? 'complete' : 'Incomplere';  ?>
            
        </li>
    </ul>
    

</body>
</html>