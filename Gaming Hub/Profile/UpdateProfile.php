<?php
session_start();
if ($_POST) {
    if (isset($_POST['savechanges']) && $_POST['savechanges'] == "savechanges") {
        //Connect to database
        include_once '../Database/Config.php';
        $firstname = $_POST['FName'];
        $lastname = $_POST['LName'];
        $age = $_POST['BDMY'];
        $phonenum = $_POST['phone'];
        $mail = $_POST['email'];
        $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $ID = $_SESSION["ID"];
        $OrgPassword = $_SESSION["Password"];
        //Sending data to the database
        //Create SQL Query
        //Changing user's info
        if (strlen($newpassword) > 5) {
            $sql = "UPDATE users SET Fname= '$firstname' , Lname = '$lastname' , Age = '$age' , Phone_Num = '$phonenum' , Email = '$mail' , Password = '$newpassword' WHERE ID= '$ID' and Password = '$OrgPassword' and Password = '$password'";
        } else {
            $sql = "UPDATE users SET Fname= '$firstname' , Lname = '$lastname' , Age = '$age' , Phone_Num = '$phonenum' , Email = '$mail' WHERE ID= '$ID' and Password = '$OrgPassword' and Password = '$password'";
        }
        echo $sql;
        echo '<br>';
        if ($password != $OrgPassword) {
            header("location:AccountSettings.php?error=Password is incorrect");
        } else {
            $_SESSION["FName"] = $firstname;
            $_SESSION["LName"] = $lastname;
            $_SESSION["Age"] = $age;
            $_SESSION["Phone_Num"] = $phonenum;
            $_SESSION["Email"] = $mail;
            if (strlen($newpassword) > 5) {
                $_SESSION["Password"] = $newpassword;
            } else {
                $_SESSION["Password"] = $password;
            }
            if ($conn->query($sql) === TRUE) {
                //Return Database Result
                echo "New record created successfully";
                header("location:AccountSettings.php");
            }
        }
    }
}
?>