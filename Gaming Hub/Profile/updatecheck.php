<?php
# create database connection
include_once '../Database/Config.php';
//Check if the posted Email is available or not for resetting.
if (!empty($_POST["email"])) {
  $query = "SELECT * FROM users WHERE Email='" . $_POST["email"] . "'";
  $result = mysqli_query($conn, $query);
  $count = mysqli_num_rows($result);
  if ($count > 0) {
    echo "<span style='color:red'>Email does exist</span>";
  } else {
    echo "<span style='color:green'> Email doesn't exist.</span>";
  }
}
?>