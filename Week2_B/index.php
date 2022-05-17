<?php

$conditions = ["High Blood Pressure", "Diabetes", "Heart Condition"];

function bmi_calculations($ft, $inch, $weight) {

    // converting to the height
    $Height = ($ft * 12 + $inch) * 0.0254;
    // conveting to kilograms
    $kg = ($weight / 2.20462);
    // call that will find the bmi
    $bmi = ($kg / ($Height * $Height));
    
    return ($bmi);

}

//This function will make the classification among the patients and it will resturn to the output results
function bmi_Classification($bmi){

    if ($bmi <= 18.5) {

        $output = "UNDERWEIGHT";
    
    } else if ($bmi > 18.5 AND $bmi<= 24.9 ) {

        $output = "NORMAL WEIGHT";

    } else if ($bmi > 24.9 AND $bmi <= 29.9) {

        $output = "OVERWEIGHT";

    } else{
        $output = "OBESE";
    }  
    return $output; 

};

// This function will calculate the age of the person.
function age ($bdate) {
    $date = new DateTime($bdate);
    $now = new DateTime();
    $age = $now->diff($date);
    return $age->y;
}
 
// This funtion cals the day
function isDate($dt) {
    try {
        $d = new DateTime($dt);
        return (true);
    } catch(Exception $e) {
        return false;
    }
}

// Initialize the variables that are going to be use for the HTML fields and the errors
$error = "";
$first_name = "";
$last_name = "";
$married = "";
$birth_date = "";
$ft = "";
$inches = 0;
$age = "";
$bmi = "";
$weight = "";

//creating a glovel function for the buttom
if (isset($_POST['submitBtn'])) {

    //Inicializing the variables
    $first_name = filter_input(INPUT_POST, 'first_name');
    $last_name = filter_input(INPUT_POST, 'last_name');
    $birth_date = filter_input(INPUT_POST, 'birth_date');
    $married = filter_input(INPUT_POST, 'married');
    $ft = filter_input(INPUT_POST, 'ft', FILTER_VALIDATE_INT);
    $inches = filter_input(INPUT_POST, 'inches', FILTER_VALIDATE_INT);
    $weight = filter_input(INPUT_POST, 'weight', FILTER_VALIDATE_FLOAT);

    //Passing the error msg to the new variables of each fieds.
    if ($first_name == "") $error .= "<li>Please! Enter first name</li>";
    if ($last_name == "") $error .= "<li>Please! Enater last name</li>";
    if ($married == "") $error .= "<li>Please! Enter marital status</li>";
    if ($birth_date == "" || !isDate($birth_date)) $error .= "<li>Please! Enter a valid birth date</li>";
    if ($ft == "") $error .= "<li>Please! Eneter a valid numerical height</li>";
    if (!is_numeric($inches)) $error .= "<li>Please! Enter a valid number for inches</li>";
    
    if ($weight == "") $error .= "<li>Please! Enater a valid weight</li>";  
    if ($error == "") { //error mgs
        $bmi = bmi_calculations($ft, $inches, $weight);
    }
}
?>
    <?php 
        if (isset($_POST['submitBtn']) && $error == ""): //calling that goval function and checking for errors
    ?>
    <!-- Displaying the results -->
        <h2>Results</h2>
        <ul>

            <li>First Name: <?php echo "$first_name" ?></li>
            <li>Last Name: <?php echo "$last_name" ?></li>
            <li>Birth date: <?php echo "$birth_date" ?></li>
            <li>Age: <?php echo " " . age($birth_date); ?></li>
            <li>Height: <?= $ft ?>" <?= $inches ?>'</li>
            <li>Weight: <?= $weight ?> pounds</li>
            <li>BMI: <?= number_format($bmi, 1) ?> -- <?= bmi_Classification($bmi) ?> </li>
            
        </ul>
    <?php
            exit;
        endif;
    ?>

<!-- End of PHP -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthy Living clinic</title>
</head>
    <!--Berta M. Puello-Martinez -->
    <!--Instructor: Timothy Henry, PhD, PMP -->
    <!--Course: PHP -->
    <!--This Program will display five animals names. The code was 
    Absorbed from https://stackoverflow.com/questions/37195181/form-using-function-calculate-bmi-and-display-different-comment-fatal-error-and -->
<body>


   
    <h1>Patien Intake Form</h1>

    <form name= "patient" action="index.php" method="post">
    <!-- If there are no errors, continue... -->
        <?php
            if ($error != ""):
        ?>
        
        <!-- This is the div that would display any errors -->
        <div class="error" name="error"> 
            <p>ERRORS</p>
            <ul>
                <?php echo $error; ?>
            </ul>
        </div>
        <?php
            endif; //ending here
        ?>
<!-- This is were the HTML starts. Each fileds are created bellow. -->
        <div class="wrapper">

            <div class="label">
                <label><strong>First Name:</strong></label>
                
            </div>
            <div>
                <input type="text" name="first_name" value="">
            </div>
            <div class="label">
                <label><strong>Last Name:</strong></label>
            </div>
            <div>
                <input type="text" name="last_name" value="" >
            </div>

            <div class="label">
                <label><strong>Married:</strong></label>
            </div>

            <div>
                <input type="radio" name="married" value="yes"  <?= $married=="yes"?"checked":"" ?>>Yes

                    
                <input type="radio" name="married" value="no"  <?= $married=="no"?"checked":"" ?> />No
                
            </div>


            <div class="label">

                <label><strong>Birth Date:</strong></label>
            </div>
            <div>
                <input type="date" name="birth_date" value="<?= $birth_date ?>" />
                    
            </div>
            <div class="label">
                <label><strong>Height:</strong></label>
            </div>
            <div>

                Feet: <input type="text" name="ft" value="<?= $ft ?>" style="width:40px;">
                Inches: <input type="text" name="inches" value="<?= $inches ?>" style="width:40px;">   
                
            </div>
            <div class="label">
                <label>Weight (pounds):</label>
            </div>
            <div>
                <input type="text" name="weight" value="<?= $weight ?>" style="width:40px;">
                
            </div>
            
            <div>
                &nbsp;
            </div>
            <!-- This is the button -->
            <div>
                <input type="submit" name="submitBtn" value="Submit">
            </div>
                
        </div>
    </form>    
</body>
</html>