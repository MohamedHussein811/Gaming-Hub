<?php
//Change user's password
if (isset($_POST['new-password'])) {
    session_start();
    include_once '../Database/Config.php';
    include_once '../Forget Password/Reset Password.php';
    $Femail = $_SESSION['Memail'];
    echo $_SESSION['Memail'];
    $Npass = $_POST['newpassword'];
    $update_pass = "UPDATE users SET Password='$Npass' WHERE Email='$Femail' ";
    $run_query = mysqli_query($conn, $update_pass);

    if ($run_query) {
        echo "Your password changed. Now you can login with your new password.";
        header('Location: ..\Sign in\Sign in.php');
    }
}
?>