<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contattaci</title>
    <link rel="stylesheet" href="contact.css">
</head>
<?php
   if (isset($_POST["Email"]) && isset($_POST["Name"]) && isset($_POST["Messaggio"])) {
       $testo             = $_POST["Messaggio"];
       $nome             = $_POST["Name"];
       ini_set('default_charset', 'UTF-8');
   	   $headers = 'Content-Type: text/plain;charset=utf-8' . "\r\n";
   	   $ret = mail ("federico.venturelli11@gmail.com" , "E-mail dal mio sito web" , $nome."mi ha inviato il seguente messaggio:\n\n".$testo, $headers);
       }
?>
<body>
    <div class="container">
        <h1>E-mail inviato!</h1>
		<p>Grazie per aver partecipato <?php echo $_POST["Name"] ?> ! Avverrà la tua modifica a breve.</p>
</body>
</html>
