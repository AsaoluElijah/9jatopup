
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/favicon.png"><!-- Site Title  -->
    <title>Priceless | Buy data and airtime</title><!-- Vendor Bundle CSS -->
    <link rel="stylesheet" href="assets/css/vendor.bundle49f7.css"><!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/css/style.css" id="layoutstyle">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: 'Montserrat', sans-serif !important;
        }
    </style>

    <div class="topbar-wrap">
        <div class="topbar is-sticky">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <ul class="topbar-nav d-lg-none">
                        <li class="topbar-nav-item relative"><a class="toggle-nav" href="#">
                                <div class="toggle-icon"><span class="toggle-line"></span><span
                                        class="toggle-line"></span><span class="toggle-line"></span><span
                                        class="toggle-line"></span></div>
                            </a></li><!-- .topbar-nav-item -->
                    </ul><!-- .topbar-nav --><a class="topbar-logo" href="index.html">
                        <img src="images/logo-light2x.png" srcset="images/logo-light2x.png 2x" alt="logo"></a>
                    <ul class="topbar-nav">
                        <li class="topbar-nav-item relative"><span
                                class="user-welcome d-none d-lg-inline-block">
                                <?php
                                    if (isset($name)) {
                                        echo $name;
                                    }else{
                                        echo '<a href="sign-in.php" style="overflow: hidden;">Login/Signup</a>';
                                    }
                                ?>
                            </span><a
                                class="toggle-tigger user-thumb" href="#"><em class="ti ti-user"></em></a>
                        </li><!-- .topbar-nav-item -->
                    </ul><!-- .topbar-nav -->
                </div>
            </div><!-- .container -->
        </div><!-- .topbar -->
        <div class="navbar">
            <div class="container">
                <div class="navbar-innr">
                    <ul class="navbar-menu">
                        <li><a href="index.php"><em class="ikon ikon-user"></em> Home</a></li>
                        <li><a href="#"><em class="ikon ikon-coins"></em> About</a></li>
                        <li><a href="dashboard.php"><em class="ikon ikon-dashboard"></em> Dashboard</a></li>
                        <li><a href="buy-airtime.php"><em class="ikon ikon-distribution"></em> Buy Airtime</a></li>
                        <li><a href="buy-data.php"><em class="ikon ikon-distribution"></em> Buy Data</a></li>
                        <li><a href="send-coin.php"><em class="ikon ikon-transactions"></em> Send/Recieve</a></li>
                    </ul>
                                    
                    <ul class="navbar-btns">
                        <li>
                            <a href="logout.php" class="btn btn-sm btn-outline btn-light">
                                <em class="text-primary ti ti-user"></em><span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div><!-- .navbar-innr -->
            </div><!-- .container -->
        </div><!-- .navbar -->
    </div><!-- .topbar-wrap -->