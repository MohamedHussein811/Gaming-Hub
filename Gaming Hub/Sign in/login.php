<?php
session_start();

if ($_POST) {
    if (isset($_POST['login']) && $_POST['login'] == "LOGIN") {

        // Getting data from the inputs
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Connect to the Database
        include_once '../Database/Config.php';
        // Sending data to database
        $sql = mysqli_query($conn, "select * from users where Email='" . $email . "' and Password='" . $password . "'");
        $row = mysqli_fetch_array($sql);

        $userinfo = mysqli_query($conn, "select ID,Fname, Lname, Age, Phone_Num from users where Email='" . $email . "' and Password='" . $password . "'");
        $rname = mysqli_fetch_array($userinfo);


        $phone = mysqli_query($conn, "select Phone_Num from users where Email='" . $email . "' and Password='" . $password . "'");
        $rphone = mysqli_fetch_array($phone);

        //Sending user data to the server to be used in the future.
        if (is_array($row)) {
            $_SESSION["ID"] = $rname['ID'];
            $_SESSION["FName"] = $rname['Fname'];
            $_SESSION["LName"] = $rname['Lname'];
            $_SESSION["Age"] = $rname['Age'];
            $_SESSION["Phone_Num"] = $rname['Phone_Num'];
            $_SESSION["Email"] = $row['Email'];
            $_SESSION["Password"] = $row['Password'];
        } else {
            //User's password is incorrect
            echo '<script type ="text/javascript">';
            echo 'alert("invalid user or pass")';
            echo 'window.location.href = "Sign in.php?error=Password is incorrect';
            echo '</script>';
        }
        // Execute query
        // $res = $conn->query($sql);
    }
}
//User's Email & Password are correct or not
if (isset($_SESSION["Email"])) {
    header("location:../Home/Home.php");
} else {
    header("location:Sign in.php?error=Password is incorrect");
    exit();
}
?>