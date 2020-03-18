<?php
include 'config.php';

$sname = $_POST['sname'];
$sem = $_POST['sem'];
$dept = $_POST['dept'];



$sql = "INSERT INTO `subjects`(`sname`, `sem`, `deptname`) VALUES ('$sname','$sem','$dept')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: addsubject.php');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header('Location: addsubject.php?error=subject already exists');

}

$conn->close();

?>