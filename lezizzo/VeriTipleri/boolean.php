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
        $sonuc   = true;
        $yuklemeSonucu  = false;

        //sonuc değeri olarak 1 yazdırır

        echo $sonuc;
        echo '<br>';
        echo $yuklemeSonucu;
        
        if( $yuklemeSonucu == false ){
            echo 'Yükleme başarısız';
        }
        ?>
    </body>
</html>
