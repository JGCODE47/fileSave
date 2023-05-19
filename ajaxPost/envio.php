<?php 
require __DIR__ .'/../src/autoload.php';
use App\controllers\FileSave;
if(count($_FILES) > 0){ 
    $file = FileSave::FileSaveDirectory("../img", "prueba", $_FILES);
    $rutaImg = explode("../", $file);
    echo json_encode($rutaImg);
}