<?php

$host = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'webproject';
$port = '8889';

$connection = mysqli_connect($host, $username, $password, $dbname, $port);
if($connection){

} else {
    echo 'Database not connected';
}

?>