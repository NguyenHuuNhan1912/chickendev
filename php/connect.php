<?php
     mysqli_report(MYSQLI_REPORT_OFF);
     $servername = 'localhost';
     $username = 'root';
     $password = '';
     $databasename = 'chickendev';
     $connect = @new mysqli($servername, $username, $password, $databasename);
     if($connect->connect_error){
         echo "Connect Error: " . $connect->connect_error;
     }
?>
