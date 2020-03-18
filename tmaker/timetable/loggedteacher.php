<!DOCTYPE html>
<html>

<?php
 include 'config.php';
session_start();
$name=$_SESSION['name'];
$querysemdept="SELECT * FROM `teacher` WHERE `name`='$name'";
$resultsemdept=mysqli_query($conn,$querysemdept);
$rowsemdept=mysqli_fetch_array($resultsemdept);
// $sem=$rowsemdept['sem'];
// $dept=$rowsemdept['dept'];

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

    <div class="box">
        <h1>View Timetable</h1>
        <?php
        if (isset($_GET['error'])) {
            echo "<p style='color:red'>" . $_GET['error'] . "</p>";
        }
        ?>
            <table id="customers">
                <?php
               
                echo '<tr><td></td>';
                for ($i = 1; $i < 7; $i++) {
                    echo ' <td>' . $i . '</td>';
                }
                echo ' </tr><tr><td>monday</td>';

                for ($i = 1; $i < 31; $i++) {
                    // if ($i % 6 == 1 && $i / 6 == 0) {

                    // }


                    echo ' <td>';

                    $query = "SELECT * FROM `timetable` WHERE `h" . $i ."t`='$name'";
                    // echo "<br>".$query."<br>";
                    $result = mysqli_query($conn, $query);
                    $count = mysqli_num_rows($result);

                    // for ($j = 0; $j < $count; $j++) {
                        $row = mysqli_fetch_array($result);
                        echo  $row['deptname']." ".$row['sem'];
                    // }
                    echo '  </td>';

                    if ($i % 6 == 0 && $i / 6 == 1) {
                        echo '</tr>
                           <tr>
                           <td>tuesday</td>';
                    }
                    if ($i % 6 == 0 && $i / 6 == 2) {
                        echo '</tr>
                        <tr>
                        <td>wednesday</td>';
                    }
                    if ($i % 6 == 0 && $i / 6 == 3) {
                        echo '</tr>
                        <tr>
                        <td>thursday</td>';
                    }
                    if ($i % 6 == 0 && $i / 6 == 4) {
                        echo '</tr>
                        <tr>
                        <td>friday</td>';
                    }
                }

                ?>

                </tr>

            </table>
           

    </div>
</body>

</html>