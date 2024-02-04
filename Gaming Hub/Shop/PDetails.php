<!DOCTYPE html>

<head>
  <?php
  session_start();
  if (!isset($_SESSION["Email"])) {
    include("../Basics/Header.php");
  } else {
    include("../Basics/loggedin.php");
    include("../Basics/Profile.php");
  }
  include '../Database/Config.php';


  $getQuery = "SELECT *FROM product where id='$_GET[pid]'";
  $result = mysqli_query($conn, $getQuery);
  $row = $result->fetch_assoc()
    ?>
  <link rel="stylesheet" href="Shop.css">
</head>

<body>

  <div class="productDetails">
    <img src="<?php echo $row['product_image'] ?>" height="300" width="300">
    <h3>Author:</h3>
    <p>
      <?= $row['author_name'] ?>
    </p>
    <h3>Email:</h3>
    <p>
      <?= $row['author_email'] ?>
    </p>
    <h3>Phone Number:</h3>
    <p>
      <?= $row['author_phone'] ?>
    </p>
    <h3>Name:</h3>
    <p>
      <?= $row['product_name'] ?>
    </p>
    <h3>Category:</h3>
    <p>
      <?= $row['product_category'] ?>
    </p>
    <h3>Description:</h3>
    <p>
      <?= $row['product_description'] ?>
    </p>
    <h3>Price:</h3>
    <p style="color:red;">
      <?= number_format($row['product_price'], 2) ?> LE
    </p>
  </div>
</body>
<footer>
  <?php
  include("../Basics/Footer.php");
  ?>
  <!--Our JS files/URLs-->
  <script src="Shop.js"></script>
</footer>

</html>