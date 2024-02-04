<!DOCTYPE html>
<html>

<head>
  <?php
  //Connect to the Database
  require '../Database/Config.php';
  session_start();
  include("../Basics/loggedin.php");
  include("../Basics/Profile.php");
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
  <!--Our CS files/URLS -->
  <link rel="stylesheet" href="../Shop.css">

  <style>
    .row {
      display: -ms-flexbox;
      /* IE10 */
      display: flex;
      -ms-flex-wrap: wrap;
      /* IE10 */
      flex-wrap: wrap;
      margin: 0 -16px;
      box-sizing: border-box;
    }

    .col-25 {
      -ms-flex: 25%;
      /* IE10 */
      flex: 25%;
      box-sizing: border-box;
    }

    .col-25 .container {
      background-color: #f2f2f2;
    }

    .col-50 {
      -ms-flex: 50%;
      /* IE10 */
      flex: 50%;
      box-sizing: border-box;
    }

    .col-75 {
      -ms-flex: 75%;
      /* IE10 */
      flex: 75%;
      box-sizing: border-box;
    }

    .col-25,
    .col-50,
    .col-75 {
      padding: 0 16px;
      box-sizing: border-box;
    }

    .container {
      padding: 5px 20px 15px 20px;
      box-sizing: border-box;
      border-radius: 10px;
    }

    input[type=text] {
      width: 100%;
      margin-bottom: 20px;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 3px;
      box-sizing: border-box;
    }

    label {
      margin-bottom: 10px;
      display: block;
      box-sizing: border-box;
    }

    .icon-container {
      margin-bottom: 20px;
      padding: 7px 0;
      font-size: 24px;
      box-sizing: border-box;
    }

    .btn {
      background-color: #04AA6D;
      color: white;
      padding: 12px;
      margin: 10px 0;
      border: none;
      width: 100%;
      border-radius: 3px;
      cursor: pointer;
      font-size: 17px;
      box-sizing: border-box;
    }

    .btn:hover {
      background-color: #45a049;
    }

    a {
      color: #2196F3;
    }

    hr {
      border: 1px solid lightgrey;
      box-sizing: border-box;
    }

    span.price {
      float: right;
      color: grey;
    }

    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
    @media (max-width: 800px) {
      .row {
        flex-direction: column-reverse;
      }

      .col-25 {
        margin-bottom: 20px;
      }
    }
  </style>
</head>

<body>
  <h1>Enter your payment details</h1>
  <div class="row">
    <div class="col-75">
      <div class="container" style="background-color: #f2f2f2;">
        <form action="/action_page.php">

          <div class="row">
            <div class="col-50">
              <h3>Billing Address</h3>
              <label for="fname"><i class="fa fa-user"></i> Full Name</label>
              <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="text" id="email" name="email" placeholder="john@example.com">
              <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
              <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
              <label for="city"><i class="fa fa-institution"></i> City</label>
              <input type="text" id="city" name="city" placeholder="New York">

              <div class="row">
                <div class="col-50">
                  <label for="state">State</label>
                  <input type="text" id="state" name="state" placeholder="NY">
                </div>
                <div class="col-50">
                  <label for="zip">Zip</label>
                  <input type="text" id="zip" name="zip" placeholder="10001">
                </div>
              </div>
            </div>

            <div class="col-50">
              <h3>Payment</h3>
              <label for="fname">Accepted Cards</label>
              <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
              </div>
              <label for="cname">Name on Card</label>
              <input type="text" id="cname" name="cardname" placeholder="John More Doe">
              <label for="ccnum">Credit card number</label>
              <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
              <label for="expmonth">Exp Month</label>
              <input type="text" id="expmonth" name="expmonth" placeholder="September">
              <div class="row">
                <div class="col-50">
                  <label for="expyear">Exp Year</label>
                  <input type="text" id="expyear" name="expyear" placeholder="2018">
                </div>
                <div class="col-50">
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" name="cvv" placeholder="352">
                </div>
              </div>
            </div>

          </div>
          <label>
            <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
          </label>
          <input type="submit" value="Continue to checkout" class="btn">
        </form>
      </div>
    </div>
    <!-- Bought products -->
    <div class="col-25">
      <div class="container">
        <h1>Order Summary!</h1>
        <h2>Product(s):<br>
          <?= $allItems; ?>
        </h2>
        <p>Delivery Charge: Free</p>
        <h1>Total:
          <?= number_format($grand_total, 2) ?> LE
        </h1>
        <p>Need Help? <a style="color:blue; text-decoration: none;" href="../Contact us/Contact us.php">Contact us</a>
        </p>
      </div>
    </div>
  </div>
  <br>
</body>

<footer>
  <?php
  include("../Basics/Footer.php");
  ?>
</footer>

</html>