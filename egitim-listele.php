<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Eğitimleri Listele</title>
    <style>
		.egitimad{
			
			height:10 px;
		}
		
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
    <?php
			
	include_once("fonksiyonlar.php");
			?>
</head>

<body>
    <div>
        <div class="header-dark" style="padding-bottom: 500px;">
            <?php
			include_once( "header.php" );
			?>
            <div>
                <form  method="post" action="kontrol-egitim-listele.php" style="margin-right: 70px;margin-left: 70px;margin-top: 20px;">
                    <h1 style="color: rgba(255,255,255,0.8);font-size: 24px;">Eğitimleri Güncelleme-Silme Sayfası</h1>
                    <p style="color: rgb(255,255,255);">Eğitimleri listeleyip üzerinden güncelleme yapabilirsiniz.Admin sayfasına <a href="admin.php">geri dön</a></p>
                        <div class="table-responsive" style="background-color: rgba(255,255,255,0.7);">
                            <table class="table">
                                <thead>
                                    <tr>
                                       <th><?php echo "Eğitim Kodu"?></th>
                                        <th><?php echo "Eğitim Adı"?></th>
                                        <th><?php echo "Fiyat"?></th>
                                        <th><?php echo "Eğitim Bilgisi"?></th>
                                        <th><?php echo "Eğitimi Bilgisini düzenle"?></th>
                                        <th>Bilgiyi Düzenle</th>
                                    </tr>
                                </thead>
                                <tbody>
                               <?php 
									$sql=mysqli_query(baglanti(),"select * from egitimler");
	while($deger=mysqli_fetch_array($sql))
	{
		//gelen tablo bilgileri
		$id=$deger["egitim_id"];
		$egitimadi=$deger["egitim_ad"];
		$egitimbilgi=$deger["egitim_bilgi"];
		$egitimfiyat=$deger["fiyat"];
		   
				//güncelleme de her biri için farklı sütunlar da isimler "egitim_ad" ve hangi satıra ait olduğunu belirten satırlar (id)
		$ad_isim="ad".$id;
		$bilgi_isim="bilgi".$id;
		$fiyat_isim="fiyat".$id;
		$guncelle_isim="guncelle".$id;
		$sil_isim="sil".$id;
		echo "<tr>";
		   echo "<td>".$id."</td>";
		   echo "<td><input type='text' name='$ad_isim' placeholder='$egitimadi' /></td>";
		   echo "<td><input type='text' name='$fiyat_isim' placeholder='$egitimfiyat' /></td>";
		echo "<td>".$egitimbilgi."</td>";
		 echo "<td><input type='text' name='$bilgi_isim' placeholder='$egitimbilgi' /></td>";
		

		   echo "<td><input type='submit' name='$guncelle_isim' value='Düzelt'>\t
		   <input type='submit' name='$sil_isim' value='Sil'></td>";
		   echo "</tr>";	
		
		
	}
		  echo  "</tbody></table> </div>
                </form>";
                       
             ?>
            </div>
        </div>
    </div>
   <?php
	include_once( "footer.php" );
	?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>