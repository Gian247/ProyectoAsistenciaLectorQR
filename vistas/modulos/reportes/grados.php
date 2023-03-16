<?php

$item = null;
$valor = null;
$orden = "id";

$ventas = "0";

$registros = ControladorRegistros::ctrMostrarRegistros($item, $valor);

$totalRegistros = count($registros);

//Total kinder
$gradoKinder="KINDER";
$kinder=ControladorRegistros::mostrarCantidadAsistentesPorGrado($gradoKinder);
$totalKinder=count($kinder);
//Total nursery
$gradoNursery="NURSERY";
$nursery=ControladorRegistros::mostrarCantidadAsistentesPorGrado($gradoNursery);
$totalNursery=count($nursery);

//Total prekinder
$gradoPrekinder="PRE KINDER";
$prekinder=ControladorRegistros::mostrarCantidadAsistentesPorGrado($gradoPrekinder);
$totalPrekinder=count($prekinder);

//Total 1 grado
$grado1="1 GRADO";
$nGrado1=ControladorRegistros::mostrarCantidadAsistentesPorGrado($grado1);
$totalGrado1=count($nGrado1);

//Total 2 grado
$grado2="2 GRADO";
$nGrado2=ControladorRegistros::mostrarCantidadAsistentesPorGrado($grado2);
$totalGrado2=count($nGrado2);

//Total 3 grado
$grado3="3 GRADO";
$nGrado3=ControladorRegistros::mostrarCantidadAsistentesPorGrado($grado3);
$totalGrado3=count($nGrado3);

//Total 4 grado
$grado4="4 GRADO";
$nGrado4=ControladorRegistros::mostrarCantidadAsistentesPorGrado($grado4);
$totalGrado4=count($nGrado4);
//Total 5 grado
$grado5="5 GRADO";
$nGrado5=ControladorRegistros::mostrarCantidadAsistentesPorGrado($grado5);
$totalGrado5=count($nGrado5);
//Total 6 grado
$grado6="6 GRADO";
$nGrado6=ControladorRegistros::mostrarCantidadAsistentesPorGrado($grado6);
$totalGrado6=count($nGrado6);

//Total 7 grado
$grado7="7 GRADO";
$nGrado7=ControladorRegistros::mostrarCantidadAsistentesPorGrado($grado7);
$totalGrado7=count($nGrado7);

//Total 8 grado
$grado8="8 GRADO";
$nGrado8=ControladorRegistros::mostrarCantidadAsistentesPorGrado($grado8);
$totalGrado8=count($nGrado8);

//Total 9 grado
$grado9="9 GRADO";
$nGrado9=ControladorRegistros::mostrarCantidadAsistentesPorGrado($grado9);
$totalGrado9=count($nGrado9);

//Total 10 grado
$grado10="10 GRADO";
$nGrado10=ControladorRegistros::mostrarCantidadAsistentesPorGrado($grado10);
$totalGrado10=count($nGrado10);
//Total 11 grado
$grado11="11 GRADO";
$nGrado11=ControladorRegistros::mostrarCantidadAsistentesPorGrado($grado11);
$totalGrado11=count($nGrado11);






?>

<div class="col-lg-12 col-xs-12" style="text-align: center;">
<?php if(isset($_POST["fechaReporte"])):?>
  <h2><b>REGISTRO ASISTENCIA PORTULANTES <?php echo $_POST["fechaReporte"]; ?></b></h2>
<?php else:?>
  <h2><b>REPORTE GENERAL</b></h2>
<?php endif;?>
</div>

<h3>   Kinder</h3>
<div class="col-lg-4 col-xs-4">
    
  <div class="small-box bg-blue">
    
    <div class="inner">
      
      <h3><?php echo number_format($totalNursery); ?> postulantes</h3>

      <p>NURSERY</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-social-usd"></i>
    
    </div>
    
    <a href="" class="small-box-footer">
      
      
    
    </a>

  </div>

</div>

<div class="col-lg-4 col-xs-4">

  <div class="small-box bg-blue">
    
    <div class="inner">
    
      <h3><?php echo number_format($totalPrekinder); ?> postulantes</h3>

      <p>PRE KINDER</p>
    
    </div>
    
    <div class="icon">
    
      <i class="ion ion-clipboard"></i>
    
    </div>
    
    <a href="" class="small-box-footer">
      
      
    
    </a>

  </div>

</div>

<div class="col-lg-4 col-xs-4">

  <div class="small-box bg-blue">
    
    <div class="inner">
    
      <h3><?php echo number_format($totalKinder); ?> postulantes</h3>

      <p>KINDER</p>
  
    </div>
    
    <div class="icon">
    
      <i class="ion ion-person-add"></i>
    
    </div>
    
    <a href="clientes" class="small-box-footer">

      

    </a>

  </div>

</div>

<h3>   Primaria</h3>
<div class="col-lg-4 col-xs-4">
    
  <div class="small-box bg-yellow">
    
    <div class="inner">
      
      <h3><?php echo number_format($totalGrado1); ?> postulantes</h3>

      <p>1ER GRADO</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-social-usd"></i>
    
    </div>
    
    <a href="" class="small-box-footer">
      
      
    
    </a>

  </div>

</div>

<div class="col-lg-4 col-xs-4">

  <div class="small-box bg-yellow">
    
    <div class="inner">
    
      <h3><?php echo number_format($totalGrado2); ?> postulantes</h3>

      <p>2DO GRADO</p>
    
    </div>
    
    <div class="icon">
    
      <i class="ion ion-clipboard"></i>
    
    </div>
    
    <a href="" class="small-box-footer">
      
      
    
    </a>

  </div>

</div>

<div class="col-lg-4 col-xs-4">

  <div class="small-box bg-yellow">
    
    <div class="inner">
    
      <h3><?php echo number_format($totalGrado3); ?> postulantes</h3>

      <p>3ER GRADO</p>
  
    </div>
    
    <div class="icon">
    
      <i class="ion ion-person-add"></i>
    
    </div>
    
    <a href="" class="small-box-footer">

      

    </a>

  </div>

</div>
<div class="col-lg-4 col-xs-4">
    
  <div class="small-box bg-yellow">
    
    <div class="inner">
      
      <h3><?php echo number_format($totalGrado4); ?> postulantes</h3>

      <p>4TO GRADO</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-social-usd"></i>
    
    </div>
    
    <a href="" class="small-box-footer">
      
      
    
    </a>

  </div>

</div>

<div class="col-lg-4 col-xs-4">

  <div class="small-box bg-yellow">
    
    <div class="inner">
    
      <h3><?php echo number_format($totalGrado5); ?> postulantes</h3>

      <p>5TO GRADO</p>
    
    </div>
    
    <div class="icon">
    
      <i class="ion ion-clipboard"></i>
    
    </div>
    
    <a href="" class="small-box-footer">
      
      
    
    </a>

  </div>

</div>

<div class="col-lg-4 col-xs-4">

  <div class="small-box bg-yellow">
    
    <div class="inner">
    
      <h3><?php echo number_format($totalGrado6); ?> postulantes</h3>

      <p>6TO GRADO</p>
  
    </div>
    
    <div class="icon">
    
      <i class="ion ion-person-add"></i>
    
    </div>
    
    <a href="" class="small-box-footer">

      

    </a>

  </div>

</div>


<h3>   Secundaria</h3>
<div class="col-lg-4 col-xs-4">
    
  <div class="small-box bg-purple">
    
    <div class="inner">
      
      <h3><?php echo number_format($totalGrado7); ?> postulantes</h3>

      <p>7MO GRADO</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-social-usd"></i>
    
    </div>
    
    <a href="" class="small-box-footer">
      
      
    
    </a>

  </div>

</div>

<div class="col-lg-4 col-xs-4">

  <div class="small-box bg-purple">
    
    <div class="inner">
    
      <h3><?php echo number_format($totalGrado8); ?> postulantes</h3>

      <p>8VO GRADO</p>
    
    </div>
    
    <div class="icon">
    
      <i class="ion ion-clipboard"></i>
    
    </div>
    
    <a href="" class="small-box-footer">
      
      
    
    </a>

  </div>

</div>

<div class="col-lg-4 col-xs-4">

  <div class="small-box bg-purple">
    
    <div class="inner">
    
      <h3><?php echo number_format($totalGrado9); ?> postulantes</h3>

      <p>9NO GRADO</p>
  
    </div>
    
    <div class="icon">
    
      <i class="ion ion-person-add"></i>
    
    </div>
    
    <a href="" class="small-box-footer">

      

    </a>

  </div>

</div>
<div class="col-lg-4 col-xs-4">
    
  <div class="small-box bg-purple">
    
    <div class="inner">
      
      <h3><?php echo number_format($totalGrado10); ?> postulantes</h3>

      <p>10MO GRADO</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-social-usd"></i>
    
    </div>
    
    <a href="" class="small-box-footer">
      
      
    
    </a>

  </div>

</div>

<div class="col-lg-4 col-xs-4">

  <div class="small-box bg-purple">
    
    <div class="inner">
    
      <h3><?php echo number_format($totalGrado11); ?> postulantes</h3>

      <p>11MO GRADO</p>
    
    </div>
    
    <div class="icon">
    
      <i class="ion ion-clipboard"></i>
    
    </div>
    
    <a href="" class="small-box-footer">
      
      
    
    </a>

  </div>

</div>




