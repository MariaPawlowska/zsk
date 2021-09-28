<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Prostokat</title>
  </head>
  <body>
  <h3>prostokat</h3>
  <form method="get">
    <input type="text" name="sideA" placeholder="podaj bok a"><br><br>
    <input type="text" name="sideB" placeholder="podaj bok b"><br><br>
    <input type="submit" value="oblicz">
    </from>
    <?php
      if (!empty($_GET['sideA']) && $_GET['sideB']) {
        $sideA=str_replace(',' , '.',$_GET['sideA']);
        $sideB=str_replace(',' , '.',$_GET['sideB']);
        $areaS=pow($sideA, 2);
        $circuitS=4*$sideA;
        $areaR=$sideA*$sideB;
        $circuitR=2*$sideA+2*$sideB;
        echo <<<RESULT
        <hr>
        Pole prostokatu wynosi: $areaR cm<sup>2</sup><br>
        Obwod prostokatu wynosi: $circuitR cm<br>
        RESULT;
      }else {
        echo "wypelnij bok a i b";
      }
     ?>
  </body>
  </html>
