<?php
require_once "connector.php";
$name;
$sql = "SELECT $name FROM Motors where RobotID = '1' ";
$result = mysqli_query($dbc,$sql);

while($row = $result->fetch_assoc()) {
    if ($result->num_rows >0) {
        $Value = $row["$name"];

        // Output a row
        echo 'value="'.$Value.'"';
    } else {
        echo "0";
    }
}

?>