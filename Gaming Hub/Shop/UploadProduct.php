<?php
//Connect to the Database
require '../Database/Config.php';

if ($_POST) {
    $Pname = $_POST['Pname'];
    $AEmail = $_POST['AEmail'];
    $APhone = $_POST['APhone'];
    $Pprice = $_POST['Pprice'];
    $Pcode = $_POST['Pcode'];
    $Platform = $_POST['platform'];
    $Pdescription = $_POST['Pdescription'];
    $imgErr = "";
    $codeErr = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $tmpFile = $_FILES['img']['tmp_name'];
        $Pimg = '../Images/Shop/' . $_FILES['img']['name'];
        if (file_exists($Pimg)) {
            $imgErr = "Please Change image name and Try again.";
            include_once 'newproduct.php';
            die();
        } else {
            $result = move_uploaded_file($tmpFile, $Pimg);
        }
    }
    $checkcode = "SELECT product_code from product where product_code = $Pcode";
    $checkcoderesult = mysqli_query($conn, $checkcode);
    $count = mysqli_num_rows($checkcoderesult);
    if ($count > 0) {
        $codeErr = "Code does exist, Please enter another code.";
        include_once 'newproduct.php';
        die();
    }
    $sql = "INSERT INTO product (product_name,product_price,product_image,product_code,product_category,product_description, author_email, author_phone)
VALUES ('" . $Pname . "' , '" . $Pprice . "','" . $Pimg . "','" . $Pcode . "','" . $Platform . "','" . $Pdescription . "', '" . $AEmail . "', '" . $APhone . "')";
}
if ($conn->query($sql) === TRUE) {
    //Return Database Result
    echo "Your Product has been uploaded successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
include_once 'newproduct.php';
?>