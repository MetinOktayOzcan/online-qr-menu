<?php
session_destroy();
$_SESSION = [];
header("Location: " . ROOT . "/login");
exit();
?>