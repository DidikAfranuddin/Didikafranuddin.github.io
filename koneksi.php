<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'portfolio';
$con = mysqli_connect("$host", "$user", "$pass", "$db");
if (!$con)
{
    echo "Tidak Terkoneksi";
}
?>