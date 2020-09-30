<?php

session_start(); // Inicio session desde plantilla principal
$ruta = ControladorRuta::ctrRuta();  // estoy almacenando el valor de la funcion en esa variable de la clase ControladorRuta

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="icon" href="vistas/img/logo-dos.jpeg">
    <!-- <link rel="stylesheet" href="css/animate.css"> -->
    <title>Intech5G</title>

    <style>
    .gris{
        background: rgba(0, 0, 0, 0.5);
    }

    .top-nav-collapse{
        background: rgba(0, 0, 0, 0.788) !important;
    }
    </style>

    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">

<!-- SWEET ALERT 2 -->	
	<!-- https://sweetalert2.github.io/ -->
	<script src="vistas/js/plugins/sweetalert2.all.js"></script>

</head>



<body>

<?php 

if(isset($_GET["pagina"])){

    /*=============================================
	Validar correo electrónico
    =============================================*/

    // $item = "email_encriptado";
    // $valor = $_GET["pagina"];

    // $validarCorreo = ControladorUsuarios::crtMostrarUsuarios($item, $valor);

    // if($validarCorreo["email_encriptado"] == $_GET["pagina"]){

    //     $id = $validarCorreo["users_id"];
    //     $item = "verificacion";
    //     $valor = 1;

    //     $respuesta = ControladorUsuarios::ctrActualizarUsuario($id, $item, $valor);

    //     if($respuesta == "ok"){

    //         echo'<script>

	// 				swal({
	// 						type:"success",
	// 					  	title: "¡CORRECTO!",
	// 					  	text: "¡Su cuenta ha sido verificada, ya puede ingresar al sistema!",
	// 					  	showConfirmButton: true,
	// 						confirmButtonText: "Cerrar"
						  
	// 				}).then(function(result){

	// 						if(result.value){   
	// 						    window.location = "'.$ruta.'login"
	// 						  } 
	// 				});

	// 			</script>';

	// 		return;
    //     }

    // }

    if($_GET["pagina"] == "inicio" 
       || $_GET["pagina"] == "login"
       || $_GET["pagina"] == "servicios"
       || $_GET["pagina"] == "contacto"
       || $_GET["pagina"] == "nosotros"){

        include "paginas/".$_GET["pagina"].".php";

    } // Si la variable GET es igual a cualquiera de esos nombres de pagina, lo rediccionara a esas

}else{

    include "paginas/inicio.php";

} // En caso de que no venga ninguna variable GET rediccionara siempre a inicio


?>


    <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>

<script >
    new WOW().init();

    // object-fit polyfill run
objectFitImages();

/* init Jarallax */
jarallax(document.querySelectorAll('.jarallax'));

jarallax(document.querySelectorAll('.jarallax-keep-img'), {
    keepImg: true,
});


</script>

<!-- <script src="js/script.js"></script> -->

</body>
</html>




