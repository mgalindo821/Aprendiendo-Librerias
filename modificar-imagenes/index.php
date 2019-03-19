<?php
require_once '../vendor/autoload.php';

$foto_original = 'liam.jpg';
$guardar_en = 'fotomodificada.png';

$thumb = new PHPThumb\GD($foto_original);

// Redimencionar
$thumb->resize(500, 500);

// Recortar 
$thumb->cropFromCenter(500,400);

$thumb->show();
$thumb-save($guardar_en, 'png');