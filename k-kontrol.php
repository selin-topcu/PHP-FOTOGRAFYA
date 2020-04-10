<?php
session_start();
include('fonksiyonlar.php');


$kullanici_kontrol=$_SESSION['kulad'];
$sql = mysqli_query(baglanti(),"SELECT * FROM kullanicilar WHERE k_kulad='$kullanici_kontrol' ");
 
$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);


if(isset($kullanici_kontrol)==0)
{
header("Location: kullanici-giris.php");
}
?>