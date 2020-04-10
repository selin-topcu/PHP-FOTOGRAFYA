<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Fonksiyonlar</title>
</head>
 
<body>
    <?php
    function baglanti(){
        $baglanti=mysqli_connect("localhost","root","");
        $b=mysqli_select_db($baglanti,"fotografegitim");
        $c=mysqli_query($baglanti,"SET CHARACTER SET utf8");
        $d=$baglanti and $b;
        return $d;
    }
    
    ?>
</body>
</html>