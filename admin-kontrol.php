<?php
session_start();
include("fonksiyonlar.php");  
$username=$_POST['kuladi'];
$password=$_POST['sifre'];
 


$result=mysqli_query(baglanti(),"SELECT * FROM admin WHERE kulad='$username' and sifre='$password'");
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
 

if(mysqli_num_rows($result) == 1)
{
$_SESSION['admin'] = $username; // Initializing Session
header("location: admin.php"); // Redirecting To Other Page
}else
{
echo "<center>"."Şifreniz veya Kullanıcı adınız yanlış"."</br>"."<a href=admin-giris.php>Geri dön</a>"."</center>";
}
?>