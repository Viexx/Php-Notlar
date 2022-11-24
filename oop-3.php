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
    // class sayilar {

    //     function __construct()
    //     {
    //         /* yapıcı metottur. metot çağrılmasa bile ilk başta çalışan metottur. */
    //         echo "Yapıcı metot çalıştı.";
    //     }
    //    private function sayi()
    //     {
    //         return 15;
    //         /* sadece ait olduğu classda çalışır. */
    //     }
    //     public function topla($sayi1 , $sayi2)
    //     {
    //         return ($sayi1+$sayi2+$this->sayi());
    //     }
    //     function __destruct()
    //     {
    //         /* yıkıcı metottur . metot çağrılmasa bile en son çalışan metottur */
    //         echo "<br>" . "Yıkıcı metot çalıştı";
    //     }
    //     public $isim = "Selçuk";
    // }


    class araba {
        public $renk ="";
        public $marka ="";
        public $yakittipi ="";

        public function arababilgiYazdır(){
            echo "Araba Rengi {$this->renk} <br>";
            echo "Araba marka {$this->marka} <br>";
            echo "Araba yakittipi {$this->yakittipi} <br>";

        }
        
    }
    $araba1 = new araba();
    $araba1->renk="Kırmızı";
    $araba1->marka="Mercedes";
    $araba1->yakittipi="Benzin";

    $araba1->arababilgiYazdır();




    // $sayilar = new sayilar();
    // // echo $sayilar->sayi();
    // $isim = new sayilar();
    // echo $isim->isim;
    // echo $sayilar->topla(31,87);        
    
    ?>
</body>
</html>