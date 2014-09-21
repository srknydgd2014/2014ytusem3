<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            //explode fonksiyonu kendisine verilen metin ifadesini, belirtilen
            //işaret ile ayırarak, geriye bir dizi değişken gönderir

            $araclar = 'opel,renault,ford,seat,audi,toyota';
            $dizi = explode( ',' , $araclar);
            //$dizi = array( 'opel', 'renault', 'ford', 'seat', 'audi', 'toyota' );
            
            echo $dizi[2];
            
            echo '<br>';
            
            $ogrenci = 'orhan gencebay 2012 256 1960';
            
            $ogrenciDizi = explode(' ', $ogrenci);
            
            echo 'Kayıt tarihi: ' . $ogrenciDizi[2];
        ?>
    </body>
</html>
