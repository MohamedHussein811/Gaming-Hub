<!DOCTYPE html>

<head>
  <title>Capsule Pharmacy</title>
  <meta charset="UTF-8">
  <!-- Our CSS files/URLs -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

  .container {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    max-width: 1170px;
    margin: auto;
  }

  .row {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    display: flex;
    flex-wrap: wrap;
  }

  ul {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
  }

  .footer {
    line-height: 1.5;
    background-color: black;
    padding: 70px 0;
    margin-left: -25px;
    margin-bottom: -25px;
    width: 110%;
  }

  .footer-col {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    width: 25%;
    padding: 0 15px;
  }

  .footer-col h4 {
    font-size: 18px;
    color: #ffffff;
    text-transform: capitalize;
    margin-bottom: 35px;
    font-weight: 500;
    position: relative;
  }

  .footer-col h4::before {
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    background-color: red;
    height: 2px;
    box-sizing: border-box;
    width: 50px;
  }

  .footer-col ul li:not(:last-child) {
    margin-bottom: 10px;
  }

  .footer-col ul li a {
    font-size: 16px;
    color: #ffffff;
    text-decoration: none;
    font-weight: 300;
    color: #bbbbbb;
    display: block;
    transition: all 0.3s ease;
  }

  .footer-col ul li a:hover {
    color: #ffffff;
    padding-left: 8px;
  }

  .footer-col .social-links a {
    display: inline-block;
    height: 40px;
    width: 40px;
    background-color: rgba(255, 255, 255, 0.2);
    margin: 0 10px 10px 0;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    color: #ffffff;
    transition: all 0.5s ease;
  }

  .footer-col .social-links a:hover {
    color: white;
    background-color: #ff0000;
  }

  .copyrightText {
    position: relative;
    right: 150px;
    width: 100%;
    top: 50px;
    background: #181818;
    padding: 8px 100px;
    margin-bottom: -80px;
    text-align: center;
    color: #999;
  }

  .copyrightText p {
    position: relative;
    left: 30px;
  }

  @media (max-width:1118px) {
    .footer-col {
      margin-left: 20px;
    }

    .footer {
      width: 1118px;
    }

    .copyrightText {
      width: 1068px;
      position: relative;
    }

    .copyrightText p {
      left: 70px;
    }
  }

  @media (max-width:860px) {
    .footer {
      display: none;
    }
  }
</style>

<body>
  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="..\Home\Home.php">Home</a></li>
            <li><a href="..\Shop\Shop.php">Shop</a></li>
            <li><a href="..\Contact us\Contact us.php">Contact Us</a></li>
            <li><a href="..\About us\About us.php">About Us</a></li>
            <li><a href="..\Privacy policy\Privacy Policy.php">Privacy and policy</a></li>
            <li><a href="..\Terms and Service\Terms and Service.php">Terms and service</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>get help</h4>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Shipping</a></li>
            <li><a href="#">Returns</a></li>
            <li><a href="#">Order Status</a></li>
            <li><a href="#">Payment Options</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Contact information</h4>
          <ul>
            <li><a
                href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.7906226700115!2d30.95575751518746!3d29.95670058191425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458569393ca36ab%3A0xc1f1038e9a84b7a4!2sMSA!5e0!3m2!1sen!2seg!4v1669477559297!5m2!1sen!2seg"><i
                  class="fa fa-map-marker" aria-hidden="true"></i> Coming Soon</a></li>
            <li><a href="tel:01221575493"><i class="fa fa-phone" aria-hidden="true"></i>+20 111 111 1111</a></li>
            <li><a href="mailto:drifterpaki@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i>
                comingsoon@gmail.com</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="copyrightText">
      <p>Copyright &#169; 2022 Gaming Hub. All Rights Reserved.</p>
    </div>
  </footer>

</body>

</html>