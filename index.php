<?php
/*Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.*/

//creo una variabile
  $text = 'Estate
  Sei calda come i baci che ho perduto
  Sei piena di un amore che è passato
  Che il cuore mio vorrebbe cancellare
  Odio l Estate
  Il sole che ogni giorno ci scaldava
  Che splendidi tramonti dipingeva
  Adesso brucia solo con furore
  Tornerà un altro inverno
  Cadranno mille petali di rose
  La neve coprirà tutte le cose
  E forse un po di pace tornerà
  Odio l Estate';

  $badWord = '';


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- stampo a schermo il contenuto e la lunghezza della variabile $text -->
  <div>
    <h1>TESTO</h1>
    <div> 
      <h2>
        <?php echo $text;?>
      </h2>
       
    </div>
    <div>
      <h4>Lunghezza del testo: <?php echo strlen($text);?> </h4>
    </div>
    

  <!-- con str_replace modifico qualcosa con qualcos'altro in una specifica stringa o in una variabile -->  

  
    <p> <?php echo str_replace($badWord, '***', $text); ?> </p>
    

  </div>
</body>
</html>