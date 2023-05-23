<?php

require_once "randevu_sql.php";


if (isset($_POST["tc"]))
{
    $form_username = $_POST["tc"];
    $form_password = $_POST["password"];
    $form_email = $_POST["email"];
    
    $passlen = strlen($form_password);
    if($passlen < 6 || $passlen > 15)
    {
        echo "Şifre en az 6, en fazla 15 karakterden oluşmalıdır!";
        exit;
    }
    $form_password_hash = hash("sha256", $form_password);


    $rt = mysqli_query($db, "INSERT INTO `hasta_veri` (`tc`, `password`, `email`) VALUES ('".$form_username."', '".$form_password_hash."', '".$form_email."')");

    if(mysqli_errno($db) != 0)
    {
        echo "Bir hata meydana geldi!";
        exit;
    }

    echo "Kullanıcı kaydınız başarılı!<br>";
    echo "Giriş yapmak için <a href='login.php'>tıklayınız</a>";

}
else
{
?>


<form method="post" action="randevu.php">
    TC numarası: <input type="text" name="tc"><br>
    Ad: <input type="text" name="ad"><br>
    Soyad: <input type="text" name="soyad"><br>
    E-posta: <input type="text" name="email"><br>
    Şifre: <input type="password" name="password"><br>
    Telefon numarası: <input type="text" name="telefon_no"><br>
    Randevu Tarihi: <input type="date" name="randevu_tarih"><br>
    Cinsiyet: <input type="radio" name="cinsiyet" value="Erkek">Erkek
             <input type="radio" name="cinsiyet" value="Kadın">Kadın<br>
    Yaş: <input type="number" name="yas"><br>
    <input type="submit" value="Randevu Al">
</form>


<?php
}
?>