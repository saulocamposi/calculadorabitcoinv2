<?php

$path = dirname(__FILE__);
$cron = $path . "/test_service.php";
echo $cron;


echo exec("* * * * * php -q ".$cron." &> /dev/null");

 ?>
