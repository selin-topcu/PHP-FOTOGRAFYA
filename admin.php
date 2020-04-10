<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin Paneli</title>
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
	include("kontrol.php");
	include_once("fonksiyonlar.php");
			?>
</head>

<body>
    <div>
        <div class="header-dark" >
          <?php
			include_once("header.php");
			
			?>
            <div>
                <form style="height: 400px; margin-right: 70px;margin-left: 70px;margin-top: 20px;">
                    <h1 style="color: rgba(255,255,255,0.8);font-size: 24px;">Admin Kontrol Sayfası</h1>
                    <p style="color: rgb(255,255,255);">Kullanıcılar,eğitimler ve eğitmenleri listeleyip üzerinden güncelleme yapabilirsiniz.</p>
                      <button onClick="location.href='egitim-listele.php'" class="btn btn-primary" type="button" style="background-color: rgba(40,45,50,0.7);">Eğitimler&nbsp;</button>
                       <button onClick="location.href='egitmen-listele.php'" class="btn btn-primary"
                        type="button" style="color: rgb(255,255,255);background-color: rgba(40,45,50,0.61);">Eğitmenler&nbsp;</button>
                        <button onClick="location.href='egitim-egitmen-listele.php'" class="btn btn-primary" type="button" style="color: rgb(255,255,255);background-color: rgba(40,45,50,0.61);">Eğitim-Eğitmen</button>
                    <button
                       onClick="location.href='kullanici-listele.php'" 
                        class="btn btn-primary" type="button" style="color: rgb(255,255,255);background-color: rgba(40,45,50,0.61);">Kullanıcılar</button>
                         <button
                       onClick="location.href='cikis.php'" 
                        class="btn btn-primary" type="button" style="color: rgb(255,255,255);background-color: rgba(40,45,50,0.61);">Güvenli Çıkış</button>
                </form>
                
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