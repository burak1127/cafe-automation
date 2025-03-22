

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Yönetici Girişi</title>
    <style>
        body.yonetici {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .right {
            background-color: white;
            margin: auto;
            padding: 40px;
            width: 400px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-top: 100px;
            border-radius: 10px;
        }

        .btn-green {
            background-color: green;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .btn-green:hover {
            background-color: darkgreen;
        }
    </style>
</head>

<body class="yonetici">
<div class="right">
<h1>YÖNETİCİ GİRİŞ</h1>
    <h3>Kullanıcı adı ve şifrenizi giriniz.</h3>

    <form method="post">
        <label> Kullanıcı Adı:</label>
        <input type="text" name="username" required><br><br>

        <label> Şifre:</label>
        <input type="password" name="password" required><br><br>

        <input class="btn-green" type="submit" name="giris" value="Giriş Yap">
    </div></form>

    <?php
    if (isset($hata)) {
        echo "<p style='color:red;'>$hata</p>";
    }
    ?>
</body>
</html>
<?php
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["giris"])) {
    $username = $_POST["username"];
    $sifre = $_POST["password"];

    if ($username == "Ayla" && $sifre == "yazılım") {
        $_SESSION["username"] = $username; 
        header("Location: urun_duzenle.php"); 
        exit(); 
    } else {
        $hata = "Hatalı kullanıcı adı veya şifre!";
    }
}
?>
