<?php
echo "zsk<br>";
echo "zsk<br>";

$name="Janusz";
echo "Imię: $name<br>"; //Imię : $name
echo 'Imię: $name<br>';//Imię: Janusz
//konkatenacja
//interpolacja
echo "text1","text2";
echo "text1","text2<br>";

//typy danych
//całkowitch
$całkowita=10; //bez polskich znakow
$bin=0b1011; //11
$oct=010; //8
$hex=0x10; // 16
echo $hex, '<br>';
//zmienno pzecinkowe
$x=10.5;
//logiczne
$prawda=true; //wyswietla 1
$falsz=false; //wyswietla nic
echo $prawda;
//składania heredoc
echo <<< ETYKIETA
  <hr>Imię: $name<br>
  Poznań<hr>
  ETYKIETA;

$text = <<< ETYKIETA
  <hr>Imię: $name<br>
  Poznań<hr>
  ETYKIETA;

echo $text;

//składnia nowdoc
echo <<< 'ETYKIETA'
  <hr>Nowdoc<br>
  Imię: $name<br>
  Poznań<hr>
  ETYKIETA;
//nazwa zmiennej
echo "Nazwa zmiennej \$janusz wynosi $name"








?>
