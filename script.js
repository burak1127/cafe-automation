let sepet = [];
let musteriler = [{ id: 1, ad: "Müşteri 1" }];
let secilenMusteriId = 1; 

document.addEventListener("DOMContentLoaded", function () {
   
    const tumKategoriler = document.querySelectorAll('.urunler');
    tumKategoriler.forEach(urunler => urunler.style.display = 'none');

   
    saatGuncelle();
    setInterval(saatGuncelle, 1000);
});

function toggleKategori(kategori) {
    const secilenKategori = document.getElementById(kategori);
    const tumKategoriler = document.querySelectorAll('.urunler');

    tumKategoriler.forEach(urunler => {
        if (urunler !== secilenKategori) {
            urunler.style.display = 'none';
        }
    });

    secilenKategori.style.display = secilenKategori.style.display === 'block' ? 'none' : 'block';
}


function SepeteEkle(urunAdi, urunFiyati, adet) {
 
    let bulunanUrun = sepet.find(item => item.urunAdi === urunAdi);
    if (bulunanUrun) {
        bulunanUrun.adet += parseInt(adet); 
    } else {
        sepet.push({ urunAdi, urunFiyati, adet: parseInt(adet) });
    }
    SepetiGoster();
}

function SepetiGoster() {
    const listSepet = document.getElementById('listSepet');
    listSepet.innerHTML = '';
    let toplamFiyat = 0;
    
    sepet.forEach((item, index) => {
        let li = document.createElement('li');
        li.innerHTML = `
            ${item.urunAdi} x ${item.adet} - ${item.urunFiyati * item.adet} TL
            <button onclick="UrunSil(${index})" style="color: red; margin-left: 10px;">❌</button>
        `;
        listSepet.appendChild(li);
        toplamFiyat += item.urunFiyati * item.adet;
    });

    document.getElementById('lblFatura').textContent = `Toplam Fatura: ${toplamFiyat} TL`;
}

function UrunSil(index) {
    if (sepet[index].adet > 1) {
        sepet[index].adet -= 1; 
    } else {
        sepet.splice(index, 1); 
    }
    SepetiGoster();
}

function SiparisiTamamla() {
    const secilenOdeme = document.querySelector('input[name="odeme"]:checked');
    if (!secilenOdeme) {
        alert("Lütfen ödeme yöntemini seçiniz!");
        return;
    }

    const odemeTuru = secilenOdeme.value;
    let toplamFiyat = sepet.reduce((toplam, item) => toplam + (item.urunFiyati * item.adet), 0);
    let fisIcerik = "<ul>";

    sepet.forEach(item => {
        fisIcerik += `<li><b>${item.urunAdi} x${item.adet} - ${item.urunFiyati * item.adet} TL</b></li>`;
    });

    fisIcerik += "</ul>";

    let paraUstu = 0;

    if (odemeTuru === "Nakit") {
        const nakitMiktar = parseFloat(document.getElementById('nakitMiktar').value);
        if (isNaN(nakitMiktar) || nakitMiktar < toplamFiyat) {
            alert("Geçerli bir tutar giriniz!");
            return;
        }
        paraUstu = nakitMiktar - toplamFiyat;
        fisIcerik += `<div><b>Alınan Tutar: ${nakitMiktar} TL</b></div><br>`;
    }

    fisIcerik += `<div><b>Ödeme Yöntemi: ${odemeTuru}</b></div><br>`;
    fisIcerik += `<div><b>Toplam Tutar: ${toplamFiyat} TL</b></div><br>`;

    document.getElementById('fisIcerik').innerHTML = fisIcerik;
    document.getElementById('fisPayment').textContent = odemeTuru === "Nakit" ? `Para Üstü: ${paraUstu} TL` : ``;
    document.getElementById('fis').style.display = 'block';

    
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'siparisler.php', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            alert(xhr.responseText);  
        }
    };

    xhr.send(JSON.stringify({
        musteri_id: secilenMusteriId,
        urunler: sepet.map(item => ({ urun: item.urunAdi, adet: item.adet, fiyat: item.urunFiyati })),
        toplam_fiyat: toplamFiyat,
        odeme_turu: odemeTuru
    }));

    
    sepet = [];
    SepetiGoster();
}

function SepetiBosalt() {
    sepet = [];
    SepetiGoster();
}

function YeniMusteri() {
    
        var musteriAdi = prompt("Müşteri adını giriniz:");

    
    if (musteriAdi) {
        document.getElementById("musteri").innerHTML = "<b>Müşteri Adı: " + musteriAdi + "</b>";
    }
    
}

function UrunleriGuncelle() {
    alert("Ürünler güncelleniyor...");
}

function MusteriDegistir() {
    let secilenMusteriId = document.getElementById('cmbMusteri').value;
    alert(`Seçilen Müşteri: ${musteriler.find(musteri => musteri.id === parseInt(secilenMusteriId)).ad}`);
}


function saatGuncelle() {
    const tarih = new Date();

    const gun = tarih.getDate().toString().padStart(2, '0');
    const ay = (tarih.getMonth() + 1).toString().padStart(2, '0');
    const yil = tarih.getFullYear();

    const saat = tarih.getHours().toString().padStart(2, '0');
    const dakika = tarih.getMinutes().toString().padStart(2, '0');
    const saniye = tarih.getSeconds().toString().padStart(2, '0');

    const tarihFormatlanmis = `${gun}/${ay}/${yil} ${saat}:${dakika}:${saniye}`;

    document.getElementById('date-time').textContent = tarihFormatlanmis;
}

function OdemeTuruDegisti() {
    const secilenOdeme = document.querySelector('input[name="odeme"]:checked').value;
    const nakitInput = document.getElementById('nakitMiktar');

    if (secilenOdeme === "Nakit") {
        nakitInput.style.display = "block";
    } else {
        nakitInput.style.display = "none";
        nakitInput.value = ""; 
    }
}


setInterval(saatGuncelle, 1000);


saatGuncelle();
