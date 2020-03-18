<?php
include 'config.php';

$name = $_POST['name'];
$passwordd = $_POST['password'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];



echo " $name $passwordd $gender $email $phone ";

$sql = "INSERT INTO admindata (name, password, gender, email, phone)
VALUES ('$name', '$passwordd', '$gender', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: success.php');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header('Location: adminreg.php?error=username already exists');

}

$conn->close();

?>