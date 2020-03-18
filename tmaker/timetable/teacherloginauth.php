<?php
$userid = $_POST['userid'];
$passwordi = $_POST['password'];

include 'config.php';

$query = "SELECT * FROM `teacher` WHERE name = '$userid'";


$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);

$passcode = $row['password'];

if ($passcode == $passwordi){
    session_start();
    $_SESSION['name'] = $userid;
    header('Location: loggedteacher.php');
}
else{
    header('Location: teacherlogin.php?error=incorrect');
}

$conn->close();
?>