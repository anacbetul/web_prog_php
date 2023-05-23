<?php

require_once "randevu_sql.php";

$q = mysqli_query($db, "SELECT * FROM hasta_veri");

if(mysqli_num_rows($q) > 0)
{
    echo "<table>";
    echo "<tr><th>TC No</th><th>Ad</th><th>Soyad</th><th>E-posta</th><th>Telefon No</th><th>Randevu Tarih </th></tr>";

    while($row = mysqli_fetch_assoc($q))
    {
        echo "<tr align='center'>";
        echo "<td>".$row["tc"]."</td>";
        echo "<td>".$row["ad"]."</td>";
        echo "<td>".$row["soyad"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["telefon_no"]."</td>";
        echo "<td>".$row["randevu_tarih"]."</td>";
        echo "</tr>";
    }

    echo "</table>";
}
else
{
    echo "Kayıtlı kullanıcı bulunamadı!";
}

?>