<?php
        /* Get kullanımı  */
        // if($_GET){
        //     echo $_GET["degisken"];
        // }
            
        if($_POST)
        {
            echo $_POST["degisken"]."<br>";
        }
    ?>  
    <!-- 
            GET kullanımı
    <a href="get-post-1.php?degisken=Selcuk Salbas">Sayfa 2</a>  
    -->

    <form action="#" method="POST">
        <input type="text" name="degisken">
        <input type="submit" name="button" value="gönder">
    </form>