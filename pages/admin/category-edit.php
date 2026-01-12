

<div class="container-fluid pt-4 px-4">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            
            <div class="bg-dark border border-secondary rounded p-4">
                <h4 class="text-white mb-4">
                    <span class="material-symbols-outlined align-middle text-info me-2">edit_note</span>
                    Kategoriyi Düzenle
                </h4>
                
                <form action="" method="POST">
                    <div class="mb-3">
                        <label class="form-label text-white-50">Kategori Adı</label>
                        <input type="text" name="kategori_adi" class="form-control bg-black text-white border-secondary" value="Burgerler" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-white-50">Sıralama</label>
                        <input type="number" name="sira" class="form-control bg-black text-white border-secondary" value="1" required>
                    </div>
                    
                    <input type="hidden" name="id" value="">

                    <div class="d-flex justify-content-end gap-2 mt-4">
                        <a href="admin.php?sayfa=category" class="btn btn-secondary">İptal</a>
                        <button type="submit" class="btn btn-info fw-bold text-dark">Güncelle</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>