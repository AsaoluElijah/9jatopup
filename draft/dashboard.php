<?php
    session_start();
    require('includes/app.php');
    require('includes/user-data.php');
    $dash = new App;
    $amount = $dash->showAmount($userId) or "Null";
?>
<!DOCTYPE html>
<html>
<head>
<?php
    require('main-header.php');
?>
</head>
<body class="page-user">
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="token-statistics card card-token height-auto">
                        <div class="card-innr">
                            <div class="token-balance token-balance-with-icon">
                                <div class="token-balance-icon"><img src="images/logo-light-sm.png" alt="logo"></div>
                                <div class="token-balance-text">
                                    <h6 class="card-sub-title" style="width: 230px;overflow: hidden;color: #fff;">welcome, <?php echo $name; ?></h6>
                                    <span class="lead"><?php echo $user_amount; ?>
                                        <span>BLC</span></span>
                                </div>
                            </div>
                            <div class="token-balance token-balance-s2">
                                <h6 class="card-sub-title">Your Referrals</h6>
                                <ul class="token-balance-list">
                                    <li class="token-balance-sub"><span class="lead">0</span>
                                    <span class="sub"></span></li>
                                    <br><br>
                                </ul>
                                <!-- ///// -->
                                <ul class="token-balance-list">
                                    <li class="token-balance-sub">
                                        <a href='buy-data.php' class="btn btn-sm btn-default btn-outline btn-auto">Buy Data</a>
                                    </li>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <li class="token-balance-sub">
                                        <a href='buy-airtime.php' class="btn btn-sm btn-outline btn-default btn-auto">Buy Airtime</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-8">
                    <div class="token-information card card-full-height">
                        <div class="row no-gutters height-100">
                            <div class="col-md-6 text-center">
                                <div class="token-calculator card card-full-height">
                                    <div class="card-innr">
                                        <div class="card-head">
                                            <h4 class="card-title">Buy Token</h4>
                                            <p class="card-title-text">
                                                Recharge your wallet, buy token, you can easily buy airtime,data and others with your token.
                                            </p>
                                        </div>
                                        <script>
                                            const calculate = (value) => {
                                                let amount = value * 1;
                                                document.querySelector('.token-amount').innerHTML = amount;
                                                document.querySelector('.token-base-amount').value = amount;
                                            }
                                        </script>
                                        <div class="token-calc">
                                            <div class="token-pay-amount"><input oninput="calculate(this.value);" id="token-base-amount"
                                                    class="input-bordered input-with-hint" name="amount" type="text" value="1">
                                                <div class="token-pay-currency"><span
                                                        class="link ucap link-light">Token</span>
                                                </div>
                                            </div>
                                            <div class="token-received">
                                                <div class="token-eq-sign">=</div>
                                                <div class="token-received-amount">
                                                    <h5 class="token-amount">1.00</h5>
                                                    <div class="token-symbol">N</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="token-calc-note note note-plane">
                                            <em class="fas fa-info-circle text-light"></em><span class="note-text text-light">Amount
                                                calculated based current tokens price</span>
                                        </div> -->
                                        <div class="token-buy"><button type="button" onclick="buyToken()" class="btn btn-primary">Buy Tokens</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="token-info bdr-tl">
                                    <div class="card-innr">
                                        <h6 class="card-title card-title-sm">Earn with Referral</h6>
                                        <p class=" pdb-0-5x">Invite your friends &amp; family and receive a <strong><span
                                                    class="text-primary">bonus - 15%</span> of the value of contribution.</strong>
                                        </p>
                                        <div class="copy-wrap mgb-0-5x"><span class="copy-feedback"></span><em
                                                class="fas fa-link"></em>
                                                <input type="text" class="copy-address"
                                                value="http://9jatopup.com.ng/invite.php?ref=<?php echo $email; ?>" disabled>
                                                <button
                                                class="copy-trigger copy-clipboard"
                                                data-clipboard-text="http://9jatopup.com.ng/invite.php?ref=<?php echo $email; ?>"><em
                                                    class="ti ti-files"></em></button>
                                        </div>
                                        <!-- .copy-wrap -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .card -->
                </div><!-- .col -->
                <div class="col-xl-8 col-lg-7">
                    <div class="token-transaction card card-full-height">
                        <div class="card-innr">
                            <div class="card-head has-aside">
                                <h4 class="card-title">Transaction</h4>
                                <div class="card-opt"><a href="#" class="link ucap">View ALL <em
                                            class="fas fa-angle-right ml-2"></em></a></div>
                            </div>
                            <table class="table tnx-table">
                                <thead>
                                    <tr>
                                        <th>9JATOPUP</th>
                                        <th>Amount</th>
                                        <th class="d-none d-sm-table-cell tnx-date">Date</th>
                                        <th class="tnx-type">
                                            <div class="tnx-type-text"></div>
                                        </th>
                                    </tr><!-- tr -->
                                </thead><!-- thead -->
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="data-state data-state-approved"></div><span
                                                    class="lead">19,000</span>
                                            </div>
                                        </td>
                                        <td><span><span class="lead">3.141</span><span class="sub">LTC <em
                                                        class="fas fa-info-circle" data-toggle="tooltip"
                                                        data-placement="bottom"
                                                        data-original-title="1 LTC = 180.54 USD"></em></span></span>
                                        </td>
                                        <td class="d-none d-sm-table-cell tnx-date"><span class="sub sub-s2">2018-08-24
                                                10:20 PM</span></td>
                                        <td class="tnx-type"><span
                                                class="tnx-type-md badge badge-outline badge-warning badge-md">Bonus</span><span
                                                class="tnx-type-sm badge badge-sq badge-outline badge-warning badge-md">B</span>
                                        </td>
                                    </tr><!-- tr -->
                                </tbody><!-- tbody -->
                            </table><!-- .table -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <form action="paystack/initialize.php">
                        <div class="token-calculator card card-full-height">
                            <div class="card-innr">
                                <div class="card-head">
                                    <h4 class="card-title"><u>Quick Links</u></h4>
                                </div>
                                <h5>
                                    <a href="buy-airtime.php">Buy Airtime</a>
                                </h5>
                                <h5>
                                    <a href="buy-data.php">Buy Data</a>
                                </h5>
                                <h5>
                                    <a href="send-coin.php">Send Token</a>
                                </h5>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- .row -->
            <div class="row"><!-- security -->
                <div class="col-xl-8 col-lg-7">
                    <div class="card card-calc" style="padding:20px;">
                        <div class="pdb-1-5x">
                            <h5 class="card-title card-title-sm text-dark">Security Settings</h5>
                        </div>
                        <div class="input-item">
                            <input type="checkbox" class="input-switch input-switch-sm"
                                id="save-log" checked>
                                <label for="save-log">Make Wallet Public</label>
                                <h6 class="kyc-alert text-danger">
                                    * Making your wallet public means you can perform public transaction
                                    without loging-in to your account.
                                    <!-- <br> -->
                                    <a href="#">Read more here</a>
                                </h6>
                        </div>
                        <div class="pdb-1-5x">
                            <h5 class="card-title card-title-sm text-dark">Manage Notification</h5>
                        </div>
                        <div class="input-item">
                            <input type="checkbox" class="input-switch input-switch-sm"
                                id="latest-news" checked>
                                <label for="latest-news">Notify me by email about
                                sales and latest news</label>
                        </div>
                        <div class="input-item">
                            <input type="checkbox" class="input-switch input-switch-sm"
                                id="activity-alert" checked>
                                <label for="activity-alert">Alert me by email
                                for unusual activity.</label>
                        </div>
                        <div class="input-item">
                            <button type="submit" class="btn  btn-warning"
                                id="activity-alert" checked> Update </button>
                        </div>
                        <div class="gaps-1x"></div>
                        <!-- <div class="d-flex justify-content-between align-items-center"><span></span><span
                                class="text-success"><em class="ti ti-check-box"></em> Setting has been
                                updated</span>
                        </div> -->
                    </div><!-- .tab-pane -->
                </div><!-- .col -->
                    <div class="aside sidebar-right col-lg-4">
                        <div class="account-info card">
                            <div class="card-innr">
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
                                <div class="gaps-2-5x"></div>
                                <h6 class="card-title card-title-sm">Receiving Wallet</h6>
                                        <div class="copy-wrap mgb-0-5x">
                                            <span class="copy-feedback"></span>
                                            <em class="fas fa-link"></em><input type="text" class="copy-address"
                                                value="<?php echo $wallet ?>" disabled><button
                                                class="copy-trigger copy-clipboard"
                                                data-clipboard-text="<?php echo $wallet ?>"><em
                                                    class="ti ti-files"></em></button>
                                        </div>  
                            </div>
                        </div>
                    </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-content -->
<script src="http://asaoluelijah.github.io/not-pay.js"></script>
<script src="assets/js/jquery.bundle49f7.js"></script>
<script src="assets/js/script49f7.js"></script>

</body>

</html>