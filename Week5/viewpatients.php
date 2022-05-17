<?php
    include __DIR__ . '/models/models_Patient.php';
    include __DIR__ . '/functions.php';
    include __DIR__ . '/databse.php';


    if(isset($_POST)){
        $id = filter_input(INPUT_POST, 'patientid');
        deletePatient($id);
    }
    $patiens = getPatients();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patients View</title>
</head>
<body>
<div style="text-align:right;">
    <a href="viewPatients.php">View all Patients</a>
</div>
<div style="margin-left:50px;">
    <h2> Patient Information</h2>
</div>
<table >
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Married</th>
                <th>DOB</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        
        
        <?php foreach ($patients as $row): ?>
            <tr>
                <td>
                    <from action='viewpatients.php' method='post'>
                        <input type='hidden' name='patientid' value=<?php echo $row['id'] ?>>
                        <button type='submit'>Delete</a></P>
                    </form>

                </td>
                <td><?php echo $row['FirstName']; ?></td>
                <td><?php echo $row['LastName']; ?></td>
                <td><?php echo $row['Married']; ?></td>
                <td><?php echo $row['DateOfBirth']; ?></td>
                <td> <a href="addPatient.php?id=<?=$row['id']?>&action=update">Edit</a></td>             
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
    </div>
  </form>
  
  <div class="col-sm-offset-2 col-sm-10"><a href="./index.php">View Patients</a></div>
</div>


    
</body>
</html>