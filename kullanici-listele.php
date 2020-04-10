<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Kullanıcılar</title>
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
        <div class="header-dark" style="padding-bottom: 400px;">
            <?php
			include_once( "header.php" );
			?>
            <div>
                <form style="margin-right: 70px;margin-left: 70px;margin-top: 20px;">
                    <h1 style="color: rgba(255,255,255,0.8);font-size: 24px;">Kullanıcılar Tablosu </h1>
                    <p style="color: rgb(255,255,255);">Kullanıcıların listesi.Admin sayfasına<a href="admin.php"> geri dön</a></p>
                        <div class="table-responsive" style="background-color: rgba(255,255,255,0.7);">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Adı</th>
                                        <th>Soyadı</th>
                                        <th>Kullanıcı Adı</th>
                                        <th>Şifre</th>
                                        <th>Email</th>
                                        <th>Telefon</th>
                                        <th>Cinsiyet</th>
                                        <th>Aldığı Eğitim Kodu</th>
                                    </tr>
                                </thead>
                                <tbody>
                               <?php 
									$listele=mysqli_query(baglanti(),"SELECT * FROM kullanicilar ");
									while($liste=mysqli_fetch_array($listele,MYSQLI_BOTH))
			{
                                echo "<tr><td>".$liste['ad']."</td><td>".$liste['soyad']."</td><td>".$liste['k_kulad']."</td><td>".$liste['sifre']."</td><td>".$liste['email']."</td><td>".$liste['telefon']."</td><td>".$liste['cinsiyet']."</td><td>".$liste['a_egitim_id']."</td></tr>";
                                    
			}
									?>
                           </tbody>
                            </table>
                        </div>
                </form>
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