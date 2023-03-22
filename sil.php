<?php 

include "section/db.php";

$urunid = $_GET['urunid'];

$urunsil = $db->prepare("DELETE FROM urunler WHERE id =" . $urunid);
$urunsil->bindParam(':id', $silid);
$urunsil->execute();
if (!$urunsil->rowCount()) {
    header("Location: index.php?delete=false");
} else {
    header("Location: index.php?delete=true");
}