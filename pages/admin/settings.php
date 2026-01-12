<div class="container-fluid pt-4 px-4">
    
    <h3 class="text-white mb-4">Site Ayarları</h3>

    <div class="bg-dark border border-secondary rounded p-4">
        
        <ul class="nav nav-tabs border-secondary mb-4" id="ayarlarTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active text-warning fw-bold bg-dark border-secondary border-bottom-0" id="genel-tab" data-bs-toggle="tab" data-bs-target="#genel" type="button" role="tab">
                    <span class="material-symbols-outlined align-middle me-2 fs-6">settings</span>
                    Genel Ayarlar
                </button>
            </li>
            
            <li class="nav-item" role="presentation">
                <button class="nav-link text-white-50 bg-dark border-0" id="metinler-tab" data-bs-toggle="tab" data-bs-target="#metinler" type="button" role="tab">
                    <span class="material-symbols-outlined align-middle me-2 fs-6">edit_document</span>
                    Site Metinleri
                </button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link text-white-50 bg-dark border-0" id="guvenlik-tab" data-bs-toggle="tab" data-bs-target="#guvenlik" type="button" role="tab">
                    <span class="material-symbols-outlined align-middle me-2 fs-6">lock</span>
                    Güvenlik
                </button>
            </li>
        </ul>

        <div class="tab-content" id="ayarlarTabContent">
            
            <div class="tab-pane fade show active" id="genel" role="tabpanel">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-white-50">Restoran Adı</label>
                            <input type="text" class="form-control bg-black text-white border-secondary" value="Lezzet Dünyası">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-white-50">İletişim Numarası</label>
                            <input type="text" class="form-control bg-black text-white border-secondary" value="0555 123 45 67">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-white-50">Instagram Adresi</label>
                            <div class="input-group">
                                <span class="input-group-text bg-black border-secondary text-secondary">@</span>
                                <input type="text" class="form-control bg-black text-white border-secondary" value="lezzetdunyasi">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-white-50">Wifi Şifresi (Müşteriler için)</label>
                            <input type="text" class="form-control bg-black text-white border-secondary" value="Wifi1234">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning fw-bold text-dark mt-3">Genel Ayarları Kaydet</button>
                </form>
            </div>

            <div class="tab-pane fade" id="metinler" role="tabpanel">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label class="form-label text-white-50">Ana Menü Başlığı</label>
                        <input type="text" class="form-control bg-black text-white border-secondary" value="Hoşgeldiniz">
                        <div class="form-text text-muted">Müşteri QR kodu okuttuğunda en üstte yazan büyük yazı.</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-white-50">Slogan / Alt Başlık</label>
                        <input type="text" class="form-control bg-black text-white border-secondary" value="Şehrin en iyi burgerleri burada!">
                        <div class="form-text text-muted">Başlığın hemen altında yer alan açıklama cümlesi.</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-white-50">Footer (Alt Bilgi) Yazısı</label>
                        <textarea class="form-control bg-black text-white border-secondary" rows="2">Afiyet olsun! Bizi tercih ettiğiniz için teşekkürler.</textarea>
                    </div>

                    <button type="submit" class="btn btn-info fw-bold text-dark mt-3">Metinleri Güncelle</button>
                </form>
            </div>

            <div class="tab-pane fade" id="guvenlik" role="tabpanel">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label class="form-label text-white-50">Mevcut Şifre</label>
                        <input type="password" class="form-control bg-black text-white border-secondary">
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-white-50">Yeni Şifre</label>
                            <input type="password" class="form-control bg-black text-white border-secondary">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-white-50">Yeni Şifre (Tekrar)</label>
                            <input type="password" class="form-control bg-black text-white border-secondary">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-danger fw-bold text-white mt-3">Şifreyi Değiştir</button>
                </form>
            </div>

        </div>
    </div>
</div>

<script>
    var triggerTabList = [].slice.call(document.querySelectorAll('#ayarlarTab button'))
    triggerTabList.forEach(function (triggerEl) {
        var tabTrigger = new bootstrap.Tab(triggerEl)
        triggerEl.addEventListener('click', function (event) {
            event.preventDefault()
            tabTrigger.show()
            
            triggerTabList.forEach(btn => {
                btn.classList.remove('text-warning', 'fw-bold', 'active');
                btn.classList.add('text-white-50');
            });
            this.classList.remove('text-white-50');
            this.classList.add('text-warning', 'fw-bold', 'active');
        })
    })
</script>