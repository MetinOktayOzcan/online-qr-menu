<?php
    $gelen_id = (int)$_GET['id'];

    $sql = "DELETE FROM `kategoriler` WHERE id = $gelen_id"; 

    $resuld = mysqli_query($conn,$sql);

    echo "<script>
            window.location.href = 'admin?sayfa=category';
        </script>";




?>
