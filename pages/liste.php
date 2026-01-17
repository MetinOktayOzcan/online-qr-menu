<?php 
include 'includes/header.php'; 
include("../core/connection.php");

$sql ="SELECT urunler.*, kategoriler.kategori_adi
            FROM urunler
            LEFT JOIN kategoriler ON urunler.kategori_id = kategoriler.id WHERE durum = 1 ";
$sql2= "SELECT * FROM kategoriler";

if (isset($_GET['kategoriler'])) {
    $seçim = array_map('intval', $_GET['kategoriler']);
    $seçim = implode(",", $seçim);
    $sql .= " AND kategori_id IN ($seçim)";
}

$result =  mysqli_query($conn,$sql);
$result2 =  mysqli_query($conn,$sql2);




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
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Önceki</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Sonraki</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>

<?php include 'includes/footer.php';
      mysqli_close($conn);   ?>