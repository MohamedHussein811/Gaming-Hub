<?php

session_start();
//Connect to the Database
require '../Database/Config.php';
//Checking if the number of bought products = 0
if (isset($_POST['Result'])) {
  $radioVal = $_POST["payment"];

  if (isset($_GET['0'])) {
    header("location:cart.php");

  } else {
    if ($radioVal == "First") {
      $_SESSION['pmode'] = "Cash of Delivery";
    } else if ($radioVal == "Second") {
      $_SESSION['pmode'] = "Debit/Credit Card";
      header("location:VISA.php");
    }
  }
}
//Checking if the user is logged in or not  
if (!isset($_SESSION["Email"])) {
  header("location:../../Sign in/Sign in.php");
} else {
  include("../Basics/loggedin.php");
  include("../Basics/Profile.php");
}
//Getting bought products information
$email = $_SESSION["Email"];
$grand_total = 0;
$allItems = '';
$items = [];
$sql = "SELECT CONCAT(product_name, '(',qty,')') AS ItemQty, total_price FROM cart where Email='" . $email . "' ";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
  $grand_total += $row['total_price'];
  $items[] = $row['ItemQty'];
}
$allItems = implode(', ', $items);
?>
<!DOCTYPE html>

<head>
  <link rel="stylesheet" href="Shop.css">
</head>

<body>
  <!-- User's info -->
  <form action="" method="post" id="placeOrder">
    <input type="hidden" name="products" value="<?= $allItems; ?>">
    <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
    <div class="UserInfo">
      <h1>CHECKOUT</h1>
      <input type="text" name="name" class="UserInputs" placeholder="Enter your name"
        value="<?php echo $_SESSION["FName"]; ?>" required readonly>
      <input type="email" name="email" class="UserInputs" placeholder="Enter E-Mail"
        value="<?php echo $_SESSION["Email"]; ?>" required readonly>
      <input type="tel" name="phone" class="UserInputs" placeholder="Enter Phone"
        value="<?php echo $_SESSION["Phone_Num"]; ?>" required readonly>
      <textarea style="resize: none; height:200px;" rows="200" cols="50" name="address" class="UserInputs"
        placeholder="Enter Delivery Address Here..." required></textarea>
      <input style="background-color:#05a1a8" type="submit" name="submit" value="Place Order" class="PlaceOrderbtn">
    </div>
  </form>
  <!-- Bought products -->
  <div class="MyProducts" id="order">
    <h1>Order Summary!</h1>
    <h2>Product(s):<br>
      <?= $allItems; ?>
    </h2>
    <p>Delivery Charge: Free</p>
    <h1>Total:
      <?= number_format($grand_total, 2) ?> LE
    </h1>
    <p>Need Help? <a style="color:aqua; text-decoration: none;" href="../Home/Home.php #mail">Contact us</a></p>
  </div>

  <script type="text/javascript">
    $(document).ready(function () {

      // Sending User's info to the server
      $("#placeOrder").submit(function (e) {
        e.preventDefault();
        $.ajax({
          url: 'action.php',
          method: 'post',
          data: $('form').serialize() + "&action=order",
          success: function (response) {
            $("#order").html(response);
          }
        });
      });

      // Load total no.of items added in the cart and display in the navbar
      load_cart_item_number();

      function load_cart_item_number() {
        $.ajax({
          url: 'action.php',
          method: 'get',
          data: {
            cartItem: "cart_item"
          },
          success: function (response) {
            $("#cart-item").html(response);
          }
        });
      }
    });
  </script>
</body>

<footer>
  <?php
  include("../Basics/Footer.php");
  ?>
</footer>

</html>