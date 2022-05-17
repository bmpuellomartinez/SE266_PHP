<?php

    include (__DIR__ . '/database.php');
    
    
    function getPatients () {
        global $db;
        
        $results = [];

        $stmt = $db->prepare("SELECT * FROM patients ORDER BY LastName"); 
        
        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);       
        }
        return ($results);
    }

    function getPatient ($id) {
        global $db;
        $results = [];

        $stmt = $db->prepare("SELECT * FROM patients WHERE id = :id"); 
        $stmt->bindValue(':id', $id);

        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
            $results = $stmt->fetch(PDO::FETCH_ASSOC);       
        }
        return($results);
    }
    
    function addPatient ($FirstName, $LastName, $Married, $DateOfBirth) {
        global $db;
        $results = "Not added";

        $stmt = $db->prepare("INSERT INTO patients SET FirstName = :FirstName, LastName = :LastName,
        Married = :Married, DateOfBirth = :DateOfBirth");

        $binds = array(
            ":FirstName" => $FirstName,
            ":LastName" => $LastName,
            ":Married" => $Married,
            ":DateOfBirth" => $DateOfBirth,
        );
        
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = 'Data Added';
        }
        
        return ($results);
    }

    function updatePatient($id, $FirstName, $LastName, $Married, $DateOfBirth){
        global $db;
        $results = "Not updated";

        $stmt = $db->prepare("UPDATE patients SET FirstName = :FirstName, LastName = :LastName,
        Married = :Married, DateOfBirth = :DateOfBirth WHERE id = :id");

        $binds = array(
            
            ":id" => $id,
            ":FirstName" => $FirstName,
            ":LastName" => $LastName,
            ":Married" => $Married,
            ":DateOfBirth" => $DateOfBirth
        );
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = 'Data Updated';
        }
        

        return ($results);
    }

    function deletePatient($id){
        global $db;
        $results = "not deleted";
        echo "Got to delete!";

        $stmt = $db->prepare("DELETE FROM patients WHERE id = :id");

        $stmt->bindValue(':id', $id);

        if($stmt->execute() && $stmt->rowCount() > 0){
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
        }

        return ($results);
    }
   
   
    
    //   $result = addTeam2 ('Ajax', 'Eredivisie');
    //   echo $result;
    
    

?>