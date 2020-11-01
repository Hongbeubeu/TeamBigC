<?php

$server = '35.192.204.170';
 $user = 'letuan';
 $pass = 'Technology@123';
 $mydb = 'lab04';
 $table_name = 'Products';

 $connect = mysqli_connect($server, $user, $pass);

 if(!$connect){
    die ("Cannot connect to $server using $user");
} 
mysqli_select_db($connect, $mydb);
?>