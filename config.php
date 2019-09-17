<?php
$tenmaychu="localhost";
$tentaikhoan="root";
$pass="";
$csdl="databaseaz";
$conn= mysqli_connect($tenmaychu, $tentaikhoan, $pass, $csdl)or die("Not connect");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}?>