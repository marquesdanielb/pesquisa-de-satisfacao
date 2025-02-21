<?php

require 'phpqrcode/qrlib.php';
$url = "https://seusite.com/formulario?atendente=Marilia";
QRcode::png($url);

echo "cheguei até aqui bla bla bla...";
