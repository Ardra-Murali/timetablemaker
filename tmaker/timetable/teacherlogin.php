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
    <div class="box">
        <h1>LOGIN</h1>
        <?php
        if(isset($_GET['error'])){
        echo "<p style='color:red'>".$_GET['error']."</p>";
        }
        ?>
        <form action="teacherloginauth.php" method="POST">
            <table>
                <tr>
                    <td>Userid :</td>
                    <td><input type="text" name="userid" required /></td>
                </tr>

                <tr>
                    <td>Password :</td>
                    <td><input type="password" name="password" required /></td>
                </tr>
                <tr><td></td>
                    <td><input type="submit" value="Submit" /></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>