<!DOCTYPE html>
<html>

<head>
    <?php
    require('admin-header.php');
    require('includes/app.php');
    require('p_connection.php');
    

    if (isset($_POST['submit'])) {
        $a = new App;

        $pin = $_POST['pin'];
        $network = $_POST['network'];
        $amount = $_POST['amount'];
        $query = "INSERT INTO $network (price,code) VALUES('{$amount}','{$pin}')";
        $result =  mysqli_query($connection,$query);
        if ($result) {
            echo "<script>alert('Pin Added Successfully')</script>";
        } else {
            echo "<script>alert('Error in adding pin')</script>";
        }
        

    }
    
    ?>
</head>
<body class="page-user">
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="main-content col-lg-8">
                    <div class="content-area card">
                        <div class="card-innr card-innr-fix">
                            <div class="card-head">
                                <h6 class="card-title">Add New Airtime</h6>
                            </div>
                            <div class="gaps-1x"></div>
                            <!-- .gaps -->
                            <form action="#" method="POST">
                                <div class="input-item input-with-label">
                                    <label class="input-item-label text-exlight">
                                        Recharge Pin <sup style="color:red;font-weigth:bolder;">*</sup>
                                    </label>
                                    <!-- Input with inline icon -->
                                    <div class="relative">
                                        <span class="input-icon input-icon-right">
                                            <em class="ti ti-mobile"></em>
                                        </span>
                                        <input required name="pin"  class="input-bordered" type="number" placeholder="Enter recharge pin">
                                    </div>
                                </div>
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
                                </div>
                                <div class="input-item input-with-label">
                                    <label class="input-item-label text-exlight">
                                        Select Price <sup style="color:red;font-weigth:bolder;">*</sup>
                                    </label>
                                    <select name="amount" class="form-control" id='network'>
                                        <option value="100">N100</option>
                                        <option value="200">N200</option>
                                        <option value="500">N500</option>
                                        <option value="1000">N1000</option>
                                    </select>
                                </div>
                                <div>
                                    <button type="submit" id="form-btn" name="submit" class="btn btn-primary">ADD
                                        &nbsp;<span class="icon fas fa-plus"></span>
                                    </button>
                                </div>
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
                                <p>Each member have a unique TWZ referral link to share with friends and family and receive a <strong>bonus - 15% of the value of their contribution</strong>. If any one sign-up with this link, will be added to your referral
                                    program. The referral link may be used during a token sales running.</p>
                            </div>
                            <div class="referral-form">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0 font-bold">Referral URL</h5><a href="#" class="link link-primary link-ucap">See Your referral</a>
                                </div>
                                <div class="copy-wrap mgb-1-5x mgt-1-5x"><span class="copy-feedback"></span><em class="fas fa-link"></em><input type="text" class="copy-address" value="https://demo.themenio.com/tokenwiz?ref=7d264f90653733592" disabled><button class="copy-trigger copy-clipboard"
                                        data-clipboard-text="https://demo.themenio.com/tokenwiz?ref=7d264f90653733592"><em
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
                                        let amount = value * 100;
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
                                            <h5 class="token-amount">100.00</h5>
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
    <script src="assets/js/jquery.bundle49f7.js"></script>
    <script src="assets/js/script49f7.js"></script>
    <script src="assets/js/toastr.examples49f7.js"></script>

</body>

</html>