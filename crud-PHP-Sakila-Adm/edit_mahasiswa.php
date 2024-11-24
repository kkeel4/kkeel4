<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM mahasiswa WHERE id=$id";
$result = $conn->query($sql);
$data = $result->fetch_assoc();

?>
