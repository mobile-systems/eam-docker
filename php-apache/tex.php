<?php

$options = array(
 0 => array("pipe", "r"),
 1 => array("pipe", "w"),
 2 => array("file", "/tmp/error-output.txt", "a")
);
$cmd = '/usr/bin/pdflatex 3.tex';
$cwd = '/var/www/html';

proc_open($cmd, $options, $pipes, $cwd);
 
echo stream_get_contents($pipes[1]);
 
fclose($pipes[0]);
fclose($pipes[1]);
fclose($pipes[2]);
proc_close($process);

?>
