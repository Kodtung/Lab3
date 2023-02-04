<?php
require("connect_db.php");

$id=$_POST["ID"];
$name=$_POST["Name"];
$age=$_POST["Age"];
$gender=$_POST["Gender"];
$marry_status=$_POST["Maried_status"];

echo "id:$id<br>";
echo "name:$name<br>";
echo "age:$age<br>";
echo "gender:$gender<br>";
echo "marry_status:$marry_status<br>";

?>