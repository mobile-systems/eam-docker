<?php
require_once __DIR__ . '/phpqrcode/qrlib.php';

// Displays QR Code image to the browser
QRcode::png('http://'.getenv('PHP_HOST').':'.getenv('PHP_PORT').'/index.php?P=20.1&D=22.1&O=25.0&G=22.5&AIS=1&P9=20.2&K9=1&TP=18','test.png','H',2,2);
?>
