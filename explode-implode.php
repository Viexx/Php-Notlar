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
    $metin="Merhabalar arkadaşlar kanalıma hoşgeldiniz abone olmayı unutmayın";
    $parcala = explode(" ",$metin);
    print_r($parcala);
    /* explode => bir cümleyi diziye çevirir */

    $dizi=array("Merhabalar","arkadaşlar","selam","naber","nasılsınız");
    $birlestir = implode(" ",$dizi);
    echo $birlestir;

    ?>
</body>
</html>