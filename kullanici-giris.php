<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Kullanıcı Girişi</title>
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
        <div class="header-dark">
           <?php
			include_once( "header.php" );
			?>
             <div class="login-card">
                <form action="kullanici-kontrol.php" method="post" class="form-signin">
                  
                    <h1 style="font-size: 30px;">Kullanıcı Girişi</h1><br> <a href="kullanici-kayit.php">Kayıtlı Değit Misiniz?</a>
                    <input name="kuladi" placeholder="Kullanıcı Adı" type="text" required ><input name="sifre" type="password"  placeholder="Şifreniz" required>
                    <div
                        class="checkbox">
                        <div class="form-check"><input name="sifre" class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Beni Hatırla</label></div>
            </div><input type="submit" class="btn btn-light submit-button"  value="Giriş" > <br><a href="admin-giris.php">Yönetici Misiniz?</a></form>
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