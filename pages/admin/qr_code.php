    <?php
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
    $domain = $_SERVER['HTTP_HOST'];
    $site_url = "$protocol://$domain"; 
    ?>

<div class="row g-4">
    
    <div class="col-md-7 col-lg-8">
        <div class="bg-dark border border-secondary rounded p-4 h-100">
            <h4 class="text-white mb-4">
                <span class="material-symbols-outlined align-middle text-warning me-2">qr_code_scanner</span>
                Hızlı QR Oluşturucu
            </h4>
            
            <div class="mb-4">
                <label class="form-label text-white-50">Masa Numarası / Adı</label>
                <div class="input-group">
                    <span class="input-group-text bg-black border-secondary text-secondary">
                        <span class="material-symbols-outlined fs-5">table_restaurant</span>
                    </span>
                    <input type="text" id="masaNo" class="form-control bg-black text-white border-secondary" placeholder="Örn: 10" value="1">
                </div>
                <div class="form-text text-muted">Sadece masa numarasını girmeniz yeterlidir.</div>
            </div>

            <div class="mb-4">
                <label class="form-label text-white-50">Oluşacak Link</label>
                <div class="input-group">
                    <span class="input-group-text bg-black border-secondary text-secondary">
                        <span class="material-symbols-outlined fs-5">link</span>
                    </span>
                    <input type="text" id="linkOnizleme" class="form-control bg-black text-white border-secondary" value="<?php echo $site_url . ".com/home.php?masa=1"; ?>" readonly>
                </div>
            </div>

            <div class="d-grid">
                <button type="button" onclick="qrOlustur()" class="btn btn-warning fw-bold text-dark py-3">
                    <span class="material-symbols-outlined align-middle me-2">rocket_launch</span>
                    QR Kodu Oluştur
                </button>
            </div>
        </div>
    </div>

    <div class="col-md-5 col-lg-4">
        <div class="bg-dark border border-secondary rounded p-4 text-center h-100">
            
            <h5 class="text-white-50 mb-4">Canlı Önizleme</h5>

            <div class="bg-white p-3 rounded d-inline-block mb-4 shadow-lg">
                <img id="qrImage" src="https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=<?php echo $site_url . ".com/home.php?masa=1"; ?>" alt="QR Kod" class="img-fluid" style="width: 200px; height: 200px;">
            </div>

            <h5 class="text-white mb-1" id="masaBaslik">Masa 1</h5>
            <p class="text-white-50 small mb-4">Okutulduğunda menüye gider.</p>

            <div class="d-grid gap-2">
                <a id="downloadBtn" href="https://api.qrserver.com/v1/create-qr-code/?size=500x500&data=<?php echo $site_url . ".com/home.php?masa=1"; ?>" download="MasaQR.png" target="_blank" class="btn btn-outline-info text-info fw-bold">
                    <span class="material-symbols-outlined align-middle me-2">download</span>
                    İndir (PNG)
                </a>
                
            </div>

        </div>
    </div>

</div>

<script>

    function qrOlustur() {
        var masaNo = document.getElementById("masaNo").value;
        var siteAdresi = "<?php echo $site_url . ".com/home.php?masa="; ?>"
        var tamLink = siteAdresi + masaNo;
        var qrApiUrl = "https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=" + tamLink;
        var downloadUrl = "https://api.qrserver.com/v1/create-qr-code/?size=500x500&data=" + tamLink;
        document.getElementById("qrImage").src = qrApiUrl; 
        document.getElementById("linkOnizleme").value = tamLink; 
        document.getElementById("masaBaslik").innerText = "Masa " + masaNo;
        document.getElementById("downloadBtn").href = downloadUrl;
    }
</script>