<?php
 echo PHP_VERSION; //
 echo 2**10; //1024

 $x=1;
 $y=10;
 echo $x<=>$y;

 //rowne
 $x=1;
 $y=1.0;

 echo gettype($x); //integer
 echo gettype($y); //double

if ($x==$y) {
  echo "rowne";
}
else {
  echo "rozne";
    }


//identyczne
if ($x===$y) {
  echo "identyczne";
}
else {
  echo "nieidentyczne";
    }
/*
prepinkrementacja ++$x
postinkrementacja $x++
predekrementacja --$x
postdekrementacja $x--
*/

$x=5;
$x=++$x;
echo $x; //6

$x=$x++;
echo $x; //6

$y=$x++;
echo $x; //6
echo $y; //7

//zad
$x=1;
echo $x; //1

$x=$x++;
echo $x; //2

$x=++$x;
echo $x; //1

$y=++$x;
echo $x; //
echo $y; //

$y=$x++;
echo $x; //1
echo $y; //2




 ?>
