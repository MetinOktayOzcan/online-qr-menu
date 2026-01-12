<div class="row g-4">
    
    <div class="col-md-7 col-lg-8">
        <div class="bg-dark border border-secondary rounded p-4 h-100">
            <h4 class="text-white mb-4">
                <span class="material-symbols-outlined align-middle text-warning me-2">qr_code_scanner</span>
                QR Kod Oluşturucu
            </h4>
            
            <form onsubmit="event.preventDefault();"> 
                <div class="mb-4">
                    <label class="form-label text-white-50">Masa Numarası / Adı</label>
                    <div class="input-group">
                        <span class="input-group-text bg-black border-secondary text-secondary">
                            <span class="material-symbols-outlined fs-5">table_restaurant</span>
                        </span>
                        <input type="text" class="form-control bg-black text-white border-secondary" placeholder="Örn: Masa 5 veya Teras-1" value="Masa 1">
                    </div>
                    <div class="form-text text-muted">QR kodun hangi masa için olduğunu belirleyin.</div>
                </div>

                <div class="mb-4">
                    <label class="form-label text-white-50">Menü Linki (URL)</label>
                    <div class="input-group">
                        <span class="input-group-text bg-black border-secondary text-secondary">
                            <span class="material-symbols-outlined fs-5">link</span>
                        </span>
                        <input type="url" class="form-control bg-black text-white border-secondary" value="https://restoraniniz.com/menu" readonly>
                    </div>
                    <div class="form-text text-success">
                        <span class="material-symbols-outlined align-middle fs-6 me-1">check_circle</span>
                        Sistem otomatik olarak menü linkinizi tanımladı.
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6">
                        <label class="form-label text-white-50">QR Rengi</label>
                        <input type="color" class="form-control form-control-color bg-black border-secondary w-100" value="#000000" title="QR Rengini Seç">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-white-50">Arkaplan Rengi</label>
                        <input type="color" class="form-control form-control-color bg-black border-secondary w-100" value="#ffffff" title="Arkaplan Rengini Seç">
                    </div>
                </div>

                <div class="d-grid">
                    <button class="btn btn-warning fw-bold text-dark py-2">
                        <span class="material-symbols-outlined align-middle me-2">refresh</span>
                        Önizlemeyi Güncelle
                    </button>
                </div>

            </form>
        </div>
    </div>

    <div class="col-md-5 col-lg-4">
        <div class="bg-dark border border-secondary rounded p-4 text-center h-100">
            
            <h5 class="text-white-50 mb-4">Canlı Önizleme</h5>

            <div class="bg-white p-3 rounded d-inline-block mb-4 shadow-lg">
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=DemoQR" alt="QR Kod" class="img-fluid" style="width: 200px; height: 200px;">
            </div>

            <h5 class="text-white mb-1">Masa 1</h5>
            <p class="text-white-50 small mb-4">restoraniniz.com/menu?masa=1</p>

            <div class="d-grid gap-2">
                <button class="btn btn-outline-info text-info fw-bold">
                    <span class="material-symbols-outlined align-middle me-2">download</span>
                    PNG Olarak İndir
                </button>
                <button class="btn btn-outline-light fw-bold">
                    <span class="material-symbols-outlined align-middle me-2">print</span>
                    Yazdır
                </button>
            </div>

            <div class="alert alert-dark border border-secondary mt-4 mb-0 text-start">
                <small class="text-white-50">
                    <span class="text-warning fw-bold">* İpucu:</span> QR kodları çıktı alırken "Yüksek Kalite" seçeneğini kullanmanız okuma hızını artırır.
                </small>
            </div>

        </div>
    </div>

</div>