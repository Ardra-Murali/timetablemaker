<!DOCTYPE html>
<html>

<head>
    
        <title>TIMETABLE MAKER</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="box">
        <h1>Admin Form</h1>
        <?php
        if(isset($_GET['error'])){
        echo "<p style='color:red'>".$_GET['error']."</p>";
        }
        ?>
        <form action="admininsert.php" method="POST">
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
                    <td>Gender :</td>
                    <td>
                        <input type="radio" name="gender" value="m" required />Male
                        <input type="radio" name="gender" value="f" required />Female
                    </td>
                </tr>
                <tr>
                    <td>Email :</td>
                    <td><input type="email" name="email" required /></td>
                </tr>
                <tr>
                    <td>Phone no :</td>
                    <td>
                        <input type="phone" name="phone" required />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <!--            <td><input type="text" name="adminid" required /></td>-->
                </tr>
                <tr><td></td>
                    <td><input type="submit" value="Submit" /></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>