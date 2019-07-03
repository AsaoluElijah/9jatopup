<?php require('includes/app.php');
    $login = new App;
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $newLogin = $login->adminLogin($email,$password);
        
        if ($newLogin === "success") {
            $success = true;
        }else{
            $error = true;
        }

    }

?>
<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fully featured and complete ICO Dashboard template for ICO backend management.">
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- Vendor Bundle CSS -->
    <link rel="stylesheet" href="assets/css/vendor.bundle49f7.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/css/style49f7.css" id="layoutstyle">
</head>

<body class="page-ath">
    <div class="page-ath-wrap">
        <div class="page-ath-content">
            <div class="page-ath-header">
                <a href="index.html" class="page-ath-logo"><img src="images/logo.png" srcset="images/logo2x.png 2x" alt="logo"></a>
            </div>
            <div class="page-ath-form">
                <h2 class="page-ath-heading">Sign in <small>Admin</small></h2>
                <form action="#" method="POST">
                    <div class="input-item">
                        <input type="email" required name="email" placeholder="Your Email" class="input-bordered">
                    </div>
                    <div class="input-item">
                        <input type="password" required name="password" placeholder="Password" class="input-bordered">
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="input-item text-left">
                            <input class="input-checkbox input-checkbox-md" id="remember-me" type="checkbox">
                            <label for="remember-me">Remember Me</label>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button>
                </form>
                <div class="gaps-2x"></div>
                <div class="gaps-2x"></div>
            </div>
            <div class="page-ath-footer">
                <ul class="footer-links">
                    <li><a href="regular-page.html">Privacy Policy</a></li>
                    <li><a href="regular-page.html">Terms</a></li>
                    <li>&copy; 2018 TokenWiz.</li>
                </ul>
            </div>
        </div>
        <div class="page-ath-gfx">
            <div class="w-100 d-flex justify-content-center">
                <div class="col-md-8 col-xl-5"><img src="images/ath-gfx.png" alt="image"></div>
            </div>
        </div>
    </div>
    <!-- JavaScript (include all script here) -->
    <script src="assets/js/jquery.bundle49f7.js"></script>
    <script src="assets/js/script49f7.js"></script>
    <script src="assets/js/sweat.examples49f7.js"></script>    <script>
        function success() {
            var a = swal("Registration Successfull", "Go to dashboard!", "success");
            
        }
        function error() {
         swal("Error", "Incorrect email or password,", "error");
            
        }
    </script>
<?php
    if (isset($success)) {
        echo "<script> location.href = 'add-airtime.php' </script>";
    }
    if (isset($error)) {
        echo "<script>error()</script>";
    }
?>
</body>
</html>