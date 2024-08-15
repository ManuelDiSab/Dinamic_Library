<?php
/**
 * File contenente funzioni utili
 * 
 */
//Funzione per creare la slideshow in modo dinamico
function CreaSlideshow($arr,$lunghezza) {
    $str = "";
  if(count($arr) > 0) {
    foreach($arr as $item){
        $str .= 
        '<div class="mySlides">
            <div class="numbertext">' . $item["IdImage"] .'/'. $lunghezza .'</div>
          <img id="myImg" src="./img/'. $item["path"] . '"  alt="'. $item["descrizione"] .'"   style="width: 600px; height:500px; display:block;margin:auto; cursor:pointer; "
          class = "ModalImg">
        </div>';
    }
  }
  return $str;
}

function CreaSLideShowMiniatura($arr){

    $str = '<div class ="row">';
    foreach($arr as $item){
    $str .='<div class="column">
            <img class="demo cursor" src="./img/' . $item["path"] . '" style="width:100%"; height=250px; onclick="SlideCorrente('.$item["IdImage"].')" alt="' .$item["descrizione"] .'">
           </div>';
    }
    $str .='</div>';
    return $str;
}

function creaForm($url){
  echo `<form action="$url" method="POST">
  <p>
      <label for="immagine">Immagine</label>
      <input type="file" name="path" id="img">

      <input type="submit" value="invia">
  </p>
</form>`;
}


function moveFile($path_folder,$file){
  return move_uploaded_file($file,$path_folder);
}