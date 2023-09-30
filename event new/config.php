<?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "event_db";
 $connection = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $connection -> error);
 

   
?>