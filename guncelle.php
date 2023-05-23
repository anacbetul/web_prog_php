<?php

require_once "randevu_sql.php";

if(isset($_POST["tc"]) && isset($_POST["randevu_tarih"]))
{
    $tc = $_POST["tc"];
    $randevu_tarih = $_POST["randevu_tarih"];
    $q = mysqli_query($db, "INSERT INTO hasta_veri (tc, randevu_tarih) VALUES ('$tc', '$randevu_tarih')");

    if($q)
    {
        echo "Randevu başarıyla güncellendi!<br>";
        echo "Başka işlem yapmak ister misiniz?<br>";
        include("menu.php");
        exit;
    }
    else
    {
        echo "Randevu güncellenirken bir hata oluştu!";
        exit;
    }
}
else
{
?>

<form action="guncelle.php" method="POST">
    TC numarası: <input type="text" name="tc"><br>
    Tarih: <input type="date" name="randevu_tarih"><br>
    
    <button type="submit">Randevu Ekle</button>
</form>

<?php

}
?>