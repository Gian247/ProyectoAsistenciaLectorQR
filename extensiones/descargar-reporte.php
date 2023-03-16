<?php


require_once('tcpdf/tcpdf.php');
require_once('../controladores/registros.controlador.php');
require_once('../modelos/registros.modelo.php');


//VALORES DE LA BASE DE DATOS
/*========================================================
                    TOTALES POR GRADO                       
==========================================================*/
$totalGeneral=count(ControladorRegistros::mostratTotalAsistencias());



/*========================================================
                    TOTALES POR GRADO                       
==========================================================*/

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

/*========================================================
                    TOTALES POR AÑO                      
==========================================================*/
$totalReporte2023=count(ControladorRegistros::mostrarCantidadParaReportePdf("2023",null));
$totalReporte2024=count(ControladorRegistros::mostrarCantidadParaReportePdf("2024",null));
$totalReporte2025=count(ControladorRegistros::mostrarCantidadParaReportePdf("2025",null));
$totalReporte2026=count(ControladorRegistros::mostrarCantidadParaReportePdf("2026",null));
$totalReporte2027=count(ControladorRegistros::mostrarCantidadParaReportePdf("2027",null));
$totalReporte2028=count(ControladorRegistros::mostrarCantidadParaReportePdf("2028",null));

/*========================================================
                    TOTALES POR AÑO Y GRADO                     
==========================================================*/

//NURSERY

$totalReporte2023Nursery=count(ControladorRegistros::mostrarCantidadParaReportePdf("2023","nursery"));
$totalReporte2024Nursery=count(ControladorRegistros::mostrarCantidadParaReportePdf("2024","nursery"));
$totalReporte2025Nursery=count(ControladorRegistros::mostrarCantidadParaReportePdf("2025","nursery"));
$totalReporte2026Nursery=count(ControladorRegistros::mostrarCantidadParaReportePdf("2026","nursery"));
$totalReporte2027Nursery=count(ControladorRegistros::mostrarCantidadParaReportePdf("2027","nursery"));
$totalReporte2028Nursery=count(ControladorRegistros::mostrarCantidadParaReportePdf("2028","nursery"));

//PREKINDER

$totalReporte2023PreKinder=count(ControladorRegistros::mostrarCantidadParaReportePdf("2023","PRE KINDER"));
$totalReporte2024PreKinder=count(ControladorRegistros::mostrarCantidadParaReportePdf("2024","PRE KINDER"));
$totalReporte2025PreKinder=count(ControladorRegistros::mostrarCantidadParaReportePdf("2025","PRE KINDER"));
$totalReporte2026PreKinder=count(ControladorRegistros::mostrarCantidadParaReportePdf("2026","PRE KINDER"));
$totalReporte2027PreKinder=count(ControladorRegistros::mostrarCantidadParaReportePdf("2027","PRE KINDER"));
$totalReporte2028PreKinder=count(ControladorRegistros::mostrarCantidadParaReportePdf("2028","PRE KINDER"));

//KINDER

$totalReporte2023Kinder=count(ControladorRegistros::mostrarCantidadParaReportePdf("2023","KINDER"));
$totalReporte2024Kinder=count(ControladorRegistros::mostrarCantidadParaReportePdf("2024","KINDER"));
$totalReporte2025Kinder=count(ControladorRegistros::mostrarCantidadParaReportePdf("2025","KINDER"));
$totalReporte2026Kinder=count(ControladorRegistros::mostrarCantidadParaReportePdf("2026","KINDER"));
$totalReporte2027Kinder=count(ControladorRegistros::mostrarCantidadParaReportePdf("2027","KINDER"));
$totalReporte2028Kinder=count(ControladorRegistros::mostrarCantidadParaReportePdf("2028","KINDER"));

//1ER GRADO

$totalReporte2023Grado1=count(ControladorRegistros::mostrarCantidadParaReportePdf("2023","1 GRADO"));
$totalReporte2024Grado1=count(ControladorRegistros::mostrarCantidadParaReportePdf("2024","1 GRADO"));
$totalReporte2025Grado1=count(ControladorRegistros::mostrarCantidadParaReportePdf("2025","1 GRADO"));
$totalReporte2026Grado1=count(ControladorRegistros::mostrarCantidadParaReportePdf("2026","1 GRADO"));
$totalReporte2027Grado1=count(ControladorRegistros::mostrarCantidadParaReportePdf("2027","1 GRADO"));
$totalReporte2028Grado1=count(ControladorRegistros::mostrarCantidadParaReportePdf("2028","1 GRADO"));

//2DO GRADO

$totalReporte2023Grado2=count(ControladorRegistros::mostrarCantidadParaReportePdf("2023","2 GRADO"));
$totalReporte2024Grado2=count(ControladorRegistros::mostrarCantidadParaReportePdf("2024","2 GRADO"));
$totalReporte2025Grado2=count(ControladorRegistros::mostrarCantidadParaReportePdf("2025","2 GRADO"));
$totalReporte2026Grado2=count(ControladorRegistros::mostrarCantidadParaReportePdf("2026","2 GRADO"));
$totalReporte2027Grado2=count(ControladorRegistros::mostrarCantidadParaReportePdf("2027","2 GRADO"));
$totalReporte2028Grado2=count(ControladorRegistros::mostrarCantidadParaReportePdf("2028","2 GRADO"));

//3er GRADO

$totalReporte2023Grado3=count(ControladorRegistros::mostrarCantidadParaReportePdf("2023","3 GRADO"));
$totalReporte2024Grado3=count(ControladorRegistros::mostrarCantidadParaReportePdf("2024","3 GRADO"));
$totalReporte2025Grado3=count(ControladorRegistros::mostrarCantidadParaReportePdf("2025","3 GRADO"));
$totalReporte2026Grado3=count(ControladorRegistros::mostrarCantidadParaReportePdf("2026","3 GRADO"));
$totalReporte2027Grado3=count(ControladorRegistros::mostrarCantidadParaReportePdf("2027","3 GRADO"));
$totalReporte2028Grado3=count(ControladorRegistros::mostrarCantidadParaReportePdf("2028","3 GRADO"));

//4 GRADO

$totalReporte2023Grado4=count(ControladorRegistros::mostrarCantidadParaReportePdf("2023","4 GRADO"));
$totalReporte2024Grado4=count(ControladorRegistros::mostrarCantidadParaReportePdf("2024","4 GRADO"));
$totalReporte2025Grado4=count(ControladorRegistros::mostrarCantidadParaReportePdf("2025","4 GRADO"));
$totalReporte2026Grado4=count(ControladorRegistros::mostrarCantidadParaReportePdf("2026","4 GRADO"));
$totalReporte2027Grado4=count(ControladorRegistros::mostrarCantidadParaReportePdf("2027","4 GRADO"));
$totalReporte2028Grado4=count(ControladorRegistros::mostrarCantidadParaReportePdf("2028","4 GRADO"));


//5 GRADO

$totalReporte2023Grado5=count(ControladorRegistros::mostrarCantidadParaReportePdf("2023","5 GRADO"));
$totalReporte2024Grado5=count(ControladorRegistros::mostrarCantidadParaReportePdf("2024","5 GRADO"));
$totalReporte2025Grado5=count(ControladorRegistros::mostrarCantidadParaReportePdf("2025","5 GRADO"));
$totalReporte2026Grado5=count(ControladorRegistros::mostrarCantidadParaReportePdf("2026","5 GRADO"));
$totalReporte2027Grado5=count(ControladorRegistros::mostrarCantidadParaReportePdf("2027","5 GRADO"));
$totalReporte2028Grado5=count(ControladorRegistros::mostrarCantidadParaReportePdf("2028","5 GRADO"));

//6 GRADO

$totalReporte2023Grado6=count(ControladorRegistros::mostrarCantidadParaReportePdf("2023","6 GRADO"));
$totalReporte2024Grado6=count(ControladorRegistros::mostrarCantidadParaReportePdf("2024","6 GRADO"));
$totalReporte2025Grado6=count(ControladorRegistros::mostrarCantidadParaReportePdf("2025","6 GRADO"));
$totalReporte2026Grado6=count(ControladorRegistros::mostrarCantidadParaReportePdf("2026","6 GRADO"));
$totalReporte2027Grado6=count(ControladorRegistros::mostrarCantidadParaReportePdf("2027","6 GRADO"));
$totalReporte2028Grado6=count(ControladorRegistros::mostrarCantidadParaReportePdf("2028","6 GRADO"));

//7 GRADO

$totalReporte2023Grado7=count(ControladorRegistros::mostrarCantidadParaReportePdf("2023","7 GRADO"));
$totalReporte2024Grado7=count(ControladorRegistros::mostrarCantidadParaReportePdf("2024","7 GRADO"));
$totalReporte2025Grado7=count(ControladorRegistros::mostrarCantidadParaReportePdf("2025","7 GRADO"));
$totalReporte2026Grado7=count(ControladorRegistros::mostrarCantidadParaReportePdf("2026","7 GRADO"));
$totalReporte2027Grado7=count(ControladorRegistros::mostrarCantidadParaReportePdf("2027","7 GRADO"));
$totalReporte2028Grado7=count(ControladorRegistros::mostrarCantidadParaReportePdf("2028","7 GRADO"));

//8 GRADO

$totalReporte2023Grado8=count(ControladorRegistros::mostrarCantidadParaReportePdf("2023","8 GRADO"));
$totalReporte2024Grado8=count(ControladorRegistros::mostrarCantidadParaReportePdf("2024","8 GRADO"));
$totalReporte2025Grado8=count(ControladorRegistros::mostrarCantidadParaReportePdf("2025","8 GRADO"));
$totalReporte2026Grado8=count(ControladorRegistros::mostrarCantidadParaReportePdf("2026","8 GRADO"));
$totalReporte2027Grado8=count(ControladorRegistros::mostrarCantidadParaReportePdf("2027","8 GRADO"));
$totalReporte2028Grado8=count(ControladorRegistros::mostrarCantidadParaReportePdf("2028","8 GRADO"));

//9 GRADO

$totalReporte2023Grado9=count(ControladorRegistros::mostrarCantidadParaReportePdf("2023","9 GRADO"));
$totalReporte2024Grado9=count(ControladorRegistros::mostrarCantidadParaReportePdf("2024","9 GRADO"));
$totalReporte2025Grado9=count(ControladorRegistros::mostrarCantidadParaReportePdf("2025","9 GRADO"));
$totalReporte2026Grado9=count(ControladorRegistros::mostrarCantidadParaReportePdf("2026","9 GRADO"));
$totalReporte2027Grado9=count(ControladorRegistros::mostrarCantidadParaReportePdf("2027","9 GRADO"));
$totalReporte2028Grado9=count(ControladorRegistros::mostrarCantidadParaReportePdf("2028","9 GRADO"));

//10 GRADO

$totalReporte2023Grado10=count(ControladorRegistros::mostrarCantidadParaReportePdf("2023","10 GRADO"));
$totalReporte2024Grado10=count(ControladorRegistros::mostrarCantidadParaReportePdf("2024","10 GRADO"));
$totalReporte2025Grado10=count(ControladorRegistros::mostrarCantidadParaReportePdf("2025","10 GRADO"));
$totalReporte2026Grado10=count(ControladorRegistros::mostrarCantidadParaReportePdf("2026","10 GRADO"));
$totalReporte2027Grado10=count(ControladorRegistros::mostrarCantidadParaReportePdf("2027","10 GRADO"));
$totalReporte2028Grado10=count(ControladorRegistros::mostrarCantidadParaReportePdf("2028","10 GRADO"));
//11 GRADO

$totalReporte2023Grado11=count(ControladorRegistros::mostrarCantidadParaReportePdf("2023","11 GRADO"));
$totalReporte2024Grado11=count(ControladorRegistros::mostrarCantidadParaReportePdf("2024","11 GRADO"));
$totalReporte2025Grado11=count(ControladorRegistros::mostrarCantidadParaReportePdf("2025","11 GRADO"));
$totalReporte2026Grado11=count(ControladorRegistros::mostrarCantidadParaReportePdf("2026","11 GRADO"));
$totalReporte2027Grado11=count(ControladorRegistros::mostrarCantidadParaReportePdf("2027","11 GRADO"));
$totalReporte2028Grado11=count(ControladorRegistros::mostrarCantidadParaReportePdf("2028","11 GRADO"));

date_default_timezone_set('America/Lima');

ob_end_clean();

class MYPDF extends TCPDF{
    public function Header()
    {
            $bMargin = $this->getBreakMargin();
            $auto_page_break = $this->AutoPageBreak;
            $this->SetAutoPageBreak(false, 0);
            $img_file = 'logo-escudo-lima-villa-college.png';
            $this->Image($img_file, 85, 8, 30, 25, '', '', '', false, 30, '', false, false, 0);
            $this->SetAutoPageBreak($auto_page_break, $bMargin);
            $this->setPageMark();
    }
}

$pdf = new MYPDF(PDF_PAGE_ORIENTATION, 'mm', 'A4', true, 'UTF-8', false);
 
//Establecer margenes del PDF
$pdf->SetMargins(20, 35, 25);
$pdf->SetHeaderMargin(20);
$pdf->setPrintFooter(false);
$pdf->setPrintHeader(true); //Eliminar la linea superior del PDF por defecto
$pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM); //Activa o desactiva el modo de salto de página automático
 
//Informacion del PDF
$pdf->SetCreator('Gianfranco Flores Pacheco');
$pdf->SetAuthor('Gianfranco Flores');
$pdf->SetTitle('Informe Open 2023');
 
/** Eje de Coordenadas
 *          Y
 *          -
 *          - 
 *          -
 *  X ------------- X
 *          -
 *          -
 *          -
 *          Y
 * 
 * $pdf->SetXY(X, Y);
 */

//Agregando la primera página
$pdf->AddPage();
$pdf->SetFont('helvetica','B',10); //Tipo de fuente y tamaño de letra
$pdf->SetXY(150, 20);


$pdf->Write(0, 'Fecha: '. date('d-m-Y'));
$pdf->SetXY(150, 25);
$pdf->Write(0, 'Hora: '. date('h:i A'));

$canal ='WebDeveloper';
$pdf->SetFont('helvetica','B',10); //Tipo de fuente y tamaño de letra
$pdf->SetXY(15, 20); //Margen en X y en Y
$pdf->SetTextColor(204,0,0);
$pdf->Write(0, 'Evento: Open LVC');
$pdf->SetTextColor(0, 0, 0); //Color Negrita
$pdf->SetXY(15, 25);
$pdf->Write(0,  "Sistema de asistencia QR");


$pdf->Ln(35); //Salto de Linea
$pdf->Cell(40,26,'',0,0,'C');
/*$pdf->SetDrawColor(50, 0, 0, 0);
$pdf->SetFillColor(100, 0, 0, 0); */
$pdf->SetTextColor(34,68,136);
//$pdf->SetTextColor(255,204,0); //Amarillo
//$pdf->SetTextColor(34,68,136); //Azul
//$pdf->SetTextColor(153,204,0); //Verde
//$pdf->SetTextColor(204,0,0); //Marron
//$pdf->SetTextColor(245,245,205); //Gris claro
//$pdf->SetTextColor(100, 0, 0); //Color Carne
$pdf->SetFont('helvetica','B', 15); 
$pdf->Cell(100,6,'REPORTE ASISTENCIA DE POSTULANTES',0,0,'C');


$pdf->Ln(10); //Salto de Linea
$pdf->SetTextColor(0, 0, 0); 

//Almando la cabecera de la Tabla
$pdf->SetFillColor(128, 128, 128);
$pdf->SetFont('helvetica','B',12); //La B es para letras en Negritas
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(30,6,'',1,0,'C',1);
$pdf->SetFillColor(128, 0, 128);
$pdf->Cell(20,6,'2023',1,0,'C',1);
$pdf->Cell(20,6,'2024',1,0,'C',1);
$pdf->Cell(20,6,'2025',1,0,'C',1);
$pdf->Cell(20,6,'2026',1,0,'C',1); 
$pdf->Cell(20,6,'2027',1,0,'C',1);
$pdf->Cell(20,6,'2028',1,0,'C',1); 

$pdf->SetFillColor(160, 37, 63 );
$pdf->Cell(20,6,'TOTAL',1,1,'C',1); 



/*El 1 despues de  Fecha Ingreso indica que hasta alli 
llega la linea */
$pdf->SetFillColor(128, 0, 128);

$pdf->SetFont('helvetica','B',10);

$pdf->Cell(30,6,"NURSERY",1,0,'C',1);
$pdf->SetFont('helvetica','',10);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(20,6,$totalReporte2023Nursery,1,0,'C');
$pdf->Cell(20,6,$totalReporte2024Nursery,1,0,'C');
$pdf->Cell(20,6,$totalReporte2025Nursery,1,0,'C');
$pdf->Cell(20,6,$totalReporte2026Nursery,1,0,'C');
$pdf->Cell(20,6,$totalReporte2027Nursery,1,0,'C');
$pdf->Cell(20,6,$totalReporte2028Nursery,1,0,'C');
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFillColor(160, 37, 63  );
$pdf->Cell(20,6,$totalNursery,1,1,'C',1);


$pdf->SetFillColor(128, 0, 128);
$pdf->SetFont('helvetica','B',10);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(30,6,"PRE KINDER",1,0,'C',1);
$pdf->SetFont('helvetica','',10);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(20,6,$totalReporte2023PreKinder,1,0,'C');
$pdf->Cell(20,6,$totalReporte2024PreKinder,1,0,'C');
$pdf->Cell(20,6,$totalReporte2025PreKinder,1,0,'C');
$pdf->Cell(20,6,$totalReporte2026PreKinder,1,0,'C');
$pdf->Cell(20,6,$totalReporte2027PreKinder,1,0,'C');
$pdf->Cell(20,6,$totalReporte2028PreKinder,1,0,'C');
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFillColor(160, 37, 63  );
$pdf->Cell(20,6,$totalPrekinder,1,1,'C',1);

$pdf->SetFillColor(128, 0, 128);
$pdf->SetFont('helvetica','B',10);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(30,6,"KINDER",1,0,'C',1);
$pdf->SetFont('helvetica','',10);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(20,6,$totalReporte2023Kinder,1,0,'C');
$pdf->Cell(20,6,$totalReporte2024Kinder,1,0,'C');
$pdf->Cell(20,6,$totalReporte2025Kinder,1,0,'C');
$pdf->Cell(20,6,$totalReporte2026Kinder,1,0,'C');
$pdf->Cell(20,6,$totalReporte2027Kinder,1,0,'C');
$pdf->Cell(20,6,$totalReporte2028Kinder,1,0,'C');
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFillColor(160, 37, 63  );
$pdf->Cell(20,6,$totalKinder,1,1,'C',1);

$pdf->SetFillColor(128, 0, 128);
$pdf->SetFont('helvetica','B',10);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(30,6,"1ER GRADO",1,0,'C',1);
$pdf->SetFont('helvetica','',10);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(20,6,$totalReporte2023Grado1,1,0,'C');
$pdf->Cell(20,6,$totalReporte2024Grado1,1,0,'C');
$pdf->Cell(20,6,$totalReporte2025Grado1,1,0,'C');
$pdf->Cell(20,6,$totalReporte2026Grado1,1,0,'C');
$pdf->Cell(20,6,$totalReporte2027Grado1,1,0,'C');
$pdf->Cell(20,6,$totalReporte2028Grado1,1,0,'C');
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFillColor(160, 37, 63  );
$pdf->Cell(20,6,$totalGrado1,1,1,'C',1);

$pdf->SetFillColor(128, 0, 128);
$pdf->SetFont('helvetica','B',10);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(30,6,"2DO GRADO",1,0,'C',1);
$pdf->SetFont('helvetica','',10);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(20,6,$totalReporte2023Grado2,1,0,'C');
$pdf->Cell(20,6,$totalReporte2024Grado2,1,0,'C');
$pdf->Cell(20,6,$totalReporte2025Grado2,1,0,'C');
$pdf->Cell(20,6,$totalReporte2026Grado2,1,0,'C');
$pdf->Cell(20,6,$totalReporte2027Grado2,1,0,'C');
$pdf->Cell(20,6,$totalReporte2028Grado2,1,0,'C');
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFillColor(160, 37, 63  );
$pdf->Cell(20,6,$totalGrado2,1,1,'C',1);

$pdf->SetFillColor(128, 0, 128);
$pdf->SetFont('helvetica','B',10);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(30,6,"3ER GRADO",1,0,'C',1);
$pdf->SetFont('helvetica','',10);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(20,6,$totalReporte2023Grado3,1,0,'C');
$pdf->Cell(20,6,$totalReporte2024Grado3,1,0,'C');
$pdf->Cell(20,6,$totalReporte2025Grado3,1,0,'C');
$pdf->Cell(20,6,$totalReporte2026Grado3,1,0,'C');
$pdf->Cell(20,6,$totalReporte2027Grado3,1,0,'C');
$pdf->Cell(20,6,$totalReporte2028Grado3,1,0,'C');
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFillColor(160, 37, 63  );
$pdf->Cell(20,6,$totalGrado3,1,1,'C',1);

$pdf->SetFillColor(128, 0, 128);
$pdf->SetFont('helvetica','B',10);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(30,6,"4TO GRADO",1,0,'C',1);
$pdf->SetFont('helvetica','',10);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(20,6,$totalReporte2023Grado4,1,0,'C');
$pdf->Cell(20,6,$totalReporte2024Grado4,1,0,'C');
$pdf->Cell(20,6,$totalReporte2025Grado4,1,0,'C');
$pdf->Cell(20,6,$totalReporte2026Grado4,1,0,'C');
$pdf->Cell(20,6,$totalReporte2027Grado4,1,0,'C');
$pdf->Cell(20,6,$totalReporte2028Grado4,1,0,'C');
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFillColor(160, 37, 63  );
$pdf->Cell(20,6,$totalGrado4,1,1,'C',1);

$pdf->SetFillColor(128, 0, 128);
$pdf->SetFont('helvetica','B',10);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(30,6,"5TO GRADO",1,0,'C',1);
$pdf->SetFont('helvetica','',10);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(20,6,$totalReporte2023Grado5,1,0,'C');
$pdf->Cell(20,6,$totalReporte2024Grado5,1,0,'C');
$pdf->Cell(20,6,$totalReporte2025Grado5,1,0,'C');
$pdf->Cell(20,6,$totalReporte2026Grado5,1,0,'C');
$pdf->Cell(20,6,$totalReporte2027Grado5,1,0,'C');
$pdf->Cell(20,6,$totalReporte2028Grado5,1,0,'C');
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFillColor(160, 37, 63  );
$pdf->Cell(20,6,$totalGrado5,1,1,'C',1);

$pdf->SetFillColor(128, 0, 128);
$pdf->SetFont('helvetica','B',10);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(30,6,"6TO GRADO",1,0,'C',1);
$pdf->SetFont('helvetica','',10);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(20,6,$totalReporte2023Grado6,1,0,'C');
$pdf->Cell(20,6,$totalReporte2024Grado6,1,0,'C');
$pdf->Cell(20,6,$totalReporte2025Grado6,1,0,'C');
$pdf->Cell(20,6,$totalReporte2026Grado6,1,0,'C');
$pdf->Cell(20,6,$totalReporte2027Grado6,1,0,'C');
$pdf->Cell(20,6,$totalReporte2028Grado6,1,0,'C');
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFillColor(160, 37, 63  );
$pdf->Cell(20,6,$totalGrado6,1,1,'C',1);

$pdf->SetFillColor(128, 0, 128);
$pdf->SetFont('helvetica','B',10);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(30,6,"7MO GRADO",1,0,'C',1);
$pdf->SetFont('helvetica','',10);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(20,6,$totalReporte2023Grado7,1,0,'C');
$pdf->Cell(20,6,$totalReporte2024Grado7,1,0,'C');
$pdf->Cell(20,6,$totalReporte2025Grado7,1,0,'C');
$pdf->Cell(20,6,$totalReporte2026Grado7,1,0,'C');
$pdf->Cell(20,6,$totalReporte2027Grado7,1,0,'C');
$pdf->Cell(20,6,$totalReporte2028Grado7,1,0,'C');
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFillColor(160, 37, 63  );
$pdf->Cell(20,6,$totalGrado7,1,1,'C',1);

$pdf->SetFillColor(128, 0, 128);
$pdf->SetFont('helvetica','B',10);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(30,6,"8VO GRADO",1,0,'C',1);
$pdf->SetFont('helvetica','',10);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(20,6,$totalReporte2023Grado8,1,0,'C');
$pdf->Cell(20,6,$totalReporte2024Grado8,1,0,'C');
$pdf->Cell(20,6,$totalReporte2025Grado8,1,0,'C');
$pdf->Cell(20,6,$totalReporte2026Grado8,1,0,'C');
$pdf->Cell(20,6,$totalReporte2027Grado8,1,0,'C');
$pdf->Cell(20,6,$totalReporte2028Grado8,1,0,'C');
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFillColor(160, 37, 63  );
$pdf->Cell(20,6,$totalGrado8,1,1,'C',1);

$pdf->SetFillColor(128, 0, 128);
$pdf->SetFont('helvetica','B',10);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(30,6,"9NO GRADO",1,0,'C',1);
$pdf->SetFont('helvetica','',10);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(20,6,$totalReporte2023Grado9,1,0,'C');
$pdf->Cell(20,6,$totalReporte2024Grado9,1,0,'C');
$pdf->Cell(20,6,$totalReporte2025Grado9,1,0,'C');
$pdf->Cell(20,6,$totalReporte2026Grado9,1,0,'C');
$pdf->Cell(20,6,$totalReporte2027Grado9,1,0,'C');
$pdf->Cell(20,6,$totalReporte2028Grado9,1,0,'C');
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFillColor(160, 37, 63  );
$pdf->Cell(20,6,$totalGrado9,1,1,'C',1);

$pdf->SetFillColor(128, 0, 128);
$pdf->SetFont('helvetica','B',10);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(30,6,"10MO GRADO",1,0,'C',1);
$pdf->SetFont('helvetica','',10);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(20,6,$totalReporte2023Grado10,1,0,'C');
$pdf->Cell(20,6,$totalReporte2024Grado10,1,0,'C');
$pdf->Cell(20,6,$totalReporte2025Grado10,1,0,'C');
$pdf->Cell(20,6,$totalReporte2026Grado10,1,0,'C');
$pdf->Cell(20,6,$totalReporte2027Grado10,1,0,'C');
$pdf->Cell(20,6,$totalReporte2028Grado10,1,0,'C');
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFillColor(160, 37, 63  );
$pdf->Cell(20,6,$totalGrado10,1,1,'C',1);

$pdf->SetFillColor(128, 0, 128);
$pdf->SetFont('helvetica','B',10);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(30,6,"11MO GRADO",1,0,'C',1);
$pdf->SetFont('helvetica','',10);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(20,6,$totalReporte2023Grado11,1,0,'C');
$pdf->Cell(20,6,$totalReporte2024Grado11,1,0,'C');
$pdf->Cell(20,6,$totalReporte2025Grado11,1,0,'C');
$pdf->Cell(20,6,$totalReporte2026Grado11,1,0,'C');
$pdf->Cell(20,6,$totalReporte2027Grado11,1,0,'C');
$pdf->Cell(20,6,$totalReporte2028Grado11,1,0,'C');
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFillColor(160, 37, 63  );
$pdf->Cell(20,6,$totalGrado11,1,1,'C',1);
$pdf->SetFont('helvetica','B',12);
$pdf->SetFillColor(160, 37, 63  );
$pdf->SetTextColor(255, 255, 255); 

$pdf->Cell(30,6,"TOTAL",1,0,'C',1);

$pdf->SetFont('helvetica','',10);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFillColor(160, 37, 63  );
$pdf->Cell(20,6,$totalReporte2023,1,0,'C',1);
$pdf->Cell(20,6,$totalReporte2024,1,0,'C',1);
$pdf->Cell(20,6,$totalReporte2025,1,0,'C',1);
$pdf->Cell(20,6,$totalReporte2026,1,0,'C',1);
$pdf->Cell(20,6,$totalReporte2027,1,0,'C',1);
$pdf->Cell(20,6,$totalReporte2028,1,0,'C',1);
$pdf->Cell(20,6,$totalGeneral,1,1,'C',1);
//SQL para consultas Empleados
$fechaInit = "12-45-5";
$fechaFin  = "45/78/7";

//$sqlTrabajadores = ("SELECT * FROM trabajadores WHERE (fecha_ingreso>='$fechaInit' and fecha_ingreso<='$fechaFin') ORDER BY fecha_ingreso ASC");
//$sqlTrabajadores = ("SELECT * FROM trabajadores");
//$query = mysqli_query($con, $sqlTrabajadores);

// while ($dataRow = mysqli_fetch_array($query)) {
//         $pdf->Cell(40,6,($dataRow['nombre']),1,0,'C');
//         $pdf->Cell(60,6,$dataRow['email'],1,0,'C');
//         $pdf->Cell(35,6,('$ '. $dataRow['sueldo']),1,0,'C');
//         $pdf->Cell(35,6,(date('m-d-Y', strtotime($dataRow['fecha_ingreso']))),1,1,'C');
//     }


//$pdf->AddPage(); //Agregar nueva Pagina

$pdf->Output('Resumen_Pedido_'.date('d_m_y').'.pdf', 'I'); 
// Output funcion que recibe 2 parameros, el nombre del archivo, ver archivo o descargar,
// La D es para Forzar una descarga
