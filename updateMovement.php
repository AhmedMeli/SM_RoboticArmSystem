  
<?php
require 'connector.php';
    if (isset($_POST["direction"])) {
        $direction = $_POST['direction'];
        $query = "UPDATE Direction SET Direction='$direction' WHERE RobotID = 1;";
        mysqli_query($dbc, $query);
    };

?>