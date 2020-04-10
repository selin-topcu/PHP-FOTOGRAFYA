<?php
session_start();
//veritabanı bağlantımızı yapıyoruz
include('fonksiyonlar.php');
 
//girisisle.php de oluşturulan username mi burada $user_check değişkenine atıyoruz

$admin_kontrol=$_SESSION['admin'];
$sql = mysqli_query(baglanti(),"SELECT * FROM admin WHERE kulad='$admin_kontrol' ");
 
$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);

 
/* eğer $user_check değikeni tanımlı değilse admin giriş sayd-fasına yönlendirecek
*/
if(isset($admin_kontrol)==0)
{
header("Location: admin-giris.php");
}

?>