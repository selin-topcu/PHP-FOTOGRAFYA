<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Eğitmenler</title>
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
						<h1 class="text-center" style="font-family: Montserrat, sans-serif;">Eğitmenler</h1>
					</div>
				</div>
			</div>
			<div class="container hero">
				<div class="row">
					<div class="col">
						<?php
						$sorgu = mysqli_query( baglanti(), "select * from egitmenler " );
						while ( $egitmen = mysqli_fetch_array( $sorgu, MYSQLI_BOTH ) ) {

							?>
						<!--                       bilgi kartı başı
-->
						<div class="text-center profile-card" style="margin:15px;background-color:#ffffff;">
							<div class="profile-card-img" style="background-image:url(&quot;iceland.jpg&quot;);height:150px;background-size:cover;"></div>
							<div>
							<img class="rounded-circle" src="assets/img/
							<?php echo $egitmen['resim'];
								?> 
							" height="150px" style="margin-top: -140px;">
								
								<h3>
									<!--                                Eğitmen Adı
-->
									<?php echo $egitmen["ad"]." ".$egitmen["soyad"]; ?>
								</h3>
								<p style="padding:20px;padding-bottom:0;padding-top:5px;">
									<!--                                Eğitmen Bilgileri-->
  <?php echo $egitmen["egitmen_bilgi"]; ?>

								</p>
							</div>
						</div>
						<!--                        bilgi kartı sonu-->
						<?php }?>
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