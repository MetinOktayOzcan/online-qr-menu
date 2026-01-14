<?php
    include("../core/connection.php");
    $gelen_id = (int)$_GET['id'];
    $sql = "SELECT * FROM urunler WHERE id = $gelen_id"; 

    $resuld = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($resuld);


if (isset($_POST['submit'])) {
    
    $kategori_id= mysqli_real_escape_string($conn, $_POST['kategori_id']);
    $urun_adi= mysqli_real_escape_string($conn, $_POST['urun_adi']);
    $aciklama= mysqli_real_escape_string($conn, $_POST['aciklama']);
    $fiyat= mysqli_real_escape_string($conn, $_POST['fiyat']);
    $durum= mysqli_real_escape_string($conn, $_POST['durum']);

    $resim_yolu = $row['resim_yolu'];
    if (isset($_FILES['resim_yolu']) && $_FILES['resim_yolu']['error'] == 0) {
        $upload_dir = "../uploads/";
        
        if (!file_exists($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        $dosya_adi = basename($_FILES["resim_yolu"]["name"]);
        $hedef_dosya = $upload_dir . time() . "_" . $dosya_adi;

        if (move_uploaded_file($_FILES["resim_yolu"]["tmp_name"], $hedef_dosya)) {
            $resim_yolu = $hedef_dosya;
        }
    }

    $sql = "UPDATE urunler SET kategori_id='$kategori_id',urun_adi='$urun_adi',
    aciklama='$aciklama',fiyat='$fiyat',resim_yolu='$resim_yolu',durum='$durum' WHERE id=$gelen_id";
    
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "Hata: " . mysqli_error($conn);
    }

    echo "<script>
            window.location.href = 'admin.php?sayfa=inventory';
        </script>";
}
?>

<div class="container-fluid pt-4 px-4">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-8">
            
            <div class="bg-dark border border-secondary rounded p-4">
                <h4 class="text-white mb-4">
                    <span class="material-symbols-outlined align-middle text-info me-2">edit_note</span>
                    Ürünü Düzenle
                </h4>
                
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-white-50">Ürün Adı</label>
                            <input type="text" name="urun_adi" class="form-control bg-black text-white border-secondary" value="<?php echo $row['urun_adi']; ?>">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label text-white-50">Fiyat (₺)</label>
                            <input type="number" step="0.01" name="fiyat" class="form-control bg-black text-white border-secondary" value="<?php echo $row['fiyat']; ?>">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label text-white-50">Kategori</label>
                            <select name="kategori_id" class="form-select bg-black text-white border-secondary">
                            <?php

                            $sql = "SELECT * FROM kategoriler"; 

                            $resuld2 = mysqli_query($conn,$sql);

                            while ($row2 = mysqli_fetch_assoc($resuld2)){
                                ?>
                                <option value="<?php echo $row2['id'];?>" <?php echo ($row2['id'] == $row['kategori_id']) ? "selected" : ""; ?> ><?php echo $row2['kategori_adi']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label text-white-50">Durum</label>
                            <select name="durum" class="form-select bg-black text-white border-secondary">
                                <option value="1" <?php echo ($row['durum'] == 1) ? "selected" : ""; ?>>Aktif</option>
                                <option value="0" <?php echo ($row['durum'] == 0) ? "selected" : ""; ?>>Pasif</option>
                            </select>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label text-white-50">Ürün Açıklaması</label>
                            <textarea name="aciklama" class="form-control bg-black text-white border-secondary" rows="3"><?php echo $row['aciklama']; ?></textarea>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label text-white-50 d-block">Mevcut Görsel</label>
                            <div class="bg-secondary rounded align-items-center justify-content-center d-flex text-white mb-2 overflow-hidden" style="width: 80px; height: 80px;">
                                <?php if (!empty($row['resim_yolu']) && file_exists($row['resim_yolu'])):?>
                                    <img src="<?php echo$row['resim_yolu']; ?>" alt="Ürün Resmi" style="width: 100%; height: 100%; object-fit: cover;">
                                <?php else: ?>
                                    <span class="material-symbols-outlined fs-3">image</span>
                                <?php endif; ?>
                            </div>
                            <input type="file" name="resim_yolu" class="form-control bg-black text-white border-secondary">
                            <div class="form-text text-muted">resmi değiştirmek istiyorsanız yeni dosya seçin.</div>
                        </div>

                    </div>

                    <input type="hidden" name="id" value="">

                    <div class="d-flex justify-content-end gap-2 mt-3">
                        <a href="admin.php?sayfa=inventory" class="btn btn-secondary">İptal</a>
                        <button type="submit" name ="submit" class="btn btn-info fw-bold text-dark">Güncelle</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>