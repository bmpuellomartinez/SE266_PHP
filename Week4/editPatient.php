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

  if(isGetRequest()){
    $id = filter_input(INPUT_GET, 'id');
    $row = getPatient($id);

    $id = $row['id'];
    $FirstName = $row['FirstName'];
    $LastName = $row['LastName'];
    $Married = $row['Married'];
    $dob = $row['DateOfBirth'];
     
  }
  
  if (isPostRequest()) {
    echo "Patient edited";
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Married = $_POST['Status'];
    $dob = $_POST['DateOfBirth'];


    updatePatient($id, $FirstName, $LastName, $Married, $dob);
  }
    
?>
    

<html lang="en">
<head>
  <title>Edit Patient</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
   
    
<div class="container">
    
  <h2>Edit Patient</h2>

  <form class="form-horizontal" action="editPatient.php" method="post">
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
        <input type="radio"  name="Status" value="0"><label>Single</label>
        <input type="radio"  name="Status" value="1"><label>Married</label>
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
        <button type="submit" class="btn btn-default">edit Patient</button>
      </div>
  </div>
  </form>
  
  <div class="col-sm-offset-2 col-sm-10"><a href="./index.php">View Patients</a></div>
</div>

</body>
</html>