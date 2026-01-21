<?php
function is_admin()

{

    if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin') {
        return true;
    }

    return false;

}

function create_tables(){

    global $conn;
    global $db_name;



    $sqlYoneticiler = "CREATE TABLE IF NOT EXISTS `yoneticiler` (
                    `id` INT AUTO_INCREMENT PRIMARY KEY,
                    `kullanici_adi` VARCHAR(50) UNIQUE NOT NULL,
                    `eposta` VARCHAR(100) UNIQUE NOT NULL,
                    `sifre` VARCHAR(255) NOT NULL,
                    `rol` ENUM('admin','yetkili') DEFAULT 'admin',
                    `olusturma_tarihi` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                ) ENGINE=InnoDB CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci;
    ";
        
    $sqlKategoriler = "CREATE TABLE IF NOT EXISTS `kategoriler` (
                    `id` INT AUTO_INCREMENT PRIMARY KEY,
                    `kategori_adi` VARCHAR(50) UNIQUE NOT NULL,
                    `sira` INT NOT NULL
                ) ENGINE=InnoDB CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci;";

    $sqlurunler = "CREATE TABLE IF NOT EXISTS `urunler` (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `kategori_id` INT NOT NULL,
        `urun_adi` VARCHAR(150) NOT NULL,
        `aciklama` VARCHAR(255) NOT NULL,
        `fiyat` DECIMAL(10, 2) NOT NULL,
        `resim_yolu` VARCHAR(255) NOT NULL,
        `durum` TINYINT(1) DEFAULT 1 NOT NULL
    ) ENGINE=InnoDB CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci;
    ";

    $sqlayarlar = "CREATE TABLE IF NOT EXISTS `ayarlar` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `restoran_adi` varchar(255) NOT NULL,
    `header_title` varchar(255) DEFAULT NULL,
    `telefon` varchar(50) DEFAULT NULL,
    `instagram` varchar(100) DEFAULT NULL,
    `wifi_sifre` varchar(100) DEFAULT NULL,
    `site_baslik` varchar(255) DEFAULT NULL,
    `slogan` varchar(255) DEFAULT NULL, 
    `footer_yazi` text DEFAULT NULL, 
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ";

        mysqli_select_db($conn, $db_name);
        mysqli_query($conn, $sqlYoneticiler);
        mysqli_query($conn, $sqlKategoriler);
        mysqli_query($conn, $sqlurunler);
        mysqli_query($conn, $sqlayarlar);

    $kontrol1 = mysqli_query($conn, "SELECT id FROM ayarlar LIMIT 1");
    $kontrol2 = mysqli_query($conn, "SELECT id FROM yoneticiler LIMIT 1");

    if (mysqli_num_rows($kontrol1) == 0) {
        $sqlAyarlarInsert = "INSERT INTO `ayarlar` (`id`, `restoran_adi`, `header_title`, `telefon`, `instagram`, `wifi_sifre`, `site_baslik`, `slogan`, `footer_yazi`) VALUES
        (1, 'Lezzet Dünyası', 'Lezzet Dünyası - QR Menü', '0555 123 45 67', 'lezzetdunyasi', 'Wifi1234', 'Hoşgeldiniz', 'Şehrin en iyi lezzetleri', 'Afiyet olsun, yine bekleriz.')";
        mysqli_query($conn, $sqlAyarlarInsert);
    }
    if (mysqli_num_rows($kontrol2) == 0) {
        $sqlAdminInsert = "INSERT INTO `yoneticiler` (`kullanici_adi`, `eposta`, `sifre`, `rol`) VALUES ('admin', 'admin@admin.com', '$2y$10$3NbHrIjQj1qtJJ6fzlsbX.MU20YDb7XNF0/kk4uYp0TLY9NZ2/rza', 'admin')";
        mysqli_query($conn, $sqlAdminInsert);
    }
}
?>