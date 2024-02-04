<!DOCTYPE html>
<html>

<head>
  <title>Gaming Hub</title>
  <!-- To Support Arabic Language in website-->
  <meta charset="UTF-8" />
  <!--Our website description for google search-->
  <meta name="description"
    content="Order your medication from Capsule Pharmacy 24 hours a day, 7 days a week. Pay online or in cash at the time of delivery, use your medical insurance, and we will deliver your medication right to your door!" />

  <!--Icon-->
  <link rel="icon" type="image/x-icon" href="../Images/best-ps4-games.jpg">

  <!--Our JS files/URLs-->
  <script src="https://kit.fontawesome.com/f98208c8c8.js" crossorigin="anonymous"></script>
  <!-- Ready made functions for icons ex:Location/Email or phone-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  <!--Our CSS files/URLs-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<style>
  body {
    overflow-x: hidden;
    margin: 0;
    font-family: roboto;
  }

  hr {
    border: none;
    height: 20px;
    width: 90%;
    height: 50px;
    margin-top: 0;
    border-bottom: 1px solid cyan;
    box-shadow: 0 20px 20px -20px aqua;
    margin: -50px auto 10px;
  }

  .header {
    overflow: hidden;
    background-color: black;
    padding: 7px 10px;
    margin-top: 3px;
    background: #000;
  }

  .glow::before,
  .glow::after {
    content: '';
    position: absolute;
    left: -2px;
    top: -2px;
    background: linear-gradient(45deg, #e6fb04, #ff6600, #00ff66, #00ffff, #ff00ff, #ff0099, #6e0dd0, #ff3300, #099fff);
    background-size: 400%;
    width: calc(100% + 5px);
    height: calc(9% + 5px);
    z-index: -1;
    animation: animate 20s linear infinite;
  }

  @keyframes animate {
    0% {
      background-position: 0 0;
    }

    50% {
      background-position: 400% 0;
    }

    100% {
      background-position: 0 0;
    }

  }

  .glow::after {
    filter: blur(40px);
  }

  .header a {
    float: left;
    color: white;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    line-height: 25px;
    border-radius: 4px;
    margin-right: 20px;
  }

  .header a.logo {
    font-size: 25px;
    font-weight: bold;
    color: #00b3ff;
    text-shadow: 0 0 10px #00b3ff,
      0 0 20px #00b3ff,
      0 0 40px #00b3ff,
      0 0 80px #00b3ff,
      0 0 120px #00b3ff,
      0 0 160px #00b3ff;
  }

  .header .lightbar {
    position: absolute;
    top: 0;
    left: 0;
    width: 10px;
    height: 68px;
    border-radius: 10px;
    background: white;
    z-index: 2;
    box-shadow: 0 0 10px #00b3ff,
      0 0 20px #00b3ff,
      0 0 40px #00b3ff,
      0 0 80px #00b3ff,
      0 0 120px #00b3ff,
      0 0 160px #00b3ff;
    animation: animatelightbar 5s linear infinite;
  }

  .header .topLayer {
    position: absolute;
    top: 3px;
    left: 0;
    width: 200px;
    height:60px;
    background: black;
    animation: animatetopLayer 10s linear infinite;
    z-index:0;
  }

  @keyframes animatelightbar {

    0%,
    5% {
      transform: scaleY(0) translateX(0);
    }

    10% {
      transform: scaleY(1) translateX(0);
    }

    90% {
      transform: scaleY(1) translateX(calc(190px - 10px));
    }

    95%,
    100% {
      transform: scaleY(0) translateX(calc(190px - 10px));
    }
  }

  @keyframes animatetopLayer {

    0%,
    2.5% {
      transform: translateX(0);
    }

    5% {
      transform: translateX(0);
    }

    45% {
      transform: translateX(100%);
    }

    47.5%,
    50% {
      transform: translateX(100%);
    }

    50.001%,
    52.5% {
      transform: translateX(-100%);
    }

    55% {
      transform: translateX(-100%);
    }

    95% {
      transform: translateX(0%);
    }

    97.5%,
    100% {
      transform: translateX(0%);
    }
  }

  .header a:hover {
    color: #00b3ff;
    text-shadow: 0 0 10px #00b3ff,
      0 0 20px #00b3ff,
      0 0 40px #00b3ff,
      0 0 80px #00b3ff,
      0 0 120px #00b3ff,
      0 0 160px #00b3ff;
  }

  .header a.active {
    color: aqua;
  }

  .header-right {
    float: right;
  }

  @media screen and (max-width: 500px) {
    .header a {
      float: none;
      display: block;
      text-align: left;
    }

    .header-right {
      float: none;
    }
  }

  /*Pre Loader*/
  .absCenter {
    width: 100%;
    height: 100%;
    position: fixed;
    top: 50%;
    left: 50%;
    background-image: radial-gradient(circle farthest-corner at center, #3C4B57 0%, #1C262B 100%);
    transform: translate(-50%, -50%);
    z-index: 1;
  }

  .loader {
    position: absolute;
    top: calc(50% - 32px);
    left: calc(50% - 32px);
    width: 64px;
    height: 64px;
    border-radius: 50%;
    perspective: 800px;
    z-index: 2;
  }

  .inner {
    position: absolute;
    box-sizing: border-box;
    width: 100%;
    height: 100%;
    border-radius: 50%;
  }

  .inner.one {
    left: 0%;
    top: 0%;
    animation: rotate-one 1s linear infinite;
    border-bottom: 3px solid #EFEFFA;
  }

  .inner.two {
    right: 0%;
    top: 0%;
    animation: rotate-two 1s linear infinite;
    border-right: 3px solid #EFEFFA;
  }

  .inner.three {
    right: 0%;
    bottom: 0%;
    animation: rotate-three 1s linear infinite;
    border-top: 3px solid #EFEFFA;
  }

  @keyframes rotate-one {
    0% {
      transform: rotateX(35deg) rotateY(-45deg) rotateZ(0deg);
    }

    100% {
      transform: rotateX(35deg) rotateY(-45deg) rotateZ(360deg);
    }
  }

  @keyframes rotate-two {
    0% {
      transform: rotateX(50deg) rotateY(10deg) rotateZ(0deg);
    }

    100% {
      transform: rotateX(50deg) rotateY(10deg) rotateZ(360deg);
    }
  }

  @keyframes rotate-three {
    0% {
      transform: rotateX(35deg) rotateY(55deg) rotateZ(0deg);
    }

    100% {
      transform: rotateX(35deg) rotateY(55deg) rotateZ(360deg);
    }
  }
</style>
<script>
  //Reset the scroll after refreshing the page
  history.scrollRestoration = "manual";

  $(window).on('beforeunload', function () {
    $(window).scrollTop(0);
  });
  //Pre-loader
  $(window).on("load", function () {
    $(".absCenter").fadeOut("slow");
  });
</script>

<body>
  <!--Pre-loader-->
  <div class="absCenter">
    <div class="loader">
      <div class="inner one"></div>
      <div class="inner two"></div>
      <div class="inner three"></div>
    </div>
  </div>
  <!--Header-->
  <div class="header glow">
    <div class="lightbar"></div>
    <div class="topLayer"></div>
    <a href="#default" class="logo">Gaming Hub</a>
    <div class="header-right">
      <a href="..\Home\Home.php">Home</a>
      <a href="..\Shop\Shop.php">Shop</a>
      <a href="../Home/Home.php #mail">Contact Us</a>
      <a href="../Home/Home.php #about">About us</a>
      <a href="../Sign in/Sign in.php">Sign in</a>
      <a href="../Sign up/Sign up.php">Sign up</a>
    </div>
  </div>
  <hr>
</body>

</html>