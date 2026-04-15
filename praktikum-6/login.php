<?php
session_start();

$users = [
    ["username" => "admin", "password" => "admin123", "role" => "admin"],
    ["username" => "member", "password" => "member123", "role" => "member"]
];

$error = "";

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    foreach ($users as $user) {
        if ($user["username"] == $username && $user["password"] == $password) {
            $_SESSION["login"] = true;
            $_SESSION["username"] = $user["username"];
            $_SESSION["role"] = $user["role"];
            header("Location: halamanUtama.php");
            exit;
        }
    }

    $error = "Login gagal!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
    input,button { 
        width:90%; 
        padding:10px; 
        margin:5px 0;
    }
    button { 
        background:blue; 
        color:white; 
        border:none;
    }
    .error { 
        color:red; 
    }
    a { 
        display:block; 
        margin-top:10px;
    }
    </style>
</head>
<body>

<div class="container">
    <h2>Login</h2>
    <?php 
    if ($error != "") echo "<p class='error'>$error</p>"; 
    ?>
    
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button name="login">Login</button>
    </form>

    <a href="halamanC.php">Masuk sebagai tamu</a>
</div>

</body>
</html>