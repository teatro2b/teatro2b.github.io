<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contattaci</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <div class="container">
        <h1>Contatti</h1>
        <form action="mail.php" method="post">
            <input type="text" name="Name" id="Name" placeholder="Nome" require/><br>
            <input type="email" name="Email" id="Email" placeholder="Email" require/><br>
            <textarea name="Messaggio" id="Messaggio" placeholder="Messaggio" require></textarea><br>
            <button type="submit">Invia!</button>
        </form>
    </div>
</body>
</html>
