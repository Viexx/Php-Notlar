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
    $bilgiler = array("Meyveler"=>array("Elma"=>array("Kırmızı Elma","Yeşil Elma"),"Armut","Kiraz"),"Sebzeler"=>array("Patates","Ispanak","Brokoli"),"İsimler"=>array("Selçuk","Batuhan","Eren"));

    ?>

    <ul>
        <li>
            Meyveler
            <ul>
                <li>
                    Elmalar
                    <ul>
                        <li><?=$bilgiler["Meyveler"]["Elma"][0]?></li>
                        <li><?=$bilgiler["Meyveler"]["Elma"][1]?></li>
                    </ul>
                </li>
                <li><?=$bilgiler["Meyveler"][0]?></li>
                <li><?=$bilgiler["Meyveler"][1]?></li>
            </ul>
        </li>
        <li>
            Sebzeler
            <ul>
                <li><?=$bilgiler["Sebzeler"][0]?></li>
                <li><?=$bilgiler["Sebzeler"][1]?></li>
                <li><?=$bilgiler["Sebzeler"][2]?></li>
            </ul>
        </li>
        <li>
            İsimler
            <ul>
                <li><?=$bilgiler["İsimler"][0]?></li>
                <li><?=$bilgiler["İsimler"][1]?></li>
                <li><?=$bilgiler["İsimler"][2]?></li>
            </ul>
        </li>
    </ul>
</body>
</html>