<?php

require_once "randevu_sql.php";


if (isset($_POST["tc"]))
{
    $form_username = $_POST["tc"];
    $form_password = $_POST["password"];

    
    $form_password_hash = hash("sha256", $form_password);

    $q = mysqli_query($db, "SELECT * FROM hasta_veri WHERE `tc`='$form_username' AND `password`='$form_password_hash'");
    $num = mysqli_num_rows($q);

    if($num == 0)
    {
        echo "Böyle bir kullanıcı bulunamadı! Şifrenizi kontrol ediniz.";
        //include("login.php");
        exit;
    }
    else if($num == 1)
    {
        $user = mysqli_fetch_assoc($q);
        echo "Giriş başarılı! Hoş geldiniz...";
        echo "<br>";
        echo "Yapmak istediğiniz işlemi seçiniz.";
        echo "<br>";
        include("menu.php");
    }

}
else
{    
?>

<form action="login.php" method="POST">
    Tc numarası: <input type="text" name="tc"><br>
    Şifre: <input type="password" name="password"><br>

    <button type="submit">Giriş Yap!</button>
<form>

<?php
}
?>