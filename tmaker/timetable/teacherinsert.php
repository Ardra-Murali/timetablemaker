<?php
include 'config.php';

$name = $_POST['name'];
$passwordd = $_POST['password'];





echo " $name $passwordd $gender $email $phone ";

$sql = "INSERT INTO `teacher`(`name`, `password`) VALUES ('$name','$passwordd')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: success.php');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header('Location: teacherreg.php?error=username already exists');

}

$conn->close();

?>