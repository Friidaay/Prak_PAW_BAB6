<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
    <style>
    body { 
        font-family: Arial; 
        background: linear-gradient(135deg,#74ebd5,#ACB6E5);
    }
    .container { 
        width:300px; 
        margin:100px auto; 
        background:white; 
        padding:20px; 
        border-radius:10px; 
        text-align:center;
    }
    .menu a { 
        display:block; 
        margin:5px 0; 
        padding:8px; 
        background:green; 
        color:white; 
        text-decoration:none;
    }
    .logout { 
        background:red !important; 
    }
    </style>
</head>
<body>
<div class="container">
    <h2>Halo, <?php echo $_SESSION["username"]; ?> (<?php echo $_SESSION["role"]; ?>)</h2>

    <div class="menu">
        <a href="halamanA.php">Halaman A</a>
        <a href="halamanB.php">Halaman B</a>
        <a href="halamanC.php">Halaman C</a>
        <a href="logout.php" class="logout">Logout</a>
    </div>
</div>
</body>
</html>