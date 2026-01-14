<?php
    include("../core/connection.php");

    $sql1 = "SELECT COUNT(*) as sayi FROM urunler";
    $row1 = mysqli_fetch_assoc(mysqli_query($conn, $sql1));

    $sql2 = "SELECT COUNT(*) as sayi FROM kategoriler";
    $row2 = mysqli_fetch_assoc(mysqli_query($conn, $sql2));

    $sql3 = "SELECT AVG(fiyat) as sayi FROM urunler";
    $row3 = mysqli_fetch_assoc(mysqli_query($conn, $sql3));

    $sql4 = "SELECT COUNT(*) as sayi FROM urunler WHERE durum = 0";
    $row4 = mysqli_fetch_assoc(mysqli_query($conn, $sql4));

    $sql5 = "SELECT * FROM urunler ORDER BY id DESC LIMIT 5";
    $row5 = mysqli_query($conn, $sql5);
?>

<div class="row g-4">
    
    <div class="col-sm-6 col-xl-3">
        <div class="bg-dark border border-secondary rounded d-flex align-items-center justify-content-between p-4 h-100">
            <span class="material-symbols-outlined text-primary" style="font-size: 3rem;">inventory_2</span>
            <div class="ms-3 text-end">
                <p class="mb-2 text-white-50">Toplam Ürün</p>
                <h6 class="mb-0 text-white fs-4"><?php echo $row1['sayi']?></h6> 
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="bg-dark border border-secondary rounded d-flex align-items-center justify-content-between p-4 h-100">
            <span class="material-symbols-outlined text-warning" style="font-size: 3rem;">category</span>
            <div class="ms-3 text-end">
                <p class="mb-2 text-white-50">Toplam Kategori</p>
                <h6 class="mb-0 text-white fs-4"><?php echo $row2['sayi']?></h6>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="bg-dark border border-secondary rounded d-flex align-items-center justify-content-between p-4 h-100">
            <span class="material-symbols-outlined text-success" style="font-size: 3rem;">attach_money</span>
            <div class="ms-3 text-end">
                <p class="mb-2 text-white-50">Ortalama Fiyat</p>
                <h6 class="mb-0 text-white fs-4"><?php echo $row3['sayi']?> ₺</h6>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="bg-dark border border-secondary rounded d-flex align-items-center justify-content-between p-4 h-100">
            <span class="material-symbols-outlined text-danger" style="font-size: 3rem;">visibility_off</span>
            <div class="ms-3 text-end">
                <p class="mb-2 text-white-50">Pasif Ürünler</p>
                <h6 class="mb-0 text-white fs-4"><?php echo $row4['sayi']?></h6>
            </div>
        </div>
    </div>

</div>

<div class="row g-4 mt-1">
    
    <div class="col-sm-12 col-xl-8">
        <div class="bg-dark border border-secondary rounded p-4 h-100">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h6 class="mb-0 text-white">Son Eklenen 5 Ürün</h6>
                <a href="admin.php?sayfa=inventory" class="text-white-50 text-decoration-none small">Tümünü Gör</a>
            </div>
            
            <div class="table-responsive">
                <table class="table table-dark table-hover align-middle mb-0">
                    <thead>
                        <tr class="text-white-50 border-bottom border-secondary">
                            <th scope="col">Ürün Adı</th>
                            <th scope="col">Fiyat</th>
                            <th scope="col">Durum</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                        while ($row = mysqli_fetch_assoc($row5)){
                        ?>
                        <tr>
                            <td class="text-white"><?php echo $row['urun_adi']?></td>
                            <td class="text-warning"><?php echo $row['fiyat']?> ₺</td>
                            <td><span class="badge bg-success"><?php echo $row['durum']?></span></td>
                        </tr>

                        <?php
                         }
                        ?>
                         </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-xl-4">
        <div class="bg-dark border border-secondary rounded p-4 h-100">
            <h6 class="mb-4 text-white">Hızlı İşlemler</h6>
            <div class="d-grid gap-3">
                
                <a href="admin.php?sayfa=inventoryAdd" class="btn btn-outline-warning text-start py-3 px-4">
                    <span class="material-symbols-outlined align-middle me-2">add_circle</span>
                    Yeni Ürün Ekle
                </a>

                <a href="admin.php?sayfa=categoryAdd" class="btn btn-outline-primary text-start py-3 px-4">
                    <span class="material-symbols-outlined align-middle me-2">category</span>
                    Yeni Kategori Ekle
                </a>

                <a href="home.php" target="_blank" class="btn btn-outline-success text-start py-3 px-4">
                    <span class="material-symbols-outlined align-middle me-2">public</span>
                    Menü Sayfasına Git
                </a>

            </div>
        </div>
    </div>

</div>