<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Tablero
        <small>Panel de control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        
        <li class="active">Tablero</li>
      </ol>
    </section>



    

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Scaner QR</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <video src="" id="previsualizacion" class="select2" style="width:100%;"></video>
              </div>
              <!-- /.form-group -->
              
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <form action="" method="post">
                <div class="form-group">
                  <label>Id Postulante</label>
                  <input type="text" id="text" class="form-control select2" name="id_pos" style="width: 100%;" required >
                </div>
                <div class="form-group">
                  <label>Nombre Postulante</label>
                  <input type="text" id="nombreMostrar" class="form-control select2" name="" style="width: 100%;" required >
                </div>
                <div class="form-group">
                  <label>Grado</label>
                  <input type="text" id="grado" class="form-control select2" name="" style="width: 100%;" required >
                </div>
                <div class="form-group">
                  <label>Año Ingreso</label>
                  <input type="text" id="ingreso" class="form-control select2" name="" style="width: 100%;" required >
                </div>
                <div class="form-group">
                  <label>Cantidad</label>
                  <input type="number" class="form-control select2" name="editarCantidad1" style="width: 100%;" required>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Postulante</label>
                  <select class="form-control select2" name="editarPostulante1" style="width: 100%;">

                    <option value="Si">Si</option>
                    <option value="No">No</option>
                  </select>
                </div>

                <div class="form-group">
                  <button type="Submit" class="form-control btn btn-success select2" style="width: 100%;">Enviar</button>
                </div>
                <?php
                  $registrarAsistencia = new ControladorRegistros();
                  $registrarAsistencia -> ctrEditarRegistros();
        

                ?>


              </form>
              
              
              
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>