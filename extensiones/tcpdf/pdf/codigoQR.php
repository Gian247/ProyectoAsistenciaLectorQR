<?php
require_once "../../../controladores/registros.controlador.php";
require_once "../../../modelos/registros.modelo.php";
class imprimirCodigoQr{
    public $idFamilia;
    public function traerCodigoQr(){
        ini_set('displays_errrors',0);
        ini_set('log_errors',1);
        $idFamilia=$this->idFamilia;
        require_once("../tcpdf.php");

        $codigoRegistroUsuario=explode("-",$idFamilia);
        $itemIdBusqueda=(int)$codigoRegistroUsuario[0];
        $itemConsulta="id_postulante";
        $respuestaTablaRegistros=ControladorRegistros::ctrMostrarRegistros($itemConsulta,$itemIdBusqueda);


        $pdf= new TCPDF(PDF_PAGE_ORIENTATION,PDF_UNIT,PDF_PAGE_FORMAT,true,'UTF-8',false);
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        $pdf->SetFont('helvetica', '', 11);
        $pdf->AddPage('L','E7');
        //$pdf->AddPage();
        $pdf->SetFillColor(255, 255, 127);
        $txt="\nPOSTULANTE: ".$respuestaTablaRegistros["nombre_completo"]."\n\n";
        $txt=$txt."GRADO POSTULACIÓN: ".$respuestaTablaRegistros["grado_ingreso"]."\n\n";
        $txt=$txt."AÑO POSTULACIÓN: ".$respuestaTablaRegistros["posible_ingreso"]."\n";
        $pdf->MultiCell(60, 40, $txt, 1, 'C', true, 1, 45, 15, true, 0, false, true, 0, 'T', false);


        $style = array(
            // 'position'=>'',
            // 'align'=>'C',
            // 'stretch'=>false,
            // 'fitwidth'=>true,
            // 'cellfitalign'=>'',
            'border'=>true,
            'hpadding'=>'auto',
            'vpadding'=>'auto',
            'fgcolor'=>array(0,0,0),
            'bgcolor'=>false,
            'module_width' => 1, // width of a single module in points
            'module_height' => 1 // height of a single module in points
        );
        
        $code = '111011101110111,010010001000010,010011001110010,010010000010010,010011101110010';
        $pdf->write2DBarcode($idFamilia, 'QRCODE', 4, 15, 40, 40, $style, 'N');
        

        $pdf->Output('example_050.pdf', 'I');
    }
    
}


$generacionCodigoIndividual=new imprimirCodigoQr();
$generacionCodigoIndividual->idFamilia=$_GET["dataFamilia"];
$generacionCodigoIndividual->traerCodigoQr();
