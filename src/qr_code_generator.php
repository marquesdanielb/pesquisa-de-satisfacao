<?php

require 'phpqrcode/qrlib.php';
$url = "https://seusite.com/formulario?atendente=Marilia";
QRcode::png($url);
