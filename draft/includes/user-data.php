<?php
    session_start();
    $host = "localhost:3306";
    $username = "topupcom_admin";
    $password = "asaoluelijah7@gmail.com";
    $dbName = "topupcom_9jatopup";
    $connection = new mysqli($host,$username,$password,$dbName);

    if (isset($_SESSION['email'])) {
        
        $email = $_SESSION['email'];
        $query = "SELECT * FROM user WHERE email = '{$email}'";
        $result = $connection->query($query);
        $row = $result->fetch_array();

        $userId = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $wallet = $row['wallet'];
        $user_amount = $row['amount'];
        $verified = $row['verified'];
        // echo $userId;

    }else{
        echo "<script>location.href = 'sign-in.php' </script>";
    }
?>