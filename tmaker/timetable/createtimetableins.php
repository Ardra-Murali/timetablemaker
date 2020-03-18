<?php
    session_start();
    $sem=$_SESSION['sem'];
    $dept=$_SESSION['dept'];
    include 'config.php';
    $str="'$dept','$sem',";

for ($i = 1; $i < 31; $i++) {
    $h[$i] = $_POST['h' . $i];
    $str=$str."'".$h[$i]."'";
    if($i<31){
        $str=$str.",";

    }
}
for ($i = 1; $i < 31; $i++) {
    $ht[$i] = $_POST['h' . $i.'t'];
    $str=$str."'".$ht[$i]."'";
    if($i<30){
        $str=$str.",";

    }
}

$query="INSERT INTO `timetable`(`deptname`, `sem`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`, `h7`, `h8`, `h9`, `h10`, `h11`, `h12`, `h13`, `h14`, `h15`, `h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`, `h24`, `h25`, `h26`, `h27`, `h28`, `h29`, `h30`, `h1t`, `h2t`, `h3t`, `h4t`, `h5t`, `h6t`, `h7t`, `h8t`, `h9t`, `h10t`, `h11t`, `h12t`, `h13t`, `h14t`, `h15t`, `h16t`, `h17t`, `h18t`, `h19t`, `h20t`, `h21t`, `h22t`, `h23t`, `h24t`, `h25t`, `h26t`, `h27t`, `h28t`, `h29t`, `h30t`) VALUES ($str)";

if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
    header('Location: createtimetablecompleted.php');

} else {
    echo "Error: " . $query . "<br>" . $conn->error;
    header('Location: createtimetable.php?error=timetable already exists/teacher not available');

}
?>
