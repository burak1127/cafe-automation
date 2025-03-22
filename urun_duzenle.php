

    <?php
$baglan = new mysqli("localhost", "root", "", "databasekafe");


if ($baglan->connect_error) {
    die("<p style='color:red'>Bağlantı başarısız! " . $baglan->connect_error . "</p>");
}


$id = isset($_GET['id']) ? intval($_GET['id']) : null;
$urunadi = "";
$fiyat = "";


if ($id) {
    $sql = $baglan->prepare("SELECT * FROM ürünler WHERE id = ?");
    $sql->bind_param("i", $id);
    $sql->execute();
    $sonuc = $sql->get_result();

    if ($sonuc->num_rows > 0) {
        $urun = $sonuc->fetch_assoc();
        $urunadi = $urun["ürünadi"];
        $fiyat = $urun["fiyat"];
    }
}


if (isset($_POST["ekle"])) {
    $urunadi = $_POST["ürünadi"];
    $fiyat = $_POST["fiyat"];

    if (!empty($urunadi) && !empty($fiyat)) {
        $sql = $baglan->prepare("INSERT INTO ürünler (ürünadi, fiyat) VALUES (?, ?)");
        $sql->bind_param("sd", $urunadi, $fiyat);

        if ($sql->execute()) {
            echo "<p style='color:green'>Ürün başarıyla eklendi!</p>";
        } else {
            echo "<p style='color:red'>Ekleme işlemi başarısız!</p>";
        }
    } else {
        echo "<p style='color:red'>Lütfen tüm alanları doldurun!</p>";
    }
}


if (isset($_POST["guncelle"])) {
    $id = $_POST["id"]; // 
    $urunadi = $_POST["ürünadi"];
    $fiyat = $_POST["fiyat"];

    if (!empty($id) && !empty($urunadi) && !empty($fiyat)) {
        $sql = $baglan->prepare("UPDATE ürünler SET ürünadi = ?, fiyat = ? WHERE id = ?");
        $sql->bind_param("sdi", $urunadi, $fiyat, $id);

        if ($sql->execute()) {
            echo "<p style='color:green'>Ürün başarıyla güncellendi!</p>";
        } else {
            echo "<p style='color:red'>Güncelleme başarısız!</p>";
        }
    } else {
        echo "<p style='color:red'>Lütfen tüm alanları doldurun!</p>";
    }
}


if (isset($_POST["sil"])) {
    $id_sil = $_POST["id"];

    if (!empty($id_sil)) {
        $sql = $baglan->prepare("DELETE FROM ürünler WHERE id = ?");
        $sql->bind_param("i", $id_sil);

        if ($sql->execute()) {
            echo "<p style='color:green'>Ürün başarıyla silindi!</p>";
        } else {
            echo "<p style='color:red'>Silme işlemi başarısız!</p>";
        }
    } else {
        echo "<p style='color:red'>Lütfen bir ürün ID girin!</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="tr">
<h1>Ürün Yönetimi</h1>
<body class="yonetici">
<form method="post">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    
</head>

<div id="background"></div>
    <a href="index.php">ANA SAYFA</a><br><br>
    <label>Ürün ID:</label>
    <input type="text" name="id" value="<?php echo $id ? $id : ''; ?>" readonly><br><br>

    <label>Ürün Adı:</label>
    <input type="text" name="ürünadi" value="<?php echo $urunadi; ?>"><br><br>

    <label>Ürün Fiyatı:</label>
    <input type="text" name="fiyat" value="<?php echo $fiyat; ?>"><br><br>

    
    <input class="btn btn-blue" type="submit" name="guncelle" value="GÜNCELLE">
 
    <input class="kategori-btn tatli" type="submit" name="listele" value="LİSTELE">
    <input class="btn btn-yoncam" type="submit" name="gunsonu" value="GÜN SONU">
    <input class="kategori-btn kahve" type="submit" name="gunsonusil" value="GÜN SONU SIFIRLA">

</form>

<hr>
<div class="left">

<table border="1">
    
    </html>
    <?php
    $sql = "SELECT * FROM ürünler ORDER BY id ASC";
    $sonuc = $baglan->query($sql);
   

if(isset($_POST["listele"])){
    echo "<h2>Mevcut Ürünler</h2>";
    echo"<tr>";
    echo "<th>ID</th>";
    echo "<th>Ürün Adı</th>";
    echo  "<th>Fiyat</th>";
    echo  "<th>Güncelle</th>";
    echo "</tr>";
    if ($sonuc->num_rows > 0) {
        while ($satir = $sonuc->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $satir["id"] . "</td>";
            echo "<td>" . $satir["ürünadi"] . "</td>";
            echo "<td>" . $satir["fiyat"] . "₺</td>";
            echo "<td><a href='urun_duzenle.php?id=" . $satir["id"] . "'>Güncelle</a></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>Liste boş</td></tr>";
    }
    
}

    ?>
    
     
    <?php
    if (isset($_POST["gunsonu"])) {
        // Tüm siparişleri çek
        $sql = $baglan->prepare("SELECT * FROM siparisler");
        $sql->execute();
        $siparis = $sql->get_result();
    
        if ($siparis->num_rows > 0) {
            while ($satir = $siparis->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $satir["musteri_id"] . "</td>";
                echo "<td>" . $satir["urunler"] . "</td>";
                echo "<td>" . $satir["toplam_fiyat"] . "₺</td>"; 
                echo "<td>" . $satir["odeme_turu"] . "</td>"; 
                echo "<td>" . $satir["tarih"] . "</td>"; 
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Hiç sipariş bulunamadı.</td></tr>";
        }
    }
    ?>

    <?php
    if (isset($_POST["gunsonusil"])) {
       
        $sql = "DELETE FROM siparisler"; 
    if ($baglan->query($sql) === TRUE) {
        echo "GÜN SONU BAŞARIYLA SİLİNDİ.";
    } else {
        echo "Hata oluştu: " . $conn->error;
    }
}
    
    ?>
    </div>
</table>

<?php
$baglan->close();
?>

