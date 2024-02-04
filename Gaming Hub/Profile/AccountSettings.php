<?php
session_start();
if (!isset($_SESSION["Email"])) {
  header("location:../Sign in/Sign in.php");
} else {
  include("../Basics/loggedin.php");
  include("../Basics/Profile.php");
}
include_once '../Database/Config.php';
?>
<!DOCTYPE html>

<head>
  <!--Our CSS files/URLs-->
  <link rel="stylesheet" href="Profile.css">

  <!--Our JS files/URLs-->
  <script src="Profile.js?version=3"></script>
</head>

<body>
  <!-- Links in user's profile -->
  <div class="Links">
    <h1>Quick Links</h1>
    <hr>
    <a href="../Sign in/AccountSettings.php"><i class="fa fa-info-circle" style="font-size:20px"></i> Account
      Settings</a>
    <a href="../Shop/cart.php"><i class="fa fa-shopping-cart" style="font-size:20px"></i> My Orders</a>
    <a href="../Sign in/Logout.php"><i class="fa fa-sign-out" style="font-size:20px"></i> Log Out</a>
  </div>
  <!-- User's profile -->
  <div class="MyProfile">
    <h1>My Profile</h1>
    <hr>
    <form action="UpdateProfile.php" method="post">
      <?php if (isset($_GET['error'])) { ?>
        <p class="error">
          <?php echo $_GET['error']; ?>
        </p>
      <?php } ?>
      <p class="FNamePH">First Name</p>
      <input type="text" name="FName" id="FName" placeholder="" onkeyup="ValidationAppearance()"
        value="<?php echo $_SESSION["FName"]; ?>">
      <p class="LNamePH">Last Name</p>
      <input type="name" name="LName" id="LName" placeholder="" onkeyup="ValidationAppearance()"
        value="<?php echo $_SESSION["LName"]; ?>">
      <i class="fa-solid fa-circle"
        style="font-size:7px; position: relative; right:15px; top:32px; color: #05a1a8;"></i>
      <p id="F_LNameREQ">First name & last name shouldn't contain numbers</p>
      <p class="BDMYPH">Age</p>
      <input type="number" name="BDMY" id="BDMY" min="16" max="99" onkeyup="ValidationAppearance()"
        value="<?php echo $_SESSION["Age"]; ?>">
      <i class="fa-solid fa-circle"
        style="font-size:7px; position: relative; right:15px; top:32px; color: #05a1a8;"></i>
      <p id="AgeREQ">You must be 16 years or older</p>
      <p class="PhoneNUMPH">Phone Number</p>
      <input id="phone" type="tel" name="phone" minlength="11" maxlength="11"
        value="<?php echo $_SESSION["Phone_Num"]; ?>" />
      <p class="EmailPH">Email</p>
      <input type="email" name="email" id="email" placeholder="forexample@gmail.com" pattern=".+@gmail\.com"
        oninput="CheckEmail()" value="<?php echo $_SESSION["Email"]; ?>"><br><br>
      <span id="check-email"></span>
      <p class="PasswordPH">Password</p>
      <input type="password" name="password" id="password" onkeyup="ValidationAppearance()" required>
      <p class="PasswordCONFIRMPH">New Password (optional)</p>
      <input type="password" class="input" name="newpassword" id="newpassword">
      <button type="submit" name="savechanges" value="savechanges" class="savechanges"
        onclick="UpdateValidations()">Save Changes</button>
  </div>
  </form>
  <script>
    //Checking if the email is available or not for the change.
    function CheckEmail() {
      jQuery.ajax({
        url: "updatecheck.php",
        data: 'email=' + $("#email").val(),
        type: "POST",

        success: function (data) {
          $("#check-email").html(data);
        },
        error: function () { }
      });
    }
  </script>
</body>

<footer>
  <?php
  include("../Basics/Footer.php");
  ?>
</footer>