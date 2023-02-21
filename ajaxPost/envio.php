<?php 
    include "../src/controllers/FileSave.php";
    include "../src/models/FileSaveMdl.php";

if(count($_FILES) > 0){ 
    $file = FileSave::FileSaveDirectory("../img", "prueba", $_FILES);
    $rutaImg = explode("../", $file);
    echo json_encode($rutaImg);
}