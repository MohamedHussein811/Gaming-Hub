<!DOCTYPE html>

<head>
  <?php
  session_start();
  if (!isset($_SESSION["Email"])) {
    header("location:../Sign in/Sign in.php");
  } else {
    include("../Basics/loggedin.php");
    include("../Basics/Profile.php");
  }
  ?>
  <link rel="stylesheet" href="Shop.css?ver=22">
  <style>
    body {
      background-color: rgb(245, 245, 245);
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div style="display:<?php if (isset($_SESSION['showAlert'])) {
          echo $_SESSION['showAlert'];
        } else {
          echo 'none';
        }
        unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>
            <?php if (isset($_SESSION['message'])) {
              echo $_SESSION['message'];
            }
            unset($_SESSION['showAlert']); ?>
          </strong>
        </div>
        <!-- Cart Table -->
        <div class="TableCart">
          <table class="TableHead">
            <thead>
              <h1 style="text-align:center">SHOPPING CART</h1>
              <tr>
                <th>IMAGE</th>
                <th>NAME</th>
                <th>PRICE PER ONE</th>
                <th>QUANTITY</th>
                <th>TOTAL</th>
                <th class="ClearCart">
                  <a href="action.php?clear=all" onclick="return confirm('Are you sure want to clear your cart?');"><i
                      class="fas fa-trash"></i>&nbsp;&nbsp;Clear Cart</a>
                </th>
              </tr>
            </thead>

            <tbody class="TableBody">
              <?php
              require '../Database/Config.php';
              $stmt = $conn->prepare("SELECT * FROM cart where Email='" . $_SESSION["Email"] . "' ");
              $stmt->execute();
              $result = $stmt->get_result();
              $grand_total = 0;
              while ($row = $result->fetch_assoc()):

                ?>
                <tr>

                  <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                  <td><img src="<?= $row['product_image'] ?>" width="50"></td>
                  <td class="PName">
                    <?= $row['product_name'] ?>
                  </td>
                  <td></td>

                  <td class="TPrice">
                    &nbsp;&nbsp;
                    <?= number_format($row['product_price'], 2); ?>
                  </td>

                  <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                  <td class="TQty">
                    <input type="number" min="1" max="<?php $row['product_price'] ?>" class="pqty"
                      value="<?= $row['qty'] ?>" style="width:75px;">
                  </td>
                  <td class="TTot">&nbsp;&nbsp;
                    <?= number_format($row['total_price'], 2); ?> LE
                  </td>
                  <td class="PRmv">
                    <a href="action.php?remove=<?= $row['id'] ?>" class="text-danger lead"
                      onclick="return confirm('Are you sure want to remove this item?');"><i style="color:black"
                        class="fas fa-trash-alt"></i></a>
                  </td>
                </tr>

                <?php $grand_total += $row['total_price']; ?>
              <?php endwhile; ?>
              <tr>
                <td><b>Total: &nbsp;&nbsp;
                    <?= number_format($grand_total, 2); ?> LE
                  </b></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- Choose payment method -->
  <form action="checkout.php?<?php echo ($grand_total); ?>" method="post">
    <div class="Payment">
      <input class="COD" value="First" name="payment" type="radio" checked>
      <label class="PH1" for="COD">Cash On Delivery</label>
      <input class="COD" value="Second" name="payment" type="radio">
      <label class="PH2" for="PVISA">Debit/Credit Card</label>
      <button class="checkoutbtn" value="Result" name="Result" type="submit"
        class="<?=($grand_total > 1) ? '' : 'disabled'; ?>"><i
          class="far fa-credit-card"></i>&nbsp;&nbsp;Checkout</button>
    </div>
  </form>
  <!-- Continue Shopping -->
  <div class="ContShop">
    <a href="Shop.php"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Continue Shopping</a>
  </div>
  <script type="text/javascript">
    $(document).ready(function () {

      // Change the item quantity
      $(".pqty").on('change', function () {
        var $el = $(this).closest('tr');
        var pid = $el.find(".pid").val();
        var pprice = $el.find(".pprice").val();
        var qty = $el.find(".pqty").val();
        location.reload(true);
        $.ajax({
          url: 'action.php',
          method: 'post',
          cache: false,
          data: {
            qty: qty,
            pid: pid,
            pprice: pprice
          },
          success: function (response) {
            console.log(response);
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