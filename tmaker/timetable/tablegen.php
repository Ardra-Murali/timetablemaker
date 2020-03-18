<?php
include 'config.php';
$str="";
for ($i=1; $i < 31; $i++) { 
   $str=$str."`h".$i."` VARCHAR(250) NOT NULL ,";
}
$query="CREATE TABLE `timetablemaker`.`timetable` ( `tid` INT NOT NULL AUTO_INCREMENT , `deptname` VARCHAR(250) NOT NULL , `sem` INT NOT NULL , ".$str." PRIMARY KEY (`tid`)) ENGINE = MyISAM;";
$result=mysqli_query($conn,$query);

echo $str;


?>