<?php
require("connect_db.php");
$id = $_GET["id"];

$sql = "SELECT ID, Name, Age, Gender, Maried_status FROM survey where ID=$id";
$result = $conn->query($sql);

if($result->num_rows > 0){
    $row = $result->fetch_assoc();
?>
<form action = "save_edit_people.php" method="post">
    Name: <input type="text" name="Name" value="<?php echo $row["Name"];?>"><br>
    Age: <input type="text" name="Age" value="<?php echo $row["Age"];?>"><br>
    Gender: <select name="Gender">
    <option value="M" <?php if($row["Gender"]=="M") echo "selected";?>>Male</option>
        <option value="F" <?php if($row["Gender"]=="F") echo "selected";?>>Female</option>
    </select><br>
    Marry Status: <select name="Maried_status">
        <option value="S" <?php if($row["Maried_status"]=="S") echo "selected";?>>Single</option>
        <option value="M" <?php if($row["Maried_status"]=="M") echo "selected";?>>Married</option>
    </select><br>
    <input type="submit" value="Send">
</form>
<?php
}
?>