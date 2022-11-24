<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   /* function hesapmakinesi ($a=10 , $b=5,$islem ="+")//burda default değerler gönderiyoruz . parametre göndermeyi unutursak bu değerler işlenecektir . eğer parametre gönderirsek bu değerler ezilecektir
    {
        $sayi1=$a;
        $sayi2=$b;
        if($islem=="+"){$sonuc=$sayi1+$sayi2;}
        if($islem=="-"){$sonuc=$sayi1-$sayi2;}
        if($islem=="*"){$sonuc=$sayi1*$sayi2;}
        if($islem=="/"){$sonuc=$sayi1/$sayi2;}
        echo $sonuc;
    }

    hesapmakinesi(15,25,"+");
    echo "<br>";
    hesapmakinesi(15,25,"-");
    echo "<br>";
    hesapmakinesi(15,25,"*");
    echo "<br>";
    hesapmakinesi(15,25,"/");
    echo "<br>";*/


    function tarihhesapla ($gun , $ay , $yil){
        $aylar = array("01" => "Ocak","02" => "Şubat","03" => "Mart","04" => "Nisan","05" => "Mayıs","06" => "Haziran","07" => "Temmuz","08" => "Ağustos","09" => "Eylül","10" => "Ekim","11" => "Kasım","12" => "Aralık");
        echo $gun ." ".$aylar[$ay]." ".$yil;
    }

    tarihhesapla("05","08","1986");
    echo "<br>";
    tarihhesapla("17","10","2002");
    ?>
</body>
</html>