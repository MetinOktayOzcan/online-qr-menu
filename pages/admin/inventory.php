<?php
    include("../core/connection.php");
    $sql="SELECT urunler.*, kategoriler.kategori_adi
            FROM urunler
            LEFT JOIN kategoriler ON urunler.kategori_id = kategoriler.id";
    
    $resuld1 = mysqli_query($conn,$sql);



?>
<div class="container-fluid pt-4 px-4">
    
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="text-white">Ürün Yönetimi</h3>
        <a href="admin.php?sayfa=inventoryAdd" class="btn btn-warning fw-bold text-dark">
            <span class="material-symbols-outlined align-middle fs-5">add</span> Yeni Ürün
        </a>
    </div>

    <div class="bg-dark border border-secondary rounded p-4">
        <div class="table-responsive">
            <table class="table table-dark table-hover align-middle mb-0">
                <thead>
                    <tr class="text-white-50 border-bottom border-secondary">
                        <th scope="col">Görsel</th>
                        <th scope="col">Ürün Adı</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Fiyat</th>
                        <th scope="col">Durum</th>
                        <th scoFpe="col" class="text-end">İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php
                while ($row = mysqli_fetch_assoc($resuld1)){
                    ?>
                    <tr>
                        <td>
                            <div class="col-12 mb-3">
                            <div class="bg-secondary rounded align-items-center justify-content-center d-flex text-white mb-2 overflow-hidden" style="width: 60px; height: 60px;">
                                <?php if (!empty($row['resim_yolu']) && file_exists($row['resim_yolu'])):?>
                                    <img src="<?php echo$row['resim_yolu']; ?>" alt="Ürün Resmi" style="width: 100%; height: 100%; object-fit: cover;">
                                <?php else: ?>
                                    <span class="material-symbols-outlined fs-3">image</span>
                                <?php endif; ?>
                            </div>
                        </div>
                        </td>
                        <td class="fw-bold text-white"> <?php echo $row['urun_adi']?></td>
                        <td class="text-white-50"><?php echo $row['kategori_adi']?></td>
                        <td class="text-warning fw-bold"><?php echo $row['fiyat']?> ₺</td>
                        <td><span class="badge bg-danger text-white"><?php echo ($row['durum'] == 1) ? "Aktif" : "Pasif"; ?></span></td>
                        <td class="text-end">
                            <a href="admin.php?sayfa=inventoryEdit&id=<?php echo $row['id']?>" class="btn btn-sm btn-outline-info border-0 text-info me-2">
                                <span class="material-symbols-outlined fs-5">edit</span>
                            </a>
                            <a href="admin.php?sayfa=inventoryDelete&id=<?php echo $row['id']?>" class="btn btn-sm btn-outline-danger border-0 text-danger" onclick="return confirm('Silmek istediğine emin misin?')">
                                <span class="material-symbols-outlined fs-5">delete</span>
                            </a>
                        </td>
                    </tr>
                    
                    <?php
                }
                ?>

                
                </tbody>
            </table>
        </div>
    </div>
</div>