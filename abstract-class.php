<?php
abstract class PAra {
    abstract public function maas($deger);
    public function maasHesapla($deger){
        return $this->maas($deger)*2 ;
    }
}

class Personel extends PAra{
    public function maas($deger)
    {
        return $deger;
    }
}
$personel = new Personel();
echo "Personelin maaşı :".$personel->maasHesapla($deger=1500);
?>