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
//        Aşağıdaki değişken değeri içinde sadece karakterler olduğu için tek tırnak kullanılmalıdır.
        $konu = 'Php de Veri Tipleri';
        
        //tarih değişkeni string(metin) tipinde veri içermektedir.
        $tarih = '18 Mayıs 2014';
        
        //ogrenci değişkeni 14 karakterden oluşan string tipinde veri içermektedir.
        //
        $ogrenci = 'Orhan Gencebay';
        
        $not = '60';
        
        echo 'Php eğitimine başladık! $not';
        
        echo '<br>';
        
        echo "\n" . $ogrenci . ' ' . $not;
        
        echo '<br>';
        
        /*
         * Çok satırlı yorum koyulabilir
         * Aşağıdaki komut, çift tırnak ile echo komutuna örnektir.
         * Çift tırnak kullanıldığı zaman yazdırılacak metin içerisinde 
         * değişkenler varsa, o değişkenin değeri ifade içine yazdırılır.
         */
        echo "\nÖğrenci adı\t: $ogrenci \nNotu\t\t: $not";
        
        /*
        * Çift tırnak içerisine yazılan ifadelerde özel karakterler kullanılabilir.
        * Örnek özel ifadeler:
        * \n new line->yeni satır karakteridir ve alt satıra geçiş için kullanılır
        * \t tab boşluğu eklemek için kullanılır
        * \" çift tırnak veya tek tırnak yazdırmak için kullanılır
        */
       echo "\n<br> \"Ad\": \t Ferdi \n \"Soyad\": \t Tayfur";
        ?>
    </body>
</html>
