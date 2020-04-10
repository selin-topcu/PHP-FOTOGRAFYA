 
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
	$a=0;
   //verilerin çekilmesi				
	$sql=mysqli_query(baglanti(),"select * from egitimler");
	while($deger=mysqli_fetch_array($sql))
	{
		$id=$deger["egitim_id"];
		$egitimadi=$deger["egitim_ad"];
		$egitimbilgi=$deger["egitim_bilgi"];
		$egitimfiyat=$deger["fiyat"];
		   
		$ad_isim="ad".$id;
		$bilgi_isim="bilgi".$id;
		$fiyat_isim="fiyat".$id;
		$guncelle_isim="guncelle".$id;
		$sil_isim="sil".$id;
		
		
	//güncelleme
	if(isset($_POST[$guncelle_isim]))
		
	{
		
		if($_POST[$ad_isim]!=null)
		{
			$egitimadi=$_POST[$ad_isim];
			echo $egitimadi;
		}
		
		
		if($_POST[$bilgi_isim]!=null)
		{
			$egitimbilgi=$_POST[$bilgi_isim];

		}
		
				if($_POST[$fiyat_isim]!=null)
		{
			$egitimfiyat=$_POST[$fiyat_isim];

		}
		

		$sorgu=mysqli_query(baglanti(),"update egitimler set egitim_ad='$egitimadi',fiyat='$egitimfiyat',egitim_bilgi='$egitimbilgi' where egitim_id=$id");
		
		$a=1;
	}
		
	}
			if($a==1){
				?>

	 <div class="row register-form" >
                <div class="col-md-8 offset-md-2"  ><div class="beautiful bs-callout bs-callout-warning">
    <center><h1>Güncelleme Başarılı !</h1>
    <h2><a href="egitim-listele.php">Geri Dön</a></h2>
    <img src="assets/img/tik.png"></center>
</div></div>
            </div>
	
				<?php
				
			}
		  
//silme 
	if(isset($_POST[$sil_isim]))
	{
		$sql =  "delete from egitimler where egitim_id='$id'";
		$result =mysqli_query(baglanti(),$sql);
		
		if($result)
		{
?>
 <div class="row register-form" >
                <div class="col-md-8 offset-md-2"  ><div class="beautiful bs-callout bs-callout-warning">
    <center><h1>Silme Başarılı !</h1>
    <h2><a href="egitim-listele.php">Geri Dön</a></h2>
    <img src="assets/img/tik.png"></center>
</div></div>
            </div>
	<?php
			
		}
		
		else
		{
			echo "Kayıt Silinemedi";
		}
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
    