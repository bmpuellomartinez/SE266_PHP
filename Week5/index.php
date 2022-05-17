<?php
        include __DIR__ . '/models/database.php';
        include __DIR__ . '/models/models_Patient.php';
        include __DIR__ . '/functions.php';
      
        if(isPostRequest()){
            $id = filter_input(INPUT_POST, 'patientID');
            echo "Trying to delete" . $id;
            deletePatient($id);

        }
        $patients = getPatients();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient</title>

<!-- Berta M. Puello-Martinez -->
<!--Instructor: Timothy Henry, PhD, PMP -->
<!--Course: PHP -->
<!--Date: 5/2/2022 -->
<!-- Absorbed from -->
</head>
<body>

<h1>Patient</h1>
<a href="addPatient.php">Add Patient</a>
<table >
            <thead>
                <tr>
                    <th> </th>
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
                    <td><form action='index.php' method='post'>
                        <input type='hidden' name='patientID' value=<?php echo $row['id'] ?>>
                        <button type='submit'>Delete</button>
                    </form></td>
                    <td><?php echo $row['id'];?> </td>
                    <td><?php echo $row['FirstName'];?> </td>
                    <td><?php echo $row['LastName'];?> </td>
                    <td><?php echo $row['Married'];?> </td>
                    <td><?php echo $row['DateOfBirth'];?> </td>
                    <td> <a href="editPatient.php?id=<?=$row['id']?>&action=update">Edit</a> </td>             
                </tr>
            <?php endforeach; ?>
            </tbody>
</table>
   
</body>
</html>