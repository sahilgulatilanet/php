<?php
$myfile = fopen("abc.txt", "w") or die("Unable to open file!");
$txt = "sahil \n";
fwrite($myfile, $txt);
$txt = "gulati \n";
fwrite($myfile, $txt);
fclose($myfile);
$myfile = fopen("abc.txt", "r") or die("Unable to open file!");
/*echo fgets($myfile);
echo "<br>";
while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
}
echo "<br>";*/
while(!feof($myfile)) {
    echo fgetc($myfile);
}
echo "<br>";
echo fread($myfile,filesize("abc.txt"));
fclose($myfile);
?>