<?php
require("connect_db.php");
$id = $_GET["id"];

$sql = "SELECT ID, Name, Age, Gender, Maried_status FROM survey";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["ID"] . " Name: " . $row["Name"]. " " . " Age: ". $row["Age"] . "<br>";
    if($row["Gender"]=="M"){
        if($row["Age"]<15){
                echo "ดช.", $row["Name"] . "<br>";
        }
        else{
                echo "นาย.", $row["Name"] . "<br>";
        }
    }
  }
} else {
  echo "0 results";
}
$conn->close();
?>

