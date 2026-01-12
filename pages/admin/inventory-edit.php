

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
                            <input type="text" name="urun_adi" class="form-control bg-black text-white border-secondary" value="Cheeseburger">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label text-white-50">Fiyat (₺)</label>
                            <input type="number" step="0.01" name="fiyat" class="form-control bg-black text-white border-secondary" value="280.00">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label text-white-50">Kategori</label>
                            <select name="kategori_id" class="form-select bg-black text-white border-secondary">
                                <option value="1" selected>Burgerler</option>
                                <option value="2">İçecekler</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label text-white-50">Durum</label>
                            <select name="durum" class="form-select bg-black text-white border-secondary">
                                <option value="1" selected>Aktif</option>
                                <option value="0">Pasif</option>
                            </select>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label text-white-50">Ürün Açıklaması</label>
                            <textarea name="aciklama" class="form-control bg-black text-white border-secondary" rows="3">120gr dana eti, özel sos ve turşu ile.</textarea>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label text-white-50 d-block">Mevcut Görsel</label>
                            <div class="bg-secondary rounded d-flex align-items-center justify-content-center text-white mb-2" style="width: 80px; height: 80px;">
                                <span class="material-symbols-outlined fs-3">image</span>
                            </div>
                            <input type="file" name="resim" class="form-control bg-black text-white border-secondary">
                            <div class="form-text text-muted">Sadece resmi değiştirmek istiyorsanız yeni dosya seçin.</div>
                        </div>

                    </div>

                    <input type="hidden" name="id" value="">

                    <div class="d-flex justify-content-end gap-2 mt-3">
                        <a href="admin.php?sayfa=inventory" class="btn btn-secondary">İptal</a>
                        <button type="submit" class="btn btn-info fw-bold text-dark">Güncelle</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>