<?php
include 'config.php';

$name = $_POST['name'];
$passwordd = $_POST['password'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$sem = $_POST['sem'];
$dept = $_POST['dept'];





echo " $name $passwordd $gender $email $phone ";

$sql = "INSERT INTO studentdata (`name`, `password`, `gender`, `email`, `phone`, `sem`, `dept`)
VALUES ('$name', '$passwordd', '$gender', '$email', '$phone','$sem','$dept')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: success.php');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header('Location: studentreg.php?error=username already exists');

}

$conn->close();

?>