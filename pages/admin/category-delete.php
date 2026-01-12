<div class="container-fluid pt-4 px-4">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            
            <div class="bg-dark border border-danger rounded p-4 text-center shadow-lg">
                
                <div class="mb-4">
                    <span class="material-symbols-outlined text-danger" style="font-size: 4rem;">folder_delete</span>
                    <h4 class="text-danger mt-2">Kategori Silme İşlemi</h4>
                </div>

                <p class="fs-5 text-white mb-4">Bu kategoriyi silmek istediğinize emin misiniz?</p>

                <div class="card bg-black border border-secondary mx-auto mb-4" style="max-width: 300px;">
                    <div class="card-body p-4">
                        <div class="d-inline-block p-3 rounded-circle bg-dark border border-secondary mb-3">
                            <span class="material-symbols-outlined text-warning fs-1">category</span>
                        </div>
                        <h3 class="text-white mb-1">Burgerler</h3>
                        <div class="badge bg-secondary text-white-50">Sıralama: 1</div>
                    </div>
                </div>

                <div class="alert alert-dark border border-secondary text-white-50 small text-start">
                    <span class="text-danger fw-bold fs-6">
                        <span class="material-symbols-outlined align-middle fs-5 me-1">error</span>
                        KRİTİK UYARI:
                    </span> 
                    Bu kategori silindiğinde, <u>kategoriye bağlı tüm ürünler</u> de silinebilir veya menüde görünmez hale gelebilir. Bu işlem geri alınamaz!
                </div>
                
                <form action="" method="POST">
                    <input type="hidden" name="id" value="1">
                    
                    <div class="d-flex justify-content-center gap-3 mt-4">
                        <a href="admin.php?sayfa=category" class="btn btn-secondary px-4 py-2">
                            Vazgeç
                        </a>

                        <button type="submit" class="btn btn-danger px-4 py-2 fw-bold">
                            <span class="material-symbols-outlined align-middle fs-5 me-1">delete</span>
                            Evet, Sil
                        </button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>  