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
    $dizi = array("Selçuk","Samed","Emin","Ferhat","Eren","Şevket","Batu");
    for($i=0;$i<count($dizi);$i++)
    {
        echo "$i-". $dizi[$i]."<br>";
    }
    /* count dizinin uzunluğunu hesaplar */

    ?>
    <select>
    <?php
        for($x=2020;$x>=1976;$x--){
            echo "<option>$x</option>"; 
        }
    
    ?>

    </select>
</body>
</html>