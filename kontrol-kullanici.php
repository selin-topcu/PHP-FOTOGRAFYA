
	<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Kullanıcı Kayıt</title>
	 <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/-Team-Rotating-Cards-BS4-.css">
    <link rel="stylesheet" href="assets/css/Article-Cards.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Profile-Card.css">
    <link rel="stylesheet" href="assets/css/Team-1.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
    <link rel="stylesheet" href="assets/css/Team-Clean.css">
    <link rel="stylesheet" href="assets/css/Team-with-rotating-cards.css">
    <link rel="stylesheet" href="assets/css/Button-Change-Text-on-Hover.css">
    <link rel="stylesheet" href="assets/css/Team.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
	<style>
		.beautiful.bs-callout-warning {
  background-color: #fefeba;
  border-left-color: #da913c;
  color: #000;
  padding-top: 40px;
			margin-top:40px;
			
}
		.bs-callout-warning {
  border-left-color: #aa6708;
			height:400px;
}



</style>
</head>

<body>
	<div>
		<div class="header-dark" >
			<?php
			include_once( "header.php" );
			
	include_once( "fonksiyonlar.php" );
	
		$ad=$_POST['ad'];
		$soyad=$_POST['soyad'];
		$email=$_POST['email'];
		$cinsiyet=$_POST['cinsiyet'];
		$kulad=$_POST['kulad'];
		$sifre=$_POST['sifre'];
		$telefon=$_POST['telefon'];
		
		$sorgu=mysqli_query(baglanti(),"insert into kullanicilar (ad,soyad,k_kulad,sifre,email,telefon,cinsiyet) values ('$ad','$soyad','$kulad','$sifre','$email','$telefon','$cinsiyet')");
		
			if($sorgu==true)
			{
			?>
			 <div class="row register-form" >
                <div class="col-md-8 offset-md-2"  ><div class="beautiful bs-callout bs-callout-warning">
    <center><h1>Kayıt Başarılı !</h1>
    <h2><a href="kullanici-giris.php">Giriş Yap</a></h2>
    <img src="assets/img/tik.png"></center>
</div></div>
            </div>
			<?php
			}
			else
			{
				echo "kayıt eklenemedi";
			}
				
	?>
			
			
		</div>
	</div>
	<?php
	include_once( "footer.php" );
	?>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>