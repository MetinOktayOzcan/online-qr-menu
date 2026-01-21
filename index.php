<?php
require_once "core/init.php"; 

$veritabaniTabloKontrol = mysqli_query($conn, "SHOW TABLES LIKE 'ayarlar'");
if (mysqli_num_rows($veritabaniTabloKontrol) == 0) {
    create_tables();
}
  
function url($key=null){
    $arr = explode("/",trim($_GET['url'] ?? "home","/"));
    if (!is_numeric($key)) {
        return  $arr;
    }
    return $arr[$key] ?? "";
    
}
$file = "pages/" . url(0) . ".php";
if (file_exists($file)) {
    require $file;
}else{
    require 'pages/404.php';
}
?>