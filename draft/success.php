<?php
    require('includes/app.php');
    require('includes/user-data.php');
    
     $airtimePur = new App;


    if (!isset($_REQUEST['event'])) {
        echo "<script>location.href= 'dashboard.php'</script>";
    }
    if ($_REQUEST['event'] == 'regSuccess') {
        $registration = true;

    }else if($_REQUEST['event'] == 'mailVer'){
        $verification = "true";

    }else if ($_REQUEST['event'] == 'purchase') {
        if (!isset($_REQUEST['txref'])) {
            echo "<script>location.href= 'dashboard.php'</script>";            
        }
        $txref = $_REQUEST['txref'];
        $amount = $_REQUEST['amount'] or 100;
        $network = $_REQUEST['network'] or 'mtn';
        $purchase = true;
        $amnt = $amount/1;
        $airtimePur->deduct($amnt, $userId);
        $code = $airtimePur->buyAirtime($network,$amount);
        // if ($code === 'empty') {
        //     $code = "Your mobile number has been topped with {$amount}, this was because there is no more airtime code in database";
        // }

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
                                <div class="status-icon"><em class="ti ti-check"></em></div>
                                <?php if (isset($registration)) { ?>
                                <span class="status-text large text-dark">Account registration successfull.</span>
                                <p class="px-md-5">Thank you for registering a 9JATOPUP Account. <br>
                                    We just sent a verification mail to <code><?php echo $email; ?></code>
                                    <br>
                                    <a href="dashboard.php" class="btn btn-info btn-outline">Goto Dashboard</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="send-coin.php" class="btn btn-info btn-outline">Recieve Blue-Coin</a>
                                </p>
                                <?php } ?>
                                <?php if (isset($verification)) { ?>
                                <span class="status-text large text-dark">Account verification successfull.</span>
                                <p class="px-md-5">Thank you for verifying your account. <br>
                                    We are glad to have you on board
                                    <br>
                                    <a href="dashboard.php" class="btn btn-info btn-outline">Goto Dashboard</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="send-FUND.php" class="btn btn-info btn-outline">Send FUND</a>
                                </p>
                                <?php } ?>
                                <?php if (isset($purchase)) { ?>
                                    <span class="status-text large text-dark">Purchase successfull.</span>
                                    <p class="px-md-5">
                                        <b>Network: <?php echo $network; ?></b>
                                        <br>
                                        <b>Amount: <?php echo $amount; ?></b>
                                        <br>
                                        <h4>Airtime Code</h4>
                                        <h5><?php echo $code; ?></h5>
                                        <br>
                                        <a href="dashboard.php" class="btn btn-info btn-outline">Goto Dashboard</a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="send-FUND.php" class="btn btn-info btn-outline">Send FUND</a>
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
    <!-- Modal Top -->
    <div class="modal fade" id="pay-blue" tabindex="-1">
        <div class="modal-dialog modal-dialog-sm">
            <div class="modal-content"><a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"><em
                        class="ti ti-close"></em></a>
                <div class="popup-body">
                    <h3 class="popup-title" id="modal-title">Payment For <?php echo $network.", #".$amount; ?></h3>
                    <p id="modal-content">
                        Your Balance: <?php echo $user_amount." Blue-Coin"; ?>
                        <br>
                        Amount to pay for:
                            <?php echo "#".$amount; ?>
                            <!-- 1 FUND = 1, Amount to pay for = amount/1-->
                            (<?php echo $amount/1; ?> FUND)
                            <br><br>
                            <div id="code"></div>
                        <button onclick="buyAirtime();" id="pay-now" class="btn btn-success">Pay Now</button>
                    </p>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- Modal End -->
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