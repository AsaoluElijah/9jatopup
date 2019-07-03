<?php
    require('includes/app.php');
    require('includes/user-data.php');

    if (isset($_REQUEST['success'])) {
        $usrWallet = $wallet;
        $amount = $_REQUEST['amount'];
        $deduct = new App;
        $newDe = $deduct->deduct($amount,$usrWallet);

        if ($newDe === true) {
            echo $amount." ". 'has been deducted';
        }else{
            echo  $amount." ". 'has not been deducted';
        }
    }
?>