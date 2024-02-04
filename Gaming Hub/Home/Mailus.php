<?php
if (isset($_SESSION["Email"])) {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];

    $mailheader = "From:" . $name . "<" . $email . ">\r\n";

    $recipient = "mohamed.hussein811811@gmail.com";

    mail($recipient, $subject, $message, $mailheader) or die("Error!");
    echo "test";
} else {
    header("location:../Sign in/Sign in.php");
}
?>