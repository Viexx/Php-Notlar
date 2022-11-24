<?php

class ikinciclass
{
    public function isimYazdir($isim){
        echo "Benim Adım :" . $isim;
        }
}

class birinciclass extends ikinciclass{
    public function yaz(){

    }
}
class ucuncuclass extends birinciclass{
    public function bas(){

    }
}
$birinciclass=new birinciclass();
echo $birinciclass->isimYazdir("Selçuk");
echo "<br>";
$ucuncuclass = new ucuncuclass();
echo $ucuncuclass->isimYazdir("Mehmet");
?>