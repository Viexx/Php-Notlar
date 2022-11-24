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
        class bilgiler {

            function isimler()
            {
                $this->meyveler();
            }

            function meyveler()
            {
                 return "Portakal";  //$this->isimler();
            }

        }
        /* THIS KULLANIMI 
        Bir sınıf içerisinde oluşturduğumuz fonksiyonlarda fonksiyonlar arası değer taşımak istiyorsak this ifadesi kullanılır.
        
        
        */


        $biilgiler = new bilgiler();
        /* burda nesne oluşturuyoruz fakak oluşturduğumuz nesnenin class ismi ile aynı olma gibi bir zorunluluğu yok 
        Sadece işlem kolaylığı açısından yapıyoruz
        */
        echo $biilgiler->isimler();
        echo $biilgiler ->meyveler();

    ?>
</body>
</html>