<?php

    include( dirname(__FILE__) . "/connection_db.php");

    $connect = mysqli_connect($servername, $user, $password);

    if (!$connect) {
      die("Connection failed: " . mysqli_connect_error() );
    } else {
      echo "Connection Sucess";
    }

    $sql = "CREATE DATABASE myDB";
    
    if(mysqli_query($connect,$sql)){
      echo "Success";
    } else {
      echo "Error insert" + mysqli_error($connect);
    };


    mysqli_close($connect);



    //echo $poloniex =  file_get_contents("https://poloniex.com/public?command=returnTicker");

?>
