<?php
    $gelen_id = (int)$_GET['id'];

    $sql = "DELETE FROM `urunler` WHERE id = $gelen_id"; 

    $resuld = mysqli_query($conn,$sql);

    echo "<script>
            window.location.href = 'admin?sayfa=inventory';
        </script>";




?>
