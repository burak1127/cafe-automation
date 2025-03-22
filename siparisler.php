


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "databasekafe";  


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Bağlantı başarısız: " . $conn->connect_error);
}


$data = json_decode(file_get_contents('php://input'), true);


if(isset($data['musteri_id']) && isset($data['urunler']) && isset($data['toplam_fiyat']) && isset($data['odeme_turu'])) {
    $musteri_id = $data['musteri_id'];
    $urunler = json_encode($data['urunler']); 
    $toplam_fiyat = $data['toplam_fiyat'];
    $odeme_turu = $data['odeme_turu'];

    $sql = "INSERT INTO siparisler (musteri_id, urunler, toplam_fiyat, odeme_turu) VALUES ('$musteri_id', '$urunler', '$toplam_fiyat', '$odeme_turu')";

    if ($conn->query($sql) === TRUE) {
        echo "Sipariş başarıyla kaydedildi.";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Eksik veri.";
}
?>
