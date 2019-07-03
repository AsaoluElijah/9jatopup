<?php
    require('includes/user-data.php');
    require('includes/app.php');
    $ap = new App;
    $a = $ap->deduct(100,$userId);
    echo $a;
?>