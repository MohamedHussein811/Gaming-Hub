<!DOCTYPE html>

<head>
  <?php
  session_start();
  include("../Basics/Header.php");
  include("../Database/Config.php");
  if (isset($_SESSION["Email"])) {
    echo "<script> location.href='../Home/Home.php' </script>";
  }
  if (isset($_POST['subemail'])) {
    $subemail = $_POST['subemail'];
    // SQL Statement
    $sql = "SELECT * FROM users WHERE email='" . $subemail . "'";

    // Process the query
    $results = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($results);

    // Fetch Associative array
    $row = $results->fetch_assoc();

    // Check if there is a result and response to  1 if email is existing
    if ($count > 0) {
      $_SESSION['subemailerr'] = "Email Already exists";
      echo "<script> location.href='../Home/Home.php' </script>";
    } else {
      $_SESSION['subemailerr'] = "";
    }
  } else {
    $subemail = "";
  }
  ?>
  <!--Our CSS files/URLs-->
  <link rel="stylesheet" href="Sign up.css">
</head>

<body>
  <div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
    <div class="shape"></div>
  </div>
  <div id="Sign_up">
    <div id="Sign_up_content">
      <h1>Sign up</h1>
      <form action="Register.php" method="post">
        <!--User Already have an account -->
        <p id="AHAA">Already have an account? <a href="..\Sign in\Sign in.php" style=color:#05a1a8;><b>Sign in</b></a>
        </p>

        <p id="FNamePH">First Name</p>
        <input type="text" name="FName" id="FName" placeholder="" onkeyup="ValidationAppearance()">
        <p id="LNamePH">Last Name</p>
        <input type="name" name="LName" id="LName" placeholder="" onkeyup="ValidationAppearance()">
        <i class="fa-solid fa-circle "
          style="font-size:7px; position: relative; right:325px; top:120px; color: #05a1a8;"></i>
        <p id="F_LNameREQ">First name & last name shouldn't contain numbers</p>
        <p id="MalePH">Male</p>
        <p id="FemalePH">Female</p>
        <input id="male" type="radio" value="Male" name="gender">
        <input id="female" type="radio" value="Female" name="gender">
        <p id="BDMYPH">Age</p>
        <input type="number" name="BDMY" id="BDMY" onkeyup="ValidationAppearance()">
        <i class="fa-solid fa-circle"
          style="font-size:7px; position: relative; right:325px; top:48px; color: #05a1a8;"></i>
        <p id="AgeREQ">You must be 16 years or older</p>
        <p id="PhoneNUMPH">Phone Number</p>
        <input id="phone" type="tel" name="phone" minlength="11" maxlength="11" />
        <p id="EmailPH">Email</p>
        <input type="email" name="email" id="email" placeholder="forexample@gmail.com" pattern=".+@gmail\.com"
          value="<?php echo $subemail; ?>" oninput="CheckEmail()"><br><br>
        <span id="check-email"></span>
        <p id="PasswordPH">Password</p>
        <p id="PasswordCONFIRMPH">Confirm your Password</p>
        <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br>

        <div id="requirements">
          <i class="fa-solid fa-circle"
            style="font-size:7px; position: relative; right:60px; bottom:80px; color: #05a1a8;"></i>
          <p id="OneNumValid" style="position:relative; bottom:101px;">     At least one number</p>
          <i class="fa-solid fa-circle"
            style="font-size:7px; position: relative; right:60px; bottom:80px; color: #05a1a8;"></i>
          <p id="CharNumValid" style="position:relative; bottom:101px;">         8 characters minimum</p>
          <i class="fa-solid fa-circle"
            style="font-size:7px; position: relative; right:60px; bottom:80px; color: #05a1a8;"></i>
          <p id="LowercaseValid" style="position:relative; bottom:101px;">                         At least one
            lowercase character</p>
          <i class="fa-solid fa-circle"
            style="font-size:7px; position: relative; right:60px; bottom:80px; color: #05a1a8;"></i>
          <p id="SpecialCharValid" style="position:relative; bottom:101px;">                      At least one Special
            character</p>
          <input type="password" name="password" id="password" onkeyup="ValidationAppearance()">
          <input type="password" id="passwordCONFIRM">
        </div>
        <button type="submit" name="register" value="Register" id="SIGNUP" onclick="SignupValidations()">SIGN
          UP</button>
        <p id="PolicyNTerms">By clicking the "Sign up for free" button, you are creating an account, and agree to Gaming
          Hub <a href="..\Terms and Service\Terms and Service.php" style=color:#05a1a8;><b>Terms and Service</b></a> and
          <a href="..\Privacy Policy\Privacy Policy.php" style=color:#05a1a8;><b>Privacy Policy</b></a>
        </p>

      </form>
    </div>
  </div>
  <script>
    //Check if the posted Email is available or not for Signing UP.
    function CheckEmail() {
      jQuery.ajax({
        url: "check.php",
        data: 'email=' + $("#email").val(),
        type: "POST",
        success: function (data) {
          $("#check-email").html(data);
        },
        error: function () { }
      });
    }
  </script>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
<footer>
  <?php
  include("../Basics/Footer.php");
  ?>
  <!--Our JS files/URLs-->
  <script src="Sign up.js"></script>
</footer>