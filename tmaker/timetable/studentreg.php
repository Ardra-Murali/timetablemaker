<!DOCTYPE html>
<html>

<head>

    <title>TIMETABLE MAKER</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="box">
        <h1>Student Form</h1>
        <?php
        if(isset($_GET['error'])){
        echo "<p style='color:red'>".$_GET['error']."</p>";
        }
        ?>
        <form action="studentinsert.php" method="POST">
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
                    <td>sem</td>

                    <td> <select name="sem">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>dept</td>

                    <td> <select name="dept">
                        <?php
                        include 'config.php';
                        $query="SELECT * FROM `dept` WHERE 1";
                        $result=mysqli_query($conn,$query);
                        $count=mysqli_num_rows($result);
                        
                        for ($i=0; $i < $count; $i++) { 
                            $row=mysqli_fetch_array($result);
                            echo '<option value="'.$row['deptname'].'">'.$row['deptname'].'</option>';
                        }
                        ?>
                        </select></td>
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