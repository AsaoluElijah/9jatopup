<?php
    require('p_connection.php');
    if (isset($_POST['submit'])) {
        $wallet = $_POST['wallet'];
        $amount = $_POST['amount'];
        $query = "SELECT * FROM user WHERE wallet = '{$wallet}'";
        $result = mysqli_query($connection,$query);

        $row = mysqli_fetch_array($result);
        if ($row < 1) {
            echo "<script>alert('Sorry, this wallet doesnt exist, please check and try again')</script>";
        }else {
            
            $amountBefore = $row['amount'];
            $newAmount = $amount + $amountBefore;
            $sql = "UPDATE user SET amount = {$newAmount} WHERE wallet = '{$wallet}'";
            $result2 = mysqli_query($connection,$sql);
            if ($result2) {
                echo "<script>alert('You ve successfully sent {$amount} to {$wallet}')</script>";
            }else {
                echo "<script>alert('Error in sending amount to user')</script>";
            }
        }
        
    }

?>
<!DOCTYPE html>
<html lang="zxx" class="js">
<head>

</head>

<body class="page-user">
    <?php
        require('admin-header.php');
    ?>

    <div class="page-content">
        <div class="container">
            <div class="content-area card">
                <div class="card-innr card-innr-fix2">
                    <div class="card-head">
                        <h6 class="card-title">Send Token to user</h6>
                    </div>
                    <div class="gaps-1x"></div><!-- .gaps -->
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-item input-with-label">
                                    <label class="input-item-label">User Wallet</label>
                                    <input class="input-bordered" required name="wallet" type="text"
                                            <?php
                                                if (isset($_REQUEST['wallet'])) {
                                                echo "value='".$_REQUEST['wallet']."'";
                                            }
                                        ?>
                                    placeholder="Enter user wallet address">
                                </div>
                                <div class="input-item input-with-label">
                                    <label class="input-item-label">Amount</label>
                                    <input class="input-bordered" required name="amount" type="number" placeholder="Enter Amount to send">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-with-label">
                                    <label class="input-item-label">Message</label>
                                    <textarea class="input-bordered input-textarea"
                                        placeholder="Enter Optional Message"></textarea></div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Send&nbsp;&nbsp;&nbsp;<i class="fa fa-rocket"></i></button>
                        </div>
                    </form>
                        <div class="hr2"></div>
                </div>
            </div><!-- .card -->
        </div><!-- .container -->
    </div><!-- .page-content -->
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
                </div><!-- .col -->
                <div class="col-md-4 mt-2 mt-sm-0">
                    <div
                        class="d-flex justify-content-between justify-content-md-end align-items-center guttar-25px pdt-0-5x pdb-0-5x">
                        <div class="copyright-text">&copy; 2018 TokenWiz.</div>
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
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .footer-bar -->
    <!-- JavaScript (include all script here) -->
    <script src="assets/js/jquery.bundle49f7.js"></script>
    <script src="assets/js/script49f7.js"></script>
</body>
<!-- Mirrored from demo.themenio.com/tokenwiz/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2017], Thu, 09 May 2019 11:29:12 GMT -->

</html>