<?php
    require_once("utility.php");
    require_once("connessione.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form immagine</title>
    <link rel="stylesheet" href=".//css/style.min.css">
</head>
<body>
    <header>
        <h2><a href="index.php" style="text-decoration: none; color:#BF9B30;">Galleria Foto</a></h2>
        <button type="button" id="bott"><a href="form_delete.php" style="text-decoration: none; color:#28232c">Elimina un'immagine</a></button>
    </header>
<div class="form">
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <h2>CARICA L'IMMAGINE CON LA DESCRIZIONE</h2>
            <p>
                <label for="descrizione">Descrizione <span>*</span></label>
                <input type="text" name="descrizione" id="descrizione" required accept=".jpg, .jpeg, .png, ">
            </p>
            <p>
                <label for="immagine">Immagine <span>*</span></label>
                <br>
                <input type="file" name="photo" id="img" required>
            </p>   
            <p>
                <input type="submit" value="INVIA" name="submit" id="invia">
                <br><br>
                <strong>N.B.</strong> le estensioni accettate sono: jpg,jpeg,png;
            </p>
        </form>
    </div>
</body>
</html>