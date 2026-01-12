<?php

$sayfa = array_key_first($_GET);

if ($sayfa == NULL){
    $sayfa = "dashboard";
}

switch ($sayfa) {
    case 'dashboard':
        $icerik = "admin/dashboard.php";
        break;
    case 'category':
        $icerik = "admin/category.php";
        break;
    case 'inventory_2':
        $icerik = "admin/dashboard.php";
        break;
    case 'qr_code_2':
        $icerik = "admin/qr_code_2.php";
        break;
    case 'settings':
        $icerik = "admin/settings.php";
        break;
    default:
        echo "<h1>404</h1>";
        break;
}

echo $sayfa;

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RestoAdmin - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>

    <style>
        :root {
            --bg-dark: #101922;
            --sidebar-bg: #101922;
            --card-bg: #182634;
            --border-color: #314d68;
            --text-muted: #94a3b8;
            --primary-color: #258cf4;
        }

        body {
            background-color: var(--bg-dark);
            color: white;
            font-family: 'Work Sans', sans-serif;
            overflow-x: hidden;
        }

        .sidebar {
            width: 260px;
            height: 100vh;
            background-color: var(--sidebar-bg);
            border-right: 1px solid var(--border-color);
            position: fixed;
            top: 0; left: 0;
            z-index: 1000;
            display: flex;
            flex-direction: column;
        }

        .nav-link {
            color: var(--text-muted);
            font-weight: 500;
            padding: 12px 20px;
            margin-bottom: 5px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: 0.3s;
        }

        .nav-link:hover, .nav-link.active {
            background-color: var(--card-bg);
            color: white;
        }

        .nav-link.active {
            background-color: var(--primary-color) !important;
        }

        .main-content {
            margin-left: 260px; 
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .top-navbar {
            height: 70px;
            background-color: rgba(16, 25, 34, 0.9);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border-color);
            position: sticky;
            top: 0;
            z-index: 900;
            padding: 0 25px;
        }

        .stat-card {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 20px;
        }

        .stat-icon {
            width: 50px; height: 50px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .table-custom {
            color: var(--text-muted);
            margin-bottom: 0;
        }
        .table-custom th {
            background-color: rgba(16, 25, 34, 0.5);
            border-bottom: 1px solid var(--border-color);
            color: white;
            text-transform: uppercase;
            font-size: 0.8rem;
            padding: 15px;
        }
        .table-custom td {
            background-color: var(--card-bg);
            border-bottom: 1px solid var(--border-color);
            padding: 15px;
            vertical-align: middle;
            color: white;
        }
        .table-custom tr:last-child td { border-bottom: none; }

        @media (max-width: 991px) {
            .sidebar { transform: translateX(-100%); transition: transform 0.3s; }
            .sidebar.show { transform: translateX(0); }
            .main-content { margin-left: 0; }
        }
    </style>
</head>
<body>

    <aside class="sidebar p-3" id="sidebar">
        <div class="d-flex align-items-center px-3 mb-4" style="height: 50px;">
            <h4 class="fw-bold m-0 text-white">Yönetim</h4>
        </div>
        
        <nav class="nav flex-column flex-grow-1 overflow-auto">
            <a href="?dashboard" class="nav-link active">
                <span class="material-symbols-outlined">dashboard</span> Dashboard
            </a>
            <a href="?category" class="nav-link">
                <span class="material-symbols-outlined">category</span> Kategoriler
            </a>
            <a href="?inventory_2" class="nav-link">
                <span class="material-symbols-outlined">inventory_2</span> Ürünler
            </a>
            <a href="?qr_code_2" class="nav-link">
                <span class="material-symbols-outlined">qr_code_2</span> QR Oluştur
            </a>
            <a href="?settings" class="nav-link">
                <span class="material-symbols-outlined">settings</span> Ayarlar
            </a>
        </nav>

        <div class="mt-auto border-top border-secondary border-opacity-25 pt-3">
            <a href="cikis.php" class="nav-link text-danger hover-bg-danger">
                <span class="material-symbols-outlined">logout</span> Çıkış Yap
            </a>
        </div>
    </aside>

    <main class="main-content">
        
        <header class="top-navbar d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-dark d-lg-none border-secondary" onclick="document.getElementById('sidebar').classList.toggle('show')">
                    <span class="material-symbols-outlined">menu</span>
                </button>
            </div>
            
            <div class="d-flex align-items-center gap-3">
                <div class="d-none d-md-block px-3 py-1 rounded-pill border border-secondary border-opacity-50 small fw-bold">
                    Merhaba, Admin
                </div>
                <button class="btn btn-dark rounded-circle border-secondary d-flex align-items-center justify-content-center" style="width:40px; height:40px;">
                    <span class="material-symbols-outlined fs-5">logout</span>
                </button>
            </div>
        </header>

        <div class="container-fluid p-4">
            
            <?php
            require_once $icerik;
            ?>


        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>