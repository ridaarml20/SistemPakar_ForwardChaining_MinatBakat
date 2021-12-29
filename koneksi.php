<?php
$dbhost = 'localhost'; 
$dbuser = 'root';
$dbpass = '';
$dbname = 'minatdanbakat';

$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('koneksi gagal');
?>