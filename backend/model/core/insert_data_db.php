<?php
    include( dirname(__FILE__) . "/connection_db.php");

    $connect = mysqli_connect($servername, $user, $password, $dbname);

    if (!$connect) {
      die("Connection failed:\r\n " . mysqli_connect_error() );
    } else {
      echo "Connection Sucess\r\n";
    }

    $hour = time();
    $transaction = 2;
    $sql = "INSERT INTO cronlog (hour,transaction) values ($hour,$transaction);";

    if(mysqli_query($connect,$sql)){
      echo "One row inserted\r\n";
    } else {
      echo "Error insert\r\n" .  mysqli_error($connect);
    };

    mysqli_close($connect);
?>
