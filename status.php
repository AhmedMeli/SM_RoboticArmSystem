<?php
require "connector.php";
if (isset($_POST['power'])) {
    $query = "UPDATE motors SET status = 0 WHERE RobotID = 1";
    if ($_POST['power'] == "ON") {
        $query = "UPDATE motors SET status = 1 WHERE RobotID = 1";
    }
    if (mysqli_query($dbc, $query)) {
        echo "Power is ".$_POST['power'];
    } else {
        echo "Error: " . mysqli_error($dbc);
    }

    mysqli_close($dbc);
};
?>