<?php 

$tanks = [
    "Job Title:" => "Cleaning the dishes",
    "Assigned to" => "Daughter"
    "Due date:" => "Today",
    "How many Dishes?" => 30,
    "Completed" => "Yes"
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>w1 Mini Task2</title>
 <!-- This is the css for the unoder list -->
    <style>
        li{
            background: #e3e3e3;
            padding: 1em;
            
        }
    </style>
</head>
<body>

    <?php 
    foreach($tanks as $tank){

        echo "<li>$tank</li>";
    }
    ?>

</body>
</html>