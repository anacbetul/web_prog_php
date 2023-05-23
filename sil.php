<?php

require_once "randevu_sql.php";

if(isset($_POST["tc"]))
{
    $tc = $_POST["tc"];

    $q = mysqli_query($db, "DELETE FROM hasta_veri WHERE tc='$tc'");

    if($q)
    {
        echo "Kayıt başarıyla silindi!<br>";
        echo "Başka işlem yapmak ister misiniz?<br>";
        include("menu.php");
        exit;
    }
    else
    {
        echo "Kayıt silinirken bir hata oluştu!";
    }
}
else
{
?>
<form action="sil.php" method="POST">
    TC numarası: <input type="text" name="tc"><br>    
    <button type="submit">Randevu Sil</button>
</form>

<?php
}

?>