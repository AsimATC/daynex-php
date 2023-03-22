<?php

include "section/db.php";

echo "<pre>";
print_r($_POST);
echo "<br>";
print_r($_FILES);
echo "</pre>";



/// Formu post etti kontrolü
if ($_POST) {

    $baslik = $_POST['baslik'];
    $ek_bilgi = $_POST['ek_bilgi'];
    $ek_bilgi_aciklmasi = $_POST['ek_bilgi_aciklmasi'];
    $meta_title = $_POST['meta_title'];
    $meta_keywords = $_POST['meta_keywords'];
    $seo_adres = $_POST['seo_adres'];
    $urun_aciklamasi = $_POST['urun_aciklamasi'];
    $video = $_POST['video'];
    $urun_kodu = $_POST['urun_kodu'];
    $miktar = $_POST['miktar'];
    $sepette_indirim = $_POST['sepette_indirim'];
    $tl_fiyat = $_POST['tl_fiyat'];
    $euro_fiyat = $_POST['euro_fiyat'];
    $dolar_fiyat = $_POST['dolar_fiyat'];
    $fiyat_2 = $_POST['fiyat_2'];
    $ozellik_bolumu = $_POST['ozellik_bolumu'];
    $gecerlilik_suresi = $_POST['gecerlilik_suresi'];
    $siralama = $_POST['siralama'];
    $taksit = $_POST['taksit'];
    $garanti_suresi = $_POST['garanti_suresi'];


    // Select 
    $veri_orani = $_POST['veri_orani'];
    $stoktan_dus = $_POST['stoktan_dus'];
    $urun_durum = $_POST['urun_durum'];
    $anasayfa_goster = $_POST['anasayfa_goster'];
    $yeni_urun = $_POST['yeni_urun'];


    // Resim Yükleme Komutları
    $yukleklasor = "uploads/"; // Yüklenecek klasör
    $tmp_name = $_FILES['resim']['tmp_name'];
    $name = $_FILES['resim']['name'];
    $boyut = $_FILES['resim']['size'];
    $tip = $_FILES['resim']['type'];
    $uzanti = substr($name, -4, 4);
    $rastgelesayi1 = rand(10000, 50000);
    $rastgelesayi2 = rand(10000, 50000);
    $resimad = $rastgelesayi1 . $rastgelesayi2 . $uzanti;

    // Dosya varmı kontrol
    if (strlen($name) == 0) {
        echo "bir soya giriniz !";
        exit();
    }

    // Boyut kontrol
    if ($boyut > (1024 * 1024 * 3)) {
        echo "dosya boyutu çok fazla";
        exit();
    }

    move_uploaded_file($tmp_name, "$yukleklasor/$resimad");

    // Veri tabanına kaydetme
    $ekle = $db->prepare("INSERT INTO urunler SET
        baslik = :baslik,
        ek_bilgi = :ek_bilgi,
        ek_bilgi_aciklmasi = :ek_bilgi_aciklmasi,
        meta_title = :meta_title,
        meta_keywords = :meta_keywords,
        seo_adres = :seo_adres,
        urun_aciklamasi = :urun_aciklamasi,
        video = :video,
        urun_kodu = :urun_kodu,
        miktar = :miktar,
        sepette_indirim = :sepette_indirim,
        tl_fiyat = :tl_fiyat,
        euro_fiyat = :euro_fiyat,
        dolar_fiyat = :dolar_fiyat,
        fiyat_2 = :fiyat_2,
        ozellik_bolumu = :ozellik_bolumu,
        gecerlilik_suresi = :gecerlilik_suresi,
        siralama = :siralama,
        taksit = :taksit,
        garanti_suresi = :garanti_suresi,
        resim = :resim
        ");

    $kontrol = $ekle->execute(array(
        "baslik" => $baslik,
        "ek_bilgi" => $ek_bilgi,
        "ek_bilgi_aciklmasi" => $ek_bilgi_aciklmasi,
        "meta_title" => $meta_title,
        "meta_keywords" => $meta_keywords,
        "seo_adres" => $seo_adres,
        "urun_aciklamasi" => $urun_aciklamasi,
        "video" => $video,
        "urun_kodu" => $urun_kodu,
        "miktar" => $miktar,
        "sepette_indirim" => $sepette_indirim,
        "tl_fiyat" => $tl_fiyat,
        "euro_fiyat" => $euro_fiyat,
        "dolar_fiyat" => $dolar_fiyat,
        "fiyat_2" => $fiyat_2,
        "ozellik_bolumu" => $ozellik_bolumu,
        "gecerlilik_suresi" => $gecerlilik_suresi,
        "siralama" => $siralama,
        "taksit" => $taksit,
        "garanti_suresi" => $garanti_suresi,
        "resim" => $resimad,
    ));

    // Veri tabanına kaydettimi kontrol ediliyor
    if ($kontrol) {
        header("Location: index.php?added=true");
    } else {
        header("Location: index.php?added=false");
    }
} else { // Formu post etti kontrolü
}
