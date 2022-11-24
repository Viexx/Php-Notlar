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
    $dizi=array("Selçuk","Salbaş","1","5490");

    $x=0;
    
    while($x<count($dizi)){
        echo $x."-".$dizi[$x]."<br>";
        $x++;
    }


    echo "<br>"."<hr>";
    $y=0;
    do{
        echo $y."-".$dizi[$y]."<br>";
        $y++;

    }while($y<count($dizi));
    
    ?>
</body>
</html>