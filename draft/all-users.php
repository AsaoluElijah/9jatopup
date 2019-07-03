<?php
    require('p_connection.php');
    $query = "SELECT * FROM user ORDER BY id DESC ";
    $result = mysqli_query($connection,$query);
?>
<!DOCTYPE html>
<html>
<head>
</head>

<body class="page-user">
    <?php
        require('admin-header.php');
    ?>
    <div class="page-content">
        <div class="container">
            <div class="card content-area">
                <div class="card-innr">
                    <div class="card-head">
                        <h4 class="card-title">All Users</h4>
                    </div>
                    <table class="data-table dt-init user-list">
                        <thead>
                            <tr class="data-item data-head">
                                <th class="data-col dt-user">User</th>
                                <th class="data-col dt-email">Email</th>
                                <th class="data-col dt-token">Tokens</th>
                                <th class="data-col dt-verify">User Status</th>
                                <th class="data-col dt-verify"> Wallet</th>
                                <!-- <th class="data-col dt-login">Registered Date</th> -->
                                <th class="data-col dt-status">Fund User</th>
                                <th class="data-col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while($row = mysqli_fetch_array($result)){
                            ?>
                            <tr class="data-item">
                                <td class="data-col dt-user"><span class="lead user-name"><?php echo $row['name']; ?></span><span
                                        class="sub user-id">User No. <?php echo $row['id']; ?></span></td>
                                <td class="data-col dt-email">
                                    <span class="sub sub-s2 sub-email"><?php echo $row['email']; ?></span>
                                </td>
                                <td class="data-col dt-token">
                                    <span class="lead lead-btoken"><?php echo $row['amount'].".00"; ?></span>
                                </td>
                                <td class="data-col dt-verify">
                                    <ul class="data-vr-list">
                                        <li>
                                            <div class="data-state data-state-sm data-state-approved"></div> Active
                                        </li>
                                    </ul>
                                </td>
                                <td class="data-col dt-login">
                                    <span class="sub sub-s2 sub-time"><?php echo $row['wallet']; ?></span>
                                </td>
                                <!-- <td class="data-col dt-login">
                                    <span class="sub sub-s2 sub-time"><?php echo $row['registeredDate']; ?></span>
                                </td> -->
                                <td class="data-col dt-status"><a href="admin-send.php?wallet=<?php echo $row['wallet']; ?>" class="btn btn-auto btn-primary btn-xs"><span>Fund <span
                                                                class="d-none d-xl-inline-block">Now</span></span><em
                                                            class="ti ti-wallet"></em></a>
                                </td>
                            </tr><!-- .data-item -->
                                <?php } ?>
                        </tbody>
                    </table>
                </div><!-- .card-innr -->
            </div><!-- .card -->
        </div><!-- .container -->
    </div><!-- .page-content -->
    <div class="footer-bar">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8">
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>welcome
                        <li><a href="faq-page.html">Dashboard</a></li>
                        <li><a href="regular-page.html">Privacy Policy</a></li>
                        <li><a href="regular-page.html">Terms of Condition</a></li>
                    </ul>
                </div><!-- .col -->
                <div class="col-md-4 mt-2 mt-sm-0">
                    <div
                        class="d-flex justify-content-between justify-content-md-end align-items-center guttar-25px pdt-0-5x pdb-0-5x">
                        <div class="copyright-text">&copy; 2019 9jatopup.</div>
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
<!-- Mirrored from demo.themenio.com/tokenwiz/transactions.html by HTTrack Website Copier/3.x [XR&CO'2017], Thu, 09 May 2019 11:28:56 GMT -->

</html>