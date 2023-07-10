<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Administrar Registros

    </h1>
    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Administrar Registros</li>
    </ol>
  </section>





  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">

      <div class="box-header with-border">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarRegistro">Agregar registro</button>

        <button class="btn btn-success" id="exportar" data-toggle="modal">Exportar Excel</button>



      </div>


      <div class="box-body">
        <table class="table table-bordered table-striped tablas " id="datos">

          <thead>
            <tr>
              <th style="width: 80px;">#</th>
              <th>Familia</th>
              <th>Nombre Completo</th>
              <th>Apoderado</th>
              <th>Residencia</th>
              <th>Año Ingreso</th>
              <th>Grado</th>
              <th>Celular</th>

              <th style="width: 80px;">Cantidad asistentes</th>
              <th>Asistencia Postulante</th>
              <th>Acciones</th>

            </tr>

          </thead>
          <tbody>
            <?php

            $item = null;
            $valor = null;
            $registros = ControladorRegistros::ctrMostrarRegistros($item, $valor);
            foreach ($registros as $key => $value) :

            ?>

              <tr>
              
                <td><?php echo $value["id_postulante"]; ?></td>
                <td><?php echo $value["familia"]; ?></td>
                <td><?php echo $value["nombre_completo"]; ?></td>
                <td><?php echo $value["responsable"]; ?></td>
                <td><?php echo $value["residencia"]; ?></td>
                <td><?php echo $value["posible_ingreso"]; ?></td>
                <td><?php echo $value["grado_ingreso"]; ?></td>
                <td><?php echo $value["celular"]; ?></td>
                <td><?php echo $value["cantidad_asistentes"]; ?></td>
                <td><?php echo $value["asistencia_postulante"]; ?></td>
                <td>
                  <div class="btn-group">
                    <button style="width: 35px;" class="btn btn-info btnImprimirCodigoQr" datosFamilia="<?php echo $value["id_postulante"] . "-" . $value["nombre_completo"] . "-" . $value["grado_ingreso"] . "-" . $value["posible_ingreso"]; ?>"><i class="fa fa-print"></i></button>
                    <button style="width: 35px;" class="btn btn-warning btnEditarRegistro" idPostulante="<?php echo $value["id_postulante"]; ?>" data-toggle="modal" data-target="#modalEditarRegistro"><i class="fa fa-pencil"></i></button>
                    <button style="width: 35px;" class="btn btn-danger btnEliminarRegistro" idPostulante="<?php echo $value["id_postulante"]; ?>"><i class="fa fa-times"></i></button>
                  </div>
                </td>



              </tr>
            <?php endforeach; ?>




          </tbody>
        </table>
      </div>


    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>


<!-- **********************************
          MODAL AGREGAR REGISTRO
 **************************************-->

<div id="modalAgregarRegistro" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <!-- -->
    <div class="modal-content">

      <form role="form" method="post">


        <!-- **********************************
                CABEZA DEL MODAL
      **************************************-->

        <div class="modal-header" style="background:#215732; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Registro</h4>

        </div>
        <!-- **********************************
              CUERPO DEL MODAL
      **************************************-->

        <div class="modal-body">

          <div class="box-body">

              <!--Entrada Familia-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <input type="text" class="form-control input-lg" name="nuevaFamilia" placeholder="Ingresar Apellido de Familia" onkeyup="javascript:this.value=this.value.toUpperCase();">
              </div>
            </div>
            <!--Entrada de nombre-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar Nombre Completo Postulante" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
              </div>
            </div>

            <!--Entrada de Apoderadp-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoApoderado" placeholder="Ingrese Nombre Apoderado" onkeyup="javascript:this.value=this.value.toUpperCase();">
              </div>
            </div>
            <!--Entrada de Distrito Residencia-->

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <select class="form-control input-lg" name="nuevoDistrito">
                  <option value="">Seleccione Distrito Residencia</option>
                  <option value="Ancón">Ancón</option>
                  <option value="Ate">Ate</option>
                  <option value="Barranco">Barranco</option>
                  <option value="Breña">Breña</option>
                  <option value="Carabayllo">Carabayllo</option>
                  <option value="Cercado de Lima">Cercado de Lima</option>
                  <option value="Chaclacayo">Chaclacayo</option>
                  <option value="Chorrillos">Chorrillos</option>
                  <option value="Cieneguilla">Cieneguilla</option>
                  <option value="Comas">Comas</option>
                  <option value="El agustino">El agustino</option>
                  <option value="Independencia">Independencia</option>
                  <option value="Jesús maría">Jesús maría</option>
                  <option value="La molina">La molina</option>
                  <option value="La victoria">La victoria</option>
                  <option value="Lince">Lince</option>

                  <option value="Los olivos">Los olivos</option>
                  <option value="Lurigancho">Lurigancho</option>
                  <option value="Lurín">Lurín</option>
                  <option value="Magdalena del mar">Magdalena del mar</option>
                  <option value="Miraflores">Miraflores</option>
                  <option value="Pachacámac">Pachacámac</option>
                  <option value="Pucusana">Pucusana</option>
                  <option value="Pueblo libre">Pueblo libre</option>

                  <option value="Puente piedra">Puente piedra</option>
                  <option value="Punta hermosa">Punta hermosa</option>
                  <option value="Punta negra">Punta negra</option>
                  <option value="Breña">Breña</option>
                  <option value="Rímac">Rímac</option>
                  <option value="San bartolo">San bartolo</option>
                  <option value="San borja">San borja</option>
                  <option value="San isidro">San isidro</option>

                  <option value="San Juan de Lurigancho">San Juan de Lurigancho</option>
                  <option value="San Juan de Miraflores">San Juan de Miraflores</option>
                  <option value="San Luis">San Luis</option>
                  <option value="San Martin de Porres">San Martin de Porres</option>
                  <option value="San Miguel">San Miguel</option>
                  <option value="Santa Anita">Santa Anita</option>
                  <option value="Santa María del Mar">Santa María del Mar</option>
                  <option value="Santa Rosa">Santa Rosa</option>
                  <option value="Santiago de Surco">Santiago de Surco</option>
                  <option value="Surquillo">Surquillo</option>
                  <option value="Villa el Salvador">Villa el Salvador</option>
                  <option value="Villa Maria del Triunfo">Villa Maria del Triunfo</option>



                </select>
              </div>
            </div>


            <!--Entrada de año de ingreso-->

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <select class="form-control input-lg" name="nuevoIngreso" required>
                  <option value="">Seleccione Año de Ingreso</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                  <option value="2026">2026</option>
                  <option value="2027">2027</option>
                  <option value="2028">2028</option>
                  <option value="2029">2029</option>
                  <option value="2030">2030</option>

                </select>
              </div>
            </div>

            <!--Entrada de grado-->

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <select class="form-control input-lg" name="nuevoGrado" required>
                  <option value="">Seleccione Grado</option>
                  <option value="NURSERY">NURSERY</option>
                  <option value="PRE KINDER">PREKINDER</option>
                  <option value="KINDER">KINDER</option>
                  <option value="1 GRADO">1 GRADO</option>
                  <option value="2 GRADO">2 GRADO</option>
                  <option value="3 GRADO">3 GRADO</option>
                  <option value="4 GRADO">4 GRADO</option>
                  <option value="5 GRADO">5 GRADO</option>
                  <option value="6 GRADO">6 GRADO</option>
                  <option value="7 GRADO">7 GRADO</option>
                  <option value="8 GRADO">8 GRADO</option>
                  <option value="9 GRADO">9 GRADO</option>
                  <option value="10 GRADO">10 GRADO</option>
                  <option value="11 GRADO">11 GRADO</option>

                </select>
              </div>
            </div>

            <!--Entrada de celular-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <input type="number" class="form-control input-lg" name="nuevoCelular" placeholder="Celular" >
              </div>
            </div>
            <!--Entrada de correo-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoCorreo" placeholder="Correo Electronico" onkeyup="javascript:this.value=this.value.toLowerCase();" >
              </div>
            </div>

            <!--Entrada de cantidad de asistentes-->
            <!-- <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-th"></i></span>
              <input type="number" class="form-control input-lg" name="nuevaCantidad" placeholder="Cantidad Asistentes Open" required>
            </div>
          </div> -->

            <!--Entrada de seleccion asistencia postulante -->
            <!-- <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users"></i></span>
                  <select class="form-control input-lg" name="nuevaAsistenciaPostulante" >
                    
                    <option value="NO REGISTRADO">NO REGISTRADO</option>
                    <option value="SI">SI</option>
                    <option value="NO">NO</option>
                  </select>
              </div>
            </div> -->




          </div>

        </div>
        <!-- **********************************
                PIE DEL MODAL
      **************************************-->
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary ">Guardar Categoría</button>
        </div>
    </div>
    <?php
    $crearRegistro = new ControladorRegistros();
    $crearRegistro->ctrCrearRegistro();
    ?>
    </form>

  </div>
</div>


<!-- **********************************
          MODAL EDITAR REGISTRO
 **************************************-->

<div id="modalEditarRegistro" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <!-- -->
    <div class="modal-content">

      <form role="form" method="post">


        <!-- **********************************
                CABEZA DEL MODAL
      **************************************-->

        <div class="modal-header" style="background:#215732; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar Registro</h4>

        </div>
        <!-- **********************************
              CUERPO DEL MODAL
      **************************************-->

        <div class="modal-body">

          <div class="box-body">
            <!--Entrada de idPostulante-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <input type="text" class="form-control input-lg" id="idPostulante" name="idPostulante" placeholder="Ingresar Nombre Completo" readonly>
              </div>
            </div>
            <!--Entrada de editar familia-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <input type="text" class="form-control input-lg" id="editarFamilia" name="editarFamilia" placeholder="Ingresar el Apellido de Familia" onkeyup="javascript:this.value=this.value.toUpperCase();" >
              </div>
            </div>
            <!--Entrada de editar nombre-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <input type="text" class="form-control input-lg" id="editarNombre" name="editarNombre" placeholder="Ingresar Nombre Completo" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
              </div>
            </div>

            <!--Entrada de editar Apoderado-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <input type="text" class="form-control input-lg" id="editarApoderado" name="editarApoderado" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
              </div>
            </div>

            <!--Distrito de Residencia-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <select class="form-control input-lg" name="editarDistrito" required>
                  <option id="editarDistrito" value="">Seleccione Distrito Residencia</option>
                  <option value="Ancón">Ancón</option>
                  <option value="Ate">Ate</option>
                  <option value="Barranco">Barranco</option>
                  <option value="Breña">Breña</option>
                  <option value="Carabayllo">Carabayllo</option>
                  <option value="Cercado de Lima">Cercado de Lima</option>
                  <option value="Chaclacayo">Chaclacayo</option>
                  <option value="Chorrillos">Chorrillos</option>
                  <option value="Cieneguilla">Cieneguilla</option>
                  <option value="Comas">Comas</option>
                  <option value="El agustino">El agustino</option>
                  <option value="Independencia">Independencia</option>
                  <option value="Jesús maría">Jesús maría</option>
                  <option value="La molina">La molina</option>
                  <option value="La victoria">La victoria</option>
                  <option value="Lince">Lince</option>

                  <option value="Los olivos">Los olivos</option>
                  <option value="Lurigancho">Lurigancho</option>
                  <option value="Lurín">Lurín</option>
                  <option value="Magdalena del mar">Magdalena del mar</option>
                  <option value="Miraflores">Miraflores</option>
                  <option value="Pachacámac">Pachacámac</option>
                  <option value="Pucusana">Pucusana</option>
                  <option value="Pueblo libre">Pueblo libre</option>

                  <option value="Puente piedra">Puente piedra</option>
                  <option value="Punta hermosa">Punta hermosa</option>
                  <option value="Punta negra">Punta negra</option>
                  <option value="Breña">Breña</option>
                  <option value="Rímac">Rímac</option>
                  <option value="San bartolo">San bartolo</option>
                  <option value="San borja">San borja</option>
                  <option value="San isidro">San isidro</option>

                  <option value="San Juan de Lurigancho">San Juan de Lurigancho</option>
                  <option value="San Juan de Miraflores">San Juan de Miraflores</option>
                  <option value="San Luis">San Luis</option>
                  <option value="San Martin de Porres">San Martin de Porres</option>
                  <option value="San Miguel">San Miguel</option>
                  <option value="Santa Anita">Santa Anita</option>
                  <option value="Santa María del Mar">Santa María del Mar</option>
                  <option value="Santa Rosa">Santa Rosa</option>
                  <option value="Santiago de Surco">Santiago de Surco</option>
                  <option value="Surquillo">Surquillo</option>
                  <option value="Villa el Salvador">Villa el Salvador</option>
                  <option value="Villa Maria del Triunfo">Villa Maria del Triunfo</option>



                </select>
              </div>
            </div>

            <!--Entrada de editar año de ingreso-->
            
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <select class="form-control input-lg" name="editarIngreso" required>
                  <option id="editarIngreso" value="">Seleccione Año de Ingreso</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                  <option value="2026">2026</option>
                  <option value="2027">2027</option>
                  <option value="2028">2028</option>
                  <option value="2029">2029</option>
                  <option value="2030">2030</option>

                </select>
              </div>
            </div>



            <!--Entrada de editar grado-->
            
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <select class="form-control input-lg" name="editarGrado" required>
                  <option id="editarGrado" value="">Seleccione Grado</option>
                  <option value="NURSERY">NURSERY</option>
                  <option value="PRE KINDER">PREKINDER</option>
                  <option value="KINDER">KINDER</option>
                  <option value="1 GRADO">1 GRADO</option>
                  <option value="2 GRADO">2 GRADO</option>
                  <option value="3 GRADO">3 GRADO</option>
                  <option value="4 GRADO">4 GRADO</option>
                  <option value="5 GRADO">5 GRADO</option>
                  <option value="6 GRADO">6 GRADO</option>
                  <option value="7 GRADO">7 GRADO</option>
                  <option value="8 GRADO">8 GRADO</option>
                  <option value="9 GRADO">9 GRADO</option>
                  <option value="10 GRADO">10 GRADO</option>
                  <option value="11 GRADO">11 GRADO</option>

                </select>
              </div>
            </div>




            <!--Entrada de editar celular-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <input type="text" class="form-control input-lg" id="editarCelular" name="editarCelular" placeholder="Celular" required>
              </div>
            </div>
            <!--Entrada de editar correo-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <input type="text" class="form-control input-lg" id="editarCorreo" name="editarCorreo" placeholder="Correo Electronico" onkeyup="javascript:this.value=this.value.toLowerCase();" required>
              </div>
            </div>

            <!--Entrada de editar cantidad de asistentes-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <input type="number" class="form-control input-lg" id="editarCantidad" name="editarCantidad" placeholder="Cantidad Asistentes Open" required>
              </div>
            </div>

            <!--Entrada de editar seleccion asistencia postulante -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <select class="form-control input-lg"  name="editarAsistenciaPostulante">
                  <option id="editarAsistenciaPostulante" value=""></option>
                  <option  value="NO REGISTRADO">NO REGISTRADO</option>
                  <option value="SI">SI</option>
                  <option value="NO">NO</option>
                </select>
              </div>
            </div>



          </div>

        </div>
        <!-- **********************************
                PIE DEL MODAL
      **************************************-->
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary ">Guardar Cambios</button>
        </div>
    </div>
    <?php
    $editarCategoria = new ControladorRegistros();
    $editarCategoria->ctrEditarRegistro2();
    ?>
    </form>

  </div>
</div>


<?php
$borrarRegistro = new ControladorRegistros();
$borrarRegistro->ctrBorrarRegistro();

?>