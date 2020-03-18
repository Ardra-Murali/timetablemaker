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
        <h1>Time Table Maker</h1>
        <div>
            <label for="">Admin</label>
            <a href="adminlogin.php"><button>Login</button></a>
            <a href="adminreg.php"><button>Registration</button></a>
        </div>
        <div>
            <label for="">Teacher</label>
            <a href="teacherlogin.php"><button>Login</button></a>
            <a href="teacherreg.php"><button>Registration</button></a>
        </div>
        <div>
            <label for="">Student</label>
            <a href="studentlogin.php"><button>Login</button></a>
            <a href="studentreg.php"><button>Registration</button></a>
        </div>
    </div>


    <style>
        .box{
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            position: absolute;
            margin: 0;
        }

        .box>div{
            margin: 20px;
        }

        label{
            color: white;
            font-weight:700;
            margin-right: 20px;
        }
    
    </style>
    
</body>
</html>