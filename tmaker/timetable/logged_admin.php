<?php
        session_start();
        if(!isset($_SESSION['name'])){
            header('location:index.php');
        }
        
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TIMETABLE MAKER</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<a href="logout.php"><button class="logout">logout</button></a>
    <div class="box">
        <h1>welcome <?php
        
        echo $_SESSION['name'] ;?></h1>
        <div class="box">
       <a href="createtimetable.php"><button>Create New Timetable</button></a>
        <br>
        <br>

        <a href="viewtimetable.php"><button>View Timetable</button></a>
        <br>
        <br>
        <!-- <a href="updatetable.php"><button>Update Timetable</button></a>
        <br>
        <br> -->
        <a href="addsubject.php"><button>Add Subject</button></a>
        <br>
        <br>
         <a href="adddept.php"><button>Add Dept</button></a>
        <br>
        <br>
       </div>
        
    </div>
</body>

</html>