<?php
session_start();
include("fonksiyonlar.php");  
$kulad=$_POST['kuladi'];
$sifre=$_POST['sifre'];
 


$result=mysqli_query(baglanti(),"SELECT * FROM kullanicilar WHERE k_kulad='$kulad' and sifre='$sifre'");
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
 
if(mysqli_num_rows($result) == 1)
{
	$_SESSION['kulad'] = $kulad;
header("location: index.php"); // Redirecting To Other Page
}else
{
echo "<center>"."Şifreniz veya Kullanıcı adınız yanlış"."</br>"."<a href=kullanici-giris.php>Geri dön</a>"."</center>";
}
?>