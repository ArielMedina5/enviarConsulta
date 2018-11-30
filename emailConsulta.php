<?php

if (isset($_POST['enviar'])) {
  $para = 'ariel_medina05@hotmail.com';
  $asunto = 'consulta de usuario: '.$_POST['usuario'].'email: '.$_POST['email'];
  $mensaje = $_POST['feedback'];

  $verificar = mail($para,$asunto,$mensaje);
  if ($verificar) {
    echo "Consulta enviada";
  }else {
    echo "Error al enviar";
  }

}

 ?>
