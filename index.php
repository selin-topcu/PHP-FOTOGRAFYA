<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Fotoğraf Eğitim</title>
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
    
	include_once("k-kontrol.php");
			?>
</head>

<body>
    <div>
        <div class="header-dark" style="height: 518px;">
            <?php
			include_once("header.php");
			
			?>
            <div class="container hero">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h1 class="text-center" style="font-family: Montserrat, sans-serif;">Sitemize Hoşgeldiniz <?php
						echo $kullanici_kontrol;
						?></h1>
                        
                        <p class="lead text-justify text-white">&nbsp; Sitemiz de içinizdeki fotoğrafçıya dur demeden eğitimlerimize bakmak ister misiniz? &nbsp;<a href="egitim.php">Eğitimlere göz at</a>
                           </p>
                           <button
                       onClick="location.href='cikis.php'" 
                        class="btn btn-primary" type="button" style="color: rgb(255,255,255);background-color: rgba(40,45,50,0.61);">Güvenli Çıkış</button> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
			include_once("footer.php");
			
			?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>