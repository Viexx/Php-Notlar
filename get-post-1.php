<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sayfa 1</title>
</head>
<body>
  <a href="get-post-1.php?ac=get-post-2.php">Sayfa 2</a><br>


  <?php
  if($_GET)
  {
    include_once($_GET["ac"]);
  }
  
  ?>
</body>
</html>