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
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarRegistro" >Agregar registro</button>

          <button class="btn btn-success" id="exportar" data-toggle="modal" >Exportar  Excel</button>

         

        </div>


        <div class="box-body">
        <table class="table table-bordered table-striped tablas dt-responsive" id="datos" >

            <thead>
              <tr>
                <th>#</th>
                <th>Nombre Completo</th>
                <th>Familia</th>
                <th>Año Ingreso</th>
                <th>Grado</th>
                <th>Celular</th>
                <th>Cantidad asistentes</th>
                <th>Asistencia Postulante</th>
                <th>Acciones</th></th>
              </tr>

            </thead>
            <tbody>
              <?php
              
              $item=null;
              $valor=null;
              $registros=ControladorRegistros::ctrMostrarRegistros($item,$valor);
              foreach($registros as $key =>$value):

              ?>

              <tr>
                <td><?php echo $value["id_postulante"];?></td>
                <td><?php echo $value["nombre_completo"];?></td>
                <td><?php echo $value["familia"];?></td>
                <td><?php echo $value["posible_ingreso"];?></td>
                <td><?php echo $value["grado_ingreso"];?></td>
                <td><?php echo $value["celular"];?></td>
                <td><?php echo $value["cantidad_asistentes"];?></td>
                <td><?php echo $value["asistencia_postulante"];?></td>
                <td>
                  <div class="btn-group">
                      <button class="btn btn-warning btnEditarRegistro" idPostulante="<?php echo $value["id_postulante"];?>" data-toggle="modal" data-target="#modalEditarRegistro"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger btnEliminarCategoria" idPostulante="<?php echo $value["id_postulante"];?>"><i class="fa fa-times"></i></button>
                  </div>
                </td>
                
                

              </tr>
              <?php endforeach;?>
              
             
             

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

      <div class="modal-header" style="background:#3c8dbc; color:white">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">Agregar Registro</h4>

      </div>
      <!-- **********************************
              CUERPO DEL MODAL
      **************************************-->

      <div class="modal-body">

        <div class="box-body">
          <!--Entrada de nombre-->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-th"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar Nombre Completo" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
            </div>
          </div>

          <!--Entrada de Familia-->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-th"></i></span>
              <input type="text" class="form-control input-lg" name="nuevaFamilia" placeholder="Familia" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
            </div>
          </div>

          <!--Entrada de año de ingreso-->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-th"></i></span>
              <input type="number" class="form-control input-lg" name="nuevoIngreso" placeholder="Año de Ingreso" required>
            </div>
          </div>

          <!--Entrada de grado-->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-th"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoGrado" placeholder="Grado" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
            </div>
          </div>

          <!--Entrada de celular-->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-th"></i></span>
              <input type="number" class="form-control input-lg" name="nuevoCelular" placeholder="Celular" required>
            </div>
          </div>
          <!--Entrada de correo-->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-th"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoCorreo" placeholder="Correo Electronico" onkeyup="javascript:this.value=this.value.toLowerCase();" required>
            </div>
          </div>

          <!--Entrada de cantidad de asistentes-->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-th"></i></span>
              <input type="number" class="form-control input-lg" name="nuevaCantidad" placeholder="Cantidad Asistentes Open" required>
            </div>
          </div>

          <!--Entrada de seleccion asistencia postulante -->
          <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users"></i></span>
                  <select class="form-control input-lg" name="nuevaAsistenciaPostulante" >
                    
                    <option value="NO REGISTRADO">NO REGISTRADO</option>
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

      <div class="modal-header" style="background:#3c8dbc; color:white">

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
              <input type="text" class="form-control input-lg" id="idPostulante" name="idPostulante" placeholder="Ingresar Nombre Completo" disabled>
            </div>
          </div>
          <!--Entrada de editar nombre-->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-th"></i></span>
              <input type="text" class="form-control input-lg" id="editarNombre" name="editarNombre" placeholder="Ingresar Nombre Completo" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
            </div>
          </div>

          <!--Entrada de editar Familia-->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-th"></i></span>
              <input type="text" class="form-control input-lg" id="editarFamilia" name="editarFamilia" placeholder="Familia" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
            </div>
          </div>

          <!--Entrada de editar año de ingreso-->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-th"></i></span>
              <input type="number" class="form-control input-lg" id="editarIngreso" name="editarIngreso" placeholder="Año de Ingreso" required>
            </div>
          </div>

          <!--Entrada de editar grado-->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-th"></i></span>
              <input type="text" class="form-control input-lg" id="editarGrado" name="editarGrado" placeholder="Grado" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
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
              <input type="number" class="form-control input-lg" id="editarCantidad" name="editarCantidad" placeholder="Cantidad Asistentes Open"  required>
            </div>
          </div>

          <!--Entrada de editar seleccion asistencia postulante -->
          <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users"></i></span>
                  <select class="form-control input-lg" id="editarAsistenciaPostulante" name="editarAsistenciaPostulante" >
                    <option value="NO REGISTRADO">NO REGISTRADO</option>
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


