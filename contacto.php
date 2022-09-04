<?php 
$fp = fopen("lol.txt", "a");
fwrite($fp, "Nombre:$_POST[nombre]\nEmail:$_POST[email]\nTeléfono:$_POST[telefono]\nMensaje:$_POST[mensaje]\n\n");




header( 'Location:enviado.html' ) ;
;?>
