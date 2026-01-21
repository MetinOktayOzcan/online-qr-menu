<?php
$db_server = "localhost";
$db_user   = "root";
$db_pass   = "";
$db_name   = "online-qr-men";
$conn      = "";

try {
    $conn = mysqli_connect($db_server, $db_user, $db_pass);
    mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS `$db_name` CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci");
    mysqli_select_db($conn, $db_name);
    mysqli_set_charset($conn, "utf8mb4");
} catch(mysqli_sql_exception $e) {
    echo "Veritabanı Hatası: " . $e->getMessage();
}
?>