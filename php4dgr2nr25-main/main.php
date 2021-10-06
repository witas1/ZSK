<!DOCTYPE html>
<html lang=pl dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Średni wiek</title>
  </head>
  <body>
    <?php
    if ((!isset($_POST['person']) || empty($_POST['person'])) && !isset($_POST['buttonAvg']))
      {
      echo <<< FORMCOUNTUSER
        <h3>Ilość osób w rodzinie</h3>
        <form method="post">
         <input type="number" name="person" placeholder="podaj ilość osób"><br>
         <input type="submit" value="Zatwierdź">
        </form>


FORMCOUNTUSER;
}
    if (!empty($_POST['person'])){
      echo <<<FORMAGE
      <h3>Ilość osób w rodzinie: $_POST[person]</h3>
      <form method="post">
FORMAGE;
        for ($i=1; $i < 1 + $_POST['person']; $i++) {
          echo "<input type='number' name='person$i' placeholder='Podaj wiek osoby nr $i'><br><br>'";
        }

       echo <<< FORMAGE
       <input type="submit" name="buttonAvg" value="Zatwierdź">
      </form>
FORMAGE;
    }

    if (isset($_POST['buttonAvg'])) {
      $count=0;
      $avg=0;
      //print_r($_POST);
      foreach ($_POST as $key => $value) {
        if ($key != 'buttonAvg') {
            $avg+=$value;
            $count++;
        }
        //echo "$key: $value<br>";


      }
      echo "Średni wiek : ".number_format($avg/$count, 2);
    }
      echo '<a href=" ./main.php">Strona główna</a>'
    ?>





  </body>
</html>
