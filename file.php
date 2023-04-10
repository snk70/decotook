<?php

$FileName = "t.html";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fclose($FileHandle);

unlink($FileName);

?>