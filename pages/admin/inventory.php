<div class="container-fluid pt-4 px-4">
    
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="text-white">Ürün Yönetimi</h3>
        <a href="admin.php?sayfa=inventoryAdd" class="btn btn-warning fw-bold text-dark">
            <span class="material-symbols-outlined align-middle fs-5">add</span> Yeni Ürün
        </a>
    </div>

    <div class="bg-dark border border-secondary rounded p-4">
        <div class="table-responsive">
            <table class="table table-dark table-hover align-middle mb-0">
                <thead>
                    <tr class="text-white-50 border-bottom border-secondary">
                        <th scope="col">Görsel</th>
                        <th scope="col">Ürün Adı</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Fiyat</th>
                        <th scope="col">Durum</th>
                        <th scope="col" class="text-end">İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="bg-secondary rounded d-flex align-items-center justify-content-center text-white" style="width: 50px; height: 50px;">
                                <span class="material-symbols-outlined fs-4">image</span>
                            </div>
                        </td>
                        <td class="fw-bold text-white">Cheeseburger</td>
                        <td class="text-white-50">Burgerler</td>
                        <td class="text-warning fw-bold">280 ₺</td>
                        <td><span class="badge bg-success text-dark">Aktif</span></td>
                        <td class="text-end">
                            <a href="admin.php?sayfa=inventoryEdit&id=1" class="btn btn-sm btn-outline-info border-0 text-info me-2">
                                <span class="material-symbols-outlined fs-5">edit</span>
                            </a>
                            <a href="admin.php?sayfa=inventoryDelete&id=1" class="btn btn-sm btn-outline-danger border-0 text-danger" onclick="return confirm('Silmek istediğine emin misin?')">
                                <span class="material-symbols-outlined fs-5">delete</span>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="bg-secondary rounded d-flex align-items-center justify-content-center text-white" style="width: 50px; height: 50px;">
                                <span class="material-symbols-outlined fs-4">image</span>
                            </div>
                        </td>
                        <td class="fw-bold text-white">Cola Zero</td>
                        <td class="text-white-50">İçecekler</td>
                        <td class="text-warning fw-bold">40 ₺</td>
                        <td><span class="badge bg-danger text-white">Pasif</span></td>
                        <td class="text-end">
                            <a href="admin.php?sayfa=productEdit&id=2" class="btn btn-sm btn-outline-info border-0 text-info me-2">
                                <span class="material-symbols-outlined fs-5">edit</span>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-danger border-0 text-danger" onclick="return confirm('Silmek istediğine emin misin?')">
                                <span class="material-symbols-outlined fs-5">delete</span>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>