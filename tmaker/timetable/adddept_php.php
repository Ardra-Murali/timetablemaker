<?php
    include 'config.php';

    $deptname=$_POST['deptname'];
    $query="INSERT INTO `dept`(`deptname`) VALUES ('$deptname')";
    // $result=mysqli_query($conn,$query);
    // header('location:adddept.php');

    
if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
    header('location:adddept.php');

} else {
    echo "Error: " . $query . "<br>" . $conn->error;
    header('Location: adddept.php?error=dept already exists');

}



?>