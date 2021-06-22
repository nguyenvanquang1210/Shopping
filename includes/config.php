<?php

$conn_string = "host=ec2-3-226-134-153.compute-1.amazonaws.com

"
        . " port=5432 dbname=dc3d9vo0l807ha"
        . " user=oefxutdewjgfjs"
        . " password=f31c52d869f031eaee254a653fa6915eff1254cfdd1411fc1d16ed5c5b5502cd";
$db = pg_connect($conn_string);
//connect to a database named "test" on the host "sheep" with a username and password
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully quang\n";
   }
?>