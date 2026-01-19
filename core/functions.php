<?php
function is_admin()

{

    if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin') {
        return true;
    }

    return false;

}
?>