<?php 

//Creating the associate arrays and then displaying their values.
$tanks = [
    "Job Title:" => "Cleaning the dishes",
    "Assigned to:" => "Daughter",
    "Due date:" => "Today",
    "How many Dishes?" => 30,
    "Completed:" => "Yes",
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>w1 Mini Task2</title>
 <!-- This is the css for the unordered list -->
    <style>

        li{
            background: #e3e3e3;
            padding: 1em;
            
        }
    </style>

</head>
<!-- Berta M. Puello-Martinez -->
<!--Instructor: Timothy Henry, PhD, PMP -->
<!--Course: PHP -->
<!--Date: 4/11/2022 -->
<!-- Absorbed from https://laracasts.com/series/php-for-beginners/episodes/6 -->

<body>

    <!-- The foreach loop works only on arrays, and is used to loop through each key/value pair in an array -->
    <!-- This foreach loop will display the key name and its value -->
    <?php foreach ($tanks as $key => $tank) : ?> 
        
        <!-- Here we are displaying without echo. Another way of displaying value of associative arrays -->
        <li><strong><?= $key; ?></strong> <?= $tank; ?></li> 
    <?php endforeach; ?>
    <!-- Closing the foreach loop -->
</body>
</html>