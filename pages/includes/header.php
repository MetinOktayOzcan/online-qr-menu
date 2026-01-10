<!DOCTYPE html>
<html lang="tr" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Menü - Premium Steakhouse</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet" />

    <style>
        :root {
            --primary-color: #ffc107;
            --card-radius: 16px;
            --btn-radius: 12px;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #1a1d20; 
        }

        [data-bs-theme="dark"] .card { background-color: #212529; border: 1px solid #2c3034; }
        [data-bs-theme="dark"] .navbar { background-color: rgba(26, 29, 32, 0.95); border-bottom: 1px solid #2c3034; backdrop-filter: blur(10px); }
        .sticky-category-bar { background-color: #1a1d20; border-bottom: 1px solid #2c3034; position: sticky; top: 0; z-index: 1020; padding: 15px 0; }

        .category-scroll { overflow-x: auto; white-space: nowrap; padding: 0 5px; scrollbar-width: none; }
        .category-scroll::-webkit-scrollbar { display: none; }

        .category-btn {
            border-radius: 30px; padding: 8px 24px; font-weight: 600;
            border: 2px solid transparent; transition: 0.3s;
            background-color: #2c3034; color: #fff; text-decoration: none; display: inline-block; margin-right: 10px;
        }
        .category-btn:hover, .category-btn.active { background-color: var(--primary-color); color: #000; }

        .card-img-top { height: 220px; object-fit: cover; transition: transform 0.5s; }
        .card:hover .card-img-top { transform: scale(1.05); }
        .img-wrapper { overflow: hidden; border-radius: var(--card-radius) var(--card-radius) 0 0; position: relative; }
        .price-badge { font-size: 1.25rem; font-weight: 800; color: var(--primary-color); }
        
        .btn-add { border-radius: var(--btn-radius); font-weight: 700; padding: 8px 20px; background-color: var(--primary-color); color: black; border: none; }
        .btn-add:hover { background-color: #e0a800; }
        
        .hero-section {
            height: 300px;
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.8)), url("https://images.unsplash.com/photo-1544025162-d76694265947?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80");
            background-size: cover; background-position: center;
            display: flex; align-items: center; justify-content: center; text-align: center;
            border-radius: 0 0 2rem 2rem; margin-bottom: 2rem;

        .page-link {
            background-color: #212529;
            border-color: #2c3034;
            color: #fff;
        }
        .page-link:hover {
            background-color: #333;
            color: var(--primary-color);
            border-color: #2c3034;
        }
        .page-item.active .page-link {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: #000;
        }
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-xl">
            <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
                <span class="material-symbols-outlined text-warning fs-1">restaurant</span>
                <span class="fw-bold fs-4 text-white">Online Menü</span>
            </a>
            
            <div class="d-flex align-items-center gap-2">
                 <a href="?tema=degistir" class="btn btn-outline-secondary rounded-circle d-flex align-items-center justify-content-center border-secondary text-white" style="width: 45px; height: 45px; text-decoration: none;">
                    <span class="material-symbols-outlined">light_mode</span>
                </a>
            </div>
        </div>
    </nav>