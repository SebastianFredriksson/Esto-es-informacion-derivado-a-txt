<?php
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$solicitud = fopen("texto.txt", "a") or die("no se pudo abrir para escribir.");
fwrite($solicitud, "\r\n");
fwrite($solicitud, " ASUNTO: ");
fwrite($solicitud, "\r\n");
fwrite($solicitud, $asunto);
fwrite($solicitud, "\r\n");
fwrite($solicitud, " MENSAJE: ");
fwrite($solicitud, "\r\n");
fwrite($solicitud, $mensaje);
fwrite($solicitud, "\r\n");


echo "La operacion fue correcta. Si quiere revisar visite el siguiente link <a href='dos.php'> Acà </a>";

fclose($solicitud);





?>