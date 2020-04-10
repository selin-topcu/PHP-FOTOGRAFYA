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
			<div class="row register-form">
				<div class="col-md-8 offset-md-2">
					<form method="post" action="kontrol-kullanici.php" class="custom-form" style="margin-top: 40px;margin-right: 70px;margin-left: 70px;padding-right: 15px;padding-left: 15px;padding-bottom: 10px;padding-top: 40px;">
						<h1 style="padding-top: 0px;margin-top: -20px;">Kayıt Ol</h1>
						<div class="form-row form-group">
							<div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Ad</label>
							</div>
							<div class="col-sm-6 input-column"><input name="ad" class="form-control" type="text" required>
							</div>
						</div>
						<div class="form-row form-group">
							<div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Soyad</label>
							</div>
							<div class="col-sm-6 input-column"><input name="soyad" class="form-control" type="text" required>
							</div>
						</div>
						<div class="form-row form-group">
							<div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email </label>
							</div>
							<div class="col-sm-6 input-column"><input name="email" class="form-control" type="email" required>
							</div>
						</div>
						<div class="form-row form-group">
							<div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Telefon</label>
							</div>
							<div class="col-sm-6 input-column"><input name="telefon" class="form-control" type="text" required>
							</div>
						</div>
						<div class="form-row form-group">
							<div class="col-sm-5 label-column">
								Kadın<input name="cinsiyet" type="radio" value="Kadın">
							</div>
							<div class="col-sm-5 label-column">
								Erkek<input name="cinsiyet" type="radio" value="Erkek" required>
							</div>
						</div>
						<div class="form-row form-group">
							<div class="col-sm-4 label-column"><label class="col-form-label">Kullanıcı Adı</label>
							</div>
							<div class="col-sm-6 input-column"><input name="kulad" class="form-control" type="text" required>
							</div>
						</div>
						<div class="form-row form-group">
							<div class="col-sm-4 label-column"><label class="col-form-label" for="password-input-field">Password </label>
							</div>
							<div class="col-sm-6 input-column"><input name="sifre" class="form-control" type="password" required>
							</div>

						</div>
						<input type="submit" class="btn btn-light submit-button" name="kayit" >

					</form>
					
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