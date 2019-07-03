<?php
    require('includes/app.php');
    require('includes/user-data.php');
    
    if (isset($_REQUEST['success'])) {
        
        $network = $_REQUEST['network'];
        $phone = $_REQUEST['phone'];
        $amount = $_REQUEST['amount'] / 1;
        
        $a = new App;
        $a->deduct($amount,$userId);
        $purchase = true;
    }
?>
<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
    <?php require('main-header.php'); ?>
</head>

<body class="page-user">

    <!-- .topbar-wrap -->
    <div class="page-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="card content-area">
                        <div class="card-innr">
                            <div class="status status-thank px-md-5">
                                <?php if (isset($purchase)) { ?>
                                    <div class="status-icon"><em class="ti ti-check"></em></div>
                                    <span class="status-text large text-dark">Purchase successfull.</span>
                                    <p>Your mobile number <?php echo $phone; ?> has been credited:</p>
                                    <p class="px-md-5">
                                        <b>Network: <?php echo $network; ?></b>
                                        <br>
                                        <b>Amount: <?php echo $amount; ?></b>
                                        <br>
                                        <a href="dashboard.php" class="btn btn-info btn-outline">Goto Dashboard</a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="send-fund.php" class="btn btn-info btn-outline">Send FUND</a>
                                    </p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <!-- .card -->
                    <div class="gaps-1x"></div>
                    <div class="gaps-3x d-none d-sm-block"></div>
                </div>
            </div>
        </div>
        <!-- .container -->
    </div>
    <!-- .page-content -->
    <div class="footer-bar">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8">
                    <ul class="footer-links">
                        <li><a href="#">Whitepaper</a></li>
                        <li><a href="faq-page.html">FAQs</a></li>
                        <li><a href="regular-page.html">Privacy Policy</a></li>
                        <li><a href="regular-page.html">Terms of Condition</a></li>
                    </ul>
                </div>
                <!-- .col -->
                <div class="col-md-4 mt-2 mt-sm-0">
                    <div class="d-flex justify-content-between justify-content-md-end align-items-center guttar-25px pdt-0-5x pdb-0-5x">
                        <div class="copyright-text">&copy; 2019 9JATOPUP.</div>
                        <div class="lang-switch relative"><a href="#" class="lang-switch-btn toggle-tigger">En <em
                                    class="ti ti-angle-up"></em></a>
                            <div class="toggle-class dropdown-content dropdown-content-up">
                                <ul class="lang-list">
                                    <li><a href="#">Fr</a></li>
                                    <li><a href="#">Bn</a></li>
                                    <li><a href="#">Lt</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .col -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </div>
    <!-- .footer-bar -->
    <!-- JavaScript (include all script here) -->
    <script src="assets/js/jquery.bundle49f7.js"></script>
    <script src="assets/js/script49f7.js"></script>
    <script src="assets/js/toastr.examples49f7.js"></script>
    <script>
</body>
</html>