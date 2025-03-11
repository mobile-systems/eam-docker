<?php
require_once __DIR__ . '/phpqrcode/qrlib.php';

// Displays QR Code image to the browser
QRcode::png('http://192.168.2.88:8080/index.php?table=courses&value1=Slackware%20Linux%20Users&value2=vts11&P=20.1&D=22.1&O=25.0&G=22.5&AIS=1&P9=202&K9=1&TP=18');

?>
