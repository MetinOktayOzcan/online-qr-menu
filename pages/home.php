<?php 
include 'includes/header.php'; 
?>

<main class="container-xl pb-5">

    <section class="hero-section shadow-sm">
        <div class="container text-white">
            <span class="badge bg-warning text-dark mb-3 px-3 py-2 fw-bold shadow">PREMIUM STEAKHOUSE</span>
            <h1 class="display-4 fw-bolder mb-2">Gerçek Lezzet Deneyimi</h1>
            <p class="lead opacity-75">Usta şeflerimizin elinden, masanıza özel sunumlar.</p>
        </div>
    </section>

    <div class="sticky-category-bar mb-4 shadow-sm">
        <div class="category-scroll d-flex justify-content-lg-center px-2">
            <a href="?kategori=ana-yemek" class="category-btn active">Ana Yemekler</a>
            <a href="?kategori=baslangic" class="category-btn">Başlangıçlar</a>
            <a href="?kategori=burger" class="category-btn">Burgerler</a>
            <a href="?kategori=tatli" class="category-btn">Tatlılar</a>
            <a href="?kategori=icecek" class="category-btn">İçecekler</a>
        </div>
    </div>

    <div class="d-flex justify-content-between align-items-end mb-4 px-2">
        <div>
            <h2 class="fw-bold m-0 text-white">Menü</h2>
            <p class="text-muted m-0 small">Öne çıkan lezzetlerimiz</p>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        
        <div class="col">
            <div class="card h-100 rounded-4">
                <div class="img-wrapper">
                    <span class="position-absolute top-0 end-0 m-3 badge bg-success shadow-sm">Yeni</span>
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=600&q=80" class="card-img-top">
                </div>
                <div class="card-body p-4 d-flex flex-column">
                    <h5 class="fw-bold mb-1 text-white">Sebzeli Bowl</h5>
                    <p class="small text-muted flex-grow-1">Kinoa, avokado, mısır ve özel soslu ızgara sebzeler.</p>
                    
                    <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top border-secondary border-opacity-10">
                        <span class="price-badge">185 ₺</span>
                        <button class="btn btn-add">Ekle +</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 rounded-4">
                <div class="img-wrapper">
                    <span class="position-absolute top-0 end-0 m-3 badge bg-warning text-dark shadow-sm">Popüler</span>
                    <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?auto=format&fit=crop&w=600&q=80" class="card-img-top">
                </div>
                <div class="card-body p-4 d-flex flex-column">
                    <h5 class="fw-bold mb-1 text-white">Lokum Bonfile</h5>
                    <p class="small text-muted flex-grow-1">200gr dana bonfile, patates püresi ve kuşkonmaz.</p>
                    
                    <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top border-secondary border-opacity-10">
                        <span class="price-badge">420 ₺</span>
                        <button class="btn btn-add">Ekle +</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 rounded-4">
                <div class="img-wrapper">
                    <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?auto=format&fit=crop&w=600&q=80" class="card-img-top">
                </div>
                <div class="card-body p-4 d-flex flex-column">
                    <h5 class="fw-bold mb-1 text-white">Cheddar Burger</h5>
                    <p class="small text-muted flex-grow-1">Ev yapımı 180gr köfte, çift cheddar, karamelize soğan.</p>
                    
                    <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top border-secondary border-opacity-10">
                        <span class="price-badge">260 ₺</span>
                        <button class="btn btn-add">Ekle +</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="text-center mt-5">
        <a href="?limit=12" class="btn btn-outline-secondary rounded-pill px-5 py-3 fw-bold border-2 text-white">
            Daha Fazla Göster (+4)
        </a>
    </div>

</main>

<?php include 'includes/footer.php'; ?>