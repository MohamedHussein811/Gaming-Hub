<?php
//Connect to the Database
include_once '../Database/Config.php';
//Check if the posted Email is available or not for Signing UP.
if (!empty($_POST["email"])) {
  $query = "SELECT * FROM users WHERE Email='" . $_POST["email"] . "'";
  $result = mysqli_query($conn, $query);
  $count = mysqli_num_rows($result);
  if ($count > 0) {
    echo "<span style='color:red'> Sorry Email already exists .</span>";
    echo "<script>$('#SIGNUP').prop('disabled',true);</script>";
  } else {
    echo "<span style='color:green'> Email available for Registration .</span>";
    echo "<script>$('#SIGNUP').prop('disabled',false);</script>";
  }
}
?>