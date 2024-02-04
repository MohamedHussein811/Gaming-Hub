<!DOCTYPE html>

<head>
    <?php
    session_start();
    include("../Basics/Header.php");
    //Connect to the Database
    include_once '../Database/Config.php';
    ?>
    <!--Our CSS files/URLs-->
    <link rel="stylesheet" href="newpassword.css">
</head>

<body>
    <!-- New password -->
    <div id="forgetpassword">
        <div id="FPcontent">
            <h2 id="FPP">Enter new password</h2>
            <form action="changepassword.php" method="post" id="FPform">
                <input type="password" name="newpassword" id="newpassword" placeholder=""
                    onkeyup="ValidationAppearance()"><br><br><br><br><br>
                <div id="requirements">
                    <i class="fa-solid fa-circle"
                        style="font-size:7px; position: relative; right:100px; bottom:27px; color: #05a1a8;"></i>
                    <p id="OneNumValid" style="position:relative; right:40px; bottom:60px;">     At least one number</p>
                    <i class="fa-solid fa-circle"
                        style="font-size:7px; position: relative; right:100px; bottom:27px; color: #05a1a8;"></i>
                    <p id="CharNumValid" style="position:relative; right:40px; bottom:60px;">         8 characters
                        minimum</p>
                    <i class="fa-solid fa-circle"
                        style="font-size:7px; position: relative; right:100px; bottom:27px; color: #05a1a8;"></i>
                    <p id="LowercaseValid" style="position:relative; right:40px; bottom:60px;">
                        At least one lowercase character</p>
                    <i class="fa-solid fa-circle"
                        style="font-size:7px; position: relative; right:100px; bottom:27px; color: #05a1a8;"></i>
                    <p id="SpecialCharValid" style="position:relative; right:40px; bottom:60px;">
                        At least one Special character</p>
                    <button name="new-password" onclick="Validations()">Change Password</button>
                </div>
            </form>
        </div>
        <script>
            var password = document.getElementById("newpassword");
            function ValidationAppearance() {
                //Password if Valid, True
                if (password.value.match(/[0-9]/)) {
                    $(document).ready(function () {
                        $("#OneNumValid").css('color', 'green');
                    });
                }
                else {
                    $(document).ready(function () {
                        $("#OneNumValid").css('color', 'red');
                    });
                }
                if (password.value.length > 8) {
                    $(document).ready(function () {
                        $("#CharNumValid").css('color', 'green');
                    });
                }
                else {
                    $(document).ready(function () {
                        $("#CharNumValid").css('color', 'red');
                    });
                }
                if (password.value.match(/[a-z]/)) {
                    $(document).ready(function () {
                        $("#LowercaseValid").css('color', 'green');
                    });
                }
                else {
                    $(document).ready(function () {
                        $("#LowercaseValid").css('color', 'red');
                    });
                }
                if (password.value.match(/[!@#$%^&*()]/)) {
                    $(document).ready(function () {
                        $("#SpecialCharValid").css('color', 'green');
                    });
                }
                else {
                    $(document).ready(function () {
                        $("#SpecialCharValid").css('color', 'red');
                    });
                }
            }
            function Validations() {
                //Password Validation
                if (password.value.length > 8) {
                    password.setCustomValidity('');
                }
                else {
                    password.setCustomValidity("Password Should have at least 8 characters , capital letters , small letters , digits and special characters.");
                }

                if (password.value.match(/[A-Z]/)) {
                    password.setCustomValidity('');
                }
                else {
                    password.setCustomValidity("Password Should have at least 8 characters , capital letters , small letters , digits and special characters.");
                }
                if (password.value.match(/[a-z]/)) {
                    password.setCustomValidity('');
                }
                else {
                    password.setCustomValidity("Password Should have at least 8 characters , capital letters , small letters , digits and special characters.");
                }
                if (password.value.match(/[0-9]/)) {
                    password.setCustomValidity('');
                }
                else {
                    password.setCustomValidity("Password Should have at least 8 characters , capital letters , small letters , digits and special characters.");
                }
                if (password.value.match(/[!@#$%^&*()]/)) {
                    password.setCustomValidity('');
                }
                else {
                    password.setCustomValidity("Password Should have at least 8 characters , capital letters , small letters , digits and special characters.");
                }
            }
        </script>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
<footer>
    <?php
    include("../Basics/Footer.php");
    ?>
</footer>