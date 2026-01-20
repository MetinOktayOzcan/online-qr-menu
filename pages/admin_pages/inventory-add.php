<?php

if (isset($_POST['submit'])) {
    
    $kategori_id= mysqli_real_escape_string($conn, $_POST['kategori_id']);
    $urun_adi= mysqli_real_escape_string($conn, $_POST['urun_adi']);
    $aciklama= mysqli_real_escape_string($conn, $_POST['aciklama']);
    $fiyat= mysqli_real_escape_string($conn, $_POST['fiyat']);
    $durum= mysqli_real_escape_string($conn, $_POST['durum']);

    $resim_yolu = ""; 
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

    $sql = "INSERT INTO `urunler` (`kategori_id`, `urun_adi`, `aciklama`, `fiyat`, `resim_yolu`, `durum`) 
            VALUES ('$kategori_id', '$urun_adi', '$aciklama', '$fiyat', '$resim_yolu', '$durum')";
    
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "Hata: " . mysqli_error($conn);
    }

    echo "<script>
            window.location.href = 'admin?sayfa=inventory';
        </script>";
}
?>


<div class="container-fluid pt-4 px-4">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-8">
            
            <div class="bg-dark border border-secondary rounded p-4">
                <h4 class="text-white mb-4">
                    <span class="material-symbols-outlined align-middle text-warning me-2">add_circle</span>
                    Yeni Ürün Ekle
                </h4>
                
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-white-50">Ürün Adı</label>
                            <input type="text" name="urun_adi" class="form-control bg-black text-white border-secondary" placeholder="Örn: Double Burger" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label text-white-50">Fiyat (₺)</label>
                            <input type="number" step="0.01" name="fiyat" class="form-control bg-black text-white border-secondary" placeholder="0.00" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label text-white-50">Kategori</label>
                            <select name="kategori_id" class="form-select bg-black text-white border-secondary">
                                <?php

                            $sql = "SELECT * FROM kategoriler"; 

                            $resuld2 = mysqli_query($conn,$sql);

                            while ($row2 = mysqli_fetch_assoc($resuld2)){
                                ?>
                                <option value="<?php echo $row2['id'];?>"><?php echo $row2['kategori_adi']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label text-white-50">Durum</label>
                            <select name="durum" class="form-select bg-black text-white border-secondary">
                                <option value="1">Aktif (Menüde Görünsün)</option>
                                <option value="0">Pasif (Gizle)</option>
                            </select>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label text-white-50">Ürün Açıklaması</label>
                            <textarea name="aciklama" class="form-control bg-black text-white border-secondary" rows="3" placeholder="İçindekiler: Köfte, chedar peyniri, turşu..."></textarea>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label text-white-50">Ürün Görseli</label>
                            <input type="file" name="resim_yolu" class="form-control bg-black text-white border-secondary">
                        </div>

                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-3">
                        <a href="admin?sayfa=inventory" class="btn btn-secondary">İptal</a>
                        <button type="submit" name="submit" class="btn btn-warning fw-bold text-dark">Kaydet</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>