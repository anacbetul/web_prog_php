<?php

$db_host = "sql112.epizy.com";
$db_user = "epiz_34270547";
$db_pass = "1sQedTLvJkgeoZ";
$db_name = "epiz_34270547_hastalar";


$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno())
{
    echo "Bağlantı kurulamadı!";
    exit();
}
/*
else
echo "Bağlantı başarılı...";
*/
?>