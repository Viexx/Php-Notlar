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
    
    $deneme="Merhaba Php";
    $deneme2="Merhaba Css";
    $deneme3="Merhaba Java";

    echo $deneme." ".$deneme2." ".$deneme3." "."<br><br><br><hr>";
    
    $dizi =array(); /* php de 1. dizi tanımlama yöntemi */
    $dizi[]=""; /* php de 2. dizi tanımlama yöntemi */


    $ornek=array("Benim" ,"Adım","Selçuk");
    echo $ornek[0] . " " . $ornek[1]. " ".$ornek[2];
    echo "<br><br><br>";
    /* indis e başka değer verme */
    $ornek=array("my"=>"Benim" ,"name"=>"Adım","Faruk");
    echo $ornek["my"] . " " . $ornek["name"]. " ".$ornek[0];
    echo "<br><br><br>";

    $dizi1[]="Dünya";
    $dizi1[]="Salam";
    $dizi1[] ="Massaka";

    echo $dizi1[0]." ".strtolower($dizi1[1]) ." ".strtoupper($dizi1[2]);
    ?>
</body>
</html>