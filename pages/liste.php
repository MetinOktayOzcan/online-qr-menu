<?php include 'includes/header.php'; ?>

    <section class="page-header">
        <div class="text-center">
            <h1 class="display-5 fw-bold text-white">Arama Sonuçları</h1>
            <p class="text-white-50 fs-5">"Steak" için 45 sonuç bulundu</p>
        </div>
    </section>

    <div class="container-xl pb-5">
        <div class="row">
            
            <div class="col-lg-3 mb-4">
                <div class="sidebar-card p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3 pb-2 border-bottom border-secondary border-opacity-25">
                        <h5 class="fw-bold text-white m-0">Filtrele</h5>
                        <a href="#" class="text-warning small text-decoration-none">Temizle</a>
                    </div>

                    <div class="mb-4">
                        <h6 class="text-white-50 text-uppercase small fw-bold mb-3">Kategori</h6>
                        <div class="form-check mb-2">
                            <input class="form-check-input bg-dark border-secondary" type="checkbox" id="cat1" checked>
                            <label class="form-check-label" for="cat1">Et & Bonfile</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input bg-dark border-secondary" type="checkbox" id="cat2">
                            <label class="form-check-label" for="cat2">Burgerler</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input bg-dark border-secondary" type="checkbox" id="cat3">
                            <label class="form-check-label" for="cat3">İçecekler</label>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h6 class="text-white-50 text-uppercase small fw-bold mb-3">Fiyat Aralığı</h6>
                        <input type="range" class="form-range" min="0" max="1000" id="priceRange">
                        <div class="d-flex justify-content-between text-muted small">
                            <span>100 ₺</span>
                            <span>1000 ₺</span>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h6 class="text-white-50 text-uppercase small fw-bold mb-3">Özellikler</h6>
                        <div class="d-flex flex-wrap gap-2">
                            <input type="checkbox" class="btn-check" id="btn-check-spicy" autocomplete="off">
                            <label class="btn btn-sm btn-outline-secondary rounded-pill" for="btn-check-spicy">Acılı</label>

                            <input type="checkbox" class="btn-check" id="btn-check-vegan" autocomplete="off">
                            <label class="btn btn-sm btn-outline-secondary rounded-pill" for="btn-check-vegan">Vegan</label>
                        </div>
                    </div>

                    <button class="btn btn-gold w-100 py-2">Uygula</button>
                </div>
            </div>

            <div class="col-lg-9">
                
                <div class="d-flex justify-content-between align-items-center mb-4 p-3 rounded sidebar-card">
                    <span class="text-muted small">Toplam 45 üründen 1-12 arası</span>
                    <div class="d-flex align-items-center gap-2">
                        <label class="text-muted small d-none d-sm-block">Sırala:</label>
                        <select class="form-select form-select-sm bg-dark text-white border-secondary" style="width: auto;">
                            <option>Önerilen</option>
                            <option>Fiyat Artan</option>
                            <option>Fiyat Azalan</option>
                        </select>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-5">
                    
                    <div class="col">
                        <div class="product-card">
                            <div class="card-img-wrapper">
                                <span class="position-absolute top-0 end-0 m-2 badge bg-danger">Popüler</span>
                                <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?auto=format&fit=crop&w=600&q=80" class="card-img-top">
                            </div>
                            <div class="p-4 d-flex flex-column flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <h5 class="fw-bold text-white mb-0">Lokum Bonfile</h5>
                                    <span class="text-warning fw-bold fs-5">420 ₺</span>
                                </div>
                                <p class="text-muted small mb-4 flex-grow-1">Yumuşacık dana bonfile, özel tereyağı sosu ile.</p>
                                <button class="btn btn-outline-gold w-100 mt-auto d-flex align-items-center justify-content-center gap-2">
                                    <span class="material-symbols-outlined fs-6">add_shopping_cart</span> Sepete Ekle
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="product-card">
                            <div class="card-img-wrapper">
                                <img src="https://images.unsplash.com/photo-1550547660-d9450f859349?auto=format&fit=crop&w=600&q=80" class="card-img-top">
                            </div>
                            <div class="p-4 d-flex flex-column flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <h5 class="fw-bold text-white mb-0">Surf & Turf</h5>
                                    <span class="text-warning fw-bold fs-5">650 ₺</span>
                                </div>
                                <p class="text-muted small mb-4 flex-grow-1">Istakoz kuyruğu ve bonfile, muhteşem ikili.</p>
                                <button class="btn btn-outline-gold w-100 mt-auto d-flex align-items-center justify-content-center gap-2">
                                    <span class="material-symbols-outlined fs-6">add_shopping_cart</span> Sepete Ekle
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="product-card">
                            <div class="card-img-wrapper">
                                <span class="position-absolute top-0 end-0 m-2 badge bg-success">Yeni</span>
                                <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?auto=format&fit=crop&w=600&q=80" class="card-img-top">
                            </div>
                            <div class="p-4 d-flex flex-column flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <h5 class="fw-bold text-white mb-0">Wagyu Burger</h5>
                                    <span class="text-warning fw-bold fs-5">380 ₺</span>
                                </div>
                                <p class="text-muted small mb-4 flex-grow-1">Premium Wagyu eti, trüflü mayonez ve brioche ekmek.</p>
                                <button class="btn btn-outline-gold w-100 mt-auto d-flex align-items-center justify-content-center gap-2">
                                    <span class="material-symbols-outlined fs-6">add_shopping_cart</span> Sepete Ekle
                                </button>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Önceki</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Sonraki</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>

<?php include 'includes/footer.php'; ?>