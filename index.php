<!doctype html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daynex Back End Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/datatables.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
</head>

<body>

    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="card p-3">
                            <div class="card-head px-3 d-flex justify-content-between">
                                <div class="title">
                                    Ürün
                                </div>
                                <div class="buttons">
                                    <button type="button" class="btn btn-outline-success">Kaydet</button>
                                    <a href="index.php" class="btn btn-outline-danger">İptal</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Tab Menu Buttons -->
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Genel</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Detaylar</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Resimler</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#price" type="button" role="tab" aria-controls="price" aria-selected="false">İndirim</button>
                                    </li>
                                </ul>

                                <!-- Tab Menu Contents -->
                                <div class="tab-content" id="myTabContent">
                                    <!-- Genel -->
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Tükçe Ürün Başlık</div>
                                            <div class="col-md-9"><input type="text" class="form-control"></div>
                                        </div>

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Tükçe Ürün Ek Bilgi Başlığı</div>
                                            <div class="col-md-9"><input type="text" class="form-control"></div>
                                        </div>

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Tükçe Ürün Ek Bilgi Açıklaması</div>
                                            <div class="col-md-9"><input type="text" class="form-control"></div>
                                        </div>

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Tükçe Meta Title</div>
                                            <div class="col-md-9"><input type="text" class="form-control"></div>
                                        </div>

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Tükçe Meta Keywords</div>
                                            <div class="col-md-9"><input type="text" class="form-control"></div>
                                        </div>

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">
                                                Tükçe Seo Adresi
                                                <p>seo Adresi Girilmesi zorunlu değildir, girilen seo adres geçerli olur.
                                                    Girilmez ise otomatik olarak Başlık kısmını referans alarak oluşturulur.
                                                </p>
                                            </div>
                                            <div class="col-md-9"><input type="text" class="form-control"></div>
                                        </div>


                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Tükçe Ürün Açıklaması</div>
                                            <div class="col-md-9"> <textarea name="urun_aciklamasi" class="ckeditor"></textarea></div>
                                        </div>

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Tükçe Video Embed Kodu</div>
                                            <div class="col-md-9"><input type="text" class="form-control"></div>
                                        </div>

                                    </div>
                                    <!-- Detaylar -->
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Ürün Kodu
                                                <p>Ürünün Kodu.</p>
                                            </div>
                                            <div class="col-md-9"><input type="text" class="form-control"></div>
                                        </div>

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Miktar
                                                <p>üründen kaç adet olacağını belirler. Bu miktar 0 olarak girilise ürün sitede 'stokta yok' şbareleriyle listelenecektir. Eğer üründe seçenek varsa seçeneklerin stoğu ürün stoğundan büyük olamaz</p>
                                            </div>
                                            <div class="col-md-9"><input type="text" class="form-control"></div>
                                        </div>

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Sepet Ekstra İndirim '%'
                                                <p>Ürün speet ekstra indirimde seçeneklere fiyat girilmiş ise indirim seçenek fiyatlarına da uygulanmaktadır</p>
                                            </div>
                                            <div class="col-md-9"><input type="text" class="form-control"></div>
                                        </div>

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Vegi Oranı
                                                <p>Ürünün Veri Oranı.</p>
                                            </div>
                                            <div class="col-md-9"><input type="text" class="form-control"></div>
                                        </div>

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Satış Fiyatı
                                                <p>Ürünün Satış Fiyatıdır.</p>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="bg-light p-3">
                                                    <div class="d-flex">
                                                        <input type="text" class="form-control"> TL
                                                    </div>
                                                    <hr>
                                                    <div class="d-flex">
                                                        <input type="text" class="form-control"> $
                                                    </div>
                                                    <hr>
                                                    <div class="d-flex">
                                                        <input type="text" class="form-control"> €
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">2. Satış Fiyatı</div>
                                            <div class="col-md-9"><input type="text" class="form-control"></div>
                                        </div>

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Stoktan Düş</div>
                                            <div class="col-md-9"><input type="text" class="form-control"></div>
                                        </div>

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Durum</div>
                                            <div class="col-md-9"><input type="text" class="form-control"></div>
                                        </div>

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Özellik Bölümü</div>
                                            <div class="col-md-9"><input type="text" class="form-control"></div>
                                        </div>

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Yeni Ürün geçerlilik süresi</div>
                                            <div class="col-md-9"><input type="text" class="form-control"></div>
                                        </div>

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Sıralama süresi</div>
                                            <div class="col-md-9"><input type="text" class="form-control"></div>
                                        </div>

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Anasayfada Göster</div>
                                            <div class="col-md-9"><input type="text" class="form-control"></div>
                                        </div>

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Yeni Ürün</div>
                                            <div class="col-md-9"><input type="text" class="form-control"></div>
                                        </div>

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Taksit</div>
                                            <div class="col-md-9"><input type="text" class="form-control"></div>
                                        </div>

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Garanti Süresi</div>
                                            <div class="col-md-9"><input type="text" class="form-control"></div>
                                        </div>





                                    </div>
                                    <!-- Resimler -->
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Ürün Ana Resmi
                                                <p>Ürüne ana resim eklemek için tıklayın. Ürün resim eklerken kare resim girmelisiniz, önerilen boyut 800ğx genişlik, 800px yükseklik. Ürün resim eklerken maksimum resim boyutu 1MB ve genişlik 768px yükseklik 1024px olmalıdır.</p>
                                            </div>
                                            <div class="col-md-9">
                                                <label for="resim" class="btn btn-outline-danger">
                                                    Ana Resim
                                                </label>
                                                <input type="file" name="resim" class="form-control" id="resim">
                                            </div>
                                        </div>

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Resimler </div>
                                            <div class="col-md-9">
                                                <label for="resimler" class="btn btn-outline-success">
                                                    Resimler
                                                </label>
                                                <input type="file" name="resimler" class="form-control" id="resimler">
                                            </div>

                                        </div>
                                    </div>
                                    <!-- İndirim -->
                                    <div class="tab-pane fade" id="price" role="tabpanel" aria-labelledby="contact-tab">...</div>
                                </div>




                            </div>
                        </div>
                    </form>

                </div>
            </div>


        </div>
        </div>
        </div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        const editors = document.querySelectorAll('.ckeditor');
        editors.forEach((el) => {
            ClassicEditor
                .create(el)
                .catch(error => {
                    console.error(error);
                });
        });
    </script>

</body>

</html>