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
        /**
         * Meyve adında bir sınıf oluşturuluyor.
         * 
         */
        class Meyve{
            public $ad;
            public $adet;
            public $kgFiyat=2;

            public function fiyatHesapla($kg){
                return $this->kgFiyat * $kg;
            }
        }

        //elma nesnesi Meyve sınıfından oluşturuldu. 
        $Elma = new Meyve();

        echo $Elma->fiyatHesapla(39) . ' TL';
        ?>
    </body>
</html>
