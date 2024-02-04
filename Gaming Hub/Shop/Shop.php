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
  ?>
  <link rel="stylesheet" href="Shop.css">
</head>

<body>
  <!-- Cart -->
  <a href="cart.php"><i class="fa fa-shopping-cart"></i><span id="cart-item"></span></a>
  <!--Search Engine-->
  <div id="wrapper">
    <div id="search_box">
      <form method="post" action="">
        <input type="text" id="search_term" name="search_term" placeholder="Enter Search" onkeyup="do_search();">
        <input class="fa-solid fa-magnifying-glass" type="submit" name="search">

      </form>
    </div>
  </div>

  <!-- Drop down menu for sorting items -->
  <form action="" method="GET">
    <div class="SortSelectordiv">
      <select name="SortEngine" class="SortSelector">
        <option class="SortOption" value="">Sort By Default</option>
        <option class="SortOption" value="a-z" <?php if (isset($_GET['SortEngine']) && $_GET['SortEngine'] == "a-z") {
          echo "selected";
        } ?>>Sort to A-Z</option>
        <option class="SortOption" value="z-a" <?php if (isset($_GET['SortEngine']) && $_GET['SortEngine'] == "z-a") {
          echo "selected";
        } ?>>Price Z-A</option>
        <option class="SortOption" value="h-l" <?php if (isset($_GET['SortEngine']) && $_GET['SortEngine'] == "h-l") {
          echo "selected";
        } ?>>Price High to Low</option>
        <option class="SortOption" value="l-h" <?php if (isset($_GET['SortEngine']) && $_GET['SortEngine'] == "l-h") {
          echo "selected";
        } ?>>Price Low to High</option>
      </select>
      <br>
      <select name="Platforms" class="SortSelector">
        <option class="SortOption" value="">Choose Platform</option>
        <option class="SortOption" value="ps5" <?php if (isset($_GET['Platforms']) && $_GET['Platforms'] == "ps5") {
          echo "selected";
        } ?>>Play Station 5</option>
        <option class="SortOption" value="ps4" <?php if (isset($_GET['Platforms']) && $_GET['Platforms'] == "ps4") {
          echo "selected";
        } ?>>Play Station 4</option>
        <option class="SortOption" value="xbox" <?php if (isset($_GET['Platforms']) && $_GET['Platforms'] == "xbox") {
          echo "selected";
        } ?>>XBox</option>
        <option class="SortOption" value="nintendo" <?php if (isset($_GET['Platforms']) && $_GET['Platforms'] == "nintendo") {
          echo "selected";
        } ?>>Nintendo</option>
      </select>
      <input type="submit">

    </div>
  </form>
  <a href="newproduct.php" class="UploadProduct">Upload your product</a>
  <!-- Displaying Products Start -->
  <div class="ShopContent">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
      <?php
      include '../Database/Config.php';
      // Store number of rows per page
      $limit = 20;
      // Query to retrieve all rows from the table
      $getQuery = "select * from product";
      // Get the result
      $result = mysqli_query($conn, $getQuery);
      $total_rows = mysqli_num_rows($result);
      // Get the required number of pages
      $total_pages = ceil($total_rows / $limit);
      // Update the active page number
      if (!isset($_GET['page'])) {

        $page_number = 1;

      } else {

        $page_number = $_GET['page'];

      }
      // Get the initial page number
      $initial_page = ($page_number - 1) * $limit;
      // Get data of selected rows per page 
      if (isset($_POST['search'])) {
        $search_val = $_POST['search_term'];
      } else {
        $search_val = "";
      }
      $sort_option = "";
      $platform = "";
      $SortFlag = 0;
      $getQuery = "SELECT *FROM product where product_name like '%$search_val%' LIMIT " . $initial_page . ',' . $limit;
      $result = mysqli_query($conn, $getQuery);
      if (isset($_GET['SortEngine'])) {
        if ($_GET['SortEngine'] == 'a-z') {
          $SortFlag = 1;
          $sort_option = "ASC";
        } else if ($_GET['SortEngine'] == 'z-a') {
          $SortFlag = 1;
          $sort_option = "DESC";
        }
        $getQuery = "SELECT *FROM product where product_name like '%$search_val%' ORDER BY product_name $sort_option LIMIT " . $initial_page . ',' . $limit;
        $result = mysqli_query($conn, $getQuery);
      }
      if (isset($_GET['SortEngine']) && $SortFlag == 0) {
        if ($_GET['SortEngine'] == 'l-h') {
          $sort_option = "ASC";
        } else if ($_GET['SortEngine'] == 'h-l') {
          $sort_option = "DESC";
        }
        $getQuery = "SELECT *FROM product where product_name like '%$search_val%' ORDER BY product_price $sort_option LIMIT " . $initial_page . ',' . $limit;
        $result = mysqli_query($conn, $getQuery);
      }
      // Platforms
      if (isset($_GET['Platforms'])) {
        if ($_GET['Platforms'] == 'ps5') {
          $platform = "Play Station 5";
        }
        if ($_GET['Platforms'] == 'ps4') {
          $platform = "Play Station 4";
        }
        if ($_GET['Platforms'] == 'xbox') {
          $platform = "XBox";
        }
        if ($_GET['Platforms'] == 'nintendo') {
          $platform = "Nintendo";
        }
        if ($SortFlag == 0) {
          $getQuery = "SELECT *FROM product where product_category like '%$platform%' ORDER BY product_price $sort_option LIMIT " . $initial_page . ',' . $limit;
          $result = mysqli_query($conn, $getQuery);
        } else if ($SortFlag == 1) {
          $getQuery = "SELECT *FROM product where product_category like '%$platform%' ORDER BY product_name $sort_option LIMIT " . $initial_page . ',' . $limit;
          $result = mysqli_query($conn, $getQuery);
        }
      }

      // Display the retrieved result on the webpage   
      while ($row = $result->fetch_assoc()):
        ?>

        <!-- Displaying All products -->
        <div class="ShopContent">
          <div class="ShopContent">
            <div class="ShopColumns">
              <a href="PDetails.php?pid=<?php echo $row['id'] ?>"> <img src="<?= $row['product_image'] ?>" class="images"
                  height="250"></a>
              <div class="ShopContent">
                <h3 style="color:white; font-family: 'Rajdhani', sans-serif;">
                  <?= $row['product_name'] ?>
                </h3>
                <p style="color:gray" ;>
                  <?= $row['product_category'] ?>
                </p>
                <p style="color:gray" ;>Author:
                  <?= $row['author_name'] ?>
                </p>
                <p style="color:gray" ;>E-mail:
                  <?= $row['author_email'] ?>
                </p>
                <p style="color:gray" ;>Phone Number:
                  <?= $row['author_phone'] ?>
                </p>
                <p style="color:gray" ;>Only
                  <?= $row['product_qty'] ?> left in stoke.
                </p>


                <h3 style="color:red; font-family: 'Rajdhani', sans-serif;">&nbsp;&nbsp;
                  <?= number_format($row['product_price'], 2) ?> LE</h5>
              </div>
              <div class="ShopContent">
                <form action="" class="form-submit">
                  <div class="row p-2">


                  </div>
                  <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                  <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                  <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                  <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                  <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                  <button class="addtocart addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</button>
                </form>
              </div>
            </div>
          </div>

        </div>

      <?php endwhile; ?>
    </div>

  </div>
  <!-- Page numbers with link -->
  <?php
  echo '<div class="PageContainer">';
  for ($page_number = 1; $page_number <= $total_pages; $page_number++) {

    echo '<a class="Pages" href = "Shop.php?page=' . $page_number . '">' . $page_number . ' </a>';
  }
  echo '</div>';

  ?>
  <!-- Displaying Products End -->

  <script type="text/javascript">
    $(document).ready(function () {

      // Send product details in the server
      $(".addItemBtn").click(function (e) {
        e.preventDefault();
        var $form = $(this).closest(".form-submit");
        var pid = $form.find(".pid").val();
        var pname = $form.find(".pname").val();
        var pprice = $form.find(".pprice").val();
        var pimage = $form.find(".pimage").val();
        var pcode = $form.find(".pcode").val();
        var pqty = $form.find(".pqty").val();
        $.ajax({
          url: 'action.php',
          method: 'post',
          data: {
            pid: pid,
            pname: pname,
            pprice: pprice,
            pqty: pqty,
            pimage: pimage,
            pcode: pcode
          },
          success: function (response) {
            $("#message").html(response);
            window.scrollTo(0, 0);
            load_cart_item_number();
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
  <!--Our JS files/URLs-->
  <script src="Shop.js"></script>
</footer>

</html>