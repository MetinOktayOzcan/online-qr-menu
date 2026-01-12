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
                                <option value="" selected disabled>Kategori Seçin...</option>
                                <option value="1">Burgerler</option>
                                <option value="2">İçecekler</option>
                                <option value="3">Tatlılar</option>
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
                            <input type="file" name="resim" class="form-control bg-black text-white border-secondary">
                        </div>

                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-3">
                        <a href="admin.php?sayfa=inventory" class="btn btn-secondary">İptal</a>
                        <button type="submit" class="btn btn-warning fw-bold text-dark">Kaydet</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>