<?php
echo PHP_VERSION,"<br>";//wersja php
echo 2**10,"<br>";//1024


$x=1;
$y=10;
echo $x<=>$y,"<br>";

// równe
$x=1;
$y=1.0;
if ($x===$y) {
  echo "rowne<br>";
}else {
  echo "nierowne<br>";

}
echo gettype($x),"<br>";
echo gettype($y),"<br>";

/*

  postkrementacja $x++
  preinkrementacja ++$x
  postdekremetnacja $x--
  predkrementacja --$x

*/
$x=10;
$x=$x++;
echo $x,"<br>"; //10
$y=$x++;
echo $x,"<br>"; //11
echo $y,"<hr>"; //11
$y=10;
$x=1;
echo $x; //1
$x=$x++;
echo $x; //1
$x=++$x;
echo $x; //2
$y=++$x;
echo $x; //3
echo $y; //3
$y=$x++;
echo $x; //4
echo "$y<br>"; //3
?>
