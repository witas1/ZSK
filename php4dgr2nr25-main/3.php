<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Początek strony</h3>
      <?php
        include './3_1.php'; //kontynujue dzialanie
        include_once './3_1.php';
        require './3_1.php'; //koniec kodu fatal error
        require_once './3_1.php';
       ?>
    <h3>Koniec strony</h3>
  </body>
</html>
