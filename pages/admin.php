<?php
if (!is_admin()) {
    header("Location: " . ROOT . "/login");    
    exit();
}
$gelen_sayfa = "";

if (isset($_GET['sayfa'])) {
    $gelen_sayfa = $_GET['sayfa'];}

if ($gelen_sayfa == NULL){
    $gelen_sayfa = "dashboard";
}

switch ($gelen_sayfa) {
    case 'dashboard':
        $icerik = "pages/admin_pages/dashboard.php";
        break;
    case 'category':
        $icerik = "pages/admin_pages/category.php";
        break;
    case 'categoryEdit':
        $icerik = "pages/admin_pages/category-edit.php"; 
        break;
     case 'categoryDelete':
        $icerik = "pages/admin_pages/category-delete.php"; 
        break;
     case 'categoryAdd':
        $icerik = "pages/admin_pages/category-add.php"; 
        break;
    case 'inventory':
        $icerik = "pages/admin_pages/inventory.php";
        break;
    case 'inventoryAdd':
        $icerik = "pages/admin_pages/inventory-add.php";
        break;
    case 'inventoryEdit':
        $icerik = "pages/admin_pages/inventory-Edit.php";
        break;
    case 'inventoryDelete':
        $icerik = "pages/admin_pages/inventory-delete.php";
        break;
    case 'qrCode':
        $icerik = "pages/admin_pages/qr_code.php";
        break;
    case 'settings':
        $icerik = "pages/admin_pages/settings.php";
        break;
    default:
        $icerik = "pages/admin_pages/404.php";
        break;
}

    $header_titleSql = "SELECT header_title FROM `ayarlar`";
    $header_titleResult = mysqli_query($conn, $header_titleSql);
    $header_row = mysqli_fetch_assoc($header_titleResult);
    $site_baslik = !empty($header_row['header_title']) ? $header_row['header_title'] : "Online Menü";
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_baslik?></title>
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
            <a href="admin?sayfa=dashboard" class="nav-link <?php echo ($gelen_sayfa == "dashboard") ? "active" : ""; ?>">
                <span class="material-symbols-outlined">dashboard</span> Dashboard
            </a>
            <a href="admin?sayfa=category" class="nav-link <?php echo ($gelen_sayfa == "category") ? "active" : ""; ?>">
                <span class="material-symbols-outlined">category</span> Kategoriler
            </a>
            <a href="admin?sayfa=inventory" class="nav-link <?php echo ($gelen_sayfa == "inventory") ? "active" : ""; ?>">
                <span class="material-symbols-outlined">inventory</span> Ürünler
            </a>
            <a href="admin?sayfa=qrCode" class="nav-link <?php echo ($gelen_sayfa == "qrCode") ? "active" : ""; ?>">
                <span class="material-symbols-outlined">qr_code</span> QR Oluştur
            </a>
            <a href="admin?sayfa=settings" class="nav-link <?php echo ($gelen_sayfa == "settings") ? "active" : ""; ?>">
                <span class="material-symbols-outlined">settings</span> Ayarlar
            </a>
        </nav>

        <div class="mt-auto border-top border-secondary border-opacity-25 pt-3">
            <a href="logout" class="nav-link text-danger hover-bg-danger">
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