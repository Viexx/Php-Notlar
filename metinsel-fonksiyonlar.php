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
    $metin="pHp De nElERyAPİlAbilir ?";
    echo $metin."<br>";

    echo "<br><br>";

    $kucuk = strtolower($metin); /*Türkçe karakterlerde hata verebilir */
    echo $kucuk."<br>";
    echo "<br><br>";

    $kucuk2 = mb_strtolower($metin,"UTF-8"); /* türkçe karakterlerde hata vermez */
    echo $kucuk2."<br>";
    echo "<br><br>";
    
    $buyuk = strtoupper($metin); /*hepsi büyük */
    echo $buyuk."<br>";
    echo "<br><br>";

    $buyukharf = ucwords($metin); /* baş harfler büyük*/
    echo $buyukharf."<br>";
    echo "<br><br>";

    $paragraf = ucfirst($metin); /* sadece ilk kelimenin harfi büyük */
    echo $paragraf."<br>";
    
    
    ?>
</body>
</html>