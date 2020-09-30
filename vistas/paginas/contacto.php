<?php

include "modulos/menu.php";

?>


<div class="view jarallax" style="height: 100vh;">
<img class="img-fluid" src="vistas/img/contact.jpg" alt="">
    <div class="mask rgba-blue-slight">
        <br>
      <div class="container flex-center text-center">
        <div class="row mt-5">
          <div class="col-md-12 wow fadeIn mb-3">
            

                <div class="rounded wow fadeInUp" style="background-color: rgba(0, 0, 0, 0.801); height: 500px; width: 500px;">
                    <div class="col">
                        <form action="" method="POST">
                            <br>
                            <label class="text-white" for="">Nombre</label>
                            <input type="text" class="form-control" name="name" placeholder="Escriba su nombre" required>
                            <label class="text-white" for="">Correo</label>
                            <input type="email" class="form-control" name="email" placeholder="Escriba el correo" required>
                            <label class="text-white" for="">Asunto</label>
                            <input type="text" class="form-control" name="asunto" placeholder="Asunto">
                            <div class="mb-3">
                                <label class="text-white" for="validationTextarea">Mensaje</label>
                                <textarea class="form-control is-invalid"  rows="4" placeholder="Ingrese su mensaje" name="mensaje" required></textarea>
                                <!-- <div class="invalid-feedback">
                                    Por favor, escriba su mensaje
                                </div> -->
                            </div>
                            <input class="btn btn-info" type="submit" name="enviar">
                        </form>
                        <?php
                        include "modulos/correo.php";
                        ?>
                    </div>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>