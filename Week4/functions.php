<?php

/**
 * A method to check if a Post request has been made.
 *    
 * @return boolean
 */
function isPostRequest() {
    return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );

    // if(isPostRequest($_POST['action'])) {
    //     $action = filter_input(INPUT_POST, 'action');
        
    //     $id = filter_input(INPUT_POST, 'id');
    //     $FirstName = filter_input(INPUT_POST, 'firstName');
    //     $LastName = filter_input(INPUT_POST, 'lastName');
    //     $dob = filter_input(INPUT_POST, 'dob');
    //     $married = filter_input(INPUT_POST, 'married');
    
    //     if(isPostRequest() && $action == "add"){
    //         $results = addPatient($FirstName, $LastName, $Married, $DateOfBirth);
    //         header('Location: viewpatients.php');
    //     }
    //     else if(isPostRequest() && $sction == "update") {
    //         $results = updatePatient($id, $FirstName, $LastName, $Married, $DateOfBirth);
    //     }
    //     else{
    //         header('Location: viewpatients.php');
    //     }
        
    // }
    
} 
function isGetRequest() {
    return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'GET' && !empty($_GET));

    // if(isset($_GET['action'])) 

    // $action = filter_input(INPUT_GET, 'action');
    // $id = filter_input(INPUT_GET, 'id');
    

    // if($action == 'update'){
    //     $row = getPatient($id);

    //     $id = $row['id'];
    //     $FirstName = $row['FirstName'];
    //     $LastName = $row['LastName'];
    //     $married = $row['Married'];
    //     $dob = $row['DateOfBirth'];
        
    // }
    // else {
    
    //     $FirstName = "";
    //     $LastName = "";
    //     $married = "";
    //     $dob = "";
    // }    
        
}

?>