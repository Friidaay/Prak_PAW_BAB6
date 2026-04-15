<?php
session_start();

if (!isset($_SESSION["login"])) {
    echo "Silakan login dulu!";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman B</title>
    <style>
    body { 
        font-family: Arial; 
        background:#D4D43B;
    }
    .container { 
        width:300px; 
        margin:100px auto; 
        background:whitesmoke; 
        padding:20px; 
        text-align:center;
    }
    </style>
</head>
<body>
<div class="container">
    <h2>Halaman B</h2>
    <p>Admin & Member bisa akses</p>
    <a href="halamanUtama.php">Kembali</a>
</div>

</body>
</html>