<?php
require_once('connector.php');

if (isset($_POST['submit'])) {
$motor1= $_POST['motor1'];
$motor2= $_POST['motor2'];
$motor3= $_POST['motor3'];
$motor4= $_POST['motor4'];
$motor5= $_POST['motor5'];
$motor6= $_POST['motor6'];

$sql = "UPDATE motors SET motor1=$motor1, motor2=$motor2, motor3=$motor3, motor4=$motor4, motor5=$motor5, motor6=$motor6 WHERE RobotID = 1";

$result = mysqli_query($dbc, $sql);
if($result){
  header("Location: HomePage.php");
  exit();
}
}
?>

