<!-- dolaczanie plikow -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- zapisanie danych od lewej do prawej nastapi -->
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>poczatek strony</h3>
    <?php
      include './3.1.php';
      include_once './3.1.php';
      require './3.1.php';
      require_once './3.1.php';
     ?>
    <h3>koniec strony</h3>
  </body>
</html>
