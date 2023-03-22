
  <?php include "section/header.php" ?>
  <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <form action="urun-ekle.php" method="post" enctype="multipart/form-data">
                        <div class="card p-3">
                            <div class="card-head px-3 d-flex justify-content-between">
                                <div class="title">
                                    Ürün
                                </div>
                                <div class="buttons">
                                    <button class="btn btn-outline-success">Kaydet</button>
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
                                            <div class="col-md-9"><input name="baslik" type="text" class="form-control"></div>
                                        </div>

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Tükçe Ürün Ek Bilgi Başlığı</div>
                                            <div class="col-md-9"><input name="ek_bilgi" type="text" class="form-control"></div>
                                        </div>

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Tükçe Ürün Ek Bilgi Açıklaması</div>
                                            <div class="col-md-9"><input name="ek_bilgi_aciklmasi" type="text" class="form-control"></div>
                                        </div>

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Tükçe Meta Title</div>
                                            <div class="col-md-9"><input name="meta_title" type="text" class="form-control"></div>
                                        </div>

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Tükçe Meta Keywords</div>
                                            <div class="col-md-9"><input name="meta_keywords" type="text" class="form-control"></div>
                                        </div>

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">
                                                Tükçe Seo Adresi
                                                <p>seo Adresi Girilmesi zorunlu değildir, girilen seo adres geçerli olur.
                                                    Girilmez ise otomatik olarak Başlık kısmını referans alarak oluşturulur.
                                                </p>
                                            </div>
                                            <div class="col-md-9"><input name="seo_adres" type="text" class="form-control"></div>
                                        </div>


                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Tükçe Ürün Açıklaması</div>
                                            <div class="col-md-9"> <textarea name="urun_aciklamasi" class="ckeditor"></textarea></div>
                                        </div>

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Tükçe Video Embed Kodu</div>
                                            <div class="col-md-9"><input name="video" type="text" class="form-control"></div>
                                        </div>

                                    </div>
                                    <!-- Detaylar -->
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Ürün Kodu
                                                <p>Ürünün Kodu.</p>
                                            </div>
                                            <div class="col-md-9"><input name="urun_kodu" type="text" class="form-control"></div>
                                        </div>

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Miktar
                                                <p>üründen kaç adet olacağını belirler. Bu miktar 0 olarak girilise ürün sitede 'stokta yok' şbareleriyle listelenecektir. Eğer üründe seçenek varsa seçeneklerin stoğu ürün stoğundan büyük olamaz</p>
                                            </div>
                                            <div class="col-md-9"><input name="miktar" type="number" class="form-control"></div>
                                        </div>

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Sepet Ekstra İndirim '%'
                                                <p>Ürün speet ekstra indirimde seçeneklere fiyat girilmiş ise indirim seçenek fiyatlarına da uygulanmaktadır</p>
                                            </div>
                                            <div class="col-md-9"><input name="sepette_indirim" type="text" class="form-control"></div>
                                        </div>

                                        <div class="row mt-3 border-top pt-3">
                                            <div class="col-md-3">Vegi Oranı
                                                <p>Ürünün Veri Oranı.</p>
                                            </div>
                                            <div class="col-md-9">
                                                <select class="form-select" name="veri_orani" aria-label="Default select example" required>
                                                    <option  disabled>Vergi Oranı seçiniz</option>
                                                    <option value="1">1%</option>
                                                    <option value="2">8%</option>
                                                    <option value="3">18%</option>
                                                </select>
                                            </div>

                                            <div class="row mt-3 border-top pt-3">
                                                <div class="col-md-3">Satış Fiyatı
                                                    <p>Ürünün Satış Fiyatıdır.</p>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="bg-light p-3">
                                                        <div class="d-flex">
                                                            <input name="tl_fiyat" type="number" class="form-control"> TL
                                                        </div>
                                                        <hr>
                                                        <div class="d-flex">
                                                            <input name="euro_fiyat" type="number" class="form-control"> €
                                                        </div>
                                                        <hr>
                                                        <div class="d-flex">
                                                            <input name="dolar_fiyat" type="number" class="form-control"> $
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-3 border-top pt-3">
                                                <div class="col-md-3">2. Satış Fiyatı</div>
                                                <div class="col-md-9"><input name="fiyat_2" type="number" class="form-control"></div>
                                            </div>

                                            <div class="row mt-3 border-top pt-3">
                                                <div class="col-md-3">Stoktan Düş</div>
                                                <div class="col-md-9">
                                                    <select class="form-select" name="stoktan_dus" aria-label="Default select example" required>
                                                        <option  disabled>Stoktan Düş</option>
                                                        <option value="1">Evet</option>
                                                        <option value="2">Hayır</option>
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="row mt-3 border-top pt-3">
                                                <div class="col-md-3">Durum</div>
                                                <div class="col-md-9">
                                                    <select class="form-select" name="urun_durum" aria-label="Default select example" required>
                                                        <option  disabled>Durum</option>
                                                        <option value="1">Aktif</option>
                                                        <option value="2">Pasif</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mt-3 border-top pt-3">
                                                <div class="col-md-3">Özellik Bölümü</div>
                                                <div class="col-md-9"><input name="ozellik_bolumu" type="text" class="form-control"></div>
                                            </div>

                                            <div class="row mt-3 border-top pt-3">
                                                <div class="col-md-3">Yeni Ürün geçerlilik süresi</div>
                                                <div class="col-md-9"><input name="gecerlilik_suresi" type="text" class="form-control"></div>
                                            </div>

                                            <div class="row mt-3 border-top pt-3">
                                                <div class="col-md-3">Sıralama</div>
                                                <div class="col-md-9"><input name="siralama" type="number" class="form-control"></div>
                                            </div>

                                            <div class="row mt-3 border-top pt-3">
                                                <div class="col-md-3">Anasayfada Göster</div>
                                                <div class="col-md-9">
                                                    <select class="form-select" name="anasayfa_goster" aria-label="Default select example" required>
                                                        <option  disabled>Anasayfada Göster</option>
                                                        <option value="1">Evet</option>
                                                        <option value="2">Hayır</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mt-3 border-top pt-3">
                                                <div class="col-md-3">Yeni Ürün</div>
                                                <div class="col-md-9">
                                                    <select class="form-select" name="yeni_urun" aria-label="Default select example" required>
                                                        <option  disabled>Yeni Ürün</option>
                                                        <option value="1">Evet</option>
                                                        <option value="2">Hayır</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mt-3 border-top pt-3">
                                                <div class="col-md-3">Taksit</div>
                                                <div class="col-md-9"><input name="taksit" type="text" class="form-control"></div>
                                            </div>

                                            <div class="row mt-3 border-top pt-3">
                                                <div class="col-md-3">Garanti Süresi</div>
                                                <div class="col-md-9"><input name="garanti_suresi" type="text" class="form-control"></div>
                                            </div>

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
                                                <input type="file" name="resimler[]" class="form-control" id="resimler" multiple >
                                            </div>

                                        </div>
                                    </div>
                                    <!-- İndirim -->
                                    <div class="tab-pane fade" id="price" role="tabpanel" aria-labelledby="price-tab">
                                        İndirim Alanı olacaktır
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



<?php include "section/footer.php" ?>