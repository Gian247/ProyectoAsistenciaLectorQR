<?php

$item=null;
$valor=null;
//TOTAL FAMILIAS INSCRITAS
$categorias = ControladorRegistros::ctrMostrarRegistros($item, $valor);
$totalRegistros = count($categorias);

//TOTAL FAMILIAS ASISTENTES
$asistentes = ControladorRegistros::mostratTotalAsistencias(null);
$totalAsistentes = count($asistentes);







?>

<div class="col-lg-6 col-xs-6">

  <div class="small-box bg-red">
    
    <div class="inner">
    
      <h3><?php echo number_format($totalRegistros); ?></h3>

      <p>Familias Inscritas</p>
    
    </div>
    
    <div class="icon">
    
      <i class="ion ion-clipboard"></i>
    
    </div>
    
    <a href="categorias" class="small-box-footer">
      
      
    
    </a>

  </div>

</div>


<div class="col-lg-6 col-xs-6">

  <div class="small-box bg-green">
    
    <div class="inner">
      
      <h3><?php echo number_format($totalAsistentes); ?></h3>

      <p>Familias Asistentes</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-social-usd"></i>
    
    </div>
    
    <a href="ventas" class="small-box-footer">
      
      
    
    </a>

  </div>

</div>







