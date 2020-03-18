<?php
$userid = $_POST['userid'];
$passwordi = $_POST['password'];

include 'config.php';

$query = "SELECT * FROM `admindata` WHERE name = '$userid'";


$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);

$passcode = $row['password'];

if ($passcode == $passwordi){
    session_start();
    $_SESSION['name'] = $userid;
    header('Location: logged_admin.php');
}
else{
    header('Location: adminlogin.php?error=incorrect');
}

$conn->close();
