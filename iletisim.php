<?php
    if($_POST){
        $donus="";
        $isim = $_POST['adi'];
        $soyisim = $_POST['soyadi'];
        $cinsiyet = $_POST['cinsiyet'];
        $sehir = $_POST['sehir'];
        $eposta = $_POST['eposta'];
        $ileti = $_POST['ileti'];
        if(!empty($_POST["donustipi"]))
        {
           foreach($_POST["donustipi"] as $donustipi)
           {
               $donus .= $donustipi .' ';
           }
               
       }else{
            $donus = "Dönüş yapılmayacak";
       }
    }
    echo "Ad      :" .$isim.
         "<br>Soyad   :" .$soyisim.
         "<br>Cinsiyet:" .$cinsiyet.
         "<br>Şehir Plaka Kodu:" .$sehir.
         "<br>E-posta:" .$eposta.
         "<br>Dönüş Yolu:" .$donus.         
         "<br>İleti:" .$ileti.
         "<br><br> <h1>10 saniye içinde anasayfaya yönlendirileceksiniz. Beklemek istemiyorsanız <a href='index.html'> tıklayın</a></h1>";
         header("refresh:10; index.html");
?>
