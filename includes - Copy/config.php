<?php

$conn_string = "host=ec2-23-23-128-222.compute-1.amazonaws.com

"
        . " port=5432 dbname=d47v7imb0nb2sm"
        . " user=knzlgkdfpqdipt"
        . " password=718d5af2d1dd47b2a5a25cb4637fc45ef287aed1d2adb2ba823719fb00e7c836";
$db = pg_connect($conn_string);
//connect to a database named "test" on the host "sheep" with a username and password
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully quang\n";
   }s
?>