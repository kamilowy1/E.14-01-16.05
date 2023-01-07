<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Szkoła ponadgimnazjalna</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div id="baner">
    <h1>Oceny uczniów: język polski</h1>
    </div>

      <div id="lewy">
      <h2>Lista uczniów:</h2>
      <ol>
<?php
//utworzenie zmiennych polaczeniowych
$server = 'localhost';
$user = 'root';
$passwd = '';
$dbname = 'szkola';

$conn = mysqli_connect($server,$user,$passwd,$dbname);

/*
if(!$conn){
  die ("fatal error:".mysqli_error($conn));
} echo "jest okej";
*/

$zapytanie = "SELECT `imie`, `nazwisko` FROM `uczen`;";
$sql = mysqli_query($conn,$zapytanie);

while($wynik = mysqli_fetch_row($sql)){
  echo "<li>". $wynik[0]. " ". $wynik[1]. "</li>";
}

?>


      </ol>
      </div>
        <div id="prawy">
        <h2>Uczeń:
<?php

$zapytanie2 = "SELECT `imie`, `nazwisko` FROM `uczen` WHERE `id`='2';";
$sql2 = mysqli_query($conn,$zapytanie2);

while($wynik2 = mysqli_fetch_row($sql2)){
  echo $wynik2[0]. " ". $wynik2[1];
}
?>
</h2>
<?php
$zapytanie3 = "SELECT AVG(`ocena`) FROM ocena WHERE `uczen_id`='2' AND `przedmiot_id`='1';";
$sql3 = mysqli_query($conn,$zapytanie3);

while($wynik3 = mysqli_fetch_row($sql3)){
  echo "<p> Średnia ocen z języka polskiego: $wynik3[0] </p>";
}

?>
       
        </div>

          <div id="stopka">
          <h3>Zespół Szkół Ponadgimnazjalnych</h3>
          <p>Stronę opracował: 000000000</p>
          </div>
</body>
</html>