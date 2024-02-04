<?php
session_start();
//Connect to the Database
require '../Database/Config.php';



//Add products into the cart table
if (isset($_POST['pid'])) {
	$pid = $_POST['pid'];
	$pname = $_POST['pname'];
	$pprice = $_POST['pprice'];
	$pimage = $_POST['pimage'];
	$pcode = $_POST['pcode'];
	$pqty = 1;
$email = $_SESSION['Email'];
	$total_price = $pprice * $pqty;

		$stmt = $this->conn->prepare("SELECT product_code FROM cart WHERE product_code=$pcode and Email='$email'");
		$stmt->execute();
		$res = $stmt->get_result();
		$r = $res->fetch_assoc();
		$code = $r['product_code'] ?? '';

	if (!isset($_SESSION["Email"])) {
		$email = " ";
	} else {
		$email = $_SESSION["Email"];
	}
	if (!$code) {
		$query = $conn->prepare("INSERT INTO cart (product_name,product_price,product_image,qty,total_price,product_code,Email) 
		VALUES ('" . $pname . "' , '" . $pprice . "','" . $pimage . "','" . $pqty . "','" . $total_price . "','" . $pcode . "','" . $email . "')");
		//$query->bind_param($pname,$pprice,$pimage,$pqty,$total_price,$pcode,$email);
		$query->execute();

		echo '<div class="alert alert-success alert-dismissible mt-2">
						  <!--<button type="hidden" class="close" data-dismiss="alert">&times;</button> -->
						  <strong style="position:relative; bottom:100px; left:600px; font-size: 30px; color:green;">Item added to your cart!</strong>
				</div>';
	} else {
		echo '<div class="alert alert-danger alert-dismissible mt-2">
						 <!-- <button type="hidden" class="close" data-dismiss="alert">&times;</button>-->
						  <strong style="position:relative; bottom:100px; left:550px; font-size: 30px; color:red;">Item already added to your cart!</strong>
				</div>';
	}
}
// Get no.of items available in the cart table
if (isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item') {
	if (!isset($_SESSION["Email"])) {
		$email = " ";
	} else {
		$email = $_SESSION["Email"];
	}
	$stmt = $conn->prepare("SELECT * FROM cart where Email='" . $email . "'");
	$stmt->execute();
	$stmt->store_result();
	$rows = $stmt->num_rows;
	echo $rows;
}

// Remove single items from cart
if (isset($_GET['remove'])) {
	$id = $_GET['remove'];

	$stmt = $conn->prepare('DELETE FROM cart WHERE id=?');
	$stmt->bind_param('i', $id);
	$stmt->execute();

	//$_SESSION['showAlert'] = 'block';
	//$_SESSION['message'] = 'Item removed from the cart!';
	header('location:cart.php');
}

// Remove all items at once from cart
if (isset($_GET['clear'])) {
	$stmt = $conn->prepare('DELETE FROM cart');
	$stmt->execute();
	//$_SESSION['showAlert'] = 'block';
	// $_SESSION['message'] = 'All Item removed from the cart!';
	header('location:cart.php');
}

// Set total price of the product in the cart table
if (isset($_POST['qty'])) {
	$qty = $_POST['qty'];
	$pid = $_POST['pid'];
	$pprice = $_POST['pprice'];

	$tprice = $qty * $pprice;

	$stmt = $conn->prepare('UPDATE cart SET qty=?, total_price=? WHERE id=?');
	$stmt->bind_param('isi', $qty, $tprice, $pid);
	$stmt->execute();
}
//Delete null values
if (isset($_POST['qty'])) {
	$stmt = $conn->prepare('DELETE From cart WHERE LENGTH(product_name) < 1');
	$stmt->bind_param('isi', $qty, $tprice, $pid);
	$stmt->execute();
}

// Checkout and save customer info in the orders table
if (isset($_POST['action']) && isset($_POST['action']) == 'order') {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$products = $_POST['products'];
	$grand_total = $_POST['grand_total'];
	$address = $_POST['address'];
	$pmode = $_SESSION['pmode'];

	$data = '';
	if ($grand_total > 0) {
		$stmt = $conn->prepare('INSERT INTO orders (name,email,phone,address,pmode,products,amount_paid)VALUES(?,?,?,?,?,?,?)');
		$stmt->bind_param('sssssss', $name, $email, $phone, $address, $pmode, $products, $grand_total);
		$stmt->execute();
		$stmt2 = $conn->prepare('DELETE FROM cart');
		$stmt2->execute();
		$data .= '<div class="text-center">
								  <h1 class="text-success">Your Order Placed Successfully!</h1>
								  <h4 class="bg-danger text-light rounded p-2">Item(s) Purchased : ' . $products . '</h4>
								  <h4>Your Name: ' . $name . '</h4>
								  <h4>Your E-mail: ' . $email . '</h4>
								  <h4>Your Phone: ' . $phone . '</h4>
								  <h4>Total Amount Paid: ' . number_format($grand_total, 2) . '</h4>
								  <h4>Payment Mode: ' . $pmode . '</h4>
							</div>';
		echo $data;
		echo "<script>$('.PlaceOrderbtn').prop('disabled',true);</script>";
	} else {
		$data .= '<h1>Your Cart is empty!</h1>';
		echo $data;
		echo "<script>$('.PlaceOrderbtn').prop('disabled',true);</script>";
	}
}
?>