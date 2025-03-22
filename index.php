<?php
$baglan = new mysqli("localhost", "root", "", "databasekafe");

if ($baglan->connect_error) {
    die("<p style='color:red'>Bağlantı başarısız! " . $baglan->connect_error . "</p>");
}

$urunadi = "tavuklusalata";
$fiyattavuklusalata = 0; 


$sql = $baglan->prepare("SELECT fiyat FROM ürünler WHERE ürünadi = ?");
$sql->bind_param("s", $urunadi);
$sql->execute();
$sonuc = $sql->get_result();

if ($sonuc->num_rows > 0) {
    $urun = $sonuc->fetch_assoc();
    $fiyattavuklusalata = $urun["fiyat"]; 
} 
$baglan->close();
?>
<?php
$baglan = new mysqli("localhost", "root", "", "databasekafe");

if ($baglan->connect_error) {
    die("<p style='color:red'>Bağlantı başarısız! " . $baglan->connect_error . "</p>");
}

$urunadi = "tonbaliksalata";
$fiyattonbaliksalata = 0; 

$sql = $baglan->prepare("SELECT fiyat FROM ürünler WHERE ürünadi = ?");
$sql->bind_param("s", $urunadi);
$sql->execute();
$sonuc = $sql->get_result();

if ($sonuc->num_rows > 0) {
    $urun = $sonuc->fetch_assoc();
    $fiyattonbaliksalata = $urun["fiyat"]; 
} 

$baglan->close();
?>
<?php
$baglan = new mysqli("localhost", "root", "", "databasekafe");

if ($baglan->connect_error) {
    die("<p style='color:red'>Bağlantı başarısız! " . $baglan->connect_error . "</p>");
}

$urunadi = "akdenizsalata";
$fiyatakdenizsalata = 0; 


$sql = $baglan->prepare("SELECT fiyat FROM ürünler WHERE ürünadi = ?");
$sql->bind_param("s", $urunadi);
$sql->execute();
$sonuc = $sql->get_result();

if ($sonuc->num_rows > 0) {
    $urun = $sonuc->fetch_assoc();
    $fiyatakdenizsalata = $urun["fiyat"]; 
} 

$baglan->close();
?>
<?php
$baglan = new mysqli("localhost", "root", "", "databasekafe");

if ($baglan->connect_error) {
    die("<p style='color:red'>Bağlantı başarısız! " . $baglan->connect_error . "</p>");
}

$urunadi = "tavuklusandvic";
$fiyattavuklusandvic = 0;


$sql = $baglan->prepare("SELECT fiyat FROM ürünler WHERE ürünadi = ?");
$sql->bind_param("s", $urunadi);
$sql->execute();
$sonuc = $sql->get_result();

if ($sonuc->num_rows > 0) {
    $urun = $sonuc->fetch_assoc();
    $fiyattavuklusandvic = $urun["fiyat"]; 
} 

$baglan->close();
?>
<?php
$baglan = new mysqli("localhost", "root", "", "databasekafe");

if ($baglan->connect_error) {
    die("<p style='color:red'>Bağlantı başarısız! " . $baglan->connect_error . "</p>");
}

$urunadi = "peynirlisandvic";
$fiyatpeynirlisandvic = 0; 


$sql = $baglan->prepare("SELECT fiyat FROM ürünler WHERE ürünadi = ?");
$sql->bind_param("s", $urunadi);
$sql->execute();
$sonuc = $sql->get_result();

if ($sonuc->num_rows > 0) {
    $urun = $sonuc->fetch_assoc();
    $fiyatpeynirlisandvic = $urun["fiyat"]; 
} 

$baglan->close();
?>
<?php
$baglan = new mysqli("localhost", "root", "", "databasekafe");

if ($baglan->connect_error) {
    die("<p style='color:red'>Bağlantı başarısız! " . $baglan->connect_error . "</p>");
}

$urunadi = "karisiktost";
$fiyatkarisiktost = 0; 


$sql = $baglan->prepare("SELECT fiyat FROM ürünler WHERE ürünadi = ?");
$sql->bind_param("s", $urunadi);
$sql->execute();
$sonuc = $sql->get_result();

if ($sonuc->num_rows > 0) {
    $urun = $sonuc->fetch_assoc();
    $fiyatkarisiktost = $urun["fiyat"]; 
}

$baglan->close();
?>
<?php
$baglan = new mysqli("localhost", "root", "", "databasekafe");

if ($baglan->connect_error) {
    die("<p style='color:red'>Bağlantı başarısız! " . $baglan->connect_error . "</p>");
}

$urunadi = "sucuklutost";
$fiyatsucuklutost = 0;


$sql = $baglan->prepare("SELECT fiyat FROM ürünler WHERE ürünadi = ?");
$sql->bind_param("s", $urunadi);
$sql->execute();
$sonuc = $sql->get_result();

if ($sonuc->num_rows > 0) {
    $urun = $sonuc->fetch_assoc();
    $fiyatsucuklutost = $urun["fiyat"]; 
} 

$baglan->close();
?>
<?php
$baglan = new mysqli("localhost", "root", "", "databasekafe");

if ($baglan->connect_error) {
    die("<p style='color:red'>Bağlantı başarısız! " . $baglan->connect_error . "</p>");
}

$urunadi = "kasarlitost";
$fiyatkasarlitost = 0; 


$sql = $baglan->prepare("SELECT fiyat FROM ürünler WHERE ürünadi = ?");
$sql->bind_param("s", $urunadi);
$sql->execute();
$sonuc = $sql->get_result();

if ($sonuc->num_rows > 0) {
    $urun = $sonuc->fetch_assoc();
    $fiyatkasarlitost = $urun["fiyat"]; 
} 

$baglan->close();
?>
<?php
$baglan = new mysqli("localhost", "root", "", "databasekafe");

if ($baglan->connect_error) {
    die("<p style='color:red'>Bağlantı başarısız! " . $baglan->connect_error . "</p>");
}

$urunadi = "kruvasan";
$fiyatkruvasan = 0;


$sql = $baglan->prepare("SELECT fiyat FROM ürünler WHERE ürünadi = ?");
$sql->bind_param("s", $urunadi);
$sql->execute();
$sonuc = $sql->get_result();

if ($sonuc->num_rows > 0) {
    $urun = $sonuc->fetch_assoc();
    $fiyatkruvasan = $urun["fiyat"];
}
$baglan->close();
?>
<?php
$baglan = new mysqli("localhost", "root", "", "databasekafe");

if ($baglan->connect_error) {
    die("<p style='color:red'>Bağlantı başarısız! " . $baglan->connect_error . "</p>");
}

$urunadi = "profiterol";
$fiyatprofiterol = 0; 


$sql = $baglan->prepare("SELECT fiyat FROM ürünler WHERE ürünadi = ?");
$sql->bind_param("s", $urunadi);
$sql->execute();
$sonuc = $sql->get_result();

if ($sonuc->num_rows > 0) {
    $urun = $sonuc->fetch_assoc();
    $fiyatprofiterol = $urun["fiyat"]; 
} 

$baglan->close();
?>
<?php
$baglan = new mysqli("localhost", "root", "", "databasekafe");

if ($baglan->connect_error) {
    die("<p style='color:red'>Bağlantı başarısız! " . $baglan->connect_error . "</p>");
}

$urunadi = "kurabiye";
$fiyatkurabiye = 0;


$sql = $baglan->prepare("SELECT fiyat FROM ürünler WHERE ürünadi = ?");
$sql->bind_param("s", $urunadi);
$sql->execute();
$sonuc = $sql->get_result();

if ($sonuc->num_rows > 0) {
    $urun = $sonuc->fetch_assoc();
    $fiyatkurabiye = $urun["fiyat"]; 
} 

$baglan->close();
?>
<?php
$baglan = new mysqli("localhost", "root", "", "databasekafe");

if ($baglan->connect_error) {
    die("<p style='color:red'>Bağlantı başarısız! " . $baglan->connect_error . "</p>");
}

$urunadi = "pastalar";
$fiyatpastalar = 0;


$sql = $baglan->prepare("SELECT fiyat FROM ürünler WHERE ürünadi = ?");
$sql->bind_param("s", $urunadi);
$sql->execute();
$sonuc = $sql->get_result();

if ($sonuc->num_rows > 0) {
    $urun = $sonuc->fetch_assoc();
    $fiyatpastalar = $urun["fiyat"]; 
} 

$baglan->close();
?>
<?php
$baglan = new mysqli("localhost", "root", "", "databasekafe");

if ($baglan->connect_error) {
    die("<p style='color:red'>Bağlantı başarısız! " . $baglan->connect_error . "</p>");
}

$urunadi = "brownie";
$fiyatbrownie = 0;

$sql = $baglan->prepare("SELECT fiyat FROM ürünler WHERE ürünadi = ?");
$sql->bind_param("s", $urunadi);
$sql->execute();
$sonuc = $sql->get_result();

if ($sonuc->num_rows > 0) {
    $urun = $sonuc->fetch_assoc();
    $fiyatbrownie = $urun["fiyat"]; 
} 

$baglan->close();
?>
<?php
$baglan = new mysqli("localhost", "root", "", "databasekafe");

if ($baglan->connect_error) {
    die("<p style='color:red'>Bağlantı başarısız! " . $baglan->connect_error . "</p>");
}

$urunadi = "tiramisu";
$fiyattiramisu = 0; 


$sql = $baglan->prepare("SELECT fiyat FROM ürünler WHERE ürünadi = ?");
$sql->bind_param("s", $urunadi);
$sql->execute();
$sonuc = $sql->get_result();

if ($sonuc->num_rows > 0) {
    $urun = $sonuc->fetch_assoc();
    $fiyattiramisu = $urun["fiyat"]; 
} 

$baglan->close();
?>
<?php
$baglan = new mysqli("localhost", "root", "", "databasekafe");

if ($baglan->connect_error) {
    die("<p style='color:red'>Bağlantı başarısız! " . $baglan->connect_error . "</p>");
}

$urunadi = "cheescake";
$fiyatcheescake = 0; 


$sql = $baglan->prepare("SELECT fiyat FROM ürünler WHERE ürünadi = ?");
$sql->bind_param("s", $urunadi);
$sql->execute();
$sonuc = $sql->get_result();

if ($sonuc->num_rows > 0) {
    $urun = $sonuc->fetch_assoc();
    $fiyatcheescake = $urun["fiyat"]; 
} 

$baglan->close();
?>
<?php
$baglan = new mysqli("localhost", "root", "", "databasekafe");

if ($baglan->connect_error) {
    die("<p style='color:red'>Bağlantı başarısız! " . $baglan->connect_error . "</p>");
}

$urunadi = "baklava";
$fiyatbaklava = 0;


$sql = $baglan->prepare("SELECT fiyat FROM ürünler WHERE ürünadi = ?");
$sql->bind_param("s", $urunadi);
$sql->execute();
$sonuc = $sql->get_result();

if ($sonuc->num_rows > 0) {
    $urun = $sonuc->fetch_assoc();
    $fiyatbaklava = $urun["fiyat"]; 
}

$baglan->close();
?>
<?php
$baglan = new mysqli("localhost", "root", "", "databasekafe");

if ($baglan->connect_error) {
    die("<p style='color:red'>Bağlantı başarısız! " . $baglan->connect_error . "</p>");
}

$urunadi = "bitkicay";
$fiyatbitkicay = 0; 


$sql = $baglan->prepare("SELECT fiyat FROM ürünler WHERE ürünadi = ?");
$sql->bind_param("s", $urunadi);
$sql->execute();
$sonuc = $sql->get_result();

if ($sonuc->num_rows > 0) {
    $urun = $sonuc->fetch_assoc();
    $fiyatbitkicay = $urun["fiyat"]; 
} 

$baglan->close();
?>
<?php
$baglan = new mysqli("localhost", "root", "", "databasekafe");

if ($baglan->connect_error) {
    die("<p style='color:red'>Bağlantı başarısız! " . $baglan->connect_error . "</p>");
}

$urunadi = "mocha";
$fiyatmocha = 0; 


$sql = $baglan->prepare("SELECT fiyat FROM ürünler WHERE ürünadi = ?");
$sql->bind_param("s", $urunadi);
$sql->execute();
$sonuc = $sql->get_result();

if ($sonuc->num_rows > 0) {
    $urun = $sonuc->fetch_assoc();
    $fiyatmocha = $urun["fiyat"];
}
$baglan->close();
?><?php
$baglan = new mysqli("localhost", "root", "", "databasekafe");

if ($baglan->connect_error) {
    die("<p style='color:red'>Bağlantı başarısız! " . $baglan->connect_error . "</p>");
}

$urunadi = "macchiato";
$fiyatmacchiato = 0; 

$sql = $baglan->prepare("SELECT fiyat FROM ürünler WHERE ürünadi = ?");
$sql->bind_param("s", $urunadi);
$sql->execute();
$sonuc = $sql->get_result();

if ($sonuc->num_rows > 0) {
    $urun = $sonuc->fetch_assoc();
    $fiyatmacchiato = $urun["fiyat"];
} 

$baglan->close();
?>
<?php
$baglan = new mysqli("localhost", "root", "", "databasekafe");

if ($baglan->connect_error) {
    die("<p style='color:red'>Bağlantı başarısız! " . $baglan->connect_error . "</p>");
}

$urunadi = "cappuccino";
$fiyatcappuccino = 0; 


$sql = $baglan->prepare("SELECT fiyat FROM ürünler WHERE ürünadi = ?");
$sql->bind_param("s", $urunadi);
$sql->execute();
$sonuc = $sql->get_result();

if ($sonuc->num_rows > 0) {
    $urun = $sonuc->fetch_assoc();
    $fiyatcappuccino = $urun["fiyat"]; 
}

$baglan->close();
?>
<?php
$baglan = new mysqli("localhost", "root", "", "databasekafe");

if ($baglan->connect_error) {
    die("<p style='color:red'>Bağlantı başarısız! " . $baglan->connect_error . "</p>");
}

$urunadi = "latte";
$fiyatlatte = 0;


$sql = $baglan->prepare("SELECT fiyat FROM ürünler WHERE ürünadi = ?");
$sql->bind_param("s", $urunadi);
$sql->execute();
$sonuc = $sql->get_result();

if ($sonuc->num_rows > 0) {
    $urun = $sonuc->fetch_assoc();
    $fiyatlatte = $urun["fiyat"]; 
} 

$baglan->close();
?>
<?php
$baglan = new mysqli("localhost", "root", "", "databasekafe");

if ($baglan->connect_error) {
    die("<p style='color:red'>Bağlantı başarısız! " . $baglan->connect_error . "</p>");
}

$urunadi = "americano";
$fiyatamericano = 0; 


$sql = $baglan->prepare("SELECT fiyat FROM ürünler WHERE ürünadi = ?");
$sql->bind_param("s", $urunadi);
$sql->execute();
$sonuc = $sql->get_result();

if ($sonuc->num_rows > 0) {
    $urun = $sonuc->fetch_assoc();
    $fiyatamericano = $urun["fiyat"]; 
} 

$baglan->close();
?>
<?php
$baglan = new mysqli("localhost", "root", "", "databasekafe");

if ($baglan->connect_error) {
    die("<p style='color:red'>Bağlantı başarısız! " . $baglan->connect_error . "</p>");
}

$urunadi = "çay";
$fiyatcay = 0; 


$sql = $baglan->prepare("SELECT fiyat FROM ürünler WHERE ürünadi = ?");
$sql->bind_param("s", $urunadi);
$sql->execute();
$sonuc = $sql->get_result();

if ($sonuc->num_rows > 0) {
    $urun = $sonuc->fetch_assoc();
    $fiyatcay = $urun["fiyat"];
}

$baglan->close();
?>
<?php
$baglan = new mysqli("localhost", "root", "", "databasekafe");

if ($baglan->connect_error) {
    die("<p style='color:red'>Bağlantı başarısız! " . $baglan->connect_error . "</p>");
}

$urunadi = "espresso";
$fiyatespresso = 0; 


$sql = $baglan->prepare("SELECT fiyat FROM ürünler WHERE ürünadi = ?");
$sql->bind_param("s", $urunadi);
$sql->execute();
$sonuc = $sql->get_result();

if ($sonuc->num_rows > 0) {
    $urun = $sonuc->fetch_assoc();
    $fiyatespresso = $urun["fiyat"];
} 

$baglan->close();
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sipariş Otomasyonu</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body class="body" >
    
    
    <div class="date-time" id="date-time"></div>

    <div class="musteri">
        <h1>KAFE</h1>
    </div>
    <div class="container">
        <div class="left">


            <h3>🛒 Sepetiniz:</h3>
            <ul id="listSepet"></ul>
            <h3 id="lblFatura">Toplam Fatura: 0 TL</h3>

            <button class="kategori-btn kahve1" onclick="toggleKategori('kahve')">☕ KAHVELER</button>
            <div id="kahve" class="urunler">
                
                <div class="product-btn">
                    <img src="images/espresso.jpg" alt="Espresso" class="urun-resim">
                    <span>Espresso</span>
                    <input class="kutu" type="number" id="inputespresso" value="1" min="1" />
                    <button class="btnekle" style="width: 150px; height: 50px;"
                        onclick="SepeteEkle('Espresso', <?php echo $fiyatespresso; ?>, document.getElementById('inputespresso').value)">Ekle</button>
                </div>
                <div class="product-btn">
                    <img src="images/americano.jpg" alt="Americano" class="urun-resim">
                    <span>Americano</span>
                    <input class="kutu" type="number" id="inputamericano" value="1" min="1" />
                    <button class="btnekle" style="width: 150px; height: 50px;"
                        onclick="SepeteEkle('Americano', <?php echo $fiyatamericano; ?>, document.getElementById('inputamericano').value)">Ekle</button>
                </div>
                <div class="product-btn">
                    <img src="images/latte.jpg" alt="Latte" class="urun-resim">
                    <span>Latte</span>
                    <input class="kutu" type="number" id="inputlatte" value="1" min="1" />
                    <button class="btnekle" style="width: 150px; height: 50px;"
                        onclick="SepeteEkle('Latte', <?php echo $fiyatlatte; ?>, document.getElementById('inputlatte').value)">Ekle</button>
                </div>
                <div class="product-btn">
                    <img src="images/cappuccino.jpg" alt="Cappuccino" class="urun-resim">
                    <span>Cappuccino</span>
                    <input class="kutu" type="number" id="inputcappuccino" value="1" min="1" />
                    <button class="btnekle" style="width: 150px; height: 50px;"
                        onclick="SepeteEkle('Cappuccino', <?php echo $fiyatcappuccino; ?>, document.getElementById('inputcappuccino').value)">Ekle</button>
                </div>
                <div class="product-btn">
                    <img src="images/macchiato.jpg" alt="Macchiato" class="urun-resim">
                    <span>Macchiato</span>
                    <input class="kutu" type="number" id="inputmacchiato" value="1" min="1" />
                    <button class="btnekle" style="width: 150px; height: 50px;"
                        onclick="SepeteEkle('Macchiato', <?php echo $fiyatmacchiato; ?>, document.getElementById('inputmacchiato').value)">Ekle</button>
                </div>
                <div class="product-btn">
                    <img src="images/mocha.jpg" alt="Mocha" class="urun-resim">
                    <span>Mocha</span>
                    <input class="kutu" type="number" id="inputmocha" value="1" min="1" />
                    <button class="btnekle" style="width: 150px; height: 50px;"
                        onclick="SepeteEkle('Mocha', <?php echo $fiyatmocha; ?>, document.getElementById('inputmocha').value)">Ekle</button>
                </div>
                
            </div>

            <button class="kategori-btn cay" onclick="toggleKategori('cay')">☕ ÇAYLAR</button>
            <div id="cay" class="urunler">
                <div class="product-btn">
                   <img src="images/cay1.jpg" alt="Çay" class="urun-resim">
                    <span>Çay</span>
                    <input class="kutu" type="number" id="inputCay" value="1" min="1" />
                    <button class="btnekle" style="width: 150px; height: 50px;" 
                        onclick="SepeteEkle('Çay', <?php echo $fiyatcay; ?>, document.getElementById('inputCay').value)">Ekle
                    </button>
                </div>
                <div class="product-btn">
                    <img src="images/bitkicay.jpg" alt="Bitkicay" class="urun-resim">
                    <span>Bitki Çayları</span>
                    <input class="kutu" type="number" id="inputbitkicay" value="1" min="1" />
                    <button class="btnekle" style="width: 150px; height: 50px;"
                        onclick="SepeteEkle('Bitki Çayları', <?php echo $fiyatbitkicay; ?>, document.getElementById('inputbitkicay').value)">Ekle</button>
                </div>
            </div>

            <button class="kategori-btn tatli" onclick="toggleKategori('tatli')">🍰 TATLILAR</button>
            <div id="tatli" class="urunler">
                <div class="product-btn">
                    <img src="images/baklava,.jpeg" alt="Baklava" class="urun-resim">
                    <span>Baklava </span>
                    <input class="kutu" type="number" id="inputBaklava" value="1" min="1" />
                    <button class="btnekle" style="width: 150px; height: 50px;"
                        onclick="SepeteEkle('Baklava', <?php echo $fiyatbaklava; ?>, document.getElementById('inputBaklava').value)">Ekle</button>
                </div>
                <div class="product-btn">
                    <img src="images/cheescake.jpg" alt="cheescake" class="urun-resim">
                    <span>Cheescake</span>
                    <input class="kutu" type="number" id="inputcheescake" value="1" min="1" />
                    <button class="btnekle" style="width: 150px; height: 50px;"
                        onclick="SepeteEkle('Cheescake', <?php echo $fiyatcheescake; ?>, document.getElementById('inputcheescake').value)">Ekle</button>
                </div>
                <div class="product-btn">
                    <img src="images/tiramisu.jpg" alt="Tiramisu" class="urun-resim">
                    <span>Tiramisu</span>
                    <input class="kutu" type="number" id="inputtiramisu" value="1" min="1" />
                    <button class="btnekle" style="width: 150px; height: 50px;"
                        onclick="SepeteEkle('Tiramisu', <?php echo $fiyattiramisu; ?>, document.getElementById('inputtiramisu').value)">Ekle</button>
                </div>
                <div class="product-btn">
                    <img src="images/brownie.jpg" alt="Brownie" class="urun-resim">
                    <span>Brownie</span>
                    <input class="kutu" type="number" id="inputbrownie" value="1" min="1" />
                    <button class="btnekle" style="width: 150px; height: 50px;"
                        onclick="SepeteEkle('Brownie', <?php echo $fiyatbrownie; ?>, document.getElementById('inputbrownie').value)">Ekle</button>
                </div>
                <div class="product-btn">
                    <img src="images/pasta.jpg" alt="Pastalar" class="urun-resim">
                    <span>Pastalar</span>
                    <input class="kutu" type="number" id="inputpasta" value="1" min="1" />
                    <button class="btnekle" style="width: 150px; height: 50px;"
                        onclick="SepeteEkle('Pasta', <?php echo $fiyatpastalar; ?>, document.getElementById('inputpasta').value)">Ekle</button>
                </div>
                <div class="product-btn">
                    <img src="images/kurabiye.jpg" alt="Kurabiye" class="urun-resim">
                    <span>Kurabiye</span>
                    <input class="kutu" type="number" id="inputkurabiye" value="1" min="1" />
                    <button class="btnekle" style="width: 150px; height: 50px;"
                        onclick="SepeteEkle('Kurabiye', <?php echo $fiyatkurabiye; ?>, document.getElementById('inputkurabiye').value)">Ekle</button>
                </div>
                <div class="product-btn">
                    <img src="images/profiterol.jpeg" alt="Profiterol" class="urun-resim">
                    <span>Profiterol </span>
                    <input class="kutu" type="number" id="inputProfiterol" value="1" min="1" />
                    <button class="btnekle" style="width: 150px; height: 50px;"
                        onclick="SepeteEkle('Profiterol', <?php echo $fiyatprofiterol; ?>, document.getElementById('inputProfiterol').value)">Ekle</button>
                </div>
            </div>
            <button class="kategori-btn atistirmalik" onclick="toggleKategori('atistirmalik')">🥪 ATIŞTIRMALIKLAR</button>
            <div id="atistirmalik" class="urunler">
                <div class="product-btn">
                    <img src="images/kruvasan.jpg" alt="Kruvasan" class="urun-resim">
                    <span>Kruvasan </span>
                    <input class="kutu" type="number" id="inputkruvasan" value="1" min="1" />
                    <button class="btnekle" style="width: 150px; height: 50px;"
                        onclick="SepeteEkle('Kruvasan', <?php echo $fiyatkruvasan; ?>, document.getElementById('inputkruvasan').value)">Ekle</button>
                </div>
                <div class="product-btn">
                    <img src="images/kasartost.jpg" alt="kasartost" class="urun-resim">
                    <span>Kaşarlı Tost </span>
                    <input class="kutu" type="number" id="inputkasartost" value="1" min="1" />
                    <button class="btnekle" style="width: 150px; height: 50px;"
                        onclick="SepeteEkle('Kaşarlı Tost', <?php echo $fiyatkasarlitost; ?>, document.getElementById('inputkasartost').value)">Ekle</button>
                </div>
                <div class="product-btn">
                    <img src="images/sucuktost.jpg" alt="sucuktost" class="urun-resim">
                    <span>Sucuklu Tost </span>
                    <input class="kutu" type="number" id="inputsucuktost" value="1" min="1" />
                    <button class="btnekle" style="width: 150px; height: 50px;"
                        onclick="SepeteEkle('Sucuklu Tost', <?php echo $fiyatsucuklutost; ?>, document.getElementById('inputsucuktost').value)">Ekle</button>
                </div>
                <div class="product-btn">
                    <img src="images/karisiktost.jpg" alt="karisiktost" class="urun-resim">
                    <span>Karışık Tost </span>
                    <input class="kutu" type="number" id="inputkarisiktost" value="1" min="1" />
                    <button class="btnekle" style="width: 150px; height: 50px;"
                        onclick="SepeteEkle('Karışık Tost', <?php echo $fiyatkarisiktost; ?>, document.getElementById('inputkarisiktost').value)">Ekle</button>
                </div>
                <div class="product-btn">
                    <img src="images/peynirsandvic.jpg" alt="peynirsandvic" class="urun-resim">
                    <span>Peynirli Sandviç </span>
                    <input class="kutu" type="number" id="inputpeynirsandvic" value="1" min="1" />
                    <button class="btnekle" style="width: 150px; height: 50px;"
                        onclick="SepeteEkle('Peynirli Sandviç', <?php echo $fiyatpeynirlisandvic; ?>, document.getElementById('inputpeynirsandvic').value)">Ekle</button>
                </div>
                <div class="product-btn">
                    <img src="images/tavuklusandvic.jpg" alt="tavuklusandvic" class="urun-resim">
                    <span>tavuklu Sandviç </span>
                    <input class="kutu" type="number" id="inputtavuklusandvic" value="1" min="1" />
                    <button class="btnekle" style="width: 150px; height: 50px;"
                        onclick="SepeteEkle('Tavuklu Sandviç', <?php echo $fiyattavuklusandvic; ?>, document.getElementById('inputtavuklusandvic').value)">Ekle</button>
                </div>
                <div class="product-btn">
                    <img src="images/akdenizsalata.jpg" alt="akdenizsalata" class="urun-resim">
                    <span>Akdeniz Salatası </span>
                    <input class="kutu" type="number" id="inputakdenizsalata" value="1" min="1" />
                    <button class="btnekle" style="width: 150px; height: 50px;"
                        onclick="SepeteEkle('Akdeniz Salatası', <?php echo $fiyatakdenizsalata; ?>, document.getElementById('inputakdenizsalata').value)">Ekle</button>
                </div>
                <div class="product-btn">
                    <img src="images/tonsalata.jpg" alt="tonsalata" class="urun-resim">
                    <span>Ton Balıklı Salata </span>
                    <input class="kutu" type="number" id="inputtonsalata" value="1" min="1" />
                    <button class="btnekle" style="width: 150px; height: 50px;"
                        onclick="SepeteEkle('Ton Balıklı Salata', <?php echo $fiyattonbaliksalata; ?>, document.getElementById('inputtonsalata').value)">Ekle</button>
                </div>
                <div class="product-btn">
                    <img src="images/tavuksalata.jpg" alt="tavuksalata" class="urun-resim">
                    <span>Tavuklu Salata </span>
                    <input class="kutu" type="number" id="inputtavuksalata" value="1" min="1" />
                    <button class="btnekle" style="width: 150px; height: 50px;"
                        onclick="SepeteEkle('Tavuklu Salata', <?php echo $fiyattavuklusalata; ?>, document.getElementById('inputtavuksalata').value)">Ekle</button>
                </div>
            </div>
        
        </div>

        <div class="right">
            <h3>Ödeme Yöntemi:</h3>
            <div class="radio-group">
                <label>
                    <input type="radio" name="odeme" value="Kredi Kartı" onchange="OdemeTuruDegisti()" checked> Kredi Kartı
                </label>
                <label>
                    <input type="radio" name="odeme" value="Nakit" onchange="OdemeTuruDegisti()"> Nakit
                </label>
            </div>
            <input type="number" id="nakitMiktar" placeholder="Alınan Tutar" style="display: none; margin-top: 10px;">

            <button id= "siparisitamamla" class="btn btn-green" onclick="SiparisiTamamla()">✔ Siparişi Tamamla</button>
            <button class="btn btn-red" onclick="SepetiBosalt()">🗑 Sepeti Boşalt</button>
            <button class="btn btn-blue" onclick="YeniMusteri()">👤 Yeni Müşteri</button>
            <form action="yoneticigiris.php" method="POST">
                <button class="btn btn-yoncam" type="submit" name="gonder">Yönetici Paneli</button>
            </form>
              
            </form>



        </div>
    </div>

    <!-- Fiş Yazdırma Bölümü -->

    <div class="fis" id="fis">
        <div class="fis-header">
            <h2 class="fish2"> KAFE FİŞİ</h2>
            <div id="musteri"></div>
            
        </div>
      
        <div id="fisIcerik"></div>

        <div class="fis-payment" id="fisPayment"></div>
    </div>

    <script src="script.js">
        
    </script>

    

</body>
</html>

