<?php
require_once __DIR__ . '/phpqrcode/qrlib.php';

		$tm = localtime(time(),1);
		$cabyear = $tm["tm_year"]+1900;
		$cabmonth = $tm["tm_mon"]+1;
		$cabday = $tm["tm_mday"];
		$request = sprintf( "%04d.%02d.%02d_%02d:%02d:%02d", $cabyear, $tm["tm_mon"]+1,
	           $tm["tm_mday"], $tm["tm_hour"], $tm["tm_min"], $tm["tm_sec"] );

    header('Refresh: 60; URL=http://'.getenv('QR_HOST').':'.getenv('QR_PORT').'/1.php?ts='.$request);

// Displays QR Code image to the browser
//QRcode::png('http://192.168.2.88:8080/index.php?table=courses&value1=Slackware%20Linux%20Users&value2=vts11&P=20.1&D=22.1&O=250&G=22.5&AIS=1&P9=20.2&K9=1&TP=18&ts='.$request,$outfile = false, $level = QR_ECLEVEL_H, $size = 3, $margin = 4, $saveandprint=false);
QRcode::png('http://'.getenv('PHP_HOST').':'.getenv('PHP_PORT').'/index.php?table=courses&value1=BlackHat%20Admin&value2=vts111&P=20.1&D=22.1&O=250&G=22.5&AIS=1&P9=20.2&K9=1&TP=18&ts='.$request,
    $outfile = false, $level = QR_ECLEVEL_H, $size = 4, $margin = 4);
?>
