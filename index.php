<?php include "section/header.php" ?>

<section class="bg-light py-5">
    <div class="card">
        <div class="container py-5">
            <div class="row mb-3">
                <div class="col-md-12">
                    <a href="urun-bilgisi-ekle.php" class="btn btn-success"> Yeni Ürün Ekle</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <?php
                    if (@$_GET['added'] == 'true') {
                        echo ' <div class="alert alert-success bold text-center" role="alert"> Ürün Başarı ile eklendi </div> ';
                    } else if (@$_GET['added'] == 'false') {
                        echo ' <div class="alert alert-danger bold text-center" role="alert"> Ürün Eklerken Sorun Oluştur </div> ';
                    } else if (@$_GET['update'] == 'true') {
                        echo ' <div class="alert alert-success bold text-center" role="alert"> Başarı İle Ürün Güncellendi </div> ';
                    } else if (@$_GET['update'] == 'false') {
                        echo ' <div class="alert alert-danger bold text-center" role="alert"> Güncellerken Sorun Oluştur </div> ';
                    } else if (@$_GET['delete'] == 'true') {
                        echo ' <div class="alert alert-success bold text-center" role="alert"> Ürün Başarı İle Silindi </div> ';
                    } else if (@$_GET['delete'] == 'false') {
                        echo ' <div class="alert alert-danger bold text-center" role="alert"> Ürün Silerken Sorun oluştu </div> ';
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <table id="datatable" class="table">
                    <thead>
                        <th>Sıra</th>
                        <th>Başlık</th>
                        <th>Ürün Görsel</th>
                        <th>İşlemler</th>
                    </thead>
                    <tbody>
                        <?php

                        $sorgu = $db->prepare('SELECT * FROM urunler');
                        $sorgu->execute(array());
                        $yaz = $sorgu->fetchAll();


                        foreach ($yaz as $yazdir) {
                        ?>
                            <tr>
                                <td><?php echo $yazdir['id'] ?></td>
                                <td><?php echo $yazdir['baslik'] ?></td>
                                <td><img src="<?php echo 'uploads/' . $yazdir['resim'] ?>" alt=""></td>
                                <td>
                                    <a href="duzenle.php?urunid=<?php echo $yazdir['id'] ?>" class="btn btn-success">Düzenle</a>
                                    <a href="sil.php?urunid=<?php echo $yazdir['id'] ?>" class="btn btn-danger">Sil</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


<?php include "section/footer.php" ?>