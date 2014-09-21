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
        $araclar = array( 
            array('Opel','Astra',40000,2011), 
            array('Seat','Leon',36000,2012),
            array( 'Toyota','Yaris',40000,2011)
        );

        echo 'Toplam araç sayısı: ' . count($araclar);
        echo '<br>';
        echo '3. aracımızın özellikleri:<br>';
        echo 'Marka: ' . $araclar[2][0];
        echo '<br>';
        echo 'Model: ' . $araclar[2][1];
        echo '<br>';
        echo 'Fiyat: ' . $araclar[2][2];
        echo '<br>';
        echo 'Üretim Yılı: ' . $araclar[2][3];

        echo '<br>';
        echo '-----------------------';

        echo '<br>';
        echo '2. aracımızın özellikleri:<br>';
        echo 'Marka: ' . $araclar[1][0];
        echo '<br>';
        echo 'Model: ' . $araclar[1][1];
        echo '<br>';
        echo 'Fiyat: ' . $araclar[1][2];
        echo '<br>';
        echo 'Üretim Yılı: ' . $araclar[1][3];
        ?>
    </body>
</html>
