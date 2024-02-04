<?php
session_start();
if ($_POST) {
  //The user pressed the Sign up button
  if (isset($_POST['register']) && $_POST['register'] == "Register") {
    //Connect to the Database
    include_once '../Database/Config.php';
    //Copying user's inputs
    $firstname = $_POST['FName'];
    $lastname = $_POST['LName'];
    $age = $_POST['BDMY'];
    $phonenum = $_POST['phone'];
    $mail = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $_SESSION['Age'] = $_POST['BDMY'];
    //Sending data to the database
    //Create SQL Query
    //Inserting user's input into the Database
    $sql = "INSERT INTO users (Fname, Lname, Gender, Age, Phone_Num, Email, Password)"
      . " VALUES ('" . $firstname . "' , '" . $lastname . "','" . $gender . "','" . $age . "','" . $phonenum . "','" . $mail . "','" . $password . "')";
    echo $sql;
    echo '<br>';
    //Execute Query
    if ($conn->query($sql) === TRUE) {
      //Return Database Result
      echo "New record created successfully";
      header("location:../Sign in/Sign in.php");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
}
?>