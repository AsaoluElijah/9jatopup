<!DOCTYPE html>
<html>

<head>
<script src="assets/js/jquery.bundle49f7.js"></script>
<script src='includes/buy.js'></script>

    <?php
    require('includes/user-data.php');
    require('main-header.php');
    require('includes/app.php');
    
    if (isset($_POST['submit'])) {
        
        // Add your api key below
        $apiKey = "0194138c";
        $network = $_POST['network'];
        $type = $_POST['type'];
        $phone = $_POST['phone'];
        $amount = $_POST['amount'];
        $txref = rand(120,2932);

        if ($user_amount <= $amount) {
            echo "<script>alert('You do not have sufficient token')</script>";
        }elseif ($type == 'topup') {
            $air = new App;
            // $bcd = $air->deduct($amount,$userId);
            $topUser = true;
            
        }else{
            $airt = new App;
            // $bcd = $airt->deduct($amount,$userId);
            echo "<script>location.href = 'success.php?event=purchase&txref={$txref}&network={$network}&amount={$amount}'</script>";
        }
    }
    
    ?>
</head>
<?php
    if (isset($topUser)) {
?>
    <script>
        var apiKey = '<?php echo $apiKey ?>';
        var amount = '<?php echo $amount ?>';
        var network = '<?php echo $network ?>';
        var phone = '<?php echo $phone ?>';
        
        buyAirtime(apiKey,amount,network,phone);
        
        setTimeout(function(){ location.href = `topup-success.php?success=true&network=${network}&phone=${phone}&amount=${amount}`; }, 4000);
        
    </script>
<?php } ?>
<body class="page-user">
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="main-content col-lg-8">
                    <div class="content-area card">
                        <div class="card-innr card-innr-fix">
                            <div class="card-head">
                                <h6 class="card-title">Buy Airtime (VTU or Airtime Pin)</h6>
                            </div>
                            <div class="gaps-1x"></div>
                            <!-- .gaps -->
                            <form action="#" method="POST">
                                <div class="input-item input-with-label">
                                    <label class="input-item-label text-exlight">
                                        Select Network <sup style="color:red;font-weigth:bolder;">*</sup>
                                    </label>
                                    <select name="network" class="form-control" id='network'>
                                        <option value="mtn">MTN</option>
                                        <option value="airtel">AIRTEL</option>
                                        <option value="glo">GLO</option>
                                        <option value="9mobile">9MOBILE</option>
                                    </select>
                                    <br>
                                    <label class="input-item-label text-exlight">
                                        Amount to buy <sup style="color:red;font-weigth:bolder;">*</sup>
                                    </label>
                                    <!-- Input with inline icon -->
                                    <div class="relative">
                                        <span class="input-icon input-icon-right">
                                            <em class="ti ti-image"></em>
                                        </span>
                                        <input type="number" required name="amount" class="input-bordered" id='amountToPay' placeholder="Enter the amount of airtime you'll like to buy (100,200,500)">
                                    </div>
                                </div>
                                <div class="input-item input-with-label">
                                    <label class="input-item-label text-exlight">
                                        Receivers phone number <sup style="color:red;font-weigth:bolder;">*</sup>
                                    </label>
                                    <!-- Input with inline icon -->
                                    <div class="relative">
                                        <span class="input-icon input-icon-right">
                                            <em class="ti ti-mobile"></em>
                                        </span>
                                        <input required name="phone" id='phone' class="input-bordered" type="text" placeholder="Enter the receiver's phone number">
                                    </div>
                                </div>
                                <div class="input-item">
                                    <input type="radio" value='topup' name='type'>
                                    <label for="latest-news">
                                        Receive Virtual Topup
                                    </label><br>
                                    <input required type="radio" value='pin' name='type'>
                                    <label for="latest-news2">
                                        Receive Airtime pin
                                    </label>
                                 </div>
                                <div class="gaps-1x"></div>
                                <div>
                                    <button type="submit" id="form-btn" name="submit" class="btn btn-primary">PAY WITH TOKEN
                                        <span class="icon fas fa-rocket"></span>
                                    </button>
                                </div>
                            </form>
                            <br>
                            <form>
                                <script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
                                <button type="button" id="form-btn" onClick="payWithRave()" class="btn btn-primary">PAY WITH CARD
                                    <span class="icon fas fa-credit-card"></span>
                                </button>
                            </form>
                        </div>
                        <!-- .card-innr -->
                    </div>
                    <!-- .card -->
                    <div class="content-area card">
                        <div class="card-innr">
                            <div class="card-head">
                                <h5 class="card-title card-title-md">Invite your friends and family and receive free tokens
                                </h5>
                            </div>
                            <div class="card-text">
                                <p>Each member have a unique 9jatopup referral link to share with friends and family and receive a <strong>bonus - 5% of the value of their contribution</strong>. If any one sign-up with this link, will be added to your referral
                                    program. The referral link may be used during a token sales running.</p>
                            </div>
                            <div class="referral-form">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0 font-bold">Referral URL</h5><a href="#" class="link link-primary link-ucap">See Your referral</a>
                                </div>
                                <div class="copy-wrap mgb-1-5x mgt-1-5x"><span class="copy-feedback"></span><em class="fas fa-link"></em><input type="text" class="copy-address" value="http://9jatopup.com.ng/invite.php?ref=<?php echo $_SESSION['email']; ?>" disabled><button class="copy-trigger copy-clipboard"
                                        data-clipboard-text="http://9jatopup.com.ng/invite.php?ref=<?php echo $_SESSION['email']; ?>"><em
                                            class="ti ti-files"></em></button></div>
                                <!-- .copy-wrap -->
                            </div>
                            <ul class="share-links">
                                <li>Share with : </li>
                                <li><a href="#"><em class="fab fa-google-plus-g"></em></a></li>
                                <li><a href="#"><em class="fab fa-twitter"></em></a></li>
                                <li><a href="#"><em class="fab fa-facebook-f"></em></a></li>
                                <li><a href="#"><em class="fab fa-linkedin-in"></em></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .col -->
                <div class="aside sidebar-right col-lg-4">
                    <div class="account-info card">
                        <div class="card-innr">
                            <h6 class="card-title card-title-sm">Receiving Wallet</h6>
                            <p class="text-primary">
                                Copy and share this wallet with friends to recieve Blue-Coin from them
                            </p>
                            <div class="copy-wrap mgb-0-5x">
                                <span class="copy-feedback"></span>
                                <em class="fas fa-link"></em>
                                <input type="text" class="copy-address"value="<?php echo $wallet; ?>" disabled>
                                <button class="copy-trigger copy-clipboard" data-clipboard-text="<?php echo $wallet; ?>"><em
                                                class="ti ti-files"></em></button>
                            </div>
                            <div class="gaps-2-5x"></div>

                            <h6 class="card-title card-title-sm">Your Account Status</h6>
                            <ul class="btn-grp">
                                    <?php
                                        if ($verified == 'FALSE') {
                                    ?>
                                <li><a href="#" class="btn btn-auto btn-xs btn-danger">Email not verified</a></li>
                                <li><a href="#" class="btn btn-auto btn-xs btn-warning">Verify Now</a></li>
                                    <?php
                                        }else{
                                    ?>
                                <li><a href="#" class="btn btn-auto btn-xs btn-success">Email verified</a></li>
                                    <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="token-sales card">
                        <div class="token-calculator card card-full-height">
                            <div class="card-innr">
                                <div class="card-head">
                                    <h4 class="card-title">Buy Blue-Coin</h4>
                                    <p class="card-title-text">Enter amount to calculate token.</p>
                                </div>
                                <script>
                                    const calculate = (value) => {
                                        let amount = value * 1;
                                        document.querySelector('.token-amount').innerHTML = amount;
                                    }
                                </script>
                                <div class="token-calc">
                                    <div class="token-pay-amount"><input oninput="calculate(this.value);" id="token-base-amount" class="input-bordered input-with-hint" type="text" value="1">
                                        <div class="token-pay-currency"><span class="link ucap link-light">Blu</span>
                                        </div>
                                    </div>
                                    <div class="token-received">
                                        <div class="token-eq-sign">=</div>
                                        <div class="token-received-amount">
                                            <h5 class="token-amount">1.00</h5>
                                            <div class="token-symbol">NR</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="token-calc-note note note-plane"><em class="fas fa-info-circle text-light"></em><span class="note-text text-light">Amount
                                        calculated based current tokens price</span></div>
                                <div class="token-buy"><a href="#" class="btn btn-primary">Buy Tokens</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .col -->
            </div>
            <!-- .container -->
        </div>
        <!-- .container -->
    </div>
    <!-- .page-content -->
    <script>
        const API_publicKey = "FLWPUBK-93ec2a364cbf737c65c35580f7cdbdae-X";

        const network = document.querySelector('#network');
        const userEmail = "<?php echo $email; ?>";
        const phone = document.querySelector('#phone');
        const amountToPay = document.querySelector('#amountToPay').value;

        function payWithRave() {
            var x = getpaidSetup({
                PBFPubKey: API_publicKey,
                customer_email: userEmail,
                amount: amountToPay,
                customer_phone: phone,
                currency: "NGN",
                txref: "rave-123456",
                meta: [{
                    metaname: "flightID",
                    metavalue: "AP1234"
                }],
                onclose: function() {},
                callback: function(response) {
                    var txref = response.tx.txRef; // collect txRef returned and pass to a server page to complete status check.
                    console.log("This is the response returned after a charge", response);
                    if (
                        response.tx.chargeResponseCode == "00" ||
                        response.tx.chargeResponseCode == "0"
                    ) {
                        // redirect to a success page
                        location.href=`success.php?event=purchase&txref=${txref}&network=${network}&amount=${amountToPay}`
                    } else {
                        // redirect to a failure page.
                    }

                    x.close(); // use this to close the modal immediately after payment.
                }
            });
        }
    </script>
    <script src="assets/js/script49f7.js"></script>
    <script src="assets/js/toastr.examples49f7.js"></script>

</body>

</html>