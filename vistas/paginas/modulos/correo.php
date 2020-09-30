<?php

if(isset($_POST['enviar'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['asunto']) 
    && !empty($_POST['mensaje'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];
        $header = "From: Contacto Pagina" . "\n";
        $header .= "Reply-To: $email" . "\n";
        $header .= "X-Mailer: PHP/" . phpversion() . "\n";
        $header .= "El Usuario(a) ".$name . ", le ha enviado un mensaje desde la plataforma de INTECH5G" ."\n";
        $header .= "Asunto: ".$asunto;
        $mail = @mail("daniel_dp96@hotmail.com", $asunto,$mensaje,$header);  // Aqui envia el mensaje
        if($mail){  // Vlidacion de que el correo se envio correctamente
            echo '<script>

							swal({

								type:"success",
								title: "¡SE HA ENVIADO CORRECTAMENTE SU MENSAJE!",
								text: "En breve uno de nuestros Instructores se comunicará con usted.",
								showConfirmButton: true,
								confirmButtonText: "Cerrar"

							}).then(function(result){

								if(result.value){ 

									window.location = "http://intech5g.com/";

								}


							});	

						</script>';
        }else{
            echo '<script>

							swal({

								type:"error",
								title: "¡ERROR!",
								text: "¡¡Su mensaje no se ha enviado correctamente, por favor inténtelo nuevamente",
								showConfirmButton: true,
								confirmButtonText: "Cerrar"

							}).then(function(result){

								if(result.value){ 

									history.back();

								}


							});	

						</script>';
        }
    }
}