
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>convalida</title>
</head>
<body>
   <main>
      <p>
         il testo:
        <?php
         $testo = $_POST['testo']
         echo $testo;
        ?>
      </p>

      <p>
         la lunghezza delle lettere:
        <?php
         echo strlen($testo);
        ?>
      </p>

      <p>
         <?php
         $parola = $_POST['parola']
         echo $parola;
         ?>
      </p>
      
      <p>
         <?php
         $censored = $_POST['parola'];
         $newText = str_replace($parola, '***', $testo));
         echo $newText;
         ?>
      </p>
   </main>
</body>
</html>