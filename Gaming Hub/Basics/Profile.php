<head>
    <title>Capsule Pharmacy</title>
    <!-- To Support Arabic Language in website-->
    <meta charset="UTF-8" />
    <!--Our website description for google search-->
    <meta name="description"
        content="Order your medication from Capsule Pharmacy 24 hours a day, 7 days a week. Pay online or in cash at the time of delivery, use your medical insurance, and we will deliver your medication right to your door!" />

    <!--Icon-->
    <link rel="icon" type="image/x-icon" href="../Images/icon.ico">

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
    .profilebtn {
        position: relative;
        left: 460px;
        bottom: 10px;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        border-top-left-radius: 10px;
        width: 50px;
    }

    .profile {
        position: relative;
        left: 750px;
        top: 20px;
        display: inline-block;
        z-index: 3;
    }

    .profile-content {
        position: relative;
        left: 450px;
        bottom: 10px;
        display: none;
        background: rgba(255, 255, 255, 0.5);
        min-width: 50px;
        overflow: auto;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        padding: 5px
    }

    .profile-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        font-family: -apple-system, BlinkMacSystemFont, segoe ui, roboto, helvetica neue, Arial, sans-serif, apple color emoji, segoe ui emoji, segoe ui symbol;
    }

    .profile a:hover {
        background: rgba(0, 0, 0, 0.2);
        transition: 0.9s;

    }

    .show {
        display: block;
    }

    #userinfo h2 {
        display: inline;
        position: relative;
        bottom: 15px;
    }

    #userpic {
        width: 50px;
        display: inline;
    }

    @media (max-width:1118px) {
        .profile-content {
            left: 0px;
        }
    }

    @media (max-width:944px) {
        .profile-content {
            left: -150px;
        }
    }

    @media (max-width:860px) {
        .profile-content {
            left: -600px;
            top: 300px;
            background-color: black;

        }

        .profile-content a {
            color: white;
        }

        .profile-content a:hover {
            background-color: white;
            color: black;
        }
    }
</style>

<body>
    <!-- Profile Header -->
    <div class="profile">
        <div id="myProfile" class="profile-content">
            <div id="userinfo">
                <img id="userpic" src="../Images/Profile/Profile.png">
                <h2 style="color:black;">
                    <?php echo $_SESSION["FName"]; ?>
                </h2>
            </div>
            <!-- Links for profile -->
            <a href="../Profile/AccountSettings.php"> Account Settings</a>
            <a href="../Shop/cart.php"> My Orders</a>
            <a href="../Sign in/Logout.php"><i class="fa fa-sign-out" style="font-size:20px"></i> Log Out</a>
        </div>
    </div>

</body>