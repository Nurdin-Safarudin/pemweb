<?php

$DBHOST = 'localhost';
$DBUSER = 'root';
$DBPASSWORD = 'Aburizalif23g#';
$DBNAME = 'pemweb_db';


$db_connect = mysqli_connect($DBHOST,$DBUSER,$DBPASSWORD,$DBNAME);

if(mysqli_connect_errno()){
    echo "failed connect to mysql ".mysqli_connect_error(); 
}

