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
    $dizi=array("Mehmet","Ahmet","Pırasa","Domates");
    // print_r($dizi); dizileri ekrana yazdırmak için kullanılır


    foreach($dizi as $anahtar => $yazdır){
        echo $anahtar."-".$yazdır."<br>";
    }

    
    ?>
</body>
</html>