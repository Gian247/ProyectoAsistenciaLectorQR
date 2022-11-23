<!DOCTYPE html>
<html>
<head>
  <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />

  
  <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Open LVC 2022</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="icon" href="vistas/img/LVC-logo-2.png">

   <!--=====================================
  PLUGINS DE CSS
  ======================================-->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">
  
  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

   <!-- DataTables -->
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

   <!-- iCheck for checkboxes and radio inputs -->
   <link rel="stylesheet" href="vistas/plugins/iCheck/all.css">
     <!-- Select2 -->
  <link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css">

  <!--=====================================
  PLUGINS DE JAVASCRIPT
  ======================================-->

  <!-- jQuery 3 -->
  <script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>
  
  <!-- Bootstrap 3.3.7 -->
  <script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- FastClick -->
  <script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>
  
  <!-- AdminLTE App -->
  <script src="vistas/dist/js/adminlte.min.js"></script>

  <!-- DataTables -->
  <script src="vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>

  <!-- SweetAlert 2 -->
  <script src="vistas/plugins/sweetalert2/sweetalert2.all.js"></script>
  <!-- By default SweetAlert2 doesn't support IE. To enable IE 11 support, include Promise polyfill:-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

  <!-- iCheck 1.0.1 -->
<script src="vistas/plugins/iCheck/icheck.min.js"></script>

<!-- LECTOR QR -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

<!-- EXPORTAR EXCEL -->
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> -->
<script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>

</head>

<!--=====================================
CUERPO DOCUMENTO
======================================-->

<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">

    <?php
     echo '<div class="wrapper">';
        include "modulos/cabezote.php";
        include "modulos/menu.php";
    if(isset($_GET["ruta"])){
        if($_GET["ruta"]=="inicio" || $_GET["ruta"]=="registros"){

            include "modulos/".$_GET["ruta"].".php";

        }else{

            include "modulos/404.php";
        }
    }else{
        
        include "modulos/inicio.php";

    }
    
        include "modulos/footer.php";
    echo '</div>';
    ?>

    <script src="vistas/js/plantilla.js"></script>
    <script type="text/javascript" >
    var sonido = new Audio("barcode.wav");
    var scanner=new Instascan.Scanner({
        video: document.getElementById('previsualizacion'),
        scanPeriod: 5,
        mirror: false,

    });
    Instascan.Camera.getCameras().then(function(cameras){
        if(cameras.length>0){
            scanner.start(cameras[0]);
        }else{
            console.error('NO se encontraron camaras');
            alert('NO se encontraron camaras');

        }
    }).catch(function(e){
        console.error(e);
        alert("Error"+e);
    });
    scanner.addListener('scan',function(respuesta){
        sonido.play();
        
        let texto=respuesta.toString();
        let separacion=texto.split("-");
        
        
        
        document.getElementById('text').value=separacion[0];
        document.getElementById('nombreMostrar').value=separacion[1];
        document.getElementById('grado').value=separacion[2];
        document.getElementById('ingreso').value=separacion[3];
        
    });

    $("#exportar").click(function(){

        $("#datos").table2excel({

            // exclude CSS class

            exclude:".noExl",
            name:"Worksheet Name",
            filename:"RegistrosOpen",//do not include extension
            fileext:".xls" // file extension

        });

    });


   

</script>  
<script src="https://cdn.jsdelivr.net/npm/table2excel@1.0.4/dist/table2excel.min.js"></script>  
</body>
</html>