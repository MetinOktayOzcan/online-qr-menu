<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetici Girişi</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"/>

    <style>
        body {
            font-family: 'Work Sans', sans-serif;
            background-color: #101922; 
            color: white;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .bg-blur {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1920&q=80') center/cover;
            filter: blur(8px);
            opacity: 0.4;
            z-index: -1;
        }

        .login-card {
            background-color: #182634;
            border: 1px solid rgba(49, 77, 104, 0.5);
            border-radius: 16px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 440px;
        }

        .form-control-custom {
            background-color: #131e29;
            border: 1px solid #314d68;
            color: white;
            height: 50px;
            padding-left: 45px;
            border-radius: 8px;
        }

        .form-control-custom:focus {
            background-color: #131e29;
            border-color: #258cf4;
            color: white;
            box-shadow: 0 0 0 4px rgba(37, 140, 244, 0.1);
        }

        .form-control-custom::placeholder {
            color: #90adcb;
            opacity: 0.7;
        }

        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #90adcb;
            pointer-events: none;
        }

        .btn-login {
            background-color: #258cf4;
            border: none;
            height: 50px;
            font-weight: 600;
            border-radius: 8px;
            width: 100%;
            color: white;
        }
        .btn-login:hover {
            background-color: #1a6ec2;
            color: white;
        }
    </style>
</head>
<body>

    <div class="bg-blur"></div>

    <div class="container px-3">
        <div class="login-card mx-auto p-4 p-md-5">
            
            <div class="text-center mb-5">
                <div class="d-inline-flex align-items-center justify-content-center bg-primary bg-opacity-25 rounded-3 p-3 mb-3">
                    <span class="material-symbols-outlined text-primary fs-2">restaurant_menu</span>
                </div>
                <h2 class="fw-bold mb-2">Yönetici Paneli</h2>
                <div class="mx-auto bg-primary rounded-pill" style="width: 50px; height: 4px;"></div>
                <p class="text-secondary mt-3 small">Menü sistemini yönetmek için giriş yapın.</p>
            </div>

            <?php

            if (isset($_POST['submit'])) {
                $fullname = $_POST['fullname'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $repass = $_POST['repass'];
                $errors = array();

                $passHash = password_hash($pass,PASSWORD_DEFAULT);


                if (empty($fullname) || empty($email) || empty($pass) || empty($repass) ) {
                    array_push($errors,"Tüm alanları doldurmalısın");
                }

                if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
                    array_push($errors,"eposta doğrulanamadı");
                }
                if (strlen($pass)<8) {
                    array_push($errors,"Parola en az 8 karakterli olabilir");
                }

                if ($pass!==$repass) {
                    array_push($errors,"Parola uyuşmuyor");
                }

                if (count($errors)>0) {
                    foreach ($errors as $error) {
                        echo "<div class='alert alert-danger'>$error</div>";
                    }
                } else {
                        $sql = "INSERT INTO `yoneticiler`(`kullanici_adi`, `eposta`, `sifre`, `rol`) VALUES ('$fullname','$email','$passHash','admin')";
                        mysqli_query($conn, $sql);

                        }

            }   
            ?>

            <form action="" method="POST">
                
                <div class="mb-4">
                    <label class="form-label small fw-bold">Kullanıcı Adı</label>
                    <div class="position-relative">
                        <span class="material-symbols-outlined input-icon">person</span>
                        <input type="text" name="fullname" class="form-control form-control-custom" placeholder="Kullanıcı adınız">
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label small fw-bold">email</label>
                    <div class="position-relative">
                        <span class="material-symbols-outlined input-icon">mail</span>
                        <input type="text" name="email" class="form-control form-control-custom" placeholder="email">
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label small fw-bold">Şifre</label>
                    <div class="position-relative">
                        <span class="material-symbols-outlined input-icon">lock</span>
                        <input type="password" name="pass" class="form-control form-control-custom" placeholder="Şifreniz">
                        <span class="material-symbols-outlined position-absolute end-0 top-50 translate-middle-y me-3 text-secondary" style="cursor: pointer;">visibility</span>
                    </div>
                </div>

                

                <div class="mb-4">
                    <label class="form-label small fw-bold">Şifre</label>
                    <div class="position-relative">
                        <span class="material-symbols-outlined input-icon">lock</span>
                        <input type="password" name="repass" class="form-control form-control-custom" placeholder="Şifreniz">
                        <span class="material-symbols-outlined position-absolute end-0 top-50 translate-middle-y me-3 text-secondary" style="cursor: pointer;">visibility</span>
                    </div>
                </div>

                

                <button type="submit"value="register" name="submit" class="btn btn-login shadow-lg">Kayıt</button>

            </form>

            <div class="text-center mt-4 pt-4 border-top border-secondary border-opacity-25">
                <a href="home.php" class="text-decoration-none text-secondary small d-flex align-items-center justify-content-center gap-1">
                    <span class="material-symbols-outlined fs-6">arrow_back</span>
                    Menüye Dön
                </a>
            </div>

        </div>
        <p class="text-center text-white-50 mt-3 small">YöneticiGiriş v1.0.0 © 2026</p>
    </div>

</body>
</html>