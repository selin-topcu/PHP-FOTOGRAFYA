<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Eğitimler</title>
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
	include_once( "fonksiyonlar.php" );
	?>
</head>

<body>
	<div>
		<div class="header-dark">
		
			<?php
			include_once( "header.php" );
			?>

			<div class="container hero">
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<h1 class="text-center" style="font-family: Montserrat, sans-serif;">Eğitimler</h1>
					</div>

				</div>
			</div>
			<div>
			<center>
				<form style="margin-right: 70px;margin-left: 70px;margin-top: 100px;" action="egitim.php" method="POST" name="listeleform">
					<select name="siralama" id="siralama">
						<option>Sıralama Seçiniz</option>
						<option value="1" <?php if(isset($_POST[ "listele"])) { if($_POST[ "siralama"]==1) echo "selected='selected'"; } ?>
							>Artan</option>
						<option value="2" <?php if(isset($_POST[ "listele"])) { if($_POST[ "siralama"]==2) echo "selected='selected'"; } ?>
							>Azalan</option>
					</select>
					<input name="listele" type="submit" id="listele" value="Fiyata Göre Eğitimleri Listele">
				</form>
				<!--				artan azalan -->
				<?php
				if ( isset( $_POST[ "listele" ] ) ) {
					if ( $_POST[ "siralama" ] == 1 ) {
						$sira = "ASC";
					} else if ( $_POST[ "siralama" ] == 2 ) {
						$sira = "DESC";
					}
				}



				?>
</center>
			</div>
			<div class="container hero">
				<div class="row">
					<div class="col" style="margin-right: 65px;margin-left: 65px;  padding-top: 10px;
      padding-bottom: 10px;
      padding-left: 10px;
      padding-right: 10px;">
						<!--tekrar eden eğitim kısımları-->
						<!--eğitim card başı-->

						<?php
						if ( isset( $_POST[ "listele" ] ) ) {
							$sorgu = mysqli_query( baglanti(), "select * from egitimler order by fiyat $sira" );
							while ( $egitim = mysqli_fetch_array( $sorgu, MYSQLI_BOTH ) ) {

								?>


						<figure class="snip1253">
							<div class="image">
								<?php
								echo '<img src="assets/img/' . $egitim[ 'resim' ] . '" alt="sample59"/>';
								?>
							</div>
							<figcaption>

								<h4>
									<!--  buraya eğitim adı gelecek-->
									<?php
									echo $egitim[ 'egitim_ad' ];
									?>
								</h4>

								<p>
									<!--  buraya eğitim bilgileri gelecek -->
									<?php
									echo $egitim[ 'egitim_bilgi' ];
									?>
								</p>

							</figcaption>
							<footer>
								<div class="date">
									<span class="day">
										<!--  buraya eğitim fiyatı gelecek-->
										<?php
										echo $egitim[ 'fiyat' ];
										?>

									</span><span class="month">₺</span>
								</div>
							</footer><a href="ders-kayit.php"></a>
						</figure>
						<!--eğitim card sonu-->
						<?php }}?>
					</div>
				</div>
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