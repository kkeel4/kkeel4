<?php
$host = "localhost";
$username ="root";
$password = "kampus";
$sdname = "kampus";

$con = new mysqli($host, $username, $password, $sdname);

if ($con connect_error) {
    die("koneksi_gagal;" . $conn connect_error);
    
}