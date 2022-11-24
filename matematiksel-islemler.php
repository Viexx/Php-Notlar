<?php
    $sayi1=10;
    $sayi2=20;

    // $toplam = $sayi1 + $sayi2;
    // $fark = $sayi2 - $sayi1;
    // $bolum = $sayi2 / $sayi1;
    // $kalan = $sayi2 % $sayi1;
    // $carp = $sayi1 * $sayi2;
    // echo ("$toplam ,$fark ,$bolum ,$kalan,$carp ");

    /* . işareti ile birleştirme işlemi yapılır.*/ 
    /* .getTypye() fonksiyonu ile değişkenin veri tipi öğrenilebilir.*/
    
    echo '$sayi1' . " adlı değişkenin veri tipi :" ." ". gettype($sayi1)."<br>";
    $sayi3=16;
    echo "Sayının karekökü :" . sqrt($sayi3) ."<br>";

    echo "Sayının üssü :" . pow(4,2) ."<br>"; /*4 ün karesi*/

    echo "Sayının mutlak değeri :" . abs(-15) ."<br>";
    
    echo "En küçük sayı :" . min(5,8,10,15,468,21,584,12,3,854,12) ."<br>";

    echo "En büyük sayı :" . max(5,8,10,15,468,21,584,12,3,854,12) ."<br>";






?>