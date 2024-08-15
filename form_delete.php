<?php
    require_once("connessione.php");
    require_once("utility.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="stylesheet" href="css/style.min.css" type="text/css">
</head>
<body>
<header>
        <h2><a href="index.php" style="text-decoration: none; color:#BF9B30;">Galleria Foto</a></h2>
        <button type="button" id="bott"><a href="form.php" style="text-decoration: none; color:#28232c">Aggiungi un'immagine</a></button>
    </header>
    <div class="form">
        <form action="index.php" method="POST">
            <h2>INSERISCI L'ID  DELL'IMMAGINE CHE VUOI ELIMINARE</h2>
            <p>
                <input type="text" name="id">
            </p>
            <p>
                <input type="submit" value="INVIA" name="delete" id="invia">
            </p>
        </form>
    </div>
</body>
</html>