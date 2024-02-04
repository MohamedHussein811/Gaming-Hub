<?php

if (isset($_POST['change-password'])) {
    //Checks if the email exists
    include_once '../Database/Config.php';
    session_start();
    $_SESSION['Memail'] = $_POST['FPemail'];
    $FPemail = $_POST['FPemail'];
    $check_email = "SELECT * FROM users WHERE Email='$FPemail'";
    $run_sql = mysqli_query($conn, $check_email);
    if (mysqli_num_rows($run_sql) > 0) {
        header("location: ../New Password/newpassword.php");
    }
}
if (!isset($_SESSION["Memail"])) {
    header("location:Forget Password.php?error=Please enter your E-mail address.");
    exit();
}
?>