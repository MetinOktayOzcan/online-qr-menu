<div class="container-fluid pt-4 px-4">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            
            <div class="bg-dark border border-danger rounded p-4 text-center shadow-lg">
                
                <div class="mb-4">
                    <span class="material-symbols-outlined text-danger" style="font-size: 4rem;">warning</span>
                    <h4 class="text-danger mt-2">Ürün Silme İşlemi</h4>
                </div>

                <p class="fs-5 text-white mb-4">Bu ürünü silmek istediğinize emin misiniz?</p>

                <div class="card bg-black border border-secondary mx-auto mb-4" style="max-width: 250px;">
                    <div class="bg-secondary d-flex align-items-center justify-content-center text-white" style="height: 150px;">
                        <span class="material-symbols-outlined fs-1">image</span>
                    </div>
                    <div class="card-body p-2">
                        <h6 class="text-white mb-1">Cheeseburger</h6>
                        <span class="badge bg-warning text-dark">280.00 ₺</span>
                    </div>
                </div>

                <div class="alert alert-dark border border-secondary text-white-50 small">
                    <span class="text-danger fw-bold">* DİKKAT:</span> Bu işlem geri alınamaz. Ürün menüden ve veritabanından tamamen silinecektir!
                </div>
                
                <div class="d-flex justify-content-center gap-3 mt-4">
                    <a href="admin.php?sayfa=inventory" class="btn btn-secondary px-4 py-2">
                        Vazgeç
                    </a>

                    <form action="" method="POST">
                        <input type="hidden" name="id" value="1">
                        <input type="hidden" name="silme_onayi" value="1">
                        
                        <button type="submit" class="btn btn-danger px-4 py-2 fw-bold">
                            <span class="material-symbols-outlined align-middle fs-5 me-1">delete</span>
                            Evet, Sil
                        </button>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>