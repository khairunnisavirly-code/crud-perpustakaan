<?php
define('BASE_URL', '/perpus-php');
date_default_timezone_set('Asia/Jakarta');
$host='localhost'; $db='db_perpustakaan'; $user='root'; $pass='';
try { $pdo=new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4",$user,$pass,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]); }
catch(PDOException $e){ die('Koneksi database gagal. Pastikan MySQL XAMPP aktif dan database sudah diimport.'); }
