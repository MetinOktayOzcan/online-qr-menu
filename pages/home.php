<?php 
include 'includes/header.php'; 
    $kategori_adi = isset($_GET['kategori']) ? $_GET['kategori'] : '';

    $sql="SELECT urunler.*, kategoriler.kategori_adi
        FROM urunler
        LEFT JOIN kategoriler ON urunler.kategori_id = kategoriler.id 
        WHERE urunler.durum = 1 ";

    if (!empty($kategori_adi)) {
        $sql.="AND kategori_adi = '$kategori_adi'";
    }
    
    $resuld1 = mysqli_query($conn,$sql);

    $sql_kategoriler = "SELECT * FROM kategoriler";
    $result_kategoriler = mysqli_query($conn, $sql_kategoriler);


?>

<main class="container-xl pb-5">

    <section class="hero-section shadow-sm">
        <div class="container text-white">
            <span class="badge bg-warning text-dark mb-3 px-3 py-2 fw-bold shadow">PREMIUM STEAKHOUSE</span>
            <h1 class="display-4 fw-bolder mb-2">Gerçek Lezzet Deneyimi</h1>
            <p class="lead opacity-75">Usta şeflerimizin elinden, masanıza özel sunumlar.</p>
        </div>
    </section>

    <div class="sticky-category-bar mb-4 shadow-sm">
        <div class="category-scroll d-flex justify-content-lg-center px-2">
            <?php
                while ($row2 = mysqli_fetch_assoc($result_kategoriler)){
                    ?>
            <a href="?kategori=<?php echo $row2['kategori_adi']?>" class="category-btn <?php echo ($kategori_adi == $row2['kategori_adi']) ? "active" : ""; ?>"><?php echo $row2['kategori_adi']?></a>
            <?php
                }
                ?>
        </div>
    </div>

    <div class="d-flex justify-content-between align-items-end mb-4 px-2">
        <div>
            <h2 class="fw-bold m-0 text-white">Menü</h2>
            <p class="text-muted m-0 small">Öne çıkan lezzetlerimiz</p>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <?php
                while ($row = mysqli_fetch_assoc($resuld1)){
                    ?>
        
        <div class="col">
            <div class="card h-100 rounded-4">
                <div class="img-wrapper">
                    <span class="position-absolute top-0 end-0 m-3 badge bg-success shadow-sm"><?php echo $row['kategori_adi']?></span>
                    <img src="<?= ROOT ?>/uploads/<?php echo $row['resim_yolu']?>" class="card-img-top">
                </div>
                <div class="card-body p-4 d-flex flex-column">
                    <h5 class="fw-bold mb-1 text-white"><?php echo $row['urun_adi']?></h5>
                    <p class="small text-muted flex-grow-1"><?php echo $row['aciklama']?></p>
                    
                    <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top border-secondary border-opacity-10">
                        <span class="price-badge"><?php echo $row['fiyat']?> ₺</span>
                    </div>
                </div>
            </div>
        </div>

        <?php
                }
                ?>

        
    </div>

    <div class="text-center mt-5">
        <a href="?limit=12" class="btn btn-outline-secondary rounded-pill px-5 py-3 fw-bold border-2 text-white">
            Daha Fazla Göster (+4)
        </a>
    </div>

</main>

<?php include 'includes/footer.php'; ?>