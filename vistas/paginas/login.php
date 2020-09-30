<div class="view jarallax" style="height: 100vh;">
    <img class="img-fluid" src="vistas/img/fondo_login.jpg" alt="">
    <div class="mask rgba-blue-slight">
      <div class="container flex-center text-center">
        <div class="row mt-5">
        <div style="width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                z-index: 1000;
                justify-content: center;
                padding-top: 33px;
                padding-left: 100px;">

                    <img class="" src="vistas/img/logo_recortado.png" alt="" style=" height: 100px;">
                <!-- <h1 class="display-4 text-center white-text animated fadeIn delay-3s" style="padding-top: 300px;">Sistema de Seguridad 4.0</h1> -->
                <!-- <br>
                <h2 class="text-white" style="padding-top: 300px;">Sistema de Seguridad 4.0</h2> -->
                
            </div>
          <div class="col-md-12 wow fadeInUp mb-3" style="z-index: 1000;">
              <div class="rounded" style="background: rgba(0, 0, 0, 0.801); height: 430px; width: 300px;">
                    <div class="container">
                        <form method="post" class="mt-5">
<br>

                            <div class="row">
                                <div class="col-1">
                                    <a href="<?php echo $ruta; ?>inicio"><i class="far fa-arrow-alt-circle-left"></i></a>
                                </div>
                            </div>
                            <h1 class=" text-center font-weight-bold py-3 pt-2 text-white animated zoomIn delay-1s">INGRESO</h1>

                            <!-- <input type="email" class="form-control my-3 py-3" placeholder="Correo Electrónico" name="ingresoEmail" required>

                            <input type="password" class="form-control my-3 py-3" placeholder="Contraseña" name="ingresoPassword" required> -->

                            <div class="md-form">
                                <input type="text" id="Form-email1" class="form-control" name="ingresoEmail" required>
                                <label for="Form-email1">Ingresa tu Correo Electrónico</label>
                            </div>

                            <div class="md-form">
                                <input type="password" id="Form-pass1" class="form-control" name="ingresoPassword" required>
                                <label for="Form-pass1">Ingresa tu Contraseña</label>
                            </div>

                            <?php 

                                $ingreso = new ControladorUsuarios();
                                $ingreso -> ctrIngresoUsuario();

                            ?>

                            <!-- <input type="submit" class="form-control my-3 py-3 btn btn-info" value="Ingresar"> -->

                            <div class="text-center mb-3">
                                <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-1a" value="Ingresar">Ingresar</button>
                            </div>

                            <!-- <p class="text-center pt-1">¿Aún no tienes una cuenta? | <a href="<?php //echo $ruta; ?>registro">Regístrate</a></p> -->
                            <!-- <p class="text-center pt-1"><a href="<?php //echo $ruta; ?>registro">Regístrate</a></p> -->

                            <p class="text-center pt-1"><a href="#modalRecuperarPassword" data-toggle="modal" data-dismiss="modal">¿Olvidó su contraseña?</a></p>

                            </form>
                    </div>
              </div>    
          </div>
        </div>
      </div>
    </div>
  </div>


  
<div class="modal" id="modalRecuperarPassword">
	
	<div class="modal-dialog">

	    <div class="modal-content">

	    	<div class="modal-header bg-info text-white">

		        <h4 class="modal-title">Recuperar contraseña</h4>

		        <button type="button" class="close text-white" data-dismiss="modal">&times;</button>

		    </div>

			 <div class="modal-body">
			 	
				<form method="post">

					<p class="text-muted">Escriba su correo electrónico con el que está registrado y allí le enviaremos una nueva contraseña:</p>

					<div class="input-group mb-3">
						
						<div class="input-group-prepend">

					      <span class="input-group-text">
					      	
					      	<i class="far fa-envelope"></i>

					      </span>

					    </div>

					    <input type="email" class="form-control" placeholder="Email" name="emailRecuperarPassword" required>

					</div>

					<input type="submit" class="btn btn-dark btn-block" value="Enviar">

					<?php

						//$recuperarPassword = new ControladorUsuarios();
						//$recuperarPassword -> ctrRecuperarPassword();

					?>

				</form>

			 </div>

	    </div>

    </div>

</div>