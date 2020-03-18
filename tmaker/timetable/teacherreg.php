<!DOCTYPE html>
<html>

<head>

    <title>TIMETABLE MAKER</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="box">
        <h1>Teacher Form</h1>
        <?php
        if(isset($_GET['error'])){
        echo "<p style='color:red'>".$_GET['error']."</p>";
        }
        ?>
        <form action="teacherinsert.php" method="POST">
            <table>
                <tr>
                    <td>Name :</td>
                    <td><input type="text" name="name" required /></td>
                </tr>
                <tr>
                    <td>Password :</td>
                    <td><input type="password" name="password" required /></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" value="Submit" /></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>