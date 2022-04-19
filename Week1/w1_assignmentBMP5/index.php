<?php

// Creating a Fizzbuzz Function

/* Return Fizz Buzz if multiple of 2 and 3 (6)
   Return Fizz if multiple of 2
   Return Buzz if multiple of 3
   Return $num otherwise
*/

function fizzBuzz($num) 
{
    for($i = 1; $i <= $num; $i++){
        if($i%2 == 0 && $i%3 == 0){ //Echo the multiple of 2 and 3
            echo "FizzBuzz"."<br>" ;

        }
        else if($i%2 == 0){    //Echo if the multiple of 2
            echo "Fizz" . "<br>";

        }
        else if($i%3 == 0){
            echo "Buzz" . "<br>";
        }
        else{
            echo $i; // else echo the number
        }

    }
    return $num;  //Returning back to Numbers
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz</title>
<!-- Berta M. Puello-Martinez -->
<!--Instructor: Timothy Henry, PhD, PMP -->
<!--Course: PHP -->
<!--Date: 4/19/2022 -->
<!-- Absorbed from https://www.w3resource.com/php-exercises/php-for-loop-exercise-11.php -->
</head>
<body>
    <!-- Header of the Page -->
    <h1>SE 266 - FizzBuzz</h1>
    <!-- PHP Starts here -->
    <?php 
        //Here we are calling the fizzBuzz function so the values are displaying
        fizzBuzz(100);
        
    ?>
</body>
</html>