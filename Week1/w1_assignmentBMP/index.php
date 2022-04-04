<?php

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

    <style>
        ul{
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <ul>
        <?php 
        foreach($animals as $animal){
            echo "<li>$animal</li>";
        }
        ?>
   
    </ul>  
</body>
</html>