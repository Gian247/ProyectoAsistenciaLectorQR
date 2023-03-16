<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Tablero
        <small>Panel de control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        
        <li class="active">Reportes</li>
      </ol>
    </section>



    

    <!-- Main content -->
    <section class="content">
    <div class="box">
        <div class="box-header with-border">
            <div class="col-md-6 col-xs-12">
                <form action="" method="post">
                  <div class="input-group">
                        <select name="fechaReporte" class="form-control" id="">
                            <option value="">Seleccione año de postulación</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            
                        </select>
                    <span class="input-group-btn">
                        <button  class="btn btn-success btn-flat btnImprimirReporte">Filtrar</button>
                    
                    </span>
                    
                    
                </div>

                </form>
                
                
              
            </div>
          
          
          <div class="box-tools pull-right">
          <?php

            if(isset($_GET["fechaInicial"])){

              echo '<a href="vistas/modulos/descargar-reporte.php?reporte=reporte&fechaInicial='.$_GET["fechaInicial"].'&fechaFinal='.$_GET["fechaFinal"].'">';

            }else{

              echo '<a href="vistas/modulos/descargar-reporte.php?reporte=reporte">';

            }         

            ?>
            <form action="extensiones/descargar-reporte.php" target="_blank">
              <button  class="btn btn-success" style="margin-top:5px">Imprimir Reporte</button>
            </form>
              

            </a>

          </div>
        </div>
        <div class="box-body">
          <!-- Creamos una fila -->
          <div class="row">
            <!-- Desde dispositivo pequeño hacia dispositivo grande que ocupe 12 columnas -->
            <div class="col-xs-12">
              <?php
                include "reportes/cajas-superiores.php";
              ?>
            </div>
            <!-- La mitad de la pagina de escritorio mediano hacia arriba -->
            <!-- Y que ocuoe las 12 columnas de dispositivos moviles-->
            <div class="col-xs-12">
              <?php
                include "reportes/grados.php";
              ?>
            </div>

            
            
          </div>
        </div>
       
      </div>
    </section>
    <!-- /.content -->
  </div>