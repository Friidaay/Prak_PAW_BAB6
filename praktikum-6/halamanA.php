<?php
session_start();

if (!isset($_SESSION["login"]) || $_SESSION["role"] != "admin") {
    echo "Akses ditolak! (Admin only)";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman A</title>
    <style>
    body { 
        font-family: Arial; 
        background:#606060;
    }
    .container { 
        width:300px; 
        margin:100px auto; 
        background:white; 
        padding:20px; 
        text-align:center;
    }
    </style>
</head>
<body>

<div class="container">
    <h2>Halaman A</h2>
    <p>Khusus admin</p>
    <a href="halamanUtama.php">Kembali</a>
</div>

</body>
</html>