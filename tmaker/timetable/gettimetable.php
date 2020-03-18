<!DOCTYPE html>
<html>

<?php
 include 'config.php';
session_start();
$name=$_SESSION['name'];
$querysemdept="SELECT `studentid`, `name`, `password`, `gender`, `email`, `phone`, `sem`, `dept` FROM `studentdata` WHERE `name`='$name'";
$resultsemdept=mysqli_query($conn,$querysemdept);
$rowsemdept=mysqli_fetch_array($resultsemdept);
$sem=$rowsemdept['sem'];
$dept=$rowsemdept['dept'];

?>

<head>

    <title>TIMETABLE MAKER</title>
    <link rel="stylesheet" href="style.css">
    <style>
        select {
            width: auto;
        }

       
    </style>
</head>

<body>
<a href="logout.php"><button class="logout">logout</button></a>
<?php
 include 'config.php';
session_start();
$sem=$rowsemdept['sem'];
$dept=$rowsemdept['dept'];

?>

$conn = mysqli_connect("localhost", "root", "", "timetablemaker");
$query = "SELECT * FROM `timetablemaker` WHERE `sem`='$sem' AND `deptname`= '$dept'";
                    $result = mysqli_query($conn, $query);
                    $count = mysqli_num_rows($result);

                <div class='box'>    echo '<tr><td></td>';
                if ($i = 1)  {
                SELECT subject FROM 'timetablemaker'WHERE 'h1'= 'h$i';
                if($i = 2){
                    "SELECT subject FROM 'timetablemaker' WHERE 'h2' = 'h$i';

                }

                    
                    echo '  </td>';
                }
                </div>
</body>
 </html>