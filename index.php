<?php
require("utility.php");
require_once("connessione.php");
$sql = "SELECT images.IdImage, images.file_path, images.descrizione FROM images";
$query = $mysqli->query($sql);
if ($query->num_rows > 0) {
    $lunghezza = 0;
    while ($righe = $query->fetch_array(MYSQLI_ASSOC)) {
        $tmp = array(
            "IdImage" => $righe["IdImage"],
            "path" => $righe["file_path"],
            "descrizione" => $righe["descrizione"]
            
        );$lunghezza++;
        $dati[] = $tmp;
    }   
}
if (isset($_POST["submit"])) {
    $description = $_POST["descrizione"];
if ($_FILES["photo"]["error"] === 4) {
    echo  `<script> alert ("L'immagine non esiste")</script>`;
}
else{
    $estensioni_permesse = ["jpg", "png", "jpeg"];

    $file_name = $_FILES["photo"]["name"];
    $tmp_name = $_FILES["photo"]["tmp_name"];
    $file_size = $_FILES["photo"]["size"];
    
    $imageExtension = explode('.', $file_name);
    $imageExtension = strtolower(end($imageExtension));
        $newImageName = uniqid();
        $newImageName .= '.' . $imageExtension;

        move_uploaded_file($tmp_name, "img/" . $newImageName);
        $sql = "INSERT INTO images(file_path,descrizione) VALUES(?,?)";
        $query = $mysqli->prepare($sql); 
        $query->bind_param("ss", $newImageName, $description);
        $query->execute();
        echo  `<script> alert ("Immagine inserita con successo")</script>`;
        exit();
    }
}
if(isset($_POST["delete"])){
    $id = $_POST["id"];

    $sql = "DELETE FROM images WHERE IdImage='$id'";
    $query = $mysqli->prepare($sql); 
    $query->execute();
    echo  `<script> alert ("Immagine Eliminata con successo")</script>`;
    exit();

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galleria Dinamica</title>
    <link rel="stylesheet" href=".//css/style.min.css" type="text/css">
</head>

<body>
    <header>
        <h2>Galleria Foto</h2>
        <button type="button" id="bott"><a href="form.php" style="text-decoration: none; color:#28232c">Aggiungi un'immagine</a></button>
        <button type="button" id="bott"><a href="form_delete.php" style="text-decoration: none; color:#28232c">Elimina un'immagine</a></button>
    </header>
    <div class="container">
        <?php        
        echo CreaSlideshow($dati,$lunghezza);
        ?>
        <a class="prev" onclick="plus_slide(-1)">❮</a>
        <a class="next" onclick="plus_slide(1)">❯</a>

        <div class="caption-container">
            <p id="caption"></p>
        </div>
        <?php

        echo CreaSLideShowMiniatura($dati);

        ?>
    </div>
    <br>
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption2"><?php echo $item["descrizione"]; ?>. </div>
    </div>
    <script src="script.js" type="application/javascript"></script>

</body>

</html>