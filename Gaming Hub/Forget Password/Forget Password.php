<!DOCTYPE html>

<head>
  <?php
  session_start();
  include("../Basics/Header.php");
  //Connect to the Database
  include_once '../Database/Config.php';
  ?>
  <!--Our CSS files/URLs-->
  <link rel="stylesheet" href="Forget Password.css">
</head>

<body>
  <!--Forget password content-->
  <div id="forgetpassword">
    <div id="FPcontent">
      <h2 id="FPE">Reset your password</h2>
      <form action="Reset Password.php" method="post" id="FPform">
        <?php if (isset($_GET['error'])) { ?>
          <p class="error">
            <?php echo $_GET['error']; ?>
          </p>
        <?php } ?>
        <p>We'll email you instructions to reset the password.</p>
        <span id="check-email"></span>
        <h3 style="text-align:left; padding:50px;">Email</h3>
        <input type="email" name="FPemail" id="FPemail" placeholder="forexample@gmail.com" onclick="CheckEmail()"
          oninput="CheckEmail()"><br><br><br><br><br>
        <button id="login" name="change-password">Reset Password</button>
        <a id="RTL" href="../Sign in/Sign in.php">Return to sign in</a>
    </div>
    </form>
  </div>
  <script>
    //Check if the posted Email is available or not for resetting.
    $('#login').prop('disabled', true);
    function CheckEmail() {
      jQuery.ajax({
        url: "check.php",
        data: 'email=' + $("#FPemail").val(),
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