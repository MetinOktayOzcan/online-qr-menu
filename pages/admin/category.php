<div class="container-fluid pt-4 px-4">
    
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="text-white">Kategori Yönetimi</h3>
        <a href="admin.php?sayfa=categoryAdd" class="btn btn-warning fw-bold text-dark">
            <span class="material-symbols-outlined align-middle fs-5">add</span> Yeni Kategori
        </a>
    </div>

    <div class="bg-dark border border-secondary rounded p-4">
        <div class="table-responsive">
            <table class="table table-dark table-hover align-middle mb-0">
                <thead>
                    <tr class="text-white-50 border-bottom border-secondary">
                        <th scope="col" style="width: 100px;">Sıra</th>
                        <th scope="col">Kategori Adı</th>
                        <th scope="col" class="text-end" style="width: 150px;">İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span class="badge bg-secondary">1</span></td>
                        <td class="fw-bold text-white">Burgerler</td>
                        <td class="text-end">
                            <a href="admin.php?sayfa=categoryEdit" class="btn btn-sm btn-outline-info border-0 text-info me-2" title="Düzenle">
                                <span class="material-symbols-outlined fs-5">edit</span>
                            </a>
                            
                            <a href="admin.php?sayfa=categoryDelete" class="btn btn-sm btn-outline-danger border-0 text-danger" title="Sil" onclick="return confirm('Silmek istediğine emin misin?')">
                                <span class="material-symbols-outlined fs-5">delete</span>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>