<?php 
    include 'includes/header.php'; 
    include("../core/connection.php");

    $filtre = " WHERE durum = 1 ";
    if (isset($_GET['kategoriler'])) {
        $secim = array_map('intval', $_GET['kategoriler']);
        $secim_yolu = implode(",", $secim);
        $filtre .= " AND kategori_id IN ($secim_yolu)";
    }

    $sql3 = "SELECT COUNT(id) AS total FROM urunler" . $filtre;
    $query_result = mysqli_query($conn, $sql3);
    $row = mysqli_fetch_assoc($query_result);
    $total_rows = $row['total'];

    $results_per_page = 9;
    $totalPages = ceil($total_rows / $results_per_page);

    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    if($page < 1) $page = 1;
    if($page > $totalPages && $totalPages > 0) $page = $totalPages;

    $start_from = ($page - 1) * $results_per_page;

    $sql = "SELECT urunler.*, kategoriler.kategori_adi
            FROM urunler
            LEFT JOIN kategoriler ON urunler.kategori_id = kategoriler.id " 
            . $filtre . 
            " LIMIT $start_from, $results_per_page";

    $result = mysqli_query($conn, $sql);

    $sql2 = "SELECT * FROM kategoriler";
    $result2 = mysqli_query($conn, $sql2);
?>


    <section class="page-header">
        <div class="text-center">
            <h1 class="display-5 fw-bold text-white">Arama Sonuçları</h1>
        </div>
    </section>

    <div class="container-xl pb-5">
        <div class="row">
            
            <div class="col-lg-3 mb-4">
                <div class="sidebar-card p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3 pb-2 border-bottom border-secondary border-opacity-25">
                        <h5 class="fw-bold text-white m-0">Filtrele</h5>
                    </div>

                    

                    <form action="" method="get">
                        <div class="mb-4">
                            <h6 class="text-white-50 text-uppercase small fw-bold mb-3">Kategoriler</h6>
                    <?php
                        if (mysqli_num_rows($result2) > 0){
                            while($row2 = mysqli_fetch_assoc($result2)){
                                $checked = "";
                                if(isset($_GET['kategoriler']) && in_array($row2['id'], $_GET['kategoriler'])){
                                    $checked = "checked";
                                }
                     ?>

                            <div class="form-check mb-2">
                                <input name="kategoriler[]" value ="<?php echo $row2['id']?>" class="form-check-input bg-dark border-secondary" type="checkbox" id="cat1" <?php echo $checked; ?>>
                                <label class="form-check-label" for="cat1"><?php echo $row2['kategori_adi']?></label>
                            </div>
                            <?php
                    }
                }
                ?>                        
                        </div>
                    <button type="submit" class="btn btn-gold w-100 py-2">Uygula</button>
                    </form>
                </div>
            </div>

            <div class="col-lg-9">
                
                <div class="d-flex justify-content-between align-items-center mb-4 p-3 rounded sidebar-card">                    
                </div>

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-5">
                    

                <?php
                if (mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                            <div class="col">
                        <div class="product-card">
                            <div class="card-img-wrapper">
                                <span class="position-absolute top-0 end-0 m-2 badge bg-danger">Popüler</span>
                                <img src="<?php echo $row['resim_yolu']?>" class="card-img-top">
                            </div>
                            <div class="p-4 d-flex flex-column flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <h5 class="fw-bold text-white mb-0"><?php echo $row['urun_adi']?></h5>
                                    <span class="text-warning fw-bold fs-5"><?php echo $row['fiyat']?> ₺</span>
                                </div>
                                <p class="text-muted small mb-4 flex-grow-1"><?php echo $row['aciklama']?></p>
                            </div>
                        </div>
                    </div>
                        <?php

                    }
                }


                ?>
                    

                    
                </div>
                
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        
                        <?php 
                        $kategoriPrm = "";
                        if(isset($_GET['kategoriler'])){
                            foreach($_GET['kategoriler'] as $cat_id){
                                $kategoriPrm .= "&kategoriler[]=" . intval($cat_id);
                            }
                        }

                        for ($i = 1; $i <= $totalPages; $i++): ?>
                            <li class="page-item <?php echo ($page == $i) ? 'active' : ''; ?>">
                                <a class="page-link" href="?page=<?php echo $i . $kategoriPrm; ?>">
                                    <?php echo $i; ?>
                                </a>
                            </li>
                        <?php endfor; ?>

                    </ul>
                </nav>

            </div>
        </div>
    </div>

<?php include 'includes/footer.php';
      mysqli_close($conn);   ?>