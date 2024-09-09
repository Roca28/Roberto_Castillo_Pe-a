<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_SESSION['carrito'])) {
        unset($_SESSION['carrito']);
    }
    header('Location: carrito.php');
    exit();
}
?>
