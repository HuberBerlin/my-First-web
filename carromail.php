<?

$para ="info@vuelatrike.com";
$nombre = $_POST["nombre"];
$asunto = $_POST["nombre"] .$_POST["asunto"] ;

$mensaje = $_POST["mensaje"];
$de = $_POST["mail"];

$headers .= "From: $de \r\n";
$headers .= "To: $para; \r\n Subject:$asunto \r\n";

mail($para,$asunto,$mensaje,$headers);

header( 'Location:enviado.html' ) ;



/* 
if (mail($para,$asunto,$mensaje,$headers))
	echo "Enviado";
	else 
	echo "fallo";
*/


?>