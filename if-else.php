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
    
    $degisken ="Hayır";
    $degisken2="xd";

    /*
        || => veya demek (koşullardan biri bile sağlasa kod bloklarına girer) 
        && => ve demek (koşullardan biri bile sağlamazsa girmez)
        break : kodu kırar
        continue : kendisini atlar ve kod çalışmaya devam eder (kod bloğununun hepsini kırmaz sadece yazıldığı scope da ki kodları çalıştırmaz) (kendisini yazmaz)
    */

    if($degisken=="Hayır" && $degisken2="xd")
    {
        echo "Çalıştı.";

    }
    else{
        echo "Çalışmadı";
    }

    echo "<br>";


    for($i = 0; $i<=10;$i++)
    {
        if($i%2==0)
        {
            echo $i ."<br>";
        }
        else if($i==5) {
            echo "else if 5" ."<br>";
        }
        else
        {
            continue; 
        }
    }

    
    ?>
</body>
</html>