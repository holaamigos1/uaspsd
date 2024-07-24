<?php
$host = 'localhost';
$user = 'k2736510_superuser';
$pass = 'Indomaret321!';
$db = 'k2736510_uaspsd';

$dbconnect = new mysqli("$host", "$user", "$pass", "$db");

if ($dbconnect-> connect_error) {
    echo 'Koneksi gagal -> ' . $dbconnect->connect_error;
}
