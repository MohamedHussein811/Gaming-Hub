<!DOCTYPE html>

<head>
  <?php
  session_start();
  include("../Basics/Header.php");
  //Connect to the Database
  include_once '../Database/Config.php';
  ?>
  <!--Our CSS files/URLs-->
  <link rel="stylesheet" href="Sign in.css">
</head>

<body>
  <!-- Sign in -->
  <div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
  </div>
  <div id="Sign_in">
    <div id="Sign_in_content">
      <h1>Sign in</h1>
      <form action="login.php" method="post">
        <?php if (isset($_GET['error'])) { ?>
          <p class="error">
            <?php echo $_GET['error']; ?>
          </p>
        <?php } ?>

        <p id="EmailPH">Email</p>
        <!-- User isn't registered -->
        <p id="NAA">Need an account? <a href="..\Sign up\Sign up.php" style=color:#05a1a8;><b>Sign up</b></a></p>
        <input type="email" name="email" id="email" placeholder="" oninput="CheckEmail()"><br><br><br><br><br>
        <span id="check-email"></span>

        <p id="PasswordPH">Password</p>
        <input type="password" name="password" id="password" placeholder=""><br><br><br><br>
        <span id="check-password"></span>
        <input type="submit" name="login" id="login" value="LOGIN">
        <!-- User forgot their password -->
        <a href="..\Forget Password\Forget Password.php" id="ResetPassword">Forgot Password?</a>
      </form>
    </div>
  </div>
  <script>
    //Check if the posted Email is available or not for Signing in.
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
</body>
<footer>
  <?php
  include("../Basics/Footer.php");
  ?>
</footer>