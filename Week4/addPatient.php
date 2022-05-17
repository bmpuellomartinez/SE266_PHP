<?php
  include __DIR__ . '/models/database.php';
  include __DIR__ . '/models/models_Patient.php';
  include __DIR__ . '/functions.php';
  
  $action = "";
  $id = "";
  $FirstName = "";
  $LastName = "";
  $Married = "";
  $dob = "";

  
  if (isPostRequest()) {
    echo "Patient added";
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Married = $_POST['Status'];
    $DateOfBirth = $_POST['DateOfBirth'];

    addPatient($FirstName, $LastName, $Married, $DateOfBirth);
  }
    
?>
    

<html lang="en">
<head>
  <title>Add Patient</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
   
    
<div class="container">
    
  <h2>Add Patient</h2>

  <form class="form-horizontal" action="addPatient.php" method="post">
    <!-- <input type="text" name="action" value="<?=$action;?>"/>
    <input type="text" name="id" value="<?=$id;?>"/> -->
    
  

    
    <div class="form-group">
      <label class="control-label col-sm-2" for="">Patient's First Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="FirstName" name="FirstName" value="<?=$FirstName;?>"/>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2">Patient's Last Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="LastName" name="LastName" value="<?=$LastName;?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2">Patient's Marriage Status:</label>
      <div class="col-sm-10">          
      <input type="radio" name="Status" value="Single"><label>Single</label>
      <input type="radio" name="Status" value="Married"><label>Married</label>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2">Patient's Date of Birth:</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="DateOfBirth" name="DateOfBirth" value="<?=$dob;?>">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Add Patient</button>
      </div>
  </div>
  </form>
  
  <div class="col-sm-offset-2 col-sm-10"><a href="./index.php">View Patients</a></div>
</div>

</body>
</html>