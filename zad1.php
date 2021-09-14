<?php
  echo 'zsk<br>';
  echo 'zsk<br>';



  $name="janusz";
  echo 'imie: $name<br>'; //imie: $name
  echo "imie: $name<br>"; // imie: janusz


  //typy danych
  //calkowity

  $calkowita=10;
  $bin=0b1011; //11
  $oct=011; //9
  $hex=0xA;

  echo $bin;

  //konkatenacja
  echo "text1"."text2";

  //interpolacja
  echo "text1","text2";

  //typ zmiennoprzecinkowy
  $x=10.5;

  //logiczny
  $prawda=true; //1
  $falsz=false; // nic nie wyswietli

  echo $falsz;

  //skladnia heredoc
  echo <<<ETYKIETA
  <hr>
  imie: $name<br>
  <h3>Poznan<h3>
  <hr>
  ETYKIETA;

  $text =  <<<ETYKIETA
  <hr>
  imie: $name<br>
  <h3>Poznan<h3>
  <hr>
  ETYKIETA;
 echo $text;

//nowdoc (jezeli bedzie "ETYKIETA " to bedzie to heredoc)
echo <<<'ETYKIETA'
<hr>
imie: $name<br>
<h3>Poznan<h3>
<hr>
ETYKIETA;

echo "wartosc zmiennej name: $name, nazwa zmiennej name: \$name:";





  ?>
